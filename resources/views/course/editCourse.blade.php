@extends('layout.index')
@section('content1')
    <a class="navbar-brand" href="{{ route('course.index') }}"> Course </a> 
@endsection
@section('content')
    <h1>Cập nhập khóa học</h1>
    <form action="{{ route('course.update',$course->courseCode)}}" method="post">
        @method('PUT')
        @csrf
        Tên khóa: <input type="text" name="name_course" value="{{ $course->nameCourse}}"><br>
        <button>Cập nhập</button>
    </form>
@endsection