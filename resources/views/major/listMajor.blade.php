@extends('layout.index')
@section('title')
    Quản lý ngành học
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('major.index') }}"> CHUYÊN NGÀNH </a>
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
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} </p>
      @endif
    @endforeach
  </div> 
  <!-- end .flash-message -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <div style="float:right;">
                        <a href="{{ route('major.create') }}"><i class ="material-icons">add</i> </a> 
                    </div>
                    <h4 class="card-title">CHUYÊN NGÀNH</h4>
                    <div class="toolbar">

                    </div>
                    <div class="material-datatables">
                        <table id="table" class="table table-hover table-no-bordered table-hover" cellspacing="0"
                            width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Mã chuyên ngành</th>
                                    <th>Tên chuyên ngành</th>
                                    <th class="disabled-sorting text-center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listMajor as $major)
                                    <tr>
                                        <td>{{ $major->majorCode }}</td>
                                        <td>{{ $major->nameMajor }}</td>
                                        <td class="td-actions text-center">
                                            <a href="{{ route('major.edit', [$major->majorCode]) }}"
                                                class="btn btn-simple btn-info btn-icon edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            
                                            <form class="btn btn-simple btn-danger btn-icon remove"
                                                action="{{ route('major.destroy', $major->majorCode) }}" method="post"
                                                onclick="return confirm('Xóa không???')">
                                                @csrf
                                                @method('DELETE')
                                                <i class="material-icons">close</i>
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
