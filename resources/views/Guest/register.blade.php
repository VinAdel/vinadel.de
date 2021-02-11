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
            <input type="text" name="name" id="name" required autocomplete="nickname" value="{{ old('name') }}" @error('name') class=input-error @enderror>
            @error('name')
            <span class="input-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password" class="input-title">Passwort</label>
            <input type="password" name="password" id="password" required autocomplete="new-password" @error('password') class=input-error @enderror>
            @error('password')
            <span class="input-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="input-title">Passwort bestätigen</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required @error('password_confirmation') class=input-error @enderror>
            @error('password_confirmation')
            <span class="input-feedback">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Registrieren!</button>

        <div class="switch">Account vorhanden? <span onclick="window.redirect('{{ route('guest.login') }}')">Anmelden</span></div>
    </form>
</div>
@endsection