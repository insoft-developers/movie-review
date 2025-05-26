@if ($view == 'setting')
    <script>
       
        
       

        function reset_form() {
          
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
            ajax: "{{ route('setting.table') }}",
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
                    data: 'app_name',
                    name: 'app_name',
                },
                {
                    data: 'app_title',
                    name: 'app_title',
                },
                {
                    data: 'app_icon',
                    name: 'app_icon',
                },
                {
                    data: 'app_email',
                    name: 'app_email',
                },
                {
                    data: 'app_phone',
                    name: 'app_phone',
                },
                {
                    data: 'app_address',
                    name: 'app_address',
                },
                {
                    data: 'app_contact_name',
                    name: 'app_contact_name',
                },
               
               
            ]
        });


        $("#form-tambah").submit(function(e) {
            loading("#btn-save");

            e.preventDefault();
            var id = $('#id').val();
            if (save_method == "add") url = "{{ url('/mvadmin/setting') }}";
            else url = "{{ url('/mvadmin/setting') . '/' }}" + id;
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
                url: "{{ url('/mvadmin/setting') }}" + "/" + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('#modal-tambah').modal("show");
                    $('.modal-title').text("Edit Setting");
                    $('#id').val(data.id);
                    $('#app_name').val(data.app_name);
                    $('#app_title').val(data.app_title);
                    $('#app_icon').val("");
                    $('#app_email').val(data.app_email);
                    $('#app_phone').val(data.app_phone);
                    $('#app_address').val(data.app_address);
                    $('#app_contact_name').val(data.app_contact_name);
                    
                    
                }
            });
        }

       
        function deleteData(id) {
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            var pop = confirm('Hapus Data ?');

            if (pop === true) {
                $.ajax({
                    url: "{{ url('mvadmin/admin') }}" + "/" + id,
                    type: "DELETE",
                    dataType: "JSON",
                    data: {"id":id, '_token':csrf_token},
                    success: function(data) {
                        table.ajax.reload(null, false);
                    }
                })
            }
        }


       
    </script>
@endif
