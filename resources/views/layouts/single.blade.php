<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link href="/css/reset.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <header>
            <a href="/"><img src="/img/logo.png"></a>
            <form action="" method="" class="search_form">
                <input type="search" placeholder="Поиск города" name="search" id="search" class="search_form__field">
            </form>
            <nav class="header_nav">
                <ul class="header_nav__items">
                    <li class="header_nav__item"><a href="/cities">All cities</a></li>
                    <li class="header_nav__item"><a href="/">Sign In</a></li>
                </ul>
            </nav>
        </header>
            @yield('content')
        <footer>
            <div class="copy">&copy; The City, 2021. Все права защищены</div>
        </footer>    
    </body>
</html>
