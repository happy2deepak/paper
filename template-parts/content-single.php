<?php
/**
 * Template part for displaying single post content
 */
?>
<article class="post-content">
    <?php if (has_post_thumbnail()) : ?>
        <div class="featured-image">
            <?php the_post_thumbnail('full'); ?>
        </div>
    <?php endif; ?>
    
    <h1 class="post-title"><?php the_title(); ?></h1>
    
    <div class="post-meta">
        <span class="post-date"><?php the_date(); ?></span>
        <span class="post-author"><?php the_author(); ?></span>
        <div class="post-categories">
            <?php the_category(', '); ?>
        </div>
        <div class="post-tags">
            <?php the_tags('', ', '); ?>
        </div>
    </div>
    
    <div class="post-body">
        <?php the_content(); ?>
    </div>
</article>