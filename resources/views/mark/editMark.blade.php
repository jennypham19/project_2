@extends('layout.index')
@section('title')
    Cập nhật điểm
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('mark.index') }}">ĐIỂM</a>
@endsection
@section('content')
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">mail_outline</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">ĐIỂM</h4>
            <form action="{{ route('mark.update', $mark->numberMark) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group label-floating">
                    <label style="color:black;">Sinh viên</label>
                    <select name="name-sv" class="form-control">
                        @foreach ($student as $stu)
                            <option value="{{ $stu->numberStudent }}" @if ($mark->numberStudent == $stu->numberStudent) 
                                selected
                            @endif>{{ $stu->FullName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Môn học</label>
                    <select name="name-subject" class="form-control">
                        @foreach ($subject as $sub)
                            <option value="{{ $sub->numberSubject }}" @if ($mark->numberSubject == $sub->numberSubject) 
                                selected
                            @endif>{{ $sub->nameSubject }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Điểm lý thuyết</label>
                    <input type="text" class="form-control" name="mark" value="{{ $mark->mark_final }}">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Điểm thực hành</label>
                    <input type="text" class="form-control" name="mark" value="{{ $mark->mark_skill }}">
                </div>
                <button type="submit" class="btn btn-fill btn-rose">Thêm</button>
            </form>
        </div>
    </div>
@endsection
