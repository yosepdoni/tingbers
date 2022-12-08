
<?php
    if(isset($_GET['id_brg'])){
        $id =$_GET['id_brg'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "koneksi.php";

    $query    =mysqli_query($conn, "SELECT * FROM produk WHERE id_brg='$id'");
    $result    =mysqli_fetch_array($query);   
?>
<br>
<br>
<br>
<div class="container">
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="assets/image/<?=$result['img']?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title"> <?=$result['nm_brg']?></h5>
         Kondisi : <b> <?= $result['kondisi']?>  </b><br>
         Kategori: <b> <?= $result['kategori']?> </b><br>
        <p class="card-text"> Deskripsi : <br> <?= $result['deskripsi']?></p>
        <b> <?="Rp".number_format($result['harga']); ?></b> <br>
        <p style="color:orange" class="m-1">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            </p>
        <a href="route.php?p=login" class="btn btn-primary">Price</a>
      </div>
    </div>
  </div>
</div>
</div>
<?php
include "route.php";
?>

