 <nav class="navbar navbar-transparent navbar-top-seriously" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>" style="padding-left: 0;">
                ENVISION
            </a>
    </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
          ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-search"></i></a></li>
          </ul>
      </div>
    </div>
</nav>

<!--
<nav class="navbar navbar-toggleable-md navbar-default bg-faded" data-toggle="affix">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  <a class="navbar-brand" href="#">
  ENVISION
  </a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'top-menu' ) ); ?>
  </div>
</nav>


<!--

<nav id="site-navigation" class="main-navigation" role="navigation">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'envision' ); ?></button>

</nav>
-->