<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stock = $_POST['stock'];
 if (!empty($nama) || !empty($harga) || !empty($stock)) {
// menginput data ke database
mysqli_query($koneksi,"insert into barang values('','$nama','$harga','$stock')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>