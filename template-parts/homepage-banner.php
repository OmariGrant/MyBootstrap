<!-- start frontpage banner -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active bannerIndicator"></li>
    <li data-target="#myCarousel" data-slide-to="1" class="bannerIndicator"></li>
    <li data-target="#myCarousel" data-slide-to="2" class="bannerIndicator"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="bannerImage" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" alt="Devices that need to be backed up include - Laptops, Smartphones and Tablets" />
    </div>

    <div class="item">
      <img class="bannerImage" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.jpg"  alt="A spare hard drive could be used for a local backup" />
    </div>

    <div class="item">
      <img class="bannerImage" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide3.jpg" alt="Backing up to the cloud is a great offsite solution" />
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- end frontpage banner -->