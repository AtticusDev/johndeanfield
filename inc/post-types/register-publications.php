<?php

$publication = new CPT(array(
	'post_type_name' => 'publication',
	'singular' => __('Publication', 'johndeanfield'),
	'plural' => __('Publications', 'johndeanfield'),
	'slug' => 'publication'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
    'menu_icon' => 'dashicons-format-aside'
));