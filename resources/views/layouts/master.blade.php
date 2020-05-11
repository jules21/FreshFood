<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
      <title>FreshFood - @yield('title')</title>
      <meta content="Admin Dashboard" name="description">
      <meta content="Themesbrand" name="author">
      <link rel="shortcut icon" href="{{asset('dashboard/assets/images/favicon.ico')}}">
      <link href="{{asset('dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('dashboard/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('dashboard/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('dashboard/assets/css/style.css')}}" rel="stylesheet" type="text/css">
   </head>
   <body>
      <!-- Begin page -->
      <div id="wrapper">
         <!-- Top Bar Start -->
@include('partials.dashboard.header')
         <!-- Top Bar End --><!-- ========== Left Sidebar Start ========== -->
@include('partials.dashboard.aside')
         <!-- Left Sidebar End --><!-- ============================================================== --><!-- Start right Content here --><!-- ============================================================== -->
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="page-title-box">
                           <h4 class="page-title">@yield('page-title', 'Dashboard') </h4>
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="javascript:void(0);">FreshFood</a></li>
                              <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                              <li class="breadcrumb-item active">@yield('page-title', 'Dashboard')</li>
                           </ol>
                           <div class="state-information d-none d-sm-block">
                              <div class="state-graph">
                                 <div id="header-chart-1"></div>
                                 <div class="info">Balance $ 2,317</div>
                              </div>
                              <div class="state-graph">
                                 <div id="header-chart-2"></div>
                                 <div class="info">Item Sold 1230</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
               </div>
               <!-- container-fluid -->
               @yield('content')
            </div>
            <!-- content -->
            @include('partials.dashboard.footer')
         </div>
         <!-- ============================================================== --><!-- End Right content here --><!-- ============================================================== -->
      </div>
      <!-- END wrapper -->
      <!-- jQuery  -->
      <script src="{{asset('dashboard/assets/js/jquery.min.js')}}"></script>
      <script src="{{asset('dashboard/assets/js/bootstrap.bundle.min.js')}}">
    </script><script src="{{asset('dashboard/assets/js/metisMenu.min.js')}}">
    </script><script src="{{asset('dashboard/assets/js/jquery.slimscroll.js')}}">
    </script><script src="{{asset('dashboard/assets/js/waves.min.js')}}"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- App js -->
    <script src="{{asset('dashboard/assets/js/app.js')}}"></script>
    @yield('extra-js')
   </body>
</html>
