<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?p=dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data Product</li>
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
                <h3 class="card-title">Product </h3><br>
                <a href="index.php?p=addproduct" class="btn btn-info float-right"><i class="fa fa-plus"> Add Product</i></a> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="box box-info">
            <!-- /.box-header -->
       
           <div class="box-body">
              <div class="table-responsive">
                
                <table id="example" class="table table-striped table-bordered">
                 <form action="" method="GET">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Kondisi</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
        
                  <tbody>
                  <?php
                  
                  include "../koneksi.php";
                  $data = mysqli_query($conn, "select * from produk");
                  $no =1;
                  while($d = mysqli_fetch_array($data)){
                ?>
                  <tr> 
                    <td><?php echo $no++;?></td>
                    <td><img src="../assets/image/<?=$d['img'];?>" alt="gambar" width="70" height="70"> </td>
                    <td><p class="card-text m-1" style="white-space: pre-wrap;"><?=substr($d['nm_brg'], 0,20,); ?> ..</p></td>
                    <td><?php echo $d['kondisi']; ?></td>
                    <td><?php echo $d['kategori']; ?></td>
                    <td><p class="card-text m-1" style="white-space: pre-wrap;"><?=substr($d['deskripsi'], 0,25,); ?> ..</p></td>
                    <td><?="Rp ".number_format($d['harga']); ?></td>
                    <td>
                     <a href="index.php?p=editproduct&id_brg=<?=$d['id_brg'];?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>&nbsp;
                     <a onclick="return confirm('apakah anda yakin? ');" href="index.php?p=deleteproduct&id_brg=<?=$d['id_brg'] ?>" class="btn btn-danger btn-sm"><i class= "fa fa-trash">&nbsp;</i></a>
                    </td>
                  </tr>
                    
                  <?php
                  
                    }
                  ?>
                  </tbody>
                </table>
                </form>
                <script>
                  $(document).ready(function() {
                     $('#example').DataTable();
} );

                </script>
              </div>
              <!-- /.card-body -->
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