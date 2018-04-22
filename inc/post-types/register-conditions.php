<?php

$condition = new CPT(array(
	'post_type_name' => 'condition',
	'singular' => __('Condition', 'johndeanfield'),
	'plural' => __('conditions', 'johndeanfield'),
	'slug' => 'condition'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
    'menu_icon' => 'dashicons-clipboard'
));