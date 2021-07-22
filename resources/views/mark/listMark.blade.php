@extends('layout.index')
@section('title')
    Quản lý điểm
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('mark.index') }}"> ĐIỂM </a>
@endsection
@section('content')
    {{-- <h1>Điểm</h1> --}}
    <a href="{{ route('mark.create') }}" class="btn btn-info" style="color:black;margin:50px 0px 0px 1050px;">Thêm điểm</a>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">ĐIỂM</h4>
                    <div class="toolbar">

                    </div>
                    <div class="material-datatables">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0"
                            width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Tên sinh viên</th>
                                    <th>Môn học</th>
                                    <th>Điểm lý thuyết lần 1</th>
                                    <th>Điểm lý thuyết lần 2</th>
                                    <th>Điểm thực hành lần 1</th>
                                    <th>Điểm thực hành lần 2</th>
                                    <th class="disabled-sorting text-center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listMark as $mark)
                                    <tr>
                                        <td>{{ $mark->FullName }}</td>
                                        <td>{{ $mark->nameSubject }}</td>
                                        <td>{{ $mark->final1st }}</td>
                                        <td>{{ $mark->final2st }}</td>
                                        <td>{{ $mark->skill1st }}</td>
                                        <td>{{ $mark->skill2st }}</td>
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
