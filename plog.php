<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

 $data = mysqli_fetch_assoc($login);

 // cek jika user login sebagai admin
 if($data['level']=="user"){

  // buat session login dan username
  $_SESSION['id_user'] = $data['id_user'];
  $_SESSION['username'] = $username;
  $_SESSION['nama_user']= $data['nama_user'];
  $_SESSION['telp']= $data['telp'];
  $_SESSION['provinsi']= $data['provinsi'];
  $_SESSION['kabupaten']= $data['kabupaten'];
  $_SESSION['alamat']= $data['alamat'];
  $_SESSION['kode_pos']= $data['kode_pos'];
  $_SESSION['lokasi']= $data['lokasi'];
  $_SESSION['level'] = "user";
  // alihkan ke halaman dashboard admin
  echo "<script>window.location.href='home/index.php?p=produk'</script>";

 // cek jika user login sebagai pegawai
 }else if($data['level']=="admin"){
  // buat session login dan username
  $_SESSION['id_user'] = $data['id_user'];
  $_SESSION['username'] = $username;
  $_SESSION['nama_user']= $data['nama_user'];
  $_SESSION['telp']= $data['telp'];
  $_SESSION['provinsi']= $data['provinsi'];
  $_SESSION['kabupaten']= $data['kabupaten'];
  $_SESSION['alamat']= $data['alamat'];
  $_SESSION['kode_pos']= $data['kode_pos'];
  $_SESSION['lokasi']= $data['lokasi'];
  $_SESSION['level'] = "admin";
  // alihkan ke halaman dashboard pegawai
  echo "<script>window.location.href='admin/index.php?p=dashboard'</script>";

 }else{

  // alihkan ke halaman login kembali
  echo "<script>alert('username belum terdaftar');window.history.go(-1);</script>";
 } 
}else{
    echo "<script>alert('username belum terdaftar');window.history.go(-1);</script>";
}

?>