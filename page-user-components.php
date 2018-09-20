<?php

/**
 * Template Name: USER COMPONENTS
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */
?>

<?php 

if( isset( $_GET['component']) ) {

	if (!empty($_GET['component'])) {

		$component = $_GET['component'];
		
		if ( !empty($_GET['url']) && isset($_GET['url']) ) {
			
			$url = $_GET['url'];
		} else {
			$url = '';
		}

		if ( !empty($_GET['id']) && isset($_GET['id']) ) {
			
			$id_post = $_GET['id'];
		} else {
			$id_post = '';
		}

		if( is_user_logged_in() ) {
			$user_autenticado = 1;
		} else {
			$user_autenticado = 2;
		}
		// Identifica se Há Filtros via GET e cria as srtings de conteúdo para cada situação
		$hasExistFilter = hasExistFilter();
							
			if( $hasExistFilter['filter'] === true ) {
				$label_button_negociar = 'NEGOCIAR COM O COMPRADOR';
				$tipo_oferta = 'compra';
			} else {
				$label_button_negociar = 'NEGOCIAR COM O VENDEDOR';
				$tipo_oferta = 'venda';
			}

?>
	<!-- Caso o conteúdo seja Login e Cadastro -->
	<?php
		
		if( $component == 'login_cadastro' ) {
	?>

		<div id="modalSystem" class="Section Section--loginCadastro u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter u-paddingHorizontal--inter u-absoluteTopCenter u-sizeFull">
			<?php 
				if (!empty($_GET['context']) && isset($_GET['context'])) {

					if( $_GET['context'] == 'oferta-preco' ){
						$info_header = '<p>Para <strong>prosseguir</strong> você precisa está <strong>cadastrado</strong> e <strong>logado</strong>.</p>';
					} else {
						$info_header = '';
					}	
					?>
					<div class="u-paddingBottom--inter u-alignCenter">
						<?php echo $info_header; ?>
					</div>
					<?php } ?>
			<div class="Section-content u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow u-FlexFustifyContentSpaceBetween u-sizeFull">

				<div class="Section-subSection left u-positionRelative u-size12of24 u-paddingVertical--inter--px">
					<header class="Section-subSection-header u-marginBottom--inter">
						<h4 class="Section-subSection-header-title">
							<em>Eu já sou cadastrado</em><br />
							Quero fazer o login
						</h4>
					</header>
					<div class="Section-subSection-content">
						<?php  echo do_shortcode( '[custom-login-form]', $ignore_html = false ) ?>
					</div>
				</div>

				<div class="Section-subSection right u-positionRelative u-size12of24 u-paddingVertical--inter--px">
					<header class="Section-subSection-header u-marginBottom--inter">
						<h4 class="Section-subSection-header-title">
							<em>Não tenho cadastro</em><br />
							Quero me cadastrar
						</h4>
					</header>
					<div class="Section-subSection-content">
						<p class="Section-subSection-resume u-displayBlock">Cadastre-se para aproveitar todas as nossas promoções.</p>
						<a class="Button Button--border Button--largeSize style1 u-borderRadius5 is-animating hover u-marginTop--inter u-alignCenter u-displayBlock" href="<?php echo get_home_url(); ?>/member-register/" target="_blank">CADASTRE-SE!</a>
					</div>
				</div>
		</div>

		<?php 
			
			} elseif( $component == 'negociar' ) {


		        $ingresso_title = get_the_title( $id_post );
				$post_author_id = get_post_field( 'post_author', $id_post );
				$display_name = get_the_author_meta('display_name', $post_author_id);
				$user_email = get_the_author_meta('user_email', $post_author_id);
				$user_phone = get_the_author_meta('user_phone', $post_author_id);
				$user_address = get_post_meta($id_post, "meta_box-endereco_ingresso", true);

		?>


		<script type="text/javascript">


			jQuery(document).ready(function($) {
				
				$('#negociar').on('submit', function(e) {
					e.preventDefault();

					var $form = $(this);

					$.post($form.attr('action'), $form.serialize(), function(data) {
						//alert('This is data returned from the server ' + data);
						
						 		jQuery.post('<?php echo get_template_directory_uri(); ?>/template-parts/eventos/eventos-negociacao.php', { tipo_oferta: "<?php echo $tipo_oferta; ?>", author_name: "<?php echo $display_name; ?>", author_email: "<?php echo $user_email; ?>", author_phone: "<?php echo $user_phone; ?>", author_address: "<?php echo $user_address; ?>", ingresso: "<?php echo $ingresso_title; ?>" })
						        .done(function(result){
						            jQuery('#modalSystem .Section-content').html(result);
						            //alert('OK');
						        })
						        .fail(function(){
						           alert('Error loading page');
						        })
						
					}, 'json');
				});

			});

		</script>

		<div id="modalSystem" class="Section Section--loginCadastro u-displayFlex u-flexAlignItemsCenter u-paddingHorizontal--inter u-absoluteTopCenter u-sizeFull">
			<div class="Section-content u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow u-FlexFustifyContentSpaceBetween u-sizeFull">

				<div class="Section-subSection u-positionRelative u-sizeFull u-paddingVertical--inter--px">
					<header class="Section-subSection-header u-marginBottom--inter u-alignCenter">
						<h4 class="Section-subSection-header-title">
							Você está prestes a negociar: <br />
							<em><?php echo get_the_title( $id_post ); ?></em>.
						</h4>

					</header>
					<div class="Section-subSection-content">
						<p class="u-alignCenter">Lorem Ipsum desc é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</p>
						<?php  //echo do_shortcode( '[custom-login-form]', $ignore_html = false ) ?>


				


						<form id="negociar" class="Form Form--style1 u-marginTop--inter u-sizeFull"  method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
							
							<input type="hidden" name="meta_box-tipo_operacao" value="post_negociacao" />
							<input type="hidden" name="meta_box-tipo_oferta" id="meta_box-tipo_oferta" value="<?php echo $tipo_oferta; ?>" />

							<input type="hidden" name="id_ingresso" id="id_ingresso" value="<?php echo $id_post; ?>" />
							<input type="hidden" name="meta_box-comprador_autenticado" id="meta_box-comprador_autenticado" value="<?php echo $user_autenticado; ?>" />

							
							
							<input type="hidden" name="action" value="custom_action">

							<fieldset class="Form-fieldset">
								<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow">
									
									<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
										<input class="Form-input Form-input--text u-sizeFull" type="text" name="name" id="name" placeholder="Seu nome" required="required" />
									</div>
								
									<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
										<input class="Form-input Form-input--text u-sizeFull" type="email" id="email" name="email" placeholder="Seu e-mail" required="required" />

									</div>
								</div>
								<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexJustifyContentCenter u-flexSwitchRow">
									

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
										<input id="submitNegociacao" class="Form-input u-displayInlineBlock hover is-animating u-borderRadius5 Form-input--submit Button Button--border Button--largeSize Button--background style1" type="submit" value="<?php echo $label_button_negociar; ?>" />
									</div>

								</div>
							</fieldset>
						</form>
					</div>
				</div>
		</div>

		<?php 
			} elseif( $component == 'autenticado' ) {
		?>

		<?php 
			$ingresso_title = get_the_title( $id_post );
			$post_author_id = get_post_meta($id_post, "meta_box-author_ingresso", true);
			$display_name = get_the_author_meta('display_name', $post_author_id);
			$user_email = get_the_author_meta('user_email', $post_author_id);
			$user_phone = get_the_author_meta('user_phone', $post_author_id);
			$user_address = get_post_meta($id_post, "meta_box-endereco_ingresso", true);
		 ?>

<script type="text/javascript">
		
jQuery(document).ready(function($) {
	
	$('#autenticado').on('submit', function(e) {
		e.preventDefault();

		var $form = $(this);

		$.post($form.attr('action'), $form.serialize(), function(data) {
			//alert('This is data returned from the server ' + data);
			
			 		jQuery.post('<?php echo get_template_directory_uri(); ?>/template-parts/eventos/eventos-negociacao.php', { tipo_oferta: "<?php echo $tipo_oferta; ?>", author_name: "<?php echo $display_name; ?>", author_email: "<?php echo $user_email; ?>", author_phone: "<?php echo $user_phone; ?>", author_address: "<?php echo $user_address; ?>", ingresso: "<?php echo $ingresso_title; ?>" })
			        .done(function(result){
			            jQuery('#modalSystem .Section-content').html(result);
			            //alert('OK');
			        })
			        .fail(function(){
			           alert('Error loading page');
			        })
			
		}, 'json');
	});

});

		</script>

		<div id="modalSystem" class="Section Section--style1 Section--loginCadastro u-displayFlex u-flexAlignItemsCenter u-paddingHorizontal--inter u-absoluteTopCenter u-sizeFull">
			<div class="Section-content u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow u-FlexFustifyContentSpaceBetween u-sizeFull">

				<div class="Section-subSection u-positionRelative u-sizeFull u-paddingVertical--inter--px">
					<header class="Section-subSection-header u-marginBottom--inter u-alignCenter">
						<h3 class="Section-subSection-header-title">
							Você está negociando: <br />
							<em><?php echo get_the_title( $id_post ); ?></em>.
						</h3>

					</header>
					<div class="Section-subSection-content">
						<p class="u-alignCenter">Lorem Ipsum desc é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</p>
						<?php  //echo do_shortcode( '[custom-login-form]', $ignore_html = false ) ?>
						<div class="u-marginTop--inter">


							<form id="autenticado" class="Form Form--style1 u-marginTop--inter u-sizeFull"  method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
								
								<input type="hidden" name="meta_box-tipo_operacao" value="post_negociacao" />
								<input type="hidden" name="meta_box-tipo_oferta" id="meta_box-tipo_oferta" value="<?php echo $tipo_oferta; ?>" />

								<input type="hidden" name="id_ingresso" id="id_ingresso" value="<?php echo $id_post; ?>" />
								<input type="hidden" name="meta_box-comprador_autenticado" id="meta_box-comprador_autenticado" value="1" />
								<input type="hidden" name="meta_box-comprador_ingresso" id="meta_box-comprador_ingresso" value="<?php echo get_current_user_id(); ?>" />
								<input type="hidden" name="action" value="custom_action">

								<fieldset class="Form-fieldset">
									<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexJustifyContentCenter u-flexSwitchRow">
										<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter">
											<input type="checkbox" id="meta_box-return_terms" name="meta_box-return_terms" value="Eu aceito" value="eu-aceito" required="required" style="cursor: pointer;" />
											<label for="meta_box-return_terms" style="cursor: pointer;"><strong>Eu Aceito</strong></label>
										</div>
									</div>
									<div class="Form-row u-displayFlex">

										<div class="Form-coll u-sizeFull u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter">
											<input id="submitNegociacao" class="Form-input u-displayInlineBlock hover is-animating u-borderRadius5 Form-input--submit Button Button--border Button--largeSize Button--background style1" type="submit" value="<?php echo $label_button_negociar; ?>" />
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
		</div>

	<?php 
			} elseif( $component == 'ofertar-preco' ) {

	        $evento_title = get_the_title( $id_post );
			
			$meta_box_tipo_oferta = 2;

			$current_user = wp_get_current_user();
			$display_name = $current_user->display_name;


	?>

		<script type="text/javascript">

			jQuery(document).ready(function($) {
				
				$('#ofertar-preco').on('submit', function(e) {
					e.preventDefault();

					var $form = $(this);

					$.post($form.attr('action'), $form.serialize(), function(data) {
						//alert('This is data returned from the server ' + data);
						
						 		jQuery.post('<?php echo get_template_directory_uri(); ?>/template-parts/eventos/eventos-negociacao.php', { meta_box_tipo_oferta: "<?php echo $meta_box_tipo_oferta; ?>", evento_title: "<?php echo $evento_title; ?>", comprador_name: "<?php echo $display_name; ?>" })
						        .done(function(result){
						            jQuery('#modalSystem .Section-content').html(result);
						            //alert('OK');
						        })
						        .fail(function(){
						           alert('Error loading page');
						        })
						
					}, 'json');
				});

			});

		</script>

		<div id="modalSystem" class="Section Section--loginCadastro u-displayFlex u-flexAlignItemsCenter u-paddingHorizontal--inter u-absoluteTopCenter u-sizeFull">
			<div class="Section-content u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow u-FlexFustifyContentSpaceBetween u-sizeFull">

				<div class="Section-subSection u-positionRelative u-sizeFull u-paddingVertical--inter--px">
					<header class="Section-subSection-header u-marginBottom--inter u-alignCenter">
						<h4 class="Section-subSection-header-title">
							Você está prestes a negociar: <br />
							<em><?php echo get_the_title( $id_post ); ?></em>.
						</h4>

					</header>
					<div class="Section-subSection-content">
						<p class="u-alignCenter">Lorem Ipsum desc é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</p>


				<form id="ofertar-preco" class="Form Form--style1 u-marginTop--inter u-sizeFull"  method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">

							<input type="hidden" name="meta_box-tipo_operacao" value="post_ingresso" />
							<input type="hidden" name="meta_box-tipo_oferta" id="meta_box-tipo_oferta" value="2" />
							
							<input type="hidden" name="meta_box-id_evento" id="meta_box-id_evento" value="<?php echo $id_post; ?>" />

							<input type="hidden" name="meta_box-comprador_autenticado" id="meta_box-comprador_autenticado" value="1" />

							<input type="hidden" name="meta_box-author_ingresso" id="meta_box-author_ingresso" value="<?php echo get_current_user_id(); ?>" />


							<input type="hidden" name="action" value="custom_action">

							<fieldset class="Form-fieldset">

								<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow">
									
									<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
										<label>Tipo de Ingresso</label>
										<select name="meta_box-tipo_ingresso" id="meta_box-tipo_ingresso" class="Form-input Form-input--select" required="required" style="width: 220px;">
						            	<option>Selecione</option>
							                <?php 
							                    $option_values = array(1, 2, 3, 4, 5, 6, 7);

							                    foreach($option_values as $key => $value) {

							                   ?>
							                     <option value="<?php echo $value; ?>"><?php echo tipos_de_ingresso($value); ?></option>

							                <?php } ?>
					            		</select>
					            	</div>
					            </div>

								<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow">
									
									<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
										<label>Valor</label>
										<input class="Form-input Form-input--text u-sizeFull" type="number" name="meta_box-valor_ingresso" id="meta_box-valor_ingresso" placeholder="Quer pagar quanto?" required="required" />

									</div>
								
									<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
										<label>Endereço (Bairro)</label>
										<input class="Form-input Form-input--text u-sizeFull" type="text" id="meta_box-endereco_ingresso" name="meta_box-endereco_ingresso" placeholder="Seu bairro" />

									</div>
								</div>
								<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexJustifyContentCenter">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter">
										<p>Por favor, <strong>leia</strong> e <strong>aceite</strong> os nossos <strong><a href="<?php get_home_url(); ?>/termos-de-uso/" target="_blank">termos de uso</a></strong> para prosseguir com a negociação. </p>
									</div>

									<div class="Form-coll u-sizeFull u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter u-flexAlignItemsCenter u-displayBlock">
										<input type="checkbox" id="meta_box-return_terms" name="meta_box-return_terms" value="eu-aceito" value="eu-aceito" required="required" style="cursor: pointer;" />
										<label for="meta_box-return_terms" style="cursor: pointer;"><strong>Eu Aceito</strong></label>
									</div>
								</div>
								<div class="Form-row u-displayFlex">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter">
										<input id="submitNegociacao" class="Form-input u-displayInlineBlock hover is-animating u-borderRadius5 Form-input--submit Button Button--border Button--largeSize Button--background style1" type="submit" value="OFERTAR PREÇO" />
									</div>

								</div>
							</fieldset>
						</form>

					</div>
				</div>
		</div>
	
	<?php 
			} elseif( $component == 'ofertar-ingresso' ) {

	        $evento_title = get_the_title( $id_post );
			
			$meta_box_tipo_oferta = 1;

			$current_user = wp_get_current_user();
			$display_name = $current_user->display_name;


	?>

		<script type="text/javascript">

			jQuery(document).ready(function($) {
				
				$('#ofertar-preco').on('submit', function(e) {
					e.preventDefault();

					var $form = $(this);

					$.post($form.attr('action'), $form.serialize(), function(data) {
						//alert('This is data returned from the server ' + data);
						
						 		jQuery.post('<?php echo get_template_directory_uri(); ?>/template-parts/eventos/eventos-negociacao.php', { meta_box_tipo_oferta: "<?php echo $meta_box_tipo_oferta; ?>", evento_title: "<?php echo $evento_title; ?>", comprador_name: "<?php echo $display_name; ?>" })
						        .done(function(result){
						            jQuery('#modalSystem .Section-content').html(result);
						            //alert('OK');
						        })
						        .fail(function(){
						           alert('Error loading page');
						        })
						
					}, 'json');
				});

			});

		</script>

		<div id="modalSystem" class="Section Section--loginCadastro u-displayFlex u-flexAlignItemsCenter u-paddingHorizontal--inter u-absoluteTopCenter u-sizeFull">
			<div class="Section-content u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow u-FlexFustifyContentSpaceBetween u-sizeFull">

				<div class="Section-subSection u-positionRelative u-sizeFull u-paddingVertical--inter--px">
					<header class="Section-subSection-header u-marginBottom--inter u-alignCenter">
						<h4 class="Section-subSection-header-title">
							Você está prestes a negociar: <br />
							<em><?php echo get_the_title( $id_post ); ?></em>.
						</h4>

					</header>
					<div class="Section-subSection-content">
						<p class="u-alignCenter">Lorem Ipsum desc é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</p>


				<form id="ofertar-preco" class="Form Form--style1 u-marginTop--inter u-sizeFull"  method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
							
							<input type="hidden" name="meta_box-tipo_operacao" value="post_ingresso" />

							<input type="hidden" name="meta_box-tipo_oferta" id="meta_box-tipo_oferta" value="1" />

							<input type="hidden" name="meta_box-id_evento" id="meta_box-id_evento" value="<?php echo $id_post; ?>" />

							<input type="hidden" name="meta_box-comprador_autenticado" id="meta_box-comprador_autenticado" value="1" />

							<input type="hidden" name="meta_box-author_ingresso" id="meta_box-author_ingresso" value="<?php echo get_current_user_id(); ?>" />

							

							<input type="hidden" name="action" value="custom_action">

							<fieldset class="Form-fieldset">

								<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow">
									
									<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
										<label>Tipo de Ingresso</label>
										<select name="meta_box-tipo_ingresso" id="meta_box-tipo_ingresso" class="Form-input Form-input--select" required="required" style="width: 220px;">
						            	<option>Selecione</option>
							                <?php 
							                    $option_values = array(1, 2, 3, 4, 5, 6, 7);

							                    foreach($option_values as $key => $value) {

							                   ?>
							                     <option value="<?php echo $value; ?>"><?php echo tipos_de_ingresso($value); ?></option>

							                <?php } ?>
					            		</select>
					            	</div>
					            </div>

								<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow">
									
									<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
										<label>Valor</label>
										<input class="Form-input Form-input--text u-sizeFull" type="number" name="meta_box-valor_ingresso" id="meta_box-valor_ingresso" placeholder="Valor do Ingresso" required="required" />

									</div>
								
									<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
										<label>Endereço (Bairro)</label>
										<input class="Form-input Form-input--text u-sizeFull" type="text" id="meta_box-endereco_ingresso" name="meta_box-endereco_ingresso" placeholder="Seu bairro" />

									</div>
								</div>
								<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexJustifyContentCenter">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter">
										<p>Por favor, <strong>leia</strong> e <strong>aceite</strong> os nossos <strong><a href="<?php get_home_url(); ?>/termos-de-uso/" target="_blank">termos de uso</a></strong> para prosseguir com a negociação. </p>
									</div>

									<div class="Form-coll u-sizeFull u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter u-flexAlignItemsCenter u-displayBlock">
										<input type="checkbox" id="meta_box-return_terms" name="meta_box-return_terms" value="eu-aceito" value="eu-aceito" required="required" style="cursor: pointer;" />
										<label for="meta_box-return_terms" style="cursor: pointer;"><strong>Eu Aceito</strong></label>
									</div>
								</div>
								<div class="Form-row u-displayFlex">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter">
										<input id="submitNegociacao" class="Form-input u-displayInlineBlock hover is-animating u-borderRadius5 Form-input--submit Button Button--border Button--largeSize Button--background style1" type="submit" value="OFERTAR INGRESSO" />
									</div>

								</div>
							</fieldset>
						</form>

					</div>
				</div>
		</div>
	
	<?php 
			} elseif( $component == 'cadastrar-evento' ) {

	        $evento_title = get_the_title( $id_post );
			
			$meta_box_tipo_oferta = 1;

			$current_user = wp_get_current_user();
			$display_name = $current_user->display_name;


	?>

		<script type="text/javascript">

			jQuery(document).ready(function($) {
				
				$('#ofertar-preco').on('submit', function(e) {
					e.preventDefault();

					var $form = $(this);

					$.post($form.attr('action'), $form.serialize(), function(data) {
						//alert('This is data returned from the server ' + data);
						
						 		jQuery.post('<?php echo get_template_directory_uri(); ?>/template-parts/eventos/eventos-negociacao.php', { meta_box_tipo_oferta: "<?php echo $meta_box_tipo_oferta; ?>", evento_title: "<?php echo $evento_title; ?>", comprador_name: "<?php echo $display_name; ?>" })
						        .done(function(result){
						            jQuery('#modalSystem .Section-content').html(result);
						            //alert('OK');
						        })
						        .fail(function(){
						           alert('Error loading page');
						        })
						
					}, 'json');
				});

			});

		</script>

		<div id="modalSystem" class="Section Section--loginCadastro u-displayFlex u-flexAlignItemsCenter u-paddingHorizontal--inter u-absoluteTopCenter u-sizeFull">
			<div class="Section-content u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow u-FlexFustifyContentSpaceBetween u-sizeFull">

				<div class="Section-subSection u-positionRelative u-sizeFull u-paddingVertical--inter--px">
					<header class="Section-subSection-header u-marginBottom--inter u-alignCenter">
						<h4 class="Section-subSection-header-title">
							Você está prestes a negociar: <br />
							<em><?php echo get_the_title( $id_post ); ?></em>.
						</h4>

					</header>
					<div class="Section-subSection-content">
						<p class="u-alignCenter">Lorem Ipsum desc é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</p>


				<form id="ofertar-preco" class="Form Form--style1 u-marginTop--inter u-sizeFull"  method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
							
							<input type="hidden" name="meta_box-tipo_operacao" value="post_ingresso" />

							<input type="hidden" name="meta_box-tipo_oferta" id="meta_box-tipo_oferta" value="1" />

							<input type="hidden" name="meta_box-id_evento" id="meta_box-id_evento" value="<?php echo $id_post; ?>" />

							<input type="hidden" name="meta_box-comprador_autenticado" id="meta_box-comprador_autenticado" value="1" />

							<input type="hidden" name="meta_box-author_ingresso" id="meta_box-author_ingresso" value="<?php echo get_current_user_id(); ?>" />

							

							<input type="hidden" name="action" value="custom_action">

							<fieldset class="Form-fieldset">

								<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow">
									
									<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
										<label>Tipo de Ingresso</label>
										<select name="meta_box-tipo_ingresso" id="meta_box-tipo_ingresso" class="Form-input Form-input--select" required="required" style="width: 220px;">
						            	<option>Selecione</option>
							                <?php 
							                    $option_values = array(1, 2, 3, 4, 5, 6, 7);

							                    foreach($option_values as $key => $value) {

							                   ?>
							                     <option value="<?php echo $value; ?>"><?php echo tipos_de_ingresso($value); ?></option>

							                <?php } ?>
					            		</select>
					            	</div>
					            </div>

								<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexSwitchRow">
									
									<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
										<label>Valor</label>
										<input class="Form-input Form-input--text u-sizeFull" type="number" name="meta_box-valor_ingresso" id="meta_box-valor_ingresso" placeholder="Valor do Ingresso" required="required" />

									</div>
								
									<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px">
										<label>Endereço (Bairro)</label>
										<input class="Form-input Form-input--text u-sizeFull" type="text" id="meta_box-endereco_ingresso" name="meta_box-endereco_ingresso" placeholder="Seu bairro" />

									</div>
								</div>
								<div class="Form-row u-displayFlex u-sizeFull u-flexDirectionColumn u-flexJustifyContentCenter">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter">
										<p>Por favor, <strong>leia</strong> e <strong>aceite</strong> os nossos <strong><a href="<?php get_home_url(); ?>/termos-de-uso/" target="_blank">termos de uso</a></strong> para prosseguir com a negociação. </p>
									</div>

									<div class="Form-coll u-sizeFull u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter u-flexAlignItemsCenter u-displayBlock">
										<input type="checkbox" id="meta_box-return_terms" name="meta_box-return_terms" value="eu-aceito" value="eu-aceito" required="required" style="cursor: pointer;" />
										<label for="meta_box-return_terms" style="cursor: pointer;"><strong>Eu Aceito</strong></label>
									</div>
								</div>
								<div class="Form-row u-displayFlex">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter">
										<input id="submitNegociacao" class="Form-input u-displayInlineBlock hover is-animating u-borderRadius5 Form-input--submit Button Button--border Button--largeSize Button--background style1" type="submit" value="OFERTAR INGRESSO" />
									</div>

								</div>
							</fieldset>
						</form>

					</div>
				</div>
		</div>
	
	<!-- Futuras outras opções -->

<?php } ?>


	<?php

	}

}

 ?>

<div class="">

</div>

