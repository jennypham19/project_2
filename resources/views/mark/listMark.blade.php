@extends('layout.index')
@section('title')
    Quản lý điểm
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('mark.index') }}"> ĐIỂM </a>
@endsection
@section('content')
    {{-- <h1>Điểm</h1> --}}
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
                        <table id="table" class="table table-striped table-no-bordered table-hover" cellspacing="0"
                            width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sinh viên</th>
                                    <th>Môn học</th>
                                    <th>Điểm lý thuyết</th>
                                    <th>Điểm thực hành</th>
                                    <th>Ghi chú</th>
                                    <th class="disabled-sorting text-center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listMark as $mark)
                                    <tr>
                                        <td>{{ $mark->number }}</td>
                                        <td>{{ $mark->FullName }}</td>
                                        <td>{{ $mark->nameSubject }}</td>
                                        <td>{{ $mark->mark_final }}</td>
                                        <td>{{ $mark->mark_skill}}</td>
                                        <td>{{ $mark->note }}</td>
                                        <td class="td-actions text-center">
                                            <a href="{{ route('mark.edit',$mark->number) }}">
                                                <button class="btn btn-success btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <form action="{{ route('mark.destroy',$mark->number) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs">
                                                    <i class="material-icons">lock</i>
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
    <a href="{{ route('mark.create') }}" class="btn btn-info" style="color:black;">Thêm điểm</a>

@endsection
