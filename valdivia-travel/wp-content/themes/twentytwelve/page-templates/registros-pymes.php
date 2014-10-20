<?php
/**
 * Template Name: Registro pymes
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<br/>
<div class="row">
	<div class="large-5 columns">

		<form data-abide id="formulario" method="post" action="<?php echo get_template_directory_uri(); ?>/php/registro-pyme.php">
			<fieldset>
			<legend>Registro de PYME</legend>
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
					<div class="large-5 columns">
						<div class="name-field">
							<label>Horario <small>requerido</small>
								<input type="text" name="horario" pattern="time" required>
							</label>
							<small class="error">Requerido</small>
						</div>
					</div>
					<div class="large-7 columns">
						<div class="name-field">
							<label>Pagina web <small>requerido</small>
								<input type="text" name="url">
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
						<label>Tipo
							<select name="id_tipo">
								<option>Seleccione el tipo</option>
								<option value="1">1</option>
							</select>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-6 columns">
						<input type="submit" id="reg" class="button expand" value="Registrar" />
					</div>
					<div class="large-6 columns">
						<input type="reset" class="button expand alert" value="Limpiar" />
					</div>
				</div>
  			</fieldset>
		</form>
	</div>
	<div class="large-7 columns">
		<div id="alerta" class="hide">
			<div data-alert class="alert-box">
				<div id="respuesta"></div>
 				<a href="#" class="close">&times;</a>
			</div>
		</div>
	</div>
</div>




<script>
	/*
$('#reg').on('click', function(e){
	e.preventDefault();
	$('$formulario').tri
	$.post($('$formulario').attr('action'), {$('$formulario').serialize()}, function(data){
		$('$respuesta').html(data);
		$('$alerta').fadeIn();
	});
});
*/
</script>



<?php get_footer(); ?>