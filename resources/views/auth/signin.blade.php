@extends('auth/auth_main')

@section('form')
<form method="post" action="{{ route('auth.signin') }}">
    @csrf

    <div class="field">
        <label class="label">Username</label>
        <div class="control">
            <input type="text" class="input" name="username" value="{{ old('username') }}" autofocus />
        </div>
    </div>

    <div class="field">
        <label class="label">Password</label>
        <div class="control">
            <input type="password" class="input" name="password" />
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button class="button is-primary">Masuk</button>
        </div>
    </div>
</form>

<p>
    Belum punya akun? <a href="{{ route('auth.signup') }}">Daftar</a>
</p>
@endsection
