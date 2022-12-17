<?php
session_start();
include 'koneksi.php';
$email = $_POST['email'];
$password = md5($_POST['password']);
$login = mysqli_query($conn,"SELECT * FROM users WHERE email='$email' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
 $data = mysqli_fetch_assoc($login);
 if($data['level']=="user"){

  $_SESSION['id_usr'] = $data['id_usr'];
  $_SESSION['email'] = $email;
  $_SESSION['nama']= $data['nama'];
  $_SESSION['telp']= $data['telp'];
  $_SESSION['provinsi']= $data['provinsi'];
  $_SESSION['kota']= $data['kota'];
  $_SESSION['kecamatan']= $data['kecamatan'];
  $_SESSION['kelurahan']= $data['kelurahan'];
  $_SESSION['alamat']= $data['alamat'];
  $_SESSION['level'] = "user";
  echo "<script>window.location.href='home/index.php?p=produk'</script>";
 }else if($data['level']=="admin"){

  $_SESSION['id_usr'] = $data['id_usr'];
  $_SESSION['email'] = $email;
  $_SESSION['nama']= $data['nama'];
  $_SESSION['telp']= $data['telp'];
  $_SESSION['provinsi']= $data['provinsi'];
  $_SESSION['kota']= $data['kota'];
  $_SESSION['kecamatan']= $data['kecamatan'];
  $_SESSION['kelurahan']= $data['kelurahan'];
  $_SESSION['alamat']= $data['alamat'];
  $_SESSION['level'] = "admin";
  echo "<script>window.location.href='admin/index.php?p=dashboard'</script>";
}else{
  echo "<script>alert('Maaf email tidak terdaftar');window.history.go(-1);</script>";
 }
}

?>