@extends('index')
@section('content1')
    <a class="navbar-brand" href="#"> Semester </a>
@endsection
@section('content')
    <h1>Thêm học kỳ</h1>
    @csrf
    <form action="" method="post">
        Tên học kỳ: <input type="text" name="name-semester"><br>
        <button type="submit">Thêm</button>
    </form>
@endsection