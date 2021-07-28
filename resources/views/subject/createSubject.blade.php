@extends('layout.index')
@section('title')
    Thêm môn học
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('subject.index') }}"> MÔN HỌC </a>
@endsection
@section('content')
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">mail_outline</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">MÔN HỌC</h4>
            <form action="{{ route('subject.store') }}" method="post">
                @csrf
                <div class="form-group label-floating">
                    <label style="color:black;">Mã môn học</label>
                    <input type="text" class="form-control" name="code-subject">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Môn học</label>
                    <input type="text" class="form-control" name="name-subject">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Số giờ</label>
                    <input type="text" class="form-control" name="hour">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Ngày bắt đầu</label>
                    <input type="date" class="form-control" name="start-date">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Lý thuyết:</label>
                    <input type="radio"  name="final" value="1">Yes
                    <input type="radio"  name="final" value="0">No
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Thực hành:</label>
                    <input type="radio" name="skill" value="1">Yes
                    <input type="radio" name="skill" value="0">No
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Học kỳ</label>
                    <select name="semester" class="form-control">
                        @foreach ($semester as $sem)
                            <option value="{{ $sem->numberSemester }}">{{ $sem->FullSemester }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-fill btn-rose">Thêm</button>
            </form>
        </div>
    </div>
@endsection
