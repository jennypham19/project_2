@extends('layout.index')
@section('title')
    Thông tin cá nhân
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('dashboard-admin') }}"> TRANG ĐIỀU KHIỂN </a>
@endsection
@section('content')
    <h1>Thông tin cơ bản</h1>
    <form action="">
        <div class="form-group label-floating">
            <label style="color:black;">Tài khoản</label>
            <input type="text" class="form-control" value ="">
        </div>
        <div class="form-group label-floating">
            <label style="color:black;">Mật khẩu</label>
            <input type="text" class="form-control" value = "">
        </div>
        <div class="form-group label-floating">
            <label style="color:black;">Họ tên</label>
            <input type="text" class="form-control" value = "">
        </div>
    </form>
@endsection
