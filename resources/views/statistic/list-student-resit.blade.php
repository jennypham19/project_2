@extends('layout.index')
@section('title')
    Quản lý điểm
@endsection
@section('content1')

@endsection
@section('content')
    <h3>Danh sách thi lại</h3>
    <table class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
        <thead>
            <tr>
                <th><b>STT</b></th>
                <th><b>Mã sinh viên</b></th>
                <th><b>Lớp</b></th>
                <th><b>Tên sinh viên</b></th>
                <th><b>Môn</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mark1 as $mark)
                <tr>
                    <td>{{ $mark->number }}</td>
                    <td>{{ $mark->studentCode }}</td>
                    <td>{{ $mark->FullGrade }}</td>
                    <td>{{ $mark->FullName }}</td>
                    <td>{{ $mark->nameSubject }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route("export-student-resit") }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-info">Xuất</button>
    </form>
@endsection
