<?php 
include "util/koneksi.php";


    $nik = $_GET['id'];

$hapus = mysqli_query($koneksi , "DELETE FROM biodata WHERE nik = '$nik'");


echo "<script type='text/javascript'>alert('Data Warga Berhasil Terhapus!');</script>";
echo "<meta http-equiv='refresh' content='1 url=data_user.php'>";

?> 