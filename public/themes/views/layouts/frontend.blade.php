<!doctype html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ url('public/themes/assets/frontend/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('public/themes/assets/frontend/css/slider.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('public/themes/assets/frontend/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('public/themes/assets/frontend/css/owl.theme.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('public/themes/assets/frontend/css/font-awesome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('public/themes/assets/frontend/css/style.css') }}" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Favicons Icon -->
    <link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />

    <title>@yield('title')</title>
    <link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
    <script src="{{ url('public/themes/assets/frontend/js/jquery.js') }}"></script>
    <script src="{{ url('public/themes/assets/frontend/bootstrap/dist/js/bootstrap.js') }}"></script>

    <script>
        jQuery(document).ready(function($) {
            //selector đến menu cần làm việc
            var TopFixMenu = $("#nav");
            // dùng sự kiện cuộn chuột để bắt thông tin đã cuộn được chiều dài là bao nhiêu.
            $(window).scroll(function()
                    {
                        // Nếu cuộn được hơn 150px rồi
                        if($(this).scrollTop()>100)
                        {
                            // Tiến hành show menu ra
                            TopFixMenu.show();
                        }
                        // Ngược lại, nhỏ hơn 150px thì hide menu đi.
                        else
                        {
                            TopFixMenu.show();
                        }
                    }
            )
            $(window).resize(function(){
                if($(window).width() < 800 )
                {
                    $('#slide-head').hide();
                }
                else
                {
                    $('#slide-head').show();
                };
            });

        })
    </script>
<body class="cms-index-index">
    <div class="page">
        <!-- Header -->
        <header class="header-container">
            @include('includes.frontend.header')
        </header>
        <!-- end header -->
        <!-- Navbar -->
        <nav>
            @include('includes.frontend.menu')
        </nav>
        <!-- end nav -->
    
        <!-- Slider -->
        <section class="slider-intro">
            @include('includes.frontend.slide')
        </section>
        <!-- end Slider -->
        <!-- service section  -->
        <div class="service-section">
            @include('includes.frontend.service')
        </div>
    
        <!-- End service section  -->
    
        <!-- main container -->
    
        <section class="main-container col1-layout home-content-container">
            @yield('content')
        </section>
        <!-- End main container -->
    
        <!-- content -->
        <div class="container">
            <div class="row" style="height:300px;">
    
            </div>
        </div>
        <!--end-content-->
        <footer class="footer">
            @include('includes.frontend.footer')
        </footer>
    </div>
    <!-- JavaScript -->
    <script type="text/javascript" src="{{ url('public/themes/assets/frontend/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/themes/assets/frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/themes/assets/frontend/js/parallax.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/themes/assets/frontend/js/common.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/themes/assets/frontend/js/slider.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/themes/assets/frontend/js/owl.carousel.min.js') }}"></script>



    <script type="text/javascript">
        //<![CDATA[
        jQuery(function() {
            jQuery(".slideshow").cycle({
                fx: 'scrollHorz', easing: 'easeInOutCubic', timeout: 10000, speedOut: 800, speedIn: 800, sync: 1, pause: 1, fit: 0, 			pager: '#home-slides-pager',
                prev: '#home-slides-prev',
                next: '#home-slides-next'
            });
        });
        //]]>
    </script>
</body>
</html>
