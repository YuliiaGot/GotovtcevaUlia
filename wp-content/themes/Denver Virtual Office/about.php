<?php

/*
Template Name: about
*/

get_header(); ?>

<?php
$content_post = get_post('6');
echo $content_post->post_content;
?>

<?php get_sidebar(); ?>

<?php
$content_post = get_post('47');
echo $content_post->post_content;
?>

<?php get_footer(); ?>
