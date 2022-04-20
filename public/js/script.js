$(document).ready(function () {
    $('#form-upload').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST', // Тип запроса
            url: '/form/add_file', // Скрипт обработчика
            data: formData, // Данные которые мы передаем
            cache:false, // В запросах POST отключено по умолчанию, но перестрахуемся
            contentType: false, // Тип кодирования данных мы задали в форме, это отключим
            processData: false, // Отключаем, так как передаем файл
            success:function(data){
                $('#result_inputs').css('display', 'block');
                $('#message').css('display', 'block');
                $("#parsing").attr("action",'/');
            },
            error:function(data){
            }
        });
    }));
});
