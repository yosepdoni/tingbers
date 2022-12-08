<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$nm_brg = $_POST['nm_brg'];
$kondisi = $_POST['kondisi'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$img = $_POST['img'];

 
// menginput data ke database
mysqli_query($conn,"insert into produk values('','$nm_brg','$kondisi','$kategori','$deskripsi','$harga','$img')");
 
// mengalihkan halaman kembali ke index.php
echo "<script>window.location.href='index.php?p=addproduct'</script>";
 
?>  