<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf" content="{{ @csrf_token() }}">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="antialiased">
        <div class="decor">
            <div class="form-left-decoration"></div>
            <div class="form-right-decoration"></div>
            <div class="circle"></div>
            <div class="form-inner">
                <h3>Загрузите файл "Тестовое задание PHP_Laravel - import_0945-1"</h3>
                <form id="form-upload" action="/form/add_file" method="post" enctype="multipart/form-data">
                    @csrf
                    <input id="file" type="file" name="file"/>
                    <input type="submit" class="blog__form_btn" id="submit"></input>
                    <p id="message" style="display: none; text-align: center">Файл успешно загружен</p>
                </form>
                <div id="result_inputs" style="display: none">
                    <p  style="text-align: center; color: black">Выберите действие</p>
                    <form action="/table" id="parsing">
                        <input type="submit" value="Парсинг таблицы">
                    </form>
                    <form action="/table" id="parsing">
                        <input type="submit" value="Преобразовать и скачать валидный csv">
                    </form>
                </div>


            </div>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
