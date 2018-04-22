<?php

$publication = new CPT(array(
	'post_type_name' => 'lecture',
	'singular' => __('Lecture', 'johndeanfield'),
	'plural' => __('Lectures', 'johndeanfield'),
	'slug' => 'lecture'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
    'menu_icon' => 'dashicons-video-alt3'
));