<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="FName" value="<?php echo $FName; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="LName" value="<?php echo $LName; ?>">
      </div>
      <div class="input-group">
  	  <label>Date of Birth</label>
  	  <input type="date" name="DoB" value="<?php echo $DoB; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="Email" value="<?php echo $Email; ?>">
      </div>
      <div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="text" name="PhoneNumber" value="<?php echo $PhoneNumber; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="Address" value="<?php echo $Address; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>