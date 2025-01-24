<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesbox.in/admin-templates/orbiter/html/light-vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jan 2025 03:25:36 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>SmeaBook Admin</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="{{asset('plugins/switchery/switchery.min.css')}}" rel="stylesheet">
    <!-- Apex css -->
    <link href="{{asset('plugins/apexcharts/apexcharts.css')}}" rel="stylesheet">
    <!-- Slick css -->
    <link href="{{asset('plugins/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/slick/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>
<body class="vertical-layout">    
    <!-- Start Infobar Setting Sidebar -->
    <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
        @include('admin/layouts/infobar')
    </div>
    <div class="infobar-settings-sidebar-overlay"></div>
    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        <div class="leftbar">
            @include('admin/layouts/leftbar')
        </div>
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="index.html" class="mobile-logo"><img src="{{asset('images/logo.svg')}}" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="{{asset('images/svg-icon/horizontal.svg')}}" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="{{asset('images/svg-icon/verticle.svg')}}" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="{{asset('images/svg-icon/collapse.svg')}}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="{{asset('images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar">
            @include('admin/layouts/topbar')
            </div>
            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
            @yield('breadcrumbbar')
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">                
                <!-- Start row -->
                @yield('content')
            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            @include('admin/layouts/footer')
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->        
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/modernizr.min.js')}}"></script>
    <script src="{{asset('js/detect.js')}}"></script>
    <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('js/vertical-menu.js')}}"></script>
    <!-- Switchery js -->
    <script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>
    <!-- Apex js -->
    <script src="{{asset('plugins/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('plugins/apexcharts/irregular-data-series.js')}}"></script>    
    <!-- Slick js -->
    <script src="{{asset('plugins/slick/slick.min.js')}}"></script>
    <!-- Custom Dashboard js -->   
    <script src="{{asset('js/custom/custom-dashboard.js')}}"></script>
    <!-- Core js -->
    <script src="{{asset('js/core.js')}}"></script>
    <!-- End js -->
</body>

<!-- Mirrored from themesbox.in/admin-templates/orbiter/html/light-vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jan 2025 03:26:11 GMT -->
</html>