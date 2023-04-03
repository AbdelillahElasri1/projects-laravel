<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ url('css/app.css') }}">
        <!-- <script src="{{ url('js/app.js') }}"></script> -->
        <script src="https://cdn.tailwindcss.com"></script>


       
    </head>
    <body class="antialiased h-screen">
        <div class="flex justify-around">
            <div>
                <img class="w-20 h-15 mt-8" src="https://cdn.cdnlogo.com/logos/e/60/elf.svg" alt="">
            </div>
            <div>
                <nav>
                    <ul class="flex justify-center gap-6 mt-8">
                        <li><a href="{{ route('home.index') }}">Home</a></li>
                        <li><a href="{{ route('discover') }}">Discover</a></li>
                        <li><a href="{{ route('playmusic') }}">comment</a></li>
                        
                    </ul>
                </nav>
            </div>
        </div>
        <!-- yield content -->
        <div>
            @yield('about')
            @yield('contact')
            @yield('discover')
            @yield('playmusic')
            @yield('welcome')
            @yield('login')
            @yield('register')
            @yield('index')
            @yield('edit music')
            @yield('add comment')
            @yield('play')
        </div>
        

    </body>
</html>
