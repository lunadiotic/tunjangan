<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="IDStack Project">
        <meta name="author" content="Hakim">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon_1.ico') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

    </head>
    <body>

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    
                    <!-- Image Logo here -->
                    <!--<a href="index.html" class="logo">-->
                        <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                        <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                    <!--</a>-->
                </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="hidden-xs">
                                <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                            </li>
                            @if (Auth::guest())
                                <li><a href="{{ route('login') }}" class="waves-effect waves-light">Login</a></li>
                                
                            @else
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">{{ Auth::user()->name }}</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <div class="account-pages"></div>
        <div class="clearfix"></div>

        <!-- HOME -->
        <section class="home bg-dark" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="home-wrapper">
                            <h1 class="icon-main text-custom"><img src="{{ asset('assets/images/logo.png') }}" height="250" alt="Logo"></i></h1>
                            <h1 class="home-text"><span class="rotate">Selamat Datang, Aplikasi Polres, Siap?</span></h1>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!-- Countdown -->
        <script src="assets/plugins/countdown/dest/jquery.countdown.min.js"></script>
        <script src="assets/plugins/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                // Countdown
                // To change date, simply edit: var endDate = "September 16, 2016 18:16:00";
                $(function() {
                    var endDate = "January 17, 2018 11:59:59";
                    $('.u-countdown .row').countdown({
                        date : endDate,
                        render : function(data) {
                            $(this.el).html('<div><div><span class="text-custom">' + (parseInt(this.leadingZeros(data.years, 2) * 365) + parseInt(this.leadingZeros(data.days, 2))) + '</span><span><b>Days</b></span></div><div><span class="text-primary">' + this.leadingZeros(data.hours, 2) + '</span><span><b>Hours</b></span></div></div><div class="lj-countdown-ms"><div><span class="text-pink">' + this.leadingZeros(data.min, 2) + '</span><span><b>Minutes</b></span></div><div><span class="text-info">' + this.leadingZeros(data.sec, 2) + '</span><span><b>Seconds</b></span></div></div>');
                        }
                    });
                });

                // Text rotate
                $(".home-text .rotate").textrotator({
                    animation : "fade",
                    speed : 3000
                });
            });

        </script>

    </body>
</html>
