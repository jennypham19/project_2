@extends('layout.index')
@section('title')
    Thêm khóa
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('course.index') }}"> KHÓA </a>
@endsection
@section('content')
    <h1>Thêm khóa học</h1>
    <form action="{{ route('course.store') }}" method="post">
        @csrf
        Tên khóa: <input type="text" name="name_course"><br>
        <button type="submit">Thêm</button>
    </form>
@endsection