<?php 
include("mysql.php");
$db = new MySQL();

$nombre = trim($_POST['nombre']);
$apellido_p = trim($_POST['apellido_p']);
$apellido_m = trim($_POST['apellido_m']);
$rut = trim($_POST['rut']);
$passwd = trim($_POST['passwd']);
$search  = array('.','-');
$id_cliente_pyme = str_replace($search, "", trim($_POST['rut']));
$register = date('Y:m:d H:i:s');
$pw = md5($passwd);
$consulta = $db->consulta("SELECT * FROM cliente_pyme WHERE rut = '$rut'");
if($db->num_rows($consulta)>0){
	while($resultados = $db->fetch_array($consulta)){
		echo "El rut ya existe";
	}
}else{


	$consulta = $db->consulta("INSERT INTO cliente_pyme (id_cliente_pyme, nombre, apellido_p, apellido_m, rut, passwd) VALUES ('$id_cliente_pyme','$nombre','$apellido_p','$apellido_m','$rut','$passwd')");
	$consulta = $db->consulta("INSERT INTO wp_users (ID, user_login, user_pass, user_nicename, user_email, user_url, user_registered, user_activation_key, user_status, display_name) VALUES (NULL,'$rut','$pw','$nombre','$apellido_p','$apellido_m', '$register', '$register', 3, '$nombre')");
	echo "Se registro correctamente";
}

?>

