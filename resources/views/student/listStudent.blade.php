@extends('layout.index')
@section('title')
    Quản lý sinh viên
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('student.index') }}"> Student </a>
@endsection
@section('content')
    <h1>Danh sách sinh viên</h1>
    <a href="{{ route('student.create') }}" class="btn btn-info" style="color:black;">Thêm sinh viên</a>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Sinh viên</h4>
                    <div class="toolbar">

                    </div>
                    <div class="material-datatables">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0"
                            width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Mã SV</th>
                                    <th>Email</th>
                                    <th>Mật khẩu</th>
                                    <th>Họ tên</th>
                                    <th>Ngày sinh</th>
                                    <th>Giới tính</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày nhập học</th>
                                    <th>Lớp</th>
                                    <th class="disabled-sorting text-center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listStudent as $student)
                                    <tr>
                                        <td>{{ $student->studentCode }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->passWord }}</td>
                                        <td>{{ $student->FullName }}</td>
                                        <td>{{ $student->dateOfBirth }}</td>
                                        <td>{{ $student->NameGender }}</td>
                                        <td>{{ $student->phone }}</td>
                                        <td>{{ $student->address }}</td>
                                        <td>{{ $student->NameStatus }}</td>
                                        <td>{{ $student->dateEnrollment }}</td>
                                        <td>{{ $student->FullGrade }}</td>
                                        <td class="td-actions text-center">
                                            <a href="">
                                                <button class="btn btn-success btn-xs">
                                                     <i class="material-icons">edit</i>Edit
                                                </button>
                                            </a>
                                            <form action="" method="post">
                                                <button class="btn btn-danger btn-xs">
                                                    <i class="material-icons">lock</i>Hide
                                                </button>
                                            </form>
                                        </td>
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