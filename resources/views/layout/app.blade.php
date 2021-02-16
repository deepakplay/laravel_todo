<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;500;400;600&display=swap" rel="stylesheet">
        <style>
            *{
                margin:0px;
                text-decoration: none;
                list-style: none;
                border:0px;
                padding: 0px;
                outline: none;
            }
            html, body {
                background-color: #fff;
                color: #333;
                font-family: 'Nunito', sans-serif;
                font-weight: 300;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }
            .top-left {
                position: absolute;
                top: 18px;
                left: 30px;
                display: flex;
                align-items: center;
            }

            .content {
                text-align: center;
                margin-top:80px;
            }

            .title {
                font-size: 1.5rem;
                font-weight: bold;
            }
            a{
                text-decoration: none;
                color:#444;
                margin-left: 20px;
            }

            a:hover{
                color:#F33;
            }
            @yield('style')
        </style>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-left links">
                <div class="title">Todo List</div>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/create') }}">Create Todo</a>
            </div>
            @yield('content')
        </div>
    </body>
</html>
