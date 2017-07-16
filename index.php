<?php get_header(); ?>
<body>

<div class="container-fluid">
  <div class="row content">
    
<?php get_sidebar(); ?>

    <div class="col-sm-9">

    <?php get_template_part( 'template-parts/homepage', 'banner' ); ?>
    <?php get_template_part( 'template-parts/homepage', 'posts' ); ?>


    



      
      
    </div>
  </div>
</div>

<?php get_footer(); ?>