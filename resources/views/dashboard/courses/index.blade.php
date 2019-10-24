@extends('dashboard/dashboard_main')

@section('content')
@component('dashboard/partial/action')
    @slot('right')
        <a class="button is-primary is-circled" href="{{ route('dashboard.courses.create') }}">
            <span class="icon">
                <i class="fas fa-plus"></i>
            </span>
        </a>
    @endslot
@endcomponent

@foreach ($courses as $name => $coursegroup)
    <section class="section">
        <h5 class="title is-5">{{ $name }}</h3>

        <div class="linkblock">
            @foreach ($coursegroup as $course)
                <a href="{{ route('dashboard.courses.show', ['course' => $course->slug]) }}">
                    <div>
                        {{ $course->code }}
                    </div>
                    <div>
                        {{ $course->name }}
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endforeach
@endsection
