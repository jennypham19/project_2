@extends('layout-user.index')
@section('content-user')
    <h1>Khóa</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Mã khóa</th>
                <th>Tên khóa</th>
            </tr>
        </thead>
        @foreach ($listCourse as $course)
            <tbody>
                <tr>
                    <td>{{ $course->courseCode }}</td>
                    <td>{{ $course->nameCourse }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection
