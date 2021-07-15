@extends('layout.index')
@section('content1')
    <a class="navbar-brand" href="#"> Mark </a>
@endsection
@section('content')
    <h1>Thêm điểm cho sinh viên</h1>
    <form action="{{ route('mark.store') }}" method="post">
        @csrf
        Tên sinh viên:<select name="student">
            @foreach ($listStudent as $student)
                <option value="{{ $student->studentCode }}">{{ $student->FullName }}</option>
            @endforeach
        </select><br>
        Môn học: <select name="subject">
            @foreach ($listSubject as $subject)
                <option value="{{ $subject->subjectCode }}">{{ $subject->nameSubject}}</option>
            @endforeach
        </select><br>
        Điểm final lần 1: <input type="text" name="final-1st"><br>
        Điểm final lần 2: <input type="text" name="final-2nd"><br>
        Điểm skill lần 1: <input type="text" name="skill-1st"><br>
        Điểm skill lần 2: <input type="text" name="skill-2nd"><br>
        <button>Thêm</button>
    </form>
@endsection