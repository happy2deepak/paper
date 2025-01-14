<?php
/**
 * The main template file
 */

get_header();
?>

<main class="blog-listing">
    <?php if (have_posts()) : ?>
        <div class="posts-grid">
            <?php 
            while (have_posts()) : 
                the_post();
                get_template_part('template-parts/content');
            endwhile; 
            ?>
        </div>
        
        <?php the_posts_pagination(); ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>