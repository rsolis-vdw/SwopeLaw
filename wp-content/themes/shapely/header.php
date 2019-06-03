<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>
<?php

$shapely_transparent_header         = get_theme_mod( 'shapely_transparent_header', 0 );
$shapely_transparent_header_opacity = get_theme_mod( 'shapely_sticky_header_transparency', 100 );

if ( 1 == $shapely_transparent_header && $shapely_transparent_header_opacity ) {
	if ( $shapely_transparent_header_opacity < 100 ) {
		$style = 'style="background: rgba(255, 255, 255, 0.' . esc_attr( $shapely_transparent_header_opacity ) . ');"';
	} else {
		$style = 'style="background: rgba(255, 255, 255, ' . esc_attr( $shapely_transparent_header_opacity ) . ');"';
	}
} else {
	$style = '';
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shapely' ); ?></a>

	<header id="masthead" class="site-header<?php echo get_theme_mod( 'mobile_menu_on_desktop', false ) ? ' mobile-menu' : ''; ?>" role="banner">
		<div class="nav-container">
			<nav <?php echo $style; ?> id="site-navigation" class="main-navigation" role="navigation">
				<div class="container nav-bar">
					<div class="flex-row">
						<div class="module left site-title-container">
							<?php shapely_get_header_logo(); ?>
						</div>
						<div class="module widget-handle mobile-toggle right visible-sm visible-xs">
							<i class="fa fa-bars"></i>
						</div>
						<div class="module-group right">
							<div class="module left">
								<?php shapely_header_menu(); ?>
							</div>
							<!--end of menu module-->
							<div class="module widget-handle search-widget-handle hidden-xs hidden-sm">
								<div class="search">
									<i class="fa fa-search"></i>
									<span class="title"><?php esc_html_e( 'Site Search', 'shapely' ); ?></span>
								</div>
								<div class="function">
									<?php
									get_search_form();
									?>
								</div>
							</div>
						</div>
						<!--end of module group-->
					</div>
				</div>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
	<div id="content" class="main-container">
		<?php if ( ! is_page_template( 'page-templates/template-home.php' ) && ! is_404() && ! is_page_template( 'page-templates/template-widget.php' ) ) : ?>
			<div class="header-callout">
				<?php shapely_top_callout(); ?>
			</div>
		<?php endif; ?>

		<section class="content-area <?php echo ( get_theme_mod( 'top_callout', true ) ) ? '' : ' pt0 '; ?>">
			<div id="main" class="<?php echo ( ! is_page_template( 'page-templates/template-home.php' ) && ! is_page_template( 'page-templates/template-widget.php' ) ) ? 'container' : ''; ?>" role="main">
