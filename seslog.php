<html>
<?php 
	session_start();
	if (!empty($_SESSION['username'])){
	$session_id_user=$_SESSION['id_user'];
	$session_username=$_SESSION['username'];
	$session_nama_user=$_SESSION['nama_user'];
	$session_telp=$_SESSION['telp'];
	$session_provinsi=$_SESSION['provinsi'];
	$session_kabupaten=$_SESSION['kabupaten'];
	$session_alamat=$_SESSION['alamat'];
	$session_kode_pos=$_SESSION['kode_pos'];
	$session_lokasi=$_SESSION['lokasi'];		
	$session_level=$_SESSION['level'];
	
	}else{
		header ("Location:route.php?p=login");
	}
?>
<html>