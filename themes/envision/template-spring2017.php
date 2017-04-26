<?php
/**
 *
 * Template Name: Spring 2017
 *
**/

get_header('faded'); ?>

<!-- PRIMARY FEATURE -->
<!-- TODO: change highlight color to that of story -->
<div class="landing" style="border-bottom: 7px solid #f87428;">
  <div class="mag-headline">
    <div class="border">FUNGI HUNTERS UNCOVER HIDDEN WORLDS</div>
    <div id="scroll-down" style="color: white;"><p>Read More &raquo;</p> </div>
  </div>
</div>
<br>

<!-- <?php
  if ( have_posts() ) { ?>
    <div id="content" class="site-content">
      <div class="container">
        <div class="row">
          <div class="alert alert-info">
          <p>
            <?php
              while ( have_posts() ) {
                the_post();
                  the_content();
              } // end while
              ?>
          </p>
          </div>
        </div>
      </div>
    </div>
    <br>
  <?php } // end if ?>
-->

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
<div class="container idea-infocus">
  <div class="row">
    <div class="col-sm-6">
    <img src="https://dev.ag.purdue.edu/envision/wp-content/uploads/2017/04/dna-strand-example-do-not-use-not-ours-please.png" alt="DNA STRAND EXAMPLE" class="img-responsive">
    </div>
    <div class="col-sm-6">
      <h2 class="infocus-header">{ In Focus Articles</h2>
      <ul class="infocus">
        <li><a href="#">Sculpture honoring pioneering entomologists</a></li>
        <li><a href="#">Union Tap Room features local brews and science</a></li>
        <li><a href="#">New website acts as information hub for Indiana CFOs</a></li>
        <li><a href="#">Vanishing Soundscapes Initiative featured on CNN</a></li>
        <li><a href="#">Breakthrough discovery for detecting cancer</a></li>
        <li><a href="#notseen">Plant scientist wins award for early-career innovation</a></li>
      </ul>
    </div>
  </div>
</div>



<?php
//get_sidebar();
get_footer();


