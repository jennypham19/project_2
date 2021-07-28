@extends('layout.index')
@section('title')
    Cập nhật chuyên ngành
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('major.index') }}"> CHUYÊN NGÀNH </a>
@endsection
@section('content')
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">mail_outline</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">ĐIỂM</h4>
            <form action="{{ route('major.update', $major->numberMajor) }}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group label-floating">
                    <label style="color:black;"> Mã chuyên ngành</label>
                    <input type="text" class="form-control" name="code-major" value="{{ $major->majorCode }}">
                </div>
                <div class="form-group label-floating">
                    <label style="color:black;">Chuyên ngành</label>
                    <input type="text" class="form-control" name="name-major" value="{{ $major->nameMajor }}">
                </div>
                <button type="submit" class="btn btn-fill btn-rose">Thêm</button>
            </form>
        </div>
    </div>
@endsection
