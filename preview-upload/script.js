$(document).ready(function() {

    var readUrl = function(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.readAsDataURL(input.files[0]);

            reader.onload = function(e) {
                $(".avatar").attr('src', e.target.result);
            }

        }
    }

    $(".file-upload").on('change', function() {
        readUrl(this);
    });

    $(".avatar").click(function() {
        var btn = $(".file-upload");
        btn.trigger('click');
    });
}
);

