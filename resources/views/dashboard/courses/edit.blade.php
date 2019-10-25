@extends('dashboard/dashboard_main')

@section('content')
<form method="post" action="{{ route('dashboard.courses.update', ['course' => $course->slug]) }}">
    @method('PUT')
    @csrf

    <div class="field">
        <input class="switch" type="checkbox" id="f-showed" name="showed" @if ($course->showed) checked @endif />
        <label class="label" for="f-showed">Ditampilkan</label>
        <p class="help">
            Matikan untuk menyembunyikan mata kuliah di halaman utama
        </p>
    </div>

    <div class="field">
        <label class="label">Kode</label>
        <div class="control">
            <input class="input @formError('code')" type="text" name="code" value="{{ $course->code }}" autofocus />
        </div>
        @formHelp('code')
    </div>

    <div class="field">
        <label class="label">Nama</label>
        <div class="control">
            <input class="input @formError('name')" type="text" name="name" value="{{ $course->name }}" />
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

                    <option value="110">
                        Pilih semester
                    </option>

                    @foreach ($coursegroups as $coursegroup)
                        <option value="{{ $coursegroup->id }}" @if ($course->coursegroup_id == $coursegroup->id) selected @endif>
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
            <input class="input @formError('credit')" type="number" name="credit" value="{{ $course->credit }}" />
        </div>
        @formHelp('credit')
    </div>

    <div class="field">
        <label class="label">Nama singkat</label>
        <div class="control">
            <input class="input @formError('slug')" type="text" name="slug" value="{{ $course->slug }}" />
        </div>
        @formHelp('slug', 'Nama singkat digunakan pada url, contoh: alpro, daspro, metnum.')
    </div>

    <div class="field">
        <label class="label">Deskripsi</label>
        <div class="control">
            <textarea class="textarea @formError('description')" name="description">{{ $course->description }}</textarea>
        </div>
        @formHelp('description')
    </div>

    <div class="field">
        <div class="control">
            <button class="button is-primary">Simpan</button>
        </div>
    </div>
</form>
@endsection
