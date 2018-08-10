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



<script src="https://cdn.rawgit.com/MrRio/jsPDF/master/dist/jspdf.min.js"></script>
<script type="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

<div class="Page Page--cupom u-paddingTop--inter--half u-absoluteTopLeft">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

	$code_coupon = generateRandomString();

	global $wp;
	$url_get = home_url( $wp->request );

	$url_get_ = explode('/cupom-gerado/', $url_get);
	$id_promocao = $url_get_[1];
	$title_promocao = get_the_title($id_promocao);

	?>
	
	<?php save_coupon_data( $code_coupon, $id_promocao, $title_promocao ); ?>

<section class="Section Section--style1 Section--couponData u-alignCenter">
	<div id="renderPDF" class="u-positionRelative u-displayBlock">
	<header class="Section-header u-displayFlex u-flexDirectionRow u-flexJustifyContentCenter">
		<h2 class="Send-header-title Section-header-title--beforeTitleLine u-paddingBottom--inter--half u-marginBottom--inter--half"><?php echo get_the_title(); ?></h2>
	</header>
	<div class="Section-content">
		<p class="Section-subSection Section-subSection--content u-marginBottom--inter u-paddingVertical--inter--px">
			<?php echo get_the_content(); ?>
		</p>
		<div class="Section-subSection Section-subSection--code u-marginBottom--inter">
			<div class="Code u-paddingHorizontal--inter--half u-paddingVertical--inter--px u-positionRelative u-displayInlineFlex u-flexDirectionRow u-flexAlignItemsCenter">
				<span class="Code-content u-displayBlock"><?php echo $code_coupon; // BNS000000001 ?></span>
				<a href="javascript:getPDF();" class="Code-button Code-button--pdf u-borderRadius5 u-displayBlock u-marginLeft--inter--half--px Button Button--background Button--smallSize is-animating"><i class="FigureIcon FigureIcon--pdf u-displayBlock"></i></a>
			</div>
		</div>
	</div> 
</div> <!-- #renderPDF -->
	<script language="javascript"> 
        var cache_width = jQuery('#renderPDF').width(); //Criado um cache do CSS
        var a4  =[ 595.28,  841.89]; // Widht e Height de uma folha a4

        function getPDF(){
        // Setar o width da div no formato a4
        jQuery("#renderPDF").width((a4[0]*1.33333) -80).css('max-width','none');

        // Aqui ele cria a imagem e cria o pdf
        html2canvas(jQuery('#renderPDF'), {
          onrendered: function(canvas) {
            var img = canvas.toDataURL("image/png",1.0);  
            var doc = new jsPDF({unit:'px', format:'a4'});
            doc.addImage(img, 'JPEG', 20, 20);
            doc.save('CUPOM-<?php echo $code_coupon; ?>.pdf');
            //Retorna ao CSS normal
            jQuery('#renderPDF').width(cache_width);
          }
        });
        }
    </script>
	
		
		<div class="Section-subSection Section-subSection--send u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
			<div class="Section-subSection Section-subSection-whatsapp u-paddingHorizontal--inter u-paddingVertical--inter--half--px u-size12of24">
				<div class=" Section-subSection-header u-displayFlex u-flexDirectionRow u-alignLeft">
					<i class="u-icon u-icon--envelope">
						<svg class="iconWhatsapp u-icon is-animating">
							<use xlink:href="#iconWhatsapp"></use>
						</svg>
					</i>
					<h5 class="Section-subSection-header-title u-marginLeft--inter--half--px">RECEBA O CÓDIGO<br/>NO SEU <strong>WHATSAPP</strong></h5>
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
					<h5 class="Section-subSection-header-title u-marginLeft--inter--half--px">RECEBA O CÓDIGO<br />NO SEU <strong>E-MAIL</strong></h5>
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
endwhile; else: ?>
<p>Desculpe, mas não foi encontrado nenhum conteúdo.</p>
<?php endif; ?>

</div>

