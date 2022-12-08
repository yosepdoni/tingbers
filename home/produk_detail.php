    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Lorem</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script src="https://releases.jquery.com/git/jquery-3.x-git.min.js"></script>
    <link href="../css/selector.css" rel="stylesheet">
    <script src="../css/selector.js"></script>
<?php
    if(isset($_GET['id_brg'])){
        $id =$_GET['id_brg'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "../koneksi.php";
    include "../seslog.php";
    include "header.php";

    $query    =mysqli_query($conn, "SELECT * FROM produk WHERE id_brg='$id'");
    $result    =mysqli_fetch_array($query);   
?>
 <span hidden><?php echo $session_username;?> </span>

<br>
<br>
<br>

<div class="card">
  <div class="row g-0">
    <div class="col-md-3">
      <img src="../assets/image/<?=$result['img']?>" class="img-fluid rounded-start" onclick="viewimg()" alt="img" style="width: 300px;height:280px; display: block; margin-left: auto; margin-right: auto; margin-top: 1rem; margin-bottom:3rem;">
    </div>
 
    <div class="col-md-9 mt-3">
    <div class="container">
    <form name="form" method="POST" action="savetocart.php">
          <input type="hidden" name="id_brg"  value="<?=$result['id_brg']?>"></input>
          <input type="hidden" name="img"  value="<?=$result['img']?>"></input>
          <input type="hidden" name="nm_brg"  value="<?=$result['nm_brg']?>"></input>
          <input type="hidden" name="kondisi"  value="<?=$result['kondisi']?>"></input>
          <input type="hidden" name="kategori"  value="<?=$result['kategori']?>"></input>
          <input type="hidden" name="harga"  value="<?=$result['harga']?>"></input>
          <input type="hidden" name="id_user" value="<?=$session_id_user;?>"></input>
          <div class="d-flex justify-content-between "><h5 class="card-title"> <?=$result['nm_brg']?></h5><h5> <?="Rp".number_format($result['harga']); ?></h5></div>
    <div class="scrollspy-example " data-bs-smooth-scroll="true">
      <div class="card-body">    
        Kondisi : <b> <?= $result['kondisi']?>  </b><br>
        Kategori: <b> <?= $result['kategori']?> </b><br>
        <p class="card-text"> Deskripsi : <br> <?= $result['deskripsi']?></p>   
      </div>
    </div>
    <br>
    <div class="d-flex justify-content-between">
    <div class="spin-input nowrap fx-row fx-fill " >
                        <div class="icon reactive">
                            <span class="ci ci-minus">-</span>
                        </div>
                        <div class="icon">
                            <span>0</span>
                            <input type="text" class="hidden" value="0" name="jumlah" >
                        </div>
                        <div class="icon reactive">
                            <span class="ci ci-plus">+</span>
                        </div>
                    </div>
                    <input name="total" hidden></input>
          <button  onclick="kali()" name="add" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Add Cart</button>  </div>
  </div>
  </div>
  </form>
  </div>

</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<br>
<?php
include "../footer.php";
?>

<style>
  /* .scrollspy-example{
    down:100px;
  } */
</style>

<script>
  function viewimg(){
Swal.fire({
  imageUrl: '../assets/image/<?=$result['img']?>',
  // imageHeight: 350,
  imageWidth: 350,
  imageAlt: 'img'
})};
function kali() {
    a=eval(form.harga.value);
    b=eval(form.jumlah.value);
    c=a*b
    form.total.value = c;
    }
</script>
