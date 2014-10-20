<?php
/**
 * Template Name: Registro dueno
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
		<form data-abide method="post" action="<?php echo get_template_directory_uri(); ?>/php/registro-dueno-pyme.php">
			<fieldset>
			<legend>Registro de Dueño</legend>

					<div class="row">
						<div class="large-12 columns">
							
							<div class="name-field">
								<label>Nombre <small>required</small>
									<input type="text" name="nombre" required pattern="[a-zA-Z]+">
								</label>
								<small class="error">Debe ingresar el nombre</small>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-6 columns">
							<div class="email-field">
							<label>Apellido paterno <small>required</small>
								<input type="text" name="apellido_p" required>
							</label>
							<small class="error">Requerido</small>
						</div>	
						</div>
						<div class="large-6 columns">
							<div class="email-field">
							<label>Apellido materno <small>required</small>
								<input type="text" name="apellido_m" required>
							</label>
							<small class="error">Requerido</small>
						</div>	
						</div>
					</div>
				<div class="row">
					<div class="large-12 columns">
						<div class="email-field">
							<label>Rut <small>required</small>
								<input type="text" name="rut" required>
							</label>
							<small class="error">Requerido</small>
						</div>	
					</div>
				</div>
						
				<div class="row">
					<div class="large-6 columns">
						<div class="password-field">
							<label>Password <small>required</small>
								<input type="password" id="passwd" name="passwd" required pattern="[a-zA-Z]+">
							</label>
							<small class="error">Requerido</small>
						</div>
					</div>
					<div class="large-6 columns">
						<div class="password-confirmation-field">
							<label>Confirm Password <small>required</small>
								<input type="password" required pattern="[a-zA-Z]+" name="passwd" data-equalto="passwd">
							</label>
							<small class="error">Requerido</small>
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="large-6 columns">
						<button type="submit" class="expand">Continuar</button>
					</div>
					<div class="large-6 columns">
						<button type="reset" class="expand alert">Limpiar</button>
					</div>
				</div>	
  			</fieldset>
		</form>
	</div>
	<div class="large-7 columns"></div>
</div>
<?php get_footer(); ?>