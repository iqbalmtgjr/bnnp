<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>BNNP Kalimantan Barat - Layanan Rehabilitasi</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link href="{{asset("assets/images/bnnp.ico")}}" rel="shortcut icon">

        <link href={{asset("assets/plugins/morris/morris.css")}} rel="stylesheet">
 
        <link href={{asset("assets/css/bootstrap.min.css")}} rel="stylesheet" type="text/css">
        <link href={{asset("assets/css/icons.css")}} rel="stylesheet" type="text/css">
        <link href={{asset("assets/css/style.css")}} rel="stylesheet" type="text/css">

        {{-- SweetAlert --}}
	    <script src="sweetalert2.all.min.js"></script>

        {{-- Toastr --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="#" class="logo"><img style="height: 50px" src="{{asset('assets/images/bnnp.png')}}" alt=""> BNNP</a>
                        <!-- <a href="index.html" class="logo"><img src="assets/images/logo.png" height="24" alt="logo"></a> -->
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="/proses_pendaftaran" class="waves-effect {{ request()->is('/proses_pendaftaran') ? 'active' : '' }}">
                                    <i class="mdi mdi-airplay"></i>
                                    <span> Proses Pendaftaran </span>
                                </a>
                            </li>
                            
                            <li>
                            <a href="/data_tamu" class="waves-effect {{ request()->is('/data_tamu') ? 'active' : '' }}">
                                    <i class="mdi mdi-airplay"></i>
                                    <span> Data Tamu </span>
                                </a>
                            </li>

                            <li>
                                <a href="/data_pegawai" class="waves-effect {{ request()->is('/data_pegawai') ? 'active' : '' }}">
                                    <i class="mdi mdi-airplay"></i>
                                    <span> Data Pegawai </span>
                                </a>
                            </li>

                            <li>
                                <a href="/data_pasien" class="waves-effect {{ request()->is('/data_pasien') ? 'active' : '' }}">
                                    <i class="mdi mdi-airplay"></i>
                                    <span> Data Pasien </span>
                                </a>
                            </li>

                            <li>
                                <a href="/riwayat_pasien" class="waves-effect {{ request()->is('/riwayat_pasien') ? 'active' : '' }}">
                                    <i class="mdi mdi-airplay"></i>
                                    <span> Data Riwayat Pasien </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom pb-3">

                            <ul class="list-inline float-right mb-0">
                                
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="{{asset('assets/images/bnnp.ico')}}" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Welcome</h5>
                                        </div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="float-left">
                                    <button class="button-menu-mobile open-left waves-light waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">
                                @yield('content')
                        </div>


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2018 Annex by Mannatthemes.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src={{asset("assets/js/jquery.min.js")}}></script>
        <script src={{asset("assets/js/popper.min.js")}}></script>
        <script src={{asset("assets/js/bootstrap.min.js")}}></script>
        <script src={{asset("assets/js/modernizr.min.js")}}></script>
        <script src={{asset("assets/js/detect.js")}}></script>
        <script src={{asset("assets/js/fastclick.js")}}></script>
        <script src={{asset("assets/js/jquery.slimscroll.js")}}></script>
        <script src={{asset("assets/js/jquery.blockUI.js")}}></script>
        <script src={{asset("assets/js/waves.js")}}></script>
        <script src={{asset("assets/js/jquery.nicescroll.js")}}></script>
        <script src={{asset("assets/js/jquery.scrollTo.min.js")}}></script>

        <script src={{asset("assets/plugins/skycons/skycons.min.js")}}></script>
        <script src={{asset("assets/plugins/raphael/raphael-min.js")}}></script>
        <script src={{asset("assets/plugins/morris/morris.min.js")}}></script>
        
        <script src={{asset("assets/pages/dashborad.js")}}></script>

        <!-- App js -->
        <script src={{asset("assets/js/app.js")}}></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        {{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> --}}
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	    <script src="sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
        

        <script>
            @if(Session::has('sukses'))
            toastr.success("{{Session::get('sukses')}}", "Selamat")
            @endif
        </script>
        <script>
            @if(Session::has('gagal'))
            toastr.error("{{Session::get('gagal')}}", "Gagal")
            @endif
        </script>
        
	@yield('footer')
    </body>
</html>