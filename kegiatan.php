<?php session_start();
include 'util/koneksi.php';
$result = mysqli_query($koneksi,"SELECT * FROM kegiatan ORDER BY id DESC");

  if(isset($_POST["cari"])){
      $kata = $_POST['carikata'];
      $result = mysqli_query($koneksi,"SELECT * FROM kegiatan WHERE judul LIKE '%$kata%' OR isi LIKE '%$kata%' ORDER BY id DESC");
      // echo "<meta http-equiv='refresh' content='1 url=berita.php'>";
      
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
 <!-- /LOADER TEMPLATE -->


    <!-- NAVBAR
    ================================================= -->
    <?php include "util/navbar3.php" ?>
    

   <!-- HERO
    ================================================== -->
    <section class="page-banner-area page-service">
        <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">Kegiatan</h1>
                        <p>Lihatlah Foto-Foto Kegiatan Setiap Harinya.</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>



<section class="section" id="service">
        <div class="container">
            <div class="container">
                <div class="col-lg-9">
                    <div class="">
                        <div class="search card p-4 mb-3 border-0">          
                            <form method="POST">    
                                <div class="input-group">
                                <input type="text" name="carikata" class="form-control mr-3 col-lg-5" placeholder="Telusuri"> 
                                <button type="submit" name="cari" class="btn-outline-dark mr-3 col-lg-2"> Cari </button>
                            </form>
                            <?php
                                if(isset($_SESSION['nik'])){        
                                $nik = $_SESSION['nik'];
                                $tampil = mysqli_query($koneksi , "SELECT * FROM biodata WHERE nik = '$nik'");
                                $hasil = mysqli_fetch_array($tampil);
                                    if($hasil['level'] == "admin") { 
                                    echo"                                
                                            <a href='buat_kegiatan.php' class='btn-primary btn-lg'>Buat Baru</a>
                                        ";
                                    };
                                }                
                            ?>
                            
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">


            <?php  while( $row= mysqli_fetch_assoc ($result) ) :?>
                <div class="col-lg-4 col-md-8">
                    <div class="blog-box mb-5">
                       <h3><center><?php echo $row["judul"]; ?> </center></h3>
                        <div class="">
                        <img src="images/<?=$row["foto"];?>"  width="100%" height="200px">
                        </div>  
                        <br>
                        <?php
                                    if(isset($_SESSION['nik'])){        
                                    $nik = $_SESSION['nik'];
                                    $tampil = mysqli_query($koneksi , "SELECT * FROM biodata WHERE nik = '$nik'");
                                    $hasil = mysqli_fetch_array($tampil);
                                        if($hasil['level'] == "admin") { 
                                            $rowid = $row['id'] ;
                                        echo"                                
                                            <h4>
                                            <a href='ubah_kegiatan.php?id=$rowid'><i class='ti-pencil-alt'>        Edit</i></a>
                                            <a href='del_kegiatan.php?id=$rowid'><i class='ti-trash'>        Hapus</i></a>
                                            </h4>
                                            ";
                                        };
                                    }                
                        ?>
                    </div>
                </div>

                <?php endwhile; ?>

                <!-- <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="pricing-box">
                        <h3><center>KEGIATAN 2</center></h3>
                        <div class="price-block">
                             
                        </div>

                        <ul class="price-features list-unstyled"></ul>

                        <center><a href="#" class="btn btn-primary btn-circled">Lihat</a></center>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-8 col-md-6">
                    <div class="pricing-box ">
                        <h3><center>KEGIATAN 3</center></h3>
                        <div class="price-block">
                             
                        </div>

                        <ul class="price-features list-unstyled"></ul>
                        <br>
                       <center> <a href="#" class="btn btn-primary btn-circled">Lihat</a></center>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
            

<


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
   