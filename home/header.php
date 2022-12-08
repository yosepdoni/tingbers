<?php
 // menghubungkan dengan koneksi database
include '../koneksi.php';
// mengambil data barang
$jum = mysqli_query($conn,"SELECT * FROM orderantampung WhERE id_user='$_SESSION[id_user]'");
// menghitung data barang
$jum = mysqli_num_rows($jum);
?>
 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body class="p-3 m-0 border-0 bd-example">

    <!-- Example Code -->
    
    <nav class="navbar navbar-expand-lg navbar-dark" style="background:#100F0F;">
      <div class="container-fluid">
      <a class="navbar-brand" href="#">
<img src="https://img.icons8.com/color/2x/material-ui.png" alt="" width="40" height="30" class="d-inline-block">
Tingbers
</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link" style="color: #F1F1F1;" href="index.php?p=produk"><i class="fas fa-mobile-alt mr-2"></i>&nbsp;PRODUK</a>
            </li>          
          </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-item"><a class="nav-link" href="index.php?p=cart"> <i class="fas fa-shopping-cart"></i><span  class="badge badge-danger "><?php echo $jum; ?></span></a></li>
              <li class="nav-item"><a class="nav-link" style="color: #F1F1F1;" href="index.php?p=profil"> <?php echo $session_username;?></a></li>
            </ul>
        </div>
      </div>
    </nav>
    <!-- End Example Code -->
  </body>
</html>

<style>
  .navbar{
    list-style-type: none;
    overflow: hidden;
    top: 0;
    left:0;
    right:0;
    width: 100%;
    position: fixed;
    z-index: 1;
}

    .wa{
      list-style-type: none;
      overflow: hidden;
    width: 98%;
	display: flex;
	justify-content: right;
	text-transform: uppercase;
	position: fixed;
	bottom: 0;
	z-index:0;
}
.wa img{
  /* border-radius:10%; */
  width: 3rem;
}

</style>
