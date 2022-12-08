<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?p=dashboard">Home</a></li>
              <li class="breadcrumb-item active">Detail Order</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail Order</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="box box-info">
            <!-- /.box-header -->

           <div class="box-body">                    
       <?php
                  
                  include "../koneksi.php";
                  $d =$_GET['id_order'];
                  $data = mysqli_query($conn, "select * from orders where id_order='$d'");
                  while($da = mysqli_fetch_array($data)){
                ?>
        <form class="form-horizontal" method="POST" action="actionaddorder.php">
            <div class="box-body">  
                <?php 
                    include ('../koneksi.php');
                    $conn=mysqli_query($conn," SELECT * FROM users WhERE id_user='$da[id_user]'");
                    while($h=mysqli_fetch_array($conn)){
                   ?> 
                   <input type="hidden" name="id_order" value="<?=$da['id_order']; ?>">
                   <input type="hidden" name="product" value="<?=$da['products']; ?>">
                   <input type="hidden" name="total" value="<?=$da['total']; ?>">
                   <input type="hidden" name="pay" value="<?=$da['pay']; ?>">
                   <input type="hidden" name="id_user" value="<?=$da['id_user']; ?>">
                   <table class="table">
                  <tbody>
                    <tr>
                      <th scope="row">Items</th>
                      <td>:</td>
                      <td> <?=$da['products']; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Total</th>
                      <td>:</td>
                      <td> <?="Rp ".number_format($da['total']); ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Nama</th>
                      <td>:</td>
                      <td> <?=$h['nama_user']; ?></td>                      
                    </tr>
                    <tr>
                      <th scope="row">Email</th>
                      <td>:</td>
                      <td> <?=$h['username']; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Telp</th>
                      <td>:</td>
                      <td> <?=$h['telp']; ?></td>
                    </tr><tr>
                      <th scope="row">Alamat</th>
                      <td>:</td>
                      <td> <?=$h['alamat']; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Pembayaran</th>
                      <td>:</td>
                      <td> <?=$da['pay']; ?></td>                      
                    </tr>
                  </tbody>
                </table>
                 
            <!-- /.box-body -->
            
            <div class="box-footer">
            <button type="submit" class="btn btn-info float-right"><i class="fa fa-save"> Selesai </i></button> 
            <a class="float-right"> &nbsp; &nbsp; </a> 
            <button type="submit" class="btn btn-success float-right"><i class="fa fa-print"> Print</i></button>
            </div>
            <!-- /.box-footer -->
        </form>
        <?php 
  }}
  ?>
            </div>
            <!-- /.card -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
