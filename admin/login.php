<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Admin & Staff Login page</title>
 	
 <?php include('./header.php');
       include('./db_connect.php');

if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

$query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
		foreach ($query as $key => $value) {
			if(!is_numeric($key))
				$_SESSION['setting_'.$key] = $value;
		}
 ?>

</head>
<style>
	body{
		width: 100%;
	    height: 100%;
		 min-height: 100%;
		 overflow-x: hidden;
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: 100%;
		background:white;
		position: relative;
		padding: 5px;

		div.header{
			/* background: #dfa974; */
			background: #222736;
			height: 5.2rem;
			padding: 10px 3%;
			border-radius: .2rem;
			align-items: center;
			width: 100%;

			a{
				img{
				height: 1.5rem;
				position: relative;
				top: 15px;
			}
			}
		}
	}
	section.form-wrapper{
		width: 100%;
		justify-content: center;	
		display: flex;
	}
	#login-right{
		position: relative;
		right: 0;
		/* top: 34%; */
		width:50%;
		height: calc(100%);
		/* margin-top: 3rem; */
		background:white;
		/* display: flex; */
		align-items: center;

		h3{
			text-align: center;
			font-size: 16px;
			margin: 1.8rem 0;
			text-transform: uppercase;
			font-weight: 800;
		}
	}

	/**  smaller screen view */
	@media (max-width: 800px){
		#login-right{
		position: relative;
		right:0;
		top: 1rem;
		width: 80%;
		height: 100%;
		background:white;
		display: flex;
		flex-direction: column;
		align-items: center;
	}
	}

	#login-right .card{
		margin: auto
	}
	.logo {
	    margin: auto;
	    font-size: 8rem;
	    background: white;
	    padding: .5em 0.8em;
	    border-radius: 50% 50%;
	    color: #000000b3;
	}
	.btn-login{
		padding: 12px 1.5rem;
		font-size: 16px;
		border: none;
		margin-top: 40px;
	}
</style>

<body>


  <main id="main" class=" alert-info">
	<div class="header">
		<a href="../index.php?page=home">
	   	<img src="../img/footer-logo.png" alt="logo" loading="lazy">
		</a>
	</div>
	<section class="form-wrapper">
		<div id="login-right">
		<h3>Admin & Staff Login</h3>
		<div class="card col-md-8">
			<div class="card-body">
				<form id="login-form" >
					<div class="form-group">
						<label for="username" class="control-label">Username:</label>
						<input type="text" id="username" name="username" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="password" class="control-label">Password:</label>
						<input type="password" id="password" name="password" class="form-control" autocomplete="off">
					</div>
					<center><button class="btn btn-block btn-wave btn-primary btn-login">Login</button></center>
				</form>
			</div>
		</div>
	</div>
	</section>
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
				if(resp == 1 || resp == 2){
					location.href ='index.php?page=home';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>