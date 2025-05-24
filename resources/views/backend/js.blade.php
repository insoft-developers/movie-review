
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