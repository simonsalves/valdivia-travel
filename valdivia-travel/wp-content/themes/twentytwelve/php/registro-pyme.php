<?php 
include("mysql.php");
$db = new MySQL();

$descripcion = trim($_POST['descripcion']);
$direccion = trim($_POST['direccion']);
$telefono = trim($_POST['telefono']);
$horario = trim($_POST['horario']);
$url = trim($_POST['url']);
$correo = trim($_POST['correo']);
$latitud = trim($_POST['latitud']);
$longitud = trim($_POST['longitud']);
$id_tipo = trim($_POST['id_tipo']);

$consulta = $db->consulta("SELECT * FROM pyme WHERE direccion = '$direccion'");
if($db->num_rows($consulta)>0){
	while($resultados = $db->fetch_array($consulta)){
		echo "La direccion ya existe";
	}
}else{
	$consulta = $db->consulta("INSERT INTO pyme VALUES (NULL, '$descripcion', '$telefono', '$horario', '$direccion', '$latitud', '$longitud', '$url', '$correo', '$id_tipo')");
	
}

?>

