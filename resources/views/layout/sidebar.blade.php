<div class="sidebar" data-active-color="rose" data-background-color="black"
    data-image="{{ asset('assets') }}/img/sidebar-1.jpg">
    <!--
    Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
    Tip 2: you can also add an image using data-image tag
    Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
    <div class="sidebar-wrapper">

        <div class="user">
            <div class="photo">
                <img src="{{ asset('assets') }}/img/faces/avatar.jpg" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        @if (Session::exists('nameAdmin'))
                            {{ Session::get('nameAdmin') }}
                        @endif
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('profile')}}">
                                <i class="material-icons">list</i>
                                <span class="sidebar-normal"> Thông tin </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="material-icons">password</i>
                                <span class="sidebar-normal"> Thay đổi mật khẩu </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="material-icons">image</i>
                                <span class="sidebar-normal"> Avatar </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="{{ route('dashboard-admin') }}">
                    <i class="material-icons">dashboard</i>
                    <p> BẢNG ĐIỀU KHIỂN </p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#listExamples">
                    <i class="material-icons">
                        list</i>
                    <p> DANH MỤC
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="listExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('major.index') }}">
                                <i class="material-icons">article</i>
                                <p>CHUYÊN NGÀNH</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('course.index') }}">
                                <i class="material-icons">apps</i>
                                <p>KHÓA</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('semester.index') }}">
                                <i class="material-icons">schedule</i>
                                <p>HỌC KỲ</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('subject.index') }}">
                                <i class="material-icons">menu_book</i>
                                <p>MÔN HỌC</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('grade.index') }}">
                                <i class="material-icons">class</i>
                                <p>LỚP</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('student.index') }}">
                                <i class="material-icons">person</i>
                                <p>SINH VIÊN</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.index') }}">
                                <i class="material-icons">person</i>
                                <p>NHÂN VIÊN</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#manageExamples">
                    <i class="material-icons">
                        manage_accounts</i>
                    <p> QUẢN LÝ
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="manageExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('mark.index') }}">
                                <i class="material-icons">grade</i>
                                <p>ĐIỂM</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('mark-resit.index') }}">
                                <i class="material-icons">assignment</i>
                                <p>ĐIỂM THI LẠI</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="material-icons">people</i>
                                <p>ĐIỂM TRUNG BÌNH</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#analyticExamples">
                    <i class="material-icons">
                        analytics</i>
                    <p> THỐNG KÊ
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="analyticExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('list-student-pass') }}">
                                <i class="material-icons">grade</i>
                                <p>DANH SÁCH QUA MÔN</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="material-icons">people</i>
                                <p>DANH SÁCH THI LẠI</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="material-icons">assignment</i>
                                <p> DANH SÁCH ĐIỂM</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="material-icons">people</i>
                                <p>DANH SÁCH HỌC LẠI</p>
                            </a>
                        </li> 

                    </ul>
                </div>
            </li>
            <li>
                <a href="{{ route('calendar') }}">
                    <i class="material-icons">date_range</i>
                    <p> LỊCH HỌC </p>
                </a>
            </li>
            <li>
                <a href="{{ route('logout-admin') }}">
                    <i class="material-icons">logout</i>
                    <p> ĐĂNG XUẤT </p>
                </a>
            </li>
        </ul>
    </div>
</div>
