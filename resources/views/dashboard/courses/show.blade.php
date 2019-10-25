@extends ('dashboard/dashboard_main')

@section('content')
<div class="box">
    <div class="dashboard-action dashboard-action--course">
        <div>
            <h3 class="title is-3">{{ $course->name }}</h3>
            <p class="subtitle is-5">
                {{ $course->code }} | {{ $course->credit }} SKS
            </p>
        </div>

        <div>
            <a class="button is-primary is-circled" href="{{ route('dashboard.courses.edit', ['course' => $course->slug]) }}">
                <span class="icon">
                    <i class="fas fa-edit"></i>
                </span>
            </a>
        </div>
    </div>

    <p>
        {{ $course->description }}
    </p>

</div>

<div class="box">
    <div class="tabs is-medium">
        <ul>
            <li class="is-active">
                <a href="">Modul</a>
            </li>
            <li>
                <a href="">Soal</a>
            </li>
        </ul>
    </div>

    <a class="button is-primary">Tambah</a>
</div>
@endsection
