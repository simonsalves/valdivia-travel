<?php 
include("mysql.php");
$db = new MySQL();

$nombre = trim($_POST['nombre']);
$apellido_p = "none";
$apellido_m = "none";
$email = trim($_POST['id']);
$passwd = trim($_POST['passwd']);

$register = date('Y:m:d H:i:s');
$pw = md5($passwd);



	$consulta = $db->consulta("INSERT INTO cliente_turismo (id_cliente_turismo, nombre, passwd) VALUES ('$email','$nombre','$passwd')");
	$consulta = $db->consulta("INSERT INTO wp_users (ID, user_login, user_pass, user_nicename, user_email, user_url, user_registered, user_activation_key, user_status, display_name) VALUES (NULL,'$email','$pw','$nombre','$apellido_p','$apellido_m', '$register', '$register', 4, '$nombre')");
	echo "Se registro correctamente";


?>

