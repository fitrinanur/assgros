<div class="topbar-main">
    <div class="container">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="" class="logo">
                <span>Assgross
                    <span>market</span>
                </span>
            </a>
        </div>
        <!-- End Logo container-->


        <div class="menu-extras">

            <ul class="nav navbar-nav navbar-right pull-right">
                <li class="dropdown user-box">
                    <a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                        <img src="{{ asset('images/adminto/users/avatar-1.jpg') }}" alt="user-img" class="img-circle user-img">
                        <div class="user-status away">
                            <i class="zmdi zmdi-dot-circle"></i>
                        </div>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                <i class="ti-power-off m-r-5"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

    </div>
</div>