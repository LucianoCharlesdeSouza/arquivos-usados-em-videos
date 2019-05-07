$(document).ready(function() {
    tinymce.init({
        selector: ".tinyArea", theme: "modern", width: 680, height: 300,
        language: 'pt_BR',
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
        ],
        toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
        toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
        image_advtab: true,

        relative_urls: false,
        remove_script_host: false,

        external_filemanager_path: BASE + "App/Library/filemanager/",
        filemanager_title: "Serviço de Upload",
        external_plugins: {"filemanager": BASE + "App/Library/filemanager/plugin.min.js"}


    });


    $('.iframe-btn').fancybox({
        'type': 'iframe',
        'autoScale': false
    });

});

