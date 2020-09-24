<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="crud in laravel an d reactjs" >
        <title>CRUD in Laravel & ReactJS Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!--<link href="/css/app.css" rel="stylesheet" />-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="container mt-4" >
            <div id="example"></div>
        </div>

        <!--<script src="/js/app.js"></script>-->
        <script src="{{asset('/js/app.js')}}"></script>
    </body>
</html>