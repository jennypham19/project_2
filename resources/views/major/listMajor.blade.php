@extends('layout.index')
@section('title')
    Quản lý ngành học
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('major.index') }}"> Major </a>
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
    <h1>Danh sách ngành học</h1>
    <a href="{{ route('major.create') }}" class="btn btn-info" style="color:black;">Thêm ngành học</a>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Chuyên ngành</h4>
                    <div class="toolbar">

                    </div>
                    <div class="material-datatables">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0"
                            width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Mã ngành học</th>
                                    <th>Tên ngành học</th>
                                    <th class="disabled-sorting text-center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Mã ngành học</th>
                                    <th>Tên ngành học</th>
                                    <th class="text-center">Tác vụ</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($listMajor as $major)
                                    <tr>
                                        <td>{{ $major->majorCode }}</td>
                                        <td>{{ $major->nameMajor }}</td>
                                        <td class="td-actions text-center">
                                            <a href="">
                                                <button class="btn btn-success btn-xs">
                                                     <i class   ="material-icons">edit</i>Edit
                                                </button>
                                            </a>
                                            <form action="" method="post">
                                                <button class="btn btn-danger btn-xs">
                                                    <i class="material-icons">lock</i>Hide
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
