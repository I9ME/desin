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
			$comprador_ingresso_aut = 1;
		} else {
			$comprador_ingresso_aut = 2;
		}
?>
	<!-- Caso o conteúdo seja Login e Cadastro -->
	<?php
		
		if( $component == 'login_cadastro' ) {
	?>

		<div id="modalSystem" class="Section Section--loginCadastro u-displayFlex u-flexAlignItemsCenter u-paddingHorizontal--inter u-absoluteTopCenter u-sizeFull">
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
						<!-- <form class="Form Form--style1">
							<fieldset class="Form-fieldset">
								<div class="Form-row u-displayFlex">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half">
										<input class="Form-input Form-input--text u-sizeFull" type="text" name="username" placeholder="Seu nome de usuário ou e-mail" />
									</div>
								</div>
								<div class="Form-row u-displayFlex">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half">
										<input class="Form-input Form-input--text u-sizeFull" type="password" name="password" placeholder="Sua senha" />
									</div>
								</div>
								<div class="Form-row u-displayFlex">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half">
										<input class="Form-input Form-input--submit u-sizeFull" type="submit" value="LOGAR" />
									</div>
								</div>
							</fieldset>
						</form> -->
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
						<?php // echo do_shortcode( '[custom-register-form]', $ignore_html = false ) ?>
						<!-- <form class="Form Form--style1">
							<fieldset class="Form-fieldset">
								<div class="Form-row u-displayFlex">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half">
										<input class="Form-input Form-input--text u-sizeFull" type="text" name="username" placeholder="Seu nome de usuário ou e-mail" />
									</div>
								</div>
								<div class="Form-row u-displayFlex">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half">
										<input class="Form-input Form-input--text u-sizeFull" type="password" name="password" placeholder="Sua senha" />
									</div>
								</div>
								<div class="Form-row u-displayFlex">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half">
										<input class="Form-input Form-input--submit u-sizeFull" type="submit" value="LOGAR" />
									</div>
								</div>
							</fieldset>
						</form> -->
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
		$user_address = get_the_author_meta('user_address', $post_author_id);


		?>


		<script type="text/javascript">
			/*jQuery('#negociar').submit(function(event){
			    var data = jQuery(this).serialize();
			    jQuery.post('<?php // echo get_template_directory_uri(); ?>/template-parts/eventos/eventos-negociacao.php', data)
			        .done(function(result){
			            jQuery('.Section-subSection-content').html(result);
			            //alert('OK');
			        })
			        .fail(function(){
			           alert('Error loading page');
			        })
			    return false;
			});*/



jQuery(document).ready(function($) {
	
	$('#negociar').on('submit', function(e) {
		e.preventDefault();

		var $form = $(this);

		$.post($form.attr('action'), $form.serialize(), function(data) {
			//alert('This is data returned from the server ' + data);
			
			 		jQuery.post('<?php echo get_template_directory_uri(); ?>/template-parts/eventos/eventos-negociacao.php', { vendedor_name: "<?php echo $display_name; ?>", vendedor_email: "<?php echo $user_email; ?>", vendedor_phone: "<?php echo $user_phone; ?>", vendedor_address: "<?php echo $user_address; ?>", ingresso: "<?php echo $ingresso_title; ?>" })
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
							
							<input type="hidden" name="id_ingresso" id="id_ingresso" value="<?php echo $id_post; ?>" />
							<input type="hidden" name="meta_box-comprador_autenticado" id="meta_box-comprador_autenticado" value="<?php echo $comprador_ingresso_aut; ?>" />
							
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
									<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignLeft">
										<p>Por favor, <strong>leia</strong> e <strong>aceite</strong> os nossos <strong><a href="<?php get_home_url(); ?>/termos-de-uso/" target="_blank">termos de uso</a></strong> para prosseguir com a negociação. </p>
									</div>

									<div class="Form-coll u-size12of24 u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignLeft u-flexAlignItemsCenter u-displayFlex">
										<input type="checkbox" id="meta_box-return_terms" name="meta_box-return_terms" value="eu-aceito" value="eu-aceito" required="required" style="cursor: pointer;" />
										<label for="meta_box-return_terms" style="cursor: pointer;"><strong>Eu Aceito</strong></label>
									</div>
								</div>
								<div class="Form-row u-displayFlex">
									<div class="Form-coll u-sizeFull u-marginBottom--inter--half u-paddingVertical--inter--half--px u-alignCenter">
										<input id="submitNegociacao" class="Form-input u-displayInlineBlock hover is-animating u-borderRadius5 Form-input--submit Button Button--border Button--largeSize Button--background style1" type="submit" value="NEGOCIAR COM VENDEDOR" />
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
			$post_author_id = get_post_field( 'post_author', $id_post );
			$display_name = get_the_author_meta('display_name', $post_author_id);
			$user_email = get_the_author_meta('user_email', $post_author_id);
			$user_phone = get_the_author_meta('user_phone', $post_author_id);
			$user_address = get_the_author_meta('user_address', $post_author_id);
		 ?>

<script type="text/javascript">
		
jQuery(document).ready(function($) {
	
	$('#autenticado').on('submit', function(e) {
		e.preventDefault();

		var $form = $(this);

		$.post($form.attr('action'), $form.serialize(), function(data) {
			//alert('This is data returned from the server ' + data);
			
			 		jQuery.post('<?php echo get_template_directory_uri(); ?>/template-parts/eventos/eventos-negociacao.php', { vendedor_name: "<?php echo $display_name; ?>", vendedor_email: "<?php echo $user_email; ?>", vendedor_phone: "<?php echo $user_phone; ?>", vendedor_address: "<?php echo $user_address; ?>", ingresso: "<?php echo $ingresso_title; ?>" })
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
							
							<input type="hidden" name="id_ingresso" id="id_ingresso" value="<?php echo $id_post; ?>" />
							<input type="hidden" name="meta_box-comprador_autenticado" id="meta_box-comprador_autenticado" value="<?php echo $comprador_ingresso_aut; ?>" />
							<input type="hidden" name="meta-box-comprador_ingresso" id="meta-box-comprador_ingresso" value="<?php echo get_current_user_id(); ?>" />
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
										<input id="submitNegociacao" class="Form-input u-displayInlineBlock hover is-animating u-borderRadius5 Form-input--submit Button Button--border Button--largeSize Button--background style1" type="submit" value="NEGOCIAR COM VENDEDOR" />
									</div>

								</div>
							</fieldset>
						</form>
						</div>
					</div>
				</div>
		</div>

<?php } else { ?>
	
	<!-- Futuras outras opções -->

<?php } ?>

	<?php

	}

}

 ?>

<div class="">

</div>

