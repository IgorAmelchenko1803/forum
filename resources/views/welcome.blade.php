<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Вход на форум</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
        <style>
            body {
                background-color: #f8f9fa; /* Светло-серый фон для тела страницы */
            }
            .navbar {
                justify-content: flex-end; /* Выравнивание ссылок навбара по правой стороне */
            }
            .navbar a {
                color: #fff; /* Цвет ссылок в навбаре */
                margin-left: 15px; /* Отступы между ссылками */
            }
        </style>
    </head>
    <body>

       
            <!-- Navbar content -->
         
        
            @if (Route::has('login'))
            <div class="row">
                <div class="col-12 bg-dark border-bottom border-body" data-bs-theme="dark">
                    <div class="container " >
                        <nav class="navbar " >
                            @auth
                                <a href="{{ url('/dashboard') }}" class="">Проект форум</a>
                            @else
                                <a href="{{ route('login') }}" class="">Log in</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="mr-5">Register</a>
                                @endif
                            @endauth
                        </nav>
                    </div>
                </div>
            </div>
           
            @endif

            <div class="section-main-header">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-uppercase text-center">Проект форум</h2>
                    </div>
                </div>
            </div>

    </body>
</html>
