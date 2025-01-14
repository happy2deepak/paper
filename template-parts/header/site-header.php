<?php
/**
 * Displays header site branding
 */
?>
<header class="site-header">
    <div class="site-branding">
        <?php
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
            echo '<h1 class="site-title"><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
        }
        ?>
    </div>
    
    <nav class="main-navigation">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'menu_class' => 'primary-menu',
            'container' => false,
        ]);
        ?>
    </nav>
</header>