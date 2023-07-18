<?php
include 'koneksi.php';
?>
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top site-navigation main-nav navbar-togglable">
        <div class="container">
        
            <a class="navbar-brand" href="index.php">
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
                <ul class="navbar-nav ml-auto">
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

                    <?php 
                        if(!isset($_SESSION['nik'])) { 
                            echo"
                            <ul class='ml-lg-auto list-unstyled m-0 nav-btn'>
                                <li><a href='masuk.php' class='btn btn-trans-white btn-circled'>Masuk</a></li>
                            </ul>
                            ";
                        }else{
                            echo"
                            <ul class='ml-lg-auto list-unstyled m-0 nav-btn'>
                                <li><a href='function/logout.php' class='btn btn-trans-white btn-circled'>Keluar</a></li>
                            </ul>
                            ";
                        }
                        require_once("koneksi.php");
                    ?>
                
            </div> <!-- / .navbar-collapse -->
        </div> <!-- / .Container -->
    </nav>
</header>