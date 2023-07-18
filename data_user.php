<?php 
session_start();
include 'util/koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
thead {
    background: yellow;
    color: black;
}
</style>
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
                    <h1 class="display-4 font-weight-bold">DATABASE WARGA</h1>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>


  <!-- SECTIONS
    ================================================== -->
    

    <section class="section" id="contact">
        <div class="container col-11">
            <div>
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
                                $user = mysqli_query($koneksi , "SELECT * FROM biodata WHERE nik = '$nik'");
                                $hasil = mysqli_fetch_array($user);
                                    if($hasil['level'] == "admin") { 
                                    echo"                                
                                            <a href='buat_warga.php' class='btn-primary btn-lg'>Tambah Warga</a>
                                        ";
                                    };
                                }                
                            ?>
                            
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-lg-12">
                <table class="table table-striped">
                    <thead >
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Kelurahan</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>No. HP</th>
                            <th>Tabungan</th>
                            <?php
                                if(isset($_SESSION['nik'])){        
                                $nik = $_SESSION['nik'];
                                $user = mysqli_query($koneksi , "SELECT * FROM biodata WHERE nik = '$nik'");
                                $hasil = mysqli_fetch_array($user);
                                    if($hasil['level'] == "admin") { 
                                    echo"                                
                                    <th>Kelola</th>
                                        ";
                                    };
                                }                
                            ?>
                            
                        </tr>
                        
                    </thead>
                    <tbody>

                        <?php
                        $tampil = mysqli_query($koneksi , "SELECT * FROM biodata");
                        
                        while( $row = mysqli_fetch_assoc ($tampil) ) :
                            echo "<tr>";
                            echo "<td>".$row['nik']."</td>";
                            echo "<td>".$row['nama']."</td>";
                            echo "<td>".$row['tempat'].", ".$row['tanggal_lahir']."</td>";
                            echo "<td>".$row['kelurahan']."</td>";
                            echo "<td>".$row['alamat']."</td>";
                            echo "<td>".$row['jenis_kelamin']."</td>";
                            echo "<td>".$row['agama']."</td>";
                            echo "<td>".$row['no_tlp']."</td>";
                            echo "<td style='text-align:right'>".$row['poin']."</td>";
                            if(isset($_SESSION['nik'])){        
                                $nik = $_SESSION['nik'];
                                $user = mysqli_query($koneksi , "SELECT * FROM biodata WHERE nik = '$nik'");
                                $hasil = mysqli_fetch_array($user);
                                    if($hasil['level'] == "admin") {
                                        $rowid = $row['nik'] ; 
                                        echo "
                                        <td><a href='ubah_dataUser.php?id=$rowid'><i class='ti-pencil-alt'> Edit </i></a>"." atau "."
                                        <a href='del_user.php?id=$rowid'><i class='ti-trash'> Hapus </i></a></td>";
                                    };
                            }                            
                            echo "</tr>";
                        endwhile;
                    
                        ?>

                    </tbody>
                </table>
                    
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
   