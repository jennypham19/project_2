@extends('layout.index')
@section('content1')
<a class="navbar-brand" href="{{ route('mark.index')}}"> Điểm </a>
@endsection
@section('content')
    <h1>Cập nhật điểm</h1>
    <!-- <form action="{{ route('mark.update') }}" method="post">
        @method('PUT')
        @csrf -->
        <!-- Tên chuyên ngành:<input type="text" name="name-major" value="{{ $major->nameMajor}}"><br> -->
        <!-- <button>Cập nhật</button> -->
    <!-- </form> -->
@endsection