<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <div>
                <div class="logo-box">
                    <img src="https://logos-world.net/wp-content/uploads/2020/12/Lays-Logo.png" alt="">
                </div>
                <div>
                    <h4>Company</h4>
                </div>
            </div>
            <div>
                <div class="profile-avatar">
                    <img src="https://st3.depositphotos.com/3369547/12873/v/950/depositphotos_128731272-stock-illustration-teen-boy-character-avatar.jpg" alt="">
                    <strong>user name</strong>
                </div>
                <div>
                    <button>Login Button</button>
                </div>
                <div>
                    <button>Logout Button</button>
                </div>
            </div>
        </header>
        <x-admin.sidebar></x-admin.sidebar>
        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            footer
        </footer>
    </div>
</body>
</html>
