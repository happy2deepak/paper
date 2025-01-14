<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<main class="page-content">
    <?php
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/content-page');
    endwhile;
    ?>
</main>

<?php get_footer(); ?>