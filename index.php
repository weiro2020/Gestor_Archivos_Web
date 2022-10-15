<?php ob_start() ?> 
<?php session_start();
if(ISSET($_SESSION['student'])){
	header('location:usuario.php');
}
?>
<!DOCTYPE html>
<html lang = "es">
	<head>
	<title>Gestor de archivos web</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type="text/css" href="sistema/css/bootstrap.css" />
		<link rel = "stylesheet" type="text/css" href="sistema/css/style.css" />
	</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#353738;">
		<div class="container-fluid">
		<label class="navbar-brand" id="title"> Gestor de archivos web /// usuario: gestor  contraseña: gestor </label>
		</div>
	</nav>
	<?php include 'login.php'?>
	<div id = "footer">
		<label class = "footer-title">&copy; Gestor de archivos web <?php echo date("Y", strtotime("+8 HOURS"))?></label>
	</div>
</body>
</html>
<?php ob_end_flush();?>