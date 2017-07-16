
<!-- start nav bar -->

      
    <?php 
    $navSettings = array( 'menu' => '', 'container' => 'div', 'container_class' => '', 'container_id' => '', 'menu_class' => 'nav nav-pills nav-stacked', 'menu_id' => '', 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'item_spacing' => 'preserve',
    'depth' => 0, 'walker' => '', 'theme_location' => '' );

    wp_nav_menu($navSettings);
     ?>
     
     <!-- end nav bar -->