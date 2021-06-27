<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="/assets/img/sidebar-1.jpg">
    <!--
    Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
    Tip 2: you can also add an image using data-image tag
    Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
    <div class="sidebar-wrapper">
        
        <div class="user">
            <div class="photo">
                <img src="/assets/img/faces/avatar.jpg" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        Tania Andrew
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
                <a href="{{ route('dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#majorExamples">
                    <i class="material-icons">image</i>
                    <p> Major
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="majorExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('major.index')}}">
                                <span class="sidebar-mini"> LM </span>
                                <span class="sidebar-normal"> List Major </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('major.create')}}">
                                <span class="sidebar-mini"> CM </span>
                                <span class="sidebar-normal"> Create Major </span>
                            </a>
                        </li>   
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#courseExamples">
                    <i class="material-icons">apps</i>
                    <p> Course
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="courseExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('course.index')}}">
                                <span class="sidebar-mini"> LC </span>
                                <span class="sidebar-normal"> List Course </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('course.create')}}">
                                <span class="sidebar-mini"> CC </span>
                                <span class="sidebar-normal"> Create Course </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#semesterExamples">
                    <i class="material-icons">place</i>
                    <p> Semester
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="semesterExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('semester.index')}}">
                                <span class="sidebar-mini"> LS </span>
                                <span class="sidebar-normal"> List Semester </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('semester.create')}}">
                                <span class="sidebar-mini"> CS </span>
                                <span class="sidebar-normal"> Create Semester </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#subjectExamples">
                    <i class="material-icons">content_paste</i>
                    <p> Subject
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="subjectExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('subject.index')}}">
                                <span class="sidebar-mini"> LS </span>
                                <span class="sidebar-normal"> List Subject </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('subject.create')}}">
                                <span class="sidebar-mini"> CS </span>
                                <span class="sidebar-normal"> Create Subject </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#gradeExamples">
                    <i class="material-icons">grid_on</i>
                    <p> Grade
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="gradeExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('grade.index')}}">
                                <span class="sidebar-mini"> LG </span>
                                <span class="sidebar-normal"> List Grade </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('grade.create')}}">
                                <span class="sidebar-mini"> CG </span>
                                <span class="sidebar-normal"> Create Grade </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#studentExamples">
                    <i class="material-icons">place</i>
                    <p> Student
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="studentExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('student.index')}}">
                                <span class="sidebar-mini"> LS </span>
                                <span class="sidebar-normal"> List Student </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('student.create')}}">
                                <span class="sidebar-mini"> CS </span>
                                <span class="sidebar-normal"> Create Student </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#markExamples">
                    <i class="material-icons">place</i>
                    <p> Mark
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="markExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('mark.index')}}">
                                <span class="sidebar-mini"> LM </span>
                                <span class="sidebar-normal"> List Mark </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('mark.create')}}">
                                <span class="sidebar-mini"> CM </span>
                                <span class="sidebar-normal"> Create Mark </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">date_range</i>
                    <p> Calendar </p>
                </a>
            </li>
        </ul>
    </div>
</div>