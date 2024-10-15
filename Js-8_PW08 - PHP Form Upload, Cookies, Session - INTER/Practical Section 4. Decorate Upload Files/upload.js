$(document).ready(function(){
    $('#file').change(function(){
        // Check if any files are selected
        if (this.files.length > 0) {
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    $('#upload-form').submit(function(e){
        e.preventDefault(); // Prevent default form submission

        var formData = new FormData(this); // Create FormData object

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response){
                $('#status').html(response); // Show response from server
            },
            error: function(){
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});
