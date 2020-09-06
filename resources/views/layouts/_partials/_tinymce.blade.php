@push('scripts')
    <script src="https://cdn.tiny.cloud/1/aqcco551pzq6qvxnbs7o48nwme7zvrmp9zt4hxnw76ewl9lh/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>

    <script>
        /*
         * https://www.tiny.cloud/docs/general-configuration-guide/basic-setup/
         */
        tinymce.init({
            selector: 'textarea.richtext',  // change this value according to your HTML
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak code',
            // toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent',
            toolbar: 'styleselect | bold italic | ' +
                'bullist numlist outdent indent | link image | print preview media fullpage  code| ' +
                'forecolor backcolor emoticons | help',
            // toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
            //     'bullist numlist outdent indent | link image | print preview media fullpage  code| ' +
            //     'forecolor backcolor emoticons | help',
            // menubar: 'file edit view',
            menubar: '',
            a_plugin_option: true,
            a_configuration_option: 400,
            // inline: true,
            statusbar: false
        });

    </script>
@endpush
