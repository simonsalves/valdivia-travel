<?php
/**
 * Template Name: Destinos
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
			<h2>DESTINOS</h2>
			<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/img/destinos.png">
</div>

<section>
	<div class="row">
		<div class="large-4 columns">
			<div class="button radius expand size-24">PYMES</div>
			<div class="row">
				<div class="large-6 columns">
					<div class="large-12 columns">
						<img src="<?php echo get_template_directory_uri(); ?>/img/page1_img1.jpg">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/marker_1.gif"></a>
					</div>
				</div>
				<div class="large-6 columns">
				<h5>Italy Holidays</h5>
				Lorem ipsum dolor sit amet, consect etuer adipiscing.
				</div>
			</div>
			<div class="row"><div class="large-12 columns"><hr/></div></div>
			<div class="row">
				<div class="large-6 columns">
					<div class="large-12 columns">
						<img src="<?php echo get_template_directory_uri(); ?>/img/page1_img2.jpg">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/marker_1.gif"></a>
					</div>
				</div>
				<div class="large-6 columns">
				<h5>Philippines Travel</h5>
				Lorem ipsum dolor sit amet, consect etuer adipiscing.
				</div>
			</div>
			<div class="row"><div class="large-12 columns"><hr/></div></div>
			<div class="row">
				<div class="large-6 columns">
					<div class="large-12 columns">
						<img src="<?php echo get_template_directory_uri(); ?>/img/page1_img3.jpg">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/marker_1.gif"></a>
					</div>
				</div>
				<div class="large-6 columns">
				<h5>Cruise Holidays</h5>
				Lorem ipsum dolor sit amet, consect etuer adipiscing.
				</div>
			</div>
		</div>
		<div class="large-8 columns">
			<h2>LUGARES TURISTICOS</h2>
			<div class="row">
				<div class="large-5 columns">
					<img src="<?php echo get_template_directory_uri(); ?>/img/parque-oncol.jpg">
				</div>
				<div class="large-7 columns">
					<h5>Parque Oncol</h5>
					<p class="size-12">En el parque se encuentran áreas para acampar y hacer picnic; además existen 4 miradores. Dos se encuentran a paso de vehículos, con vista a la ciudad de Valdivia. Los miradores de la cima del cerro Oncol tienen una completa vista panorámica hacia el mar, hacia ambas cordilleras, y al valle central. Desde aquí se pueden apreciar once volcanes, desde el Llaima por el norte hasta el volcán Osorno y el Tronador en la frontera con Argentina por el sur. <a href="<?php bloginfo('url'); ?>/?page_id=20&la=-39.699939&lo=-73.326723"><img src="<?php echo get_template_directory_uri(); ?>/img/marker_2.gif"></a></p>
				</div>
			</div>
			<div class="row"><div class="large-12 columns"><hr/></div></div>
			<div class="row">
				<div class="large-5 columns">
					<img src="<?php echo get_template_directory_uri(); ?>/img/feria.jpg">
				</div>
				<div class="large-7 columns">
					<h5>Feria Fluvial de Valdivia</h5>
					<p class="size-12">La Feria Fluvial de Valdivia es un mercado ubicado en la Costanera Arturo Prat, muy cerca de la Catedral y del Puente Pedro de Valdivia que conecta al centro de la ciudad con la Isla Teja.</p>
					<p class="size-12">En esta feria se comercializan mariscos, pescados, vegetales y otros tipos de alimentos, así como también artesanía local. <a href="<?php bloginfo('url'); ?>/?page_id=20&la=-39.814579&lo=-73.248794"><img src="<?php echo get_template_directory_uri(); ?>/img/marker_2.gif"></a></p>
				</div>
			</div>
			<div class="row"><div class="large-12 columns"><hr/></div></div>
			<div class="row">
				<div class="large-5 columns">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cec.jpg">
				</div>
				<div class="large-7 columns">
					<h5>Centro de estudios Cientificos</h5>
					<p class="size-12">El Centro de Estudios Científicos (CECS) es una corporación de derecho privado, sin fines de lucro, dedicada al desarrollo, fomento y difusión de la investigación científica y esta ubicado en el centro de Valdivia. El CECS fue fundado en 1984 como el Centro de Estudios Científicos, y ha sido dirigido desde entonces por el físico Claudio Bunster. <a href="<?php bloginfo('url'); ?>/?page_id=20&la=-39.813990&lo=-73.248134"><img src="<?php echo get_template_directory_uri(); ?>/img/marker_2.gif"></a></p>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>