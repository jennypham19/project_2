@extends('layout.index')
@section('title')
    Cập nhật sinh viên
@endsection
@section('content1')
    <a class="navbar-brand" href="">SINH VIÊN</a>
@endsection
@section('content')
    <h1>Cập nhật sinh viên</h1>
    <form action="{{ route('student.update',$student->studentCode) }}" method="post">
        @csrf
        @method('PUT')
        Email: <input type="text" name="email" value="{{ $student->email }}"><br>
        Password: <input type="text" name="password" value="{{ $student->passWord }}"><br>
        FirstName: <input type="text" name="first-name" value="{{ $student->firstName }}"><br>
        MiddleName: <input type="text" name="middle-name" value="{{ $student->middleName }}"><br>
        LastName: <input type="text" name="last-name" value="{{ $student->lastName }}"><br>
        DateOfBirth: <input type="date" name="dob" value="{{ $student->dateOfBirth }}"><br>
        Gender: <input type="radio" name="gender" value="0" @if ($student->genDer==0)
            checked
        @endif>Nữ
                <input type="radio" name="gender" value="1" @if ($student->genDer==1)
            checked     
                @endif>Nam
        <br>
        Phone: <input type="text" name="phone" value="{{ $student->phone }}"><br>
        Address: <input type="text" name="address" value="{{ $student->address }}"><br>
        Status: <input type="radio" name="status" value="1" @if ($student->status==1)
            checked
        @endif>Hoạt động
            <input type="radio" name="status" value="0" @if ($student->status==0)
                checked
            @endif>Không hoạt động
        <br>
        DateEnrolled: <input type="date" name="dateEnrolled" value="{{ $student->dateEnrollment }}"><br>
        Class: <select name="class">
            @foreach ($grade as $class)
                <option value="{{ $class->classCode }}" @if ($student->classCode == $class->classCode)
                    selected
                @endif>{{ $class->FullGrade }}</option>
            @endforeach
        </select>
       <br>
        <button>Cập nhật</button>
    </form>
@endsection
