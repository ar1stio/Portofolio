<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Casa Kandara</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url(); ?>/assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url(); ?>/assets/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url(); ?>/assets/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo base_url(); ?>/assets/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url(); ?>/assets/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url(); ?>/assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>/assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <style>
        .Presidentank{
            display: block !important;  
        }
        .Presidentank h3{
            font-size: 30px !important;          
        }
        .Standarank{
            display: block !important;
        }
        .Standarank h3{
            font-size: 30px !important;          
        }
        .Deluxeank{
            display: block !important;            
        }
        .Deluxeank h3{
            font-size: 30px !important;          
        } 
        @media (max-width: 574px){
            .Presidentank h3{
                font-size: 20px !important;          
            }
            .Standarank h3{
                font-size: 20px !important;          
            }
            .Deluxeank h3{
                font-size: 20px !important;          
            }
        }
        .cek a:hover,.cek a:active,.cek a:focus{
            background-color: black !important; color: #fff !important;
        }
        .aktif{
            background-color: black !important; color: #fff !important;            
        }
    </style>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo base_url(); ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Admin CK                
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="collapse navbar-collapse navbar-left">                
                <ul class="nav navbar-nav">
                  <li class="active cek"><a href="#">Home</a></li>                  
                  <li class="dropdown cek">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tampilan
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url(); ?>/utama/admin"><i class="fa fa-angle-double-right"></i> Admin</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/header"><i class="fa fa-angle-double-right"></i> Header</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/footer"><i class="fa fa-angle-double-right"></i> Footer</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/harga"><i class="fa fa-angle-double-right"></i> Harga</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/karir"><i class="fa fa-angle-double-right"></i> Karir</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/karyawan"><i class="fa fa-angle-double-right"></i> Karyawan</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/katamutiara"><i class="fa fa-angle-double-right"></i> Katamutiara</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/keahlian"><i class="fa fa-angle-double-right"></i> Keahlian</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/kontak"><i class="fa fa-angle-double-right"></i> Kontak</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/pesan"><i class="fa fa-angle-double-right"></i> Pesan</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/produk"><i class="fa fa-angle-double-right"></i> Produk</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/profil"><i class="fa fa-angle-double-right"></i> Profil</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/teknologi"><i class="fa fa-angle-double-right"></i> Teknologi</a></li>
                    </ul>
                  </li>
                </ul>
                </div>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url(); ?>/assets/img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url(); ?>/assets/img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url(); ?>/assets/img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url(); ?>/assets/img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url(); ?>/assets/img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo base_url(); ?>/assets/img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                   
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url(); ?>/assets/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Jane</p>
<!-- 
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" >
                        <li class="active">
                            <a href="<?php echo base_url(); ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>                                                
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Tampilan Website</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url(); ?>/utama/admin"><i class="fa fa-angle-double-right"></i> Admin</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/header"><i class="fa fa-angle-double-right"></i> Header</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/footer"><i class="fa fa-angle-double-right"></i> Footer</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/harga"><i class="fa fa-angle-double-right"></i> Harga</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/karir"><i class="fa fa-angle-double-right"></i> Karir</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/karyawan"><i class="fa fa-angle-double-right"></i> Karyawan</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/katamutiara"><i class="fa fa-angle-double-right"></i> Katamutiara</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/keahlian"><i class="fa fa-angle-double-right"></i> Keahlian</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/kontak"><i class="fa fa-angle-double-right"></i> Kontak</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/pesan"><i class="fa fa-angle-double-right"></i> Pesan</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/produk"><i class="fa fa-angle-double-right"></i> Produk</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/profil"><i class="fa fa-angle-double-right"></i> Profil</a></li>
                        <li><a href="<?php echo site_url(); ?>/utama/teknologi"><i class="fa fa-angle-double-right"></i> Teknologi</a></li>
                            </ul>
                        </li>                    
                        <!-- ambil dari js -->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        150
                                    </h3>
                                    <p>
                                        Total Pengunjung
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>                                
                                <a class="small-box-footer">
                                    <br>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        53<sup style="font-size: 20px">%</sup>
                                    </h3>
                                    <p>
                                        Pengunjung Domestik
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>                                
                                <a class="small-box-footer">
                                    <br>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        44
                                    </h3>
                                    <p>
                                        Pengunjung Asing
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>                                
                                <a class="small-box-footer">
                                    <br>
                                </a>
                            </div>
                        </div><!-- ./col -->                        
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6" id="President">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        Tipe President
                                    </h3>
                                    <p>
                                        Tersedia : 5
                                    </p>
                                </div>                                
                                <a class="small-box-footer">
                                    Klik disini <i class="fa fa-arrow-circle-down"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6" id="Deluxe">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3 center>
                                        Tipe Deluxe
                                    </h3>
                                    <p center>
                                        Tersedia : 8
                                    </p>
                                </div>                                
                                <a class="small-box-footer">
                                    Klik disini <i class="fa fa-arrow-circle-down"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6" id="Standar">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        Tipe Standar
                                    </h3>
                                    <p>
                                        Tersedia : 10
                                    </p>
                                </div>                                
                                <a class="small-box-footer">
                                    Klik disini <i class="fa fa-arrow-circle-down"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->                                               
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6 Presidentanak" style="display:none;">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        Tipe President 1
                                    </h3>
                                    <p>
                                        Tersedia : 1
                                    </p>
                                </div>                                
                                <a href="<?php echo site_url(); ?>/utama/transaksikamarprm/1/3" class="small-box-footer">
                                    Klik disini <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 Deluxeanak" style="display:none">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3 center>
                                        Tipe Deluxe 1
                                    </h3>
                                    <p center>
                                        Tersedia : 3
                                    </p>
                                </div>                                
                                <a href="<?php echo site_url(); ?>/utama/transaksikamarprm/2/5" class="small-box-footer">
                                    Klik disini <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 Standaranak" style="display:none;">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        Tipe Standar 1
                                    </h3>
                                    <p>
                                        Tersedia : 4
                                    </p>
                                </div>                                
                                <a href="<?php echo site_url(); ?>/utama/transaksikamarprm/3/6" class="small-box-footer">
                                    Klik disini <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col --> 
                        <div class="col-lg-3 col-xs-6 Presidentanak" style="display:none;">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        Tipe President 2
                                    </h3>
                                    <p>
                                        Tersedia : 2
                                    </p>
                                </div>                                
                                <a href="<?php echo site_url(); ?>/utama/transaksikamarprm/1/3" class="small-box-footer">
                                    Klik disini <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 Deluxeanak" style="display:none">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3 center>
                                        Tipe Deluxe 2
                                    </h3>
                                    <p center>
                                        Tersedia : 3
                                    </p>
                                </div>                                
                                <a href="<?php echo site_url(); ?>/utama/transaksikamarprm/2/5" class="small-box-footer">
                                    Klik disini <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 Standaranak" style="display:none;">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        Tipe Standar 2
                                    </h3>
                                    <p>
                                        Tersedia : 3
                                    </p>
                                </div>                                
                                <a href="<?php echo site_url(); ?>/utama/transaksikamarprm/3/6" class="small-box-footer">
                                    Klik disini <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col --> 
                        <div class="col-lg-3 col-xs-6 Presidentanak" style="display:none;">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        Tipe President 3
                                    </h3>
                                    <p>
                                        Tersedia : 2
                                    </p>
                                </div>                                
                                <a href="<?php echo site_url(); ?>/utama/transaksikamarprm/1/3" class="small-box-footer">
                                    Klik disini <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 Deluxeanak" style="display:none">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3 center>
                                        Tipe Deluxe 3
                                    </h3>
                                    <p center>
                                        Tersedia : 2
                                    </p>
                                </div>                                
                                <a href="<?php echo site_url(); ?>/utama/transaksikamarprm/2/5" class="small-box-footer">
                                    Klik disini <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 Standaranak" style="display:none;">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        Tipe Standar 3
                                    </h3>
                                    <p>
                                        Tersedia : 3
                                    </p>
                                </div>                                
                                <a href="<?php echo site_url(); ?>/utama/transaksikamarprm/3/6" class="small-box-footer">
                                    Klik disini <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col --> 
                    </div>

                    <!-- top row -->
                    <div class="row">
                        <div class="col-xs-12 connectedSortable">
                            
                        </div><!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-6 connectedSortable">                             
                            
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="nav-tabs-custom">
                                <!-- Tabs within a box -->
                                <ul class="nav nav-tabs pull-right">
                                    <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
                                    <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
                                    <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
                                </ul>
                                <div class="tab-content no-padding">
                                    <!-- Morris chart - Sales -->
                                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                                </div>
                            </div><!-- /.nav-tabs-custom -->
                                                                            

                        </section><!-- /.Left col -->                       
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url(); ?>/assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>/assets/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url(); ?>/assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo base_url(); ?>/assets/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url(); ?>/assets/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url(); ?>/assets/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url(); ?>/assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>/assets/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>/assets/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url(); ?>/assets/js/AdminLTE/dashboard.js" type="text/javascript"></script> 
               
        <script src="<?php echo base_url(); ?>/assets/js/sweetalert.min.js" type="text/javascript"></script>        

    </body>
</html>

<script type="text/javascript">
    $.getScript( "assets/js/sidemenu.js" )
      .done(function( script, textStatus ) {
        var isimenu = menukite();
        $('#menuside').append(isimenu);
      })
      .fail(function( jqxhr, settings, exception ) {
        $( "div.log" ).text( "Triggered ajaxError handler." );
    });

      $('#President').on("click",function(){
         $('.Presidentanak').toggleClass('Presidentank');
         $('.Deluxeanak').removeClass('Deluxeank');
         $('.Standaranak').removeClass('Standarank');
      });
      $('#Deluxe').on("click",function(){
         $('.Deluxeanak').toggleClass('Deluxeank');
         $('.Presidentanak').removeClass('Presidentank');
         $('.Standaranak').removeClass('Standarank');
      });
      $('#Standar').on("click",function(){
         $('.Standaranak').toggleClass('Standarank');
         $('.Deluxeanak').removeClass('Deluxeank');
         $('.Presidentanak').removeClass('Presidentank');
      });


</script>