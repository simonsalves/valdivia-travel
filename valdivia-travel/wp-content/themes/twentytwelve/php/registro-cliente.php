<?php 
include("mysql.php");
$db = new MySQL();

$nombre = trim($_POST['nombre']);
$apellido_p = "none";
$apellido_m = "none";
$rut = md5($nombre);
$passwd = trim($_POST['passwd']);
$search  = array('.','-');
$id_cliente_pyme = str_replace($search, "", $rut);
$register = date('Y:m:d H:i:s');
$pw = md5($passwd);



	$consulta = $db->consulta("INSERT INTO cliente_turismo (id_cliente_turismo, nombre, passwd) VALUES ('$rut','$nombre','$passwd')");
	$consulta = $db->consulta("INSERT INTO wp_users (ID, user_login, user_pass, user_nicename, user_email, user_url, user_registered, user_activation_key, user_status, display_name) VALUES (NULL,'$nombre','$pw','$nombre','$apellido_p','$apellido_m', '$register', '$register', 4, '$nombre')");
	echo "Se registro correctamente";


?>

