<?php 

$id_cliente_pyme = $_POST['id_cliente_pyme'];
$id_pyme = $_POST['id_pyme'];
$id_user = $_POST['id_user'];

include("mysql.php");
$db = new MySQL(); 
$consulta = $db -> consulta("INSERT INTO dueno_pyme(id_dueno_pyme, id_cliente_pyme, id_pyme, id_user) VALUES (NULL,'$id_cliente_pyme','$id_pyme','$id_user')"); 
echo "Enlaze realizado exitosamente";
/*if($db->num_rows($consulta)>0): 
	while($resultados = $db->fetch_array($consulta)): 
	endwhile; 
endif;*/





?>


