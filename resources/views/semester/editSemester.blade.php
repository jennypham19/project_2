@extends('layout.index')
@section('title')
    Cập nhật học kỳ
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('semester.index') }}">HỌC KỲ </a>
@endsection
@section('content')
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">mail_outline</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">HỌC KỲ</h4>
            <form action="{{ route('semester.update', $semester->numberSemester) }}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group label-floating">
                    <label style="color:black;">Mã học kỳ</label>
                    <input type="text" class="form-control" name="code-semester" value="{{ $semester->semesterCode }}">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Tên học kỳ</label>
                    <input type="text" class="form-control" name="name-semester" value="{{ $semester->nameSemester }}">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Năm</label>
                    <input type="text" class="form-control" name="year-semester1" value="{{ $semester->year1 }}">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Năm</label>
                    <input type="text" class="form-control" name="year-semester2" value="{{ $semester->year2 }}">
                </div>
                <button type="submit" class="btn btn-fill btn-rose">Thêm</button>
            </form>
        </div>
    </div>
@endsection
