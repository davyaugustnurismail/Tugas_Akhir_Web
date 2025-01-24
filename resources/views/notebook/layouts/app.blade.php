<!doctype html>
<html lang="en">
  
<!-- Mirrored from templates.iqonic.design/note-plus/html/backend/index by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2025 02:30:52 GMT -->
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>SmeaBook</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="https://templates.iqonic.design/note-plus/html/assets/images/favicon.ico" />
      <link href="{{asset('css/backend-plugin.mine209.css')}}" rel="stylesheet"> 
      <link href="{{asset('css/backende209.css')}}" rel="stylesheet">
      <link href="{{asset('../vendor/%40fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
      <link href="{{asset('../vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet">
      <link href="{{asset('../vendor/remixicon/fonts/remixicon.css')}}" rel="stylesheet">
      <link href="{{asset('../vendor/%40icon/dripicons/dripicons.css')}}" rel="stylesheet">
    
</head>
  <body class="noteplus-layout  ">

    <!-- loader Start -->
    <div id="loading">
          @include('notebook/layouts/loader')
    </div>        
    <!-- loader END -->

    <!-- Wrapper Start -->
    <div class="wrapper">
       <div class="iq-top-navbar">
       @include('notebook/layouts/navbar')
      </div>      
      <div class="iq-sidebar  sidebar-default ">
      @include('notebook/layouts/sidebar')
</div>     
        <div class="content-page">
            @yield('content')
        </div>
    <!-- Wrapper End-->

    <footer class="iq-footer">
        @include('notebook/layouts/footer')
    </footer>
    
    <!-- Backend Bundle JavaScript -->
    
    <script src="{{asset('js/backend-bundle.min.js')}}"></script>
    
    <!-- Flextree Javascript-->
    <script src="{{asset('js/flex-tree.min.js')}}"></script>
    <script src="{{asset('js/tree.js')}}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{asset('js/table-treeview.js')}}"></script>
    <!-- SweetAlert JavaScript -->
    <script src="{{asset('js/sweetalert.js')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('js/chart-custom.js')}}"></script>
    
    <!-- slider JavaScript -->
    <script src="{{asset('js/slider.js')}}"></script>
    
    <!-- app JavaScript -->
    <script src="{{asset('js/app.js')}}"></script>
  </body>

<!-- Mirrored from templates.iqonic.design/note-plus/html/backend/index by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2025 02:31:23 GMT -->
</html>