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

<?php if ( !(is_user_logged_in()) ): ?>
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
		<div class="panel callout">
			<h5 class="text-center">¿Que desea hacer?</h5>
			<ul class="side-nav">
				<li><a data-reveal-id="agregar" href="#">Agregar lugar turistico</a></li>
				<li><a href="#">Editar lugar</a></li>
				<li><a href="#">Enlazar</a></li>
				<li><a href="<?php echo wp_logout_url( $redirect ); ?>">Cerrar sesion</a></li>
			</ul>
		</div>
	</div>
</div>
<?php get_footer(); ?>