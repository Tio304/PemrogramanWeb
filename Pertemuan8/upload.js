$(document).ready(function() {
    $('#submit').on('click', function(e) {
        e.preventDefault();

        var fileInput = $('#file')[0].files[0];
        var formData = new FormData();
        formData.append('file', fileInput);


        var fileType = fileInput.type.split('/')[0];
        if (fileType !== 'image') {
            $('#status').html('Hanya file gambar yang diizinkan untuk diunggah (format: JPG, JPEG, PNG, GIF).');
            return;
        }

        $.ajax({
            url: 'upload_ajax.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                $('#status').html('Terjadi kesalahan: ' + error);
            }
        });
    });
});
