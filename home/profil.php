<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
<link href="../css/profil.css" rel="stylesheet">

  <body className='snippet-body'>
    <div class="container rounded bg-light mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://img.icons8.com/windows/2x/user.png"><span class="font-weight-bold"><?php echo $session_username;?></span><span class="text-black-50" style="text-transform: uppercase;"><?php echo $session_nama_user;?></span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Pengaturan Profil</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Nama</label><input type="text" class="form-control" placeholder="first name" value="<?php echo $session_nama_user;?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Telp/Wa</label><input type="text area" class="form-control" placeholder="enter phone number" value="<?php echo $session_telp;?>"></div>
                    </div> 
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Provinsi</label><input type="text" class="form-control" value="<?php echo $session_provinsi;?>" placeholder="Provinsi"></div>
                        <div class="col-md-6"><label class="labels">Kota</label><input type="text" class="form-control" value="<?php echo $session_kabupaten;?>" placeholder="Kota"></div>
                    </div>
                    <div class="row mt-3">  
                        <div class="col-md-12"><label class="labels">Alamat</label><textarea type="text" class="form-control" placeholder="masukan alamat"><?php echo $session_alamat;?></textarea></div>
                    </div>
                    <div class="mt-3"><button class="btn btn-primary"><i class="fa fa-save"> Save Profile</i></button></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>&nbsp;</span><a class="btn btn-light"  onclick="logout()"><span class="fa fa-sign-out-alt"> Logout</span></a></div><br>
                    <div class="col-md-12"><label class="labels">Kode POS</label><input type="text" class="form-control" placeholder="Kode POST" value="<?php echo $session_kode_pos;?>"></div> <br>
                    <div class="col-md-12"><label class="labels">Kota</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                </div>
            </div>
        </div>
    </div>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
myLink.addEventListener('click', function(e) {e.preventDefault();});
</script>
</body>

<script type="text/javascript">
    function logout(){
        Swal.fire({
  title: 'Apa kamu Yakin Ingin Logout?',
  text: "Kamu akan dialihkan ke halaman utama!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya, Logout!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = "../logout.php";
  }
})};
</script>
