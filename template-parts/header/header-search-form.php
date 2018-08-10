<?php
/**
 * Displays Login Customer
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?>
<div id="SeachHeader-container" class="Form Form--style4 is-animating u-marginTop--inter">
	<form action="<?php echo get_home_url(); ?>/" method="get" accept-charset="utf-8" class="Item is-animating u-paddingVertical" id="searchform" role="search">
	  	<div class="Navigation--content-container u-alignRight u-flex u-positionRelative">
	    	<input type="text" name="s" class="Form-input u-borderRadius50 u-size18of24 u-inlineFlex" placeholder="BUSCAR NO BLOG" id="s" value="<?php the_search_query(); ?>" />
	    	<input type="submit" class="Form-input Form-input--searchSubmit u-inlineFlex FigureIcon FigureIcon--search is-animating" id="searchsubmit" value="" />
	  	</div>
	</form>
</div>