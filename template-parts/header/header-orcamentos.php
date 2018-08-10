<?php
/**
 * The structure header for our theme
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

?>


<?php get_template_part('template-parts/header/header','tags'); ?>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKJV22G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="page" class="Site">
	<header id="masthead" class="Site-header u-positionAbsolute u-sizeFull u-zIndex10 u-paddingVertical--hzt is-animating" role="banner">
		
		<div class="u-maxSize--container u-alignCenterBox u-sizeFull u-flex u-flexJustifyContentCenter">
			<!-- Logo do site -->
			<div class="Site-header-branding u-size3of24--px"> 
				<?php get_template_part('template-parts/header/header','branding');?>
			</div>
		</div>

	</header><!-- #masthead -->

	<div class="Site-container">
		<div id="content" class="Site-container-content">
