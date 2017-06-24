<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Twitter Like Website</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="{{url("assets/bootstrap/css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{url("assets/font-awesome/css/font-awesome.min.css")}}">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="{{url("css/flaty.css")}}">
        <link rel="stylesheet" href="{{url("css/flaty-responsive.css")}}">
        <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css">

        <link rel="shortcut icon" href="{{url("img/favicon.png")}}">
    </head>
    <body>

        <!-- BEGIN Navbar -->
        <div id="navbar" class="navbar">
            <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
                <span class="fa fa-bars"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <small>
                    <i class="fa fa-desktop"></i>
                    Twitter Like Website
                </small>
            </a>

            <!-- BEGIN Navbar Buttons -->
            <ul class="nav flaty-nav pull-right">

                <!-- BEGIN Button User -->
                <li class="user-profile">
                    <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                        {{-- <img class="nav-user-photo" src="img/demo/avatar/avatar.jpg" alt="Penny's Photo" /> --}}
                        <span class="hhh" id="user_info">
                            {{Auth::user()->name}}
                        </span>
                        <i class="fa fa-caret-down"></i>
                    </a>

                    <!-- BEGIN User Dropdown -->
                    <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                        <li class="nav-header">
                            <i class="fa fa-clock-o"></i>
                            Logined From 20:45
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i>
                                Edit Profile
                            </a>
                        </li>

                        <li class="divider visible-xs"></li>

                        <li>
                            <a href="{{url('logout')}}">
                                <i class="fa fa-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                    <!-- BEGIN User Dropdown -->
                </li>
                <!-- END Button User -->
            </ul>
            <!-- END Navbar Buttons -->
        </div>
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container" id="main-container">
            <!-- BEGIN Sidebar -->
            <div id="sidebar" class="navbar-collapse collapse">
                <!-- BEGIN Navlist -->
                <ul class="nav nav-list">
                    <!-- BEGIN Search Form -->
                    <li>
                        <form target="#" method="GET" class="search-form">
                            <span class="search-pan">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="text" name="search" id="search-input" placeholder="Search ..." autocomplete="off" />
                            </span>
                        </form>
                    </li>
                    <!-- END Search Form -->
                    <div class="list-group" style="padding: 0px 5px 0px 5px;" id="searchGroup">
                     
                    </div>
                   <!--  <li class="active">
                        <a href="index.html">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li> -->

                   
                   
                   <!--  <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-globe"></i>
                            <span>Maps</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <ul class="submenu">
                            <li><a href="map_google.html">Google Maps</a></li>
                            <li><a href="map_vector.html">Vector Maps</a></li>
                        </ul>
                    </li> -->

                </ul>
                <!-- END Navlist -->

                <!-- BEGIN Sidebar Collapse Button -->
                <div id="sidebar-collapse" class="visible-lg">
                    <i class="fa fa-angle-double-left"></i>
                </div>
                <!-- END Sidebar Collapse Button -->
            </div>
            <!-- END Sidebar -->

            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-o"></i> Timeline</h1>
                        <h4>Tweets</h4>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li class="active"><i class="fa fa-home"></i> Home</li>
                    </ul>
                </div>
                
                @yield('content')

                <footer>
                    <p>Twitter Like Website</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>
        <!-- END Container -->


        <!--basic scripts-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.1.4.min.js"><\/script>')</script>
        <script src="{{url("assets/bootstrap/js/bootstrap.min.js")}}"></script>
        <script src="{{url("assets/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
        <script src="{{url("assets/jquery-cookie/jquery.cookie.js")}}"></script>

        <!--page specific plugin scripts-->
        <script src="{{url("assets/flot/jquery.flot.js")}}"></script>
        <script src="{{url("assets/flot/jquery.flot.resize.js")}}"></script>
        <script src="{{url("assets/flot/jquery.flot.pie.js")}}"></script>
        <script src="{{url("assets/flot/jquery.flot.stack.js")}}"></script>
        <script src="{{url("assets/flot/jquery.flot.crosshair.js")}}"></script>
        <script src="{{url("assets/flot/jquery.flot.tooltip.min.js")}}"></script>
        <script src="{{url("assets/sparkline/jquery.sparkline.min.js")}}"></script>

        <!--flaty scripts-->
        <script src="{{url("js/flaty.js")}}"></script>
        <script src="{{url("js/flaty-demo-codes.js")}}"></script>
        <script>
            baseUrl = "{{url('')}}";
        </script>
        <script src="{{url("js/tweet.js")}}"></script>

    </body>
</html>
