@extends('Layouts.guest')

@section('sidebar')
<div class="form">
    <div class="center">
        <strong>Anmelden</strong>
        Und alle Vorteile von vinadel Nutzen!
    </div>
    <form action="{{ route('guest.login.post') }}" method="post">
        @csrf

        <div>
            <label for="name" class="input-title">Benutzername</label>
            <input type="text" name="name" id="name" required value="{{ old('name') }}">
            @error('name')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="name" class="input-title">Passwort</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                {{ $message }}
            @enderror
        </div>

        <div class="remember">
            <input type="hidden" name="remember" id="remember" value="0">
            <div class="icon flex horizontal-center vertical-center">
                <i class="bi bi-check"></i>
            </div>
            <div>Angemeldet bleiben</div>
        </div>

        <div class="forgot">
            Passwort vergessen?
        </div>

        <button type="submit">Anmelden!</button>

        <div class="switch">Noch kein Account? <span onclick="window.redirect('{{ route('guest.register') }}')">Registrieren</span></div>
    </form>
</div>
@endsection