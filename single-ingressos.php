<?php
/**
 * The coupon template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

<div id="main" class="SiteMain" role="main">
	<?php get_template_part('template-parts/page/intro','page'); ?>
	
	<main class="SiteMain-main u-marginTop--inter">
		<?php get_template_part('template-parts/promocoes/section-coupons','single');?>
	</main>


</div><!-- #main -->



</div><!-- #content -->

		<footer class="Site-footer" role="contentinfo">
				
		</footer>
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/main.min.js'></script>
<?php wp_footer(); ?>
</body>
</html>