<?php
    include "../util/koneksi.php";
    
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $confirm = $_POST['confirm'];
    $password = $_POST['password'];

    $password_hash = password_hash($password, PASSWORD_DEFAULT );

    $cekuser = mysqli_query($koneksi , "SELECT * FROM biodata WHERE nik = '$nik' ");
    $jumlah = mysqli_num_rows($cekuser);

    if (empty($nama)){
        echo "<script>alert('Nama belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../daftar.php'>";
    }else if (empty($nik)){
        echo "<script>alert('NIK belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../daftar.php'>";
    }else if (empty($password)){
        echo "<script>alert('Password belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../daftar.php'>";
    }else if ($jumlah > 0){
        echo "<script>alert('NIK sudah terpakai')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../daftar.php'>";
    }else if ($confirm != $password){
        echo "<script>alert('password tidak cocok dengan password konfirmasi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../daftar.php'>";
    }else{
        $daftar = mysqli_query($koneksi, "INSERT INTO biodata (nik, nama, password) VALUES ('$nik', '$nama', '$password_hash')");
        if ($daftar){
            echo "<script>alert('Berhasil Mendaftar')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../masuk.php'>";
        }else{
            echo "<script>alert('Gagal Mendaftar')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../daftar.php'>";
        }
    }
?>