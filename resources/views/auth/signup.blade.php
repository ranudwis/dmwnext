@extends('auth/auth_main')

@section('form')
<form method="post" action="{{ route('auth.signup') }}">
    @csrf

    <div class="field">
        <label class="label">Nama</label>
        <div class="control">
            <input type="text" class="input" name="name" value="{{ old('name') }}" autofocus />
        </div>
    </div>

    <div class="field">
        <label class="label">NIM</label>
        <div class="control">
            <input type="text" class="input" name="id_number" value="{{ old('id_number') }}" />
        </div>
    </div>

    <div class="field">
        <label class="label">Email</label>
        <div class="control">
            <input type="email" class="input" name="email" value="{{ old('email') }}" />
        </div>
    </div>

    <div class="field">
        <label class="label">Username</label>
        <div class="control">
            <input type="text" class="input" name="username" value="{{ old('username') }}" />
        </div>
    </div>

    <div class="field">
        <label class="label">Password</label>
        <div class="control">
            <input type="password" class="input" name="password" />
        </div>
    </div>

    <div class="field">
        <label class="label">Ulangi Password</label>
        <div class="control">
            <input type="password" class="input" name="password_confirmation" />
        </div>
    </div>

    <div class="field">
        <div class="control">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                        <button class="button is-primary">Daftar</button>
                    </div>
                    <div class="level-item">
                        <p>
                            Sudah punya akun? <a href="{{ route('auth.signin') }}">Masuk</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
