@extends('layout.index')
@section('title')
    Thêm điểm
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('mark.index') }}"> ĐIỂM </a>
@endsection
@section('content')
    {{-- <h1>Thêm điểm cho sinh viên</h1> --}}
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">mail_outline</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">ĐIỂM</h4>
            <form action="{{ route('mark.store') }}" method="post">
                @csrf
                <div class="form-group label-floating">
                    <label class="control-label">Tên sinh viên</label>
                    <select name="student" class="form-control">
                        @foreach ($listStudent as $student)
                            <option value="{{ $student->studentCode }}">{{ $student->FullName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Môn học</label>
                    <select name="subject" class="form-control">
                        @foreach ($listSubject as $subject)
                            <option value="{{ $subject->subjectCode }}">{{ $subject->nameSubject }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Điểm lý thuyết </label>
                    <input type="text" class="form-control" name="mark_final">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Điểm thực hành </label>
                    <input type="text" class="form-control" name="mark_skill">
                </div>
                {{-- <div class="form-group label-floating">
                    <label class="control-label">Ghi chú</label>
                    <input type="text" class="form-control" name="note">
                </div> --}}
                <button type="submit" class="btn btn-fill btn-rose">Thêm</button>
            </form>
        </div>
    </div>
@endsection
