<div class="sidebar" data-color="yellow" data-image="{{ asset('assets1') }}/img/full-screen-image-3.jpg">
    <!--

    Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
    Tip 2: you can also add an image using data-image tag

  -->

    

    <div class="sidebar-wrapper">
        <div class="user">
            <div class="info">
                <div class="photo">
                    <img src="{{ asset('assets1') }}/img/default-avatar.png" />
                </div>

                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                       Phạm Ngọc Ánh
                        <b class="caret"></b>
                    </span>
                </a>

                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#pablo">
                                <span class="sidebar-mini">MP</span>
                                <span class="sidebar-normal">My Profile</span>
                            </a>
                        </li>

                        <li>
                            <a href="#pablo">
                                <span class="sidebar-mini">EP</span>
                                <span class="sidebar-normal">Edit Profile</span>
                            </a>
                        </li>

                        <li>
                            <a href="#pablo">
                                <span class="sidebar-mini">S</span>
                                <span class="sidebar-normal">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="nav">

            <li>
                <a href="{{ route('major-student') }}">
                    <i class="pe-7s-plugin"></i>
                    <p>Major
                    </p>
                </a>
            </li>
            <li>
                <a href="{{ route('course-student') }}">
                    <i class="pe-7s-plugin"></i>
                    <p>Course
                    </p>
                </a>
            </li>
            <li>
                <a href="{{ route('semester-student') }}">
                    <i class="pe-7s-plugin"></i>
                    <p>Semester
                    </p>
                </a>
            </li>
            <li>
                <a href="{{ route('subject-student') }}">
                    <i class="pe-7s-plugin"></i>
                    <p>Subject
                    </p>
                </a>
            </li>
            <li>
                <a href="{{ route('grade-student') }}">
                    <i class="pe-7s-plugin"></i>
                    <p>Grade
                    </p>
                </a>
            </li>
            <li>
                <a href="{{ route('mark-student') }}">
                    <i class="pe-7s-plugin"></i>
                    <p>Mark
                    </p>
                </a>
            </li>
            <li>
                <a href="{{ route('calendar-student') }}">
                    <i class="pe-7s-plugin"></i>
                    <p>Calendar
                    </p>
                </a>
            </li>
            <li>
                <a href="{{ route('logout-student') }}">
                    <i class="pe-7s-plugin"></i>
                    <p>Logout
                    </p>
                </a>
            </li>
        </ul>
    </div>
</div>