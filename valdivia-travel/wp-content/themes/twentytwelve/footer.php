
</div>
<div id="modal-login" class="reveal-modal small" data-reveal>
	<h2>Bienvenido a la intranet</h2>
	<div class="row">
		<div class="large-7 columns">
			<?php wp_login_form(); ?>
			<a href="<?php bloginfo('url'); ?>/wp-login.php?action=register">Registrarse</a>
		</div>
		<div class="large-5 columns text-center">

			<i class="fi-torsos-all grande"></i>
		</div>
	</div>
	<a class="close-reveal-modal">&#215;</a>
</div>
<div id="agregar" class="reveal-modal small" data-reveal>
  <h4>Agregar un nuevo lugar turistico</h4>
<form data-abide action="reg_lugar.php" method="post">

	<div class="row">
		<div class="large-12 columns">
			<div class="name-field">
				<label>Descripcion <small>requerido</small>
					<input type="text" name="descripcion" required>
				</label>
				<small class="error">Debe agregar una descripcion.</small>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="large-7 columns">
			<div class="name-field">
			<label>Direccion <small>requerido</small>
				<input type="text" name="direccion" required>
			</label>
			<small class="error">Debe agregar una direccion.</small>
		</div>	
		</div>
		<div class="large-5 columns">
			<div class="name-field">
				<label>Telefono
					<input type="text" name="telefono">
				</label>
			</div>	
		</div>
	</div>

	<div class="row">
		<div class="large-3 columns">
			<div class="name-field">
				<label>Horario <small>requerido</small>
					<input type="text" name="horario" pattern="time" required>
				</label>
				<small class="error">Requerido</small>
			</div>
		</div>
		<div class="large-9 columns">
			<div class="name-field">
				<label>Pagina web <small>requerido</small>
					<input type="text" name="url" pattern="url" required>
				</label>
				<small class="error">Considere agregar http:// al inicio.</small>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="large-12 columns">
			<div class="email-field">
				<label>Email <small>required</small>
					<input type="email" name="correo" required>
				</label>
				<small class="error">Por favor ingrese un correo.</small>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-6 columns">
			<div class="latitud-field">
				<label>Latitud <small>required</small>
					<input type="text" name="latitud" pattern="integer" required>
				</label>
				<small class="error">Latitud incorrecta.</small>
			</div>
		</div>
		<div class="large-6 columns">
			<div class="longitud-field">
				<label>Longitud <small>required</small>
					<input type="text" name="longitud" pattern="integer" required>
				</label>
				<small class="error">Longitud incorrecta.</small>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<input type="submit" class="button expand" value="Registrar" />
		</div>
	</div>
</form>
</div>
<footer>
	<div class="row">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>
</footer>

<script>
  $(document).foundation();
</script>
<?php wp_footer(); ?>
</body>
</html>