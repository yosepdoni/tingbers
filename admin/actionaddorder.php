<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_order = $_POST['id_order'];
$product = $_POST['product'];
$total = $_POST['total'];
$id_user = $_POST['id_user'];

 
// menginput data ke database
mysqli_query($conn,"insert into ordershistory values('','$id_order','$product','$total','$id_user')");
?>  
<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$d =$_POST['id_order'];

// menghapus data dari database
mysqli_query($conn,"DELETE FROM orders where id_order='$d'");

echo "<script>window.location.href='index.php?p=neworders'</script>";
 
?>