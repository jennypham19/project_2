@extends('layout.index')
@section('title')
    Thông tin cá nhân
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('dashboard-admin') }}"> TRANG ĐIỀU KHIỂN </a>
@endsection
@section('content')
    <div class="card">
        @if (Session::exists('success'))
            <div class="text-center">{{ Session::get('success') }}</div>
        @endif
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">mail_outline</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">THÔNG TIN CƠ BẢN</h4>
            <form>
                <div class="form-group label-floating">
                    <label style="color:black;">Tài khoản</label>
                    <input type="text" class="form-control" value="{{ $listAdmin->email }}" readonly="">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Mật khẩu</label>
                    <input type="text" class="form-control" value="{{ $listAdmin->password }}" readonly="">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Họ tên</label>
                    <input type="text" class="form-control" value="{{ $listAdmin->fullName }}" readonly="">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Chức vụ</label>
                    <input type="text" class="form-control" value="{{ $listAdmin->Right }}" readonly="">
                </div>
                <a href="{{ route('edit-profile', $listAdmin->codeAdmin) }}" class="btn btn-rose">Sửa</a>
            </form>
        </div>
    </div>
@endsection
