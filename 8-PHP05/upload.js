 $(document).ready(function(){
    // modifikasi penambahan css
    $('#file').change(function(){
        if(this.files.lenghth > 0){
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        }else{
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });


    $('#upload-from').submit(function(e){
        e.preventDeault();
        
        var formData = new FormData(this);

        $.ajax({
            type : 'POST',
            url : 'upload_ajax.php',
            data : formData,
            cache : false,
            contentType : false,
            processData : false,
            success : function(response){
                $('#status').html(response);
            },
            error: function(){
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});