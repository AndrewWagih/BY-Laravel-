<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('css/app.css')}}">
        <link href="{{asset('css/home.css')}}">
        <style>
            #myVideo {
                position: fixed;
                right: 0;
                bottom: 0;
                min-width: 100%; 
                min-height: 100%;
            }
            @keyframes rocking {
            0%,100% {transform: rotateZ(-10deg);},
            50% {transform: rotateZ(10deg);}
            }

        </style>
    </head>
    <body class="body-home-page">
        <video autoplay muted loop id="myVideo">
            <source src="http://localhost:8000/video/bg-1366x768.mp4" type="video/mp4">
        </video>
        <div id="app" class="container-fluid" style="padding:0;
        position:relative">
            <home-page></home-page>
        </div>  
    </body>
    <script src="{{asset('js/app.js')}}"></script>
</html>
