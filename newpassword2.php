<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-danger">
<!--  <a class="navbar-brand" href="index.html"><img src="../img/GIPaid_logo.png" width="100px"  alt="GIPaid"></a>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" style="border: #FFFFFF 2px solid">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02" align="right">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" style="color: #FFFFFF" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #FFFFFF" href="about.php">About US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #FFFFFF" href="support.html">Support</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" style="color: #FFFFFF" href="login.php">Login</a>
      </li>
    </ul>
  </div>
</nav><br><br>
	
	
		<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../img/GIPaid_logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<p style="text-align: center; color: #FF0004"><em><strong>Password not matched</strong></em></p>
				<div class="d-flex justify-content-center form_container">
					<form action="resets.php" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_user" value="" placeholder="New Password">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password2" class="form-control input_pass" value="" placeholder="Retype New Password">
						</div>

						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
					<button type="submit" name="button" class="btn login_btn">Reset Password and Login</button>
				</div>
					</form>
				</div>
</div>
		</div>
	</div>
	<br><br>
<?php
	include_once("footer.php");
	?>
