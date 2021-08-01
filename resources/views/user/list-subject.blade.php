@extends('layout-user.index')
@section('content-user')
    <h1>Môn học</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Mã MH</th>
                <th>Tên MH</th>
                <th>Số giờ</th>
                <th>Ngày bắt đầu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listSubject as $subject)
                <tr>
                    <td>{{ $subject->subjectCode }}</td>
                    <td>{{ $subject->nameSubject }}</td>
                    <td>{{ $subject->totalClassHour }}</td>
                    <td>{{ $subject->startDate }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
