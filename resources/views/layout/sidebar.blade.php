<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{ asset('assets') }}/img/sidebar-1.jpg">
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
                            {{ Session::get("nameAdmin") }}    
                        @endif
                        {{-- Quản trị viên --}}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="{{ route('dashboard-admin')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
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
                <a href="{{ route('mark.index') }}">
                    <i class="material-icons">place</i>
                    <p>ĐIỂM</p>
                </a>
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