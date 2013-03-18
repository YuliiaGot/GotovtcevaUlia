<?php

/*
Template Name: works
*/

get_header(); ?>

<?php
$content_post = get_post('9');
echo $content_post->post_content;
?>

<?php get_sidebar('works'); ?>

    <div class="content">

        <?php
        $content_post = get_post('61');
        echo $content_post->post_content;
        ?>

        <?php
        $content_post = get_post('63');
        echo $content_post->post_content;
        ?>

    </div>

<?php get_footer(); ?>

