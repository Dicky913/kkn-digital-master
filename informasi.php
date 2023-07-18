<?php session_start() ?>
<!doctype html>
<html lang="en">

<head>
  <?php include "util/meta.php" ?>

  <title>SOLAH | INFORMASI</title>

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
    <section class="page-banner-area page-pricing">
        <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">Edukasi Dan Informasi</h1>
                        <p>Baca dan Pelajari Topik Menarik Mengenai Sampah.</p>
                        <ul class="list-inline">
                          <li class="list-inline-item"><a href="edukasi.php" class="text-white-50">Edukasi</a></li>
                          <li class="list-inline-item"><span class="text-white">/</span></li>
                          <li class="list-inline-item"><a href="informasi.php" class="text-white">Informasi</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
      
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
                            <a href='buat_informasi.php' class='btn-primary btn-lg'>Buat Baru</a>
                          ";
                    };
                }                
              ?>
              
            </div>
        
        </div>
      </div>
  </div>
</div>

  <div class="container">
        <div class="row">
  <div class="col-lg-6 col-md-6 mb-5">
    <div class="blog-item">
      <img src="images/blog/blog-1.jpg" alt="" class="img-fluid rounded">

      <div class="blog-item-content bg-white p-5">
        <div class="blog-item-meta bg-gray py-1 px-2">      
          <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28 Januari 2021</span>
        </div> 

        <h3 class="mt-3 mb-3"><a href="#">Improve design with typography?</a></h3>
        <p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!</p>

        <a href="blog-single.html" class="btn btn-primary btn-circled">Baca Selanjutnya</a>
      </div>
    </div>
  </div>

  <div class="col-lg-6 col-md-6 mb-5">
    <div class="blog-item">
      <img src="images/blog/blog-2.jpg" alt="" class="img-fluid rounded">

      <div class="blog-item-content bg-white p-5">
        <div class="blog-item-meta bg-gray py-1 px-2">          
          <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28 Januari 2021</span>
        </div>   

        <h3 class="mt-3 mb-3"><a href="blog-single.html">Interactivity connect consumer</a></h3>
        <p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!</p>

        <a href="blog-single.html" class="btn btn-primary btn-circled">Baca Selanjutnya</a>
      </div>
    </div>
  </div>

  <div class="col-lg-6 col-md-6 mb-5">
    <div class="blog-item">
      <img src="images/blog/blog-3.jpg" alt="" class="img-fluid rounded">

      <div class="blog-item-content bg-white p-5">
        <div class="blog-item-meta bg-gray py-1 px-2">          
          <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28 Januari 2021</span>
        </div>  

        <h3 class="mt-3 mb-3"><a href="blog-single.html">Marketing Strategy to bring more affect</a></h3>
        <p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!</p>

        <a href="blog-single.html" class="btn btn-primary btn-circled">Baca Selanjutnya</a>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 mb-5">
    <div class="blog-item">
      <img src="images/blog/blog-1.jpg" alt="" class="img-fluid rounded">

      <div class="blog-item-content bg-white p-5">
        <div class="blog-item-meta bg-gray py-1 px-2">          
          <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28 Januari 2021</span>
        </div>  

        <h3 class="mt-3 mb-3"><a href="blog-single.html">Marketing Strategy to bring more affect</a></h3>
        <p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!</p>

        <a href="blog-single.html" class="btn btn-primary btn-circled">Baca Selanjutnya</a>
      </div>
    </div>
  </div>
</div>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-6 text-center">
              <nav class="navigation pagination d-inline-block">
                  <div class="nav-links">
                      <a class="prev page-numbers" href="#">Prev</a>
                      <span aria-current="page" class="page-numbers current">1</span>
                      <a class="page-numbers" href="#">2</a>
                      <a class="next page-numbers" href="#">Next</a>
                  </div>
              </nav>
            </div>
        </div>
    </div>
</section>
  
    <?php include "util/footer.php" ?>


    <!--  Page Scroll to Top  -->

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
   