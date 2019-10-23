@extends('dashboard/dashboard_main')

@section('content')
<form method="post" action="{{ route('dashboard.settings.update', ['name' => $setting->name]) }}">
    @csrf

    <div class="field">
        <label class="label">{{ $setting->label }}</label>
        <div class="control">
            <textarea class="textarea" name="value" autofocus>{{ $setting->value }}</textarea>
        </div>
        <p class="help">
            {{ $setting->description }}
        </p>
    </div>

    <div class="field">
        <div class="control">
            <button class="button is-primary">Simpan</button>
        </div>
    </div>
</form>
@endsection
