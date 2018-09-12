<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.2
 */

?>
<?php
		if (have_posts()) :
  		 while (have_posts()) :
  		 	  the_post();

  		 	  $hasExistFilter = hasExistFilter();
							
			if( $hasExistFilter['filter'] === true ) {
				$tipo_de_oferta = 2;
				$label_valor = 'PAGO ATÉ';
			} else {
				$tipo_de_oferta = 1;
				$label_valor = 'A PARTIR DE';
			}

	?>
<article id="post-<?php the_ID(); ?>" class="Article Article--promocoes u-positionRelative u-displayFlex u-flexDirectionColumn  u-paddingBottom--inter u-borderRadius5">
	
	<div class="Breadcrumbs u-displayFlex u-paddingHorizontal--vrt--inter--half--px u-marginBottom--inter">
		<a class="u-lineHeight100 u-displayFlex u-flexDirectionRow u-flexAlignItemsCenter is-animating" href="<?php echo get_home_url(); ?>/comprar-ingresso/">
			<i class="u-icon u-marginRight--inter--half--px">
				<svg class="iconArrowLeftLine u-icon is-animating">
					<use xlink:href="#iconArrowLeftLine"></use>
				</svg>
			</i>
			<span>VOLTAR PARA OS EVENTOS</span>
		</a>
	</div>
	
	<section class="Section Section--destaque u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
		
		<div class="Section--destaque-thumbnail u-size14of24 u-lineHeight0">
			<?php 
				

				if ( has_post_thumbnail() ) {
			
				//Imagem Destacada	
				$image_id = get_post_thumbnail_id();
				$sizeThumbs = 'large';
				$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
				$urlThumbnail = $urlThumbnail[0];
				
				} else {
				$urlThumbnail = get_template_directory_uri() . '/assets/images/lessThumbnail.png';
				}

				$data_evento = get_post_meta( get_the_ID(), 'meta_box-date', true ); 

				// Identifica se Há Filtros via GET e cria as srtings de conteúdo para cada situação

				if( !wp_is_mobile() ) {
							
					if( $hasExistFilter['filter'] === true ) {
						$title_lopp = 'OFERTAS DE COMPRA';
						$label_thead = 'Negociar com o Comprador';
						$label_button = 'FALAR COM O COMPRADOR';
						$label_text_add = 'Você não gostou dos preços?';
						$label_button_add = 'ADICIONAR UMA OFERTA DE VENDA';
					} else {
						$title_lopp = 'INGRESSOS DISPONÍVEIS';
						$label_thead = 'Negociar com o Vendedor';
						$label_button = 'FALAR COM O VENDEDOR';
						$label_text_add = 'Você não gostou dos preços?';
						$label_button_add = 'ADICIONAR UMA OFERTA DE COMPRA';
					}
				} else {
					$title_lopp = 'INGRESSOS DISPONÍVEIS';
					$label_thead = 'Negociar';
					$label_button = 'FALAR';
					$label_text_add = 'Você não gostou dos preços?';
					$label_button_add = 'ADICIONAR UMA OFERTA DE COMPRA';	
				}

				
			 ?>

			 <span>
			 <img class="u-maxSize100 u-minWith100" src="<?php echo $urlThumbnail ?>" alt="<?php echo get_the_title(); ?>">
		</div>
		<div class="Section--destaque-content u-size10of24">
			<header class="entry-header Section--header u-positionRelative u-marginHorizontal--inter u-displayBlock u-zIndex9 u-size24of24 u-alignCenter u-paddingVertical--inter--px">	
				<h2 class="entry-title Section--header-title"><?php echo get_the_title(); ?></h2>
			</header><!-- .entry-header -->

			<div class="Meta u-displayFlex u-flexDirectionRow u-flexAlignItemsCenter u-flexJustifyContentCenter u-marginTop--inter--half u-marginBottom--inter u-marginVertical--inter--px">
				<div class="Price u-size12of24 u-alignCenter u-paddingHorizontal--vrt--inter--half--px"><span class="u-positionRelative u-displayInlineBlock u-paddingVertical--inter--half--px"><?php echo $label_valor; ?></span></div>
				<div class="Price Price--offer u-size12of24 u-alignCenter u-paddingHorizontal--vrt--inter--half--px"><?php echo menorPreco( get_the_ID(), $tipo_de_oferta ); ?></div>
			</div>			
			<ul class="u-paddingVertical--inter--px">
				<li class="u-marginHorizontal--inter--half u-paddingVertical--inter--half">
					<h4>DATA:</h4>
					<p>
							<?php
								$date = date_create($data_evento);
								echo date_format($date,"d/m/Y");
							?>			
						</span>
					</p>
				</li>
				<!-- <li class="u-marginHorizontal--inter--half u-paddingVertical--inter--half">
					<h4>INGRESSOS CADASTRADOS:</h4>
					<p>
						<span>30</span> INGRESSOS CADASTRADOS</span>
					</p>
				</li> -->
				<li class="u-marginHorizontal--inter--half u-paddingVertical--inter--half">
					<h4>DESCRIÇÃO GERAL:</h4>
					<p>
						<?php echo get_the_excerpt(); ?>
					</p>
				</li>
			</ul>
			
		</div>
	</section>
	<section class="Section Section--dataBar u-paddingBottom--inter--half u-paddingTop--inter--half">
		<h4><?php echo $title_lopp; ?></h4>
	</section>

	<section class="Section Section--texts">
		
		<div class="Section-subSection Section-subSection--table u-marginHorizontal--inter">
			<table class="Table Table--ingressos" width="100%" cellpadding="0" cellpadding="0">
				<thead>
					<tr>
						<td class="u-paddingHorizontal--vrt--inter--half--px"><h4 class="u-alignCenter">
							<strong><?php if( wp_is_mobile() ) { echo 'Tipos'; } else { echo 'Tipos de Ingresso'; } ?></strong>
						</h4></td>
						<td class="u-paddingHorizontal--vrt--inter--half--px"><h4 class="u-alignCenter"><strong>Valor</strong></h4></td>
						<td class="u-paddingHorizontal--vrt--inter--half--px"><h4 class="u-alignCenter"><strong><?php echo $label_thead; ?></strong></h4></td>
					</tr>
				</thead>
				<tbody>
				<?php 



				if( !empty( $_GET['filter'] ) && isset( $_GET['filter'] ) && $_GET['filter'] == 'sale' ) {

					$tipo_oferta = 2;
				
				} else {
					$tipo_oferta = 1;
				}

					$newsArgs = array( 
		      		'post_type' => 'ingresso',
		      		'meta_query' => array(

		      						'relation' => 'AND',
            					
								    array(
								        'key'   => 'meta_box-id_evento',
								        'value' => get_the_ID(),
								        'compare' => '='
								    ),
								    array(
								        'key'   => 'meta_box-tipo_oferta',
								        'value' => $tipo_oferta,
								        'compare' => '='
								    )
								),
		      		'posts_per_page' => 1000,
		      		'meta_key' => 'meta_box-valor_ingresso',
	           		 'orderby' => 'meta_value_num',
					'order' => 'ASC');


					$newsLoop = new WP_Query( $newsArgs );

					if ( $newsLoop->have_posts() ): while ( $newsLoop->have_posts() ) : $newsLoop->the_post();

						$tipos_ingresso = get_post_meta( get_the_ID(), 'meta_box-tipo_ingresso', true );
						$valor_ingresso = get_post_meta( get_the_ID(), 'meta_box-valor_ingresso', true );

						
						
						if( is_user_logged_in() ) {

							$link_cta = 'javascript:LightboxCall(\'' . get_home_url() . '/user-components?component=autenticado&id=' . get_the_ID() . '\');';
						
						} else {
							if( $hasExistFilter['filter'] === true ) {
								$filter_add = '&filter=sale';
							} else {
								$filter_add = '';
							}

							$link_cta = 'javascript:LightboxCall(\'' . get_home_url() . '/user-components?component=negociar&id=' . get_the_ID() . $filter_add . '\');';
						}
				 ?>				
					<tr>
						<td class="u-paddingHorizontal--vrt--inter--half--px u-alignCenter">
							<span>
								<?php echo tipos_de_ingresso($tipos_ingresso); ?>
							</span>
						</td>
						<td class="u-paddingHorizontal--vrt--inter--half--px u-alignCenter">
							<span>
								R$ <?php echo $valor_ingresso; ?>
							</span>
						</td>
						<td class="u-paddingHorizontal--vrt--inter--half--px u-alignCenter u-displayFlex u-flexAlignItemsCenter u-flexJustifyContentCenter">
							<a href="<?php echo $link_cta; ?>" class="Button Button--border Button--background style1 hover Button--mediumSize u-borderRadius5 is-animating">
								<?php echo $label_button; ?>
							</a>
						</td>
					</tr>
					 <?php endwhile; ?>
					 <?php endif; wp_reset_postdata(); ?>
				</tbody>
			</table>
			<div class="u-displayFlex u-flexDirectionColumn u-positionRelative u-marginTop--inter u-flexAlignItemsCenter u-flexJustifyContentCenter">
				<p class="u-paddingBottom--inter--half">
					<?php echo $label_text_add; ?>
				</p>
				<?php 
					if( is_user_logged_in() ) {

						$link_cta = 'javascript:LightboxCall(\'' . get_home_url() . '/user-components?component=ofertar-preco&id=' . get_the_ID() . '\');';
					
					} else {
						$link_cta = 'javascript:LightboxCall(\'' . get_home_url() . '/user-components?component=login_cadastro&context=oferta-preco\');';
					}
				 ?>
				<a href="<?php echo $link_cta; ?>" class="Button Button--border Button--background u-alignCenter style1 hover Button--largeSize u-borderRadius5 is-animating">
					<?php echo $label_button_add; ?>
				</a>
			</div>
		</div>
		
	</section>


</article><!-- #post-## -->

<?php 
			endwhile; 
			else:
	 ?>
	 <article class="u-positionRelative">
	
	<header class="entry-header Intro--blog-header u-positionRelative u-marginBottom--inter u-displayBlock u-zIndex9 u-size24of24 u-alignCenter u-paddingVertical">	
			<h2 class="entry-title Intro--blog-title">Nenhuma postagem foi encontrada.</h2>
	</header><!-- .entry-header -->
</article>



<?php endif; ?>
<!-- <div class="Relacionados u-paddingTop">
	<?php //get_template_part('template-parts/promocoes/section','promocoes'); ?>
</div> -->
