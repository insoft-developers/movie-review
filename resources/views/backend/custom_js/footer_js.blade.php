@if ($view == 'footer-menu')
    <script>
        CKEDITOR.replace('request_us', {
            allowedContent: true
        });
        CKEDITOR.replace('dmca', {
            allowedContent: true
        });
        CKEDITOR.replace('contact_us', {
            allowedContent: true
        });
        CKEDITOR.replace('about_us', {
            allowedContent: true
        });
        CKEDITOR.replace('site_disclaimer', {
            allowedContent: true
        });
    </script>
@endif
