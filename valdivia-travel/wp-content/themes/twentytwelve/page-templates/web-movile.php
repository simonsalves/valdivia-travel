<?php
/**
 * Template Name: Web Movil
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

 ?>
<?php get_header('movil'); ?>
<?php include(TEMPLATEPATH."/php/mysql.php"); ?>
<?php $db = new MySQL(); ?>


<header>
	<div class="panel heder-movil radius">
		<div class="row">
			<div class="small-12 columns text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/images/valdivia41.jpg" width="300" height="110"  alt=""/>
				<br/>
				<h1>Tours valdivia</h1>
			</div>
		</div>
	</div>
</header>

<div class="panel callout">

<?php if ( is_user_logged_in() ): ?><!--LOGEADO-->
	<?php $current_user = wp_get_current_user(); ?>
	<?php if ($current_user->user_status == 4 ): ?>
	<section>
	<div class="row">
		<div class="small-12 columns text-center"><?php if (is_user_logged_in()): ?><?php $current_user = wp_get_current_user(); ?><h6 class="text-center">Bienvenido <?php echo $current_user->display_name; ?> <i class="fi-torso"></i> <a href="<?php echo wp_logout_url( $redirect ); ?>">(Salir)</a></h6><?php endif; ?></div>
	</div>
	<dl class="accordion" data-accordion>
		<dd class="accordion-navigation redondo">
			<a href="#panel1">Buscar lugares turisticos</a>
			<div id="panel1" class="content">
			<!-------------------------------------------------------------------------------------------------------------------------------->
				<?php $consulta = $db -> consulta("SELECT descripcion FROM lugar"); ?>
				<?php if($db->num_rows($consulta)>0): ?>
					<ul>
						<?php while($resultados = $db->fetch_array($consulta)): ?>
							<li><a href="<?php bloginfo('url'); ?>/?page_id=42"><?php echo $resultados['descripcion']; ?></a></li>
						<?php endwhile; ?>
					</ul>
				<?php endif;  ?>
			<!-------------------------------------------------------------------------------------------------------------------------------->
			</div>
		</dd>
		<dd class="accordion-navigation">
			<a href="#panel2">Buscar pymes</a>
			<div id="panel2" class="content">
			<!-------------------------------------------------------------------------------------------------------------------------------->
				<?php $consulta = $db -> consulta("SELECT descripcion FROM pyme"); ?>
				<?php if($db->num_rows($consulta)>0): ?>
					<ul>
						<?php while($resultados = $db->fetch_array($consulta)): ?>
							<li><a href="<?php bloginfo('url'); ?>/?page_id=42"><?php echo $resultados['descripcion']; ?></a></li>
						<?php endwhile; ?>
					</ul>
				<?php endif;  ?>
			<!-------------------------------------------------------------------------------------------------------------------------------->
			</div>
		</dd>
		<dd class="accordion-navigation">
			<a href="#panel3">Sobre Nosotros</a>
			<div id="panel3" class="content">
				
					<blockquote>
						<p>El turismo en Chile está muy bien valorado en el exterior, ya que nuestro país cuenta con climas fríos, templados, húmedos y 100% naturales, la zona sur del país tiene una amplia gama de ciudades, las cuales sus atractivos turísticos son el ingreso principal de las familias que viven en dicha ciudad. Ubicándonos en la región de los Ríos la cual tiene bellezas turísticas como la cuidad de Valdivia, la que cuenta con atractivos sitios como el Parque Oncol o el jardín botánico de la Universidad Austral de Chile e incluso esta ciudad tiene un balneario en la localidad de niebla (ubicada a 17 Kilómetros de la ciudad de Valdivia). Los residentes en la ciudad de Valdivia, en épocas turísticas arriendan sus casas ó cabañas y con estos ingresos suelen sustentarse la primera mitad del año.</p>
						<p>La problemática que se presenta es la mala gestión turística que tiene la ciudad de Valdivia, dado que al entrar a la ciudad en vehículo no tienes como saber cuáles son los atractivos turísticos de la zona ni tampoco cual es el comercio que esta geográficamente cerca. Como solución se ofrece un punto de encuentro entre el turista y las zonas turísticas más el comercio geográficamente cercano, al cual ellos podrán acceder en todo momento y en cualquier lugar a través de una aplicación móvil que esté disponible en sus “Smartphone” en la cual encontraran información oportuna, vigente y real.</p>
						<p>
							<img src="<?php echo get_template_directory_uri(); ?>/img/images/logo-Gmail.png" width="15" height="12"  alt=""/> info@mail.cl<br>
							<img src="<?php echo get_template_directory_uri(); ?>/img/images/facebook_logo_detail.gif" width="15" height="12"  alt=""/> <a href="www.facebook.com"> Facebook </a><br>
							<img src="<?php echo get_template_directory_uri(); ?>/img/images/Twitter_logo_blue.png" width="15" height="12"  alt=""/> <a href="www.twitter.com"> Twitter </a>
						</p>
					</blockquote>
						<H3 class="text-center">Simon Monsalves <img src="<?php echo get_template_directory_uri(); ?>/img/images/64px-Cc.logo.circle.svg.png" width="25" height="25"  alt=""/></H3>
				
			</div>
		</dd>
	</dl>
</section>
<?php endif; ?>
<?php else: ?>
	<div class="row">
		<div class="small-12 columns">
			<h2>Intranet</h2>
			<div class="panel radius">
				<div class="row">
					<div class="large-7 columns">
						<?php wp_login_form(); ?>	
						<a href="#" data-reveal-id="registro-cliente">Registrarse</a>
					</div>
					<div class="large-5 columns">
						<div class="row">
							<div class="small-12 columns">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis dolores quaerat eveniet repellendus est saepe maxime, quam, accusantium fugit, iusto accusamus? Laborum repellat a maiores possimus sit harum optio, beatae!</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>


<!-- AQUI VA CON EL MAPA -->
<div data-role="page" id="turismo">
  <div id="map" style=""> </div>
  <script src="http://map.google.com/maps/api/js?sensor=false"></script> 
</div>




	<div id="registro-cliente" class="reveal-modal tiny" data-reveal>
		<div class="row">
			<form data-abide method="post" action="<?php echo get_template_directory_uri(); ?>/php/registro-cliente.php">
			<div class="row">
				<h3>Registro de clientes</h3>				
				

					<div class="name-field">
						<label>Nombre <small>required</small>
							<input type="text" name="nombre" required>
						</label>
						<small class="error">El nombre es necesario</small>
					</div>
					<div class="email-field">
						<label>E-mail <small>required</small>
							<input type="email" name="id" required>
						</label>
						<small class="error">El correo es necesario</small>
					</div>
					<div class="password-field">
						<label>Contraseña <small>required</small>
							<input type="password" id="password" required pattern="[a-zA-Z]+">
						</label>
						<small class="error">Ingrese una contraseña</small>
					</div>
					<div class="password-confirmation-field">
						<label>Confirme la contraseña <small>required</small>
							<input type="password" required pattern="[a-zA-Z]+" name="passwd" data-equalto="password">
						</label>
						<small class="error">Las contraseñas no coinciden</small>
					</div>
			
				<input type="submit" value="Enviar">
			</div>
			</form>
		</div>
	<a class="close-reveal-modal">&#215;</a>
	</div>






</div>
<script>
  $(document).foundation();
</script>

</body>
</html>
