@extends('layout.index')
@section('title')
    Quản lý lớp
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('grade.index') }}"> LỚP </a>
@endsection
@section('content')
    {{-- <h1>Danh sách lớp</h1> --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">LỚP</h4>
                    <div class="toolbar">

                    </div>
                    <div class="material-datatables">
                        <table id="table" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Mã lớp</th>
                                    <th>Tên lớp</th>
                                    <th>Chuyên ngành</th>
                                    <th class="disabled-sorting text-center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listGrade as $grade)
                                    <tr>
                                        <td>{{ $grade->classCode }}</td>
                                        <td> <a href="student?filter={{$grade->classCode}}"> {{ $grade->FullGrade }}</a></td> 
                                        {{-- <td><a href="student?filter=2">BKD03K11</a></td> --}}
                                        <td>{{ $grade->nameMajor }}</td>
                                        <td class="td-actions text-center">
                                            <a href="{{ route('grade.edit',$grade->classCode) }}">
                                                <button class="btn btn-success btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <form action="{{ route('grade.destroy',$grade->classCode) }}" method="post" onclick="return confirm('Xóa không???')">
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
    <a href="{{ route('grade.create') }}" class="btn btn-info" style="color:black;">Thêm lớp</a>
@endsection
