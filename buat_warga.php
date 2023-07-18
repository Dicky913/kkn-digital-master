<?php 
session_start();
include 'function/up_warga.php';
if(isset($_POST["unggah"])){

  if(UpBerita($_POST) > 0 ){
      echo "
      <script>
      alert('Data Warga Berhasil Ditambah !');
      document.location.href ='data_user.php';
      </script>
      ";    
  }else{
      echo "
      <script>
      alert('Data Warga Gagal Ditambah !');
      document.location.href ='buat_warga.php';
      </script>
      ";    
  }
  
  }

?>
<!doctype html>
<html lang="en">

<head>
  <?php include "util/meta.php" ?>

  <title>SOLAH | Warga</title>

  <?php include "util/boots.php" ?>

</head>


<body id="top-header">
<!-- LOADER TEMPLATE -->
<div id="page-loader">
    <div class="loader-icon fa fa-spin colored-border"></div>
</div>
    <!-- NAVBAR
    ================================================= -->
    <?php include "util/navbar3.php" ?>
    

   <!-- HERO
    ================================================== -->
    <section class="page-banner-area page-pricing">
        <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">TAMBAH DATA WARGA</h1>
                        
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

<section class="section blog-wrap bg-gray">
    <div class="container">
      <div>
        <div class="">
            <div class="container">
              <?php 
                if(isset($_GET['pesan'])){
                  if($_GET['pesan']=="gagal"){
                    echo "<div  class='alert'>Maaf, judul ini pernah digunakan sebelumnya <br> Mohon untuk menggunakan judul lainnya!</div>";
                    //echo "<div  class='alert'>Status WA : ",$_SESSION['WhatsApp']," <br> alamat : ",$_SESSION['test'],"</div>";
                  }
                  else{
                    echo "<h4 class='display-4'>Unggah Berita</h4>";
                  }
                }
              ?>
              <!--NIK-->
              <div class="form-group">
                     <!-- Contacts Form -->
                     <form class="contact_form" action="" method="post">
                        <div class="row">
                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">



                                    <label class="h6 small d-block text-uppercase">
                                        NIK
                                    </label>
                                    <div class="input-group">
                                        <input class="form-control" name="nik" id="nik" required="" placeholder="Masukkan Nama Jalan" type="number">
                                    </div> 
                                    <br>

                                    <label class="h6 small d-block text-uppercase">
                                        NAMA                                      
                                    </label>
                                    <div class="input-group">
                                        <input class="form-control" name="nama" id="nama" required=""  placeholder="Masukkan Nama" type="text">
                                    </div>
                                    <br>
                                    <label class="h6 small d-block text-uppercase">
                                        No. Telpon
                                    </label>
                                    <div class="input-group">
                                        <input class="form-control" name="telp" id="telp" required="" placeholder="Masukkan Nama Jalan" type="text">
                                    </div> 
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        POIN
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="poin" id="poin" required="" placeholder="Masukkan Nomor Telepon" type="text">
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
                                        <input class="form-control" name="tempat_lahir" id="tempat_lahir" required="" placeholder="Masukkan Tempat Lahir"  type="text">
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
                                        <input class="form-control" id="tanggal_lahir" name="tanggal_lahir" required="" placeholder="Masukkan Tanggal Lahir"  type="date">
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
                                        <select class="form-control" id="kelamin" name="kelamin"   required="" >
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

                                    <label class="h6 small d-block text-uppercase">
                                        Password
                                    </label>
                                    <div class="input-group">
                                        <input class="form-control" name="password" id="password" required="" placeholder="Masukkan Nama Jalan" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>                  

                        <div class="">
                           <input name="submit" type="submit" class="btn btn-primary btn-circled" value="Simpan">
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
      </div>
    </section>
   
    <?php include "util/footer.php" ?>

    <a class="scroll-to-top js-scroll-trigger" href="#top-header">
        <i class="fa fa-angle-up"></i>
    </a>

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
   