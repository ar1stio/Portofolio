<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $halaman ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->

        <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url(); ?>/assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>/assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/css/inputfile.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <style type="text/css">
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
            <nav class="navbar navbar-expand-lg" role="navigation">
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
                                                    <img src="<?php echo base_url(); ?>assets/img/avatar3.png" class="img-circle" alt="User Image"/>
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
                                                    <img src="<?php echo base_url(); ?>assets/img/avatar2.png" class="img-circle" alt="user image"/>
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
                                                    <img src="<?php echo base_url(); ?>assets/img/avatar.png" class="img-circle" alt="user image"/>
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
                                                    <img src="<?php echo base_url(); ?>assets/img/avatar2.png" class="img-circle" alt="user image"/>
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
                                                    <img src="<?php echo base_url(); ?>assets/img/avatar.png" class="img-circle" alt="user image"/>
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
                                    <img src="<?php echo base_url(); ?>assets/img/avatar3.png" class="img-circle" alt="User Image" />
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
                            <img src="<?php echo base_url(); ?>assets/img/avatar3.png" class="img-circle" alt="User Image" />
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
                        <li>
                            <a href="<?php echo base_url(); ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>                        
                        <li 
                            <?php if($submenu=='Tampilan'){?>
                                class="treeview active"
                            <?php }else{ ?>
                                class="treeview"
                            <?php } ?>
                        >
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
            