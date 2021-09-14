@extends('layout.index')
@section('content')
    <h3>Danh sách điểm sinh viên theo lớp</h3>
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
    <form action="{{ route('export-student-mark') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-3" style="display: flex;">
                <select name="grade[]" class="selectpicker" multiple id="exportExcel">
                    <option disabled>chon lop</option>
                    <option value="" id="optSelectAll">Tat ca</option>
                    @foreach ($listGrade as $item)
                        <option style="color:#000;" value="{{ $item->classCode }}">{{ $item->FullGrade }}</option>
                    @endforeach
                </select>
                <button style="color:#000;" type="submit" name="export_student-mark" class="btn btn">Xuất
                    file</button>
            </div>
        </div>
    </form>
@endsection
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(function() {
        $(document).on('change', '#exportExcel', function() {
            let isSelectAll = $('#optSelectAll').prop('selected');

            console.log("change", isSelectAll);

            if (isSelectAll) {
                console.log('must display');
                $(this).find('option:not(#optSelectAll)').prop('disabled', true).prop('se');
                $(this).selectpicker('refresh');
            } else {
                $(this).find('option').prop('disabled', false);
                $(this).selectpicker('refresh');
            }
        })
    });
</script> --}}
