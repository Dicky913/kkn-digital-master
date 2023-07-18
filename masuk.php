<?php session_start();
    if(isset($_SESSION['nik'])) {
        if($_SESSION['level']=="admin"){
            header("location:admin.php");
        }else if($_SESSION['level']=="user"){
            header("location:index.php");
        }  
    }
    require_once("util/koneksi.php");
?>
<!doctype html>
<html lang="en">

<head>
  <?php include "util/meta.php" ?>

  <title>SOLAH | MASUK</title>

  <?php include "util/boots.php" ?>

</head>


<body id="top-header">


<!-- LOADER TEMPLATE -->
<div id="page-loader">
    <div class="loader-icon fa fa-spin colored-border"></div>
</div>
    <!-- /LOADER TEMPLATE -->
    <div class="logo-bar d-none d-md-block d-lg-block bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo d-none d-lg-block">
                        <!-- Brand -->
                        <a class="navbar-brand js-scroll-trigger" href="index.php">
                        <h3>
                        <center><img src="images/edo/logo solah.png" width="50" height="50"></center>                
                        S O L A H
                        </h3>
                        </a>
                    </div>
                </div>

                 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR
    ================================================= -->
    <?php include "util/navbar2.php" ?>



    <!-- HERO
    ================================================== -->
    <section class="banner-area py-5" id="banner">
       <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row  align-items-center justify-content-center">
                <div class="col-md-12 col-lg-8">
                   <div class="banner-content text-center text-lg-left">
                        <!-- Heading -->
                        <h1 class="display-4 mb-4 ">
                        Sistem <br>Pengolahan Sampah
                        </h1>

                        <!-- Subheading -->
                        <p class="lead mb-5">
                        Daur Ulang Dan Tabung Sampahmu Maka Bumi Terselamatkan.
                        </p>

                        <p >
                        Belum memiliki akun ?
                        </p>
                        <!-- Button -->
                        <p class="mb-0">
                            <a href="daftar.php" class="btn btn-primary btn-circled">
                                Daftar
                            </a>
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 ">
                    <div class="banner-contact-form bg-white">
                        <form action="function/loginProses.php" method="post">
                            <div class="form-group">
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK atau NAMA">
                            </div>                          
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Kata Sandi">
                            </div>                           
                            <button type="submit" class="btn btn-dark btn-block btn-circled">Masuk</button>
                        </form>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <?php include "util/footer.php" ?>
    <!--  Page Scroll to Top  -->

    <a class="scroll-to-top js-scroll-trigger" href="#top-header">
        <i class="fa fa-angle-up"></i>
    </a>


   


    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Map Js -->
    <script src="plugins/google-map/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>

    <script src="js/form/contact.js"></script>
    <script src="js/theme.js"></script>

  </body>
  </html>
   