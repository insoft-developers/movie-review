
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