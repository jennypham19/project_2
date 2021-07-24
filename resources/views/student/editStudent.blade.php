@extends('layout.index')
@section('content1')
<a class="navbar-brand" href="{{ route('student.index')}}"> Sinh Viên </a>
@endsection
@section('content')
    <h1>Cập nhật thông tin sinh viên</h1>
    <form action="{{ route('student.update',$student->studentCode) }}" method="post">
        @method('PUT')
        @csrf
        Email: <input type="text" name="email" value="{{$student->email}}"><br>
        Mật khẩu: <input type="password" name="password" value="{{$student->passWord}}"><br>
        Tên: <input type="text" name="first-name" value="{{$student->firstName}}"><br>
        Tên đệm: <input type="text" name="middle-name" value="{{$student->middleName}}"><br>
        Họ: <input type="text" name="last-name" value="{{$student->lastName}}"><br>
        Ngày sinh: <input type="date" name="dob" value="{{$student->dateOfBirth}}"><br>
        Giới tính: <input type="radio" name="gender" value="1" @if ($student->genDer == 1)
            checked
        @endif>Nam
        <input type="radio" name="gender" value="0" @if ($student->genDer == 0)
            checked
        @endif>Nữ <br>
        Số điện thoại: <input type="text" name="phone" value="{{$student->phone}}"><br>
        Địa chỉ: <input type="text" name="address" value="{{$student->address}}"><br>
        Trạng thái: <input type="radio" name="status" value="1" @if ($student->status == 1)
            checked
        @endif>Hoạt động
        <input type="radio" name="status" value="0" @if ($student->status == 0)
            checked
        @endif>Không hoạt động <br>
        Ngày nhập học: <input type="date" name="date" value="{{$student->dateEnrollment}}"><br>
        Lớp: <select name="grade">
                @foreach ($grade as $grade1)      
                <option value="{{ $grade1->classCode }}" @if ($student->classCode==$grade1->classCode)
                    selected  
                @endif>{{ $grade1->FullGrade }}</option>
                 @endforeach
        </select><br>
        <button>Cập nhập</button>
    </form>
@endsection