@extends('dashboard/dashboard_main')

@section('content')
<form method="post" action="{{ route('dashboard.coursegroups.store') }}">
    @csrf

    <div class="field">
        <label class="label">Nama</label>
        <div class="control">
            <input class="input @formError('name')" type="text" name="name" value="{{ old('name') }}" autofocus />
        </div>
        @formHelp('name', 'Nama semester')
    </div>

    <div class="field">
        <div class="control">
            <button class="button is-primary">Tambah</button>
        </div>
    </div>
</form>
@endsection
