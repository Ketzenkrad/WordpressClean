<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clean
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- START .header -->
	<header id="fh5co-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="navbar-header"> 
						<!-- Mobile Toggle Menu Button -->
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle visible-xs-block" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
						<a class="navbar-brand" href="<?php echo home_url($path, $scheme);?>"><?php bloginfo('name'); ?></a>
						</div>
						<div id="fh5co-navbar" class="navbar-collapse collapse">
						<!-- Тест меню -->
						<?php wp_nav_menu(array(
							'theme_location' => 'menu-1',
							'menu_class' => 'nav navbar-nav navbar-right',
							)); 
						?>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- END .header -->
	<!-- Content .header -->
	<div id="fh5co-main">
		<div class="fh5co-intro text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="intro-lead">
						<!-- Условия для хедера -->
							<?php if(is_single() || ( is_page() && !is_front_page() ) ): ?>
								<?php the_title(); ?>
							<?php else:?>
								<?php bloginfo('description'); ?>
							<?php endif;?>
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- COntent end -->
