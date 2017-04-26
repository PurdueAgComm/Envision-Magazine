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
<div class="section two-features">
  <div class="container-fluid bleed-both">
    <div class="col-sm-6 bleed-left">
      <a href="#">
        <!-- TODO: Change color to match story -->
        <div class="col-sm-12 feature-two" style="border-bottom: 7px solid green;">
          <div class="feature-headline-shader">
            <h1 class="feature-headline">Launching Technology from Discovery to Delivery</h1>
          </div>
        </div>
      </a>
    </div>
    <div class="col-sm-6 bleed-right">
      <a href="#">
        <!-- TODO: Change color to match story -->
        <div class="col-sm-12 feature-three" style="border-bottom: 7px solid #5B6870;">
          <div class="feature-headline-shader">
            <h1 class="feature-headline">Taming the Bear Market</h1>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>


<!--Big Idea & Spotlights-->
<div class="container idea-infocus">
  <div class="row">
    <div class="col-sm-6">
      <img src="https://dev.ag.purdue.edu/envision/wp-content/uploads/2017/04/dna-strand-example-do-not-use-not-ours-please.png" alt="DNA STRAND EXAMPLE" class="img-responsive">
      <!--
      <div class="headline">
        <h2 class="Alumni-headline">The Big Idea</h2>
      </div>
      -->
    </div>
    <div class="col-sm-6">
      <h2 class="infocus-header">In Focus Articles</h2>
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

<!--The View Ahead and Alumni section-->
<div class="section viewahead-alumni">
  <div class="container">
    <div class="row">
       <div class="col-md-6 viewahead">
        <div class="col-md-6 deansignature">
          <img src="https://dev.ag.purdue.edu/envision/wp-content/uploads/2017/04/Jay-profile-signature-1.png" alt="Jay Adkrige" class="img-responsive dean">
        </div>
        <div class="col-md-6 viewahead-text">
          <h2 class="viewahead-title">The View Ahead</h2>
          <p>Welcome to the inaugural edition of Envision, the new Purdue College of Agriculture magazine! Envision showcases the Purdue College of Agriculture’s distinctive strengths and global impact through the efforts of our faculty, staff, students, and alumni.</p>
          <a href="/experience/Pages/index.html" class="btn btn-1 btn-1a pull-right">
        Read More</a>
        </div>
     </div>
      <div class="col-md-6">
        <img src="https://dev.ag.purdue.edu/envision/wp-content/uploads/2017/04/alumnicloseup.jpg" alt="Alumni Close Up" class="img-responsive">
        <div class="headline">
          <h2 class="Alumni-headline">Alumni Close Up</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Ever True Campaign (Not a main feature area)-->
<div class="section evertrue-container">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
      <img src="https://dev.ag.purdue.edu/envision/wp-content/uploads/2017/04/EverTrue.jpg" alt="Ever True - The Campaign for Purdue University" class="img-responsive">
      </div>
       <div class="col-sm-6">
          <h2 class="evertrue-header">Ever True Campaign</h2>
          <p>The Ever True campaign to advance Purdue as a national and global leader spans July 2012 through June 2019. See what generous support of the College of Agriculture has accomplished so far. </p>
       </div>
    </div>
  </div>
</div>





<?php
//get_sidebar();
get_footer();


