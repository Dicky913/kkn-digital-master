<?php 
session_start() ;
include 'util/koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($koneksi,"SELECT * FROM berita ORDER BY id DESC LIMIT 3");

$tampil = mysqli_query($koneksi, "SELECT * FROM berita WHERE id = $id");
$hslberita = mysqli_fetch_array($tampil);
?>

<!doctype html>
<html lang="en">

<head>
  <?php include "util/meta.php" ?>

  <title>SOLAH | BERITA </title>

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
    

   <!-- HEADER
    ================================================== -->
    <section class="page-banner-area page-pricing">
        <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">Berita</h1>
                        <p>Dapatkan Berita Terkini Seputar Informasi Sampah di Lingkungan Mataram Barat.</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

  <!-- ISI BERITA
================================================== -->
<section class="section blog-wrap bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
  <div class="col-lg-12">
    <div class="single-blog-item">
      <img src="images/<?=$hslberita['gambar']?>" alt="" class="img-fluid rounded">

      <div class="blog-item-content bg-white p-5">
        <div class="blog-item-meta bg-gray py-1 px-2">
          <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i><?=$hslberita['tgl'] ?></span>
        </div> 

        <h2 class="mt-3 mb-4">
  <?php
  if (isset($hslberita['judul'])) {
    echo $hslberita['judul'];
  } else {
    echo "Judul Artikel Tidak Tersedia";
  }
  ?>
</h2>
        <p class="lead mb-4"><?=$hslberita['isi']?></p>
      </div>
    </div>
  </div>

  

  <div class="col-lg-12">
  </div>
</div>
   </div>
  <div class="col-lg-4">
    <div class="sidebar-wrap">
  <div class="sidebar-widget search card p-4 mb-3 border-0">
  </div>

  

<!--  Berita Lainnya  -->

  <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
    <h5>Postingan Terbaru</h5>
      <?php  while( $row= mysqli_fetch_assoc ($result) ) :?>
        <div class="media border-bottom py-3">
            <div class="media-body">
                <h6 class="my-2"><a href="baca_berita.php?id=<?=$row['id']?>"><?=$row['judul']?></a></h6>
                <span class="text-sm text-muted"><?=$row['tgl']?></span>
            </div>
        </div>
        <?php endwhile; ?>
  </div>

  
            </div>   
        </div>
    </div>
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
   