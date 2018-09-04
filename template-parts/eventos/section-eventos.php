<?php 
	// Nome da Cidade Escolhida
	$the_slug = $_SESSION['city'];
	$args = array(
	  'name'        => $the_slug,
	  'post_type'   => 'cidade',
	  'post_status' => 'publish',
	  'numberposts' => 1
	);
	$my_posts = get_posts($args);
	if( $my_posts ) :
	  $title_city = $my_posts[0]->post_title;
	endif;
 ?>
<section class="Section Section--style1 Section--promocoes u-paddingTop u-paddingBottom--inter">
	<div class="u-maxSize--container u-alignCenterBox u-alignCenter"><!-- Max Size Container -->
		<header class="Section-header Section-header-beforeTitleLine u-marginBottom--inter u-size16of24 u-alignCenterBox u-paddingVertical">
			<h2 class="Section-header-title Section-header-title--beforeTitleLine u-alignCenter u-paddingBottom--inter--half u-marginBottom--inter--half"><strong>COMPRAR INGRESSOS EM <?php echo strtoupper( $title_city ); ?></strong></h2>
			<?php $current_url="//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
			<form  method="get" action="<?php echo $current_url; ?>">
			<select name="city" id="city" onchange='this.form.submit()'>
				<?php 
					$newsArgs = array( 'post_type' => 'cidade', 'posts_per_page' => 12, 'orderby' => 'id', 'order' => 'ASC');
					$postLoop = get_posts( $newsArgs );

					if( $postLoop ) {

					foreach( $postLoop as $post ) {
				 ?>
				 
				 	<option value="<?php echo $post->post_name ?>" <?php if( $post->post_name == $_SESSION['city'] ) { echo 'selected'; } ?>><?php echo $post->post_title; ?></option>
				 
				 <?php } } ?>

					 
			</select>
		</form>
			


			<!-- <h3 class="Section-header-subtitle u-alignCenter">Subtitulo exemplo lorem ipsum dolor sit amet</h3> -->
		</header>
		<?php get_template_part('template-parts/eventos/section-eventos','loop'); ?>

</section>