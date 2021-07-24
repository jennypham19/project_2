@extends('layout.index')
@section('title')
    Cập nhật môn học
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('subject.index') }}"> MÔN HỌC </a>
@endsection
@section('content')
    <h1>Cập nhật môn học </h1>
    <form action="{{ route('subject.update', $subject->subjectCode) }}" method="post">
        @csrf
        @method("PUT")
        Tên môn học: <input type="text" name="name-subject" value="{{ $subject->nameSubject }}"><br>
        Tổng số giờ học: <input type="text" name="total-hour" value="{{ $subject->totalClassHour }}"><br>
        Ngày bắt đầu: <input type="date" name="start-date" value="{{ $subject->startDate }}"><br>
        Final: <input type="radio" name="final" value="{{ $subject->isFinal }}" @if ($subject->isFinal == 1) checked @endif>Yes
        <input type="radio" name="final" value="{{ $subject->isFinal }}" @if ($subject->isFinal == 0) checked @endif>No
        <br>
        Skill:<input type="radio" name="skill" value="{{ $subject->isSkill }}" @if ($subject->isSkill == 1) checked @endif>Yes
            <input type="radio" name="skill" value="{{ $subject->isSkill }}" @if ($subject->isSkill == 0) checked @endif>No<br>
        Học kỳ: <select name="semester">
            @foreach ($semester as $sem)
                <option value="{{ $sem->semesterCode }}" @if ($subject->semesterCode == $sem->semesterCode) selected @endif>
                    {{ $sem->FullSemester }}</option>
            @endforeach
        </select><br>
        {{-- <input type="text" name="semester" value="{{ $subject->semesterCode}}" placeholder="{{ $subject->FullSemester}}"><br> --}}
        <button>Cập nhật</button>
    </form>
@endsection
