@extends('layout.index')
@section('title')
    Cập nhật điểm
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('mark.index') }}">ĐIỂM</a>
@endsection
@section('content')
    <h1>Cập nhật điểm</h1>
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">mail_outline</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">ĐIỂM</h4>
            <form action="{{ route('mark.update', $mark->markCode) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group label-floating">
                    <label style="color:black;">Sinh viên</label>
                    <input type="text" class="form-control" name="name-sv" value="{{ $mark->studentCode }}"
                    placeholder="{{ $mark->FullName }}">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Môn học</label>
                    <input type="text" class="form-control" name="name-subject" value="{{ $mark->subjectCode }}"
                    placeholder="{{ $mark->nameSubject }}">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Điểm final lần 1</label>
                    <input type="text" class="form-control" name="mark-final1" value="{{ $mark->final1st }}">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Điểm final lần 2</label>
                    <input type="text" class="form-control" name="mark-final2" value="{{ $mark->final2nd }}">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Điểm skill lần 1</label>
                    <input type="text" class="form-control" name="mark-skill1" value="{{ $mark->skill1st }}">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Điểm skill lần 2</label>
                    <input type="text" class="form-control" name="mark-skill2" value="{{ $mark->skill2nd }}">
                </div>
                <button type="submit" class="btn btn-fill btn-rose">Thêm</button>
            </form>
        </div>
    </div>
@endsection
