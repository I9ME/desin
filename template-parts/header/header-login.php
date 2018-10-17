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


<?php

global $wp;
$getCurrentUrl = home_url( $wp->request );

if( is_user_logged_in() ) {

		$link_cta = get_home_url() . '/member-account/';
		$label = 'MINHA CONTA';
	
	} else {
		$link_cta = 'javascript:LightboxCall(\'' . get_home_url() . '/user-components?component=login_cadastro&url=' . $getCurrentUrl . '\');';
		$label = 'LOGIN / CADASTRO';
	}
 ?>

<!-- LOGIN -->

		<div class="loginBar u-displayBlock u-absoluteTopRight u-paddingRight u-paddingTop--inter--half u-displayFlex u-flexDirectionRow">
			<a id="LoginNavigation" class="u-positionRelative u-displayFlex Button Button--border u-borderRadius50 is-animating hover style2 Button--responsiveSize u-flexAlignItemsCenter e-Toglle is-animating u-positionRelative u-isCollapsed u-hasIcon u-contentHide--button" href="<?php echo $link_cta; ?>">
				<i class="u-inlineFlex u-positionRelative">
					<svg class="iconUser NavigationButton-icon u-icon">
						<use xlink:href="#iconUser"></use>
					</svg>	
				</i>
			<span class="u-onlyDesktop u-marginLeft--inter--half--px"><?php echo $label; ?></span>
			</a>
			<?php if( is_user_logged_in() ) { ?>
			<a id="LoginNavigation" class="u-positionRelative u-displayFlex u-marginLeft--inter--half--px Button Button--border u-borderRadius50 is-animating hover style2 Button--responsiveSize u-flexAlignItemsCenter e-Toglle is-animating u-positionRelative u-isCollapsed u-hasIcon u-contentHide--button" href="<?php echo wp_logout_url() ?>">
				<i class="u-inlineFlex u-positionRelative">
					<svg class="iconClose NavigationButton-icon u-icon">
						<use xlink:href="#iconClose"></use>
					</svg>	
				</i>
			<span class="u-onlyDesktop u-marginLeft--inter--half--px">SAIR</span>
			</a>
			<?php } ?>
		</div>