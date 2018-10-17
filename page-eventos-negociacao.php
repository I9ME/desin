<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $id_ingresso = $_POST['id_ingresso'];
 ?>

 <div class="Section-subSection u-positionRelative u-sizeFull u-paddingVertical--inter--px">
					<header class="Section-subSection-header u-marginBottom--inter u-alignCenter">
						<h4 class="Section-subSection-header-title">
							Você está negociando:<br />
							<?php echo  $id_ingresso;  ?> | <?php echo get_home_url(); ?> | <em><?php echo get_the_title( $id_ingresso ); ?></em>.
						</h4>

					</header>

					<div class="Section-subSection-content">
						<p class="u-alignCenter">Lorem Ipsum desc é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</p>
						<?php  //echo do_shortcode( '[custom-login-form]', $ignore_html = false ) ?>
						<div class="u-marginTop--inter">
							<?php 
								$post_author_id = get_post_field( 'post_author', $id_ingresso );
								$display_name = get_the_author_meta('display_name', $post_author_id);
								$user_phone = get_the_author_meta('user_phone', $post_author_id);
								$user_email = get_the_author_meta('user_email', $post_author_id);
								$user_address = get_the_author_meta('user_address', $post_author_id);
							 ?>
							<h4 class="Section-header-title Section-header-title--beforeTitleLine u-paddingBottom--inter--half u-alignCenter u-marginBottom--inter--half"><strong>Dados do Vendedor</strong></h4>
							<table width="100%">
								<tbody>
									<tr>
										<td><strong>VENDEDOR</strong></td>
										<td><?php echo $display_name; ?></td>
									</tr>
									<tr>
										<td><strong>CELULAR</strong></td>
										<td><?php echo $user_phone; ?></td>
									</tr>
									<tr>
										<td><strong>E-MAIL</strong></td>
										<td><?php echo $user_email; ?></td>
									</tr>
									<tr>
										<td><strong>BAIRRO</strong></td>
										<td><?php echo $user_address; ?></td>
									</tr>

								</tbody>
							</table>
							<div class="u-positionRelative u-displayBlock u-alignCenter">
								<a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo $user_phone; ?>&text=Olá! Eu me interessei pelo seu anúncio no DESINGRESSANDO.COM" class="Form-input u-marginTop--inter u-displayInlineBlock hover is-animating u-borderRadius5 Form-input--submit Button Button--border Button--largeSize Button--background style1">
									CHAME O VENDEDOR NO WHATSAPP
								</a>
							</div>
						</div>
					</div>
				</div>


