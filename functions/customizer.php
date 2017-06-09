<?php
/**
* Create Logo Setting and Upload Control
*/
function b4st_settings($wp_customize) {
$wp_customize->add_setting('search_toggle');

$wp_customize->add_control( 'search_toggle', array(
    'type' => 'checkbox',
    'label' => 'Toggle Search in Header',
    'section' => 'title_tagline',
    'settings' => 'search_toggle',
) );
}
add_action('customize_register', 'b4st_settings');