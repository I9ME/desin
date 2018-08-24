/*=========================================================================================
// INICIO MAIN JS
========================================================================================= */


jQuery(function($) {
	$(document).ready(function() {




function LightboxClose() {
  //alert( "clicked" );
   $('#Lightbox--container').removeClass('Lightbox--active');
   $('#Lightbox--container').addClass('Lightbox--inactive');
   $('.Lightbox-window-content').html();
    jQuery('body').css({'overflow-y':'auto'});
}

$( ".LightboxClose" ).on( "click", LightboxClose );


 $('[data-paroller-factor]').paroller();





// /*=========================================================================================
// // CLOSE FUNCTION
// =========================================================================================*/

	});
});


/*
    jQuery(document)
        .ready(function () {
            //initialize paroller.js
            jQuery('[data-paroller-factor]').paroller();
            //initialize paroller.js and set options for elements with .paroller class
            jQuery('.paroller-example').paroller({
                factorXs: 0.1,
                factorSm: 0.1,
                factorMd: -0.4,
                factorLg: -0.5,
                factorXl: -0.6,
                factor: -0.4,
                type: 'foreground',
                direction: 'horizontal'
            });
        });
*/


// Abre o Lightbox
function LightboxCall(component) {
  //alert( "clicked" );
  jQuery('body').css({'overflow-y':'hidden'});
  jQuery('#Lightbox--container').removeClass('Lightbox--inactive');
  jQuery('#Lightbox--container').addClass('Lightbox--active');
  jQuery('.Lightbox-window-content').load( component );
}
//$( ".LightboxCall" ).on( "click", LightboxCall );


// Fecha o lightbox quando a tecla ESC é pressionada
function KeyUpEsc(evt) {
 
 if (evt.keyCode == 27) {
       jQuery('#Lightbox--container').removeClass('Lightbox--active');
       jQuery('#Lightbox--container').addClass('Lightbox--inactive');
       jQuery('.Lightbox-window-content').html( '' );
       jQuery('body').css({'overflow-y':'auto'});
    }
}

jQuery(document).on( "keyup", KeyUpEsc );

// Mais formas de Fechar o LightBox




