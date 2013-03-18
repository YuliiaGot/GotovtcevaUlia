<?php
/*
Template Name: home
*/

get_header(); ?>

<?php
$content_post = get_post('4');
echo $content_post->post_content;
?>

<?php
$content_post = get_post('38');
echo $content_post->post_content;
?>

<?php
$content_post = get_post('43');
echo $content_post->post_content;
?>

<?php get_footer('home'); ?>
