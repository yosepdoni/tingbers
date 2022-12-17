<html>
<?php 
	session_start();
	if (!empty($_SESSION['email'])){
	$session_id_usr=$_SESSION['id_usr'];
	$session_email=$_SESSION['email'];
	$session_nama=$_SESSION['nama'];
	$session_telp=$_SESSION['telp'];
	$session_provinsi=$_SESSION['provinsi'];
	$session_kota=$_SESSION['kota'];
	$session_kecamatan=$_SESSION['kecamatan'];
	$session_kelurahan=$_SESSION['kelurahan'];
	$session_alamat=$_SESSION['alamat'];	
	$session_level=$_SESSION['level'];
	
	}else{
		header ("Location:route.php?p=login");
	}
?>
<html>