@extends('layout.index')
@section('content1')
    <a class="navbar-brand" href="{{ route('grade.index') }}"> Grade </a>
@endsection
@section('content')
    <h1>Thêm lớp</h1>
    <form action="{{ route('grade.store') }}" method="post">
        @csrf
        Tên lớp: <input type="text" name="name-grade"><br>
        Khóa:
            <select name="id-course">
                @foreach ($listCourse as $course)
                    <option value="{{ $course->courseCode }}">{{ $course->nameCourse }}</option>
                @endforeach
            </select><br>
        Chuyên ngành:
            <select name="id-major">
                @foreach ($listMajor as $major)
                    <option value="{{ $major->majorCode }}">{{ $major->nameMajor }}</option>
                @endforeach
            </select><br>
        <button>Thêm</button>
    </form>
@endsection
