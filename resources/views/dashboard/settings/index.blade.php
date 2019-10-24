@extends('dashboard/dashboard_main')

@section('content')
<section class="section">
    <div class="linkblock">
        @foreach ($settings as $setting)
            <a href="{{ route('dashboard.settings.edit', ['name' => $setting->name])}}">
                <div>
                    {{ $setting->label }}
                </div>

                <div>
                    {{ $setting->description }}
                </div>
            </a>
        @endforeach
    </div>
</section>
@endsection
