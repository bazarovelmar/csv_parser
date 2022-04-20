$(document).ready(function () {
    $('#form-upload').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/form/add_file',
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('#result_inputs').css('display', 'block');
                $('#message').css('display', 'block');
                $('#messageError').css('display', 'none');
            },
            error:function(data) {
                $('#messageError').css('display', 'block');
            }
        });
    }));
});
