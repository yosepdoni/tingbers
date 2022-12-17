<br>
<br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<div class="col-6 col-md-2 ">
<input  type="search" placeholder="Search products... " name="carinama" id="carinama" autocomplete="off" class="form-control" >
</div>
  <cari>
      <center>
      <div class="row">
        <?php 
          include ('koneksi.php'); 
          $conn=mysqli_query($conn,"select * from product");
          while($h=mysqli_fetch_array($conn)){
          ?>
            <div class="col-6 col-md-2">
              <a href="produk_detail.php?id_product=<?=$h['id_product'];?>" class="btn btn-light">
                <div class="card-body">
                  <img src="assets/image/<?=$h['img']; ?>" class="card-img-top" alt="img" style="width: 180px;height:180px;">
                  <p class="card-text m-1" style="white-space: pre-wrap;"><?=substr($h['nm_product'], 0,17  ,); ?> ...</p>
                  <p><b><?="Rp".number_format($h['price']); ?></b></p>
                  <p style="color:orange" class="m-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  </p>
                  <p class="card-text" hidden><?=$h['category']; ?></p>
                </div>
              </a>
            </div>
            
          <?php
          }
          ?>
      </div>
      </center>
  </cari>
<br>

<script type="text/javascript">
      $(document).ready(function(){

      $('#carinama').on('keyup', function(){

        $('cari').load('ajax.php?nm_product=' + $('#carinama').val());

      });

      });
</script>
<style>
input{

	width:30%;
	margin: 1px;
	height: 10%;
	font-size: 12pt;
 	padding:5px 5px 5px 10px;
 	margin:1%;
 	border-radius: 10px;
}
</style>