<?php 
include "util/koneksi.php";


    $id = $_GET['id'];

$hapus = mysqli_query($koneksi , "DELETE FROM berita WHERE id = '$id'");


echo "<script type='text/javascript'>alert('Data Berhasil Terhapus!');</script>";
echo "<meta http-equiv='refresh' content='1 url=berita.php'>";

?>