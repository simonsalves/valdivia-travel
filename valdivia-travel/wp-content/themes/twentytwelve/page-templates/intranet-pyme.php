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



<?php if (isset($_POST['fechaInicio']) && isset($_POST['fechaTermino'])) {
	$fi = $_POST['fechaInicio'];
	$ft = $_POST['fechaTermino'];
	$filtro = true;
} ?>

<?php if (is_user_logged_in()): ?>

<?php $current_user = wp_get_current_user(); ?>
<?php $duen = $current_user->user_login; ?>
<?php $duen = str_replace('-', '',$duen); //le saca el guion "-" al rut?> 




<?php $consulta2 = $db -> consulta("SELECT id_pyme FROM dueno_pyme WHERE id_cliente_pyme like '$duen'"); ?>
			<?php if($db->num_rows($consulta2)>0): ?>
				<?php while($resultados = $db->fetch_array($consulta2)): ?>
					<?php $pyme = $resultados['id_pyme']; ?>
				<?php endwhile; ?>
			<?php endif; ?>
					<?php // echo $pyme; //Muestra el id de la pyque que posee el dueño ?>



<?php $consulta2 = $db -> consulta("SELECT descripcion FROM pyme WHERE id_pyme = '$pyme'"); ?>
			<?php if($db->num_rows($consulta2)>0): ?>
				<?php while($resultados = $db->fetch_array($consulta2)): ?>
					<?php $nombre = $resultados['descripcion']; ?>
				<?php endwhile; ?>
			<?php endif; ?>

	<div class="row">
		<h1 class="text-center"><?php echo $nombre; ?></h1>
		<div class="large-12 columns">
		<br>
		<?php if (true): ?>
			<?php $consulta = $db -> consulta("SELECT count(*) AS clientes FROM pyme_visitada WHERE fecha >= '$fi' AND fecha <= '$ft' AND id_pyme = '$pyme'"); ?>
			<?php $consulta2 = $db -> consulta("SELECT count(*) AS clientes FROM pyme_visitada WHERE id_pyme = '$pyme'"); ?>	
			<?php if($db->num_rows($consulta2)>0): ?>
				<?php while($resultados = $db->fetch_array($consulta2)): ?>
					<?php $clientes = $resultados['clientes']; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		<?php else: ?>
			<?php $consulta = $db -> consulta("SELECT count(*) AS clientes FROM pyme_visitada"); ?>	
			<?php $clientes = $resultados['clientes']; ?>
		<?php endif ?>
		
		<?php if($db->num_rows($consulta)>0): ?>
			<?php while($resultados = $db->fetch_array($consulta)): ?>
			<p><h3>Gracias a este prototipo su negocio ha tenido <?php echo $clientes; ?> visitas<br>
	
			<?php if ($filtro) echo "entre las fechas $fi y $ft su negocio a tenido " . $resultados['clientes'] . " visitas" ?></h3></p>
			<?php endwhile; ?>
			<div class="row">
				<div class="large-5 columns"><form action="<?php bloginfo('url') ?>/?page_id=23" method="post">
				<div class="row">
					
					<div class="large-6 columns">
						Fecha de inicio<input type="date" name="fechaInicio">
					</div>
					<div class="large-6 columns">
						Fecha de termino <input type="date" name="fechaTermino">
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<input type="submit" class="button expand" value="Filtrar">
					</div>
				</div>
			</form></div>
				<div class="large-7 columns"></div>
			</div>
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
