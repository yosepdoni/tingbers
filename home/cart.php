<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

<br>
<br>
<?php 
    include '../koneksi.php';
    $conn=mysqli_query($conn,"SELECT * FROM orderantampung WhERE id_user='$_SESSION[id_user]'");
    while($h=mysqli_fetch_array($conn))
    $a= $h['id_order'];
    if (empty($a)) {
     echo "<br><center><h4>Maaf Tidak Ada Produk Yang Anda Tambahkan!</h4></center>";
     }else{
    ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
        <h3 class="mb-1 text-center">Shopping Cart</h3>
        <p class="mb-2 text-center">
            <i class="text-info font-weight-bold">items in your cart</i> </p>
        <table class="table table-condensed table-responsive">
            <thead>
                <tr>
                    <th>Product</th>
                    <th style="width:30%">Price</th>
                    <th style="width:30%" class="text-center">Total</th>
                    <th style="width:7%">Opsi</th>
                </tr>
            </thead>

            <?php   
                }
                ?>
            
            <tbody>
                <?php
                require '../koneksi.php';

                $grand_total = 0;
                $allItems = '';
                $items = [];

                $sql = "SELECT CONCAT( nm_brg,', ' '(',kondisi,'), ','(',kategori,'), ','(',jumlah,').') AS ItemQty, total FROM orderantampung WhERE id_user='$_SESSION[id_user]'";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
                  $grand_total += $row['total'];
                  $items[] = $row['ItemQty'];
                }
                $allItems = implode(', ', $items);
            ?>

                <!-- form untuk mengirim ke history -->
            <form method="POST" action="">
                <!-- <h1><?=$allItems?></h1>
                <h1><?=$grand_total?></h1> -->
                <input type="hidden" name="products"  value="<?=$allItems?>"/>
                <input type="hidden" name="totalbayar"  value="<?=$grand_total?>"/> <br>
                <input type="hidden" name="id_user" value="<?=$session_id_user;?>"/>

                <?php 
                    include ('../koneksi.php');
                    $conn=mysqli_query($conn," SELECT * FROM orderantampung WhERE id_user='$_SESSION[id_user]'");
                    while($h=mysqli_fetch_array($conn)){
                   ?>     
                <tr>                   
                    <input type="hidden" name="id_order"  value="<?=$h['id_order']?>"/>
                    <input type="hidden" name="id_brg"  value="<?=$h['id_brg']?>"/>
                    <input type="hidden" name="img"  value="<?=$h['img']?>"/>
                    <input type="hidden" name="nm_brg"  value="<?=$h['nm_brg']?>"/>
                    <input type="hidden" name="kondisi"  value="<?=$h['kondisi']?>"/>
                    <input type="hidden" name="kategori"  value="<?=$h['kategori']?>"/>
                    <input type="hidden" name="harga"  value="<?=$h['harga']?>"/>
                    <input type="hidden" name="jumlah"  value="<?=$h['jumlah']?>"/>
                    <input type="hidden" name="total"  value="<?=$h['total']?>"/>
                    <input type="hidden" name="id_user" value="<?=$session_id_user;?>"/>
                    
                     

                    <td data-th="Product">
                        <div class="row">
                            <div class="col-md-3 text-left">
                                <img src="../assets/image/<?=$h['img'];?>" alt="img" width="50" height="50" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                            </div>
                            <div class="col-md-9 text-left mt-sm-1">
                                <h><?=$h['nm_brg'];?></h>
                                <p><?=$h['kondisi'];?> &amp; <?=$h['kategori'];?></p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price" ><?="Rp".number_format($h['harga'],0,",","."); ?>(<?=$h['jumlah'];?>)</td>
                    <td data-th="Total" class="text-center">
                    <p><?="Rp".number_format($total[] =$h['total'],0,",",".");?>
                    </td>
                    <td>
                        <div class="text">
                        
                        <a onclick="return confirm('apakah anda yakin? ');" href="index.php?p=dlcrt&id_order=<?php echo $h['id_order']?>"><button name="hapus" class="btn btn-white border-secondary bg-white btn-md mb-1">
                           <i class="fas fa-trash text-danger"></i></a> 
                        </button>
                        </div>
                    </td>
                </tr>
            </tbody>
            <?php
      }
      $sum = array_sum($total);
      ?>
        </table>

        <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="cod" name="pay" value="Cash On Delivery" required>
                          <label for="cod" class="custom-control-label">Cash On Delivery</label>
                        </div>  
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="pay" name="pay" value="Transfer Dana" required>
                          <label for="tf" class="custom-control-label">Transfer Dana</label>
                        </div>               
                      </div>
        <div class="float-right text-right">
            
            <h4>Subtotal: <?php echo "Rp".number_format($sum,0,",",".");?></h4>
        </div>
    </div>
</div>
<button name="checkout" class="btn btn-info float-right" ><i class="fas fa-money-check-alt mr-2"></i> Checkout</button> 
<br> 
<br>
</form>

<?php
include('../koneksi.php');
if (isset($_POST['checkout'])){

	$id_order=$_POST['id_order'] ;
	$id_brg=$_POST['id_brg'];
	$img=$_POST['img'];
    $nm_brg=$_POST['nm_brg'];
    $nm_brg=$_POST['kondisi'];
	$nm_brg=$_POST['kategori'];
	$harga=$_POST['harga'];
	$jumlah=$_POST['jumlah'];
    $total=$_POST['total'];
	$id_user=$_POST['id_user'];
	$conn=mysqli_query($conn,"INSERT INTO history VALUES
	(null,'$id_brg','$img', '$nm_brg', '$harga', '$jumlah', '$total', '$id_user')");
    }
?>
<?php
include('../koneksi.php');
if (isset($_POST['checkout'])){ 
    $id_order=$_POST['id_order'] ;
    $products=$_POST['products'];
    $grand_total=$_POST['totalbayar'];
    $pay=$_POST['pay'];
    $id_user=$_POST['id_user'];
    $conn=mysqli_query($conn,"INSERT INTO orders VALUES
    (null,'$products','$grand_total','$pay', '$id_user')");    
?>
<?php
    include '../koneksi.php';
    if(isset($_POST['checkout'])){
    // HAPUS SELURUH ISI DALAM TABLE TRANSAKSIVIEW
    $sql=mysqli_query($conn, "DELETE FROM orderantampung");
       if($conn){
        echo"<script>alert('Trasaksi Berhasil!');</script>";
        echo "<script>window.location.href='index.php?p=cart'</script>";
        }else{
        echo"<script>alert('Trasaksi Gagal!');</script>";
        }
    }
                
    }
?>
