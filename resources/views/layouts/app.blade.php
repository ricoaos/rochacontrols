<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="character_set"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="" href="" id="favicon" data-original-href="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <title>SISGERMA - Sistema de Gerencial de Manutençãoo</title>

    <link href="{{ asset('vendor/vendor/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('vendor/vendor/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('vendor/vendor/css/font-awesome.css') }}" rel="stylesheet"> 
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('vendor/vendor/css/icon-font.min.css') }}" type='text/css' />
    <script src="{{ asset('vendor/vendor/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('vendor/vendor/js/amcharts.js') }}"></script>	
    <script src="{{ asset('vendor/vendor/js/serial.js') }}"></script>	
    <script src="{{ asset('vendor/vendor/js/light.js') }}"></script>	
    <script src="{{ asset('vendor/vendor/s/radar.js') }}"></script>	
    <link href="{{ asset('vendor/vendor/css/barChart.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('vendor/vendor/css/fabochart.css') }}" rel='stylesheet' type='text/css' />
    <script src="{{ asset('vendor/vendor/js/css3clock.js') }}"></script>
    <script src="{{ asset('vendor/vendor/js/skycons.js') }}"></script>
    <script src="{{ asset('vendor/vendor/js/jquery.easydropdown.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
</head>

<body>
<div class="page-container">
        <!--/content-inner-->
        <div class="left-content">
            <div class="inner-content">
                <!-- header-starts -->
                <div class="header-section">
                    <!--menu-right-->
                    <div class="top_menu">
                        @include('layouts.menu_horizontal')

                    </div>
                    <!--//menu-right-->
                    <div class="clearfix"></div>
                </div>
                <!-- //header-ends -->

                <div class="outter-wp">
                    <!--custom-widgets-->
                    @yield('content')
                    <!--//outer-wp-->
                </div>
                <!--footer section start-->
                <footer>
                    <p>&copy 2019 Sisgerma . All Rights Reserved | Design by <img id="logo" width="10%" src="{{ asset('vendor/vendor/images/raostec2.png') }}"></p>
                </footer>
                <!--footer section end-->
            </div>
        </div>
        <!--//content-inner-->
        <!--/sidebar-menu-->
        <div class="sidebar-menu">
            @include('layouts.menu_vertical')
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- /#wrapper -->
    <script>
        var toggle = true;
                    
        $(".sidebar-icon").click(function() {                
            if (toggle){
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({"position":"absolute"});
            } else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function() {
                    $("#menu span").css({"position":"relative"});
                }, 400);
            }
                        
            toggle = !toggle;
        });
    </script>
<!--js -->
<link rel="stylesheet" href="{{ asset('vendor/vendor/css/vroom.css') }}">
<script type="text/javascript" src="{{ asset('vendor/vendor/js/vroom.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/vendor/js/TweenLite.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/vendor/js/CSSPlugin.min.js') }}"></script>
<script src="{{ asset('vendor/vendor/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('vendor/vendor/js/scripts.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="{{ asset('vendor/vendor/js/bootstrap.min.js') }}"></script>

</body>

</html>

