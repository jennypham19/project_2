@extends('layout.index')
@section('title')
    Thông tin cá nhân
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('dashboard-admin') }}"> TRANG ĐIỀU KHIỂN </a>
@endsection
@section('content')
    <div class="card">
        <form id="LoginValidation" action="{{ route('edit-profile-process',$admin->codeAdmin) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">email</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">SỬA THÔNG TIN</h4>
                <div class="form-group label-floating">
                    <label class="control-label">Email
                        <star>*</star>
                    </label>
                    <input class="form-control" name="email" type="text" value="{{ $admin->email }}" email="true" required="true" />
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Họ tên
                        <star>*</star>
                    </label>
                    <input class="form-control" name="full-name" type="text" value="{{ $admin->fullName }}" required="true" />
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-rose btn-fill btn-wd">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
