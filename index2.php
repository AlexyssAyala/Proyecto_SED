<!DOCTYPE html> <html> <head>
        <title>Registrar usuario</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
        <h1>¡Suscribete!</h1>
	<input type="nombre" name"name" placeholder="nombre">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>

