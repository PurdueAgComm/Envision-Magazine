<?php
  // if(is_page()) {
    wp_nav_menu( array(
        'menu'              => 'primary',
        'theme_location'    => 'primary',
        'depth'             => 2,
        // 'container'         => 'div',
        // 'container_class'   => 'collapse navbar-collapse',
        // 'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker())
    );
  // }



