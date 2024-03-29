<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/coreui-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
    @yield('adminMoreLink')
    <title>Admin</title>
</head>
<style>
    .line-1{
        position: relative;
        top: 20%;
        width: 24em;
        margin: 0 auto;
        border-right: 2px solid rgba(0, 0, 0, 0.75);
        font-size: 180%;
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        transform: translateY(-50%);
    }

    .anim-typewriter{
        animation: typewriter 4s steps(44) 1s 1 normal both,
        blinkTextCursor 500ms steps(44) infinite normal;
        animation-iteration-count: infinite ;
    }
    @keyframes typewriter{
        from{width: 0;}
        to{width: 24em;}
    }
    @keyframes blinkTextCursor{
        from{border-right-color: rgba(255,255,255,.75);}
        to{border-right-color: transparent;}
    }
</style>
<body class="app sidebar-show">
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h2 class="line-1 anim-typewriter">Welcome Admin Kompek 2019</h2>
    </header>
    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-title">Menu</li>
                    <li class="nav-item">
                        <a class="nav-link" href="/AdminKompekPage/Answer">
                            <i class="nav-icon cui-speedometer"></i> Answer
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/AdminKompekPage/Participant">
                            <i class="nav-icon cui-user"></i> Participant
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/AdminKompekPage/Case">
                            <i class="nav-icon cui-layers "></i> Case
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/AdminKompekPage/Announcement">
                            <i class="nav-icon cui-share "></i> Announcement
                        </a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="nav-icon cui-puzzle"></i> Staff
                        </a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="/AdminKompekPage/Staff">
                                    <i class="nav-icon cui-user "></i>Manage Staff
                                </a>
                            </li>
                            @if(\Illuminate\Support\Facades\Session::get('status') == 1)
                            <li class="nav-item" style="background-color: mediumseagreen">
                                <a class="nav-link" href="/AdminKompekPage/StaffRegisStatus">
                                    <i class="nav-icon cui-account-logout"></i> Register Staff Open
                                </a>
                            </li>
                            @endif
                            @if(\Illuminate\Support\Facades\Session::get('status') == 0)
                            <li class="nav-item" style="background-color: red">
                                <a class="nav-link" href="/AdminKompekPage/StaffRegisStatus" methods="post">
                                    <i class="nav-icon cui-account-logout"></i> Register Staff Close
                                </a>
                            </li>
                            @endif
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/AdminKompekPage/LogOut">
                            <i class="nav-icon cui-account-logout"></i> Log Out
                        </a>
                    </li>

                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        <main class="main">
            @yield('adminContent')
        </main>
    </div>

    <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
            crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
@yield('adminMoreScript')
</body>
</html>