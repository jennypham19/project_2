@extends('layout.index')
@section('title')
    Quản lý sinh viên
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('student.index') }}"> SINH VIÊN </a>
@endsection
@section('content')
    {{-- <h1>Danh sách sinh viên</h1> --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">SINH VIÊN</h4>
                    <div class="toolbar">
                    </div>
                    <div>
                        <form action="" method="GET">
                            <select name="filter">
                                <option >All</option>
                                @foreach ($listGrade as $grade)
                                    <option value="{{ $grade->classCode }}"
                                     @if ( $grade->classCode == $filter )
                                        selected
                                    @endif >{{ $grade->FullGrade }}</option>
                                @endforeach 
                            </select> 
                            <button>Lọc</button>
                        </form>
                       
                    </div>
                    <a href="{{ route('student.create') }}" class="btn btn-info" style="color:black;">Thêm sinh viên</a>
                   <form action="{{url('export-csv')}}" method="POST" style="float: right">
                        @csrf
                        <input type="submit" value="Xuất file" name="export_csv" class="btn-btn-success">
                    </form>
                    <div class="material-datatables">
                        <table id="table" class="table table-striped table-no-bordered table-hover" cellspacing="0"
                            width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Mã SV</th>
                                    <th>Tài khoản</th>
                                    <th>Mật khẩu</th>
                                    <th>Họ tên</th>
                                    <th>Ngày sinh</th>
                                    <th>Giới tính</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
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
                                        <td>{{ $student->dateEnrollment }}</td>
                                        <td>{{ $student->FullGrade }}</td>
                                        <td class="td-actions text-center">
                                            <a href="{{ route('student.edit', $student->studentCode) }}">
                                                <button class="btn btn-success btn-xs">
                                                     <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <form action="{{ route('student.destroy', $student->studentCode) }}" method="post" onclick="return confirm('Xóa không???')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs">
                                                    <i class="material-icons">close</i>
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
    <form action="{{url('import-csv')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit" class="btn btn-info">Thêm bằng file excel</button>
    </form>
    
    
@endsection