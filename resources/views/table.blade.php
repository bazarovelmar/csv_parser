<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/table.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <title>Laravel</title>
    </head>
    <body class="antialiased">

        <div class="container">
                <table>
                    <tr>
                        <th>Код</th>
                        <th>Наименование</th>
                        <th>Уровень1</th>
                        <th>Уровень2</th>
                        <th>Уровень3</th>
                        <th>Цена</th>
                        <th>ЦенаСП</th>
                        <th>Количество</th>
                        <th>Поля свойств</th>
                        <th>Совместные покупки</th>
                        <th>Единица измерения</th>
                        <th>Картинка</th>
                        <th>Выводить на главной</th>
                        <th>Описание</th>
                    </tr>
                    @foreach($csvFiles as $csvFile)
                        <tr>
                            <td>{{$csvFile->code}}</td>
                            <td>{{$csvFile->name}}</td>
                            <td>{{$csvFile->thirst_level}}</td>
                            <td>{{$csvFile->second_level}}</td>
                            <td>{{$csvFile->third_level}}</td>
                            <td>{{$csvFile->price}}</td>
                            <td>{{$csvFile->price_cp}}</td>
                            <td>{{$csvFile->quantity}}</td>
                            <td>{{$csvFile->property_fields}}</td>
                            <td>{{$csvFile->joint_purchases}}</td>
                            <td>{{$csvFile->unit_of_measurement}}</td>
                            <td>{{$csvFile->picture}}</td>
                            <td>{{$csvFile->in_main_page}}</td>
                            <td>{{$csvFile->description}}</td>
                        </tr>
                    @endforeach
        </div>
    </body>
</html>
