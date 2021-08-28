@extends('layout.index')
@section('title')
    Điểm thi lại
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('mark-resit.index') }}">ĐIỂM THI LẠI</a>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">assignment</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">ĐIỂM THI LẠI</h4>
                <div class="toolbar">

                </div>
                <div class="material-datatables">
                    <table id="table" class="table table-striped table-no-bordered table-hover" cellspacing="0"
                        width="100%" style="width:100%">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sinh viên</th>
                                <th>Môn học</th>
                                <th>Điểm thi lại lý thuyết</th>
                                <th>Điểm thi lại thực hành</th>
                                <th class="disabled-sorting text-center">Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listMark as $mark)
                                <tr>
                                    <td>{{ $mark->number }}</td>
                                    <td>{{ $mark->FullName }}</td>
                                    <td>{{ $mark->nameSubject }}</td>
                                    <td>{{ $mark->mark_resit_final }}</td>
                                    <td>{{ $mark->mark_resit_skill }}</td>
                                    <td class="td-actions text-center">
                                        <a href="#">
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
<a href="{{ route('mark-resit.create') }}" class="btn btn-info" style="color:black;">Thêm mới</a>
@endsection