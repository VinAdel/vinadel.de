@extends('Layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{ asset('css/view/welcome.css') }}">
@endsection

@section('body')
<section class="header">
    <div id="stars-00"></div>
    <div id="stars-01"></div>
    <div id="stars-02"></div>
    <div class="mountains"></div>
    <div class="container">
        <div class="row flex vertical-center">
            <div class="six columns text">
                <h1>Herzlich<br>Willkommen!</h1>
            </div>
            <div class="six columns">
                <div class="header-box">
                    <div class="center">
                        <strong>Registrieren</strong>
                        Und Alle Vorteile von vinadel Nutzen!
                    </div>
                    <hr>
                    <form action="" method="post">
                        @csrf

                        <span>
                            <label for="username" class="input-title">Benutzername</label>
                            <input type="text" name="username" id="username">
                        </span>

                        <span>
                            <label for="password" class="input-title">Passwort</label>
                            <input type="password" name="password" id="password">
                        </span>

                        <span>
                            <label for="password_confirmation" class="input-title">Passwort bestätigen</label>
                            <input type="password" name="password_confirmation" id="password_confirmation">
                        </span>

                        <button type="submit">Jetzt Registrieren!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row flex vertical-center">
            <div class="seven columns">
                <h1>Hallo Gast!</h1>
                Du fragst dich wahrscheinlich, was wir hier auf <strong>vinadel.de</strong> machen! Nun ganz einfach, wir sammeln von den <strong>eingetragenen</strong> Retro-Hotels der dt. Szene Daten. Diese Daten werden gecached und mittels JSON zur Verfügung gestellt. Zugriff auf die Daten haben nur registrierte Nutzer von <strong>vinadel.de</strong>.
                <br><br>
                <p>Daten die gesammelt werden</p>
                <ul>
                    <li>Neueste Badges</li>
                    <li>Neueste Möbel</li>
                    <li>Neueste News</li>
                    <li>Neueste Teammitglieder</li>
                </ul>
                <div class="box">
                    <div class="title">Info</div>
                    Es kann vorkommen, dass einige Daten für manche Retro-Hotels nicht zur Verfügung stehen.
                </div>
            </div>
            <div class="five columns flex horizontal-center hide mobile">
                <img src="{{ asset('img/a0kvw-zdcua.svg') }}" alt="habbo">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <h1>Test</h1>
        testbr
        <br><br>
    </div>
</section>
<section>
    <div class="container">
        <h1>Test</h1>
        testbr
        <br><br>
    </div>
</section>
@endsection