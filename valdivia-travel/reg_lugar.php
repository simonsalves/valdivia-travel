<?php
require_once('funciones.php');
conectar('localhost', 'root', '', 'tesis_p1');

//Recibir
$descripcion = strip_tags($_POST['descripcion']);
$direccion = strip_tags($_POST['direccion']);
$telefono = strip_tags($_POST['telefono']);
$horario = strip_tags($_POST['horario']);
$url = strip_tags($_POST['url']);
$correo = strip_tags($_POST['correo']);
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];


$query = @mysql_query('SELECT * FROM lugar WHERE direccion="'.mysql_real_escape_string($direccion).'"');
if($existe = @mysql_fetch_object($query))
{
	echo 'La direccion '.$direccion.' ya existe.';	
}else{
	$query = "INSERT INTO lugar (descripcion, direccion, telefono, horario, url, correo, latitud, longitud) 
				values ('$descripcion', '$direccion', '$telefono', '$horario', '$url', '$correo', '$latitud', '$longitud')";
	$meter = @mysql_query($query);
	if($meter)
	{
		echo 'Usuario registrado con exito';
	}else{
		echo 'Hubo un error en el registro.';
		print $meter;
	}
}
?>