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

<?php if (is_user_logged_in()): ?>
	<div class="row">
		<div class="large-12 columns text-center">
			logeado
		</div>
	</div>
<?php else: ?>
	<div class="row">
		<div class="large-5 columns">
			<?php wp_login_form(); ?>
		</div>
	</div>
<?php endif; ?>

<?php get_footer(); ?>