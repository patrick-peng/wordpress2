<?php

add_action( 'add_meta_boxes', 'myplugin_add_custom_box' );
add_action( 'save_post', 'myplugin_save_postdata' );
function myplugin_add_custom_box() {
    $screens = array( 'product' );
    foreach ($screens as $screen) {
        add_meta_box(
            'myplugin_sectionid',
            __( 'My', 'myplugin_textdomain' ),
            'myplugin_inner_custom_box',
            $screen
        );
    }
}
function myplugin_inner_custom_box( $post ) {
  wp_nonce_field( plugin_basename( __FILE__ ), 'myplugin_noncename' );
  //General Details   Paper & Specs   Packing & shipment   Learning center
  $general_details_value = get_post_meta( $post->ID, 'general_details', true );
  $paper_specs_value = get_post_meta( $post->ID, 'paper_specs', true );
  $packing_shipment_value = get_post_meta( $post->ID, 'packing_shipment', true );
  $learning_center_value = get_post_meta( $post->ID, 'general_details', true );
  ?>
  <label for="General Details">General Details</label><br/>
  <textarea id="general_details" name="general_details" cols="100" rows="5" 
  >
        <?php echo trim(esc_attr($general_details_value)); ?>
  </textarea><br/>

  <label for="paper_specs">Paper & Specs</label><br/>
  <textarea id="paper_specs" name="paper_specs" cols="100" rows="5" >
        <?php echo trim(esc_attr($paper_specs_value)); ?>
  </textarea><br/>

  <label for="packing_shipment">Packing & Shipment</label><br/>
  <textarea id="packing_shipment" name="packing_shipment" cols="100" rows="5" >
        <?php echo trim(esc_attr($packing_shipment_value)); ?>
  </textarea><br/>

  <label for="learning_center">Learning Center</label><br/>
  <textarea id="learning_center" name="learning_center" cols="100" rows="5" >
        <?php echo trim(esc_attr($packing_shipment_value)); ?>
  </textarea><br/>
<?php
}
function myplugin_save_postdata( $post_id ) {
  if ( 'page' == $_POST['post_type'] ) {
    if ( ! current_user_can( 'edit_page', $post_id ) )
        return;
  } else {
    if ( ! current_user_can( 'edit_post', $post_id ) )
        return;
  }
  if ( ! isset( $_POST['myplugin_noncename'] ) || ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename( __FILE__ ) ) )
      return;
  $post_ID = $_POST['post_ID'];
  $general_details = trim(sanitize_text_field( $_POST['general_details'] ));
  $paper_specs = trim(sanitize_text_field( $_POST['paper_specs'] ));
  $packing_shipment = trim(sanitize_text_field( $_POST['packing_shipment'] ));
  $learning_center = trim(sanitize_text_field( $_POST['learning_center'] ));
 
    update_post_meta($post_ID, 'general_details', $general_details);
    update_post_meta($post_ID, 'paper_specs', $paper_specs);
    update_post_meta($post_ID, 'packing_shipment', $packing_shipment);
    update_post_meta($post_ID, 'learning_center', $learning_center);
}
?>