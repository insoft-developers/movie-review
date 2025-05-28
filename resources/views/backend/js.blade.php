<script>
    function loading(selected) {
        $(selected).text("Processing.....");
        $(selected).attr("disabled", true);
    }

    function unloading(selected) {
        $(selected).text("Save");
        $(selected).removeAttr("disabled");
    }
</script>
@include('backend.custom_js.movie_js')
@include('backend.custom_js.category_js')
@include('backend.custom_js.subcategory_js')
@include('backend.custom_js.how_to_js')
@include('backend.custom_js.footer_js')
@include('backend.custom_js.admin_js')
@include('backend.custom_js.setting_js')

@if ($view == 'report-dead-link')
    <script>
        function submit(id) {
            var comment = $("#comment_" + id).val();
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            if (comment == '') {
                alert('Comment masih kosong...!');
            } else {

                $.ajax({
                    url: "{{ route('admin.reply') }}",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        "id": id,
                        "comment": comment,
                        "_token": csrf_token
                    },
                    success: function(data) {
                        window.location.href = window.location.href;

                    }
                })
            }
        }


        function delete_comment(id) {
            var popup = confirm('Hapus Comment Ini...?');
            if (popup === true) {
                var csrf_token = $('meta[name="csrf-token"]').attr('content');


                $.ajax({
                    url: "{{ route('comment.delete') }}",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        "id": id,
                        "_token": csrf_token
                    },
                    success: function(data) {
                        window.location.href = window.location.href;

                    }
                });
            }



        }
    </script>
@endif
