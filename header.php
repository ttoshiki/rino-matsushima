<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rino_matsuhima
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php bloginfo('template_url'); ?>/css/reset.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('template_url'); ?>/css/page.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('template_url'); ?>/css/page-responsive.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?><?php echo get_template_directory_uri(); ?>/assets/images/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="header" class="header">
		<div class="header__hammenu -sp <?php if(is_page('about')){ echo '-hasLogoBgColor';} ?>">
			<?php
				the_custom_logo();
			?>
			<span class="header__trigger" href="#" @click="toggleMenu" id="trigger">
				<span></span>
				<span></span>
				<span></span>
			</span>
			<div class="header__hammenuWrapper">
				<div class="header__hammenuInner">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'primary'
						));
					?>
				</div>
			</div>
		</div>
		<nav class="header__nav -pc<?php
		 if ( is_page('about') || !(is_front_page()) ) {
			 echo ' -hasLogoBgColor';
			} elseif( is_front_page()) {
				echo ' -home';
			} ?>">
			<span class="header__logoWrapper">
				<?php
					the_custom_logo();
				?>
			</span>
			<?php
				wp_nav_menu(array(
					'theme_location' => 'primary'
				));
			?>
		</nav>
	</header>