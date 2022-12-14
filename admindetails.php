<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
    
<nav>
    <div class="navbar">
      <div class="logo"><a href="#"> P-Shop</a></div>
      <ul class="menu">
        <li><a href=index.php>Home</a></li>
        <li><a href=admindetails.php>Log in</Details></a></li>
        <li><a href=customerdetails.php>Registration</a></li>
        <li><a href=plantdetails.php>Product</a></li>
        <div class="cancel-btn">
          <i class="fas fa-times"></i>
        </div>
      </ul>
      <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </nav>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand">Log in</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Log in</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-6">
			<form method="POST" action=""> 
                <div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" required="required"/>
				</div>
                <div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" required="required"/>
				</div>
				<p><input type="checkbox" id="toggle"/> I agree with the terms and conditions.</p>
				<button class="btn btn-primary" id="register" name="register">Log in</button>
			</form>
		</div>
		<div class="col-md-6">
		<?php include 'register2.php'?>
		</div>
	</div>
<script>
var checkbox = document.getElementById("toggle");
var register = document.getElementById("register");
register.disabled = true;
checkbox.onchange = function(){
	register.disabled = !this.checked;
}
</script>	
</body>
</html>
			