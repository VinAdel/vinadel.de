@extends('Layouts.app')

@section('JS')
<script defer src="{{ asset('js/view/welcome.js') }}"></script>
@endsection

@section('CSS')
<link rel="stylesheet" href="{{ asset('css/view/welcome.css') }}">
@endsection

@section('body')
<section class="header" id="top">
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
                        Und Alle Vorteile von VinAdel Nutzen!
                    </div>
                    <hr>
                    <form action="" method="post">
                        @csrf

                        <div>
                            <label for="username" class="input-title">Benutzername</label>
                            <input type="text" name="username" id="username" required>
                        </div>

                        <div>
                            <label for="password" class="input-title">Passwort</label>
                            <input type="password" name="password" id="password" required>
                        </div>

                        <div>
                            <label for="password_confirmation" class="input-title">Passwort bestätigen</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required>
                        </div>

                        <button type="submit">Jetzt Registrieren!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="welcome">
    <div class="container">
        <div class="row flex vertical-center">
            <div class="seven columns">
                <h1>Hallo Gast!</h1>
                Du fragst dich wahrscheinlich, was wir hier auf <strong>vinadel.de</strong> machen! Nun ganz einfach, wir sammeln von den <strong>eingetragenen</strong> Retro-Hotels der dt. Szene Daten. Diese Daten werden gecached und mittels JSON zur Verfügung gestellt. Zugriff auf die Daten haben nur registrierte Nutzer von <strong>vinadel.de</strong>.
                <div class="box">
                    <div class="title">Info</div>
                    Es kann vorkommen, dass einige Daten für manche Retro-Hotels nicht zur Verfügung stehen.
                </div>
                <p>Daten die gesammelt werden</p>
                <ul>
                    <li>Neueste Badges</li>
                    <li>Neueste Möbel</li>
                    <li>Neueste News</li>
                    <li>Neueste Teammitglieder</li>
                </ul>
            </div>
            <div class="five columns flex horizontal-right hide mobile">
                <img src="{{ asset('img/a0kvw-zdcua.svg') }}" alt="habbo">
            </div>
        </div>
    </div>
</section>
<section class="api">
    <div class="container">
        <div class="row flex vertical-center">
            <div class="seven columns flex vertical center">
                <div class="code">
                    <div class="menu">
                        <div data-show="php" class="active">PHP</div>
                        <div data-show="json">JSON</div>
                    </div>
                    <div class="php active">
                        <pre>
                            <span class="blue">$key</span> = <span class="purple">"9c5d7f60-0958-4a93-88ff-62f6f9d611fd"</span>;
                            <span class="blue">$endpoint</span> = <span class="purple">"https://api.vinadel.de/"</span>;
                            <span class="blue">$contents</span> = <span class="yellow">file_get_contents</span>(<span class="blue">$endpoint</span> . <span class="blue">$key</span> . <span class="purple">"/{HOTEL}/badges"</span>);
                            <span class="blue">$result</span> = <span class="yellow">json_decode</span>(<span class="blue">$contents</span>);

                            <span class="yellow">foreach</span>(<span class="blue">$result</span> as <span class="blue">$badge</span>)
                                <span class="blue">$badge</span>[<span class="purple">'name'</span>];
                        </pre>
                    </div>
                    <div class="json">
                        <pre>
                            <span class="yellow">{</span>
                                <span class="blue">name</span>: <span class="purple">"BADGE1"</span>,
                                <span class="blue">description</span>: <span class="purple">"BADGE1"</span>,
                                <span class="blue">image_url</span>: <span class="purple">"https://image.vinadel.de/{HOTEL}/badges/{name}.gif"</span>
                            <span class="yellow">}</span>, ...
                        </pre>
                    </div>
                </div>
            </div>
            <div class="five columns text right">
                <h1>auf Abruf bereit!</h1>
                <div>
                    Mit nur <strong>minimalen</strong> Aufwand an Code, zugang zu <strong>Unmengen</strong> an <strong>Daten</strong> erhalten! Außerdem speichern wir alle Bilder auf unserem Server!
                </div>
                <div class="box">
                    <div class="title right">Dokumentation</div>
                    Schau auch mal in unserer Dokumentation vorbei, falls du Schwierigkeiten hast!
                </div>
                <button>
                    Dokumentation
                </button>
            </div>
        </div>
    </div>
</section>
<section class="interest">
    <div class="container">
        <div class="row flex vertical-center">
            <div class="eight columns">
                <h1>Interessiert?</h1>
                <h5>Worauf wartest du noch? Jetzt Registrieren und auf x. verschiedene APIs Zugreifen!</h5>
            </div>
            <div class="four columns flex horizontal-center">
                <a href="#top">
                    <button>
                        Jetzt Registrieren
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection