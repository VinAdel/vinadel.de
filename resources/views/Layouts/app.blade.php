<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF TOKEN -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
        @yield('JS')

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('CSS')
    </head>
    <body>  
        <nav>
            <div class="container">
                <div class="logo">VinAdel</div>
                <div class="burger">
                    <div><i class="bi-list"></i></div>
                </div>
                <div class="menu">
                    <div onclick="window.redirect('{{ Auth::check() ? route('auth.dashboard') : route('guest.welcome') }}')">
                        <i class="bi-house"></i>
                        Startseite
                    </div>
                    <div>
                        <i class="bi bi-chat-square-dots"></i>
                        Kontakt
                    </div>
                    <div class="dropdown">
                        <i class="bi bi-person-circle"></i>
                        @guest
                        Gast
                        <div class="dropdown-position">
                            <div class="dropdown-content">
                                <div onclick="window.redirect('{{ route('guest.login') }}')">Anmelden</div>
                                <div onclick="window.redirect('{{ route('guest.register') }}')">Registrieren</div>
                            </div>
                        </div>
                        @endguest
                        @auth
                        {{ Auth::user()->name }}
                        <div class="dropdown-position">
                            <div class="dropdown-content">
                                <div>Einstellungen</div>
                                <div id="logout">Abmelden</div>
                            </div>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
        @yield('body')
        <footer>
            <div class="container">
                <div class="app-info">
                    VinAdel
                    <div class="app-desc">
                        &copy; 2021 VinAdel - Alle Rechte vorbehalten.
                    </div>
                </div>
                <div class="row">
                    <div class="three columns">
                        <strong>VinAdel</strong>
                        <a href="{{ Auth::check() ? route('auth.dashboard') : route('guest.welcome') }}">Startseite</a><br>
                        <a href="#">Kontakt</a><br>
                        @guest
                        <a href="{{ route('guest.login') }}">Anmelden</a><br>
                        <a href="{{ route('guest.register') }}">Registrieren</a>
                        @endguest
                        @auth
                        <a href="#">Einstellungen</a>
                        @endauth
                    </div>
                    <div class="three columns">
                        <strong>Informationen</strong>
                        <a href="#">Nutzungsbedingugen</a><br>
                        <a href="#">Datenschutz</a><br>
                        <a href="#">Sprache</a>
                    </div>
                    <div class="six columns">
                        <strong>Über uns</strong>
                        vinadel.de ist ein internationales Habbo Projekt, welches gegründet wurde, um Daten für Fanseiten und Co. leichter zugänglich zu machen.
                    </div>
                </div>
                <div class="crocodile"></div>
            </div>
        </footer>
    </body>
</html>