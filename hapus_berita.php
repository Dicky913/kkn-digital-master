<?php 
session_start();
include 'function/del_berita.php';
// if(isset($_POST["unggah"])){

//   if(UpBerita($_POST) > 0 ){
//       echo "
//       <script>
//       alert('Berita Berhasil Ditambah !');
//       document.location.href ='berita.php';
//       </script>
//       ";    
//   }else{
//       echo "
//       <script>
//       alert('Berita Gagal Ditambah !');
//       document.location.href ='buat_berita.php';
//       </script>
//       ";    
//   }
  
//   }

?>
<!doctype html>
<html lang="en">

<head>
  <?php include "util/meta.php" ?>

  <title>SOLAH | BERITA</title>

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
                        <h1 class="display-4 font-weight-bold">UNGGAH BERITA</h1>
                        
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
              <!--Judul-->
              <div class="form-group">
                <form action="" method="POST" enctype="multipart/form-data">
                  <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control"  placeholder="Judul Berita">
                  </div>

                  <!--Judul-->
              <div class="form-group">
                <form action="" method="POST" enctype="multipart/form-data">
                  <label for="judul">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" >
                  </div>

                  <!--Text Area-->
                  <div class="form-group">
                    <label for="isi">Isi</label>
                        <textarea class="form-control" name="isi" rows="10" placeholder="Isi Berita"></textarea>
                      </div>
                          <!--Upload gambar-->
                                        
                            <div class="form-group">
                              <label for="upload">Pilih gambar untuk diupload</label>
                              <input type="file" class="form-control-file" name="gambar" >
                            </div>
                            <button type="submit" name="unggah" class="btn btn-primary">Unggah</button>
                      </form></div></div></div>
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
   