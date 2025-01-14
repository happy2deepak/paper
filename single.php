<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<main class="single-post">
    <?php
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/content-single');
    endwhile;
    ?>
</main>

<?php get_footer(); ?>