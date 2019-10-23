@extends('dashboard/dashboard_main')

@section('content')
<a class="button is-right is-primary" href="{{ route('dashboard.coursegroups.create') }}">
    Tambah
</a>

<section class="section">
    @if ($coursegroups->isEmpty())
        Belum ada semester
    @else
        <table class="table is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        Nama
                    </td>
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
