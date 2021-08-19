@extends('layout.index')
@section('title')
    Quản lý môn học
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('subject.index') }}"> MÔN HỌC </a>
@endsection
@section('content')
    {{-- <h1>Danh sách môn học</h1> --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">MÔN HỌC</h4>
                    <div class="toolbar">

                    </div>
                    <div class="material-datatables">
                        <table id="table" class="table table-striped table-no-bordered table-hover" cellspacing="0"
                            width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Mã MH</th>
                                    <th>Tên MH</th>
                                    <th>Số giờ</th>
                                    <th>Lý thuyết</th>
                                    <th>Thực hành</th>
                                    <th>Ngày bắt đầu</th>
                                    <th class="disabled-sorting text-center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listSubject as $subject)
                                    <tr>
                                        <td>{{ $subject->subjectCode }}</td>
                                        <td>{{ $subject->nameSubject }}</td>
                                        <td>{{ $subject->totalClassHour }}</td>
                                        <td>{{ $subject->NameFinal }}</td>
                                        <td>{{ $subject->NameSkill }}</td>
                                        <td>{{ $subject->startDate }}</td>
                                        <td class="td-actions text-center">
                                            <a href="{{ route('subject.edit',$subject->subjectCode) }}">
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
    <a href="{{ route('subject.create') }}" class="btn btn-info" style="color:black;">Thêm môn học</a>
@endsection
