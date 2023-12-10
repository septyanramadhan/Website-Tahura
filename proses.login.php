<?php
session_start();
require('koneksi.php');
$user=$_POST['user'];
$pass=$_POST['password'];
$password=md5($pass);
//pengecekan data user berdasarkan username dan password
$cek=$pdox->prepare("select * from user where username='$user' and password='$password'");
$cek->execute();
if ($cek->rowCount() > 0) {
$data_cek=$cek->fetch();
$nis=$data_cek['nis'];  //data nis yang dibaca dari tabel user
//pengecekan dan pengambilan data siswa berdasarkan nis yg terbaca
$cek_bio=$pdox->prepare("select * from data_siswa where nis='$nis'");
$cek_bio->execute();
$data_bio=$cek_bio->fetch();
$nama=$data_bio['nama_siswa'];
$poto=$data_bio['poto'];
//pembuatan session
$_SESSION['pass']=$password;
$_SESSION['user']=$user;
$_SESSION['nama']=$nama;
$_SESSION['poto']=$poto;
echo "login berhasil <br> NIS = $nis<br>";
echo "Nama Saya : $nama<br>";
echo "<img src='tempat_poto/$poto' width='200px'><br>";

echo "<a href='logout.php'>Keluar</a>"; 
} else {echo "GAGAL LOGIN";
}
?>