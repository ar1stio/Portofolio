<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Casa Kandara</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url(); ?>assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url(); ?>assets/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo base_url(); ?>assets/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url(); ?>assets/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

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
        .Standarank{
            display: block !important;
        }
        .Deluxeank{
            display: block !important;            
        } 
        .cek a:hover,.cek a:active,.cek a:focus{
            background-color: black !important; color: #fff !important;
        }
        .aktif{
            background-color: black !important; color: #fff !important;            
        }
        .btn-outline-dark:hover {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40;
        }
        .btn-outline-dark {
            color: #343a40;
            background-color: transparent;
            background-image: none;
            border-color: #343a40;
        }
        @media (max-width: 574px){
            .sembunyi, tr.sembunyi, th.sembunyi, td.sembunyi {
                display: none!important;
            }            
            .inputtengah{
                width:60% !important;
                margin-left:20% !important;
                margin-right:20% !important;
            }
            
        }
        .bawah{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #222222;
            color: white;
            text-align: center;
        }
        .wrapper{
            min-height: 470px !important;
        }
        .tengah{
            text-align: center;
        }
        .lebarisi{
            margin-left:20% !important;
            margin-right:20% !important;
        }
        .navbar-brand{
            padding: 10px !important;
        }
        .navbar{
            margin-bottom: 0px !important;
        }
    </style>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
            <nav class="navbar navbar-light bg-light">
              <a class="navbar-brand" href="#">
                <img style="width: 200px; height:45px;" src="<?php echo base_url(); ?>/assets/img/logo.jpg"/>
              </a>
              <div class="navbar-right">
                    <ul class="nav navbar-nav">                        
                        <li>
                        <p style="padding-top: 15px; padding-bottom: 15px;">
                            <span class="masukinfo">Belum punya akun ? </span>
                            <span class="daftarinfo" style="display: none;">Sudah terdaftar ? </span>
                        </p>
                        </li>
                        <li>
                            <a>
                            <button type="button" class="btn btn-outline-dark masukinfo" id="daftaruser">Daftar</button>
                            <button type="button" style="display: none;" class="btn btn-outline-dark daftarinfo" id="masukuser">Masuk</button>
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>
            <div class="wrapper">
                <div class="row wrapper" style="margin-bottom: -50px;">
                    <div class="col-sm-4 sembunyi">
                        <img style="width: 100%; height:518px !important;" src="<?php echo base_url(); ?>/assets/img/contoh.jpg"/>
                    </div>
                    <div class="col-sm-8">
                        <div class="masukinfo">
                            <div class="lebarisi tengah"><span style="font-size: 30px;">Masuk</span></div>
                            <div class="lebarisi tengah">Input data diri Anda untuk masuk ke Website Casa Kandara</div>
                            <br>
                            <form action="<?php echo site_url('login/aksi_login'); ?>" method="post">
                                <div class="form-row">
                                    <div class="form-group lebarisi">
                                      <label for="inputEmail4" class="inputtengah">Email</label>
                                      <input type="email" class="form-control inputtengah" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group lebarisi">
                                      <label for="inputPassword4" class="inputtengah">Password</label>
                                      <input type="password" class="form-control inputtengah" id="inputPassword4" placeholder="Password">
                                    </div>
                                    <div class="form-group lebarisi">
                                      <button type="submit" class="btn btn-success inputtengah">Masuk</button>
                                    </div>                        
                                </div>
                            </form>
                        </div>
                        <div class="center-block daftarinfo" style="display: none;">
                            <div class="lebarisi tengah"><span style="font-size: 30px;">Daftar</span></div>
                            <br>
                            <div class="lebarisi tengah"><img style="width: 200px !important; height:200px !important;" src="<?php echo base_url(); ?>/assets/img/admin.png"/></div>
                            <br>
                            <div class="lebarisi tengah">Silahkan Hubungi Administrator</div>
                            <div class="lebarisi tengah">08001000200</div>                            
                        </div>
                    </div>
                </div>
            </div>
            <footer class="site-footer bawah">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="text-center">
                    Copyright ©<script>document.write(new Date().getFullYear());</script> Casa Kandara. All rights reserved
                    <p>
                      <a target="_blank" href="https://www.facebook.com/aristio.nusa" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
                      <a target="_blank" href="#" class="p-3"><span class="fa fa-twitter"></span></a>
                      <a target="_blank" href="https://www.instagram.com/aristiodn/" class="p-3"><span class="fa fa-instagram"></span></a>
                      <a target="_blank" href="#" class="p-3"><span class="fa fa-vimeo"></span></a>
                      <a target="_blank" href="https://www.youtube.com/channel/UCqnpvFSpIAhu8mOQRBnOqxA" class="p-3"><span class="fa fa-youtube-play"></span></a>
                    </p>
                  </div>
                </div>
              </div>
            </footer>
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url(); ?>/assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Sparkline -->    
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url(); ?>/assets/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url(); ?>/assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    </body>
</html>
<script type="text/javascript">
    $("#masukuser").on("click",function(){
        $(".masukinfo").show();
        $(".daftarinfo").hide();
    });
    $("#daftaruser").on("click",function(){
        $(".masukinfo").hide();
        $(".daftarinfo").show();
        console.log('aaaa');
    });
</script>