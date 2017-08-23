<!-- making connection to mysql -->
<?php
require_once("../inc/connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | NIIT</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/login-style.css?<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<body>

<div class="bg"></div>
<div class="container">
<div class="login-form">

	<div class="head" ><p><i class="fa fa-group" ></i> Student Login</p></div>
	<form action="welcome.php"  method="post"><p>
		<input type="text" name="s_id" id="s_name" placeholder="&#xf2be; Student ID" required>
		</p>
		<p>
			<input type="password" name="pass" id="pass" placeholder="&#xf023; Password" autocomplete="new-password" required>
		</p>
		<p><input type="submit" name="submit" value="Login"></p>
		
	</form>
	<p><button id="forget-btn">Forget Password?</button></p>
	
	</div>
	<div class="forget-password">

		<div class="head" >
		<span>&#10006;</span>
		<p>Forget Password</p>
		</div>
		<div class="move">
		<p>Enter your email we'll send you a new password.</p>
		<form><p><input type="text" name="email" placeholder="&#xf0e0; Enter your email" required></p>
		<p><input type="submit" name="send" value="Send"></p>
		</form>
	</div>
	</div>
	</div>

	<div class="bottom"></div>
	<script type="text/javascript" src="/website/js/jquery.js"></script>
<script type="text/javascript" src="/website/js/login-script.js"></script>
</body>
</html>