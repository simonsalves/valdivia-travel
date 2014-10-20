<!--Esto sirve unicamente para conseguir todos los datos de una tabla con un where en especifico (Generalmente pongo id pero por falta de tiempo use descripcion)en este caso solo sirve para una cosa en especifico. Mas adelante se debe mejorar -->
<?php $filtro = $_GET['filtro'] ?>
<?php include("mysql.php"); ?>
<?php $db = new MySQL(); ?>
<?php $consulta = $db -> consulta("SELECT * FROM lugar where descripcion = '$filtro'"); ?>
<?php if($db->num_rows($consulta)>0): ?>
	Los campos con * son obligatorios. <br><br>
	<form action="wp-content/themes/twentytwelve/php/ed_lugar.php" method="POST">
	<?php while($resultados = $db->fetch_array($consulta)): ?>
		Descripcion*: <input type="text" placeholder="<?php echo $resultados['descripcion']; ?>" value="<?php echo $resultados['descripcion']; ?>" name="descripcion" />
		Direcccion*: <input type="text" placeholder="<?php echo $resultados['direccion']; ?>" value="<?php echo $resultados['direccion']; ?>" name="direccion" /><br><br>
		Telefono: <input type="text" placeholder="<?php echo $resultados['telefono']; ?>" value="<?php echo $resultados['telefono']; ?>" name="telefono" />
		Horario*: <input type="text" placeholder="<?php echo $resultados['horario']; ?>" value="<?php echo $resultados['horario']; ?>" name="horario" /><br><br>
		Pagina web: <input type="text" placeholder="<?php echo $resultados['url']; ?>" value="<?php echo $resultados['url']; ?>" name="url" />
		correo: <input type="mail" placeholder="<?php echo $resultados['correo']; ?>" value="<?php echo $resultados['correo']; ?>" name="correo" /><br><br>
		Latitud*: <input type="text" placeholder="<?php echo $resultados['latitud']; ?>" value="<?php echo $resultados['latitud']; ?>" name="latitud" />
		Longitud*: <input type="text" placeholder="<?php echo $resultados['longitud']; ?>" value="<?php echo $resultados['longitud']; ?>" name="longitud" /><br><br>
		<input type="hidden" name="id" value="<?php echo $resultados['id_lugar']; ?>"/>
	<?php endwhile; ?>
		<input type="submit" value="Guardar" />
	</form>
<?php endif; ?>


