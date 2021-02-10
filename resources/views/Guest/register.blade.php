@extends('Layouts.guest')

@section('sidebar')
<div class="form">
    <div class="center">
        <strong>Registrieren</strong>
        Und alle Vorteile von vinadel Nutzen!
    </div>
    <form action="{{ route('guest.register.post') }}" method="post">
        @csrf

        <div>
            <label for="name" class="input-title">Benutzername</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="password" class="input-title">Passwort</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <label for="password_confirmation" class="input-title">Passwort bestätigen</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <button type="submit">Registrieren!</button>

        <div class="switch">Account vorhanden? <span onclick="window.redirect('{{ route('guest.login') }}')">Anmelden</span></div>
    </form>
</div>
@endsection