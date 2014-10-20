<?php 
include("mysql.php");
$db = new MySQL();
	
$usuario = $_POST['usuario'];
$contraseña = $_POST['passwd'];
$consulta = $db -> consulta("SELECT * FROM $clase");

if($db->num_rows($consulta)>0){
	while($resultados = $db->fetch_array($consulta)){
		echo $resultados['direccion']; 
	}
}
?>
