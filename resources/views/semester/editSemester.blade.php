@extends('layout.index')
@section('title')
    Cập nhật học kỳ
@endsection
@section('content1')
<a class="navbar-brand" href="{{ route('semester.index') }}">HỌC KỲ </a> 
@endsection
@section('content')
    <h1>Cập nhật học kỳ</h1>
    <form action="{{ route('semester.update',$semester->semesterCode) }}" method="post">
        @csrf
        @method("PUT")
        Tên học kỳ: <input type="text" name="name-semester" value="{{ $semester->nameSemester }}"><br>
        Năm: <input type="text" name="year-semester1" value="{{ $semester->year1}}"><br>
        Năm: <input type="text" name="year-semester2" value="{{ $semester->year2}}"><br>
        <button>Cập nhật</button>
    </form>
@endsection