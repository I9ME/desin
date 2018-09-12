<?php 
	
	$currentCity_args = currentCity();
	$id_city = $currentCity_args[0];

	 $hasExistFilter = hasExistFilter();
							
			if( $hasExistFilter['filter'] === true ) {
				$tipo_de_oferta = 2;
				$label_valor = 'PAGO ATÉ';
			} else {
				$tipo_de_oferta = 1;
				$label_valor = 'A PARTIR DE';
			}

			if(is_single()){
				
	
					$newsArgs = array( 
		      		'post_type' => 'eventos',
		      		'post__not_in' => array(get_the_ID()),
		      		'meta_query' => array(

		      						'relation' => 'AND',
            					
								    array(
								        'key'   => 'meta_box-cidade_evento',
								        'value' => $id_city,
								        'compare' => '='
								    ),
								),
		      		'posts_per_page' => 3,
		      		'meta_key' => 'meta_box-date',
	           		 'orderby' => 'meta_value_num',
					'order' => 'ASC');
			
			} else {


				$newsArgs = array( 
		      		'post_type' => 'eventos',
		      		'meta_query' => array(

		      						'relation' => 'AND',
            					
								    array(
								        'key'   => 'meta_box-cidade_evento',
								        'value' => $id_city,
								        'compare' => '='
								    ),
								),
		      		'posts_per_page' => 12,
		      		'meta_key' => 'meta_box-date',
	           		 'orderby' => 'meta_value_num',
					'order' => 'ASC');
			
			}
			
			$newsLoop = new WP_Query( $newsArgs );
			
			if ( $newsLoop->have_posts() ): 

 		?>
	<ul class="Section-items u-size24of24 u-flex u-paddingVertical u-flexWrapWrap u-flexJustifyContentCenter">
		<?php                     
	      while ( $newsLoop->have_posts() ) : $newsLoop->the_post();
	      	
	      	if ( has_post_thumbnail() ) {
			
				//Imagem Destacada	
				$image_id = get_post_thumbnail_id();
				$sizeThumbs = 'medium';
				$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
				$urlThumbnail = $urlThumbnail[0];

			} else {
				$urlThumbnail = '';
			}

			$hasExistFilter = hasExistFilter();
			if ( $hasExistFilter['filter_value'] != '' ){
				$filter_value_uri = '?' . $hasExistFilter['filter_value'];
			} else {
				$filter_value_uri = '';
			}

  		?>
	
		<li class="Section-items-item u-marginBottom--inter u-flex u-flexDirectionColumn u-alignCenter u-size7of24">
			<a href="<?php echo get_permalink() . $filter_value_uri; ?>" class="Section-items-item-content  u-size24of24 u-positionRelative u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter">
					<figure class="Section-items-item-figure u-lineHeight0 u-positionRelative u-displayFlex u-flexJustifyContentCenter u-overflowHidden">
						<img class="Section-items-item-figure-src u-heightAuto u-minWith100 u-objectFitCover is-animating" src="<?php echo $urlThumbnail; ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" />
					</figure>
					<div class="Section-items-item-texts u-paddingHorizontal--vrt--inter--half--px">
						<h4 class="Section-items-item-title u-alignCenter u-positionRelative"><?php echo get_the_title(); ?></h4>
						<div class="Section-items-item-meta u-displayFlex u-flexDirectionRow u-flexAlignItemsCenter u-flexJustifyContentCenter u-marginTop--inter--half">
							<div class="Price u-size12of24 u-alignCenter"><span class="u-positionRelative u-displayInlineBlock u-paddingVertical--inter--half--px"><?php echo $label_valor; ?></span></div>
							<div class="Price Price--offer u-size12of24 u-alignCenter"><?php echo menorPreco( get_the_ID(), $tipo_de_oferta ); ?></div>
						</div>
					</div>		
			</a>
		</li>
		<?php endwhile; ?>

	</ul>

	<div class="u-displayFlex u-flexDirectionColumn u-positionRelative u-marginTop--inter u-flexAlignItemsCenter u-flexJustifyContentCenter">
				<p class="u-paddingBottom--inter--half">
					Você não encontrou o seu evento?
				</p>
				<a href="<?php echo 'javascript:LightboxCall(\'' . get_home_url() . '/user-components?component=cadastrar-evento\');'; ?>" class="Button Button--border Button--background u-alignCenter style1 hover Button--largeSize u-borderRadius5 is-animating">
					ADICIONE UM EVENTO!
				</a>
			</div>
	<?php else: ?>
		<div class="u-displayBlock u-positionRelative u-alignCenter u-marginHorizontal--vrt"><h3>Não encontramos nenhum evento.</h3></div>
	<?php 
			endif; 
			wp_reset_postdata(); 
	?>