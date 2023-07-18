<?php session_start(); 
include 'util/koneksi.php';
$result = mysqli_query($koneksi,"SELECT * FROM informasi ORDER BY id DESC");

if(isset($_POST["unggah"])){

  if(UpInformasi($_POST) > 0 ){
      echo "
      <script>
      alert('Edukasi dan Informasi Berhasil Ditambah !');
      document.location.href ='edukasi.php';
      </script>
      ";    
  }else{
      echo "
      <script>
      alert('Edukasi dan Informasi Gagal Ditambah !');
      document.location.href ='buat_informasi.php';
      </script>
      ";    
  }
  
  }

if(isset($_POST["cari"])){
    $kata = $_POST['carikata'];
    $result = mysqli_query($koneksi,"SELECT * FROM informasi WHERE judul LIKE '%$kata%' OR isi LIKE '%$kata%' ORDER BY id DESC");
    // echo "<meta http-equiv='refresh' content='1 url=berita.php'>";
    
}
?>
<!doctype html>
<html lang="en">

<head>
  <?php include "util/meta.php" ?>

  <title>SOLAH | EDUKASI & INFORMASI</title>

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
                        <h1 class="display-4 font-weight-bold">Edukasi Dan Informasi</h1>
                        <p>Baca dan Pelajari Topik Menarik Mengenai Sampah.</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

 
       <!-- KONTEN
  ================================================== -->      
<section class="section blog-wrap bg-gray">
<div class="container">
  <div class="col-lg-9">
      <div class="">
        <div class="search card p-4 mb-3 border-0">          
            <div class="input-group">
              <input type="text" class="form-control mr-3 col-lg-5" placeholder="Telusuri"> 
              <button type="submit" class="btn-outline-dark mr-3 col-lg-2"> Cari </button>
              <?php
                if(isset($_SESSION['nik'])){        
                  $nik = $_SESSION['nik'];
                  $tampil = mysqli_query($koneksi , "SELECT * FROM biodata WHERE nik = '$nik'");
                  $hasil = mysqli_fetch_array($tampil);
                    if($hasil['level'] == "admin") { 
                      echo"                                
                            <a href='buat_edukasi.php' class='btn-primary btn-lg'>Buat Baru</a>
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
                        <div class="blog-img-box">
                        <img  src="images/<?= $row['gambar']; ?>"  width="100%" height="200px">
                        </div>
                        <div class="single-blog">
                            <div class="blog-content">
                                <h6> <?php echo $row["tgl"]; ?></h6>
                                <h3 class="card-title"><?php echo $row["judul"];?> </h3>
                                <?php echo "<p>".substr($row['isi'],0,115)."...</p>";?>
                                    <a href='baca_informasi.php?id=<?=$row["id"]?>' class="read-more">Baca Selengkapnya......</a>
                                <br><br>
                                <?php
                                    if(isset($_SESSION['nik'])){        
                                    $nik = $_SESSION['nik'];
                                    $tampil = mysqli_query($koneksi , "SELECT * FROM biodata WHERE nik = '$nik'");
                                    $hasil = mysqli_fetch_array($tampil);
                                        if($hasil['level'] == "admin") { 
                                            $rowid = $row['id'] ;
                                        echo"                                
                                            <h4>
                                            <a href='ubah_informasi.php?id=$rowid'><i class='ti-pencil-alt'>        Edit</i></a>
                                            <a href='del_informasi.php?id=$rowid'><i class='ti-trash' >Hapus</i></a>
                                            </h4>
                                            ";
                                        };
                                    }                
                                ?>
                                
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
               <?php endwhile; ?>



                

                
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
   