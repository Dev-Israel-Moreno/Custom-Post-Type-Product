<?php

/**
 * Muestro el tipo de post de la entrada correspondiente a su single adyacente al titulo
 */

add_filter( 'the_title', 'AddPostName',10,2);

function AddPostName ( $title, $id){

  if ( is_single() ) {
   
    if( get_post_type( $id ) == 'producto' ){

      $_rating_product = get_post_meta( $id, '_rating_product', true );
    
      if( $_rating_product ){
           
            $title = '( ' .$_rating_product. ' ' .  __( 'Estrellas', 'codigo_vivo' ) . ' ) ' . $title; 

      }
     
    } 
    
  }

  return $title;

}
