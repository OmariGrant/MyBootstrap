<div class="col-sm-3 sidenav">
<h1>321 Backup</h1>

<?php get_template_part( 'template-parts/sidebar', 'nav' ); ?>



<!-- add widget area -->

<?php if ( is_active_sidebar( 'static_left_sidebar' ) ) : ?>
  <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
    <?php dynamic_sidebar( 'static_left_sidebar' ); ?>
  </div><!-- #primary-sidebar -->
<?php endif; ?>
<!-- end widget area -->

      </div>