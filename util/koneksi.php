<?php

    $host = "localhost";
    $username = "root";
    $pass = "";
    $db = "sampah";

    // $koneksi = mysqli_connect($host, $username, $pass, $db) or die ("Tidak dapat terhubung ke database");

    $koneksi = mysqli_connect("$host","$username","$pass") or die ("could not connect to mysql"); 

    mysqli_select_db($koneksi, "sampah") or die ("no database");   

?>