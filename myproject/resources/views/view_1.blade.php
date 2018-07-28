<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
        <h1>View First!</h1>
        {{$name}} - {{$email}}
        <h1>Test thử điều kiện</h1> 
        @if (isset($name))
            <p>{{$name}}</p>
        @else
            <p>Tên không tồn tại</p>
        @endif        
        <h1>Test thử vòng lặp</h1>
        @for ($i = 0; $i < 10; $i++)
            <p>Giá trị i là: {{$i}}</p>
        @endfor   

    </body>
</html>
