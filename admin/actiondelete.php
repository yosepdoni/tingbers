<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$d =$_GET['id_brg'];

// menghapus data dari database
mysqli_query($conn,"delete from produk where id_brg='$d'");

echo "<script>window.location.href='index.php?p=products'</script>";
 
?>