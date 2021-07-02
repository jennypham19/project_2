@extends('layout.index')
@section('content1')
<a class="navbar-brand" href="{{ route('major.index')}}"> Major </a>
@endsection
@section('content')
    <h1>Cập nhập chuyên ngành</h1>
    <form action="{{ route('major.update',$major->majorCode) }}" method="post">
        @method('PUT')
        @csrf
        Tên chuyên ngành:<input type="text" name="name-major" value="{{ $major->nameMajor}}"><br>
        <button>Cập nhập</button>
    </form>
@endsection