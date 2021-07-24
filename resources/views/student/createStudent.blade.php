@extends('layout.index')
@section('title')
    thêm sinh viên
@endsection
@section('content1')
    <a class="navbar-brand" href="#"> Student </a>
@endsection
@section('content')
    <h1>Thêm sinh viên</h1>
    <form action="{{ route('student.store') }}" method="post">
        @csrf
        Email: <input type="text" name="email"><br>
        Mật khẩu: <input type="password" name="password"><br>
        Tên: <input type="text" name="first-name"><br>
        Tên đệm: <input type="text" name="middle-name"><br>
        Họ: <input type="text" name="last-name"><br>
        Ngày sinh: <input type="date" name="dob"><br>
        Giới tính: <input type="radio" name="gender" value="1">Nam
        <input type="radio" name="gender" value="0">Nữ <br>
        Số điện thoại: <input type="text" name="phone"><br>
        Địa chỉ: <input type="text" name="address"><br>
        Trạng thái: <input type="radio" name="status" value="1">Hoạt động
        <input type="radio" name="status" value="0">Không hoạt động <br>
        Ngày nhập học: <input type="date" name="date"><br>
        Lớp: <select name="grade">
            @foreach ($grade as $grade1)
                <option value="{{ $grade1->classCode }}">{{ $grade1->FullGrade }}</option>
            @endforeach
        </select><br>
        <button>Thêm</button>
    </form>
@endsection
