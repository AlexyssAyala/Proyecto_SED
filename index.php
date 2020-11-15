<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
    <form method="post">
    	<h1>Registrate</h1>
	

    	<input type="text" name="name" placeholder="Nombre completo" class="form-input" required/>
    	<input type="email" name="email" placeholder="Email" class="form-input" required/>  
	<input type="password" name="pass" placeholder="Password" class="form-input" />
    	<input class="form-btn"  type="submit" name="register" value="Registrarse">
	</form>
        <?php 
        include("registrar.php");
        ?>
	<a href="login.php"><input type="button" value="Entrar" class="form-btn" ></a>
</center>
</body>
</html>
