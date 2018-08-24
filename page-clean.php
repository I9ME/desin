<?php

/**
 * Template Name: CLEAN PAGE
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */
//get_header();
?>

<div class="Page Page--cupom u-sizeFull u-paddingTop--inter--half u-absoluteCenterMiddle">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

	$code_coupon = generateRandomString();

	global $wp;
	$url_get = home_url( $wp->request );

	$url_get_ = explode('/cupom-gerado/', $url_get);
	$id_promocao = $url_get_[1];
	$title_promocao = get_the_title($id_promocao);
	$user_id = get_current_user_id();

	/*$meta_query = array(
					'relation' => 'AND',
            					
						    array(
						        'key'   => '_id_promo',
						        'value' => $id_promocao,
						        'compare' => '='
						    ),
						    array(
						        'key'   => '_status_coupon',
						        'value' => 1,
						        'compare' => '>'
						    )	
				);*/


			$coupons_Args = array( 
					'post_type' => 'coupons',
					'posts_per_page' => 1000,					
					'meta_query' => array( 
										array(
										'relation' => 'AND',
					            					
											    array(
											        'key'   => '_id_promo',
											        'value' => $id_promocao,
											        'compare' => '='
											    ),
											    array(
											        'key'   => '_status_coupon',
											        'value' => 1,
											        'compare' => '>'
											    ),	
									),
						 ),
					'order' => 'ASC');
			
			
			
			$coupons_Loop = new WP_Query( $coupons_Args );
			$quantGerado = $coupons_Loop->post_count;

			//wp_reset_postdata();

			$promo_args = array('post_type' => 'promocoes', 'p' => $id_promocao);

			$newsLoop = new WP_Query( $promo_args );

			if ( $newsLoop->have_posts() ): 

				while ( $newsLoop->have_posts() ) : $newsLoop->the_post();
					
					$quantTotal = get_post_meta( get_the_ID(), 'value_line_3', true );

					if( $quantTotal > $quantGerado ) {


	?>
	
	<?php save_coupon_data( $code_coupon, $id_promocao, $user_id, $title_promocao ); ?>

<section class="Section Section--style1 Section--couponData u-alignCenter">

	<header class="Section-header u-displayFlex u-flexDirectionRow u-flexJustifyContentCenter">
		<h2 class="Send-header-title Section-header-title--beforeTitleLine u-paddingBottom--inter--half u-marginBottom--inter--half"><?php echo get_the_title(); ?></h2>
	</header>
	<div class="Section-content">
		<div class="Section-subSection Section-subSection--content u-marginBottom--inter u-paddingVertical--inter--px">
			<?php echo get_the_content(); ?>
		</div>
		<div class="Section-subSection Section-subSection--code u-marginBottom--inter">
			<div class="Code u-paddingHorizontal--inter--half u-paddingVertical--inter--px u-positionRelative u-displayInlineFlex u-flexDirectionRow u-flexAlignItemsCenter">
				<span class="Code-content u-displayBlock"><?php echo $code_coupon; // BNS000000001 ?></span>
				<a href="<?php echo get_home_url() . '/coupons/' . $code_coupon; ?>" target="_blank" class="Code-button Code-button--pdf u-borderRadius5 u-displayBlock u-marginLeft--inter--half--px Button Button--background Button--smallSize is-animating">
					<i class="u-inlineFlex">
						<svg class="iconPrint u-icon is-animating">
							<use xlink:href="#iconPrint"></use>
						</svg>
					</i>
				</a>
			</div>
		</div>
	</div> 

		
		<!-- <div class="Section-subSection Section-subSection--send u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
			<div class="Section-subSection Section-subSection-whatsapp u-paddingHorizontal--inter u-paddingVertical--inter--half--px u-size12of24">
				<div class=" Section-subSection-header u-displayFlex u-flexDirectionRow u-alignLeft">
					<i class="u-icon u-icon--envelope">
						<svg class="iconWhatsapp u-icon is-animating">
							<use xlink:href="#iconWhatsapp"></use>
						</svg>
					</i>
					<h5 class="Section-subSection-header-title u-marginLeft--inter--half--px">RECEBA O CUPOM<br/>NO SEU <strong>WHATSAPP</strong></h5>
				</div>
				<div class="Section-subSection-content u-marginTop--inter--half">
					<form class="Section-subSection-content-form Form Form--style3">
						<fieldset class="Form-fieldset">
							<div class="Form-line u-flex u-flexDirectionRow">
								<div class="Form-row Form-row--email u-sizeFull u-positionRelative u-displayBlock">
									<input class="Form-input Form-input--text u-borderRadius5 Form-border--0 u-size24of24" placeholder="Seu número" type="text" name="email" />
									<input class="Form-input Form-input--submit FigureIcon--send is-animating hover" type="submit" value="" />
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
			<div class="Section-subSection Section-subSection-email u-paddingHorizontal--inter u-paddingVertical--inter--half--px u-size12of24">
				<div class="Section-subSection-header u-displayFlex u-flexDirectionRow u-alignLeft">
					<i class="u-icon u-icon--envelope">
						<svg class="iconEnvelope u-icon is-animating">
							<use xlink:href="#iconEnvelope"></use>
						</svg>
					</i>
					<h5 class="Section-subSection-header-title u-marginLeft--inter--half--px">RECEBA O CUPOM<br />NO SEU <strong>E-MAIL</strong></h5>
				</div>
				<div class="Section-subSection-content u-marginTop--inter--half">
					<form class="Section-subSection-content-form Form Form--style3">
						<fieldset class="Form-fieldset">
							<div class="Form-line u-flex u-flexDirectionRow">
								<div class="Form-row Form-row--email u-sizeFull u-positionRelative u-displayBlock">
									<input class="Form-input Form-input--text u-borderRadius5 Form-border--0 u-size24of24" placeholder="Seu e-mail" type="text" name="email" />
									<input class="Form-input Form-input--submit FigureIcon--send is-animating hover" type="submit" value="" />
								</div>
							</div>
						</fieldset>
					</form>
				</div>
				</div>
			</div> -->
		</div>

	</div>
</section>
<?php
} else {
?>
<div class="u-displayBlock u-alignCenter u-paddingVertical--hzt">
	<h2>Desculpe-nos, os CUPONS para esta promoção já estão esgotados!</h2>
</div>

<?php
}
endwhile; endif;

endwhile; else: 
?>
<p>Desculpe, mas não foi encontrado nenhum conteúdo.</p>
<?php endif; ?>

</div>
