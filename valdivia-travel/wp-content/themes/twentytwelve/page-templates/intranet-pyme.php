<?php
/**
 * Template Name: Intranet pymes
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

<?php include(TEMPLATEPATH."/php/mysql.php"); ?>
<?php $db = new MySQL(); ?>

<?php if (is_user_logged_in()): ?>
	<div class="row">
		<div class="large-12 columns">
		<?php $consulta = $db -> consulta("SELECT count(*) AS clientes FROM pyme_visitada"); ?>
		<?php if($db->num_rows($consulta)>0): ?>
			<p>Visitas</p>
			<?php while($resultados = $db->fetch_array($consulta)): ?>
				<?php echo $resultados['clientes']; ?>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
<?php else: ?>
	<div class="row">
		<div class="large-5 columns">
			<?php $args = array(
				'echo'           => true,
				'redirect' => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], // Default redirect is back to the current page
				'form_id'        => 'loginform',
				'label_username' => __( 'Rut' ),
				'label_password' => __( 'Password' ),
				'label_remember' => __( 'Remember Me' ),
				'label_log_in'   => __( 'Log In' ),
				'id_username'    => 'user_login',
				'id_password'    => 'user_pass',
				'id_remember'    => 'rememberme',
				'id_submit'      => 'wp-submit',
				'remember'       => true,
				'value_username' => NULL,
				'value_remember' => false
			); ?>
			<?php wp_login_form($args); ?>	
		
		</div>
	</div>
<?php endif; ?>

<?php get_footer(); ?>