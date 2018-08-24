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

				/*$promocao_id = get_the_id();
				$promocao_title = get_the_title();

				// MetaBoxes
		      	$recorrencia = get_post_meta( get_the_ID(), 'var_tipo', true );
		      	$data_inicial = get_post_meta( get_the_ID(), 'value_line_1', true );
		      	$data_final = get_post_meta( get_the_ID(), 'value_line_2', true );
		      	$quant_total = get_post_meta( get_the_ID(), 'value_line_3', true );
		      	$quant_gerado = get_post_meta( get_the_ID(), 'value_line_4', true );
		      	$valor_normal = get_post_meta( get_the_ID(), 'value_line_5', true );
		      	$valor_promocional = get_post_meta( get_the_ID(), 'value_line_6', true );
		      	$descricao = get_post_meta( get_the_ID(), 'value_line_7', true );
		      	$regras_gerais = get_post_meta( get_the_ID(), 'value_line_8', true );
		      	
		      	// Tratando "DIAS RESTANTES"
		      	$today = get_the_date('Y-m-d');

			     $data_inicio = new DateTime($today);
				 $data_fim = new DateTime($data_final);
				   // Resgata diferença entre as datas
				 $dateInterval = $data_inicio->diff($data_fim);
				 $dias_rest = $dateInterval->days;



		      

		      	if( $dias_rest > 1 ) {
		      		$dias_restantes = $dias_rest . ' dias';
		      	} elseif( $dias_rest <= 1 ) {
		      		$dias_restantes = '0 dia';	
		      	}

		      	


		      	// Tratando "Percentual de desconto"
		      	$desc = $valor_promocional / $valor_normal * 100 - $valor_normal;
		      	$desco = explode('.', $desc);
		      	$desconto = $desco[0] . '%';

		      	// Tratando "Economia"
		      	$economia = $valor_normal - $valor_promocional;

		      	// Tratando "Quantidade Disponível"
		      	$quant_rest = $quant_total - $quant_gerado;
		      	if( $quant_rest > 0 ) {
		      		$quantidade = $quant_rest;
		      	} else {
		      		$quantidade = 0;
		      	}
		      	*/

				if ( has_post_thumbnail() ) {
			
				//Imagem Destacada	
				$image_id = get_post_thumbnail_id();
				$sizeThumbs = 'large';
				$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
				$urlThumbnail = $urlThumbnail[0];
				
				} else {
				$urlThumbnail = get_template_directory_uri() . '/assets/images/lessThumbnail.png';
				}
			 ?>

			 <img class="u-maxSize100 u-minWith100" src="<?php echo $urlThumbnail ?>" alt="<?php echo get_the_title(); ?>">
		</div>
		<div class="Section--destaque-content u-size10of24">
			<header class="entry-header Section--header u-positionRelative u-marginHorizontal--inter u-displayBlock u-zIndex9 u-size24of24 u-alignCenter u-paddingVertical--inter--px">	
				<h2 class="entry-title Section--header-title"><?php echo get_the_title(); ?></h2>
			</header><!-- .entry-header -->

			<div class="Meta u-displayFlex u-flexDirectionRow u-flexAlignItemsCenter u-flexJustifyContentCenter u-marginTop--inter--half u-marginBottom--inter u-marginVertical--inter--px">
				<div class="Price u-size12of24 u-alignCenter u-paddingHorizontal--vrt--inter--half--px"><span class="u-positionRelative u-displayInlineBlock u-paddingVertical--inter--half--px">A PARTIR DE <?php // echo $valor_normal; ?></span></div>
				<div class="Price Price--offer u-size12of24 u-alignCenter u-paddingHorizontal--vrt--inter--half--px">R$ 100,00<?php // echo $valor_promocional ; ?></div>
			</div>			
			<ul class="u-paddingVertical--inter--px">
				<li class="u-marginHorizontal--inter--half u-paddingVertical--inter--half">
					<h4>DATA:</h4>
					<p>
						<span>29/09/2018</span> - <span>FALTAM <span>30</span> DIAS!</span>
					</p>
				</li>
				<li class="u-marginHorizontal--inter--half u-paddingVertical--inter--half">
					<h4>INGRESSOS CADASTRADOS:</h4>
					<p>
						<span>30</span> INGRESSOS CADASTRADOS</span>
					</p>
				</li>
				<li class="u-marginHorizontal--inter--half u-paddingVertical--inter--half">
					<h4>DESCRIÇÃO GERAL:</h4>
					<p>
						Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI,
					</p>
				</li>
			</ul>
			
		</div>
	</section>
	<section class="Section Section--dataBar u-paddingBottom--inter--half u-paddingTop--inter--half">
		<h4>INGRESSOS DISPONÍVEIS</h4>
	</section>

	<section class="Section Section--texts u-marginVertical--inter--half--px">
		
		<div class="Section-subSection Section-subSection--descricao u-marginHorizontal--inter">
			
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
