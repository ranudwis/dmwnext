@extends('dashboard/dashboard_main')

@section('content')
<section class="section">
    <table class="table is-fullwidth is-hoverable is-primary">
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
                        <a class="button is-small is-primary" href="{{ route('dashboard.settings.edit', ['name' => $setting->name])}}">
                            <span class="icon is-small">
                                <i class="fas fa-cog"></i>
                            </span>
                            <span>Atur</span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
