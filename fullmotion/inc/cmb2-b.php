<?php
   
//Course Category section start
add_action( 'cmb2_init', 'videopost' );
function videopost() {

$prefix = 'videopost';
    $cmb = new_cmb2_box( array(
    'id' => $prefix . 'categories',
    'title' => __( 'Course Categories', 'fullmotion' ),
    'object_types' => array( 'videopost' ),
    'context' => 'normal',
    'priority' => 'default',
    ) );
    
    
    $cmb->add_field( array(
        'name' => __( 'Button Name', 'fullmotion' ),
        'id'   => 'button',
        'type' => 'text',
    ) );
    $cmb->add_field( array(
        'name' => __( 'Video Url', 'fullmotion' ),
        'id'   => 'buttonurl',
        'type' => 'text',
    ) );
}
//Course Category  section End
