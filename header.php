<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base_theme
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>
		<?php wp_title( '-', true, 'right' ); ?>
	</title>
	<?php wp_head(); ?>
</head>

<body>
	<div id="page" class="site-main">
		<header class="main-header">
			<div class="inner">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container-fluid">

						<!-- Site Logo -->

						<div class="primary-logo">
							<a href="<?php echo get_home_url(); ?>">
								<img class="img-fluid"
									src="<?php the_field('primary_logo', 'option'); ?>"
									alt="<?php bloginfo( 'name' ); ?>">
							</a>
						</div>

						<div class="sticky-logo">
							<a href="<?php echo get_home_url(); ?>">
								<img class="img-fluid"
									src="<?php the_field('sticky_logo', 'option'); ?>"
									alt="<?php bloginfo( 'name' ); ?>">
							</a>
						</div>

						<button class="navbar-toggler hamburger" id="hamburger-1" type="button"
							data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="line"></span>
							<span class="line"></span>
							<span class="line"></span>
						</button>
						<div class="collapse navbar-collapse w-100 justify-content-end" id="navbarSupportedContent">
							<!-- The WordPress Menu goes here -->
							<?php wp_nav_menu(array(
    						'theme_location'  => 'primary',
							'container'       => 'main-header',
    						'container_class' => 'navbar',
    						'container_id'    => 'navbarSupportedContent',
    						'menu_class'      => 'navbar-nav ms-auto',
    						'fallback_cb'     => '',
							'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    						'walker'          => new WP_Bootstrap_Navwalker(),
							));?>

							<div class="button-wrapper">
								<div class="btn getInTouch-btn hvr-grow">
									<a href="<?php the_field('header_button', 'option'); ?>">Get in touch</a>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</header>