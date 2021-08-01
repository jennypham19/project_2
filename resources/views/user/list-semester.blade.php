@extends('layout-user.index')
@section('content-user')
    <h1>Học kỳ</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Mã</th>
                <th>Tên học kỳ</th>
                <th>Năm</th>
            </tr>
        </thead>
        @foreach ($listSemester as $semester)
            <tbody>
                <tr>
                    <td>{{ $semester->semesterCode }}</td>
                    <td>{{ $semester->nameSemester }}</td>
                    <td>{{ $semester->year }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection
