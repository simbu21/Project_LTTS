<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{asset('user_dashboard/panel/assets/images/favicon.png')}}" >
        <!--Page title-->
        <title>Admin easy Learning</title>
        <!--bootstrap-->
        <link rel="stylesheet" href="{{asset('user_dashboard/panel/assets/css/bootstrap.min.css')}}">
        <!--font awesome-->
        <link rel="stylesheet" href="{{asset('user_dashboard/panel/assets/css/all.min.css')}}">
        <!-- metis menu -->
        <link rel="stylesheet" href="{{asset('user_dashboard/panel/assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('user_dashboard/panel/assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css')}}">
        <!-- chart -->
   
        <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
        <!--Custom CSS-->
        <link rel="stylesheet" href="{{asset('user_dashboard/panel/assets/css/style.css')}}">
    </head>
    
    <body id="page-top">
        <!-- preloader -->
        <div class="preloader">
            <img src="{{asset('user_dashboard/panel/assets/images/preloader.gif')}}" alt="">
        </div>

        <!-- wrapper -->
        <div class="wrapper">

         
            <!-- header area -->
             <header class="header_area">
               @include('user.header')
            </header>
            <!-- / header area -->



            <!-- sidebar area -->
            <aside class="sidebar-wrapper ">
              @include('user.sidebar')
            </aside>
            <!-- /sidebar Area-->


         


  
<div class="content_wrapper">
    @yield('user')
</div><!--/ content wrapper -->




        </div><!--/ wrapper -->

        <!-- jquery -->
        <script src="{{asset('user_dashboard/panel/assets/js/jquery.min.js')}}"></script>
        <!-- popper Min Js -->
        <script src="{{asset('user_dashboard/panel/assets/js/popper.min.js')}}"></script>
        <!-- Bootstrap Min Js -->
        <script src="{{asset('user_dashboard/panel/assets/js/bootstrap.min.js')}}"></script>
        <!-- Fontawesome-->
        <script src="{{asset('user_dashboard/panel/assets/js/all.min.js')}}"></script>
        <!-- metis menu -->
        <script src="{{asset('user_dashboard/panel/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js')}}"></script>
        <script src="{{asset('user_dashboard/panel/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js')}}"></script>
        <!-- nice scroll bar -->
        <script src="{{asset('user_dashboard/panel/assets/plugins/scrollbar/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('user_dashboard/panel/assets/plugins/scrollbar/scroll.active.js')}}"></script>
        <!-- counter -->
        <script src="{{asset('user_dashboard/panel/assets/plugins/counter/js/counter.js')}}"></script>
        <!-- chart -->
   <script src="{{asset('user_dashboard/panel/assets/plugins/chartjs-bar-chart/Chart.min.js')}}"></script>
        <script src="{{asset('user_dashboard/panel/assets/plugins/chartjs-bar-chart/chart.js')}}"></script>
        <!-- pie chart -->
        <script src="{{asset('user_dashboard/panel/assets/plugins/pie_chart/chart.loader.js')}}"></script>
        <script src="{{asset('user_dashboard/panel/assets/plugins/pie_chart/pie.active.js')}}"></script>
 
 
        <!-- Main js -->
        <script src="{{asset('user_dashboard/panel/assets/js/main.js')}}"></script>

    
     
  

    </body>

</html> 