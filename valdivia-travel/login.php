<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page2">
<div class="extra">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1><a href="index.html" id="logo">Around the World</a></h1>
				<div class="right">
					<div class="wrapper">
						<form id="search" action="" method="post">
							<div class="bg">
								<input type="submit" class="submit" value="">
								<input type="text" class="input">
							</div>
						</form>
					</div>
					<div class="wrapper">
						<nav>
							<ul id="top_nav">
								<li><a href="#">Registrarse</a></li>
								<li><a href="login.html">Intranet</a></li>
								<li><a href="#">Ayuda</a></li>
							</ul>
						</nav>
					</div>	
				</div>
			</div>
			<nav>
				<ul id="menu">
					<li><a href="index.html" class="nav1">Inicio</a></li>
					<li><a href="About.html" class="nav2">NOSOTROS </a></li>
					<li><a href="Tours.html" class="nav3"> MAPA</a></li>
					<li><a href="Destinations.html" class="nav4">destinos</a></li>
					<li class="end"><a href="Contacts.html" class="nav5">contacto</a></li>
				</ul>
			</nav>
			<div class="text">
				<?php
					session_start();
					require_once('funciones.php');
					conectar('localhost', 'root', '', 'tesis_p1');

					//Recibir
					$user = strip_tags($_POST['user']);
					$pass = strip_tags($_POST['pass']);

					$query = @mysql_query('SELECT * FROM user WHERE id_user="'.mysql_real_escape_string($user).'" AND passwd="'.mysql_real_escape_string($pass).'"');
					if($existe = @mysql_fetch_object($query))
					{
						$_SESSION['logged'] = 'yes';
						$_SESSION['user'] = $user;
						echo '<script>
						window.location="logeado.php"
						</script>';
					}else{
						echo 'El usuario y/o pass son incorrectos. <a href="login.html"> Volver</a>';	
					}
				?>
			
		</header>
<!-- / header -->
<!-- contenido -->

<!-- / contenido -->
	</div>
	<div class="block"></div>
</div>
<div class="body1">
	<div class="main">
<!-- footer -->
		<footer>
			<a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a><br>
			<a href="http://www.templates.com/product/3d-models/" target="_blank" rel="nofollow">www.templates.com</a>
		</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>