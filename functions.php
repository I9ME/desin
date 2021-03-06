<?php
/**
 * Skeleton funções e definições
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage skeleton
 * @since 1.0
 */


/**
 * Funções e Configurações do Tema
 */



function skeleton_setup() {

	

	load_theme_textdomain( 'desin' );


	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Ativando o recurso de Imagem Destacada
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );


	// Habilitando o recurso de Logotipo Customizável.

	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

/*	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
*/
	/*
	 * Editor de Estilo
 	 */
	//add_editor_style( array( 'assets/css/editor-style.css', skeleton_fonts_url() ) );

}

add_action( 'after_setup_theme', 'skeleton_setup' );



/**
 * Enqueue scripts and styles.
 */
function skeleton_scripts() {

	$skeleton_version = '1.0';

	// Add custom fonts, used in the main stylesheet.

	// Theme stylesheet.
	wp_enqueue_style('css-main', get_template_directory_uri() . '/assets/css/main.min.css', array(), $skeleton_version, 'all');
	wp_enqueue_script( 'js-main', get_template_directory_uri() . '/assets/js/main.min.js', array(), $skeleton_version, true );


?>

<?php

}
add_action( 'wp_enqueue_scripts', 'skeleton_scripts' );



// Add scripts to wp_footer()
function theme_footer_script() {

//SVG

echo'<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="iconMenu" viewBox="0 0 24 24">
<path d="M21 11h-18c-0.6 0-1 0.4-1 1s0.4 1 1 1h18c0.6 0 1-0.4 1-1s-0.4-1-1-1z"></path>
<path d="M3 7h18c0.6 0 1-0.4 1-1s-0.4-1-1-1h-18c-0.6 0-1 0.4-1 1s0.4 1 1 1z"></path>
<path d="M21 17h-18c-0.6 0-1 0.4-1 1s0.4 1 1 1h18c0.6 0 1-0.4 1-1s-0.4-1-1-1z"></path>
</symbol>
<symbol id="iconUser" viewBox="0 0 20 28">
<path d="M20 21.859c0 2.281-1.5 4.141-3.328 4.141h-13.344c-1.828 0-3.328-1.859-3.328-4.141 0-4.109 1.016-8.859 5.109-8.859 1.266 1.234 2.984 2 4.891 2s3.625-0.766 4.891-2c4.094 0 5.109 4.75 5.109 8.859zM16 8c0 3.313-2.688 6-6 6s-6-2.688-6-6 2.688-6 6-6 6 2.688 6 6z"></path>
</symbol>
<symbol id="iconClose" viewBox="0 0 24 24">
<path d="M18.984 6.422l-5.578 5.578 5.578 5.578-1.406 1.406-5.578-5.578-5.578 5.578-1.406-1.406 5.578-5.578-5.578-5.578 1.406-1.406 5.578 5.578 5.578-5.578z"></path>
</symbol>
<symbol id="iconFacebook" viewBox="0 0 16 28">
<path d="M14.984 0.187v4.125h-2.453c-1.922 0-2.281 0.922-2.281 2.25v2.953h4.578l-0.609 4.625h-3.969v11.859h-4.781v-11.859h-3.984v-4.625h3.984v-3.406c0-3.953 2.422-6.109 5.953-6.109 1.687 0 3.141 0.125 3.563 0.187z"></path>
</symbol>
<symbol id="iconInstagram" viewBox="0 0 24 28">
<path d="M16 14c0-2.203-1.797-4-4-4s-4 1.797-4 4 1.797 4 4 4 4-1.797 4-4zM18.156 14c0 3.406-2.75 6.156-6.156 6.156s-6.156-2.75-6.156-6.156 2.75-6.156 6.156-6.156 6.156 2.75 6.156 6.156zM19.844 7.594c0 0.797-0.641 1.437-1.437 1.437s-1.437-0.641-1.437-1.437 0.641-1.437 1.437-1.437 1.437 0.641 1.437 1.437zM12 4.156c-1.75 0-5.5-0.141-7.078 0.484-0.547 0.219-0.953 0.484-1.375 0.906s-0.688 0.828-0.906 1.375c-0.625 1.578-0.484 5.328-0.484 7.078s-0.141 5.5 0.484 7.078c0.219 0.547 0.484 0.953 0.906 1.375s0.828 0.688 1.375 0.906c1.578 0.625 5.328 0.484 7.078 0.484s5.5 0.141 7.078-0.484c0.547-0.219 0.953-0.484 1.375-0.906s0.688-0.828 0.906-1.375c0.625-1.578 0.484-5.328 0.484-7.078s0.141-5.5-0.484-7.078c-0.219-0.547-0.484-0.953-0.906-1.375s-0.828-0.688-1.375-0.906c-1.578-0.625-5.328-0.484-7.078-0.484zM24 14c0 1.656 0.016 3.297-0.078 4.953-0.094 1.922-0.531 3.625-1.937 5.031s-3.109 1.844-5.031 1.937c-1.656 0.094-3.297 0.078-4.953 0.078s-3.297 0.016-4.953-0.078c-1.922-0.094-3.625-0.531-5.031-1.937s-1.844-3.109-1.937-5.031c-0.094-1.656-0.078-3.297-0.078-4.953s-0.016-3.297 0.078-4.953c0.094-1.922 0.531-3.625 1.937-5.031s3.109-1.844 5.031-1.937c1.656-0.094 3.297-0.078 4.953-0.078s3.297-0.016 4.953 0.078c1.922 0.094 3.625 0.531 5.031 1.937s1.844 3.109 1.937 5.031c0.094 1.656 0.078 3.297 0.078 4.953z"></path>
</symbol>
<symbol id="iconTwitter" viewBox="0 0 26 28">
<path d="M25.312 6.375c-0.688 1-1.547 1.891-2.531 2.609 0.016 0.219 0.016 0.438 0.016 0.656 0 6.672-5.078 14.359-14.359 14.359-2.859 0-5.516-0.828-7.75-2.266 0.406 0.047 0.797 0.063 1.219 0.063 2.359 0 4.531-0.797 6.266-2.156-2.219-0.047-4.078-1.5-4.719-3.5 0.313 0.047 0.625 0.078 0.953 0.078 0.453 0 0.906-0.063 1.328-0.172-2.312-0.469-4.047-2.5-4.047-4.953v-0.063c0.672 0.375 1.453 0.609 2.281 0.641-1.359-0.906-2.25-2.453-2.25-4.203 0-0.938 0.25-1.797 0.688-2.547 2.484 3.062 6.219 5.063 10.406 5.281-0.078-0.375-0.125-0.766-0.125-1.156 0-2.781 2.25-5.047 5.047-5.047 1.453 0 2.766 0.609 3.687 1.594 1.141-0.219 2.234-0.641 3.203-1.219-0.375 1.172-1.172 2.156-2.219 2.781 1.016-0.109 2-0.391 2.906-0.781z"></path>
</symbol>
<symbol id="iconArrowLeft" viewBox="0 0 24 24">
<path d="M15.422 16.078l-1.406 1.406-6-6 6-6 1.406 1.406-4.594 4.594z"></path>
</symbol>
<symbol id="iconArrowDown" viewBox="0 0 24 24">
<path d="M7.406 7.828l4.594 4.594 4.594-4.594 1.406 1.406-6 6-6-6z"></path>
</symbol>
<symbol id="iconArrowRight" viewBox="0 0 24 24">
<path d="M8.578 16.359l4.594-4.594-4.594-4.594 1.406-1.406 6 6-6 6z"></path>
</symbol>
<symbol id="iconArrowUp" viewBox="0 0 24 24">
<path d="M7.406 15.422l-1.406-1.406 6-6 6 6-1.406 1.406-4.594-4.594z"></path>
</symbol>
<symbol id="iconMore" viewBox="0 0 24 24">
<path d="M18.984 12.984h-6v6h-1.969v-6h-6v-1.969h6v-6h1.969v6h6v1.969z"></path>
</symbol>
<symbol id="iconCheck" viewBox="0 0 28 28">
<path d="M26.109 8.844c0 0.391-0.156 0.781-0.438 1.062l-13.438 13.438c-0.281 0.281-0.672 0.438-1.062 0.438s-0.781-0.156-1.062-0.438l-7.781-7.781c-0.281-0.281-0.438-0.672-0.438-1.062s0.156-0.781 0.438-1.062l2.125-2.125c0.281-0.281 0.672-0.438 1.062-0.438s0.781 0.156 1.062 0.438l4.594 4.609 10.25-10.266c0.281-0.281 0.672-0.438 1.062-0.438s0.781 0.156 1.062 0.438l2.125 2.125c0.281 0.281 0.438 0.672 0.438 1.062z"></path>
</symbol>
<symbol id="iconSearch" viewBox="0 0 26 28">
<path d="M18 13c0-3.859-3.141-7-7-7s-7 3.141-7 7 3.141 7 7 7 7-3.141 7-7zM26 26c0 1.094-0.906 2-2 2-0.531 0-1.047-0.219-1.406-0.594l-5.359-5.344c-1.828 1.266-4.016 1.937-6.234 1.937-6.078 0-11-4.922-11-11s4.922-11 11-11 11 4.922 11 11c0 2.219-0.672 4.406-1.937 6.234l5.359 5.359c0.359 0.359 0.578 0.875 0.578 1.406z"></path>
</symbol>
<symbol id="iconEnvelope" viewBox="0 0 28 28">
<path d="M28 11.094v12.406c0 1.375-1.125 2.5-2.5 2.5h-23c-1.375 0-2.5-1.125-2.5-2.5v-12.406c0.469 0.516 1 0.969 1.578 1.359 2.594 1.766 5.219 3.531 7.766 5.391 1.313 0.969 2.938 2.156 4.641 2.156h0.031c1.703 0 3.328-1.188 4.641-2.156 2.547-1.844 5.172-3.625 7.781-5.391 0.562-0.391 1.094-0.844 1.563-1.359zM28 6.5c0 1.75-1.297 3.328-2.672 4.281-2.438 1.687-4.891 3.375-7.313 5.078-1.016 0.703-2.734 2.141-4 2.141h-0.031c-1.266 0-2.984-1.437-4-2.141-2.422-1.703-4.875-3.391-7.297-5.078-1.109-0.75-2.688-2.516-2.688-3.938 0-1.531 0.828-2.844 2.5-2.844h23c1.359 0 2.5 1.125 2.5 2.5z"></path>
</symbol>
<symbol id="iconArrowDropDownCircle" viewBox="0 0 24 24">
<path d="M12 14.016l3.984-4.031h-7.969zM12 2.016c5.531 0 9.984 4.453 9.984 9.984s-4.453 9.984-9.984 9.984-9.984-4.453-9.984-9.984 4.453-9.984 9.984-9.984z"></path>
</symbol>
<symbol id="iconQuoteRight" viewBox="0 0 26 28">
<title>quote-right</title>
<path d="M12 5v11c0 4.406-3.594 8-8 8h-1c-0.547 0-1-0.453-1-1v-2c0-0.547 0.453-1 1-1h1c2.203 0 4-1.797 4-4v-0.5c0-0.828-0.672-1.5-1.5-1.5h-3.5c-1.656 0-3-1.344-3-3v-6c0-1.656 1.344-3 3-3h6c1.656 0 3 1.344 3 3zM26 5v11c0 4.406-3.594 8-8 8h-1c-0.547 0-1-0.453-1-1v-2c0-0.547 0.453-1 1-1h1c2.203 0 4-1.797 4-4v-0.5c0-0.828-0.672-1.5-1.5-1.5h-3.5c-1.656 0-3-1.344-3-3v-6c0-1.656 1.344-3 3-3h6c1.656 0 3 1.344 3 3z"></path>
</symbol>
<symbol id="iconPlayCircle" viewBox="0 0 24 24">
<path d="M12 20.016c4.406 0 8.016-3.609 8.016-8.016s-3.609-8.016-8.016-8.016-8.016 3.609-8.016 8.016 3.609 8.016 8.016 8.016zM12 2.016c5.531 0 9.984 4.453 9.984 9.984s-4.453 9.984-9.984 9.984-9.984-4.453-9.984-9.984 4.453-9.984 9.984-9.984zM9.984 16.5v-9l6 4.5z"></path>
</symbol>
<symbol id="iconPlayCircleVazado" viewBox="0 0 24 28">
<path d="M12 2c6.625 0 12 5.375 12 12s-5.375 12-12 12-12-5.375-12-12 5.375-12 12-12zM18 14.859c0.313-0.172 0.5-0.5 0.5-0.859s-0.187-0.688-0.5-0.859l-8.5-5c-0.297-0.187-0.688-0.187-1-0.016-0.313 0.187-0.5 0.516-0.5 0.875v10c0 0.359 0.187 0.688 0.5 0.875 0.156 0.078 0.328 0.125 0.5 0.125s0.344-0.047 0.5-0.141z"></path>
</symbol>
<symbol id="iconWhatsapp" viewBox="0 0 24 28">
<path d="M15.391 15.219c0.266 0 2.812 1.328 2.922 1.516 0.031 0.078 0.031 0.172 0.031 0.234 0 0.391-0.125 0.828-0.266 1.188-0.359 0.875-1.813 1.437-2.703 1.437-0.75 0-2.297-0.656-2.969-0.969-2.234-1.016-3.625-2.75-4.969-4.734-0.594-0.875-1.125-1.953-1.109-3.031v-0.125c0.031-1.031 0.406-1.766 1.156-2.469 0.234-0.219 0.484-0.344 0.812-0.344 0.187 0 0.375 0.047 0.578 0.047 0.422 0 0.5 0.125 0.656 0.531 0.109 0.266 0.906 2.391 0.906 2.547 0 0.594-1.078 1.266-1.078 1.625 0 0.078 0.031 0.156 0.078 0.234 0.344 0.734 1 1.578 1.594 2.141 0.719 0.688 1.484 1.141 2.359 1.578 0.109 0.063 0.219 0.109 0.344 0.109 0.469 0 1.25-1.516 1.656-1.516zM12.219 23.5c5.406 0 9.812-4.406 9.812-9.812s-4.406-9.812-9.812-9.812-9.812 4.406-9.812 9.812c0 2.063 0.656 4.078 1.875 5.75l-1.234 3.641 3.781-1.203c1.594 1.047 3.484 1.625 5.391 1.625zM12.219 1.906c6.5 0 11.781 5.281 11.781 11.781s-5.281 11.781-11.781 11.781c-1.984 0-3.953-0.5-5.703-1.469l-6.516 2.094 2.125-6.328c-1.109-1.828-1.687-3.938-1.687-6.078 0-6.5 5.281-11.781 11.781-11.781z"></path>
</symbol>
<symbol id="iconChat" viewBox="0 0 24 24">
<path d="M18 8.016v-2.016h-12v2.016h12zM14.016 14.016v-2.016h-8.016v2.016h8.016zM6 9v2.016h12v-2.016h-12zM20.016 2.016c1.078 0 1.969 0.891 1.969 1.969v12c0 1.078-0.891 2.016-1.969 2.016h-14.016l-3.984 3.984v-18c0-1.078 0.891-1.969 1.969-1.969h16.031z"></path>
</symbol>
<symbol id="iconEmail" viewBox="0 0 28 28">
<path d="M28 11.094v12.406c0 1.375-1.125 2.5-2.5 2.5h-23c-1.375 0-2.5-1.125-2.5-2.5v-12.406c0.469 0.516 1 0.969 1.578 1.359 2.594 1.766 5.219 3.531 7.766 5.391 1.313 0.969 2.938 2.156 4.641 2.156h0.031c1.703 0 3.328-1.188 4.641-2.156 2.547-1.844 5.172-3.625 7.781-5.391 0.562-0.391 1.094-0.844 1.563-1.359zM28 6.5c0 1.75-1.297 3.328-2.672 4.281-2.438 1.687-4.891 3.375-7.313 5.078-1.016 0.703-2.734 2.141-4 2.141h-0.031c-1.266 0-2.984-1.437-4-2.141-2.422-1.703-4.875-3.391-7.297-5.078-1.109-0.75-2.688-2.516-2.688-3.938 0-1.531 0.828-2.844 2.5-2.844h23c1.359 0 2.5 1.125 2.5 2.5z"></path>
</symbol>
<symbol id="iconHelp" viewBox="0 0 24 28">
<path d="M14 21.5v-3c0-0.281-0.219-0.5-0.5-0.5h-3c-0.281 0-0.5 0.219-0.5 0.5v3c0 0.281 0.219 0.5 0.5 0.5h3c0.281 0 0.5-0.219 0.5-0.5zM18 11c0-2.859-3-5-5.688-5-2.547 0-4.453 1.094-5.797 3.328-0.141 0.219-0.078 0.5 0.125 0.656l2.063 1.563c0.078 0.063 0.187 0.094 0.297 0.094 0.141 0 0.297-0.063 0.391-0.187 0.734-0.938 1.047-1.219 1.344-1.437 0.266-0.187 0.781-0.375 1.344-0.375 1 0 1.922 0.641 1.922 1.328 0 0.812-0.422 1.219-1.375 1.656-1.109 0.5-2.625 1.797-2.625 3.313v0.562c0 0.281 0.219 0.5 0.5 0.5h3c0.281 0 0.5-0.219 0.5-0.5v0c0-0.359 0.453-1.125 1.188-1.547 1.188-0.672 2.812-1.578 2.812-3.953zM24 14c0 6.625-5.375 12-12 12s-12-5.375-12-12 5.375-12 12-12 12 5.375 12 12z"></path>
</symbol>
<symbol id="iconYoutube" viewBox="0 0 28 28">
<path d="M11.109 17.625l7.562-3.906-7.562-3.953v7.859zM14 4.156c5.891 0 9.797 0.281 9.797 0.281 0.547 0.063 1.75 0.063 2.812 1.188 0 0 0.859 0.844 1.109 2.781 0.297 2.266 0.281 4.531 0.281 4.531v2.125s0.016 2.266-0.281 4.531c-0.25 1.922-1.109 2.781-1.109 2.781-1.062 1.109-2.266 1.109-2.812 1.172 0 0-3.906 0.297-9.797 0.297v0c-7.281-0.063-9.516-0.281-9.516-0.281-0.625-0.109-2.031-0.078-3.094-1.188 0 0-0.859-0.859-1.109-2.781-0.297-2.266-0.281-4.531-0.281-4.531v-2.125s-0.016-2.266 0.281-4.531c0.25-1.937 1.109-2.781 1.109-2.781 1.062-1.125 2.266-1.125 2.812-1.188 0 0 3.906-0.281 9.797-0.281v0z"></path>
</symbol>
<symbol id="iconBooks" viewBox="0 0 36 32">
<path d="M7 4h-6c-0.55 0-1 0.45-1 1v22c0 0.55 0.45 1 1 1h6c0.55 0 1-0.45 1-1v-22c0-0.55-0.45-1-1-1zM6 10h-4v-2h4v2z"></path>
<path d="M17 4h-6c-0.55 0-1 0.45-1 1v22c0 0.55 0.45 1 1 1h6c0.55 0 1-0.45 1-1v-22c0-0.55-0.45-1-1-1zM16 10h-4v-2h4v2z"></path>
<path d="M23.909 5.546l-5.358 2.7c-0.491 0.247-0.691 0.852-0.443 1.343l8.999 17.861c0.247 0.491 0.852 0.691 1.343 0.443l5.358-2.7c0.491-0.247 0.691-0.852 0.443-1.343l-8.999-17.861c-0.247-0.491-0.852-0.691-1.343-0.443z"></path>
</symbol>
<symbol id="iconArchive" viewBox="0 0 20 20">
<path d="M13.981 2h-7.963c0 0-0.996 0-0.996 1h9.955c0-1-0.996-1-0.996-1zM16.968 5c0-1-0.995-1-0.995-1h-11.946c0 0-0.995 0-0.995 1v1h13.936v-1zM18.958 6c-0.588-0.592-0.588-0.592-0.588-0.592v1.592h-16.74v-1.592c0 0 0 0-0.589 0.592s-1.011 0.75-0.774 2c0.236 1.246 1.379 8.076 1.549 9 0.186 1.014 1.217 1 1.217 1h13.936c0 0 1.030 0.014 1.217-1 0.17-0.924 1.312-7.754 1.549-9 0.235-1.25-0.187-1.408-0.777-2zM14 11.997c0 0.554-0.449 1.003-1.003 1.003h-5.994c-0.554 0-1.003-0.449-1.003-1.003v-1.997h1v2h6v-2h1v1.997z"></path>
</symbol>
<symbol id="iconComment" viewBox="0 0 32 32">
<path d="M16 2c8.837 0 16 5.82 16 13s-7.163 13-16 13c-0.849 0-1.682-0.054-2.495-0.158-3.437 3.437-7.539 4.053-11.505 4.144v-0.841c2.142-1.049 4-2.961 4-5.145 0-0.305-0.024-0.604-0.068-0.897-3.619-2.383-5.932-6.024-5.932-10.103 0-7.18 7.163-13 16-13z"></path>
</symbol>
<symbol id="iconArrowLeftLine" viewBox="0 0 20 20">
<path d="M3.828 9l6.071-6.071-1.414-1.414-8.485 8.485 8.485 8.485 1.414-1.414-6.071-6.071h16.172v-2h-16.172z"></path>
</symbol>
<symbol id="iconTime" viewBox="0 0 20 20">
<path d="M10 0.4c-5.302 0-9.6 4.298-9.6 9.6s4.298 9.6 9.6 9.6c5.301 0 9.6-4.298 9.6-9.601 0-5.301-4.299-9.599-9.6-9.599zM10 17.599c-4.197 0-7.6-3.402-7.6-7.6 0-4.197 3.402-7.6 7.6-7.6v0 7.601l6.792-3.396c0.513 1.023 0.808 2.173 0.808 3.396 0 4.197-3.403 7.599-7.6 7.599z"></path>
</symbol>
<symbol id="iconPrint" viewBox="0 0 26 28">
<path d="M6 24h14v-4h-14v4zM6 14h14v-6h-2.5c-0.828 0-1.5-0.672-1.5-1.5v-2.5h-10v10zM24 15c0-0.547-0.453-1-1-1s-1 0.453-1 1 0.453 1 1 1 1-0.453 1-1zM26 15v6.5c0 0.266-0.234 0.5-0.5 0.5h-3.5v2.5c0 0.828-0.672 1.5-1.5 1.5h-15c-0.828 0-1.5-0.672-1.5-1.5v-2.5h-3.5c-0.266 0-0.5-0.234-0.5-0.5v-6.5c0-1.641 1.359-3 3-3h1v-8.5c0-0.828 0.672-1.5 1.5-1.5h10.5c0.828 0 1.969 0.469 2.562 1.062l2.375 2.375c0.594 0.594 1.062 1.734 1.062 2.562v4h1c1.641 0 3 1.359 3 3z"></path>
</symbol>
<symbol id="iconHeart" viewBox="0 0 28 28">
<path d="M14 26c-0.25 0-0.5-0.094-0.688-0.281l-9.75-9.406c-0.125-0.109-3.563-3.25-3.563-7 0-4.578 2.797-7.313 7.469-7.313 2.734 0 5.297 2.156 6.531 3.375 1.234-1.219 3.797-3.375 6.531-3.375 4.672 0 7.469 2.734 7.469 7.313 0 3.75-3.437 6.891-3.578 7.031l-9.734 9.375c-0.187 0.187-0.438 0.281-0.688 0.281z"></path>
</symbol>
</defs>
</svg>';


?>
 <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" />
 

 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.2.1.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.paroller.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

<?php
}
add_action( 'wp_footer', 'theme_footer_script' );


// Less Admin Bar
function my_function_admin_bar($content) {
    return ( current_user_can("administrator") ) ? $content : false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');



function linkHome(){
	if( is_home() || is_front_page() ) {
		return '#up';
	} else {
		return get_home_url();
	}
}

function classScrollDown(){
	if ( is_home() || is_front_page() ){
		return 'u-isScrollDown';
	} else {
		return false;
	}
}


add_filter( 'body_class','my_body_classes' );
function my_body_classes( $classes ) {
 
    if ( is_page() ) {
     
        $classes[] = 'Page--' . basename(get_permalink());
        //$classes[] = 'class-name-two'; // Second Class
         
    }
     
    return $classes;
     
}


//========================================================
// CUSTOM POST TYPES
//========================================================



	/**
	 * Register the custom post type
	 */
	

add_action( 'init', 'register_custom_post_types' );

function register_custom_post_types() {

  



	

	// Cidades
	$labels_cidade = array(
		"name" => __( "Cidades", "" ),
		"singular_name" => __( "Cidade", "" ),
		"menu_name" => __( "Cidades", "" ),
		"all_items" => __( "Todas", "" ),
		"add_new" => __( "Adicionar nova", "" ),
		"add_new_item" => __( "Adicionar nova", "" ),
		"edit_item" => __( "Editar", "" ),
		"new_item" => __( "Nova", "" ),
		"view_item" => __( "Visualizar", "" ),
		"view_items" => __( "Visualizar", "" ),
		"search_items" => __( "Pesquisar", "" ),
		"not_found" => __( "Sem resultados", "" ),
		"not_found_in_trash" => __( "Sem resultados", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
		"featured_image" => __( "Imagem destacada", "" ),
		"set_featured_image" => __( "Editar imagem destacada", "" ),
		"remove_featured_image" => __( "Remover imagem destacada", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
	);

	$args_cidades = array(
		"label" => __( "Cidades", "" ),
		"labels" => $labels_cidade,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "cidade", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-location-alt",
		"supports" => array( "title", "excerpt", "thumbnail"),
		//'register_meta_box_cb' => 'noticias_meta_box'
	);

	register_post_type( "cidade", $args_cidades );


	

	// Eventos
	$labels_eventos = array(
		"name" => __( "Eventos", "" ),
		"singular_name" => __( "Evento", "" ),
		"menu_name" => __( "Eventos", "" ),
		"all_items" => __( "Todos", "" ),
		"add_new" => __( "Adicionar novo", "" ),
		"add_new_item" => __( "Adicionar novo", "" ),
		"edit_item" => __( "Editar", "" ),
		"new_item" => __( "Novo", "" ),
		"view_item" => __( "Visualizar", "" ),
		"view_items" => __( "Visualizar", "" ),
		"search_items" => __( "Pesquisar", "" ),
		"not_found" => __( "Sem resultados", "" ),
		"not_found_in_trash" => __( "Sem resultados", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
		"featured_image" => __( "Imagem destacada", "" ),
		"set_featured_image" => __( "Editar imagem destacada", "" ),
		"remove_featured_image" => __( "Remover imagem destacada", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
	);

	$args_eventos = array(
		"label" => __( "Eventos", "" ),
		"labels" => $labels_eventos,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "eventos", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-write-blog",
		"supports" => array( "title", "excerpt", "thumbnail"),
		//'register_meta_box_cb' => 'noticias_meta_box'
	);

	register_post_type( "eventos", $args_eventos );



	// Ingressos
	$labels_ingresso = array(
		"name" => __( "Ingressos", "" ),
		"singular_name" => __( "Ingresso", "" ),
		"menu_name" => __( "Ingressos", "" ),
		"all_items" => __( "Todos", "" ),
		"add_new" => __( "Adicionar novo", "" ),
		"add_new_item" => __( "Adicionar novo", "" ),
		"edit_item" => __( "Editar", "" ),
		"new_item" => __( "Novo", "" ),
		"view_item" => __( "Visualizar", "" ),
		"view_items" => __( "Visualizar", "" ),
		"search_items" => __( "Pesquisar", "" ),
		"not_found" => __( "Sem resultados", "" ),
		"not_found_in_trash" => __( "Sem resultados", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
		"featured_image" => __( "Imagem destacada", "" ),
		"set_featured_image" => __( "Editar imagem destacada", "" ),
		"remove_featured_image" => __( "Remover imagem destacada", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
	);

	$args_ingresso = array(
		"label" => __( "Ingressos", "" ),
		"labels" => $labels_ingresso,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "ingresso", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-cart",
		"supports" => array( "title", "excerpt", "thumbnail"),
		//'register_meta_box_cb' => 'noticias_meta_box'
	);

	register_post_type( "ingresso", $args_ingresso );


	// Negociações
	$labels_negociacao = array(
		"name" => __( "Negociações", "" ),
		"singular_name" => __( "Negociação", "" ),
		"menu_name" => __( "Negociações", "" ),
		"all_items" => __( "Todos", "" ),
		"add_new" => __( "Adicionar nova", "" ),
		"add_new_item" => __( "Adicionar nova", "" ),
		"edit_item" => __( "Editar", "" ),
		"new_item" => __( "Nova", "" ),
		"view_item" => __( "Visualizar", "" ),
		"view_items" => __( "Visualizar", "" ),
		"search_items" => __( "Pesquisar", "" ),
		"not_found" => __( "Sem resultados", "" ),
		"not_found_in_trash" => __( "Sem resultados", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
		"featured_image" => __( "Imagem destacada", "" ),
		"set_featured_image" => __( "Editar imagem destacada", "" ),
		"remove_featured_image" => __( "Remover imagem destacada", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
	);

	$args_nogociacao = array(
		"label" => __( "Negociações", "" ),
		"labels" => $labels_negociacao,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "negociacao", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-tickets",
		"supports" => array( "title", "excerpt"),
		//'register_meta_box_cb' => 'noticias_meta_box'
	);

	register_post_type( "negociacao", $args_nogociacao );



	// Eventos cadastrados pelo Usuário
	$labels_eventos_usuario = array(
		"name" => __( "Eventos do usuário", "" ),
		"singular_name" => __( "Evento do usuário", "" ),
		"menu_name" => __( "Eventos do usuário", "" ),
		"all_items" => __( "Todos", "" ),
		"add_new" => __( "Adicionar novo", "" ),
		"add_new_item" => __( "Adicionar novo", "" ),
		"edit_item" => __( "Editar", "" ),
		"new_item" => __( "Novo", "" ),
		"view_item" => __( "Visualizar", "" ),
		"view_items" => __( "Visualizar", "" ),
		"search_items" => __( "Pesquisar", "" ),
		"not_found" => __( "Sem resultados", "" ),
		"not_found_in_trash" => __( "Sem resultados", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
		"featured_image" => __( "Imagem destacada", "" ),
		"set_featured_image" => __( "Editar imagem destacada", "" ),
		"remove_featured_image" => __( "Remover imagem destacada", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
	);

	$args_eventos_usuario = array(
		"label" => __( "Eventos", "" ),
		"labels" => $labels_eventos_usuario,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "eventos-usuario", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-write-blog",
		"supports" => array( "title", "excerpt", "thumbnail"),
		//'register_meta_box_cb' => 'noticias_meta_box'
	);

	register_post_type( "eventos-usuario", $args_eventos_usuario );



	}

//=========================
// ADMIN - Get Current Post Type
// =======================

/**
 * gets the current post type in the WordPress Admin
 */
function get_current_post_type() {
  global $post, $typenow, $current_screen;
	
  //we have a post so we can just get the post type from that
  if ( $post && $post->post_type )
    return $post->post_type;
    
  //check the global $typenow - set in admin.php
  elseif( $typenow )
    return $typenow;
    
  //check the global $current_screen object - set in sceen.php
  elseif( $current_screen && $current_screen->post_type )
    return $current_screen->post_type;
  
  //lastly check the post_type querystring
  elseif( isset( $_REQUEST['post_type'] ) )
    return sanitize_key( $_REQUEST['post_type'] );
	
  //we do not know the post type!
  return null;
}


//==========================================
// METABOX
//========================================


//===================
//EVENTOS METABOX && EVENTOS DO USUÁRIO METABOX
//===================

// Box: Dados do Evento //
function add_custom_meta_box()
{
    add_meta_box("demo-meta-box", "Dados do Evento", "custom_meta_box_markup", array("eventos", "eventos-usuario"), "normal", "high", null);
}

add_action("add_meta_boxes", "add_custom_meta_box");

// View
function custom_meta_box_markup($object)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
        <table width="100%" cellpadding="0" cellspacing="0">
        	<tr>
        		<td width="30%">
            		<h4>Cidade</h4>
        		</td>
        		<td>
		           
		    				
		    			<?php 
		    				$meta_box_cidade_evento  = get_post_meta( $object->ID, 'meta_box-cidade_evento', true );
						?>
		    			<select id="meta_box-cidade_evento" style="width: 320px" name="meta_box-cidade_evento" required="required">
		    				<option></option>
						<?php 
							$args = array( 'post_type' => 'cidade', 'order' => 'ASC');
							
							//$newsLoop = new WP_Query( $newsArgs );

							$posts = get_posts( $args );
							
							foreach( $posts as $post ) : setup_postdata( $post );
								
								?>
						        <option value="<?php echo $post->ID; ?>" <?php if( $post->ID == $meta_box_cidade_evento ) { echo 'selected'; } ?>>
						        	<?php echo $post->post_title; ?>  
								</option>

					 
					       <?php 
					       wp_reset_postdata(); endforeach;
					       ?>


					   </select>

		    				
		        </td>
		    </tr>
        	<tr>
        		<td width="30%">
            		<h4>Períodicidade do Evento</h4>
        		</td>
        		<td>
		            <select name="meta_box-tipo_evento" style="width: 220px;">
		                <?php 
		                    $option_values = array(1, 2, 3);

		                    foreach($option_values as $key => $value) {

		                    	switch ($value) {
		                    		case 1:
		                    			$value_label = 'Eventual';
		                			break;
		                			case 2:
		                    			$value_label = 'Semanal';
		                			break;
		                			case 3:
		                    			$value_label = 'Mensal';
		                			break;
		                		}


		                        if($value == get_post_meta($object->ID, "meta_box-tipo_evento", true))
		                        {
		                            ?>
		                                <option value="<?php echo $value; ?>" selected><?php echo $value_label; ?></option>
		                            <?php    
		                        }
		                        else
		                        {
		                            ?>
		                                <option value="<?php echo $value; ?>"><?php echo $value_label; ?></option>
		                            <?php
		                        }
		                    }
		                ?>
		            </select>
		        </td>
		    </tr>
		    <tr>
		    	<td>
		    		<h4>Data do Evento</h4>
		    	</td>
		    	<td>
		    		 <input name="meta_box-date" type="date" value="<?php echo get_post_meta($object->ID, "meta_box-date", true); ?>" />
		    	</td>
		    </tr>
		     <tr>
		    	<td>
		    		<h4>Aceita meia Entrada?</h4>
		    	</td>
		    	<td>
		    		<?php $meta_box_radio_meia_value =  get_post_meta($object->ID, "meta_box-ingresso_meia", true); ?>
		    		 <input name="meta_box-ingresso_meia" type="radio" value="1" <?php if ( $meta_box_radio_meia_value == 1 ) { echo 'checked'; } ?> />
		    		 <label>Sim</label>
		    		 <br />
		    		 <input name="meta_box-ingresso_meia" type="radio" value="2" <?php if ( $meta_box_radio_meia_value == 2 ) { echo 'checked'; } ?> />
		    		 <label>Não</label>

		    	</td>
		    </tr>
		   
		     <tr>
        		<td width="30%">
            		<h4>Status do Evento</h4>
        		</td>
        		<td>
		            <select name="meta_box-status_evento" style="width: 220px;">
		            	<option></option>
		                <?php 
		                
		               		// Aplica um array específico para o post type "eventos-usuario"
		                	if( get_current_post_type() == 'eventos-usuario' ){

		                		$options_status_eventos = array(4,5,6);

		                	} else {
		                		// Aplica um array específico para os demais post types
		                		$options_status_eventos = array(1,2,3);

		                	}


		                    foreach($options_status_eventos as $key => $status_evento_value) {
		                    	
		                    	switch ($status_evento_value) {
		                    		case 1:
		                    			$value_label = 'Ativo';
		                			break;

		                			case 2:
		                    			$value_label = 'Suspenso';
		                			break;

		                			case 3:
		                    			$value_label = 'Inativo';
		                			break;

		                			case 4:
		                    			$value_label = 'Pendente';
		                			break;

		                			case 5:
		                    			$value_label = 'Em edição';
		                			break;

		                			case 6:
		                    			$value_label = 'Aprovado';
		                			break;
		                		}


		                        if($status_evento_value == get_post_meta($object->ID, "meta_box-status_evento", true))
		                        {
		                            ?>
		                                <option value="<?php echo $status_evento_value; ?>" selected><?php echo $value_label; ?></option>
		                            <?php    
		                        }
		                        else
		                        {
		                            ?>
		                                <option value="<?php echo $status_evento_value; ?>"><?php echo $value_label; ?></option>
		                            <?php
		                        }
		                    }
		                ?>
		            </select>
		        </td>
		    </tr>
		     <?php if( get_current_post_type() == 'eventos-usuario' ){ ?>
		    <tr>
		    	<td><h4>Usuário:</h4>
		    		<td>
		    			<?php 
		    				$usuario_autenticado  = get_post_meta( $object->ID, 'meta_box-usuario_autenticado', true );

		    				if( !empty( $usuario_autenticado ) ){
		    					$meta_box_usuario_autenticado =  get_post_meta($object->ID, "meta_box-usuario_autenticado", true);
		    				} else {
		    					$meta_box_usuario_autenticado = 0;
		    					$meta_box_usuario_name = '';
			    				$meta_box_usuario_email = '';	
		    				}
		    				
		    				$meta_box_idUser_evento  = get_post_meta( $object->ID, 'meta_box-usuario_evento', true );


		    				if( $meta_box_usuario_autenticado == 1 ) {
		    					
		    					$usuarioAutenticado = 'SIM';


		    				} elseif( $meta_box_usuario_autenticado == 2 ) {
		    				
			    				$usuarioAutenticado = 'NÃO';

			    				$meta_box_usuario_name = $meta_box_idUser_evento['name'];
			    				$meta_box_usuario_email = $meta_box_idUser_evento['email'];

		    				}
		    				
		    				
		    				if( !empty( $_GET[ 'edit_field' ] ) && isset( $_GET[ 'edit_field' ] ) ) {
		    					$edit_field = $_GET[ 'edit_field' ];
		    				} else {
		    					$edit_field = 'false';
		    				}

		    				if( $meta_box_idUser_evento != '' && $edit_field == 'false' ){

		    					$current_url_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

		    					$user_info = get_userdata($meta_box_idUser_evento);



					      		echo "<div style='border:1px solid #ccc;padding: 0 10px;background: #e4e4e4;'>"; 
		    					if( $meta_box_usuario_autenticado == 1 ) {
					      		echo '<h4>ID:    ' . $user_info->ID                   .'</h4>'."\n";
					      		echo '<p><strong>Comprador Autenticado?</strong> ' . $usuarioAutenticado .'</p>'."\n"; 
					      		echo '<p><strong>Nome:</strong>   ' . $user_info->user_firstname       .'</p>'. "\n";
					      		echo '<p><strong>Usuário:</strong> ' . $user_info->user_login           .'</p>'. "\n";
					      		echo '<p><strong>Tipo:</strong>   ' . implode(', ', $user_info->roles) .'</p>'. "\n";
					      		echo '<input type="hidden" name="meta_box-usuario_autenticado" value="1" />';
					      		echo '<input type="hidden" name="meta_box-usuario_evento" value="' . $meta_box_idUser_evento . '" />';
					      		

						      	} elseif( $meta_box_usuario_autenticado == 2 ) {
						      		echo '<p><strong>Nome:</strong> ' . $meta_box_usuario_name           .'</p>'. "\n";
						      		echo '<p><strong>E-mail:</strong> ' . $meta_box_usuario_email           .'</p>'. "\n";
						      		echo '<input type="hidden" name="meta_box-usuario_autenticado" value="2" />';
						      		echo '<input type="hidden" name="meta_box-usuario_name" value="' . $meta_box_usuario_name . '" />';
						      		echo '<input type="hidden" name="meta_box-usuario_email" value="' . $meta_box_usuario_email . '" />';
						      	}
					      		echo '<p><a href="' . $current_url_uri . '&edit_field=vendedor_ingresso">Editar este campo</a>'. "\n";
					      		echo '</div>';


								} else {

								$option_values = get_users( array( 'fields' => array( 'ID', 'display_name' ) ) );

								?>
		    				<style type="text/css">
		    					.is-hideField{
		    						display: none;
		    					}
		    				</style>

							<script type="text/javascript">
								jQuery(document).ready(function() {
								    jQuery("input[name=meta_box-usuario_autenticado]").on( "change", function() {

								         var valueRadio = jQuery(this).val();
								         jQuery(".is-hideField").hide();
								         jQuery(".is-hideField.value-"+valueRadio).show();

								    } );

								  
									        if ( jQuery('input[name=meta_box-usuario_autenticado]:checked').val()?true:false ) {
									            // append goes here
									            // 
									            var valueChecked = jQuery('input[name=meta_box-usuario_autenticado]:checked').val();

									            jQuery('.is-hideField.value-'+valueChecked).show();
									        }
									    

							});
							</script>

							<strong>Usuário Autenticado?</strong><br />
				    			
					    		 <input name="meta_box-usuario_autenticado" id="meta_box-usuario_autenticado" type="radio" value="1" <?php if ( $meta_box_usuario_autenticado == 1 ) { echo 'checked'; } ?> />
					    		 <label>Sim</label>
					    		 <br />
					    		 <input name="meta_box-usuario_autenticado" id="meta_box-usuario_autenticado" type="radio" value="2" <?php if ( $meta_box_usuario_autenticado == 2 ) { echo 'checked'; } ?> />
					    		 <label>Não</label>
				    			<br />
				    			<br />
				    			<input type="text" name="meta_box-usuario_name" id="meta_box-usuario_name" class="is-hideField value-2" value="<?php if( $meta_box_usuario_autenticado == 2 ) { echo $meta_box_usuario_name; } ?>" placeholder="Nome do Usuário" />

				    			<input type="email" name="meta_box-usuario_email" id="meta_box-usuario_email" class="is-hideField value-2" value="<?php if( $meta_box_usuario_autenticado == 2 ) { echo $meta_box_usuario_email; } ?>" placeholder="E-mail do Usuário" />

				    			<?php

		    					echo '<select name="meta_box-usuario_evento" class="is-hideField value-1"  style="width: 220px;" >';
		    					echo '<option></option>';

								foreach($option_values as $value){
								        //print_r(get_user_meta ( $user_id->ID));
								        if( $value->ID == get_post_meta($object->ID, "meta_box-usuario_evento", true) ) {

								        	echo '<option value="' . $value->ID . '" selected="selected">' . $value->display_name . '</option>';
								        
								        } else {
								       		echo '<option value="' . $value->ID . '">' . $value->display_name . '</option>';
								       	}
								    }
								    echo '</select>';
		    				}
		    			 ?>						 
		    		</td>
		    </tr>
		   
		<?php } ?>
		    
		</table>
    <?php  
}

// Save in Data Base
function save_custom_meta_box($post_id, $post, $update)
{
    if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    
    if( "eventos" != $post->post_type && "eventos-usuario" != $post->post_type)
        return $post_id;

    $meta_box_cidade_evento_value = "";
    $meta_box_date_value = "";
    $meta_box_tipo_evento_value = "";
    $meta_box_checkbox_value = "";
    $meta_box_radio_meia_value = "";
    $meta_box_status_evento_value = "";
    $meta_box_usuario_autenticado = "";

    if( get_current_post_type() == 'eventos-usuario' ){ 
    	
    	$meta_box_usuario_autenticado = "";
    	$meta_box_idUser_evento_ = "";

    }

    if(isset($_POST["meta_box-cidade_evento"]))
    {
        $meta_box_cidade_evento_value = $_POST["meta_box-cidade_evento"];
    }   
    update_post_meta($post_id, "meta_box-cidade_evento", $meta_box_cidade_evento_value);

    if(isset($_POST["meta_box-date"]))
    {
        $meta_box_date_value = $_POST["meta_box-date"];
    }   
    update_post_meta($post_id, "meta_box-date", $meta_box_date_value);

    if(isset($_POST["meta_box-ingresso_meia"]))
    {
        $meta_box_radio_meia_value = $_POST["meta_box-ingresso_meia"];
    }   
    update_post_meta($post_id, "meta_box-ingresso_meia", $meta_box_radio_meia_value);

    if(isset($_POST["meta_box-status_evento"]))
    {
        $meta_box_status_evento_value = $_POST["meta_box-status_evento"];
    }   
    update_post_meta($post_id, "meta_box-status_evento", $meta_box_status_evento_value);

    if(isset($_POST["meta_box-tipo_evento"]))
    {
        $meta_box_tipo_evento_value = $_POST["meta_box-tipo_evento"];
    }   
    update_post_meta($post_id, "meta_box-tipo_evento", $meta_box_tipo_evento_value);

     
     
     if(isset($_POST["meta_box-usuario_autenticado"]))
    {
        $meta_box_usuario_autenticado = $_POST["meta_box-usuario_autenticado"];
    }   
    update_post_meta($post_id, "meta_box-usuario_autenticado", $meta_box_usuario_autenticado);


    if ($meta_box_usuario_autenticado == 1){

    	if(isset($_POST["meta_box-usuario_evento"]))
	    {
	        $meta_box_idUser_evento_ = $_POST["meta_box-usuario_evento"];
	    }   
	    update_post_meta($post_id, "meta_box-usuario_evento", $meta_box_idUser_evento_);

    } elseif($meta_box_usuario_autenticado == 2){

    	if(isset($_POST["meta_box-usuario_name"]) && isset($_POST["meta_box-usuario_email"]) ) {

    		$meta_box_usuario_evento_value = array( "name" => $_POST["meta_box-usuario_name"], "email" => $_POST["meta_box-usuario_email"]);
	    }
	    update_post_meta($post_id, "meta_box-usuario_evento", $meta_box_usuario_evento_value);  

    }


     

}

add_action("save_post", "save_custom_meta_box", 10, 3);


// Box: Tipo de Ingresso //

add_action( 'add_meta_boxes', 'add_custom_box' );

    function add_custom_box( $post ) {


		if( get_current_post_type() == 'eventos' || get_current_post_type() == 'eventos-usuario' ){

			$title_checkBox_box = 'Tipos de Ingresso';

		} else {

			$title_checkBox_box = 'Meta Box';

		}

        add_meta_box(
            'Meta Box', // ID, should be a string.
            $title_checkBox_box, // Meta Box Title.
            'view_meta_box', // Your call back function, this is where your form field will go.
            array('eventos','eventos-usuario'), // The post type you want this to show up on, can be post, page, or custom post type.
            'normal', // The placement of your meta box, can be normal or side.
            'high' // The priority in which this will be displayed.
        );
}
// View
function view_meta_box($post) {
    wp_nonce_field( 'my_awesome_nonce', 'awesome_nonce' );    
    $checkboxMeta = get_post_meta( $post->ID );
    ?>
    <input type="checkbox" name="masculino" id="masculino" value="yes" <?php if ( isset ( $checkboxMeta['masculino'] ) ) checked( $checkboxMeta['masculino'][0], 'yes' ); ?> />Masculino<br />
    <input type="checkbox" name="feminino" id="feminino" value="yes" <?php if ( isset ( $checkboxMeta['feminino'] ) ) checked( $checkboxMeta['feminino'][0], 'yes' ); ?> />Feminino<br />
    <input type="checkbox" name="pista" id="pista" value="yes" <?php if ( isset ( $checkboxMeta['pista'] ) ) checked( $checkboxMeta['pista'][0], 'yes' ); ?> />Pista<br />
     <input type="checkbox" name="front" id="front" value="yes" <?php if ( isset ( $checkboxMeta['front'] ) ) checked( $checkboxMeta['front'][0], 'yes' ); ?> />Front<br />
    <input type="checkbox" name="vip" id="vip" value="yes" <?php if ( isset ( $checkboxMeta['vip'] ) ) checked( $checkboxMeta['vip'][0], 'yes' ); ?> />Vip<br />
    <input type="checkbox" name="camarote" id="camarote" value="yes" <?php if ( isset ( $checkboxMeta['camarote'] ) ) checked( $checkboxMeta['camarote'][0], 'yes' ); ?> />Camarote<br />
    <input type="checkbox" name="geral" id="geral" value="yes" <?php if ( isset ( $checkboxMeta['geral'] ) ) checked( $checkboxMeta['geral'][0], 'yes' ); ?> />Geral (ingressos sem distinção de lugar ou gênero. ex: abadá, ...)<br />
<?php }

// Save in DB
add_action( 'save_post', 'save_people_checkboxes' );
    function save_people_checkboxes( $post_id ) {
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
            return;
        if ( ( isset ( $_POST['my_awesome_nonce'] ) ) && ( ! wp_verify_nonce( $_POST['my_awesome_nonce'], plugin_basename( __FILE__ ) ) ) )
            return;
        if ( ( isset ( $_POST['post_type'] ) ) && ( 'eventos' == $_POST['post_type'] )  ) {
            if ( ! current_user_can( 'edit_page', $post_id ) ) {
                return;
            }    
        } else {
            if ( ! current_user_can( 'edit_post', $post_id ) ) {
                return;
            }
        }

        //saves value
        if( isset( $_POST[ 'masculino' ] ) ) {
            update_post_meta( $post_id, 'masculino', 'yes' );
        } else {
            update_post_meta( $post_id, 'masculino', 'no' );
        }

        //saves  value
        if( isset( $_POST[ 'feminino' ] ) ) {
            update_post_meta( $post_id, 'feminino', 'yes' );
        } else {
            update_post_meta( $post_id, 'feminino', 'no' );
        }

        //saves  value
        if( isset( $_POST[ 'pista' ] ) ) {
            update_post_meta( $post_id, 'pista', 'yes' );
        } else {
            update_post_meta( $post_id, 'pista', 'no' );
        } 
         //saves value
        if( isset( $_POST[ 'front' ] ) ) {
            update_post_meta( $post_id, 'front', 'yes' );
        } else {
            update_post_meta( $post_id, 'front', 'no' );
        }

        //saves  value
        if( isset( $_POST[ 'vip' ] ) ) {
            update_post_meta( $post_id, 'vip', 'yes' );
        } else {
            update_post_meta( $post_id, 'vip', 'no' );
        }

        //saves  value
        if( isset( $_POST[ 'camarote' ] ) ) {
            update_post_meta( $post_id, 'camarote', 'yes' );
        } else {
            update_post_meta( $post_id, 'camarote', 'no' );
        } 
        //saves  value
        if( isset( $_POST[ 'geral' ] ) ) {
            update_post_meta( $post_id, 'geral', 'yes' );
        } else {
            update_post_meta( $post_id, 'geral', 'no' );
        }  
}


//==================================
// INGRESSOS META BOX
// =================================
// 

// Funções para impre~ssão de Valores

function tipos_de_ingresso($value){
	switch ($value) {
		case 1:
			$value_label = 'Masculino';
		break;
		case 2:
			$value_label = 'Feminino';
		break;
		case 3:
			$value_label = 'Pista';
		break;
		case 4:
			$value_label = 'Front';
		break;
		case 5:
			$value_label = 'Vip';
		break;
		case 6:
			$value_label = 'Camarote';
		break;
		case 7:
			$value_label = 'Geral';
		break;
	}
	return $value_label;
}

// BOX: Dados do Ingresso //
function add_custom_meta_box_2()
{
    add_meta_box("demo-meta-box", "Dados do Ingresso", "custom_meta_box_markup_2", "ingresso", "normal", "high", null);
}

add_action("add_meta_boxes", "add_custom_meta_box_2");

// View
function custom_meta_box_markup_2($object)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
        <table width="100%" cellpadding="0" cellspacing="0">
        	<tr>
        		<td width="25%">
            		<h4>Tipo de Oferta:</h4>
        		</td>
        		<td>
        			<?php 

						$meta_box_tipo_oferta_  = get_post_meta($object->ID, "meta_box-tipo_oferta", true);

						if( !empty( $_GET[ 'edit_field' ] ) ) {
		    					$edit_field = $_GET[ 'edit_field' ];
		    				} else {
		    					$edit_field = 'false';
		    				}

						if( $meta_box_tipo_oferta_ != '' && $edit_field != 'tipo_oferta' ){

	                    	switch ($meta_box_tipo_oferta_) {
	                    		
	                    		case 1:
	                    			$value_label = 'Quero Vender';
	                			break;

	                			case 2:
	                    			$value_label = 'Quero Comprar';
	                			break;

	                		}

	                		$current_url_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		    				
							echo "<div style='border:1px solid #ccc;padding: 0 10px;background: #e4e4e4;'>";
				      		echo '<h4>' . $value_label .'</h4>'."\n";
				      		echo '<p><a href="' . $current_url_uri . '&edit_field=tipo_oferta">Editar este campo</a>'. "\n";
				      		echo '</div>';
				      		echo '<input type="hidden" name="meta_box-tipo_oferta" value="' . $meta_box_tipo_oferta_ . '" />';

						} elseif( $meta_box_tipo_oferta_ == '' ||  $edit_field == 'tipo_oferta'  ){
					?>
		            <select name="meta_box-tipo_oferta" required="required" style="width: 220px;">
		            	<option></option>
		                <?php 
		                    $option_values = array(1, 2);

		                    foreach($option_values as $key => $value) {

		                    	switch ($value) {
		                    		
		                    		case 1:
		                    			$value_label = 'Quero Vender';
		                			break;

		                			case 2:
		                    			$value_label = 'Quero Comprar';
		                			break;

		                		}


		                        if($value == get_post_meta($object->ID, "meta_box-tipo_oferta", true))
		                        {
		                            ?>
		                                <option value="<?php echo $value; ?>" selected><?php echo $value_label; ?></option>
		                            <?php    
		                        }
		                        else
		                        {
		                            ?>
		                                <option value="<?php echo $value; ?>"><?php echo $value_label; ?></option>
		                            <?php
		                        }
		                    }
		                ?>
		            </select>
		        <?php } ?>
		        </td>
		    </tr>
		    <tr>
        		<td width="25%">
            		<h4>Tipo do Ingresso:</h4>
        		</td>
        		<td>
        			<?php 

						$meta_box_tipo_ingresso_  = get_post_meta($object->ID, "meta_box-tipo_ingresso", true);

						if( !empty( $_GET[ 'edit_field' ] ) && isset( $_GET[ 'edit_field' ] ) ) {
		    					$edit_field = $_GET[ 'edit_field' ];
		    				} else {
		    					$edit_field = 'false';
		    				}

						if( $meta_box_tipo_ingresso_ != '' && $edit_field != 'tipo_ingresso' ){

	                    	/*switch ($meta_box_tipo_ingresso_) {
	                    		
	                    		case 1:
	                    			$value_label = 'Masculino';
	                			break;
	                			case 2:
	                    			$value_label = 'Feminino';
	                			break;
	                			case 3:
	                    			$value_label = 'Pista';
	                			break;
	                			case 4:
	                    			$value_label = 'Front';
	                			break;
	                			case 5:
	                    			$value_label = 'Vip';
	                			break;
	                			case 6:
	                    			$value_label = 'Camarote';
	                			break;
	                			case 7:
	                    			$value_label = 'Geral';
	                			break;

	                		}*/


	                		$current_url_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		    					
							echo "<div style='border:1px solid #ccc;padding: 0 10px;background: #e4e4e4;'>";
				      		echo '<h4>' . tipos_de_ingresso($meta_box_tipo_ingresso_) .'</h4>'."\n";
				      		echo '<p><a href="' . $current_url_uri . '&edit_field=tipo_ingresso">Editar este campo</a>'. "\n";
				      		echo '</div>';
				      		echo '<input type="hidden" name="meta_box-tipo_ingresso" value="' . $meta_box_tipo_ingresso_ . '" />';

						} elseif( $meta_box_tipo_ingresso_ == '' || $edit_field == 'tipo_ingresso'  ){
					?>
		            <select name="meta_box-tipo_ingresso" required="required" style="width: 220px;">
		            	<option></option>
		                <?php 
		                    $option_values = array(1, 2, 3, 4, 5, 6, 7);

		                    foreach($option_values as $key => $value) {

		                    	/*switch ($value) {
		                    		case 1:
		                    			$value_label = 'Masculino';
		                			break;
		                			case 2:
		                    			$value_label = 'Feminino';
		                			break;
		                			case 3:
		                    			$value_label = 'Pista';
		                			break;
		                			case 4:
		                    			$value_label = 'Front';
		                			break;
		                			case 5:
		                    			$value_label = 'Vip';
		                			break;
		                			case 6:
		                    			$value_label = 'Camarote';
		                			break;
		                			case 7:
		                    			$value_label = 'Geral';
		                			break;
		                		}*/


		                        if($value == get_post_meta($object->ID, "meta_box-tipo_ingresso", true))
		                        {
		                            ?>
		                                <option value="<?php echo $value; ?>" selected><?php echo tipos_de_ingresso($value); ?></option>
		                            <?php    
		                        }
		                        else
		                        {
		                            ?>
		                                <option value="<?php echo $value; ?>"><?php echo tipos_de_ingresso($value); ?></option>
		                            <?php
		                        }
		                    }
		                ?>
		            </select>
		        <?php } ?>
		        </td>
		    </tr>
		    <tr>
		    	<td><h4>Evento:</h4>
		    		<td>
		    			<?php 

							$meta_box_idEvento  = get_post_meta( $object->ID, 'meta_box-id_evento', true );

							if( !empty( $_GET[ 'edit_field' ] ) && isset( $_GET[ 'edit_field' ] ) ) {
		    					$edit_field = $_GET[ 'edit_field' ];
		    				} else {
		    					$edit_field = 'false';
		    				}

							if( $meta_box_idEvento != '' && $edit_field != 'id_evento'  ){

								$post_id = $meta_box_idEvento;
								$queried_post = get_post($post_id);
								$title = $queried_post->post_title;

								$current_url_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		    					

								echo "<div style='border:1px solid #ccc;padding: 0 10px;background: #e4e4e4;'>";
					      		echo '<h4>ID: ' . $post_id .'</h4>'."\n";
					      		echo '<p>Nome: <strong>' . $title .'</strong></p>'. "\n";
					      		echo '<p><a href="' . $current_url_uri . '&edit_field=id_evento">Editar este campo</a>'. "\n";
					      		echo '</div>';
					      		echo '<input type="hidden" name="meta_box-id_evento" value="' . $post_id . '" />';

							} elseif( $meta_box_idEvento == '' || $edit_field == 'id_evento'  ) {
						?>
		    			<select id="meta_box-id_evento" style="width: 100%" name="meta_box-id_evento" required="required">
		    				<option></option>
						<?php 
							$newsArgs = array( 'post_type' => 'eventos', 'order' => 'ASC');
							
							$newsLoop = new WP_Query( $newsArgs );
									
								if ( $newsLoop->have_posts() ): while ( $newsLoop->have_posts() ) : $newsLoop->the_post();
								
								?>
						        <option value="<?php echo get_the_ID(); ?>" <?php if( get_the_ID() == $meta_box_idEvento ) { echo 'selected'; } ?>>
						        	<?php echo get_the_title(); ?>  
								</option>

					       <?php endwhile; ?>
					       <?php endif; wp_reset_postdata(); ?>

					   </select>

					<?php } ?>

		    		</td>
		    </tr>
		    <tr>
		    	<td>
		    		<h4>Valor do Ingresso:</h4>
		    	</td>
		    	<td>
		    		<?php 

						$meta_box_valor_ingresso_  = get_post_meta($object->ID, "meta_box-valor_ingresso", true);

						if( !empty( $_GET[ 'edit_field' ] ) && isset( $_GET[ 'edit_field' ] ) ) {
		    					$edit_field = $_GET[ 'edit_field' ];
		    				} else {
		    					$edit_field = 'false';
		    				}

						if( $meta_box_valor_ingresso_ != '' && $edit_field != 'valor_ingresso'  ){

							$value_label = $meta_box_valor_ingresso_;

							$current_url_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		    					

							echo "<div style='border:1px solid #ccc;padding: 0 10px;background: #e4e4e4;'>";
				      		echo '<h4>R$ ' . $value_label .'</h4>'."\n";
				      		echo '<p><a href="' . $current_url_uri . '&edit_field=valor_ingresso">Editar este campo</a>'. "\n";
				      		echo '</div>';
				      		echo '<input type="hidden" name="meta_box-valor_ingresso" value="' . $meta_box_valor_ingresso_ . '" />';

						} elseif( $meta_box_valor_ingresso_ == '' || $edit_field == 'valor_ingresso' ) {
					?>
		    		 <input name="meta_box-valor_ingresso" type="number" required="required" value="<?php echo get_post_meta($object->ID, "meta_box-valor_ingresso", true); ?>" />
		    		<?php } ?>
		    	</td>
		    </tr>
		    <tr>
		    	<td>
		    		<h4>Bairro:</h4>
		    	</td>
		    	<td>
		    		<?php 

						$meta_box_endereco_ingresso_  = get_post_meta($object->ID, "meta_box-endereco_ingresso", true);

						if( !empty( $_GET[ 'edit_field' ] ) && isset( $_GET[ 'edit_field' ] ) ) {
		    					$edit_field = $_GET[ 'edit_field' ];
		    				} else {
		    					$edit_field = 'false';
		    				}

						if( $meta_box_endereco_ingresso_ != '' && $edit_field != 'endereco_ingresso'  ){

							$value_label = $meta_box_endereco_ingresso_;

							$current_url_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		    					

							echo "<div style='border:1px solid #ccc;padding: 0 10px;background: #e4e4e4;'>";
				      		echo '<h4>' . $value_label .'</h4>'."\n";
				      		echo '<p><a href="' . $current_url_uri . '&edit_field=endereco_ingresso">Editar este campo</a>'. "\n";
				      		echo '</div>';
				      		echo '<input type="hidden" name="meta_box-endereco_ingresso" value="' . $meta_box_endereco_ingresso_ . '" />';

						} elseif( $meta_box_endereco_ingresso_ == '' || $edit_field == 'endereco_ingresso' ) {
					?>
		    		 <input name="meta_box-endereco_ingresso" type="text" style="width: 100%;" required="required" value="<?php echo get_post_meta($object->ID, "meta_box-endereco_ingresso", true); ?>" />
		    		<?php } ?>
		    	</td>
		    </tr>
		     <tr>
		    	<td><h4>Autor da Oferta:</h4>
		    		<td>
		    			<?php 
		    			//$meta_box_tipo_oferta_  = get_post_meta($object->ID, "meta_box-tipo_oferta", true);
		    				//if( $meta_box_tipo_oferta_ == 1 ) {

		    					$meta_box_idUser  = get_post_meta( $object->ID, 'meta_box-author_ingresso', true );

		    				/*} else {

		    					$meta_box_idUser  = get_post_meta($object->ID, "meta-box-comprador_ingresso", true);

		    				}
		    				*/

		    				if( !empty( $_GET[ 'edit_field' ] ) && isset( $_GET[ 'edit_field' ] ) ) {
		    					$edit_field = $_GET[ 'edit_field' ];
		    				} else {
		    					$edit_field = 'false';
		    				}

		    				if( $meta_box_idUser != '' && $edit_field != 'author_ingresso'  ){

		    					$user_info = get_userdata($meta_box_idUser);

		    					$current_url_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		    					

		    					echo "<div style='border:1px solid #ccc;padding: 0 10px;background: #e4e4e4;'>";
					      		echo '<h4>ID:    ' . $user_info->ID                   .'</h4>'."\n";
					      		echo '<p>Nome:   ' . $user_info->user_firstname       .'</p>'. "\n";
					      		echo '<p>Usuário: ' . $user_info->user_login           .'</p>'. "\n";
					      		echo '<p>Tipo:   ' . implode(', ', $user_info->roles) .'</p>'. "\n";
					      		echo '<p><a href="' . $current_url_uri . '&edit_field=author_ingresso">Editar este campo</a>'. "\n";
					      		echo '</div>';
					      		echo '<input type="hidden" name="meta_box-author_ingresso" value="' . $meta_box_idUser . '" />';

		    				} elseif( $meta_box_idUser == '' || $edit_field == 'author_ingresso' ) {
		    					
		    					$option_values = get_users( array( 'fields' => array( 'ID', 'display_name' ) ) );

		    					echo '<select required="required" name="meta_box-author_ingresso" style="width: 220px;" >';
		    					echo '<option></option>';

								foreach($option_values as $value){
								        //print_r(get_user_meta ( $user_id->ID));
								        if( $value->ID == get_post_meta($object->ID, "meta-box_author_ingresso", true) ) {

								        	echo '<option value="' . $value->ID . '" selected="selected">' . $value->display_name . '</option>';
								        
								        } else {
								       		echo '<option value="' . $value->ID . '">' . $value->display_name . '</option>';
								       	}
								    }
								    echo '</select>';
		    				}
		    			 ?>						 
		    		</td>
		    </tr>


		    <tr>
        		<td width="25%">
            		<h4>Status do Ingresso:</h4>
        		</td>
        		<td>
		            <select name="meta_box-status_ingresso" required="required" style="width: 220px;">
		            	<option></option>
		                <?php 
		                    $option_values = array(1, 2, 3, 4);

		                    foreach($option_values as $key => $value) {

		                    	switch ($value) {
		                    		case 1:
		                    			$value_label = 'Disponível';
		                			break;
		                			case 2:
		                    			$value_label = 'Vendido';
		                			break;
		                			case 3:
		                    			$value_label = 'Suspenso';
		                			break;
		                			case 4:
		                    			$value_label = 'Cancelado';
		                			break;
		                		}


		                        if($value == get_post_meta($object->ID, "meta_box-status_ingresso", true))
		                        {
		                            ?>
		                                <option value="<?php echo $value; ?>" selected><?php echo $value_label; ?></option>
		                            <?php    
		                        }
		                        else
		                        {
		                            ?>
		                                <option value="<?php echo $value; ?>"><?php echo $value_label; ?></option>
		                            <?php
		                        }
		                    }
		                ?>
		            </select>
		        </td>
		    </tr>

		</table>
    <?php  
}

// Save in Data Base
function save_custom_meta_box_2($post_id, $post, $update)
{
    if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "ingresso";
    if($slug != $post->post_type)
        return $post_id;

    $meta_box_tipo_oferta = "";
    $meta_box_tipo_ingresso_value = "";
    $meta_box_idEvento = "";
    $meta_box_valor_ingresso = "";
    $meta_box_endereco_ingresso = "";
    $meta_box_author_ingresso = "";
    $meta_box_status_ingresso = "";


    
    if(isset($_POST["meta_box-tipo_oferta"]))
    {
        $meta_box_tipo_oferta = $_POST["meta_box-tipo_oferta"];
    }   
    update_post_meta($post_id, "meta_box-tipo_oferta", $meta_box_tipo_oferta);

    if(isset($_POST["meta_box-tipo_ingresso"]))
    {
        $meta_box_tipo_ingresso_value = $_POST["meta_box-tipo_ingresso"];
    }   
    update_post_meta($post_id, "meta_box-tipo_ingresso", $meta_box_tipo_ingresso_value);

    if(isset($_POST["meta_box-id_evento"]))
    {
        $meta_box_idEvento = $_POST["meta_box-id_evento"];
    }   
    update_post_meta($post_id, "meta_box-id_evento", $meta_box_idEvento);

    if(isset($_POST["meta_box-valor_ingresso"]))
    {
        $meta_box_valor_ingresso = $_POST["meta_box-valor_ingresso"];
    }   
    update_post_meta($post_id, "meta_box-valor_ingresso", $meta_box_valor_ingresso);

    if(isset($_POST["meta_box-endereco_ingresso"]))
    {
        $meta_box_endereco_ingresso = $_POST["meta_box-endereco_ingresso"];
    }   
    update_post_meta($post_id, "meta_box-endereco_ingresso", $meta_box_endereco_ingresso);

     if(isset($_POST["meta_box-status_ingresso"]))
    {
        $meta_box_status_ingresso = $_POST["meta_box-status_ingresso"];
    }   
    update_post_meta($post_id, "meta_box-status_ingresso", $meta_box_status_ingresso);

     if(isset($_POST["meta_box-author_ingresso"]))
    {
        $meta_box_author_ingresso = $_POST["meta_box-author_ingresso"];
    }   
    update_post_meta($post_id, "meta_box-author_ingresso", $meta_box_author_ingresso);

}

add_action("save_post", "save_custom_meta_box_2", 10, 3);





//==================================
// NEGOCIAÇÕES META BOX
// =================================
// negociacao



// BOX: Dados do Ingresso //
function add_custom_meta_box_3()
{
    add_meta_box("demo-meta-box", "Dados da negociação", "custom_meta_box_markup_3", "negociacao", "normal", "high", null);
}

add_action("add_meta_boxes", "add_custom_meta_box_3");

// View
function custom_meta_box_markup_3($object)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
        <table width="100%" cellpadding="0" cellspacing="0">
        	 <tr>
		    	<td><h4>Evento:</h4>
		    		<td>
		    			<?php 

							$meta_box_idEvento  = get_post_meta( $object->ID, 'meta_box-id_evento', true );

							if( !empty( $_GET[ 'edit_field' ] ) && isset( $_GET[ 'edit_field' ] ) ) {
		    					$edit_field = $_GET[ 'edit_field' ];
		    				} else {
		    					$edit_field = 'false';
		    				}

							if( $meta_box_idEvento != '' && $edit_field != 'id_evento'  ){

								$post_id = $meta_box_idEvento;
								$queried_post = get_post($post_id);
								$title = $queried_post->post_title;

								$current_url_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		    					

								echo "<div style='border:1px solid #ccc;padding: 0 10px;background: #e4e4e4;'>";
					      		echo '<h4>ID: ' . $post_id .'</h4>'."\n";
					      		echo '<p>Nome: <strong>' . $title .'</strong></p>'. "\n";
					      		echo '<p><a href="' . $current_url_uri . '&edit_field=id_evento">Editar este campo</a>'. "\n";
					      		echo '</div>';
					      		echo '<input type="hidden" name="meta_box-id_evento" value="' . $post_id . '" />';

							} elseif( $meta_box_idEvento == '' || $edit_field == 'id_evento'  ) {
						?>
		    			<select id="meta_box-id_evento" style="width: 100%" name="meta_box-id_evento" required="required">
		    				<option></option>
						<?php 
							$newsArgs = array( 'post_type' => 'eventos', 'order' => 'ASC', 'posts_per_page' => 12);
							
							$newsLoop = new WP_Query( $newsArgs );
									
								if ( $newsLoop->have_posts() ): while ( $newsLoop->have_posts() ) : $newsLoop->the_post();
								
								?>
						        <option value="<?php echo get_the_ID(); ?>" <?php if( get_the_ID() == $meta_box_idEvento ) { echo 'selected'; } ?>>
						        	<?php echo get_the_title(); ?>  
								</option>

					       <?php endwhile; ?>
					       <?php endif; wp_reset_postdata(); ?>

					   </select>

					<?php } ?>

		    		</td>
		    </tr>
        	
		    <tr>
        		<td width="25%">
            		<h4>Ingresso negociado:</h4>
        		</td>
        		<td>
        			<?php 

							$meta_box_id_ingresso  = get_post_meta( $object->ID, 'meta_box-id_ingresso', true );

							if( !empty( $_GET[ 'edit_field' ] ) && isset( $_GET[ 'edit_field' ] ) ) {
		    					$edit_field = $_GET[ 'edit_field' ];
		    				} else {
		    					$edit_field = 'false';
		    				}

							if( $meta_box_id_ingresso != '' && $edit_field != 'id_ingresso'  ){

								$post_id = $meta_box_id_ingresso;
								$queried_post = get_post($post_id);
								$title = $queried_post->post_title;

								$current_url_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		    					

								echo "<div style='border:1px solid #ccc;padding: 0 10px;background: #e4e4e4;'>";
					      		echo '<h4>ID: ' . $post_id .'</h4>'."\n";
					      		echo '<p>Nome: <strong>' . $title .'</strong></p>'. "\n";
					      		echo '<p><a href="' . $current_url_uri . '&edit_field=id_ingresso">Editar este campo</a>'. "\n";
					      		echo '</div>';
					      		echo '<input type="hidden" name="meta_box-id_ingresso" value="' . $post_id . '" />';

							} elseif( $meta_box_id_ingresso == '' || $edit_field == 'id_ingresso'  ) {
						?>
		    			<select id="meta_box-id_ingresso" style="width: 100%" name="meta_box-id_ingresso" required="required">
		    				<option></option>
						<?php 
							$newsArgs = array( 'post_type' => 'ingresso', 'order' => 'ASC', 'posts_per_page' => 50);
							
							$newsLoop = new WP_Query( $newsArgs );
									
								if ( $newsLoop->have_posts() ): while ( $newsLoop->have_posts() ) : $newsLoop->the_post();
								
								?>
						        <option value="<?php echo get_the_ID(); ?>" <?php if( get_the_ID() == $meta_box_id_ingresso ) { echo 'selected'; } ?>>
						        	<?php echo get_the_title(); ?>  
								</option>

					       <?php endwhile; ?>
					       <?php endif; wp_reset_postdata(); ?>

					   </select>

					<?php } ?>

		        </td>
		    </tr>
		   
		    <tr>
		    	<td>
		    		<h4>Valor da Oferta:</h4>
		    	</td>
		    	<td>
		    		<?php 

						$meta_box_valor_ingresso_  = get_post_meta($object->ID, "meta_box-valor_ingresso", true);

						if( !empty( $_GET[ 'edit_field' ] ) && isset( $_GET[ 'edit_field' ] ) ) {
		    					$edit_field = $_GET[ 'edit_field' ];
		    				} else {
		    					$edit_field = 'false';
		    				}

						if( $meta_box_valor_ingresso_ != '' && $edit_field != 'valor_ingresso'  ){

							$value_label = $meta_box_valor_ingresso_;

							$current_url_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		    					

							echo "<div style='border:1px solid #ccc;padding: 0 10px;background: #e4e4e4;'>";
				      		echo '<h4>R$ ' . $value_label .'</h4>'."\n";
				      		echo '<p><a href="' . $current_url_uri . '&edit_field=valor_ingresso">Editar este campo</a>'. "\n";
				      		echo '</div>';
				      		echo '<input type="hidden" name="meta_box-valor_ingresso" value="' . $meta_box_valor_ingresso_ . '" />';

						} elseif( $meta_box_valor_ingresso_ == '' || $edit_field == 'valor_ingresso' ) {
					?>
		    		 <input name="meta_box-valor_ingresso" type="number" required="required" value="<?php echo get_post_meta($object->ID, "meta_box-valor_ingresso", true); ?>" />
		    		<?php } ?>
		    	</td>
		    </tr>
		    <tr>
		    	<td>
		    		<h4>Data da Negociação:</h4>
		    	</td>
		    	<td>
		    		<?php 

						$meta_box_date_negociacao_  = get_post_meta($object->ID, "meta_box-date_negociacao", true);

						if( !empty( $_GET[ 'edit_field' ] ) && isset( $_GET[ 'edit_field' ] ) ) {
		    					$edit_field = $_GET[ 'edit_field' ];
		    				} else {
		    					$edit_field = 'false';
		    				}

						if( $meta_box_date_negociacao_ != '' && $edit_field != 'date_negociacao'  ){

							$value_label = $meta_box_date_negociacao_;

							$date = new DateTime($meta_box_date_negociacao_);
							$date =  $date->format('d/m/Y');

							$current_url_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		    					

							echo "<div style='border:1px solid #ccc;padding: 0 10px;background: #e4e4e4;'>";
				      		echo '<h4>' . $date .'</h4>'."\n";
				      		echo '<p><a href="' . $current_url_uri . '&edit_field=date_negociacao">Editar este campo</a>'. "\n";
				      		echo '</div>';
				      		echo '<input type="hidden" name="meta_box-date_negociacao" value="' . $meta_box_date_negociacao_ . '" />';

						} elseif( $meta_box_date_negociacao_ == '' || $edit_field == 'date_negociacao' ) {
					?>
		    		 <input name="meta_box-date_negociacao" type="date" required="required" value="<?php echo $meta_box_date_negociacao_; ?>" />
		    		<?php } ?>
		    	</td>
		    </tr>
		    <?php 

		    	//Identifica o tipo de Oferta do Ingresso
		    	$tipo_oferta_ingresso  = get_post_meta( $meta_box_id_ingresso, 'meta_box-tipo_oferta', true );

		    ?>
		   
		   <tr>
		    	<td><h4>Vendedor:</h4>
		    		<td>
		    			<?php 
		    				

		    				$field_vend_aut = get_post_meta($object->ID, "meta_box-vendedor_autenticado", true);
		    				
		    				if( !empty( $field_vend_aut ) ){
		    					$meta_box_radio_vendedor_autenticado =  get_post_meta($object->ID, "meta_box-vendedor_autenticado", true);
		    				} else {
		    					$meta_box_radio_vendedor_autenticado = 0;
		    					$meta_box_vendedor_name = '';
			    				$meta_box_vendedor_email = '';	
		    				}
		    				
		    				$meta_box_idUser  = get_post_meta( $object->ID, 'meta_box-vendedor_ingresso', true );


		    				if( $meta_box_radio_vendedor_autenticado == 1 ) {
		    					
		    					$vendedorAutenticado = 'SIM';


		    				} elseif( $meta_box_radio_vendedor_autenticado == 2 ) {
		    				
			    				$vendedorAutenticado = 'NÃO';

			    				$meta_box_vendedor_name = $meta_box_idUser['name'];
			    				$meta_box_vendedor_email = $meta_box_idUser['email'];

		    				}


		    				if( !empty( $_GET[ 'edit_field' ] ) && isset( $_GET[ 'edit_field' ] ) ) {
		    					$edit_field = $_GET[ 'edit_field' ];
		    				} else {
		    					$edit_field = 'false';
		    				}

		    				if( $meta_box_idUser != '' && $edit_field != 'vendedor_ingresso'  ){

		    					$user_info = get_userdata($meta_box_idUser);

		    					$current_url_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		    					

					      		echo "<div style='border:1px solid #ccc;padding: 0 10px;background: #e4e4e4;'>"; 
		    					if( $meta_box_radio_vendedor_autenticado == 1 ) {
					      		echo '<h4>ID:    ' . $user_info->ID                   .'</h4>'."\n";
					      		echo '<p><strong>Comprador Autenticado?</strong> ' . $vendedorAutenticado .'</p>'."\n"; 
					      		echo '<p><strong>Nome:</strong>   ' . $user_info->user_firstname       .'</p>'. "\n";
					      		echo '<p><strong>Usuário:</strong> ' . $user_info->user_login           .'</p>'. "\n";
					      		echo '<p><strong>Tipo:</strong>   ' . implode(', ', $user_info->roles) .'</p>'. "\n";
					      		echo '<input type="hidden" name="meta_box-vendedor_autenticado" value="1" />';
					      		echo '<input type="hidden" name="meta_box-vendedor_ingresso" value="' . $meta_box_idUser . '" />';
					      		

						      	} elseif( $meta_box_radio_vendedor_autenticado == 2 ) {
						      		echo '<p><strong>Nome:</strong> ' . $meta_box_vendedor_name           .'</p>'. "\n";
						      		echo '<p><strong>E-mail:</strong> ' . $meta_box_vendedor_email           .'</p>'. "\n";
						      		echo '<input type="hidden" name="meta_box-vendedor_autenticado" value="2" />';
						      		echo '<input type="hidden" name="meta_box-vendedor_name" value="' . $meta_box_vendedor_name . '" />';
						      		echo '<input type="hidden" name="meta_box-vendedor_email" value="' . $meta_box_vendedor_email . '" />';
						      	}
					      		echo '<p><a href="' . $current_url_uri . '&edit_field=vendedor_ingresso">Editar este campo</a>'. "\n";
					      		echo '</div>';

		    				} elseif( $meta_box_idUser == '' || $edit_field == 'vendedor_ingresso' ) {
		    					
		    					$option_values = get_users( array( 'fields' => array( 'ID', 'display_name' ) ) );
		    				
		    				?>
		    				<style type="text/css">
		    					.is-hideField{
		    						display: none;
		    					}
		    				</style>

							<script type="text/javascript">
								jQuery(document).ready(function() {
								    jQuery("input[name=meta_box-vendedor_autenticado]").on( "change", function() {

								         var valueRadio = jQuery(this).val();
								         jQuery(".is-hideField").hide();
								         jQuery(".is-hideField.value-"+valueRadio).show();

								    } );

								  
									        if ( jQuery('input[name=meta_box-vendedor_autenticado]:checked').val()?true:false ) {
									            // append goes here
									            // 
									            var valueChecked = jQuery('input[name=meta_box-vendedor_autenticado]:checked').val();

									            jQuery('.is-hideField.value-'+valueChecked).show();
									        }
									    

							});
							</script>

							<strong>Vendedor Autenticado?</strong><br />
				    			
					    		 <input name="meta_box-vendedor_autenticado" id="meta_box-vendedor_autenticado" type="radio" value="1" <?php if ( $meta_box_radio_vendedor_autenticado == 1 ) { echo 'checked'; } ?> />
					    		 <label>Sim</label>
					    		 <br />
					    		 <input name="meta_box-vendedor_autenticado" id="meta_box-vendedor_autenticado" type="radio" value="2" <?php if ( $meta_box_radio_vendedor_autenticado == 2 ) { echo 'checked'; } ?> />
					    		 <label>Não</label>
				    			<br />
				    			<br />
				    			<input type="text" name="meta_box-vendedor_name" id="meta_box-vendedor_name" class="is-hideField value-2" value="<?php if( $meta_box_radio_vendedor_autenticado == 2 ) { echo $meta_box_vendedor_name; } ?>" placeholder="Nome do Vendedor" />

				    			<input type="email" name="meta_box-vendedor_email" id="meta_box-vendedor_email" class="is-hideField value-2" value="<?php if( $meta_box_radio_vendedor_autenticado == 2 ) { echo $meta_box_vendedor_email; } ?>" placeholder="E-mail do Vendedor" />

		    					<?php

		    					echo '<select name="meta_box-vendedor_ingresso" class="is-hideField value-1" style="width: 220px;" >';
		    					echo '<option></option>';

								foreach($option_values as $value){
								        //print_r(get_user_meta ( $user_id->ID));
								        if( $value->ID == get_post_meta($object->ID, "meta_box-vendedor_ingresso", true) ) {

								        	echo '<option value="' . $value->ID . '" selected="selected">' . $value->display_name . '</option>';
								        
								        } else {
								       		echo '<option value="' . $value->ID . '">' . $value->display_name . '</option>';
								       	}
								    }
								    echo '</select>';
		    				}
		    			 ?>						 
		    		</td>
		    </tr>

		    <tr>
		    	<td><h4>Comprador:</h4>
		    		<td>
		    			<?php 

		    				$field_comp_aut = get_post_meta($object->ID, "meta_box-comprador_autenticado", true);
		    				
		    				if( !empty( $field_comp_aut ) ){
		    					$meta_box_radio_comprador_autenticado =  get_post_meta($object->ID, "meta_box-comprador_autenticado", true);
		    				} else {
		    					$meta_box_radio_comprador_autenticado = 0;
		    					$meta_box_comprador_name = '';
			    				$meta_box_comprador_email = '';	
		    				}
		    				
		    				$meta_box_idUser  = get_post_meta( $object->ID, 'meta_box-comprador_ingresso', true );


		    				if( $meta_box_radio_comprador_autenticado == 1 ) {
		    					
		    					$compradorAutenticado = 'SIM';


		    				} elseif( $meta_box_radio_comprador_autenticado == 2 ) {
		    				
			    				$compradorAutenticado = 'NÃO';

			    				$meta_box_comprador_name = $meta_box_idUser['name'];
			    				$meta_box_comprador_email = $meta_box_idUser['email'];

		    				}

		    			

		    				if( !empty( $_GET[ 'edit_field' ] ) && isset( $_GET[ 'edit_field' ] ) ) {
		    					$edit_field = $_GET[ 'edit_field' ];
		    				} else {
		    					$edit_field = 'false';
		    				}

		    				if( $meta_box_idUser != '' && $edit_field != 'comprador_ingresso'  ){

		    					$user_info = get_userdata($meta_box_idUser);

		    					$current_url_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		    					

		    					echo "<div style='border:1px solid #ccc;padding: 0 10px;background: #e4e4e4;'>"; 
		    					if( $meta_box_radio_comprador_autenticado == 1 ) {
					      		echo '<h4>ID:    ' . $user_info->ID                   .'</h4>'."\n";
					      		echo '<p><strong>Comprador Autenticado?</strong> ' . $compradorAutenticado .'</p>'."\n"; 
					      		echo '<p><strong>Nome:</strong>   ' . $user_info->user_firstname       .'</p>'. "\n";
					      		echo '<p><strong>Usuário:</strong> ' . $user_info->user_login           .'</p>'. "\n";
					      		echo '<p><strong>Tipo:</strong>   ' . implode(', ', $user_info->roles) .'</p>'. "\n";
					      		echo '<input type="hidden" name="meta_box-comprador_autenticado" value="1" />';
					      		echo '<input type="hidden" name="meta_box-comprador_ingresso" value="' . $meta_box_idUser . '" />';
					      		

						      	} elseif( $meta_box_radio_comprador_autenticado == 2 ) {
						      		echo '<p><strong>Nome:</strong> ' . $meta_box_comprador_name           .'</p>'. "\n";
						      		echo '<p><strong>E-mail:</strong> ' . $meta_box_comprador_email           .'</p>'. "\n";
						      		echo '<input type="hidden" name="meta_box-comprador_autenticado" value="2" />';
						      		echo '<input type="hidden" name="meta_box-comprador_name" value="' . $meta_box_comprador_name . '" />';
						      		echo '<input type="hidden" name="meta_box-comprador_email" value="' . $meta_box_comprador_email . '" />';
						      	}
						      
						      	echo '<p><a href="' . $current_url_uri . '&edit_field=comprador_ingresso">Editar este campo</a>'. "\n";
					      		echo '</div>';

		    				} elseif( $meta_box_idUser == '' || $edit_field == 'comprador_ingresso' ) {
		    					
		    					$option_values = get_users( array( 'fields' => array( 'ID', 'display_name' ) ) );
		    					?>

		    				<style type="text/css">
		    					.is-hideField{
		    						display: none;
		    					}
		    				</style>

							<script type="text/javascript">
								jQuery(document).ready(function() {
								    jQuery("input[name=meta_box-comprador_autenticado]").on( "change", function() {

								         var valueRadio = jQuery(this).val();
								         jQuery(".is-hideField").hide();
								         jQuery(".is-hideField.value-"+valueRadio).show();

								    } );

								  
									        if ( jQuery('input[name=meta_box-comprador_autenticado]:checked').val()?true:false ) {
									            // append goes here
									            // 
									            var valueChecked = jQuery('input[name=meta_box-comprador_autenticado]:checked').val();

									            jQuery('.is-hideField.value-'+valueChecked).show();
									        }
									    

							});
							</script>

		    					<strong>Comprador Autenticado?</strong><br />
				    			
					    		 <input name="meta_box-comprador_autenticado" id="meta_box-comprador_autenticado" type="radio" value="1" <?php if ( $meta_box_radio_comprador_autenticado == 1 ) { echo 'checked'; } ?> />
					    		 <label>Sim</label>
					    		 <br />
					    		 <input name="meta_box-comprador_autenticado" id="meta_box-comprador_autenticado" type="radio" value="2" <?php if ( $meta_box_radio_comprador_autenticado == 2 ) { echo 'checked'; } ?> />
					    		 <label>Não</label>
				    			<br />
				    			<br />
				    			<input type="text" name="meta_box-comprador_name" id="meta_box-comprador_name" class="is-hideField value-2" value="<?php if( $meta_box_radio_comprador_autenticado == 2 ) { echo $meta_box_comprador_name; } ?>" placeholder="Nome do Comprador" />

				    			<input type="email" name="meta_box-comprador_email" id="meta_box-comprador_email" class="is-hideField value-2" value="<?php if( $meta_box_radio_comprador_autenticado == 2 ) { echo $meta_box_comprador_email; } ?>" placeholder="E-mail do Comprador" />

				    			<?php

		    					echo '<select name="meta_box-comprador_ingresso" class="is-hideField value-1" style="width: 220px;" >';
		    					echo '<option></option>';

								foreach($option_values as $value){
								        //print_r(get_user_meta ( $user_id->ID));
								        if( $value->ID == get_post_meta($object->ID, "meta_box-comprador_ingresso", true) ) {

								        	echo '<option value="' . $value->ID . '" selected="selected">' . $value->display_name . '</option>';
								        
								        } else {
								       		echo '<option value="' . $value->ID . '">' . $value->display_name . '</option>';
								       	}
								    }
								    echo '</select>';
		    				}
		    			 ?>
		    			 <br />
		    			 <br />

		    		</td>
		    </tr>

		     <tr>
        		<td width="25%">
            		<h4>Termos de uso</h4>
        		</td>
        		<td>
        			<?php 
        			if( ( get_post_meta($object->ID, "meta_box-return_terms", true) ) != '' ) {
	        			$meta_box_return_terms = get_post_meta($object->ID, "meta_box-return_terms", true);
	        			
	        			if( $meta_box_return_terms != '' ){
	        				
	        				$returnTerms = 'Eu aceito';
	        			
	        			} else {
	        			
	        				$returnTerms = '';
	        			
	        			}
        			
        			} else {

        				$meta_box_return_terms = '';
        				$returnTerms = '';

        			}

        			echo "<div style='border:1px solid #ccc;padding: 0 10px;background: #e4e4e4;'>"; 
    					
			      		echo '<p>LINK: <a href="' .  get_home_url() . '/termos-de-uso/" target="_blank">TERMOS DE USO</a></p>'."\n";
			      		echo '<p><strong>Respota:</strong> ' . $returnTerms .'</p>'."\n"; 
			      		echo '<input type="hidden" name="meta_box-return_terms" id="meta_box-return_terms" value="' . $meta_box_return_terms . '" />';
        			 ?>
        		</td>
        	</tr>

		    <tr>
        		<td width="25%">
            		<h4>Status do Ingresso:</h4>
        		</td>
        		<td>
		            <select name="meta_box-status_ingresso" required="required" style="width: 220px;">
		            	<option></option>
		                <?php 
		                    $option_values = array(1, 2, 3, 4);

		                    foreach($option_values as $key => $value) {

		                    	switch ($value) {
		                    		case 1:
		                    			$value_label = 'Em negociação';
		                			break;
		                			case 2:
		                    			$value_label = 'Negociação Concluída';
		                			break;
		                			case 3:
		                    			$value_label = 'Negociação Suspensa';
		                			break;
		                			case 4:
		                    			$value_label = 'Negociação Cancelado';
		                			break;
		                		}


		                        if($value == get_post_meta($object->ID, "meta_box-status_ingresso", true))
		                        {
		                            ?>
		                                <option value="<?php echo $value; ?>" selected><?php echo $value_label; ?></option>
		                            <?php    
		                        }
		                        else
		                        {
		                            ?>
		                                <option value="<?php echo $value; ?>"><?php echo $value_label; ?></option>
		                            <?php
		                        }
		                    }
		                ?>
		            </select>
		        </td>
		    </tr>

		</table>
    <?php  
}

// Save in Data Base
function save_custom_meta_box_3($post_id, $post, $update)
{
    if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "negociacao";
    if($slug != $post->post_type)
        return $post_id;

    $meta_box_tipo_oferta = "";
    $meta_box_id_ingresso_value = "";
    $meta_box_idEvento = "";
    $meta_box_valor_ingresso = "";
    $meta_box_date_negociacao = "";
    $meta_box_vendedor_ingresso = "";
    $meta_box_radio_vendedor_autenticado = "";
    $meta_box_radio_comprador_autenticado = "";
    $meta_box_comprador_ingresso_value = "";
    $meta_box_return_terms = "";
    $meta_box_status_ingresso = "";


    
    if(isset($_POST["meta_box-tipo_oferta"]))
    {
        $meta_box_tipo_oferta = $_POST["meta_box-tipo_oferta"];
    }   
    update_post_meta($post_id, "meta_box-tipo_oferta", $meta_box_tipo_oferta);

    if(isset($_POST["meta_box-id_ingresso"]))
    {
        $meta_box_id_ingresso_value = $_POST["meta_box-id_ingresso"];
    }   
    update_post_meta($post_id, "meta_box-id_ingresso", $meta_box_id_ingresso_value);

    if(isset($_POST["meta_box-id_evento"]))
    {
        $meta_box_idEvento = $_POST["meta_box-id_evento"];
    }   
    update_post_meta($post_id, "meta_box-id_evento", $meta_box_idEvento);

     if(isset($_POST["meta_box-valor_ingresso"]))
    {
        $meta_box_valor_ingresso = $_POST["meta_box-valor_ingresso"];
    }   
    update_post_meta($post_id, "meta_box-valor_ingresso", $meta_box_valor_ingresso);

     if(isset($_POST["meta_box-date_negociacao"]))
    {
        $meta_box_date_negociacao = $_POST["meta_box-date_negociacao"];
    }   
    update_post_meta($post_id, "meta_box-date_negociacao", $meta_box_date_negociacao);


// Vendedor

	if(isset($_POST["meta_box-vendedor_autenticado"]))
    {
        $meta_box_radio_vendedor_autenticado = $_POST["meta_box-vendedor_autenticado"];
    }
    update_post_meta($post_id, "meta_box-vendedor_autenticado", $meta_box_radio_vendedor_autenticado);  


    if( isset( $_POST["meta_box-vendedor_autenticado"] ) && $_POST["meta_box-vendedor_autenticado"] == 2 ) {

    	if(isset($_POST["meta_box-vendedor_name"]) && isset($_POST["meta_box-vendedor_email"]) ) {

    		$meta_box_vendedor_ingresso_value = array( "name" => $_POST["meta_box-vendedor_name"], "email" => $_POST["meta_box-vendedor_email"]);
	    }
	    update_post_meta($post_id, "meta_box-vendedor_ingresso", $meta_box_vendedor_ingresso_value);  



    } else {


	    if(isset($_POST["meta_box-vendedor_ingresso"]))
	    {
	        $meta_box_vendedor_ingresso_value = $_POST["meta_box-vendedor_ingresso"];
	    }
	    update_post_meta($post_id, "meta_box-vendedor_ingresso", $meta_box_vendedor_ingresso_value);   

	}
   
// Comprador

   	if(isset($_POST["meta_box-comprador_autenticado"]))
    {
        $meta_box_radio_comprador_autenticado = $_POST["meta_box-comprador_autenticado"];
    }
    update_post_meta($post_id, "meta_box-comprador_autenticado", $meta_box_radio_comprador_autenticado);  


    if( isset( $_POST["meta_box-comprador_autenticado"] ) && $_POST["meta_box-comprador_autenticado"] == 2 ) {

    	if(isset($_POST["meta_box-comprador_name"]) && isset($_POST["meta_box-comprador_email"]) ) {

    		$meta_box_comprador_ingresso_value = array( "name" => $_POST["meta_box-comprador_name"], "email" => $_POST["meta_box-comprador_email"]);
	    }
	    update_post_meta($post_id, "meta_box-comprador_ingresso", $meta_box_comprador_ingresso_value);  



    } else {


	    if(isset($_POST["meta_box-comprador_ingresso"]))
	    {
	        $meta_box_comprador_ingresso_value = $_POST["meta_box-comprador_ingresso"];
	    }
	    update_post_meta($post_id, "meta_box-comprador_ingresso", $meta_box_comprador_ingresso_value);   

	}

	

	 if(isset($_POST["meta_box-return_terms"]))
    {
        $meta_box_return_terms = $_POST["meta_box-return_terms"];
    }   
    update_post_meta($post_id, "meta_box-return_terms", $meta_box_return_terms);



     if(isset($_POST["meta_box-status_ingresso"]))
    {
        $meta_box_status_ingresso = $_POST["meta_box-status_ingresso"];
    }   
    update_post_meta($post_id, "meta_box-status_ingresso", $meta_box_status_ingresso);


    

}

add_action("save_post", "save_custom_meta_box_3", 10, 3);






//==========================
// FRONT
// =========================

// Identifica a existência de um filtro de conteúdo via metodo GET
function hasExistFilter(){

	if( !empty( $_GET['filter'] ) && isset( $_GET['filter'] ) ) {
		global $wp;

		//$wp_request = home_url( $wp->request );
		$url_whit_filter = 'filter=' . $_GET['filter'];

		return array("filter" => true, "filter_value" => $url_whit_filter);
	}
}




function menorPreco($id, $tipo_oferta){

	if( isset($id) ) {
		$id_post = $id;
	} else {
		$id_post = '';
	}

	if ( isset($tipo_oferta) ) {

		if ($tipo_oferta == 1){
			$order = 'ASC';
		} elseif ($tipo_oferta == 2){
			$order = 'DESC';
		}
	}

	$valorArgs = array( 
  		'post_type' => 'ingresso',
  		'meta_query' => array(

  						'relation' => 'AND',
					
					    array(
					        'key'   => 'meta_box-id_evento',
					        'value' => $id_post,
					        'compare' => '='
					    ),
					    array(
					        'key'   => 'meta_box-tipo_oferta',
					        'value' => $tipo_oferta,
					        'compare' => '='
					    )
					),
  		'posts_per_page' => 1,
  		 'meta_key' => 'meta_box-valor_ingresso',
   		 'orderby' => 'meta_value_num',
		'order' => $order);


		//$valorLoop = new WP_Query( $valorArgs );
		
		$valorLoop = get_posts( $valorArgs );

		if( $valorLoop ) {

			foreach( $valorLoop as $valor ) {

				$menor_valor_ingresso = get_post_meta( $valor->ID, 'meta_box-valor_ingresso', true );		
				
			}
			return  'R$ ' . $menor_valor_ingresso;
		} else {
			return  '<span class="Esgotado">Esgotado</span>';	
		}

		
}
	//Teronário
	/*$idioma = 'pt_br';
	return $idioma == 'pt_br' ? 'servicos' : 'services';*/
	
		//=====================
		//Escolha da cidade
		//=====================
		
		//Sessions PHP
		
		if( ! session_id() ){

			session_start();

		}
	
		if( !empty( $_GET['city'] ) && isset( $_GET['city'] ) ) {

			$_SESSION['city'] = $_GET['city'];
		
		} elseif(empty( $_GET['city'] ) && empty($_SESSION['city']) || !isset( $_GET['city'] ) && !isset($_SESSION['city']) ) {

			$_SESSION['city'] = 'fortaleza-ce';

		}

		// Função que imprime o nome da Cidade
		
		function cidadeEvento(){

			switch ($_SESSION['city']) {
				case 'fortaleza':
					return 'Fortaleza, CE';
					break;
			}

		}

		function currentCity(){
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
				$id_city = $my_posts[0]->ID;
				$slug_city = $my_posts[0]->post_name;
			  	$title_city = $my_posts[0]->post_title;
			  	

			  return array($id_city, $slug_city, $title_city);

			endif;
		}


//===================================
// Herdado da page anterior
// ==================================
		

// a simple WordPress frontend login implementation
// written by Arūnas Liuiza | tinyStudio | wp.tribuna.lt
// Usage: use [tiny_login] shortcode or get_tiny_login_form()/the_tiny_login_form() template tags
// Arguments: one (optional) argument 'redirect': pass url where to redirect after successful login (default: false);
// Localization: replace 'theme' with your text domain string.
// login action hook - catches form submission and acts accordingly
add_action('init','tiny_login');
function tiny_login() {
  global $tiny_error;
  $tiny_error = false;
  if (isset($_POST['username']) && isset($_POST['password'])) {
    $creds = array();
    $creds['user_login'] = $_POST['username'];
    $creds['user_password'] = $_POST['password'];
    //$creds['remember'] = false;
    $user = wp_signon( $creds );
    if ( is_wp_error($user) ) {
      $tiny_error = $user->get_error_message();
    } else {
      if (isset($_POST['redirect']) && $_POST['redirect']) {
        wp_redirect($_POST['redirect']);
      }
    }
  }
}

// shows error message
function the_tiny_error() {
  echo get_tiny_error();
}
function get_tiny_error() {
  global $tiny_error;
  if ($tiny_error) {
    $return = $tiny_error;
    $tiny_error = false;
    return $return;
  } else {
    return false;
  }
}
// shows login form (or a message, if user already logged in)
function get_tiny_login_form($redirect=false) {
  if (!is_user_logged_in()) {
    $return = "<form action=\"\" method=\"post\" class=\"tiny_form tiny_login\">\r\n";
    $error = get_tiny_error();
    if ($error)
      $return .= "<p class=\"error\">{$error}</p>\r\n";
    $return .= "  <p>
      <label for=\"tiny_username\">".__('Username','theme')."</label>
      <input type=\"text\" id=\"tiny_username\" name=\"username\" value=\"".(isset($_POST['username'])?$_POST['username']:"")."\"/>
    </p>\r\n";
    $return .= "  <p>
      <label for=\"tiny_password\">".__('Password','theme')."</label>
      <input type=\"password\" id=\"tiny_password\" name=\"password\"/>
    </p>\r\n";
    if ($redirect)
      $return .= "  <input type=\"hidden\" name=\"redirect\" value=\"{$redirect}\">\r\n";
    $return .= "  <button type=\"submit\">".__('Login','theme')."</button>\r\n";
    $return .= "</form>\r\n";
  } else {
    $return = "<p>".__('User is already logged in','theme')."</p>";
  }
  return $return;
}
function the_tiny_login_form($redirect=false) {
  echo get_tiny_login_form($redirect);
}
// adds a handy [tiny_login] shortcode to use in posts/pages
add_shortcode('tiny_login','tiny_login_shortcode');
function tiny_login_shortcode ($atts,$content=false) {
  $atts = shortcode_atts(array(
    'redirect' => false
  ), $atts);
  return get_tiny_login_form($atts['redirect']);
}


// Removendo itens do menu Admin
// 
function remove_menus(){
  
  remove_menu_page( 'index.php' );                  //Dashboard
  //remove_menu_page( 'jetpack' );                    //Jetpack* 
  //remove_menu_page( 'upload.php' );                 //Media
  remove_menu_page( 'edit.php' );                     //Posts
  remove_menu_page( 'post-new.php' );                 //Posts
  //remove_menu_page( 'edit.php?post_type=page');       //Pages
  //remove_menu_page( 'post-new.php?post_type=page');    //Pages
  remove_menu_page( 'post-new.php?post_type=coupons'); //Cupons
  remove_menu_page( 'edit-comments.php' );             //Comments
  //remove_menu_page( 'themes.php' );                    //Appearance
  //	remove_menu_page( 'plugins.php' );                   //Plugins
  //remove_menu_page( 'users.php' );                   //Users
  remove_menu_page( 'tools.php' );                     //Tools
  //remove_menu_page( 'options-general.php' );           //Settings
  
}
add_action( 'admin_menu', 'remove_menus' );


// removendo links dos posts listados no admin
add_filter( 'post_row_actions', 'remove_row_actions', 10, 1 );
function remove_row_actions( $actions )
{
    if( get_post_type() === 'coupons' )
        unset( $actions['edit'] );
        unset( $actions['view'] );
       //unset( $actions['trash'] );
        unset( $actions['inline hide-if-no-js'] );
    return $actions;
}


/**
** Adiciona novos campos ao perfil de usuario
** By wptotal.com.br
**/
 
function add_extra_fields_user_profile($user) {
 
$user_phone = isset($_POST['user_phone']) ? $_POST['user_phone'] : get_the_author_meta('user_phone', $user->ID);
$user_cpf = isset($_POST['user_cpf']) ? $_POST['user_cpf'] : get_the_author_meta('user_cpf', $user->ID);
$user_address = isset($_POST['user_address']) ? $_POST['user_address'] : get_the_author_meta('user_address', $user->ID);
$user_gender = isset($_POST['user_gender']) ? $_POST['user_gender'] : get_the_author_meta('user_gender', $user->ID);
?>
 
<h3>Dados para Contato</h3>
<table class="form-table">
<tbody>
<tr>
<th><label for="user_phone">Telefone<span class="description">(obrigatório)</span></label></th>
<td><input type="text" name="user_phone" id="user_phone" value="<?php echo esc_attr($user_phone) ?>" required="required" class="regular-text" /></td>
</tr>
<tr>
<th><label for="user_endereco">CPF</label></th>
<td>
<input type="text" name="user_cpf" id="user_cpf" value="<?php echo esc_attr($user_cpf) ?>" class="regular-text" />
</td>
</tr>
<tr>
<th><label for="user_address">Endereço<span class="description">(Bairro)</span></label></th>
<td>
<input type="text" name="user_address" id="user_address" value="<?php echo esc_attr($user_address); ?>" class="regular-text" />
</td>
</tr>
<tr>
<th><label for="user_cep">Gênero<span class="description">(obrigatório)</span></label></th>
<td>
 <select class="Form-input Form-input--select Form-select" name="user_gender" required="required" id="user_gender">
    <option>Escolha</option>
    <option value="masculino" <?php if(  esc_attr($user_gender) === 'masculino' ) { echo 'selected="selected"'; } ?>>Masculino</option>
    <option value="feminino" <?php if(  esc_attr($user_gender) === 'feminino' ) { echo 'selected="selected"'; } ?>>Feminino</option>
</select>
</td>
</tr>
</tbody>
</table>
 
<?php
}
add_action('show_user_profile', 'add_extra_fields_user_profile');
add_action('edit_user_profile', 'add_extra_fields_user_profile');


/**
** Grava os dados dos novos campos de usuários no banco de dados
** Obs: É necessário validar os campos obrigatórios antes de gravar as alterações.
** By wptotal.com.br
**/
function save_extra_fields_user_profile($user_id) {
 
if (!current_user_can('edit_user', $user_id))
return false;
 
// Validando o campo obrigatorio
if ( !isset( $_POST['user_phone'] ) || empty( $_POST['user_phone'] ) ) {
return false;
}
 
update_user_meta($user_id, 'user_phone', $_POST['user_phone']);
update_user_meta($user_id, 'user_cpf', $_POST['user_cpf']);
update_user_meta($user_id, 'user_address', $_POST['user_address']);
update_user_meta($user_id, 'user_gender', $_POST['user_gender']);
}
add_action('personal_options_update', 'save_extra_fields_user_profile');
add_action('edit_user_profile_update', 'save_extra_fields_user_profile');


/**
** Valida e Mostra a(s) mensagem(s) de erro(s) dos novos campos de usuário
** By wptotal.com.br
**/
function validate_fields_in_user_profile(&$errors,$is_update) {
 
if ( ! $is_update ) {
return true;
}
 
// Somente exibe a mensagem de erro.
if ( ! isset( $_POST['user_phone'] ) || empty( $_POST['user_phone'] ) ) {
$errors->add( 'user_phone', '<strong>ERRO</strong>: Digite um telefone do usuário.' );
}
/*
// Somente exibe a mensagem de erro.
if ( ! isset( $_POST['user_cpf'] ) || empty( $_POST['user_cpf'] ) ) {
$errors->add( 'user_cpf', '<strong>ERRO</strong>: Digite um número de CPF.' );
}*/

// Somente exibe a mensagem de erro.
if ( ! isset( $_POST['user_gender'] ) || empty( $_POST['user_gender'] ) ) {
$errors->add( 'user_gender', '<strong>ERRO</strong>: escolha um gênero.' );
}

}
add_action( 'user_profile_update_errors', 'validate_fields_in_user_profile',10,2);

// Customizando as colunas de listagem de usuários

function new_contact_methods( $contactmethods ) {
    $contactmethods['user_cpf'] = 'CPF';
    return $contactmethods;
}
add_filter( 'user_contactmethods', 'new_contact_methods', 10, 1 );


function new_modify_user_table( $column ) {
    $column['user_cpf'] = 'CPF';
    return $column;
}
add_filter( 'manage_users_columns', 'new_modify_user_table' );

function new_modify_user_table_row( $val, $column_name, $user_id ) {
    switch ($column_name) {
        case 'user_cpf' :
            return get_the_author_meta( 'user_cpf', $user_id );
            break;
        default:
    }
    return $val;
}
add_filter( 'manage_users_custom_column', 'new_modify_user_table_row', 10, 3 );

add_filter('manage_users_columns','remove_users_columns');
function remove_users_columns($column_headers) {
    if (current_user_can('administrator')) {
      unset($column_headers['posts']);
    }
 
    return $column_headers;
}


////////////////////////////////

//Function Save Forms of the Negociação

add_action( 'wp_ajax_custom_action', 'custom_action' );
add_action( 'wp_ajax_nopriv_custom_action', 'custom_action' );
function custom_action() {
    // A default response holder, which will have data for sending back to our js file
    /*$response = array(
    	'error' => false,
    );

    // Example for creating an response with error information, to know in our js file
    // about the error and behave accordingly, like adding error message to the form with JS
    if (trim($_POST['email']) == '') {
    	$response['error'] = true;
    	$response['error_message'] = 'Email is required';




    	// Exit here, for not processing further because of the error
    	exit(json_encode($response)); 
    }*/

    // ... Do some code here, like storing inputs to the database, but don't forget to properly sanitize input data!
    // 
    	//Se for um Ingresso de valor vinda do comprador
    	
    	if( !empty( $_POST['meta_box-tipo_operacao'] ) && isset( $_POST['meta_box-tipo_operacao'] ) && $_POST['meta_box-tipo_operacao'] == 'post_ingresso' ) {
    		
    		$meta_box_tipo_oferta = $_POST['meta_box-tipo_oferta'];

    		$meta_box_id_evento = $_POST['meta_box-id_evento'];

		 	$comprador_ingresso_aut = $_POST['meta_box-comprador_autenticado'];

		 	$comprador_ingresso = $_POST['meta_box-author_ingresso'];

		 	$meta_box_tipo_ingresso = $_POST['meta_box-tipo_ingresso'];

		 	$meta_box_valor_ingresso = $_POST['meta_box-valor_ingresso'];

		 	$meta_box_endereco_ingresso = $_POST['meta_box-endereco_ingresso'];

		 	$meta_box_return_terms = $_POST['meta_box-return_terms'];

		 	$metabox_status_ingresso = 1;


		 	$current_user = wp_get_current_user();

	        $ingresso_title = get_the_title( $meta_box_id_evento );
			$display_name = $current_user->display_name;
			$titulo_ingresso = 'Oferta de compra de ' . $ingresso_title . ', feita por: ' . $display_name;




	       $args = array(
	         'post_type' => 'ingresso',
	         'post_status'=>'publish',
	         'post_title'=> $titulo_ingresso,
	       );

	       $post_id = wp_insert_post($args);
	       
	        update_post_meta($post_id, 'meta_box-tipo_oferta', $meta_box_tipo_oferta);
	       	update_post_meta($post_id, 'meta_box-id_evento', $meta_box_id_evento);
	       	update_post_meta($post_id, 'meta_box-tipo_ingresso', $meta_box_tipo_ingresso);
	       	update_post_meta($post_id, 'meta_box-valor_ingresso', $meta_box_valor_ingresso);
	       	update_post_meta($post_id, 'meta_box-comprador_autenticado', $comprador_ingresso_aut);
	       	update_post_meta($post_id, 'meta_box-author_ingresso', $comprador_ingresso);
	       	update_post_meta($post_id, 'meta_box-endereco_ingresso', $meta_box_endereco_ingresso);
	       	update_post_meta($post_id, 'meta_box-return_terms', $meta_box_return_terms);
	       	update_post_meta($post_id, 'meta_box-status_ingresso', $metabox_status_ingresso);
	       	
	     //================================
    	// Se for uma negociação
    	//=================================
    	//
    	} elseif( !empty( $_POST['meta_box-tipo_operacao'] ) && isset( $_POST['meta_box-tipo_operacao'] ) && $_POST['meta_box-tipo_operacao'] == 'post_negociacao' ) {

    		if( isset( $_POST['meta_box-tipo_oferta'] ) && !empty( $_POST['meta_box-tipo_oferta'] ) ){

    			$tipo_de_oferta = $_POST['meta_box-tipo_oferta'];

    			if( $tipo_de_oferta == 'venda' ) {

    				$comprador_ingresso_aut = $_POST['meta_box-comprador_autenticado'];

				 	if( $comprador_ingresso_aut == 1 ) {

				 		$comprador_ingresso = $_POST['meta_box-comprador_ingresso'];

				 	} else {

				 		$name = $_POST['name'];
				 		$email = $_POST['email'];
			 			$comprador_ingresso = array("name" => $name, "email" => $email);

				 	}

				 	$id_ingresso = $_POST['id_ingresso'];
				 	$id_evento = get_post_meta($id_ingresso, "meta_box-id_evento", true);
				 	$valor_ingresso = get_post_meta($id_ingresso, "meta_box-valor_ingresso", true);
			 		
			 		
					$date_negociacao =  date('Y-m-d');

				 	$vendedor_ingresso = get_post_meta($id_ingresso, "meta_box-author_ingresso", true);
				 	
				 	$meta_box_return_terms = $_POST['meta_box-return_terms'];

				 	$status_ingresso = 1;



			        $ingresso_title = get_the_title( $id_ingresso );
					$post_author_id = get_post_field( 'post_author', $id_ingresso );
					$display_name = get_the_author_meta('display_name', $post_author_id);
					$titulo_negociacao = $ingresso_title . ', ofertado por: ' . $display_name;


			       $args = array(
			         'post_type' => 'negociacao',
			         'post_status'=>'publish',
			         'post_title'=> $titulo_negociacao,
			       );


			       $post_id = wp_insert_post($args);

			       	update_post_meta($post_id, 'meta_box-id_evento', $id_evento);
			       	update_post_meta($post_id, 'meta_box-id_ingresso', $id_ingresso);
			       	update_post_meta($post_id, 'meta_box-valor_ingresso', $valor_ingresso);
			       	update_post_meta($post_id, 'meta_box-date_negociacao', $date_negociacao);

			       	update_post_meta($post_id, 'meta_box-vendedor_autenticado', 1);
			       	update_post_meta($post_id, 'meta_box-vendedor_ingresso', $vendedor_ingresso);

			       	update_post_meta($post_id, 'meta_box-comprador_autenticado', $comprador_ingresso_aut);

			       	update_post_meta($post_id, 'meta_box-comprador_ingresso', $comprador_ingresso);

			       	update_post_meta($post_id, 'meta_box-return_terms', $meta_box_return_terms);

			       	update_post_meta($post_id, 'meta_box-status_ingresso', $status_ingresso);

			       

    			
    			} elseif( $tipo_de_oferta == 'compra' ){

    				$vendedor_ingresso_aut = $_POST['meta_box-comprador_autenticado'];

				 	if( $vendedor_ingresso_aut == 1 ) {

				 		$vendedor_ingresso = $_POST['meta_box-vendedor_ingresso'];

				 	} else {

				 		$name = $_POST['name'];
				 		$email = $_POST['email'];
			 			$vendedor_ingresso = array("name" => $name, "email" => $email);

				 	}

				 	$id_ingresso = $_POST['id_ingresso'];
				 	$id_evento = get_post_meta($id_ingresso, "meta_box-id_evento", true);
				 	$valor_ingresso = get_post_meta($id_ingresso, "meta_box-valor_ingresso", true);
			 		
			 		
					$date_negociacao =  date('Y-m-d');

				 	$comprador_ingresso = get_post_meta($id_ingresso, "meta_box-author_ingresso", true);
				 	
				 	$meta_box_return_terms = $_POST['meta_box-return_terms'];

				 	$status_ingresso = 1;



			        $ingresso_title = get_the_title( $id_ingresso );
					$post_author_id = get_post_field( 'post_author', $id_ingresso );
					$display_name = get_the_author_meta('display_name', $post_author_id);
					$titulo_negociacao = $ingresso_title . ', ofertado por: ' . $display_name;




			       $args = array(
			         'post_type' => 'negociacao',
			         'post_status'=>'publish',
			         'post_title'=> $titulo_negociacao,
			       );


			       $post_id = wp_insert_post($args);

			       	update_post_meta($post_id, 'meta_box-id_evento', $id_evento);
			       	update_post_meta($post_id, 'meta_box-id_ingresso', $id_ingresso);
			       	update_post_meta($post_id, 'meta_box-valor_ingresso', $valor_ingresso);
			       	update_post_meta($post_id, 'meta_box-date_negociacao', $date_negociacao);

			       	update_post_meta($post_id, 'meta_box-comprador_autenticado', 1);
			       	update_post_meta($post_id, 'meta_box-comprador_ingresso', $comprador_ingresso);

			       	update_post_meta($post_id, 'meta_box-vendedor_autenticado', $vendedor_ingresso_aut);

			       	update_post_meta($post_id, 'meta_box-vendedor_ingresso', $vendedor_ingresso);

			       	update_post_meta($post_id, 'meta_box-return_terms', $meta_box_return_terms);

			       	update_post_meta($post_id, 'meta_box-status_ingresso', $status_ingresso);

    			}

    		} 

	    	

	       } elseif( !empty( $_POST['meta_box-tipo_operacao'] ) && isset( $_POST['meta_box-tipo_operacao'] ) && $_POST['meta_box-tipo_operacao'] == 'post_evento' ) {

	      		$titulo_evento = $_POST['titulo_evento'];
	      		$tipo_evento = $_POST['meta_box-tipo_evento'];
	      		$status_evento = $_POST['meta_box-status_evento'];
	      		$cidade_evento = $_POST['meta_box-cidade_evento'];
	      		$meta_box_date = $_POST['meta_box-date'];
	      		$ingresso_meia = $_POST['meta_box-ingresso_meia'];
	      		
	      		$usuario_autenticado = $_POST['meta_box-usuario_autenticado'];
	      		
	      		if( $usuario_autenticado == 1) {
	      			$usuario_evento = $_POST['meta_box-usuario_evento'];
	      		} elseif( $usuario_autenticado == 2) {
	      			$usuario_evento = array("name" => $_POST['name'], "email" => $_POST['email']);
	      		} else {
					$usuario_autenticado = '';	      			
	      		}
	      		
	      		$masculino = $_POST['masculino'];
	      		$feminino = $_POST['feminino'];
	      		$pista = $_POST['pista'];
	      		$front = $_POST['front'];
	      		$vip = $_POST['vip'];
	      		$camarote = $_POST['camarote'];
	      		$geral = $_POST['geral'];


	      		$args = array(
			         'post_type' => 'eventos-usuario',
			         'post_status'=>'publish',
			         'post_title'=> $titulo_evento,
			       );

	      		 $post_id = wp_insert_post($args);

			       	update_post_meta($post_id, 'meta_box-tipo_evento', $tipo_evento);
			       	update_post_meta($post_id, 'meta_box-id_ingresso', $id_ingresso);
			       	update_post_meta($post_id, 'meta_box-status_evento', $status_evento);
			       	update_post_meta($post_id, 'meta_box-cidade_evento', $cidade_evento);
			       	update_post_meta($post_id, 'meta_box-date', $meta_box_date);
			       	update_post_meta($post_id, 'meta_box-ingresso_meia', $ingresso_meia);
			       	update_post_meta($post_id, 'meta_box-usuario_autenticado', $usuario_autenticado);
			       	update_post_meta($post_id, 'meta_box-usuario_evento', $usuario_evento);

			       	update_post_meta($post_id, 'masculino', $masculino);
			       	update_post_meta($post_id, 'feminino', $feminino);
			       	update_post_meta($post_id, 'pista', $pista);
			       	update_post_meta($post_id, 'front', $front);
			       	update_post_meta($post_id, 'vip', $vip);
			       	update_post_meta($post_id, 'camarote', $camarote);
			       	update_post_meta($post_id, 'geral', $geral);


	       }
       


    // Don't forget to exit at the end of processing
    exit(json_encode($response));
}

function intepreta_labels($type, $value){
	
	if( $type == 'tipo_oferta'){
		
		switch ($value) {
			case '1':
				return 'VENDER INGRESSO';
				break;

			case '2':
				return 'COMPRAR INGRESSO';
				break;
		}

	}

	if( $type == 'status_ingresso'){
		
		switch ($value) {
    		case 1:
    			return 'Disponível';
			break;
			case 2:
    			return 'Vendido';
			break;
			case 3:
    			return 'Suspenso';
			break;
			case 4:
    			return 'Cancelado';
			break;
		}

	}
	if( $type == 'slug_status'){
		
		switch ($value) {
    		case 1:
    			return 'available';
			break;
			case 2:
    			return 'sale';
			break;
			case 3:
    			return 'suspended';
			break;
			case 4:
    			return 'cancel';
			break;
		}

	}
}