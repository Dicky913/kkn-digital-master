<?php 
session_start();
require_once("util/koneksi.php");

$nik = $_SESSION['nik'];
$tampil = mysqli_query($koneksi , "SELECT * FROM biodata WHERE nik = '$nik'");
$hasil = mysqli_fetch_array($tampil);
?>

<!doctype html>
<html lang="en">

<head>
  <?php include "util/meta.php" ?>

  <title>SOLAH | PROFIL</title>

  <?php include "util/boots.php" ?>

</head>


<body id="top-header">
<!-- LOADER TEMPLATE -->
<div id="page-loader">
    <div class="loader-icon fa fa-spin colored-border"></div>
</div>
 <!-- /LOADER TEMPLATE -->


    <!-- NAVBAR
    ================================================= -->
    <?php include "util/navbar3.php" ?>
    

<!-- HERO
================================================== -->
<section class="page-banner-area page-contact">
    <div class="overlay"></div>
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 col-12 text-center">
                <div class="page-banner-content">
                    <h1 class="display-4 font-weight-bold"><?php echo $hasil['nama'] ?></h1>
                    <p><?php echo $hasil['nik'] ?></p>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>


  <!-- SECTIONS
    ================================================== -->
    <section id="contact-info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="ti-server"></i>
                        <h5>POIN</h5>
                        <br>
                        <h1> <?php echo $hasil['poin'] ?> </h1>
                    </div>
                </div>
                
            </div>
        </div>

        <br>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-map-marker"></i>
                        <h4>Alamat</h4>
                        <p class="lead"><?php echo $hasil['alamat'] ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="ti-home"></i>
                        <h4>Tempat, Tanggal Lahir</h4>
                        <p class="lead"><?php echo $hasil['tempat'].", ".$hasil['tanggal_lahir'] ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-phone"></i>
                        <h4>Nomor Telepon</h4>
                        <p class="lead"><?php echo $hasil['no_tlp'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="ti-user"></i>
                        <h4>Jenis Kelamin</h4>
                        <p class="lead"><?php echo $hasil['jenis_kelamin'] ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="ti-shield"></i>
                        <h4>Agama</h4>
                        <p class="lead"><?php echo $hasil['agama'] ?></p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section" id="contact">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-8 col-lg-6">
                   
                    <!-- Heading -->
                    <h2 class="section-title mb-2 ">
                        Edit Profil <span class="font-weight-normal"></span>
                    </h2>

                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-6">
                   <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>
                    <!-- end message -->
                    <!-- Contacts Form -->
                    <form class="contact_form" action="function/edit_Biodata.php" method="post">
                        <div class="row">
                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        NAMA                                      
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="nama" id="nama" required="" value="<?php echo $hasil['nama'] ?>" placeholder="Masukkan Nama" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        No. Telepon
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="telp" id="telp" required="" placeholder="Masukkan Nomor Telepon" value="<?php echo $hasil['no_tlp'] ?>"type="text">
                                    </div>
                                </div>
                            </div>

                            
                            <!-- End Input -->

                            <div class="w-100"></div>

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Tempat Lahir
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="tempat_lahir" id="tempat_lahir" required="" placeholder="Masukkan Tempat Lahir" value="<?php echo $hasil['tempat'] ?>" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Tanggal Lahir (BLN/TGL/THN)
                                    </label>

                                    <div class="input-group ">
                                        <input class="form-control" id="tanggal_lahir" name="tanggal_lahir" required="" placeholder="Masukkan Tanggal Lahir" value="<?php echo $hasil['tanggal_lahir'] ?>" type="date">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->


                           <!-- Input -->
                           <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Jenis Kelamin
                                    </label>

                                    <div class="input-group">
                                        <select class="form-control" id="kelamin" name="kelamin" value="<?php echo $hasil['jenis_kelamin'] ?>"  required="" >
                                            <option disabled selected>---Pilih Jenis Kelamin---</option>}  
                                            <option value="Laki-Laki" <?php if($hasil['jenis_kelamin'] == "Laki-Laki") { echo "selected"; } ?>>Laki-Laki</option>
                                            <option value="Perempuan" <?php if($hasil['jenis_kelamin'] == "Perempuan") { echo "selected"; } ?>>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Agama
                                    </label>

                                    <div class="input-group ">
                                        <select class="form-control" id="agama" name="agama"  required="" >
                                            <option disabled selected>---Pilih Agama---</option>} 
                                            <option value="Islam" <?php if($hasil['agama'] == "Islam") { echo "selected"; } ?>>Islam</option>
                                            <option value="Katolik" <?php if($hasil['agama'] == "Katolik") { echo "selected"; } ?>>Katolik</option>
                                            <option value="Protestan" <?php if($hasil['agama'] == "Protestan") { echo "selected"; } ?>>Protestan</option>
                                            <option value="Hindu" <?php if($hasil['agama'] == "Hindu") { echo "selected"; } ?>>Hindu</option>
                                            <option value="Buddha" <?php if($hasil['agama'] == "Buddha") { echo "selected"; } ?>>Buddha</option>
                                            <option value="Konghucu" <?php if($hasil['agama'] == "Konghucu") { echo "selected"; } ?>>Konghucu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            
                            <!-- Input -->
                            <div class="col-sm-12 mb-12">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Alamat
                                    </label>

                                    <div class="input-group">

                                        <select class="form-control" name="lingkungan"  id="lingkungan"  required="" >

                                            <option disabled selected>---Pilih Lingkungan---</option>

                                            <option value="Karang Taruna" <?php if($hasil['kelurahan'] == "Karang Taruna") { echo "selected"; } ?>>Karang Taruna</option>

                                            <option value="Jawa Utara" <?php if($hasil['kelurahan'] == "Jawa Utara") { echo "selected"; } ?>>Jawa Utara</option>

                                            <option value="Karang Seraya" <?php if($hasil['kelurahan'] == "Karang Seraya") { echo "selected"; } ?>>Karang Seraya</option>

                                            <option value="Gomong Timur" <?php if($hasil['kelurahan'] == "Gomong Timur") { echo "selected"; } ?>>Gomong Timur</option>

                                            <option value="Karang Medain Utara" <?php if($hasil['kelurahan'] == "Karang Medain Utara") { echo "selected"; } ?>>Karang Medain Utara</option>

                                            <option value="Karang Medain Barat" <?php if($hasil['kelurahan'] == "Karang Medain Barat") { echo "selected"; } ?>>Karang Medain Barat</option>
                                        </select>
                                                                             
                                    </div>

                                    <br>

                                    <div class="input-group">
                                        <input class="form-control" name="jalan" id="jalan" required="" placeholder="Masukkan Nama Jalan" value="<?php echo $hasil['alamat'] ?>"type="text">
                                    </div>
                                </div>
                            </div>
                        </div>                  

                        <div class="">
                           <input name="submit" type="submit" class="btn btn-primary btn-circled" value="Simpan">
                        </div>
                    </form>
                    <!-- End Contacts Form -->
                </div>

                <div class="col-lg-6 col-md-6">
                    
                </div>
            </div>
        </div>
    </section>
    <?php include 'util/footer.php' ?>


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
   