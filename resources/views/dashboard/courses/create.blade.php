@extends('dashboard/dashboard_main')

@section('content')
<form method="post" action="{{ route('dashboard.courses.store') }}">
    @csrf

    <div class="field">
        <label class="label">Kode</label>
        <div class="control">
            <input class="input @formError('code')" type="text" name="code" value="{{ old('code') }}" autofocus />
        </div>
        @formHelp('code')
    </div>

    <div class="field">
        <label class="label">Nama</label>
        <div class="control">
            <input class="input @formError('name')" type="text" name="name" value="{{ old('name') }}" />
        </div>
        @formHelp('name')
    </div>

    <div class="field">
        <label class="label">Semester</label>
        <div class="control">
            <div class="select @formError('coursegroup_id')">
                <select name="coursegroup_id">
                    <option value="0">
                        Pilih semester
                    </option>

                    @foreach ($coursegroups as $coursegroup)
                        <option value="{{ $coursegroup->id }}">
                            {{ $coursegroup->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        @formHelp('coursegroup_id')
    </div>

    <div class="field">
        <label class="label">Banyak SKS</label>
        <div class="control">
            <input class="input @formError('credit')" type="number" name="credit" value="{{ old('credit') }}" />
        </div>
        @formHelp('credit')
    </div>

    <div class="field">
        <label class="label">Nama singkat</label>
        <div class="control">
            <input class="input @formError('slug')" type="text" name="slug" value="{{ old('slug') }}" />
        </div>
        @formHelp('slug', 'Nama singkat digunakan pada url, contoh: alpro, daspro, metnum.')
    </div>

    <div class="field">
        <label class="label">Deskripsi</label>
        <div class="control">
            <textarea class="textarea @formError('description')" name="description">{{ old('description') }}</textarea>
        </div>
        @formHelp('description')
    </div>

    <div class="field">
        <div class="control">
            <button class="button is-primary">Tambah</button>
        </div>
    </div>
</form>
@endsection
