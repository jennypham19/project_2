@extends('layout.index')
@section('title')
    Cập nhật lớp
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('grade.index') }}">LỚP</a>
@endsection
@section('content')
    <h1>Cập nhật lớp</h1>
    <form action="{{ route('grade.update',$grade->classCode) }}" method="post">
        @csrf
        @method('PUT')
        Tên lớp: <input type="text" name="name-grade" value="{{ $grade->nameClass }}"><br>
        Khóa: <select name="course">
            @foreach ($course as $cou)
                <option value="{{ $cou->courseCode }}" @if ($grade->courseCode == $cou->courseCode) selected  @endif>
                    {{ $cou->nameCourse }}
                </option>
            @endforeach
        </select><br>
        Chuyên ngành: <select name="major">
            @foreach ($major as $maj)
                <option value="{{ $maj->majorCode }}" @if ($grade->majorCode== $maj->majorCode) selected  @endif>{{ $maj->nameMajor }}</option>
            @endforeach
        </select><br>
        <button>Cập nhật</button>
    </form>
@endsection