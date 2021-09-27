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
                    <div>
                        <form action="" method="GET">
                            <select style="color:#000;" class="btn btn" name="grade">
                                <option style="color:#000;">All</option>
                                @foreach ($listGrade as $item)
                                    <option style="color:#000;" value="{{ $item->classCode }}" @if ($item->classCode == $grade)
                                        selected
                                @endif>{{ $item->FullGrade }}</option>
                                @endforeach
                            </select>
                            <button class="btn btn">Lọc</button>
                        </form>
                    </div>
                    <div class="material-datatables">
                        <table id="table" class="table table-striped table-no-bordered table-hover" cellspacing="0"
                            width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>STT</th>
                                    <th>Mã sinh viên</th>
                                    <th>Lớp</th>
                                    <th>Tên sinh viên</th>
                                    <th>Điểm TB</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($listAvgMark as $avgMark)
                                    <tr>
                                        <th>
                                            <i class="material-icons"><a
                                                    href="{{ route('mark-average.show', $avgMark['id']) }}"
                                                    style="color:#000;">add</a></i>
                                        </th>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $avgMark['id'] }}</td>
                                        <td>{{ $avgMark['grade'] }}</td>
                                        <td>{{ $avgMark['student'] }}</td>
                                        <td>{{ $avgMark['TBT'] }}</td>
                                    </tr>
                                    @php
                                        $insert = DB::table('mark_average')->insert([
                                            'majorCode'=>$avgMark['major'],
                                            'classCode' => $avgMark['id-grade'],
                                            'studentCode' => $avgMark['id'],
                                            'mark_average' => $avgMark['TBT'],
                                        ]);
                                    @endphp
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <a href="{{ route('mark-average.create') }}" class="btn btn">Thêm</a> --}}
@endsection
