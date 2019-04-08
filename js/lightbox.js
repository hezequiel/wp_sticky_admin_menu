jQuery( document ).ready( function() {
    kha_set_up_lightbox();
 });
 
 function kha_set_up_lightbox() {
     jQuery( '.kha-lightbox-wrap' ).click( function() {
         kha_close_lightbox();
     });
 
     jQuery( '.kha-lightbox' ).click( function(event) {
         event.stopPropagation();
     });
 
     jQuery('.kha-lightbox').on('click', '.kha-lightbox-close-mech', function(){
         kha_close_lightbox();
     });
 }
 
 function kha_open_lightbox( id ) {
     lightbox = jQuery( '#' + id );
     lightbox.show();
     setTimeout( function() { lightbox.css( 'opacity', '1' ); }, 100 );
 }
 
 function kha_close_lightbox() {
     lightbox = jQuery('.kha-lightbox-wrap');
     lightbox.css('opacity', '0');
     lightbox.hide();
 }
 