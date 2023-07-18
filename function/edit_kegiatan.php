<?php 
require_once("util/koneksi.php");

global $koneksi;

function EditKegiatan($data){

    global $koneksi;

    $judul = mysqli_real_escape_string($koneksi, $data['judul']);
    $isi = mysqli_real_escape_string($koneksi, $data['isi']);
    $gambarLama = $data['gambarLama'];
    $id = $data['id'];

    //cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4){
        $gambar=$gambarLama;
    } else {
        $gambar = upload();
    }

    //upload gambar
    if(!$gambar){
        return false;
    }
 $buat = mysqli_query($koneksi , "UPDATE kegiatan SET  judul = '$judul', isi = '$isi', foto = '$gambar' WHERE id = '$id'");

 return mysqli_affected_rows($koneksi);
}


function upload()
{
//fungsi ini akan mengebalikan 2 data, dijelaskan diatas
//jika return false; maka upload akan gagal

//data diambil dari variabel superglobal $_FILES lalu untuk ["gambar"] berasal name="gambar" pada form input gambar di file buat kegiatan.php, lalu untuk nama, size, error, tmp dll itu bisa dilihat di var_dump($_FILES);
$namaFile = $_FILES['gambar']['name'];
$ukuranFile = $_FILES['gambar']['size'];
$errorFile = $_FILES['gambar']['error'];
$tmpFile = $_FILES['gambar']['tmp_name'];

//cek apakah tidak ada gambar yang diuload
//error 4 dalam $_FILES adalah tidak ada gambar yg diupload
if ($errorFile === 4) {
    echo "
        <script>
            alert('Tidak ada Foto yang dipilih');
        </script>
    ";
    //jika gagal upload, maka fungsinya di stop dengan return false, supaya tidak bisa upload data tanpa gambar
    return false;
}

//cek apakah yang diupload adalah gambar-part 1
//buat variabel penampung ektensi gambar apa saja yang dibolehkan
$ekstensiGambarYangDibolehkan = ['jpg', 'jpeg', 'png', 'gif'];

//dikarenakan $_FILES untuk name menyantumkan nama file dan juga ekstensinya, maka harus dipisahkan supaya ekstensinya bisa diambil
//fungsi di php yg bernama explode => explode (delimiter, string), digunkan untuk memecahkan sebuah string menjadi array, memecahkannya menggunakan delimiter
//jika dalam string tersebut ketemu karakter tertentu, maka akan dipencah menjadi array
$ekstensiGambar =  explode('.', $namaFile);
//hasil menggunakan explode: ex= dicky.jpg maka hasilnya ['dicky', 'jpg']

//trtolower digunakan untuk membuat text menjadi kecil, mengantisipasi extensi JPG dll, dengan strtolower maka hasilnya menjadi jpg
//end digunakan untuk mengambil array paling akhir, mencengah adanya file seperti dicky.11.12.13.jpg, maka end array yang diambil adalah jpg karena fungsi end
$ekstensiGambar = strtolower(end($ekstensiGambar));

//cek apakah yang diuload adalah gambar-part2
//in_array mengembalikan nilai true
// in_array($needle, $haystack) adalah fungsi dalam php untuk mencari string dalam array, needle/jarum adalah gambar yang diupload yg telah di explode, lalu haystack/jerami extensi gambar yang telah ditentukan
// in_array jika diupload benar , jika untuk mencari ekstensi yang salah maka gunakan !in_array
if (!in_array($ekstensiGambar, $ekstensiGambarYangDibolehkan)) {
    echo "
        <script>
            alert('Yang anda upload Bukan Gambar');
        </script>
    ";
    return false;
}

//cek jika ukuran terlalu besar, in this case kasi 10mb an lah
if ($ukuranFile > 10000000) {
    echo "
        <script>
            alert('Ukuran Gambar terlalu besar');
        </script>
    ";
    return false;
}

//generate nama baru
//mencegah nama foto sama tapi foto berbeda
//akibat dari nama yang sama akan menimbulkan foto yg berbeda itu ditimpa menjadi foto baru, pdhl nama saja yg sama tetapi fotonya beda
$namaFileBaru = uniqid();
// var_dump($namaFileBaru); digunakan untuk mengecek kebenaran nilai random

//diatas baru nama random saja, belum dengan ektensinya
$namaFileBaru .= '.'; //untuk menyambukan titik stelah nama random itu
$namaFileBaru .= $ekstensiGambar; //digabungkan dengan salah satu ektensi diatas

//lolos pengecekan, gambar setiap diupload
// move_uploaded_file adalah fungsi untuk memidahkan file yang sudah diupload dari tmp ke tempat tujuan
$path = "images/" . $namaFileBaru;
move_uploaded_file($tmpFile, $path);

return $namaFileBaru;
}
?>