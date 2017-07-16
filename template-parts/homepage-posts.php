<!-- start show recent post -->
<h4><small>Latest Posts</small></h4>
<?php
global $post;
$args = array( 'posts_per_page' => 10, 'order'=> 'ASC', 'orderby' => 'title' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
  <div>
    <a href="<?php the_permalink(); ?>"><h2><small><?php the_title(); ?></small></h2></a>
    <hr>
    <p><?php the_excerpt(); ?></p>
  </div>
<?php
endforeach; 
wp_link_pages(); 
wp_reset_postdata();
?>
<!-- end show recent post -->
