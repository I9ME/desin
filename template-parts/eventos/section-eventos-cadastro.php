<style type="text/css">
	.thank_you{
		display: none;		
	}
</style>

<script type="text/javascript">
		
jQuery(document).ready(function($) {
	
	$('#cadastro-evento').on('submit', function(e) {
		e.preventDefault();

		var $form = $(this);

		$.post($form.attr('action'), $form.serialize(), function(data) {
			//alert('This is data returned from the server ' + data);
			
			 		$.post('<?php echo get_template_directory_uri(); ?>/template-parts/eventos/eventos-thankyou.php', { value_1: "VALOR 1" })
			        .done(function(result){
			        	$('.Form-container').fadeOut();
			        	$('.thank_you').show();
			            $('.thank_you').html(result);
			            //alert('OK');
			        })
			        .fail(function(){
			           alert('Error loading page');
			        })
			
		}, 'json');
	});

});

		</script>

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
	
	<section class="Section Section--destaque u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter u-flexSwitchRow">
		
		<div class="Section--destaque-thumbnail u-size14of24 u-lineHeight0">

			<div class="Section--destaque-content u-sizeFull">
				<header class="entry-header Section--header u-positionRelative u-marginHorizontal--inter u-displayBlock u-zIndex9 u-size24of24 u-alignCenter u-paddingVertical--inter--px">	
					<h2 class="entry-title Section--header-title"><?php echo get_the_title(); ?></h2>
				</header><!-- .entry-header -->
			</div>

			<div class="Form-container">

				<form id="cadastro-evento" class="Form Form--style1 u-marginTop--inter u-sizeFull"  method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">	
					<input type="hidden" name="meta_box-tipo_operacao" value="post_evento" />
					<input type="hidden" name="meta_box-tipo_evento" value="1" />
					<input type="hidden" name="meta_box-status_evento" value="4" />
					<input type="hidden" name="action" value="custom_action">

					<fieldset class="Form-fieldset">

						<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow u-flexJustifyContentCenter">
							
							<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter">
								<select id="meta_box-cidade_evento" class="Form-input Form-input--select u-sizeFull" name="meta_box-cidade_evento" required="required">
					    				<option>Selecione a Cidade</option>
									<?php 
										$args = array( 'post_type' => 'cidade', 'order' => 'ASC');
										
										//$newsLoop = new WP_Query( $newsArgs );

										$posts = get_posts( $args );
										
										foreach( $posts as $post ) : setup_postdata( $post );
											
											?>
									        <option value="<?php echo $post->ID; ?>">
									        	<?php echo $post->post_title; ?>  
											</option>

								 
								       <?php 
								       wp_reset_postdata(); endforeach;
								       ?>


								</select>
							</div>
						</div>

						<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow">
							
							<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter">
								<input class="Form-input Form-input--text u-sizeFull" name="titulo_evento" placeholder="Título do Evento" type="text" required="required" />
								</div>
								<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
									<input class="Form-input Form-input--text u-sizeFull" name="meta_box-date" type="date" required="required" />
								</div>
							</div>

						

						<h4 class="u-displayBlock u-marginBottom--inter--half u-marginTop--inter">Aceita meia Entrada?</h4>
						<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow">
						
							<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
								
								<p class="u-displayBlock">
									<input name="meta_box-ingresso_meia" type="radio" value="1" checked="" />
						    		<label for="meta_box-ingresso_meia">Sim</label>
					    		</p>
					    		<p class="u-displayBlock">
						    		<input name="meta_box-ingresso_meia" type="radio" value="2" />
						    		<label for="meta_box-ingresso_meia">Não</label>
						    	</p>
							</div>
						</div>

						<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow">

							<?php if( is_user_logged_in() ) {  ?>
								<input type="hidden" name="meta_box-usuario_autenticado" value="1" />
								<input type="hidden" name="meta_box-usuario_evento" value="<?php echo get_current_user_id(); ?>" />
							<?php } else {  ?>
								<input type="hidden" name="meta_box-usuario_autenticado" value="2" />
								<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
									<input class="Form-input Form-input--text u-sizeFull" type="text" name="name" id="name" placeholder="Seu nome" required="required" />
								</div>						
						
								<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
									<input class="Form-input Form-input--text u-sizeFull" type="email" id="email" name="email" placeholder="Seu e-mail" required="required" />

								</div>
							<?php } ?>
						</div>
						<h4 class="u-displayBlock u-marginBottom--inter--half u-marginTop--inter">Tipos de Ingresso</h4>
						<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow">	
							<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
								<input type="checkbox" name="masculino" id="masculino" value="yes" />
								<label for="Masculino">Masculino</label>
							</div>
							<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
								<input type="checkbox" name="feminino" id="feminino" value="yes" />
								<label for="feminino">Feminino</label>
							</div>
						</div>
						<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow">
							<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
								 <input type="checkbox" name="pista" id="pista" value="yes" />
								 <label for="pista">Pista</label>
							</div>
							<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
								<input type="checkbox" name="front" id="front" value="yes" />
								<label for="front">Front</label>
							</div>
						</div>
						<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow">
							<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
								<input type="checkbox" name="vip" id="vip" value="yes" />
								<label for="vip">Vip</label>
							</div>
							<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
								<input type="checkbox" name="camarote" id="camarote" value="yes" />
								<label for="camarote">Camarote</label>
							</div>
						</div>
						<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow">
							<div class="Form-coll u-sizeFull u-marginBottom--inter--half u-paddingVertical--inter--half--px">
								<input type="checkbox" name="geral" id="geral" value="yes" />
								<label for="geral">Geral (ingressos sem distinção de lugar ou gênero. ex: abadá, ...)</label>
							</div>
						</div>
						

							<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexJustifyContentCenter u-flexSwitchRow u-marginTop--inter">
							

							<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn">
								<div class="Form-coll u-sizeFull u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter">
									<p>Por favor, <strong>leia</strong> e <strong>aceite</strong> os nossos <strong><a href="<?php get_home_url(); ?>/termos-de-uso/" target="_blank">termos de uso</a></strong> para prosseguir com a negociação. </p>
								</div>
								<div class="Form-coll u-sizeFull u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter">
									<input type="checkbox" id="meta_box-return_terms" name="meta_box-return_terms" value="Eu aceito" value="eu-aceito" required="required" style="cursor: pointer;" />
									<label for="meta_box-return_terms" style="cursor: pointer;"><strong>Eu Aceito</strong></label>
								</div>
						</div>

						</div>
						<div class="Form-row u-displayFlex">
							<div class="Form-coll u-sizeFull u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter">
								<input id="submitNegociacao" class="Form-input u-displayInlineBlock hover is-animating u-borderRadius5 Form-input--submit Button Button--border Button--largeSize Button--background style1" type="submit" value="SUBMETER CADASTRO" />
							</div>

						</div>

						
						<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexJustifyContentCenter u-flexSwitchRow">
					</fieldset>
				</form>
			</div>
			<div class="thank_you u-positionRelative u-sizeFull u-paddingHorizontal--vrt"></div>

		</div>
	</section>
</article>