<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Noto_Simple
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'noto-simple' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="container">

			<div class="header-image">
                <div class="logo">
                    <?php if( is_front_page() && is_home() ):?>
                        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                    <?php else:?>
                        <h1 class="site-title"><a href="<?= esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php endif;?>
                </div>

				<?php the_header_image_tag(); ?>
			</div>

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <i class="material-icons open">menu</i>
					<i class="material-icons close">close</i>
				</button>
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    ) );
                ?>
            </nav>

        </div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
        <div class="container">
