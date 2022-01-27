<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stock = $_POST['stock'];
 
// update data ke database
mysqli_query($koneksi,"update barang set nama='$nama', harga='$harga', stock='$stock' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>