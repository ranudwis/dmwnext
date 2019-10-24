@extends('dashboard/dashboard_main')

@section('content')
<form method="post" action="{{ route('dashboard.settings.update', ['name' => $setting->name]) }}">
    @csrf

    <div class="field">
        <label class="label">{{ $setting->label }}</label>
        <div class="control">
            <textarea class="textarea @formError('value')" name="value" autofocus>{{ $setting->value }}</textarea>
        </div>
        @formHelp('value', $setting->description)
    </div>

    <div class="field">
        <div class="control">
            <button class="button is-primary">Simpan</button>
        </div>
    </div>
</form>
@endsection
