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