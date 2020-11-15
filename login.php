<!DOCTYPE html>
<html>
<head>
	<title>Login usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <center>
    <form method="post">
    	<h1>Login</h1>
	<?php
	session_start();
	$email = $_SESSION['email'];

	?>
    	<input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" class="form-input" required/>
	<input type="password" name="pass" placeholder="Password" class="form-input" required/>
    	<input type="submit" name="register" value="Entrar" class="form-btn">
	<a href="index.php"><input type="button" value="Regresar" class="form-btn" ></a>
 
    </form>
        <?php 
        include("login_entrar.php");
        ?>

</center>
</body>
</html>
