
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon.png">
    <title>JAY'S TRUCKS</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/xtremeadmin/" />
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">

    <!-- Gallery CSS -->
    <link href="{{ asset('assets/libs/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css')}}" rel="stylesheet">

</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>

                    <a class="navbar-brand" href="index.html">
                        <b class="logo-icon p-l-10">

                            <img src="./assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                           
                        </b>
      
                        <span class="logo-text">
                             <img src="./assets/images/logo-text.png" alt="homepage" class="light-logo" />
                            
                        </span>
 
                    </a>

                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
         
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
      
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>

                        {{--<li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>--}}
                    </ul>

                    <ul class="navbar-nav float-right">
      
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <p class="dropdown-item" href="javascript:void(0)">Welcome! {{ auth()->user()->name}}</p>
                                <a class="dropdown-item mt-0" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"
                                ><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </li>
                     
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin4">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30"> 
                        <li>
                                <div class="user-profile d-flex no-block dropdown mt-3">
                                        <div class="user-pic"><img src="../../assets/images/users/1.jpg" alt="users" class="rounded-circle" width="40" /></div>
                                        <div class="user-content hide-menu ml-2">
                                            <p href="javascript:void(0)" class="" id="Userdd"  aria-haspopup="true" aria-expanded="false">
                                                <h5 class="mb-0 user-name font-medium">{{ auth()->user()->name}}</h5>
                                                <span class="op-5 user-email">{{ auth()->user()->email}}</span>
                                            </p>
        
                                        </div>
                                    </div>    
                        </li>               
                        <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.index')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('makes.index')}}" aria-expanded="false"><i class="mdi mdi-car"></i><span class="hide-menu">Car Makes</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('models.index')}}" aria-expanded="false"><i class="mdi mdi-car-connected"></i><span class="hide-menu">Car Models</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="page-wrapper">

            <div class="container-fluid">
                @yield('content')
            </div>
 
        </div>

    </div>

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- apps -->
    <script src="{{ asset('dist/js/app.min.js')}}"></script>
    <script src="{{ asset('dist/js/app.init.js')}}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js')}}"></script>

    <!--Custom JavaScript -->
    <script src="{{ asset('/js/custom.min.js')}}"></script>

        <!--Gallery JavaScript -->
    <script src="{{ asset('/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('/assets/libs/magnific-popup/meg.init.js')}}"></script>


</body>

</html>