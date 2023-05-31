<?php
include('../koneksi.php');
if (isset($_POST['add'])){
	$id_product=$_POST['id_product'];
	// $img=$_POST['img'];
	$nm_product=$_POST['nm_product'];
	// $kondisi=$_POST['kondisi'];
	$category=$_POST['category'];
	$price=$_POST['price'];
	$qty=$_POST['qty'];
	$total=$_POST['total'];
	$id_user=$_POST['id_user'];
	$conn=mysqli_query($conn,"INSERT INTO cart VALUES
	(null,'$id_user', '$id_product', '$nm_product', '$category', '$qty', '$price', '$total' )");
	if($conn){
		echo"<script>alert('DATA BERHASIL DISIMPAN!');</script>";
        header("Location:index.php?p=cart");
	}else{
		echo"<script>alert('DATA GAGAL DISIMPAN!');</script>";
	}
}
?>