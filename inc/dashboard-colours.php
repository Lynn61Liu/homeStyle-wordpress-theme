<?php
function add_custom_colours()
{
add_theme_support('editor-color-palette', array(
array(
'name' => esc_attr__('Smokey Black'),
'slug' => 'smokey-black',
'color' => '#0D0A0B',
),
array(
'name' => esc_attr__('Charcoal'),
'slug' => 'charcoal',
'color' => '#454955',
),
array(
'name' => esc_attr__('Magnolia'),
'slug' => 'magnolia',
'color' => '#F3EFF5',
),
array(
'name' => esc_attr__('Green RYB'),
'slug' => 'green-ryb',
'color' => '#72B01D',
),
array(
'name' => esc_attr__('Sap Green'),
'slug' => 'sap-green',
'color' => '#3F7D20',
),
));
}

add_action('after_setup_theme', 'add_custom_colours');


?>