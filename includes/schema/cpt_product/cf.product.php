<?php

/**
 * Registrar mi metabox para la entidad producto.
 */
add_action( 'add_meta_boxes', 'wpdocs_register_meta_boxes_product_cf' );

function wpdocs_register_meta_boxes_product_cf() {
    add_meta_box( 'meta-box-info-extra', __( 'Rating Product', 'info_product' ), 'metabox_info_product_callback', 'producto', 'side' );
}

 /**
 * Agrego mi custom-field para introducir info acerca de producto.
 */

function metabox_info_product_callback(){

    global $post;
     
    $_rating_product = get_post_meta( $post->ID, '_rating_product', true );

    if( !$_rating_product ){

        $_rating_product = 2;

    }

    ?>
    
    <label for="_rating_product">Valoración: </label>
    <br>
    <input name="_rating_product" type="number" min="0" max="5" value="<?php echo $_rating_product; ?>">
    <br>
    <small>Especifica la valoración</small>

    <?php
     
}

/**
 * Guardo la info especificada anteriormente.
 */

function product_save_post( $post_id, $post, $update  ) {
  
    if( isset( $_POST['_rating_product'] ) && !empty( $_POST['_rating_product'] )){

       update_post_meta( $post_id, '_rating_product', $_POST[ '_rating_product' ] );

    }

}

add_action( 'save_post', 'product_save_post',10 ,3 );





