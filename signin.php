<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
		height: 100vh;
	}
	.main-content{
		width: 100%;
		height: 100%;
		/* margin: 10px auto; */
		background-color: #fff;
		/* border: 2px solid #e6e6e6; */
		padding: 40px 50px;
		
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #187FAB;
	}
	#signin{
		width: 60%;
		border-radius: 30px;
	}
	.overlap-text{
		position: relative;
	}
	.overlap-text a{
		position: absolute;
		top: 8px;
		right: 10px;
		font-size: 14px;
		text-decoration: none;
		font-family: 'Overpass Mono', monospace;
		letter-spacing: -1px;

	}
	.row-cont {
		height: 100%;
		height: 100%;
		padding: 6vh 15vw;
		background: url('images/b1.jpg') no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	.col-container {
		height: 100%;
		padding: 0;
	}
	.left-col {
		overflow: hidden;
	}
	.left-col img{
		/* background: url('images/art.jpg') no-repeat fixed center; */
    	height: 100%;
		/* -webkit-filter: grayscale(100%);
		filter: grayscale(100%); */
	}
	.right-col {
    	/* border: solid 0.55px rgba(0, 0, 0, 0.1); */
	}
	.inner-container {
		width: 100%;
	}
</style>
<body>
<!-- <div class="row">
	<div class="col-sm-12">
		<div class="well">
			<center><h1 style="color: white;">Coding Cafe</h1></center>
		</div>
	</div>
</div> -->
<div class="row row-cont">
	<div class="col-sm-7 col-md-7 col-lg-7 col-container left-col">
		<!-- <img src="images/brush.jpg" /> -->
	</div>
	<div class="col-sm-5 offset-sm-7 col-md-5 offset-md-7 col-lg-5 offset-lg-7 col-container right-col">
		<div class="main-content">
			<div class="inner-container">
				<div class="header">
					<h3 style="text-align: center; margin: 0 0 60px;"><strong>Art</strong></h3>
				</div>
				<div class="l-part">
					<form action="" method="post">
						<input type="email" name="email" placeholder="Email" required="required" class="form-control input-md"><br>
						<div class="overlap-text">
							<input type="password" name="pass" placeholder="Password" required="required" class="form-control input-md"><br>
							<a style="text-decoration:none;float: right;color: #187FAB;" data-toggle="tooltip" title="Reset Password" href="forgot_password.php">Forgot?</a>
						</div>
						<a style="text-decoration: none;float: right;color: #187FAB;" data-toggle="tooltip" title="Create Account!" href="signup.php">Don't have an account?</a><br><br>

						<center><button id="signin" class="btn btn-info btn-lg" name="login">Login</button></center>
						<?php include("login.php"); ?>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>