<?php
include 'koneksi.php';
?>
<header id="header">
<div class="main-navigation menu-2" id="mainmenu-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary main-nav navbar-togglable rounded-radius">

                <a class="navbar-brand d-lg-none d-block" href="index.php">
                <h5>
                <center><img src="images/edo/logo solah.png" width="50" height="50"></center>                
                S O L A H
                </h5>
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Links -->
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a href="index.php" class="nav-link js-scroll-trigger">
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="berita.php" class="nav-link js-scroll-trigger">
                                Berita
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="kegiatan.php" class="nav-link js-scroll-trigger">
                                Kegiatan
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="edukasi.php" class="nav-link js-scroll-trigger">
                                Edukasi Dan Informasi
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="tentang.php" class="nav-link js-scroll-trigger">
                                Tentang Kami
                            </a>
                        </li>

                        <?php 
                            if(isset($_SESSION['nik'])) {
                                $nik = $_SESSION['nik'];
                                $tampil = mysqli_query($koneksi , "SELECT * FROM biodata WHERE nik = '$nik'");
                                $hasil = mysqli_fetch_array($tampil);
                                    if($hasil['level'] == "admin") { 
                                        echo"                                
                                        <li class='nav-item '>
                                            <a href='data_user.php' class='nav-link js-scroll-trigger'>
                                            <i class='ti-user'></i> Pengguna
                                            </a>
                                        </li>
                                    ";
                                    }else{
                                        echo"                                
                                            <li class='nav-item '>
                                                <a href='profil.php' class='nav-link js-scroll-trigger'>
                                                <i class='ti-user'></i> Profil</a>
                                            </li>
                                        ";
                                    }
                                
                            }
                        ?>
                    </ul>
                </div> <!-- / .navbar-collapse -->
            </nav>
        </div> <!-- / .container -->
    </div>
</header>