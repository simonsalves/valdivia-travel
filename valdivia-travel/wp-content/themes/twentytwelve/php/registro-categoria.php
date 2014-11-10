<?php 
include("mysql.php");
$db = new MySQL();
$categoria = trim($_POST['categoria']);
$consulta = $db->consulta("INSERT INTO tipo_pyme(id_tipo, descripcion) VALUES (NULL,'$categoria')");
header('Location: http://localhost/valdivia-travel/?page_id=18');
?>

