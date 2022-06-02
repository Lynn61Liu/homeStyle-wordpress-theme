<?php 
function add_custom_font_sizes(){

    add_theme_support(
          'editor-font-sizes',
          array(
              array(
                  'name'      => esc_html__('Extra small'),
                  'size'      => 16,
                  'slug'      => 'extra-small',
              ),
              array(
                  'name'      => esc_html__('Small'),
                  'size'      => 18,
                  'slug'      => 'small',
              ),
              array(
                  'name'      => esc_html__('Normal'),
                  'size'      => 20,
                  'slug'      => 'normal',
              ),
              array(
                  'name'      => esc_html__('Large'),
                  'size'      => 24,
                  'slug'      => 'large',
              ),
              array(
                  'name'      => esc_html__('Extra large'),
                  'size'      => 40,
                  'slug'      => 'extra-large',
              ),
              array(
                  'name'      => esc_html__('Huge'),
                  'size'      => 96,
                  'slug'      => 'huge',
              ),
              array(
                  'name'      => esc_html__('Gigantic'),
                  'size'      => 144,
                  'slug'      => 'gigantic',
              ),
          )
      );
  
  
  }
  
  
  add_action('after_setup_theme', 'add_custom_font_sizes');
  
?>