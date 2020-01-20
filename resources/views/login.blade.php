<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('css/app.css')}}">
        <link href="{{asset('css/managee.css')}}"> 
        <style>
            body{
                background-image: url("http://localhost:8000/images/header.jpg");
                background-size: cover;
                background-position: center;
            }
        </style>
    </head>
    <body>
        <div id="app" class="container-fluid">
            <login></login>
        </div>
    </body>
    <script src="{{asset('js/app.js')}}"></script>
</html>
