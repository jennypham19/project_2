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
