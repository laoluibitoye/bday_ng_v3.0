<?php

/**
 * Template Name: Magnaquest Template
 *
 * Custom about template for bday theme to manage magnaquest login/register, subscribe, reset passworda and my account
 *
 * @since  v1.2.0
 * @package BDay
 */
get_header(); 

$page_slug = get_post_field( 'post_name' );
get_template_part( 'template-parts/magnaquest/'.$page_slug );

get_footer() 
?>