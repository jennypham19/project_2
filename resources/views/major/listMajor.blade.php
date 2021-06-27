@extends('index')

@section('content1')
    <a class="navbar-brand" href="{{ route('major.index')}}"> Major </a>
@endsection
@section('content2')
<div class="form-group form-search is-empty">
    <input type="text" class="form-control" value="{{ $search }}" placeholder=" Search " name="search">
    <span class="material-input"></span>
</div>
<button type="submit" class="btn btn-white btn-round btn-just-icon">
    <i class="material-icons">search</i>
    <div class="ripple-container"></div>
</button>
@endsection
@section('content')
    <h1>Thông tin chuyên ngành học</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Chuyên ngành</h4>
                    <div class="table-responsive">
                        <table class="table" id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Mã ngành học</th>
                                    <th>Tên ngành học</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <th>Mã ngành học</th>
                                <th>Tên ngành học</th>
                                <th class="text-right">Actions</th>
                            </tfoot>
                            @foreach($listMajor as $major)
                            <tbody>
                                <tr>
                                    <td>{{ $major->majorCode }}</td>
                                    <td>{{ $major->nameMajor }}</td>
                                    <td class="td-actions text-right">
                                        <a href="{{ route('major.show',$major->majorCode)}}">
                                            <button type="button" rel="tooltip" class="btn btn-info">
                                                <i class="material-icons">preview</i>
                                            </button>
                                        </a>
                                        <button type="button" rel="tooltip" class="btn btn-success">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <form action="{{ route('major.destroy',$major->majorCode)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button rel="tooltip" class="btn btn-danger">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {{-- {{$listMajor->links()}} --}}
@endsection