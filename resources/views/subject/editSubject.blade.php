@extends('layout.index')
@section('content1')
<a class="navbar-brand" href="{{ route('subject.index') }}"> MÔN HỌC </a>
@endsection
@section('content')
    <h1>Cập nhật môn học </h1>
    <form action="{{ route('subject.update',$subject->subjectCode) }}" method="post">
        @csrf
        @method("PUT")
        Tên môn học: <input type="text" name="name-subject" value="{{ $subject->nameSubject}}"><br>
        Tổng số giờ học: <input type="text" name="total-hour" value="{{ $subject->totalClassHour}}"><br>
        Ngày bắt đầu: <input type="date" name="start-date" value="{{ $subject->startDate}}"><br>
        Final: <input type="text" name="final" value="{{ $subject->isFinal}}"> 
        <br>
        Skill:<input type="text" name="skill" value="{{ $subject->isSkill}}">
        <br>
        Học kỳ: <input type="text" name="semester" value="{{ $subject->semesterCode}}"><br>
        <button>Cập nhật</button>
    </form>
@endsection