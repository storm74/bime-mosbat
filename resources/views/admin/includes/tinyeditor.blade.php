
    <script src="{{asset('admin_assets/js/tinymce/tinymce.min.js')}}"></script>

    <script>
        var editor_config = {
            path_absolute : "{{asset('/')}}",
            selector: "textarea",
            directionality : 'rtl',
            language: 'fa_IR',
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | forecolor backcolor",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>

    {{--<script>--}}
        {{--tinymce.init({--}}
            {{--selector:'textarea',--}}
            {{--plugins : 'textcolor,table,colorpicker',--}}
            {{--directionality : 'rtl',--}}
            {{--language: 'fa_IR',--}}
            {{--encoding: 'xml',--}}
            {{--// plugins: "advlist",--}}
            {{--// toolbar: "code",--}}
            {{--external_plugins:{--}}
                {{--'textcolor':'plugins/textcolor/plugin.min.js',--}}
                {{--'table':'plugins/table/plugin.min.js',--}}
                {{--'colorpicker':'plugins/colorpicker/plugin.min.js',--}}
                {{--'image':'plugins/image/plugin.min.js',--}}
                {{--'media':'plugins/media/plugin.min.js',--}}
            {{--}--}}
        {{--});--}}
    {{--</script>--}}


