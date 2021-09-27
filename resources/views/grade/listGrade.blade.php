@extends('layout.index')
@section('title')
    Quản lý lớp
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('grade.index') }}"> LỚP </a>
@endsection
@section('content')
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if (Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} </p>
        @endif
    @endforeach
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <div style="float:right;">
                        <a href="{{ route('grade.create') }}"><i class="material-icons">add</i> </a>
                    </div>
                    <h4 class="card-title">LỚP</h4>
                    <div class="toolbar">

                    </div>
                    <div class="material-datatables">
                        <table id="table" class="table table-hover table-no-bordered table-hover" cellspacing="0"
                            width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Mã lớp</th>
                                    <th>Tên lớp</th>
                                    <th>Chuyên ngành</th>
                                    <th class="disabled-sorting text-center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listGrade as $grade)
                                    <tr>
                                        <td>{{ $grade->classCode }}</td>
                                        <td> <a href="student?filter={{ $grade->classCode }}">
                                                {{ $grade->FullGrade }}</a>
                                        </td>
                                        {{-- <td><a href="student?filter=2">BKD03K11</a></td> --}}
                                        <td>{{ $grade->nameMajor }}</td>
                                        <td class="td-actions text-center">
                                            <a href="{{ route('grade.edit', $grade->classCode) }}"
                                                class="btn btn-simple btn-info btn-icon edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <form class="btn btn-simple btn-danger btn-icon remove"
                                                action="{{ route('grade.destroy', $grade->classCode) }}" method="post"
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
