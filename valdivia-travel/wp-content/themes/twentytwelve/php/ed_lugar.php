<?php
include("mysql.php");
$db = new MySQL();

//Recibir
$id_lugar = $_POST['id'];
$descripcion = strip_tags($_POST['descripcion']);
$direccion = strip_tags($_POST['direccion']);
$telefono = strip_tags($_POST['telefono']);
$horario = strip_tags($_POST['horario']);
$url = strip_tags($_POST['url']);
$correo = strip_tags($_POST['correo']);
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];


	


	$query = "UPDATE lugar SET id_lugar='$id_lugar', descripcion='$descripcion', direccion='$direccion', telefono='$telefono', horario='$horario', latitud='$latitud', longitud='$longitud', url='$url', correo='$correo'  WHERE id_lugar = '$id_lugar'";
	$meter = @mysql_query($query);
	if($meter)
	{
		echo 'Lugar modificado con exito';
	}else{
		echo 'Ha ocurrido un error.';
		print $meter;
	}

?>