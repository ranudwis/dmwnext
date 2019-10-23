@extends('dashboard/dashboard_main')

@section('content')
<form method="post" action="{{ route('dashboard.coursegroups.store') }}">
    @csrf

    <div class="field">
        <label class="label">Nama</label>
        <div class="control">
            <input class="input" type="text" name="name" autofocus />
        </div>
        <p class="help">
            Nama semester
        </p>
    </div>

    <div class="field">
        <div class="control">
            <button class="button is-primary">Tambah</button>
        </div>
    </div>
</form>
@endsection
