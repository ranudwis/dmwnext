@extends('dashboard/dashboard_main')

@section('content')
<table class="table is-fullwidth is-stiped is-primary">
    <tbody>
        @foreach ($settings as $setting)
            <tr>
                <td>
                    {{ $setting->label }}
                </td>
                <td>
                    {{ $setting->description }}
                </td>
                <td>
                    <a href="{{ route('dashboard.settings.edit', ['name' => $setting->name])}}">
                        <span class="icon">
                            <i class="fas fa-edit"></i>
                        </span>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
