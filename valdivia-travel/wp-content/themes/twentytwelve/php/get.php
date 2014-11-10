<!--Esto sirve unicamente para conseguir todos los datos de una tabla con un where en especifico (Generalmente pongo id pero por falta de tiempo use descripcion)en este caso solo sirve para una cosa en especifico. Mas adelante se debe mejorar -->
<?php $filtro = $_GET['filtro'] ?>
<?php include("mysql.php"); ?>
<?php $db = new MySQL(); ?>
<?php $consulta = $db -> consulta("SELECT * FROM lugar where descripcion = '$filtro'"); ?>
<?php if($db->num_rows($consulta)>0): ?>
	<form action="wp-content/themes/twentytwelve/php/ed_lugar.php" method="POST">
	<?php while($resultados = $db->fetch_array($consulta)): ?>
		<div class="row">
			<div class="large-12 columns">
				Descripcion*: <input type="text" placeholder="<?php echo $resultados['descripcion']; ?>" value="<?php echo $resultados['descripcion']; ?>" name="descripcion" />				
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				Direcccion*: <input type="text" placeholder="<?php echo $resultados['direccion']; ?>" value="<?php echo $resultados['direccion']; ?>" name="direccion" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				Telefono: <input type="text" placeholder="<?php echo $resultados['telefono']; ?>" value="<?php echo $resultados['telefono']; ?>" name="telefono" />
			</div>
			<div class="large-6 columns">
				Horario*: <input type="text" placeholder="<?php echo $resultados['horario']; ?>" value="<?php echo $resultados['horario']; ?>" name="horario" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				Pagina web: <input type="text" placeholder="<?php echo $resultados['url']; ?>" value="<?php echo $resultados['url']; ?>" name="url" />
			</div>
			<div class="large-6 columns">
				correo: <input type="text" placeholder="<?php echo $resultados['correo']; ?>" value="<?php echo $resultados['correo']; ?>" name="correo" />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				Latitud*: <input type="text" placeholder="<?php echo $resultados['latitud']; ?>" value="<?php echo $resultados['latitud']; ?>" name="latitud" />
			</div>
			<div class="large-6 columns">
				Longitud*: <input type="text" placeholder="<?php echo $resultados['longitud']; ?>" value="<?php echo $resultados['longitud']; ?>" name="longitud" />
			</div>
		</div>
		<input type="hidden" name="id" value="<?php echo $resultados['id_lugar']; ?>"/>
	<?php endwhile; ?>
		<input type="submit" value="Guardar" class="button expand"/>
	</form>
	Los campos con * son obligatorios. 
<?php endif; ?>


