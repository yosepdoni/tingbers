 
<br>
<br>


<div class="container">
	<center><img src="https://img.icons8.com/ios-filled/2x/user-male-circle.png" alt=""></center>
	<h4 class="text-center">Sign Up</h4>
		<form action="actionregister.php" method="POST">
		<div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="email" name="email" class="form-control" id="email" placeholder="Email" value="yosepdoni2905@gmail.com" required>
			<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		</div>
		<div class="mb-3">
			<label for="nama" class="form-label">Nama Lengkap</label>
			<input type="nama" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="Yosep Doni Saputra" required>
		</div>
		<div class="mb-3">
			<label for="pwd" class="form-label">Password</label>
			<input type="password" name="pwd" class="form-control" id="pwd" placeholder="Password" value="2905" required>
			<input type="hidden" name="level" class="form-control" id="level" value="user" required>
		</div>
        <!-- <div class="mb-3 form-check">
			<input type="checkbox" class="form-check-input" id="chk">
			<label class="form-check-label" id="lbl" for="chk">Show Password</label>
		</div> -->
		<div class="mb-3">
			<label for="telp" class="form-label">Telepon</label>
			<input type="text" name="telp" class="form-control" id="telp" placeholder="+62xxxxxxxxxxxx" value="+6285821807128"  required>
		</div>
		<div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <select class="form-select" aria-label="Default select example" name="provinsi" id="provinsi" value="Kalimantan Barat">
                <option selected>Pilih</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kab/Kota</label>
            <select class="form-select" aria-label="Default select example" name="kota" id="kota" value="Kabupaten Sintang">
                <option>Pilih</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
            <select class="form-select" aria-label="Default select example" name="kecamatan" id="kecamatan" value="Ketungau Hilir">
                <option>Pilih</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kelurahan</label>
            <select class="form-select" aria-label="Default select example" name="kelurahan" id="kelurahan" value="Ratu Damai">
                <option>Pilih</option>
            </select>
        </div>
		<div class="mb-3">
			<label for="alamat" class="form-label">Alamat</label>
			<textarea name="alamat" id="alamat" class="form-control" value="asiap" placeholder="Alamat Lengkap" style="width: 100%;height: 150px; padding: 12px 20px;resize: none;"></textarea>

		</div>
		
    <div class="mb-3">
    <button type="submit" class="btn btn-primary" name="register" autofocus><i class="fa fa-sign-in-alt"> Sign Up</i></button>
    </div>
    <div class="mb-3">
      <a href="" onclick="new.window.open('Lupa password')" style="text-decoration:none; color:blue;"><i>Forget your password?</i></a><br>
      Have an account?<a href="route.php?p=login" style="text-decoration:none; color:blue;"> <i>Login</i></a>
    </div>
		</form>
	</div>

<!-- <script language="javascript" type="text/javascript">
function limitText(limitField, limitNum) {
    if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
    }
}
</script> -->
<script type="text/javascript">
	var lihat = document.getElementById('pwd'),
	cek = document.getElementById('chk'),
	label =document.getElementById('lbl');

		cek.onclick =function (){
			if (cek.checked){
				lihat.setAttribute('type','text');
				label.lbl='Hide Password';
			}else{
				lihat.setAttribute('type','password');
				label.lbl='Show Password';
			}
		}
</script>
<script>
        fetch(`https://yosepdoni.github.io/api-wilayah-indonesia/api/provinces.json`)
            .then((response) => response.json())
            .then((provinces) => {
                var data = provinces;
                var tampung = `<option>Pilih</option>`;
                data.forEach((element) => {
                    tampung += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                });
                document.getElementById("provinsi").innerHTML = tampung;
            });
    </script>
    <script>
        const selectProvinsi = document.getElementById('provinsi');
        const selectKota = document.getElementById('kota');
        const selectKecamatan = document.getElementById('kecamatan');
        const selectKelurahan = document.getElementById('kelurahan');

        selectProvinsi.addEventListener('change', (e) => {
            var provinsi = e.target.options[e.target.selectedIndex].dataset.prov;
            fetch(`https://yosepdoni.github.io/api-wilayah-indonesia/api/regencies/${provinsi}.json`)
                .then((response) => response.json())
                .then((regencies) => {
                    var data = regencies;
                    var tampung = `<option>Pilih</option>`;
                    document.getElementById('kota').innerHTML = '<option>Pilih</option>';
                    document.getElementById('kecamatan').innerHTML = '<option>Pilih</option>';
                    document.getElementById('kelurahan').innerHTML = '<option>Pilih</option>';
                    data.forEach((element) => {
                        tampung += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                    });
                    document.getElementById("kota").innerHTML = tampung;
                });
        });

        selectKota.addEventListener('change', (e) => {
            var kota = e.target.options[e.target.selectedIndex].dataset.prov;
            fetch(`https://yosepdoni.github.io/api-wilayah-indonesia/api/districts/${kota}.json`)
                .then((response) => response.json())
                .then((districts) => {
                    var data = districts;
                    var tampung = `<option>Pilih</option>`;
                    document.getElementById('kecamatan').innerHTML = '<option>Pilih</option>';
                    document.getElementById('kelurahan').innerHTML = '<option>Pilih</option>';
                    data.forEach((element) => {
                        tampung += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                    });
                    document.getElementById("kecamatan").innerHTML = tampung;
                });
        });
        selectKecamatan.addEventListener('change', (e) => {
            var kecamatan = e.target.options[e.target.selectedIndex].dataset.prov;
            fetch(`https://yosepdoni.github.io/api-wilayah-indonesia/api/villages/${kecamatan}.json`)
                .then((response) => response.json())
                .then((villages) => {
                    var data = villages;
                    var tampung = `<option>Pilih</option>`;
                    document.getElementById('kelurahan').innerHTML = '<option>Pilih</option>';
                    data.forEach((element) => {
                        tampung += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                    });
                    document.getElementById("kelurahan").innerHTML = tampung;
                });
        });
    </script> 