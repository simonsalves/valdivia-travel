<?php
/**
 * Template Name: Registro pymes
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
	
	<div class="large-9 columns">
		<dl class="tabs" data-tab>
			<dd class="active"><a href="#pyme">Registrar PYME</a></dd>
			<dd><a href="#dueno">Registrar Dueño</a></dd>
		</dl>
		<div class="tabs-content">
			<div class="content active" id="pyme">
			<p>REGISTRO DE PYME</p>
			</div>
			<div class="content" id="dueno">
			<p>RESGISTRO DE DUEÑO PYME</p>
			</div>
		</div>
	</div>

</div>
<?php get_footer(); ?>