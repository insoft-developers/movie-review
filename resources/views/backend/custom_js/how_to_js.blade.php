
@if($view == 'how-to')
<script>
CKEDITOR.replace('download_info', {
    allowedContent: true

});


</script>
@endif

@if($view == 'report-dead-link')
<script>
CKEDITOR.replace('report_dead_link',{allowedContent: true
});


</script>
@endif