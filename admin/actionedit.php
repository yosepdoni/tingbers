  <?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id_brg = $_POST['id_brg'];
$nm_brg = $_POST['nm_brg'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];

// update data ke database
mysqli_query($conn,"update produk set nm_brg='$nm_brg', kategori='$kategori', deskripsi='$deskripsi', harga='$harga' where id_brg='$id_brg'");
echo "<script>window.location.href='index.php?p=products'</script>";
?>