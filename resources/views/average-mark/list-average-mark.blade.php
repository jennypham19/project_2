@extends('layout.index')
@section('title')
    Quản lý điểm
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('mark-average.index') }}"> ĐIỂM TRUNG BÌNH </a>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">ĐIỂM TRUNG BÌNH</h4>
                    <div class="toolbar">
                    </div>
                    {{-- <div style="float:left;">
                        <form action="">
                            <select name="filter_student">
                                <option>All</option>
                                @foreach ($listStudent as $student)
                                    <option value="{{ $student->studentCode }}" @if ($student->studentCode == $filterStudent)
                                        selected
                                    @endif>
                                        {{ $student->FullName }}
                                    </option>
                                @endforeach
                            </select>
                            <button>Lọc</button>
                        </form> 
                    </div> --}}
                    {{-- <div style="margin-left:250px; ">
                        <form action="">
                            <select name="filter_subject">
                                <option>All</option>
                                @foreach ($listSubject as $subject)
                                    <option value="{{ $subject->subjectCode }}" @if ($subject->subjectCode == $filterSubject)
                                        selected
                                    @endif>
                                        {{ $subject->nameSubject }}
                                    </option>
                                @endforeach
                            </select>
                            <button>Lọc</button>
                        </form>
                    </div> --}}
                    <div class="material-datatables">
                        <table id="table" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sinh viên</th>
                                    <th>Lớp</th>
                                    @foreach ($listSubject as $subject)
                                       <th colspan="2">{{ $subject->nameSubject }}</th> 
                                    @endforeach
                                    <th>Điểm TB</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Phạm Ngọc Ánh</td>
                                    <td>BKD02K11</td>
                                    <td>8</td>
                                    <td>8</td>
                                    <td>8</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>8.5</td>
                                    <td>8.7</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('mark-average.create') }}" class="btn btn-info" style="color:black;">Thêm mới</a>
@endsection
