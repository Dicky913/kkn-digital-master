<?php 
session_start();
include 'function/edit_kegiatan.php';
$id = $_GET['id'];
$tampil = mysqli_query($koneksi, "SELECT * FROM kegiatan WHERE id = '$id'");
$hasilubah = mysqli_fetch_array($tampil);

if(isset($_POST["unggah"])){

  if(EditKegiatan($_POST) > 0 ){
      echo "
      <script>
      alert('Kegiatan Berhasil Diperbarui !');
      document.location.href ='kegiatan.php';
      </script>
      ";    
  }else{
      echo "
      <script>
      alert('Tidak ada perubahan !');
      </script>
      ";    
  }
  
  }

?>
<!doctype html>
<html lang="en">

<head>
  <?php include "util/meta.php" ?>

  <title>SOLAH | KEGIATAN</title>

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
                        <h1 class="display-4 font-weight-bold">EDIT KEGIATAN</h1>
                        
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
                    echo "<h4 class='display-4'>EDIT KEGIATAN</h4>";
                  }
                }
              ?>
              <!--Judul-->
              <div class="form-group">
                <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                <input type="hidden" name="gambarLama" value="<?=$hasilubah['foto']?>">
                  <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control"  placeholder="Judul Berita" value="<?=$hasilubah['judul']?>">
                  </div>


                  <!--Isi kegiatan-->
                  <div class="form-group">
                    <label for="isi">Isi</label> 
                        <textarea class="form-control" name="isi" rows="10" placeholder="Isi Berita" ><?=$hasilubah['isi']?></textarea>
                      </div>
                          <!--Upload gambar-->
                                        
                            <div class="form-group">
                            <label for="upload">Gambar yang sudah ada : </label> <br>
                              <img src="images/<?=$hasilubah['foto'];?>" height="130"><br><br>
                              <label for="upload">Pilih gambar untuk diupload</label> <br>
                              <input type="file" class="form-control-file" name="gambar">
                            </div>
                            <button type="submit" name="unggah" class="btn btn-primary">Simpan</button>
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
   