<div class="sidebar" data-color="yellow" data-image="{{ asset('assets1') }}/img/full-screen-image-3.jpg">
    <!--

    Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
    Tip 2: you can also add an image using data-image tag

  -->

    

    <div class="sidebar-wrapper">
        <div class="user">
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span class="text-center">
                        @if (Session::exists('user'))
                            <span >
                               {{ session('user')->FullName }}  
                            </span>  
                        @endif
                    </span>
                </a>
            </div>
        </div>

        <ul class="nav">
            <li>
                <a href="{{ route('home-student')}}">
                    <i class="pe-7s-plugin"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ route('profile-student',session('user')->studentCode) }}">
                    <i class="pe-7s-plugin"></i>
                    <p>Profile
                    </p>
                </a>
            </li>
            <li>
                <a href="{{ route('mark-student',session('user')->studentCode) }}">
                    <i class="pe-7s-plugin"></i>
                    <p>Mark
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