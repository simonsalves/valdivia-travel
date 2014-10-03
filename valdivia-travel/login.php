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
	echo 'El usuario y/o pass son incorrectos.';	
}
?>