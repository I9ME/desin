<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>
	
<div id="page" class="Site">
	<?php if( is_home() || is_front_page() ): ?>
	<header id="masthead" class="Site-header u-alignCenter u-paddingVertical u-positionAbsolute u-sizeFull u-displayFlex is-animating u-zIndex20">
		
		<!-- Logo do site -->
		<div class="Site-header-branding u-size4of24--px u-displayInlineFlex u-flexAlignItemsCenter u-positionRelative  u-paddingHorizontal--inter--half"> 
			<?php  get_template_part('template-parts/header/header','branding');?>
		</div>

		<!-- LOGIN -->
		<?php get_template_part( 'template-parts/header/header', 'login' ); ?>

	</header><!-- #masthead -->
	
	<?php  else: ?>

	<header id="masthead" class="Site-header u-positionAbsolute u-paddingVertical u-sizeFull u-displayFlex is-animating u-zIndex20 u-paddingVertical">
		
		<!-- Logo do site -->
		<div class="Site-header-branding u-displayInlineBlock u-positionRelative u-paddingHorizontal--inter--half"> 
			<?php  get_template_part('template-parts/header/header','branding');?>
		</div>

		<!-- LOGIN -->
		<?php get_template_part( 'template-parts/header/header', 'login' ); ?>

	</header><!-- #masthead -->

<?php endif; ?>

	

	<div class="Site-container">
		<div id="content" class="Site-container-content">
