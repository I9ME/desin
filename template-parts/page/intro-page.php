<?php if( is_home() || is_front_page() ) { ?>
<section id="up" class="Section--intro Intro Intro--home Section--style2 u-positionRelative u-flex u-flexDirectionColumn u-flexAlignItemsCenter u-flexJustifyContentCenter u-paddingVertical" data-paroller-factor="-0.20" data-paroller-factor-xs="0.2">


	<div class="Captions u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter u-alignCenter">		
		
		<h2 class="Captions--title u-sizeFull u-marginBottom">
			Como podemos te ajudar?
		</h2>

		<ul class="Navigation u-displayFlex u-flexDirectionColumn u-flexSwitchRow u-alignLeft">
			<li class="Navigation-item u-displayFlex u-size12of24 u-paddingVertical">
				<a href="<?php echo get_home_url(); ?>/comprar-ingresso/" class="Navigation-item-content u-paddingHorizontal--vrt--inter--px is-animating">
					<h3 class="Navigation-item-title">QUERO<br /><em class="is-animating">COMPRAR</em><br />UM <br />INGRESSO</h3>
				</a>
			</li>
			<li class="Navigation-item u-displayFlex u-size12of24 u-paddingVertical">
				<a href="<?php echo get_home_url(); ?>/vender-ingresso/" class="Navigation-item-content u-paddingHorizontal--vrt--inter--px is-animating">
					<h3 class="Navigation-item-title">QUERO<br /><em class="is-animating">VENDER</em><br />O MEU <br />INGRESSO</h3>
				</a>
			</li>
		</ul>
		
	</div>

</section>

<?php } else { ?>

<section class="Section--intro Intro Intro--page u-positionRelative u-flex u-flexDirectionColumn u-flexAlignItemsCenter u-flexJustifyContentCenter u-paddingVertical">
</section>

<?php } ?>
