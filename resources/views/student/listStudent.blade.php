@extends('layout.index')
@section('title')
    Quản lý sinh viên
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('student.index') }}"> SINH VIÊN </a>
@endsection
@section('content')
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if (Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} </p>
        @endif
    @endforeach
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <div style="float:right;">
                        <a href="{{ route('student.create') }}"><i class="material-icons">add</i> </a>
                    </div>
                    <h4 class="card-title">SINH VIÊN</h4>
                    <form action="" method="GET">
                        <select name="filter" style="color:#000;" class="btn btn">
                            <option style="color:#000;">All</option>
                            @foreach ($listGrade as $grade)
                                <option style="color:#000;" value="{{ $grade->classCode }}" @if ($grade->classCode == $filter)
                                    selected
                            @endif >{{ $grade->FullGrade }}</option>
                            @endforeach
                        </select>
                        <button style="color:#000;" class="btn btn">Lọc</button>
                    </form>
                    <div class="toolbar">
                    </div>
                    <div class="material-datatables">
                        <table id="table" class="table table-hover table-no-bordered table-hover" cellspacing="0"
                            width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Mã SV</th>
                                    {{-- <th>Tài khoản</th>
                                    <th>Mật khẩu</th> --}}
                                    <th>Họ tên</th>
                                    <th>Ngày sinh</th>
                                    <th>Giới tính</th>
                                    {{-- <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Ngày nhập học</th> --}}
                                    <th>Lớp</th>
                                    <th class="disabled-sorting text-center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listStudent as $student)
                                    <tr>
                                        <td>{{ $student->studentCode }}</td>
                                        <td>{{ $student->email }}</td>
                                        {{-- <td>{{ $student->passWord }}</td>
                                        <td>{{ $student->FullName }}</td> --}}
                                        <td>{{ $student->dateOfBirth }}</td>
                                        <td>{{ $student->NameGender }}</td>
                                        {{-- <td>{{ $student->phone }}</td>
                                        <td>{{ $student->address }}</td>
                                        <td>{{ $student->dateEnrollment }}</td> --}}
                                        <td>{{ $student->FullGrade }}</td>
                                        <td class="td-actions text-center">
                                            <a href="{{ route('student.show', $student->studentCode) }}"
                                                class="btn btn-simple btn-info btn-icon like">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                            <a href="{{ route('student.edit', $student->studentCode) }}"
                                                class="btn btn-simple btn-info btn-icon edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <form class="btn btn-simple btn-danger btn-icon remove"
                                                action="{{ route('student.destroy', $student->studentCode) }}"
                                                method="post" onclick="return confirm('Xóa không???')">
                                                @csrf
                                                @method('DELETE')
                                                <i class="material-icons">close</i>
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
    <form action="{{ url('import-csv') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit" class="btn btn-info">Thêm bằng file excel</button>
    </form>
    <form action="{{ url('export-csv') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-info">Xuất file</button>
    </form>

@endsection
