@extends('layout.index')
@section('title')
    Quản lý môn học
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('subject.index') }}"> MÔN HỌC </a>
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
                        <a href="{{ route('subject.create') }}"><i class="material-icons">add</i> </a>
                    </div>
                    <h4 class="card-title">MÔN HỌC</h4>
                    <div class="toolbar">

                    </div>
                    <div class="material-datatables">
                        <table id="table" class="table table-hover table-no-bordered table-hover" cellspacing="0"
                            width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Mã MH</th>
                                    <th>Tên MH</th>
                                    <th>Số giờ</th>
                                    <th>Lý thuyết</th>
                                    <th>Thực hành</th>
                                    <th>Ngày bắt đầu</th>
                                    <th class="disabled-sorting text-center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listSubject as $subject)
                                    <tr>
                                        <td>{{ $subject->subjectCode }}</td>
                                        <td>{{ $subject->nameSubject }}</td>
                                        <td>{{ $subject->totalClassHour }}</td>
                                        <td>
                                            @if ($subject->final == 1)
                                                <i class="material-icons">check_circle</i>
                                            @else
                                                <i class="material-icons">cancel</i>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($subject->skill == 1)
                                                <i class="material-icons">check_circle</i>
                                            @else
                                                <i class="material-icons">cancel</i>
                                            @endif
                                        </td>
                                        <td>{{ $subject->startDate }}</td>
                                        <td class="td-actions text-center">
                                            <a href="{{ route('subject.edit', $subject->subjectCode) }}"
                                                class="btn btn-simple btn-info btn-icon edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <form class="btn btn-simple btn-danger btn-icon remove"
                                                action="{{ route('subject.destroy', $subject->subjectCode) }}"
                                                method="post" onclick="return confirm('Xóa không???')">
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
