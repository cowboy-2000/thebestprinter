<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thebestprinter
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'thebestprinter' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container site-header__container">
			<div class="row site-header__row">
				<div class="col-10 col-md-5 site-header__col">
					<div class="site-header__logo logo">
						<h1 class="logo__title"><a href="<?php bloginfo('url'); ?>" class="logo__link">
						<?php 
							if (has_custom_logo()) {
								$custom_logo_id = get_theme_mod('custom_logo');
								$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
						
								if ($logo) { ?>
									<img src="<?php echo esc_url($logo[0]); ?>" alt="">
								<?php }
							}
							bloginfo('name');
						?></a></h1>
					</div><!-- .logo -->
				</div><!-- .site-header__col -->
				<div class="col-2 col-md-7 site-header__col">
					<nav id="site-navigation" class="navbar navbar-expand-md site-header__navbar">
						<div class="container-fluid navbar__container-fluid">
							<button class="navbar navbar-toggler navbar__navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="primary-menu" aria-expanded="false">
								<span class="navbar-toggler__icon-bar icon-bar"></span>
								<span class="navbar-toggler__icon-bar icon-bar"></span>
								<span class="navbar-toggler__icon-bar icon-bar"></span>
							</button>
							<?php
								wp_nav_menu(
									array(
										'menu_id'         => 'primary-menu',
										'container_class' => 'collapse navbar-collapse navbar__collapse',
										'menu_class'      => 'navbar__list navbar-nav',
										'container_id'    => 'navbarSupportedContent',
										'theme_location'  => 'menu-1',
									)
								);
							?>
						</div><!-- .container-fluid -->
					</nav>
                </div><!-- .site-header__col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- #masthead -->
