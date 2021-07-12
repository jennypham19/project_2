@extends('layout-user.index')
@section('title')
    Chuyên ngành
@endsection
@section('content-user')
    <h1>Chuyên ngành</h1>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Mã chuyên ngành</th>
                <th>Tên chuyên ngành</th>
            </tr>
        </thead>
        @foreach ($listMajor as $major)
            <tbody>
                <tr>
                    <td>{{ $major->majorCode }}</td>
                    <td>{{ $major->nameMajor }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>

@endsection
