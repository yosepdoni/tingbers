
<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$h = $_GET['id_order'];

// menghapus data dari database
mysqli_query($conn,"delete from orderantampung where id_order='$h'");

echo "<script>window.location.href='index.php?p=cart'</script>";
 
?>
