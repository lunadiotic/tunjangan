<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="IDStack Project">
        <meta name="author" content="Hakim">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon_1.ico') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

        @yield('styles')

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}"></script>
        <![endif]-->

        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

    </head>

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

          <!-- Top Bar Start -->
          @include('layouts.partials._topbar')
          <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.partials._sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="clearfix">
                                            <div class="" align="center">
                                                <h4><strong>LAPORAN REMUNERASI</strong></h4>
                                                <h5>POLRES KOTA CIREBON</h5>
                                                <h5>Jl. Veteran No.1</h5>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                <div class="pull-right m-t-5">
                                                    <address>
                                                    Bulan : {{ $bulan }}/{{ $tahun }}  
                                                    </address>
                                                </div>
                        
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30">
                                                        <thead>
                                                            <tr><th>#</th>
                                                            <th>No Anggota</th>
                                                            <th>Nama</th>
                                                            <th>Pangkat/Jabatan</th>
                                                            <th>Hadir</th>
                                                            <th>Tidak Hadir</th>
                                                            <th>Tunjangan</th>
                                                            <th>Total Remun</th>
                                                        </tr></thead>
                                                        <tbody>
                                                            @foreach ($data as $row)
                                                            <tr>
                                                                <td>{{ $row['no'] }}</td>
                                                                <td>{{ $row['no_anggota'] }}</td>
                                                                <td>{{ $row['nama'] }}</td>
                                                                <td>{{ $row['pangkat_jabatan'] }}</td>
                                                                <td>{{ $row['hadir'] }}</td>
                                                                <td>{{ $row['tidak_hadir'] }}</td>
                                                                <td>{{ number_format($row['tunjangan']) }}</td>
                                                                <td>{{ number_format($row['total_remun'] ) }}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="border-radius: 0px;">
                                            <div class="col-md-3 col-md-offset-9">
                                                <hr>
                                                <h3 class="text-right">{{ number_format($total_remun) }}</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="pull-right m-t-30" align="center">
                                                    <p>KASI PROPAM</p>
                                                    <p class="m-t-20" style="
                                                        border-top-width: -;
                                                        margin-top: 35px;
                                                        padding-top: 95px;
                                                    "><strong>SAYUTI UBRATA, SH. MH</strong></p>
                                                    <p class="m-t-10"><strong>INSPEKTUR POLISI DUA NRP 66080143</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                        
                        </div>

                    </div> <!-- container -->
                     
                </div> <!-- content -->

                <footer class="footer">
                    © 2018. <a href="https://fb.me/hakim.816">WeeeWork</a>.
                </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <script>
          var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
    
    </body>
</html>
