@extends('layout.index')
@section('content1')
    <a class="navbar-brand" href="{{ route('major.index') }}"> CHUYÊN NGÀNH </a>
@endsection
@section('content')
    <h1>Thêm chuyên ngành</h1>
    <form action="{{route('major.store')}}" method="post">
        @csrf
        Tên chuyên ngành:<input type="text" name="name" required><br>
        <button>Thêm</button>
    </form>
@endsection