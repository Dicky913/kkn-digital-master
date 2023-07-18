<?php 
session_start();
require_once("../util/koneksi.php");

$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jalan = $_POST['jalan'];
$telp = $_POST['telp'];

$session_nik = $_SESSION['nik'];

$kelamin = $_POST['kelamin'];
$agama = $_POST['agama'];
$lingkungan = $_POST['lingkungan'];

mysqli_query($koneksi , "UPDATE biodata SET nama = '$nama', tempat = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', kelurahan = '$lingkungan', alamat = '$jalan', jenis_kelamin = '$kelamin', agama = '$agama', no_tlp = '$telp' WHERE nik = '$session_nik'");
echo "<meta http-equiv='refresh' content='1 url=../profil.php'>";
?>