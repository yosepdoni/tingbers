<?php
include('../koneksi.php');
if (isset($_POST['add'])){
	$id_brg=$_POST['id_brg'];
	$img=$_POST['img'];
	$nm_brg=$_POST['nm_brg'];
	$kondisi=$_POST['kondisi'];
	$kategori=$_POST['kategori'];
	$harga=$_POST['harga'];
	$jumlah=$_POST['jumlah'];
	$total=$_POST['total'];
	$id_user=$_POST['id_user'];
	$conn=mysqli_query($conn,"INSERT INTO orderantampung VALUES
	(null,'$id_brg','$img', '$nm_brg', '$kondisi', '$kategori', '$harga', '$jumlah', '$total', '$id_user')");
	if($conn){
		echo"<script>alert('DATA BERHASIL DISIMPAN!');</script>";
        header("Location:index.php?p=cart");
	}else{
		echo"<script>alert('DATA GAGAL DISIMPAN!');</script>";
	}
}
?>