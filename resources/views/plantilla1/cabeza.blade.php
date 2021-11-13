<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <style>
        .cuerpo-b{
            background-color: @yield('colorfond');
        }
        .naver-b{
            background: blue;
        }
        .contenb{
            background: @yield('pie');
        }

    </style>
</head>
<body class="cuerpo-b">
<div> 
    @section('cabeza')
    @show
</div>