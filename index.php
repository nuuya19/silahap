<?php
    $page = "";
    include 'koneksi.php';
    include 'functions.php';
?>
<!doctype html>
<html class="fixed">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title>Sistem Laporan Hasil Perjalanan</title>
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
        <meta name="author" content="JSOFT.net">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
        <link rel="stylesheet" href="assets/vendor/dropzone/css/basic.css" />
        <link rel="stylesheet" href="assets/vendor/dropzone/css/dropzone.css" />

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
        <link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
        <link rel="stylesheet" href="assets/vendor/morris/morris.css" />
        <link rel="stylesheet" href="assets/vendor/summernote/summernote.css" />
        <link rel="stylesheet" href="assets/vendor/summernote/summernote-bs3.css" />
        <link rel="stylesheet" href="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
        <link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
        <link rel="stylesheet" href="assets/vendor/select2/select2.css" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="assets/stylesheets/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

        <!-- Head Libs -->
        <script src="assets/vendor/modernizr/modernizr.js"></script>

    </head>
    <body>
        <section class="body">

            <!-- start: header -->
            <header class="header">
                <div class="logo-container">
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo/logo-h.png" height="35" alt="SLHP" />
                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
            
                <!-- start: search & user box -->
                <div class="header-right">
            
                    <form action="pages-search-results.html" class="search nav-form">
                        <div class="input-group input-search">
                            <input type="text" class="form-control" name="q" id="q" placeholder="Cari...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
            
                    <span class="separator"></span>
            
                    <div id="userbox" class="userbox">
                        <a href="#" data-toggle="dropdown">
                            <figure class="profile-picture">
                                <img src="assets/images/logo/logo-jateng.png" alt="Cardinal" class="img-circle" data-lock-picture="assets/images/logo/logo-jateng.png" />
                            </figure>
                            <div class="profile-info" data-lock-name="Cardinal" data-lock-email="cardinal@email.com">
                                <span class="name">Cardinal</span>
                                <span class="role">administrator</span>
                            </div>
            
                            <i class="fa custom-caret"></i>
                        </a>
            
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> Profil Saya</a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-gear"></i> Pengaturan</a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->

            <div class="inner-wrapper">
                <!-- start: sidebar -->
                <aside id="sidebar-left" class="sidebar-left">
                    <div class="sidebar-header">
                        <div class="sidebar-title">
                            Menu
                        </div>
                        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                        </div>
                    </div>
                
                    <div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    <li>
                                        <a href="index.php">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Beranda</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="?page=forms">
                                            <i class="fa fa-copy" aria-hidden="true"></i>
                                            <span>Input Laporan</span>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-active">
                                        <a href="?page=rekap">
                                            <i class="fa fa-tasks" aria-hidden="true"></i>
                                            <span>Rekap Data</span>
                                        </a>
                                    </li>

                                    <!--<li class="nav-parent">
                                        <a>
                                            <i class="fa fa-database" aria-hidden="true"></i>
                                            <span>Backup/Restore Data</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="">
                                                     Backup Data
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    Restore Data
                                                </a>
                                            </li>
                                        </ul>
                                    </li>-->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </aside>
                <!-- end: sidebar -->

                <!-- Start Halaman -->
                <?php
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];

                        switch ($page) {
                            case 'beranda':
                                include "beranda.php";
                                break;

                            case 'forms':
                                include "forms.php";
                                break;

                            case 'rekap':
                                include "rekap-data.php";
                                break;
                            
                            case 'ctk':
                                include "cetak_lhp.php";
                                break;

                            default:
                                echo "<center><h3>Halaman tidak ditemukan!</h3></center>";
                                break;
                        }
                    } else {
                        include "beranda.php";
                    }
                ?>
            </div>
            <!-- End Halaman -->

            <aside id="sidebar-right" class="sidebar-right">
                <div class="nano">
                    <div class="nano-content">
                        <a href="#" class="mobile-close visible-xs">
                            Collapse <i class="fa fa-chevron-right"></i>
                        </a>
            
                        <div class="sidebar-right-wrapper">
            
                            <div class="sidebar-widget widget-calendar">
                                <h6>Kalender</h6>
                                <div data-plugin-datepicker data-plugin-skin="dark" ></div>
            
                                <ul>
                                    <li>
                                        <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                                        <span>Company Meeting</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </section>

        <!-- Vendor -->
        <script src="assets/vendor/jquery/jquery.js"></script>
        <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
        <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
        <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
        <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
        
        <!-- Specific Page Vendor -->
        <script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
        <script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
        <script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
        <script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
        <script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
        <script src="assets/vendor/flot/jquery.flot.js"></script>
        <script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
        <script src="assets/vendor/flot/jquery.flot.pie.js"></script>
        <script src="assets/vendor/flot/jquery.flot.categories.js"></script>
        <script src="assets/vendor/flot/jquery.flot.resize.js"></script>
        <script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
        <script src="assets/vendor/raphael/raphael.js"></script>
        <script src="assets/vendor/morris/morris.js"></script>
        <script src="assets/vendor/gauge/gauge.js"></script>
        <script src="assets/vendor/snap-svg/snap.svg.js"></script>
        <script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
        <script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
        <script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
        <script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
        <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
        <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
        <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
        <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
        <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
        <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
        <script src="assets/vendor/summernote/summernote.js"></script>
        <script src="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
        <script src="assets/vendor/dropzone/dropzone.js"></script>
        <script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
        <script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
        <script src="assets/vendor/select2/select2.js"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="assets/javascripts/theme.js"></script>
        
        <!-- Theme Custom -->
        <script src="assets/javascripts/theme.custom.js"></script>
        
        <!-- Theme Initialization Files -->
        <script src="assets/javascripts/theme.init.js"></script>


        <!-- Examples -->
        <script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
    </body>
</html>