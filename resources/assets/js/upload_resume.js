$(document).ready(function() {

    $('#resume_chooser_form').submit(function(e) { // capture submit
        e.preventDefault();
        var fd = new FormData(this); // XXX: Neex AJAX2

        // You could show a loading image for example...

        $.ajax({
            url: $(this).attr('action'),
            xhr: function() { // custom xhr (is the best)

                var xhr = new XMLHttpRequest();
                var total = 0;

                // Get the total size of files
                $.each(document.getElementById('files').files, function(i, file) {
                    total += file.size;
                });

                // Called when upload progress changes. xhr2
                xhr.upload.addEventListener("progress", function(evt) {
                    // show progress like example
                    var loaded = (evt.loaded / total).toFixed(2)*100; // percent

                    $('#progress').text('Uploading... ' + loaded + '%' );
                }, false);

                return xhr;
            },
            type: 'post',
            processData: false,
            contentType: false,
            data: fd,
            success: function(data) {
                // do something...
                alert('Resume Uploaded');
            }
        });
    });
});