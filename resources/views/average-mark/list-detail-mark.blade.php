@extends('layout.index')
@section('title')
    Quản lý điểm
@endsection
@section('content1')
    <a class="navbar-brand" href="{{ route('mark-average.index') }}"> ĐIỂM TRUNG BÌNH </a>
@endsection
@section('content')
    <h3>Thông tin chi tiết</h3>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <table cellspacing="0" width="100%" style="width:100%">
                @foreach ($student as $item)
                    <p>
                        <tr>
                            <td>
                                <h4>Tên sinh viên</h4>
                            </td>
                            <td>
                                <h4><b>{{ $item->FullName }}</b></h4>
                            </td>
                        </tr>
                    </p>
                    <p>
                        <tr>
                            <td>
                                <h4>Lớp</h4>
                            </td>
                            <td>
                                <h4><b>{{ $item->FullGrade }}</b></h4>
                            </td>
                        </tr>
                    </p>
                @endforeach
            </table> 
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <table cellspacing="0" width="100%" style="width:100%">
                    <p>
                        <tr>
                            <td>
                                <h4>Điểm trung bình tổng</h4>
                            </td>
                            <td>
                                <h4><b>{{ $TBT }}</b></h4>
                            </td>
                        </tr>
                    </p>
            </table> 
        </div>
    </div>
    
    <table class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
        <thead>
            <tr style="background-color:rgb(135, 252, 197);">
                <th><b>Mã môn</b></th>
                <th><b>Tên Môn</b></th>
                <th><b>Điểm LT</b></th>
                <th><b>Điểm TH</b></th>
                <th><b>Điểm TB Môn</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mark as $value)
                <tr>
                    <td>{{ $value->subjectCode }}</td>
                    <td>{{ $value->nameSubject }}</td>
                    <td>{{ $value->MarkFinal1 }}</td>
                    <td>{{ $value->MarkSkill1 }}</td>
                    <td>{{ $value->TB }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
