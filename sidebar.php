<div class="col-sm-3 sidenav">
<h1>321 Backup</h1>

<?php get_template_part( 'template-parts/sidebar', 'nav' ); ?>
<?php get_template_part( 'template-parts/searchbar'); ?>
<?php the_widget( 'WP_Widget_Recent_Posts', $instance, $args ); ?> 
<?php the_widget( 'WP_Widget_Meta', $instance, $args ); ?> 



      </div>