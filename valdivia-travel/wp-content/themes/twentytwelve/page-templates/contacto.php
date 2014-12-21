<?php
/**
 * Template Name: Contacto
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
	<div class="large-4 columns">
	<center>
		
		<img src="<?php echo get_template_directory_uri(); ?>/img/contacto.png">
	</center>
	</div>
	<div class="large-8 columns">
		<p>En esta sección podrá llevar a cabo sus sugerencias, reclamos y/o agradecimientos. Para ellos debe rellenar el formulario presentado a continuación.</p>
	</div>
</div>
<br/>
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
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h2>Contacto</h2>
				<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>
