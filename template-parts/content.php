<?php
/**
 * Template part for displaying posts in the blog listing
 */
?>
<article class="post-card">
    <a href="<?php the_permalink(); ?>" class="post-link">
        <?php if (has_post_thumbnail()) : ?>
            <div class="featured-image">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>
        
        <h2 class="post-title"><?php the_title(); ?></h2>
        
        <div class="post-meta">
            <div class="categories">
                <?php the_category(', '); ?>
            </div>
            <div class="tags">
                <?php the_tags('', ', '); ?>
            </div>
        </div>
        
        <div class="post-excerpt">
            <?php the_excerpt(); ?>
        </div>
    </a>
</article>