<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->



        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                {{ auth()->user()->nama }}
                <i class="fas fa-user mr-2"></i>

            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-user mr-2"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-cog mr-2"></i> Setting
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ url('longout') }}" class="dropdown-item">

                    <i class="material-icons small"> </i>logout


                    <i class="fas fa-sign_out mr-2"></i> Logout
                </a>

            </div>
        </li>

    </ul>
</nav>
