<?php
/**
 * Template Name: Nosotros
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

<div class="row">
	<div class="large-12 columns">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2>Sobre Valdivia</h2>
			<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

<section>
	<div class="row">
		<div class="large-4 columns">
			<div class="button radius expand size-24">PYMES</div>
			<div class="row">
				<div class="large-6 columns">
					<div class="large-12 columns">
						<img src="<?php echo get_template_directory_uri(); ?>/img/la-ultima.jpg">
					</div>
				</div>
				<div class="large-6 columns">
			<b>	<h5>Cafe La ultima frontera</h5>	</b>			
				Perez Rosales #787 <a href="<?php bloginfo('url'); ?>/?page_id=20&la=-39.817541&lo=-73.247417"><img src="<?php echo get_template_directory_uri(); ?>/img/marker_1.gif"></a>
				</div>
			</div>
			<div class="row"><div class="large-12 columns"><hr/></div></div>
			<div class="row">
				<div class="large-6 columns">
					<div class="large-12 columns">
						<img src="<?php echo get_template_directory_uri(); ?>/img/entrelagos.jpg">
					</div>
				</div>
				<div class="large-6 columns">
				<h5>Chocolateria Entre Lagos</h5>
				Av. Perez Rosales esquina Arauco <a href="<?php bloginfo('url'); ?>/?page_id=20&la=-39.815384&lo=-73.246438"><img src="<?php echo get_template_directory_uri(); ?>/img/marker_1.gif"></a>
				</div>
			</div>
			<div class="row"><div class="large-12 columns"><hr/></div></div>
			<div class="row">
				<div class="large-6 columns">
					<div class="large-12 columns">
						<img src="<?php echo get_template_directory_uri(); ?>/img/boti.jpeg">
					</div>
				</div>
				<div class="large-6 columns">
				<h5>Botilleria el torreon</h5>
				Cochranne #215 <a href="<?php bloginfo('url'); ?>/?page_id=20&la=-39.819156&lo=-73.247640"><img src="<?php echo get_template_directory_uri(); ?>/img/marker_1.gif"></a>
				</div>
			</div>
		</div>
		<div class="large-8 columns">
			<h2>SOBRE NOSOTROS</h2>
			<div class="row">
				<div class="large-12 columns">
					<figure class="left marg_right1"><img src="<?php echo get_template_directory_uri(); ?>/img/cisne.gif"></figure>
					<p>El turismo en Chile está muy bien valorado en el exterior, ya que nuestro país cuenta con climas fríos, templados, húmedos y 100% naturales, la zona sur del país tiene una amplia gama de ciudades, las cuales sus atractivos turísticos son el ingreso principal de las familias que viven en dicha ciudad. Ubicándonos en la región de los Ríos la cual tiene bellezas turísticas como la cuidad de Valdivia, la que cuenta con atractivos sitios como el Parque Oncol o el jardín botánico de la Universidad Austral de Chile e incluso esta ciudad tiene un balneario en la localidad de niebla (ubicada a 17 Kilómetros de la ciudad de Valdivia). Los residentes en la ciudad de Valdivia, en épocas turísticas arriendan sus casas ó cabañas y con estos ingresos suelen sustentarse la primera mitad del año.</p>
				</div>
			<div class="row">
				<div class="large-12 columns">
					<figure class="left marg_right1"><img src="<?php echo get_template_directory_uri(); ?>/img/android.png"></figure>
					<p>Casi todos los teléfonos inteligentes son móviles que soportan completamente un cliente de correo electrónico con la funcionalidad completa de un organizador personal. Una característica importante de casi todos los teléfonos inteligentes es que permiten la instalación de programas para incrementar el procesamiento de datos y la conectividad. Estas aplicaciones pueden ser desarrolladas por el fabricante del dispositivo, por el operador o por un tercero. El término "Inteligente" hace referencia a cualquier interfaz, como un teclado QWERTY en miniatura, una pantalla táctil, o simplemente el sistema operativo móvil que posee, diferenciando su uso mediante una exclusiva disposición de los menús, teclas, atajos, etc. El completo soporte al correo electrónico parece ser una característica indispensable encontrada en todos los modelos existentes. Casi todos los teléfonos inteligentes también permiten al usuario instalar programas adicionales, normalmente inclusive desde terceros (hecho que dota a estos teléfonos de muchísimas aplicaciones en diferentes terrenos), pero algunos vendedores gustan de tildar a sus teléfonos como inteligentes aun cuando no tienen esta característica.</p>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<p>Valdivia.travel es una página web y al mismo tiempo una aplicación móvil compatible con todos los sistemas operativos, este prototipo tiene el fin de dar a los extranjeros las localizaciones geográficas de las pymes y los lugares turísticos. A su vez dá la ruta de cómo llegar.</p>
				</div>
			</div>
		</div>
	
	</div>
</section>


<?php get_footer(); ?>
