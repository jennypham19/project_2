@extends('layout.index')
@section('title')
    Quản lý học kỳ
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('semester.index') }}"> HỌC KỲ </a>
@endsection
@section('content2')
<div class="form-group form-search is-empty">
    <input type="text" class="form-control" value="{{ $search }}" placeholder=" Search " name="search">
    <span class="material-input"></span>
</div>
<button type="submit" class="btn btn-white btn-round btn-just-icon">
    <i class="material-icons">search</i>
    <div class="ripple-container"></div>
</button>
@endsection
@section('content')
    {{-- <h1>Danh sách học kỳ</h1> --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">HỌC KỲ</h4>
                    <div class="toolbar">

                    </div>
                    <div class="material-datatables">
                        <table id="table" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Mã học kỳ</th>
                                    <th>Tên học kỳ</th>
                                    <th>Năm</th>
                                    <th class="disabled-sorting text-center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listSemester as $semester)
                                    <tr>
                                        <td>{{ $semester->semesterCode }}</td>
                                        <td>{{ $semester->nameSemester }}</td>
                                        <td>{{ $semester->year }}</td>
                                        <td class="td-actions text-center">
                                            <a href="{{ route('semester.edit',$semester->semesterCode) }}">
                                                <button class="btn btn-success btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <form action="{{ route('semester.destroy',$semester->semesterCode) }}" method="post" onclick="return confirm('Xóa không???')">
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
    <a href="{{ route('semester.create') }}" class="btn btn-info" style="color:black;">Thêm học kỳ</a>
@endsection
