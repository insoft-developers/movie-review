@if ($view == 'movie-list')
    <script>
       
            CKEDITOR.replace('download');
        
      
        

        function tambah() {
            save_method = "add";
            $('input[name=_method]').val('POST');
            $("#modal-tambah").modal("show");
            $(".modal-title").text('Tambah Movie');
            $(".edit-container").hide();
            $("#imdb_id").removeAttr("readonly");
            reset_form();
        }

        function reset_form() {
            $('#id').val("");
            $("#imdb_id").val("");
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
            ajax: "{{ route('movie.table') }}",
            order: [
                [0, "desc"]
            ],
            columns: [{
                    data: 'id',
                    name: 'id',
                    searchable: false
                },
                {
                    data: 'imdb_id',
                    name: 'imdb_id',
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
                
                {
                    data: 'poster',
                    name: 'poster',
                },
                {
                    data: 'title',
                    name: 'title',
                },
                {
                    data: 'category',
                    name: 'category',
                },
                {
                    data: 'genre',
                    name: 'genre',
                },
                {
                    data: 'year',
                    name: 'year',
                },{
                    data: 'rated',
                    name: 'rated',
                },{
                    data: 'released',
                    name: 'released',
                },{
                    data: 'run_time',
                    name: 'run_time',
                },{
                    data: 'director',
                    name: 'director',
                },{
                    data: 'actors',
                    name: 'actors',
                },{
                    data: 'plot',
                    name: 'plot',
                },{
                    data: 'is_popular',
                    name: 'is_popular',
                },{
                    data: 'is_new',
                    name: 'is_new',
                },{
                    data: 'is_anime',
                    name: 'is_anime',
                },{
                    data: 'language',
                    name: 'language',
                },{
                    data: 'country',
                    name: 'country',
                },{
                    data: 'awards',
                    name: 'awards',
                },{
                    data: 'imdb_rating',
                    name: 'imdb_rating',
                },{
                    data: 'type',
                    name: 'type',
                },{
                    data: 'dvd',
                    name: 'dvd',
                },{
                    data: 'box_office',
                    name: 'box_office',
                },{
                    data: 'production',
                    name: 'production',
                },{
                    data: 'website',
                    name: 'website',
                },{
                    data: 'created_at',
                    name: 'created_at',
                },
               
            ]
        });


        $("#form-tambah").submit(function(e) {
            loading("#btn-save");

            e.preventDefault();
            var id = $('#id').val();
            if (save_method == "add") url = "{{ url('/mvadmin/movie') }}";
            else url = "{{ url('/mvadmin/movie') . '/' }}" + id;
            var form = new FormData($('#modal-tambah form')[0]);
            var download_text = CKEDITOR.instances.download.getData();
            form.append('download', download_text);
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
                url: "{{ url('/mvadmin/movie') }}" + "/" + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('#modal-tambah').modal("show");
                    $('.modal-title').text("Edit Movie");
                    $(".edit-container").show();
                    $("#imdb_id").attr("readonly", true);
                    $('#id').val(data.id);
                    $("#imdb_id").val(data.imdb_id);
                    $("#poster").val(data.poster);
                    $("#title").val(data.title);
                    $("#year").val(data.year);
                    $("#rated").val(data.rated);
                    $("#released").val(data.released);
                    $("#run_time").val(data.run_time);
                    $("#genre").val(data.genre);
                    $("#director").val(data.director);
                    $("#writer").val(data.writer);
                    $("#actors").val(data.actors);
                    $("#plot").val(data.plot);
                    $("#category").val(data.category);
                    $("#sub_category").val(data.genre);
                    
                    CKEDITOR.instances.download.setData(data.download);
                    // $("#is_banner").val(data.is_banner);
                    $("#is_popular").val(data.is_popular);
                    $("#is_new").val(data.is_new);
                    $("#is_anime").val(data.is_anime);
                    $("#language").val(data.language);
                    $("#country").val(data.country);
                    $("#awards").val(data.awards);
                    $("#ratings").val(data.ratings);
                    $("#metascore").val(data.metascore);
                    $("#imdb_rating").val(data.imdb_rating);
                    $("#imdb_votes").val(data.imdb_votes);
                    $("#type").val(data.type);
                    $("#dvd").val(data.dvd);
                    $("#box_office").val(data.box_ofice);
                    $("#production").val(data.production);
                    $("#website").val(data.website);
                    $("#slug").val(data.slug);
                  
                }
            });
        }

       
        function deleteData(id) {
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            var pop = confirm('Hapus Data ?');

            if (pop === true) {
                $.ajax({
                    url: "{{ url('mvadmin/movie') }}" + "/" + id,
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
