@extends('layout.index')
@section('content1')
    <a class="navbar-brand" href="{{ route('grade.index') }}">LỚP</a>
@endsection
@section('content')
    <h1>Cập nhật lớp</h1>
    <form action="{{ route('grade.update',$grade->classCode) }}" method="post">
        @method('PUT')
        @csrf
        Tên lớp: <input type="text" name="name-class" value="{{ $grade->nameClass }}"> <br>
        Khóa:
            <select name="id-course">
                @foreach ($course as $course1)
                    <option value="{{ $course1->courseCode }}" @if ($grade->courseCode == $course1->courseCode )
                        selected
                    @endif >
                        {{$course1->nameCourse}}
                    </option>
                @endforeach
            </select><br>
        Tên chuyên ngành:
            <select name="name-major"> 
                @foreach($major as $major1)
                    <option value="{{ $major1->majorCode }}" @if ($grade->majorCode == $major1->majorCode)
                        selected
                    @endif>
                        {{$major1->nameMajor}}
                    </option> 
                @endforeach
            </select>     
        <button>Cập nhật</button>
    </form> 
@endsection