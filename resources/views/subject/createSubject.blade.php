@extends('layout.index')
@section('content1')
    <a class="navbar-brand" href="#"> Subject </a>
@endsection
@section('content')
    <h1>Thêm môn học</h1>
    <form action="{{ route('subject.store') }}" method="post">
        @csrf
        Tên môn học: <input type="text" name="name-subject"><br>
        Số giờ: <input type="text" name="hour"><br>
        Ngày bắt đầu: <input type="date" name="start-date"><br>
        Lý thuyết:
            <input type="radio" name="final" value="1"><i class="material-icons">done</i>
            <input type="radio" name="final" value="0"><i class="material-icons">close</i>
            <br>
        Thực hành:
            <input type="radio" name="skill" value="1"><i class="material-icons">done</i>
            <input type="radio" name="skill" value="0"><i class="material-icons">close</i>
            <br>
        Học kỳ:
        <select name="semester">
            @foreach ($semester as $sem)
                <option value="{{ $sem->semesterCode }}">{{ $sem->FullSemester }}</option>
            @endforeach
        </select><br>
        <button>Thêm</button>
    </form>
@endsection
