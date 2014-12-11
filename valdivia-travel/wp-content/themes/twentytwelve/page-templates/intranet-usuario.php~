<?php
/**
 * Template Name: Intranet usuarios
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

<?php if ( !(is_user_logged_in()) || $current_user->user_status == 3 ): ?>
	<script>
		   window.history.go(-1)
	</script>
<?php endif; ?>


<?php $current_user = wp_get_current_user(); ?>
<div class="row">
	<div class="large-12 columns">Bienvenido <?php echo $current_user->display_name; ?>, esta es tu pagina personal.</div>	
</div>
<div class="row">
	<div class="large-12 columns text-center">
		<img src="<?php echo get_template_directory_uri(); ?>/img/Intranet.png">
	</div>
</div>
<div class="row">
	<div class="large-3 columns end">
		<div class="row">
			<div class="panel callout">
				<h5 class="text-center">¿Que desea hacer?</h5>
				<ul class="side-nav">
					<li><a data-reveal-id="agregar" href="#">Agregar lugar turistico</a></li>
					<li><a href="<?php bloginfo('url'); ?>/?page_id=18">Editar lugar</a></li>
					<li><a href="<?php bloginfo('url'); ?>/?page_id=36">Enlazar</a></li>
					<li><a href="<?php bloginfo('url'); ?>/?page_id=28">Registrar pyme</a></li>
					<li><a href="<?php echo wp_logout_url( $redirect ); ?>">Cerrar sesion</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="panel callout">
			<h5 class="text-center">Crear tipo PYME</h5>
			<form action="<?php echo get_template_directory_uri(); ?>/php/registro-categoria.php" method="post">
				<div class="row">
					<div class="large-12 columns">
						<input type="text" name="categoria" placeholder="Ingrese nueva categoria...">					
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<input type="submit" value="Agregar" class="button expand tiny">
					</div>
				</div>
			</form>
		</div>
		</div>
	</div>
	<div class="large-9 columns">
		<div class="row">
			<div class="large-12 columns">
				<fieldset>
					<legend>Editar lugar turistico</legend>
					<?php include(TEMPLATEPATH."/php/mysql.php"); ?>
					<?php $db = new MySQL(); ?>
					<?php $consulta = $db -> consulta("SELECT descripcion FROM lugar"); ?>
					<?php if($db->num_rows($consulta)>0): ?>
						Seleccione un lugar para editar<select id="mostrar">
						<option>Seleccione uno</option>
						<?php while($resultados = $db->fetch_array($consulta)): ?>
							<option data-id="<?php echo $resultados['id_lugar']; ?>" ><?php echo $resultados['descripcion']; ?></option>
						<?php endwhile; ?>
						</select>
					<?php endif; ?>
					<div id="oculto" ></div>
				</fieldset>		
			</div>
		</div>
	</div>
</div>


<a href="<?php echo get_template_directory_uri(); ?>/php/" id="ir"></a>

<script>
	var direccion = $('#ir').attr('href');
	$('#mostrar').change(function(e){
		var str = "";
	    $( "select option:selected" ).each(function() {
	      str += $( this ).text() + " ";
			$.get(direccion+'get.php', { filtro: str }, function(data){
				$('#oculto').html(data);
			});
	    });
	});

</script>

<?php get_footer(); ?>