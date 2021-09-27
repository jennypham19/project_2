@extends('layout.index')
@section('title')
    Quản lý điểm
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('mark.index') }}"> ĐIỂM </a>
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
                        <a href="{{ route('mark.create') }}"><i class="material-icons">add</i> </a>
                    </div>
                    <h4 class="card-title">ĐIỂM</h4>
                    <form action="">
                        <select style="color:#000;" class="btn btn" name="filter_student">
                            <option style="color:#000;">All</option>
                            @foreach ($listStudent as $student)
                                <option style="color:#000;" value="{{ $student->studentCode }}" @if ($student->studentCode == $filterStudent)
                                    selected
                            @endif>
                            {{ $student->FullName }}
                            </option>
                            @endforeach
                        </select>
                        <button style="color:#000;" class="btn btn">Lọc</button>
                    </form>
                    <div class="toolbar">
                    </div>
                    <div class="material-datatables">
                        <table id="table" class="table table-hover table-no-bordered table-hover" cellspacing="0"
                            width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sinh viên</th>
                                    <th>Môn học</th>
                                    <th>Điểm LT</th>
                                    <th>Điểm TH</th>
                                    <th>Điểm LT lần 1</th>
                                    <th>Điểm TH lần 2</th>
                                    <th class="disabled-sorting text-center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listMark as $mark)
                                    <tr>
                                        <td>{{ $mark->number }}</td>
                                        <td>{{ $mark->FullName }}</td>
                                        <td>{{ $mark->nameSubject }}</td>
                                        <td>
                                            @if ($mark->mark_final == '')
                                                <i class="material-icons">minimize</i>
                                            @else
                                                {{ $mark->mark_final }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($mark->mark_skill == '')
                                                <i class="material-icons">minimize</i>
                                            @else
                                                {{ $mark->mark_skill }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($mark->mark_final_resit == '')
                                                <i class="material-icons">minimize</i>
                                            @else
                                                {{ $mark->mark_final_resit }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($mark->mark_skill_resit == '')
                                                <i class="material-icons">minimize</i>
                                            @else
                                                {{ $mark->mark_skill_resit }}
                                            @endif
                                        </td>
                                        <td class="td-actions text-center">
                                            <a href="{{ route('mark.edit', $mark->number) }}"
                                                class="btn btn-simple btn-info btn-icon edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <form class="btn btn-simple btn-danger btn-icon remove"
                                                action="{{ route('mark.destroy', $mark->number) }}" method="post"
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
