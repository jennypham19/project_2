@extends('layout.index')
@section('title')
    Quản lý nhân viên
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('admin.index') }}"> NHÂN VIÊN </a>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">NHÂN VIÊN</h4>
                    <div class="toolbar">

                    </div>
                    <div class="material-datatables">
                        <table id="table" class="table table-striped table-no-bordered table-hover" cellspacing="0"
                            width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Mã nhân viên</th>
                                    <th>Tài khoản</th>
                                    <th>Mật khẩu</th>
                                    <th>Họ tên</th>
                                    <th>Quyền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listAdmin as $admin)
                                    <tr>
                                        <td>{{ $admin->codeAdmin }}</td>
                                        <td>{{ $admin->email }}</td>
                                        <td>{{ $admin->password }}</td>
                                        <td>{{ $admin->fullName }}</td>
                                        <td>{{ $admin->Right }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
