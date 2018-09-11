<?php

if ( !empty( $_POST['meta_box_tipo_oferta'] ) && isset( $_POST['meta_box_tipo_oferta'] ) ){

	$meta_box_tipo_oferta = $_POST['meta_box_tipo_oferta'];
	$evento_title = $_POST['evento_title'];
	$comprador_name = $_POST['comprador_name'];
	$ingresso_title = 'Você está negociando um ingresso do evento:<br />' . $evento_title;

	?>

	<div class="Section-subSection u-positionRelative u-sizeFull u-paddingVertical--inter--px">
					<header class="Section-subSection-header u-marginBottom--inter u-alignCenter">
						<h4 class="Section-subSection-header-title">
							<?php echo $ingresso_title; ?>.
						</h4>

					</header>

					<div class="Section-subSection-content">
						<p class="u-alignCenter">Lorem Ipsum desc é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</p>
						<p class="u-alignCenter">Obrigado, <strong><?php echo $comprador_name; ?></strong>.
						<div class="u-marginTop--inter">
							<!-- <h4 class="Section-header-title Section-header-title--beforeTitleLine u-paddingBottom--inter--half u-alignCenter u-marginBottom--inter--half"><strong>Dados do Vendedor</strong></h4> -->
							<!-- <table width="100%">
								<tbody>
									<tr>
										<td><strong>VENDEDOR</strong></td>
										<td><?php // echo $name; ?></td>
									</tr>
									<tr>
										<td><strong>CELULAR</strong></td>
										<td><?php // echo $phone; ?></td>
									</tr>
									<tr>
										<td><strong>E-MAIL</strong></td>
										<td><?php //  echo $email; ?></td>
									</tr>
									<tr>
										<td><strong>BAIRRO</strong></td>
										<td><?php // echo $endereco; ?></td>
									</tr>

								</tbody>
							</table> -->
							<!-- <div class="u-positionRelative u-displayBlock u-alignCenter">
								<a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php // echo $phone; ?>&text=Olá! Eu me interessei pelo seu anúncio no DESINGRESSANDO.COM" class="Form-input u-marginTop--inter u-displayInlineBlock hover is-animating u-borderRadius5 Form-input--submit Button Button--border Button--largeSize Button--background style1">
									CHAME O VENDEDOR NO WHATSAPP
								</a>
							</div> -->
						</div>
					</div>
				</div>

<?php

	} else {

	 $name = $_POST['vendedor_name'];
	 $email = $_POST['vendedor_email'];
	 $phone = $_POST['vendedor_phone'];
	 $endereco = $_POST['vendedor_address'];
	 $ingresso = $_POST['ingresso'];

 ?>

 <div class="Section-subSection u-positionRelative u-sizeFull u-paddingVertical--inter--px">
					<header class="Section-subSection-header u-marginBottom--inter u-alignCenter">
						<h4 class="Section-subSection-header-title">
							Você está negociando:<br />
							<?php echo $ingresso; ?></em>.
						</h4>

					</header>

					<div class="Section-subSection-content">
						<p class="u-alignCenter">Lorem Ipsum desc é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</p>
						<?php  //echo do_shortcode( '[custom-login-form]', $ignore_html = false ) ?>
						<div class="u-marginTop--inter">
							<h4 class="Section-header-title Section-header-title--beforeTitleLine u-paddingBottom--inter--half u-alignCenter u-marginBottom--inter--half"><strong>Dados do Vendedor</strong></h4>
							<table width="100%">
								<tbody>
									<tr>
										<td><strong>VENDEDOR</strong></td>
										<td><?php echo $name; ?></td>
									</tr>
									<tr>
										<td><strong>CELULAR</strong></td>
										<td><?php echo $phone; ?></td>
									</tr>
									<tr>
										<td><strong>E-MAIL</strong></td>
										<td><?php  echo $email; ?></td>
									</tr>
									<tr>
										<td><strong>BAIRRO</strong></td>
										<td><?php echo $endereco; ?></td>
									</tr>

								</tbody>
							</table>
							<div class="u-positionRelative u-displayBlock u-alignCenter">
								<a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo $phone; ?>&text=Olá! Eu me interessei pelo seu anúncio no DESINGRESSANDO.COM" class="Form-input u-marginTop--inter u-displayInlineBlock hover is-animating u-borderRadius5 Form-input--submit Button Button--border Button--largeSize Button--background style1">
									CHAME O VENDEDOR NO WHATSAPP
								</a>
							</div>
						</div>
					</div>
				</div>
<?php } ?>

