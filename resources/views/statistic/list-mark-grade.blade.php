@extends('layout.index')
@section('content')
    <h3>Danh sách điểm sinh viên theo lớp</h3>
    <form action="">
        <select class="btn btn" name="grade">
            <option>==========</option>
            @foreach ($listGrade as $item)
                <option value="{{ $item->classCode }}" @if ($item->classCode == $idGrade)
                    selected
                @endif>{{ $item->FullGrade }}</option>
            @endforeach
        </select>
        <button class="btn btn">Lọc</button>
    </form>
    <table class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
        <thead>
            <tr style="background-color:rgb(122, 196, 245);">
                <th><b>STT</b></th>
                <th><b>Mã sinh viên</b></th>
                <th><b>Lớp</b></th>
                <th><b>Tên Sinh Viên</b></th>
                @foreach ($listSubject as $subject)
                    <th><b>{{ $subject->nameSubject }}</b></th>
                @endforeach
                <th><b>Điểm TB</b></th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($listMark as $mark)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $mark['id'] }}</td>
                    <td>{{ $mark['class'] }}</td>
                    <td>{{ $mark['Student'] }}</td>
                    @foreach ($mark['TBM'] as $mark1)
                        <td>{{ $mark1['TT'] }}</td>
                    @endforeach
                    <td>{{ $mark['TBT'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
