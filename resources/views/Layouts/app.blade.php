<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- DOCUMENT TITLE -->
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- FAVICON INFO -->
        <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#121212">
        <link rel="shortcut icon" href="/img/favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#121212">
        <meta name="msapplication-config" content="/browserconfig.xml">
        <meta name="theme-color" content="#121212">

        <!-- PRELOAD -->
        <link rel="preload" as="font" type="font/woff" href="{{ asset('fonts/vendor/bootstrap-icons/bootstrap-icons.woff') }}" crossorigin>
        <link rel="preload" as="font" type="font/woff2" href="{{ asset('fonts/vendor/bootstrap-icons/bootstrap-icons.woff2') }}" crossorigin>

        <!-- PREFETCH -->
        <link rel="preconnect" href="//cdnjs.cloudflare.com">
        <link rel="preconnect" href="//fonts.googleapis.com">

        <!-- JS -->
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <script defer src="{{ asset('js/app.js') }}"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('CSS')
    </head>
    <body class="preload">  
        <nav>
            <div class="container">
                <div class="logo">VinAdel</div>
                <div class="burger">
                    <div><i class="bi-list"></i></div>
                </div>
                <div class="menu">
                    <div onclick="window.redirect('{{ route('welcome') }}')">
                        <i class="bi-house"></i>
                        Startseite
                    </div>
                    <div>
                        <i class="bi bi-chat-square-dots"></i>
                        Kontakt
                    </div>
                    <div>
                        <i class="bi bi-person-circle"></i>
                        Gast
                    </div>
                </div>
            </div>
        </nav>
        @yield('body')
        <footer>
            <div class="container">
                <div class="app-info">
                    VinAdel
                </div>
                <div class="row">
                    <div class="three columns">
                        <strong>Test</strong>
                    </div>
                    <div class="three columns"></div>
                    <div class="three columns"></div>
                    <div class="three columns"></div>
                </div>
            </div>
        </footer>
    </body>
</html>