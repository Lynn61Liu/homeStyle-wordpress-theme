<?php
function define_widgets()
{
register_sidebar(
array(
'name' => esc_html__('Interesting Stuff'),
'id' => 'interesting-widget',
'description' => esc_html__('Add widgets here.....'),
'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',

)
);
}
add_action('widgets_init', 'define_widgets');
?>