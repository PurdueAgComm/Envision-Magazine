<?php
/**
 *
 * Template Name: Spring 2017
 *
**/

get_header(); ?>

<!-- PRIMARY FEATURE -->
<div class="landing">
  <div class="mag-headline">
    <span class="border">GUYANA RESEARCH HEADLINE</span>
    <div id="scroll-down" style="color: white;"><p>Read More</p> <i class="fa fa-chevron-down" aria-hidden="true"></i> </div>
  </div>
</div>
<br>
<!--TWO SECONDARY FEATURES -->
<div class="container-fluid bleed-both">
  <div class="col-sm-6 bleed-left">
    <a href="#">
      <!-- TODO: Change color to match story -->
      <div class="col-sm-12 feature-two" style="border-bottom: 7px solid green;"></div>
    </a>
  </div>
  <div class="col-sm-6 bleed-right">
    <a href="#">
      <!-- TODO: Change color to match story -->
      <div class="col-sm-12 feature-three" style="border-bottom: 7px solid purple;"></div>
    </a>
  </div>
</div>
<br>
<!--Big Idea & Spotlights-->
<div class="container">
  <div class="row">
    <div class="col-sm-6">
    <img src="https://dev.ag.purdue.edu/envision/wp-content/uploads/2017/04/dna-strand-example-do-not-use-not-ours-please.png" alt="DNA STRAND EXAMPLE" class="img-responsive">
    </div>
    <div class="col-sm-6">
      <div class="list-group">
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">List group item heading</h4>
        </a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">List group item heading</h4>
        </a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">List group item heading</h4>
        </a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">List group item heading</h4>
        </a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">List group item heading</h4>
        </a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">List group item heading</h4>
        </a>
      </div>
    </div>
  </div>
</div>

<div id="content" class="site-content">
  <div class="container">
    <div class="row">
    <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
            the_content();
        } // end while
      } // end if
    ?>
    </div>
  </div>
</div>

<?php
//get_sidebar();
get_footer();


