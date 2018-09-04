<?php

/**
 * Template Name: NEGOCIAÇÃO
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

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	

<section class="Section Section--style1 Section--couponData u-alignCenter">

	<header class="Section-header u-displayFlex u-flexDirectionRow u-flexJustifyContentCenter">
		<h2 class="Send-header-title Section-header-title--beforeTitleLine u-paddingBottom--inter--half u-marginBottom--inter--half">
			<?php echo get_the_title(); ?>		
		</h2>
	</header>
	<div class="Section-content">
		<div class="Section-subSection Section-subSection--content u-marginBottom--inter u-paddingVertical--inter--px">
			<?php echo get_the_content(); ?>
		</div>
		<div class="Section-subSection Section-subSection--code u-marginBottom--inter">
			
		</div>
	</div> 

		
		<div class="Section-subSection Section-subSection--send u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
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
			</div>
		</div>

	</div>
</section>

<?php
endwhile; else: 
?>
<p>Desculpe, mas não foi encontrado nenhum conteúdo.</p>

<?php endif; ?>

</div>
