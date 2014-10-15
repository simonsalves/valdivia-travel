<?php
/**
 * Template Name: Tratamientos
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
	<div class="magellan-container" data-magellan-expedition="fixed">
		<dl class="sub-nav">
			<dd data-magellan-arrival="corporales"><a href="#corporales">Tratamientos Cortporales</a></dd>
			<dd data-magellan-arrival="faciales"><a href="#faciales">Tratamientos Faciales</a></dd>
			<dd data-magellan-arrival="correctivos"><a href="#correctivos">Tratamientos Correctivo Esteticos</a></dd>
			<dd data-magellan-arrival="medicinales"><a href="#medicinales">Tratamientos Medicinales</a></dd>
		</dl>
	</div>
</div>


<section data-magellan-destination="corporales">
	<div class="row">
		<div class="large-12 columns">
			<a name="corporales"></a>
			<h5>Tratamientos Corporales</h5>
			<div class="row">
				<?php $query = new WP_Query( 'cat=10' ); ?>
				<?php $contador_categoria = 0 ?>
				<?php if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>


						<a href="<?php the_permalink() ?>" rel="bookmark" title="Ver el tratamiento completo"><?php the_title(); ?></a>
						<?php the_content(); ?>

					<?php endwhile; ?>
				<?php else: ?>
					<p><?php _e('No se encontraron tratamientos'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section data-magellan-destination="faciales">
	<div class="row">
		<div class="large-12 columns">
			<a name="faciales"></a>
			<h5>Tratamientos Faciales</h5>
			<div class="row">
				<?php $query = new WP_Query( 'cat=9' ); ?>
				<?php $contador_categoria = 0 ?>
				<?php if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>


						<a href="<?php the_permalink() ?>" rel="bookmark" title="Ver el tratamiento completo"><?php the_title(); ?></a>
						<?php the_content(); ?>

					<?php endwhile; ?>
				<?php else: ?>
					<p><?php _e('No se encontraron tratamientos'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>



<section data-magellan-destination="correctivos">
	<div class="row">
		<div class="large-12 columns">
			<a name="correctivos"></a>
			<h5>Tratamientos Correctivo Esteticos</h5>
			<div class="row">
				<?php $query = new WP_Query( 'cat=11' ); ?>
				<?php $contador_categoria = 0 ?>
				<?php if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>


						<a href="<?php the_permalink() ?>" rel="bookmark" title="Ver el tratamiento completo"><?php the_title(); ?></a>
						<?php the_content(); ?>

					<?php endwhile; ?>
				<?php else: ?>
					<p><?php _e('No se encontraron tratamientos'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>


<section data-magellan-destination="medicinales">
	<div class="row">
		<div class="large-12 columns">
			<a name="medicinales"></a>
			<h5 >Tratamientos Medicinales</h5>
			<div class="row">
				<?php $query = new WP_Query( 'cat=12' ); ?>
				<?php $contador_categoria = 0 ?>
				<?php if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>


						<a href="<?php the_permalink() ?>" rel="bookmark" title="Ver el tratamiento completo"><?php the_title(); ?></a>
						<?php the_content(); ?>

					<?php endwhile; ?>
				<?php else: ?>
					<p><?php _e('No se encontraron tratamientos'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>




































<?php get_footer(); ?>