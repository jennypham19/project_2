@extends('layout.index')
@section('title')
    Thêm học kỳ
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('semester.index') }}"> HỌC KỲ </a>
@endsection
@section('content')
    <h1>Thêm học kỳ</h1>
    @csrf
    <form action="{{ route('semester.store') }}" method="post">
        @csrf
        Tên học kỳ: <input type="text" name="name-semester"><br>
        Năm: <input type="text" name="year-semester1"><br>
        Năm: <input type="text" name="year-semester2"><br>
        <button type="submit">Thêm</button>
    </form>
@endsection