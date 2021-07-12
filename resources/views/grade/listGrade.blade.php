@extends('layout.index')
@section('content1')
    <a class="navbar-brand" href="{{ route('grade.index') }}"> Grade </a>
@endsection
@section('content')
    <h1>Danh sách lớp</h1>
    <a href="{{ route('grade.create') }}" class="btn btn-info" style="color:black;">Thêm lớp</a>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Lớp</h4>
                    <div class="toolbar">

                    </div>
                    <div class="material-datatables">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Mã lớp</th>
                                    <th>Tên lớp</th>
                                    <th>Chuyên ngành</th>
                                    <th class="disabled-sorting text-center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Mã lớp</th>
                                    <th>Tên lớp</th>
                                    <th>Chuyên ngành</th>
                                    <th class="text-center">Tác vụ</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($listGrade as $grade)
                                    <tr>
                                        <td>{{ $grade->classCode }}</td>
                                        <td>{{ $grade->FullGrade }}</td>
                                        <td>{{ $grade->nameMajor }}</td>
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