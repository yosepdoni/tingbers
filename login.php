<br>
<br>

<div class="container">
	<center><img src="https://img.icons8.com/ios-filled/2x/user-male-circle.png" alt=""></center>
	<h4 class="text-center">Login Tingbers</h4>
		<form action="plog.php" method="POST">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input type="password" name="password" class="form-control" id="pwd">
		</div>
		<div class="mb-3 form-check">
			<input type="checkbox" class="form-check-input" id="chk">
			<label class="form-check-label" id="lbl" for="chk">Show Password</label>
		</div>
    <div class="mb-3">
    <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in-alt"> Login</i></button>
    </div>
    <div class="mb-3">
      <a href="" onclick="new.window.open('Lupa password')" style="text-decoration:none; color:blue;"><i>Forget your password?</i></a><br>
      Don't have an account?<a href="route.php?p=register" style="text-decoration:none; color:blue;"> <i>Sign Up</i></a>
    </div>
		</form>
	</div>
  
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