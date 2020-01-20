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
        <link href="{{asset('css/cv-template.css')}}"> 
    </head>
    <body class="cv-body">
        <div id="app" class="container-fluid">
            <body-template></body-template>
        </div>
    </body>
    <script src="{{asset('js/app.js')}}"></script>
</html>
