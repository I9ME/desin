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
	load_theme_textdomain( 'ingressos-eventos' );



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

	// Add custom fonts, used in the main stylesheet.

	// Theme stylesheet.
	wp_enqueue_style('css-main', get_template_directory_uri() . '/assets/css/main.min.css', array(), null);


	wp_enqueue_script( 'js-main', get_theme_file_uri( '/assets/js/jquery-3.2.1.js' ), array(), null );

	wp_enqueue_script( 'js-jquery', get_theme_file_uri( '/assets/js/main.min.js' ), array(), null );

	//wp_enqueue_script( 'js-stellar', get_theme_file_uri( '/assets/js/stellar.min.js' ), array(), null );
	//wp_enqueue_script( 'js-stellar', get_theme_file_uri( '/assets/js/jquery.paroller.min.js' ), array(), null );

	
   

    wp_enqueue_script('main');


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
</defs>
</svg>';

?>

<?php

}
add_action( 'wp_enqueue_scripts', 'skeleton_scripts' );



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
// eventos
//========================================================

function projectsCandidate($number){

	switch ( $number ) {
		case 1 : 
			$varContent = 'emprego';
			break;
		
		case 2 : 
			$varContent = 'educacao';
			break;

		case 3 : 
			$varContent = 'saude';
			break;

		case 4 : 
			$varContent = 'transparencia';
			break;

		case 5 : 
			$varContent = 'infraestrutura';
			break;

		case 6 : 
			$varContent = 'economia';
			break;

		case 7 : 
			$varContent = 'assistenciaSocial';
			break;

		case 8 : 
			$varContent = 'habitacao';
			break;
	}

	echo $varContent;

}




// Legado Zoeweb



class Custom_Post_Type_Image_Upload {
	
	
	public function __construct() {
		
		add_action( 'init', array( &$this, 'init' ) );
		
		if ( is_admin() ) {
			add_action( 'admin_init', array( &$this, 'admin_init' ) );
		}
	}
	
	
	/** Frontend methods ******************************************************/
	
	//===========================================================================
	// CUSTOM POST TYPES
	//===========================================================================

	/**
	 * Register the custom post type
	 */
	public function init() {
		
	// eventos
	$labels_eventos = array(
		"name" => __( "Eventos", "" ),
		"singular_name" => __( "Evento", "" ),
		"menu_name" => __( "Eventos", "" ),
		"all_items" => __( "Todas as Eventos", "" ),
		"add_new" => __( "Adicionar novo", "" ),
		"add_new_item" => __( "Adicionar novo", "" ),
		"edit_item" => __( "Editar", "" ),
		"new_item" => __( "Novo Ingresso", "" ),
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
		"exclude_from_search" => true,
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
	$labels_ingressos = array(
		"name" => __( "Ingressos", "" ),
		"singular_name" => __( "Ingresso", "" ),
		"menu_name" => __( "Ingressos", "" ),
		"all_items" => __( "Todos os ingressos", "" ),
		"add_new" => __( "Adicionar novo", "" ),
		"add_new_item" => __( "Adicionar novo", "" ),
		"edit_item" => __( "Editar", "" ),
		"new_item" => __( "Novo clipping", "" ),
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

	$args_ingressos = array(
		"label" => __( "Ingressos", "" ),
		"labels" => $labels_ingressos,
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
		"rewrite" => array( "slug" => "ingressos", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-paperclip",
		"supports" => array( "title"),
		//'register_meta_box_cb' => 'noticias_meta_box'
	);

	register_post_type( "ingressos", $args_ingressos );

/*
	
	// Depoimentos
	$labels_depoimentos = array(
		"name" => __( "Depoimentos", "" ),
		"singular_name" => __( "Depoimento", "" ),
		"menu_name" => __( "Depoimentos", "" ),
		"all_items" => __( "Todos os depoimentos", "" ),
		"add_new" => __( "Adicionar novo", "" ),
		"add_new_item" => __( "Adicionar novo", "" ),
		"edit_item" => __( "Editar", "" ),
		"new_item" => __( "Novo projeto", "" ),
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

	$args_depoimentos = array(
		"label" => __( "Depoimentos", "" ),
		"labels" => $labels_depoimentos,
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
		"rewrite" => array( "slug" => "depoimentos", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-format-quote",
		"supports" => array( "title", "excerpt", "thumbnail"),
		//'register_meta_box_cb' => 'noticias_meta_box'
	);

	register_post_type( "depoimentos", $args_depoimentos );

*/
/*	// MATERIAIS
	$labels_materiais = array(
		"name" => __( "Materiais", "" ),
		"singular_name" => __( "Material", "" ),
		"menu_name" => __( "Materiais de sucesso", "" ),
		"all_items" => __( "Todos os materiais", "" ),
		"add_new" => __( "Adicionar novo material", "" ),
		"add_new_item" => __( "Adicionar novo material", "" ),
		"edit_item" => __( "Editar material", "" ),
		"new_item" => __( "Novo material", "" ),
		"view_item" => __( "Visualizar material", "" ),
		"view_items" => __( "Visualizar materiais", "" ),
		"search_items" => __( "Pesquisar materiais", "" ),
		"not_found" => __( "Sem resultados", "" ),
		"not_found_in_trash" => __( "Sem resultados", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
		"featured_image" => __( "Imagem destacada", "" ),
		"set_featured_image" => __( "Editar imagem destacada", "" ),
		"remove_featured_image" => __( "Remover imagem destacada", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
	);*/

	/*$args_materiais = array(
		"label" => __( "Materiais", "" ),
		"labels" => $labels_materiais,
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
		"rewrite" => array( "slug" => "material", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-learn-more",
		"supports" => array( "title", "editor", "thumbnail"),
	);

	register_post_type( "material", $args_materiais );*/



	// VÍDEOS
	/*
	$labels_videos = array(
		"name" => __( "Vídeos", "" ),
		"singular_name" => __( "Vídeos", "" ),
		"menu_name" => __( "Vídeos", "" ),
		"all_items" => __( "Todos os vídeos", "" ),
		"add_new" => __( "Adicionar novo vídeo", "" ),
		"add_new_item" => __( "Adicionar novo vídeo", "" ),
		"edit_item" => __( "Editar vídeo", "" ),
		"new_item" => __( "Novo vídeo", "" ),
		"view_item" => __( "Visualizar vídeo", "" ),
		"view_items" => __( "Visualizar vídeos", "" ),
		"search_items" => __( "Pesquisar vídeos", "" ),
		"not_found" => __( "Sem resultados", "" ),
		"not_found_in_trash" => __( "Sem resultados", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
		"featured_image" => __( "Imagem destacada", "" ),
		"set_featured_image" => __( "Editar imagem destacada", "" ),
		"remove_featured_image" => __( "Remover imagem destacada", "" ),
		"parent_item_colon" => __( "Relacionados", "" ),
	);

	$args_videos = array(
		"label" => __( "Materiais", "" ),
		"labels" => $labels_videos,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "video", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-video-alt",
		"supports" => array("title", "excerpt", "thumbnail"),
	);

	register_post_type( "video", $args_videos );
*/
	}

//==========================================
// METABOX
//========================================




//================================
// eventos
//================================
	
	
	/** Admin methods ******************************************************/
	
	
	/**
	 * Initialize the admin, adding actions to properly display and handle 
	 * the Book custom post type add/edit page
	 */
	public function admin_init() {
		global $pagenow;
		
		if ( $pagenow == 'post-new.php' || $pagenow == 'post.php' || $pagenow == 'edit.php' ) {
			
			add_action( 'add_meta_boxes', array( &$this, 'meta_boxes' ) );
			add_filter( 'enter_title_here', array( &$this, 'enter_title_here' ), 1, 2 );
			add_action( 'save_post', array( &$this, 'meta_boxes_save' ), 1, 2 );
		}
	}
	
	
	/**
	 * Save meta boxes
	 * 
	 * Runs when a post is saved and does an action which the write panel save scripts can hook into.
	 */
	public function meta_boxes_save( $post_id, $post ) {
		if ( empty( $post_id ) || empty( $post ) || empty( $_POST ) ) return;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		if ( is_int( wp_is_post_revision( $post ) ) ) return;
		if ( is_int( wp_is_post_autosave( $post ) ) ) return;
		if ( ! current_user_can( 'edit_post', $post_id ) ) return;
		if ( $post->post_type != 'eventos' ) return;
			
		$this->process_book_meta( $post_id, $post );
	}
	
	
	/**
	 * Function for processing and storing all book data.
	 */
	private function process_book_meta( $post_id, $post ) {
		update_post_meta( $post_id, '_image_id', $_POST['upload_image_id'] );
		//update_post_meta( $post_id, 'iframe_video', $_POST['multimidia_iframe_video'] );
		update_post_meta( $post_id, 'var_tipo', $_POST['multimidia_tipo'] );

		update_post_meta( $post_id, 'value_line_1', $_POST['multimidia_value_line_1'] );
		update_post_meta( $post_id, 'value_line_2', $_POST['multimidia_value_line_2'] );
		
		update_post_meta( $post_id, 'value_line_3', $_POST['multimidia_value_line_3'] );
		update_post_meta( $post_id, 'value_line_4', $_POST['multimidia_value_line_4'] );

		update_post_meta( $post_id, 'value_line_5', $_POST['multimidia_value_line_5'] );
		update_post_meta( $post_id, 'value_line_6', $_POST['multimidia_value_line_6'] );

		update_post_meta( $post_id, 'value_line_7', $_POST['multimidia_value_line_7'] );
		update_post_meta( $post_id, 'value_line_8', $_POST['multimidia_value_line_8'] );
	}
	
	
	/**
	 * Set a more appropriate placeholder text for the New Book title field
	 */
	public function enter_title_here( $text, $post ) {
		if ( $post->post_type == 'eventos' ) return __( 'Título do Projeto' );
		return $text;
	}
	
	
	/**
	 * Add and remove meta boxes from the edit page
	 */
	public function meta_boxes() {
		add_meta_box( 'book-image', __( 'Multimidia' ), array( &$this, 'book_image_meta_box' ), 'eventos', 'normal', 'high' );
	}
	
	
	/**
	 * Display the image meta box
	 */
	public function book_image_meta_box() {
		global $post;

		$var_tipo = intval( get_post_meta( $post->ID, 'var_tipo', true ) );
		//$iframe_video = esc_html( get_post_meta( $post->ID, 'iframe_video', true ) );
    	$value_line_1 = esc_html( get_post_meta( $post->ID, 'value_line_1', true ) );
    	$value_line_2 = esc_html( get_post_meta( $post->ID, 'value_line_2', true ) );

    	$value_line_3 = esc_html( get_post_meta( $post->ID, 'value_line_3', true ) );
    	$value_line_4 = esc_html( get_post_meta( $post->ID, 'value_line_4', true ) );

    	$value_line_5 = esc_html( get_post_meta( $post->ID, 'value_line_5', true ) );
    	$value_line_6 = esc_html( get_post_meta( $post->ID, 'value_line_6', true ) );

    	$value_line_7 = esc_html( get_post_meta( $post->ID, 'value_line_7', true ) );
    	$value_line_8 = esc_html( get_post_meta( $post->ID, 'value_line_8', true ) );
		
		$image_src = '';
		
		$image_id = get_post_meta( $post->ID, '_image_id', true );
		$image_src = wp_get_attachment_url( $image_id );
		
		?>

		<table>
		 <tr>
            <td style="width: 100%;"><strong>Recorrência</strong></td>
            <td>
                <select id="tipoCase" style="width: 200px" name="multimidia_tipo" onchange="showdiv()">
                <?php
                // Generate all items of drop-down list
                for ( $tipo = 3; $tipo >= 1; $tipo -- ) {
                	
                	switch ( $tipo ) {
                		case 1 : 
                			$titleOption = 'Semanal';
                			break;
                		
                		case 2 : 
                			$titleOption = 'Mensal';
                			break;

                		case 3 : 
                			$titleOption = 'Eventual';
                			break;

                	}


                ?>
                    <option value="<?php echo $tipo; ?>" <?php echo selected( $tipo, $var_tipo ) ?>  data-div="Div<?php echo $tipo; ?>">
                    	<?php echo $titleOption; ?>  
					</option>
                    <?php } ?>
                </select>
            </td>
        </tr>

       <!--  <tr id="Div1" class="contentTipo Div1 Div2 Div3 Div4 Div5 Div6 Div7" style="display: none;">
           <td style="width: 100%"><strong>Iframe ou Embed do vídeo</strong></td>
           <td><input type="text" size="80" name="multimidia_iframe_video" value="<?php //echo $iframe_video; ?>" placeholder="Cole o código HTML do iframe ou embed do vídeo" /></td>
       </tr> -->
    	 <tr id="Div2" class="contentTipo Div1 Div2 Div3 Div4 Div5 Div6 Div7 Div8 Div9 Div10 Div11 Div12" style="display: none;">
            <td style="width: 100%"><strong>Data da Oferta</strong></td>
            <td><input type="date" size="80" name="multimidia_value_line_1" value="<?php echo $value_line_1; ?>" /></td>
        </tr>
         <tr id="Div2" class="contentTipo Div1 Div2 Div3 Div4 Div5 Div6 Div7 Div8 Div9 Div10 Div11 Div12" style="display: none;">
            <td style="width: 100%"><strong>Data Final</strong></td>
            <td><input type="date" size="80" name="multimidia_value_line_2" value="<?php echo $value_line_2; ?>" /></td>
        </tr>

         <tr id="Div2" class="contentTipo Div1 Div2 Div3 Div4 Div5 Div6 Div7 Div8 Div9 Div10 Div11 Div12" style="display: none;">
            <td style="width: 100%"><strong>Quantidade Total</strong></td>
            <td><input type="number" size="80" name="multimidia_value_line_3" value="<?php echo $value_line_3; ?>" /></td>
        </tr>
         <tr id="Div2" class="contentTipo Div1 Div2 Div3 Div4 Div5 Div6 Div7 Div8 Div9 Div10 Div11 Div12" style="display: none;">
            <td style="width: 100%"><strong>Quantidade Gerada</strong></td>
            <td><input type="number" size="80" name="multimidia_value_line_4" disabled="disabled" value="<?php echo $value_line_4; ?>" /></td>
        </tr>

         <tr id="Div2" class="contentTipo Div1 Div2 Div3 Div4 Div5 Div6 Div7 Div8 Div9 Div10 Div11 Div12" style="display: none;">
            <td style="width: 100%"><strong>Valor Normal</strong></td>
            <td><input type="text" size="80" name="multimidia_value_line_5" value="<?php echo $value_line_5; ?>" /></td>
        </tr>
         <tr id="Div2" class="contentTipo Div1 Div2 Div3 Div4 Div5 Div6 Div7 Div8 Div9 Div10 Div11 Div12" style="display: none;">
            <td style="width: 100%"><strong>Valor Promocional</strong></td>
            <td><input type="text" size="80" name="multimidia_value_line_6" value="<?php echo $value_line_6; ?>" /></td>
        </tr>

         <tr id="Div2" class="contentTipo Div1 Div2 Div3 Div4 Div5 Div6 Div7 Div8 Div9 Div10 Div11 Div12" style="display: none;">
            <td style="width: 100%"><strong>Descrição</strong></td>
            <td><textarea style="width: 100%" rows="7" name="multimidia_value_line_7" /><?php echo $value_line_7; ?></textarea></td>
        </tr>
         <tr id="Div2" class="contentTipo Div1 Div2 Div3 Div4 Div5 Div6 Div7 Div8 Div9 Div10 Div11 Div12" style="display: none;">
            <td style="width: 100%"><strong>Regras Gerais</strong></td>
            <td><textarea style="width: 100%" rows="7" name="multimidia_value_line_8" /><?php echo $value_line_8; ?></textarea></td>
        </tr>

         <tr id="Div1" class="contentTipo Div1 Div2 Div3 Div4 Div5 Div6 Div7 Div8 Div9 Div10 Div11 Div12" style="display: none;">
            <td style="width: 100%"><strong>Imagem de capa</strong></td>
            <td>
            	<img id="book_image" src="<?php echo $image_src ?>" style="max-width:280px;" />
		<input type="hidden" name="upload_image_id" id="upload_image_id" value="<?php echo $image_id; ?>" />
		<p>
			<a title="<?php esc_attr_e( 'Incluir / Alterar imagem' ) ?>" href="#" id="set-book-image"><?php _e( 'Incluir / Alterar imagem' ) ?></a>
			<a title="<?php esc_attr_e( 'Remover imagem' ) ?>" href="#" id="remove-book-image" style="<?php echo ( ! $image_id ? 'display:none;' : '' ); ?>"><?php _e( 'Remover imagem' ) ?></a>
		</p>
            </td>
        </tr>
    </table>
		
		<script type="text/javascript">
			
			function showdiv()
				{
				   var divID = $("#tipoCase option:selected").attr("data-div");
				   divID = divID.replace(" ","");
				   // $("tr#"+divID).show();
				   // $("tr#"+divID).siblings().hide();
   					$("tr.contentTipo").hide();
   					$("tr."+divID).show();
				}

		jQuery(document).ready(function($) {

			// Hide Or show by Tipo
			var divID = $("#tipoCase option:selected").attr("data-div");
			$("tr."+divID).show();
			
			// save the send_to_editor handler function
			window.send_to_editor_default = window.send_to_editor;
	
			$('#set-book-image').click(function(){
				
				// replace the default send_to_editor handler function with our own
				window.send_to_editor = window.attach_image;
				tb_show('', 'media-upload.php?post_id=<?php echo $post->ID ?>&amp;type=image&amp;TB_iframe=true');
				
				return false;
			});
			
			$('#remove-book-image').click(function() {
				
				$('#upload_image_id').val('');
				$('img').attr('src', '');
				$(this).hide();
				
				return false;
			});
			
			// handler function which is invoked after the user selects an image from the gallery popup.
			// this function displays the image and sets the id so it can be persisted to the post meta
			window.attach_image = function(html) {
				
				// turn the returned image html into a hidden image element so we can easily pull the relevant attributes we need
				$('body').append('<div id="temp_image">' + html + '</div>');
					
				var img = $('#temp_image').find('img');
				
				imgurl   = img.attr('src');
				imgclass = img.attr('class');
				imgid    = parseInt(imgclass.replace(/\D/g, ''), 10);
	
				$('#upload_image_id').val(imgid);
				$('#remove-book-image').show();
	
				$('img#book_image').attr('src', imgurl);
				try{tb_remove();}catch(e){};
				$('#temp_image').remove();
				
				// restore the send_to_editor handler function
				window.send_to_editor = window.send_to_editor_default;
				
			}
	
		});
		</script>
		<?php
	}
}

// finally instantiate our plugin class and add it to the set of globals
$GLOBALS['custom_post_type_image_upload'] = new Custom_Post_Type_Image_Upload();




//================================
// MATERIAIS e VÍDEOS
//================================



// Cria a meta_box
function conteudo_metabox() {
	
	// Tipos de post para a metabox
	$screens = array( 'clipping', 'video', 'depoimentos' );

	foreach ( $screens as $screen ) {

		add_meta_box(
			'conteudo_meta_box',          // ID da Meta Box 
			'Campos adicionais do conteúdo',   // Título
			'conteudo_metabox_callback',  // Função de callback
			$screen,                    // Local onde ela vai aparecer
			'normal',                   // Contexto
			'high'                      // Prioridade
		);
		
	} // foreach
	
} 

// Cria a meta_box
add_action( 'add_meta_boxes', 'conteudo_metabox', 1 );

// Essa é a função que vai exibir os dados para o usuário
function conteudo_metabox_callback( $post ) {

	// Adiciona um campo para verificação posterior
	wp_nonce_field( 'conteudo_custom_metabox', 'conteudo_custom_metabox_nonce' );
	
	$_urlswitch = get_post_meta( $post->ID, '_urlswitch', true );

	if ( 'clipping' == get_post_type() ) {
		$placeholder = 'Código do Ingresso';
		$title = 'CÓDIGO';
	}
	elseif ( 'video' == get_post_type() ) {
		$placeholder = 'Cole aqui embed ou iframe do Vídeo';
		$title = 'EMBED DO VÍDEO';
	}
	elseif ( 'depoimentos' == get_post_type() ) {
		$placeholder = 'Digite aqui o cargo';
		$title = 'CARGO';
	}

	
	echo '<h4>' . $title . '</h4>';
	echo '<input type="text" name="_urlswitch" class="widefat" value="' . esc_html( $_urlswitch ) . '" placeholder="' . $placeholder . '" />';
}

function conteudo_save_custom_metabox_data( $post_id ) {

	// Verifica o campo nonce
	if ( ! isset( $_POST['conteudo_custom_metabox_nonce'] ) ) {
		return;
	}

	// Verifica se o campo nonce é válido
	if ( ! wp_verify_nonce( $_POST['conteudo_custom_metabox_nonce'], 'conteudo_custom_metabox' ) ) {
		return;
	}

	// Se o formulário ainda não foi enviado (estiver fazendo autosave) 
	// não faremos nada
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Verifica as permissões do usuário (mínimo: editar post).
	if ( isset( $_POST['post_type'] ) && 'contato' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* Perfeito, agora vamos aos campos. */
	
	$_urlswitch = isset( $_POST['_urlswitch'] ) ? $_POST['_urlswitch'] : null;

	// Atualiza os dados no BD
	
	update_post_meta( $post_id, '_urlswitch', $_urlswitch );
}
add_action( 'save_post', 'conteudo_save_custom_metabox_data' );









//======================
// Taxonomies
//=====================

add_action( 'init', 'create_my_taxonomies', 0 );

function create_my_taxonomies() {
    register_taxonomy(
        'categoria-material',
        'material',
        array(
            'labels' => array(
                'name' => 'Categoria de Material',
                'add_new_item' => 'Adicionar nova Categoria',
                'new_item_name' => "Nova Categoria"
            ),
            'show_ui'           => true,
	        'show_admin_column' => true,
	        'query_var'         => true,
	        'rewrite'           => array( 'slug' => 'categoria-material' ),
	        'public' => true,
	        'hierarchical' => true,
	        'show_ui' => true,
	        'show_in_nav_menus' => true,
	        'query_var' => true,
	        'publicly_queryable' => true,
	        'capability_type' => 'post',
	        'hierarchical' => true,
	        'has_archive' => true
        )
    );
    register_taxonomy(
        'categoria-video',
        'video',
        array(
            'labels' => array(
                'name' => 'Categoria de Vídeo',
                'add_new_item' => 'Adicionar nova Categoria',
                'new_item_name' => "Nova Categoria"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'show_admin_column' => true,
			'query_var'         => true,
			'rewrite' => array( 'slug' => 'categoria-video' ),
			'hierarchical' => true,
        )
    );
}

//==================================
// Filter and Columns in postTypes
//==================================

add_filter( 'manage_edit-cases_sucesso_columns', 'my_columns' );

function my_columns( $columns ) {
    $columns['var_tipo'] = 'Tipo';
    unset( $columns['comments'] );
    return $columns;
}

add_action( 'manage_posts_custom_column', 'populate_columns' );

function populate_columns( $column ) {
    if ( 'var_tipo' == $column ) {
        $tipo = get_post_meta( get_the_ID(), 'var_tipo', true );
        
        switch ($tipo) {
        	case 1:
        		echo 'Vídeo';
        		break;
        	case 2:
        		echo 'Depoimento';
        		break;
        	case 3:
        		echo 'Apenas logotipo';
        		break;
        	
        }
    }
}

add_filter( 'manage_edit-cases_sucesso_sortable_columns', 'sort_me' );

function sort_me( $columns ) {
    $columns['var_tipo'] = 'var_tipo';
 
    return $columns;
}


//add_filter( 'request', 'column_ordering' );
 
add_filter( 'request', 'column_orderby' );
 
function column_orderby ( $vars ) {
    if ( !is_admin() )
        return $vars;
    
    if ( isset( $vars['orderby'] ) && 'var_tipo' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array( 'meta_key' => 'var_tipo', 'orderby' => 'meta_value_num' ) );
    }
    return $vars;
}


//=============================
// Trata as páginas de conteúdo
//=============================


// POST_TYPE no Search
function get_post_type_search($variable_compare) {

	if( isset( $_GET['post_type'] ) ) {
		
		$get_post_type = $_GET['post_type'];
		
		if( !empty($get_post_type) && $get_post_type  == $variable_compare ){

			return true;

		} 

		
	}

}


//==================================
//Paginação BLOG
//==================================

function pagination_bar( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(4, get_query_var('paged'));

        $pagination =  paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'prev_next' => false,
            'current' => $current_page,
            'total' => $total_pages,
            'before_page_number' => '<span class="navController navController--center navController--left navController--all navController--button  navController--tabs ReadMore  Button ButtonLink u-lineHeight0 hover is-animating u-marginRight--inter u-flex"><span class="ShowText">',
            'after_page_number' => '</span></span>',
            'prev_text' => '<span class="ShowText">%1$s</span>',
            'next_text' => '<span class="ShowText">%1$s</span>',
        ));



        echo $pagination;


    }
}

// Páginas de Orçamento


function is_page_budget(){

global $post;     // if outside the loop

if( is_page() ) { 

	if ( $post->post_parent) {

		$pageParent = '';
		$hasChild = 'yes';
		/* is it a page */
	
		//global $post;
	        /* Get an array of Ancestors and Parents if they exist */
		$parents = get_post_ancestors( $post->ID );
	        /* Get the top Level page->ID count base 1, array base 0 so -1 */ 
		$id = ($parents) ? $parents[count($parents)-1]: $post->ID;
		/* Get the parent and set the $class with the page slug (post_name) */
	    $parent = get_post( $id );
		$pageParent = $parent->post_name;

		if( $pageParent == 'orcamentos') {

			return array('verify' => 'yes', 'hasChild' => $hasChild );

		}
	}
	elseif ( is_page('orcamentos') ) {

		$hasChild = 'no';

		return array('verify' => 'yes', 'hasChild' => $hasChild );

		}

	}
}



function link_for_budgets($slug_page, $slug_custom){

//global $post;     // if outside the loop

	if( is_page() ) { 

		if ( $slug_custom != '' ){

			$page = get_page_by_path( $slug_custom );
		
		} else {

			$page = get_page_by_path( $slug_page );

		}


		if ( isset($page) ) {

			return get_permalink($page);
		}
		else {

			return get_permalink( get_page_by_path( 'orcamentos' ) );
		}
	
	}
}

// Pega o Slug da Página Corrente
function get_slug_current_page(){
	
	if( is_page() ) {

		global $post;
    	
    	return $post->post_name;
	
	} 
}

// Gera o código do INGRESSO
function generateRandomString($length = 10) {

			    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			    $charactersLength = strlen($characters);
			    $randomString = '';
			    for ($i = 0; $i < $length; $i++) {
			        $randomString .= $characters[rand(0, $charactersLength - 1)];
			    }
			    return $randomString;
			}





//================================
// METABOX - INGRESSOS
//================================



// Cria a meta_box
function coupon_metabox() {
	
	// Tipos de post para a metabox
	$screens = array( 'ingressos', 'video', 'depoimentos' );

	foreach ( $screens as $screen ) {

		add_meta_box(
			'coupon_meta_box',          // ID da Meta Box 
			'Campos adicionais do conteúdo',   // Título
			'coupon_metabox_callback',  // Função de callback
			$screen,                    // Local onde ela vai aparecer
			'normal',                   // Contexto
			'high'                      // Prioridade
		);
		
	} // foreach
	
} 

// Cria a meta_box
add_action( 'add_meta_boxes', 'coupon_metabox', 1 );

// Essa é a função que vai exibir os dados para o usuário
function coupon_metabox_callback( $post ) {

	// Adiciona um campo para verificação posterior
	wp_nonce_field( 'coupon_custom_metabox', 'coupon_custom_metabox_nonce' );
	
	$_id_promo = get_post_meta( $post->ID, '_id_promo', true );
	$_titulo_promo = get_post_meta( $post->ID, '_titulo_promo', true );
	$_status_coupon = get_post_meta( $post->ID, '_status_coupon', true );


	
	
	echo '<h4>PROMOÇÃO</h4>';
?>

<select id="evento" style="width: 100%" name="evento">
                
<?php 

	$newsArgs = array( 'post_type' => 'eventos', 'meta_key' => 'value_line_2', 'orderby' => 'meta_value_num', 'order' => 'ASC');
	$newsLoop = new WP_Query( $newsArgs );
			
		if ( $newsLoop->have_posts() ):
			 while ( $newsLoop->have_posts() ) : $newsLoop->the_post();
 ?>

               
        <option value="<?php echo get_the_ID(); ?>" <?php if( get_the_ID() == $_id_promo ) { echo 'selected'; } ?>>
        	<?php echo get_the_title(); ?>  
		</option>

       <?php endwhile; ?>

       <?php 
			endif; 
			wp_reset_postdata(); 
		?>

</select>

<?php


	echo '<h4>STATUS DO INGRESSO</h4>';

	?>


<select style="width: 200px" name="_status_coupon">
	<?php
	// Generate all items of drop-down list
	for ( $_status_coupon_opt = 4; $_status_coupon_opt >= 1; $_status_coupon_opt -- ) {
		
		switch ( $_status_coupon_opt ) {
			case 1 : 
				$titleOption = 'Cancelado';
				break;
			
			case 2 : 
				$titleOption = 'Expirado';
				break;

			case 3 : 
				$titleOption = 'Utilizado';
				break;

			case 4 : 
				$titleOption = 'Ativo';
				break;
		}

	?>
    <option value="<?php echo $_status_coupon_opt; ?>" <?php echo selected( $_status_coupon_opt, $_status_coupon ) ?>>
    	<?php echo $titleOption; ?>  
	</option>
    <?php } ?>
</select>


	<?php
	
}

function coupon_save_custom_metabox_data( $post_id ) {

	// Verifica o campo nonce
	if ( ! isset( $_POST['coupon_custom_metabox_nonce'] ) ) {
		return;
	}

	// Verifica se o campo nonce é válido
	if ( ! wp_verify_nonce( $_POST['coupon_custom_metabox_nonce'], 'coupon_custom_metabox' ) ) {
		return;
	}

	// Se o formulário ainda não foi enviado (estiver fazendo autosave) 
	// não faremos nada
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	

	/* Perfeito, agora vamos aos campos. */
	
	$_id_promo = isset( $_POST['_id_promo'] ) ? $_POST['_id_promo'] : null;

	$_titulo_promo = isset( $_POST['_titulo_promo'] ) ? $_POST['_titulo_promo'] : null;

	$_status_coupon = isset( $_POST['_status_coupon'] ) ? $_POST['_status_coupon'] : null;

	// Atualiza os dados no BD
	
	update_post_meta( $post_id, '_id_promo', $_id_promo );

	update_post_meta( $post_id, '_titulo_promo', $_titulo_promo );

	update_post_meta( $post_id, '_status_coupon', $_status_coupon );
}
add_action( 'save_post', 'coupon_save_custom_metabox_data' );




// Salva os ingressos gerados por usuários

function save_coupon_data( $code_coupon, $promocao_id, $promocao_title ) {


       $args = array(
         'post_type' => 'ingressos',
         'post_status'=>'publish',
         'post_title'=>$code_coupon,
       );


       $post_id = wp_insert_post($args);

        update_post_meta($post_id, '_id_promo', $promocao_id);
        update_post_meta($post_id, '_titulo_promo', $promocao_title);
        update_post_meta($post_id, '_status_coupon', 'ativo');

 }

