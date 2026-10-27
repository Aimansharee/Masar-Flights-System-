<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | Masar Flights</title>
 	

<?php include('./header.php'); ?>
<?php include('./db_connect.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<style>
	body{
		width: 100%;
	    height: 100vh;
	    background: #0a0c0e;
	}
	main#main{
		width:100%;
		height: 100vh;
		background: #0a0c0e;
	}
	#login-right{
		position: absolute;
		right:0;
		width:42%;
		height: 100%;
		background: #0d1014;
		display: flex;
		align-items: center;
		border-left: 1px solid #232831;
	}
	#login-left{
		position: absolute;
		left:0;
		width:58%;
		height: 100%;
		display: flex;
		align-items: center;
		background: url(../assets/img/travel-cover.jpg);
	    background-repeat: no-repeat;
	    background-size: cover;
	    position: relative;
	}
	#login-right .card{
		margin: auto;
		z-index: 2;
		background: #16191f !important;
		border: 1px solid #2a313c !important;
		border-radius: 14px;
		box-shadow: 0 15px 40px rgba(0, 0, 0, 0.7);
		color: #ffffff;
	}
	.logo {
	    margin: auto;
	    font-size: 7rem;
	    background: #12151a;
	    padding: .5em 0.65em;
	    border-radius: 50%;
	    color: #76B900;
	    border: 3px solid #76B900;
	    box-shadow: 0 0 35px rgba(118, 185, 0, 0.45);
	    z-index: 10;
	}
	div#login-left::before {
	    content: "";
	    position: absolute;
	    top: 0;
	    left: 0;
	    width: 100%;
	    height: 100%;
	    background: linear-gradient(135deg, rgba(10, 12, 15, 0.88) 0%, rgba(118, 185, 0, 0.22) 100%);
	}
	div#login-right::before {
		display: none;
	}
</style>

</style>

<body>


  <main id="main" class=" bg-dark">
  		<div id="login-left">
  			<div class="logo">
  				<span class="fa fa-plane-departure"></span>
  			</div>
  		</div>
  		<div id="login-right">
  			<div class="card col-md-8">
  				<div class="card-body">
  					<form id="login-form" >
  						<div class="form-group">
  							<label for="username" class="control-label">Username</label>
  							<input type="text" id="username" name="username" class="form-control">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="password" class="form-control">
  						</div>
  						<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
  					</form>
  				</div>
  			</div>
  		</div>
   

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>
