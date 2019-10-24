@extends('dashboard/dashboard_main')

@section('content')
@component('dashboard/partial/action')
    @slot('right')
        <a class="button is-primary is-circled" href="{{ route('dashboard.coursegroups.create') }}">
            <span class="icon">
                <i class="fas fa-plus"></i>
            </span>
        </a>
    @endslot
@endcomponent

<section class="section">
    @if ($coursegroups->isEmpty())
        Belum ada semester
    @else
        <table class="table is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Nama
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($coursegroups as $coursegroup)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $coursegroup->name }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</section>

@endsection
