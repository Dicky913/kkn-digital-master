<?php 
session_start();
require_once("../util/koneksi.php");

$nik = $_POST['nik'];
$pass = $_POST['password'];

$cekuser = mysqli_query($koneksi , "SELECT * FROM biodata WHERE nik = '$nik' OR nama = '$nik'");
$jumlah = mysqli_num_rows($cekuser);
$hasil = mysqli_fetch_array($cekuser);

if($jumlah == 0) {
    echo "<script>alert('Nama atau Nik Belum Terdaftar!')</script>";
    echo "<meta http-equiv='refresh' content='1 url=../masuk.php'>";
} else {
    if(password_verify($pass, $hasil['password'])){
        if($hasil['level']=="admin"){
            $_SESSION['nik'] = $hasil['nik'];
            $_SESSION['password'] = $hasil['password'];
            header("location:../index.php");
        }else{
            $_SESSION['nik'] = $hasil['nik'];
            $_SESSION['password'] = $hasil['password'];
            header("location:../index.php");
        }    
    }else{
        echo "<script>alert('Password Salah')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../masuk.php'>";
    }
}
?>