<?php 
function add_product_type()
{
    $labels = array(
    'name' => 'Product',
    'singular_name' => 'New Product',
    'add_new' => 'Add New',
    );

    $args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'show_ui' => true,
    'publicly_queryable' => true,
    // 'menu_icon' => 'dashicons-id-alt',
    'supports' => array(
    'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes','comments'
    )
    );
 register_post_type('Product', $args);
}
add_action('init', 'add_product_type', 5);
?>