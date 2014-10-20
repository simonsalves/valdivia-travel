<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/fastclick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
<header>
	<br/>	
	<div class="row header">
		<div class="large-5 columns">
			<div class="row">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg"></a>
			</div>
		</div>
		<div class="large-7 columns">
			<form method="post" action="#">
				<div class="row">
					<div class="large-6 columns"></div>
					<div class="large-6 columns">
					<br/>
						<div class="row collapse">
							<div class="row">
								<div class="small-8 columns">
									<input type="text" placeholder="Buscar...">
								</div>
								<div class="small-2 columns">
									<a href="#" class="button postfix"><i class="fi-magnifying-glass"></i></a>
								</div>
								<div class="large-2 columns">
									<a href="#" class="button postfix round" title="Ayuda"><i class="fi-universal-access size-24"></i></a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="large-6 columns">
							<?php if ( is_user_logged_in() ): ?>
								<?php $current_user = wp_get_current_user(); ?>
								<?php if ($current_user->user_status == 0 ): ?>
								<a href="<?php bloginfo('url'); ?>/?page_id=18" class="button split expand tiny">Intranet <span data-dropdown="drop"></span></a><br>
								<ul id="drop" class="f-dropdown" data-dropdown-content>
									<li><a href="#" data-reveal-id="agregar">Agregar lugar</a></li>
									<li><a href="<?php bloginfo('url'); ?>/?page_id=28">Registrar pyme</a></li>
									<li><a href="<?php bloginfo('url'); ?>/?page_id=18">Editar lugar</a></li>
									<li><a href="<?php bloginfo('url'); ?>/?page_id=36">Enlazar</a></li>
									<li><a href="<?php echo wp_logout_url( $redirect ); ?>">Salir</a></li>
								</ul>
							<?php endif; ?>
							<?php else: ?>
								<a data-reveal-id="modal-login" href="#" class="button expand tiny">Intranet</a>
							<?php endif; ?>
							</div>
							<div class="large-6 columns">
							<?php if ( is_user_logged_in() ): ?><!--LOGEADO-->
								<a href="<?php bloginfo('url'); ?>/?page_id=23" class="button split expand tiny">PYMES <span data-dropdown="pymes"></span></a><br>
								<ul id="pymes" class="f-dropdown" data-dropdown-content>
									<li><a href="<?php bloginfo('url'); ?>/?page_id=28">Registrar pyme</a></li>
									<li><a href="<?php bloginfo('url'); ?>/?page_id=31">Registrar dueño</a></li>
									<li><a href="<?php echo wp_logout_url( $redirect ); ?>">Salir</a></li>
								</ul>
							<?php else: ?>
								<a href="<?php bloginfo('url'); ?>/?page_id=23" class="button split expand tiny">PYMES <span data-dropdown="pymes"></span></a><br>
								<ul id="pymes" class="f-dropdown" data-dropdown-content>
									<li><a href="<?php bloginfo('url'); ?>/?page_id=28">Registrar pyme</a></li>
									<li><a href="<?php bloginfo('url'); ?>/?page_id=31">Registrar dueño</a></li>
								</ul>
							<?php endif; ?>
							</div>
							<div class="row">
								<?php if (is_user_logged_in()): ?><?php $current_user = wp_get_current_user(); ?><h6 class="text-center">Bienvenido <?php echo $current_user->display_name; ?> <i class="fi-torso"></i></h6><?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<nav>
					<ul id="menu">
						<li><a href="<?php bloginfo('url'); ?>" class="nav1">Inicio</a></li>
						<li><a href="<?php bloginfo('url'); ?>/?page_id=4" class="nav2">Nosotros </a></li>
						<li><a href="<?php bloginfo('url'); ?>/?page_id=20" class="nav3">MAPA</a></li>
						<li><a href="<?php bloginfo('url'); ?>/?page_id=8" class="nav4">Destinos</a></li>
						<li class="end"><a href="<?php bloginfo('url'); ?>/?page_id=33" class="nav5">Contacto</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>
<div class="row">


