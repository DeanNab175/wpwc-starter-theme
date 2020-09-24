<nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('title'); ?></a>
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu( array(
        'theme_location'  => 'header',
        'depth'              => 2, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'navbarCollapse',
        'menu_class'      => 'navbar-nav mr-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
        ) ); ?>
    </div>
</nav>