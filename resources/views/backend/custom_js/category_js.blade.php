@if ($view == 'category')
    <script>
       
        
        function tambah() {
            save_method = "add";
            $('input[name=_method]').val('POST');
            $("#modal-tambah").modal("show");
            $(".modal-title").text('Tambah Category');
            reset_form();
        }

        function reset_form() {
            $('#id').val("");
            $("#category_name").val("");
            $("#slug").val("");
        }
        
        var table = $('#table-list').DataTable({
            processing: true,
            serverSide: true,
            dom: 'Blfrtip',
            buttons: [
                'print', {
                    extend: 'pdf',
                    orientation: 'landscape'
                },
                'excel'
            ],
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, 'All'],
            ],
            ajax: "{{ route('category.table') }}",
            order: [
                [0, "desc"]
            ],
            columns: [{
                    data: 'id',
                    name: 'id',
                    searchable: false
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
                
                {
                    data: 'category_name',
                    name: 'category_name',
                },
                {
                    data: 'slug',
                    name: 'slug',
                },
               
               
            ]
        });


        $("#form-tambah").submit(function(e) {
            loading("#btn-save");

            e.preventDefault();
            var id = $('#id').val();
            if (save_method == "add") url = "{{ url('/mvadmin/category') }}";
            else url = "{{ url('/mvadmin/category') . '/' }}" + id;
            var form = new FormData($('#modal-tambah form')[0]);
            $.ajax({
                url: url,
                type: "POST",
                data: form,
                contentType: false,
                processData: false,
                success: function(data) {
                    unloading("#btn-save");
                    if (data.success) {
                        $('#modal-tambah').modal('hide');
                        table.ajax.reload(null, false);
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Failed',
                            html: data.message,
                            showConfirmButton: false,
                            scrollbarPadding: false,
                        });
                    }
                }

            });
        });

        function editData(id) {
            save_method = "edit";
            $('input[name=_method]').val('PATCH');
            $.ajax({
                url: "{{ url('/mvadmin/category') }}" + "/" + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('#modal-tambah').modal("show");
                    $('.modal-title').text("Edit Category");
                    $('#id').val(data.id);
                    $("#category_name").val(data.category_name);
                    
                }
            });
        }

       
        function deleteData(id) {
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            var pop = confirm('Hapus Data ?');

            if (pop === true) {
                $.ajax({
                    url: "{{ url('mvadmin/category') }}" + "/" + id,
                    type: "DELETE",
                    dataType: "JSON",
                    data: {"id":id, '_token':csrf_token},
                    success: function(data) {
                        table.ajax.reload(null, false);
                    }
                })
            }
        }


        $("#category").change(function(){
            var cat = $(this).val();
            change_category(cat, null);
        });


        function change_category(cat, selected) {
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "{{ url('mvadmin/get_sub_category') }}",
                type: "POST",
                dataType: "JSON",
                data: {"cat":cat, "_token":csrf_token},
                success: function(data) {
                    var html = '';
                    html += '<option value=""> - Pilih - </option>';
                    for(var i=0; i<data.length; i++) {
                        html += '<option value="'+data[i].slug+'">'+data[i].subcategory_name+'</option>';
                    }
                    $("#sub_category").html(html);
                    if(selected !== null) {
                        $("#sub_category").val(selected);
                    }

                }
            });
        }
    </script>
@endif
