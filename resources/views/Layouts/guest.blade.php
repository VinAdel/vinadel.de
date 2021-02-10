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
        <script defer src="{{ asset('js/guest.js') }}"></script>
        @yield('JS')

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/guest.css') }}">
        @yield('CSS')
    </head>
    <body>  
        <section class="sidebar">
            @yield('sidebar')
        </section>
        <section class="image">
            <div id="stars-00"></div>
            <div id="stars-01"></div>
            <div id="stars-02"></div>
            <div>
                <h1>
                    Das erwartet dich! <br>
                    <span class="txt-rotate" data-period="1500"
                    data-rotate='[ "100 APIs", "8.000 Badges", "2.500 Möbel", "vinadel.de" ]'></span>
                </h1>
            </div>
        </section>
    </body>
</html>