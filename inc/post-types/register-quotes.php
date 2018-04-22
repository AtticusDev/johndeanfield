<?php

$quote = new CPT(array(
	'post_type_name' => 'quote',
	'singular' => __('Quote', 'johndeanfield'),
	'plural' => __('Quotes', 'johndeanfield'),
	'slug' => 'quote'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields'),
    'menu_icon' => 'dashicons-format-quote'
));