<?php
/**
 *
 * Template Name: Spring 2017
 *
**/

get_header('faded'); ?>


<style>
/* FOG ANIMATION */
.fogwrapper {
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
}

#foglayer_01 {
  width: 200%;
  min-height: 70vh;
  height: 100%;
  animation: foglayer_01_opacity 10s linear infinite, foglayer_moveme 15s linear infinite;
  -webkit-animation: foglayer_01_opacity 10s linear infinite, foglayer_moveme 15s linear infinite;
}
#foglayer_01 .image01, #foglayer_01 .image02 {
  background: url("/envision/wp-content/uploads/2017/05/fog1.png") repeat-x top left transparent;
  background-size: 100%;
  width: 50%;
  min-height: 70vh;
  height: 100%;
  float: left;
  background-repeat-y: repeat;
}

#foglayer_02 {
  width: 200%;
  min-height: 70vh;
  height: 100%;
  position: absolute;
   top: 0;
  animation: foglayer_02_opacity 21s linear infinite,
        foglayer_moveme 13s linear infinite;
  -webkit-animation: foglayer_01_opacity 21s linear infinite,
        foglayer_moveme 13s linear infinite;
}
#foglayer_02 .image01, #foglayer_02 .image02 {
  background: url("/envision/wp-content/uploads/2017/05/fog2.png") repeat-x top left transparent;
  background-size: 100%;
  width: 50%;
  min-height: 70vh;
  height: 100%;
  float: left;
  background-repeat-y: repeat;
}

#foglayer_03 {
  width: 200%;
  min-height: 70vh;
  height: 100%;
  position: absolute;
   top: 0;
  animation: foglayer_02_opacity 21s linear infinite,
        foglayer_moveme 13s linear infinite;
  -webkit-animation: foglayer_01_opacity 21s linear infinite,
        foglayer_moveme 13s linear infinite;
}
#foglayer_03 .image01, #foglayer_03 .image02 {
  background: url("/envision/wp-content/uploads/2017/05/fog2.png") repeat-x top left transparent;
  background-size: 100%;
  width: 50%;
  height: 100%;
  float: left;
  background-repeat-y: repeat;
}

@media (max-width: 768px) {
  .fog {
    visibility: hidden;
  }
}

@keyframes foglayer_01_opacity {
  0% {
    opacity: .4;
  }
  22% {
    opacity: .8;
  }
  40% {
    opacity: .58;
  }
  58% {
    opacity: .7;
  }
  80% {
    opacity: .46;
  }
  100% {
    opacity: .4;
  }
}


@keyframes foglayer_02_opacity {
  0% {
    opacity: .8;
  }
  25% {
    opacity: .5;
  }
  50% {
    opacity: .4;
  }
  80% {
    opacity: .6;
  }
  100% {
    opacity: .8;
  }
}


@keyframes foglayer_03_opacity {
  0% {
    opacity: 1;
  }
  27% {
    opacity: .5;
  }
  52% {
    opacity: .9;
  }
  68% {
    opacity: .6;
  }
  100% {
    opacity: 1;
  }
}


@keyframes foglayer_moveme {
  0% {
    left: 0;
  }
  100% {
    left: -100%;
  }
}
@-webkit-keyframes foglayer_moveme {
  0% {
    left: 0;
  }
  100% {
    left: -100%;
  }
}


</style>
<!-- PRIMARY FEATURE -->
<div style="overflow-x: hidden;">
  <!-- TODO: Change link to match story -->
  <a href="/envision/s17-fungi-hunters/">
    <div class="landing" style="border-bottom: 7px solid #f87428;">
      <!-- TODO: update link -->
        <div id="scroll-down" class="mag-headline">
          <div class="border"><h1>FUNGI HUNTERS UNCOVER HIDDEN WORLDS</h1></div>
          <br>
          <div class="btn btn-success">Read More &raquo;</div>
        </div>
      <div id="foglayer_01" class="fog">
        <div class="image01"></div>
        <div class="image02"></div>
      </div>
      <div id="foglayer_02" class="fog">
        <div class="image01"></div>
        <div class="image02"></div>
      </div>
      <div id="foglayer_03" class="fog">
        <div class="image01"></div>
        <div class="image02"></div>
      </div>
    </div>
  </a>
  <!-- TODO: change highlight color to that of story -->
  <!-- <div class="landing" style="border-bottom: 7px solid #f87428;">
    <div class="mag-headline">
    <div class="border"><h1 style="line-height: 1.4em;" >FUNGI HUNTERS UNCOVER HIDDEN WORLDS</h1></div>
      <div id="scroll-down" style="color: white;"><p>Read More &raquo;</p> </div>
    </div>
  </div> -->
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



<style type="text/css">

  .feature-1 {
    border-bottom: 7px solid #8fcfac;
  }

  @media (max-width: 768px) {
    .feature-1 {
    margin-bottom:30px;
  }
}

  figure.snip1213 {
  font-family: "Oswald", Arial, sans-serif;
  color: #fff;
  position: relative;
  float: left;
  overflow: hidden;
  width: 100%;
  color: #ffffff;
  text-align: left;
  background-color: #07090c;
  font-size: 16px;
  -webkit-perspective: 50em;
  perspective: 50em;
}
figure.snip1213 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
figure.snip1213 img {
  max-width: 100%;
  -webkit-transform-origin: 100% 50%;
  transform-origin: 100% 50%;
}
figure.snip1213 figcaption {
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  -webkit-transform: rotateY(90deg) translate(0%, -50%);
  transform: rotateY(90deg) translate(0%, -50%);
  -webkit-transform-origin: 0 50%;
  transform-origin: 0 50%;
  z-index: 1;
  opacity: 0;
  padding: 0 30px;
}
figure.snip1213 h3,
figure.snip1213 p {
  line-height: 1.5em;
}
figure.snip1213 h3 {
  margin: 0;
  font-weight: 800;
  text-transform: uppercase;
}
figure.snip1213 p {
  font-size: 0.8em;
  font-weight: 500;
  margin: 0 0 15px;
}
figure.snip1213 .read-more {
  border: 2px solid #ffffff;
  padding: 0.5em 1em;
  font-size: 0.8em;
  text-decoration: none;
  color: #ffffff;
  display: inline-block;
}
figure.snip1213 .read-more:hover {
  background-color: #ffffff;
  color: #000000;
}
figure.snip1213:hover img,
figure.snip1213.hover img {
  -webkit-transform: rotateY(-90deg);
  transform: rotateY(-90deg);
  opacity: 0;
}

figure.snip1213:hover div.snip1213.feature-headline-shader,
figure.snip1213.hover div.snip1213.feature-headline-shader {
  -webkit-transform: rotateY(-90deg);
  transform: rotateY(-90deg);
  opacity: 0;
}

figure.snip1213:hover figcaption,
figure.snip1213.hover figcaption {
  -webkit-transform: rotateY(0deg) translate(0, -50%);
  transform: rotateY(0deg) translate(0, -50%);
  opacity: 1;
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}

.alumni-link {
  text-decoration: none;
}

.alumni-link:hover {
  text-decoration: underline;
}

</style>


  <!--TWO SECONDARY FEATURES -->
  <div class="section two-features">
    <div class="container-fluid bleed-both">
      <a href="/envision/s17-launching-technology/" style="color: white; text-decoration: none;">
        <div class="col-sm-6 bleed-left">
          <!-- TODO: Change link to match story -->
          <figure class="snip1213 feature-1">
            <img src="/envision/wp-content/uploads/2017/05/launching-technology.jpg" alt="Launching Technology"/>
            <div class="snip1213 feature-headline-shader">
              <h1 class="feature-headline">Launching Technology from Discovery to Delivery</h1>
            </div>
            <figcaption class="hidden-sm hidden-xs">
            <h3>When David Wilson visited farmers in Ethiopia last fall, he watched oxen trample grain to remove the chaff.</h3>
            <div class="btn btn-success" style="margin-top: 10px;">Read More »</div>
            </figcaption>
          </figure>
        </div>
      </a>

      <a href="/envision/s17-bear-market/" style="color: white; text-decoration: none;">
        <div class="col-sm-6 bleed-right">
          <!-- TODO: Change link to match story -->
          <figure class="snip1213" style="border-bottom: 7px solid #5B6870;">
            <img src="/envision/wp-content/uploads/2017/05/bear-market.jpg" alt="Taming Bear Market"/>
            <div class="snip1213 feature-headline-shader">
              <h1 class="feature-headline">Taming the Bear Market</h1>
            </div>
            <figcaption class="hidden-sm hidden-xs">
            <h3>A small printer tucked into a corner of Chris Hurt’s cluttered, busy office hums with rhythmic precision, spitting out page after page of the U.S. Department of Agriculture’s grain crop production report.</h3>
            <div class="btn btn-success" style="margin-top: 10px;">Read More »</div>
            </figcaption>
          </figure>
        </div>
      </a>
    </div>
  </div>


  <div class="section infocus-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
          <a href="/envision/ever-true-the-campaign-for-purdue-university/">
            <img src="/envision/wp-content/uploads/2017/05/EverTrue.jpg" alt="Ever True - The Campaign for Purdue University" class="img-responsive infocus-pic img-hover" >
          </a>
        </div>

    <div class="col-sm-8 ">
      <h2>In Focus: News from Purdue Agriculture</h2>
      <br>
      <!-- TODO: update URL, article headline, article category -->
      <a href="/envision/sculpture-honors-pioneering-entomologists/">
        <div class="col-sm-4 infocus-article">
          <h3 class="article-heading">Sculpture honoring pioneering entomologists</h3>
        </div>
      </a>

      <!-- TODO: update URL, article headline, article category -->
      <a href="/envision/new-website-acts-as-information-hub-for-indiana-cfos/">
        <div class="col-sm-4 infocus-article">
          <h3 class="article-heading">New website acts as information hub for Indiana CFOs</h3>
        </div>
      </a>

      <!-- TODO: update URL, article headline, article category -->
      <a href="/envision/union-tap-room-features-local-brews-and-science/">
        <div class="col-sm-4 infocus-article">
          <h3 class="article-heading">Union Tap Room features local brews and science</h3>
        </div>
      </a>

      <!-- TODO: update URL, article headline, article category -->
      <a href="/envision/vanishing-soundscapes-initiative-featured-on-cnn/">
        <div class="col-sm-4 infocus-article">
          <h3 class="article-heading">Vanishing Soundscapes Initiative featured on CNN</h3>
        </div>
      </a>

      <!-- TODO: update URL, article headline, article category -->
      <a href="/envision/breakthrough-discovery-for-detecting-cancer/">
        <div class="col-sm-4 infocus-article">
          <h3 class="article-heading">Breakthrough discovery for detecting cancer</h3>
        </div>
      </a>

      <!-- TODO: update URL, article headline, article category -->
      <a href="/envision/plant-scientist-wins-award-for-early-career-innovation/">
        <div class="col-sm-4 infocus-article">
          <h3 class="article-heading">Plant scientist wins award for early-career innovation</h3>
        </div>
      </a>
    </div> <!-- /.col-sm-8-->
  </div> <!-- /.row -->
  </div></div>






  <!--Big Idea & Spotlights-->
  <div class="section big-idea-section parallax">
    <div class="container">
        <div class="col-sm-4 col-sm-offset-1">
          <!-- TODO: link big idea & change alt text -->
          <a href="/envision/s17-phenotyping/"><img src="/envision/wp-content/uploads/2017/05/The-Big-Idea-ver1.png" alt="the big idea - PHENOTYPING" class="img-responsive big-idea-pic"></a>
        </div>
        <div class="col-sm-5 throw-shade big-idea-callout">
          <h1>PHENOTYPING</h1>
          <p class="hidden-xs">Phenotyping, the process of measuring and analyzing observable plant characteristics, is a term used frequently in the College of Agriculture these days—and a technique that is now automated for field research at Purdue.</p>
          <!-- TODO: update link -->
          <a href="/envision/s17-phenotyping/" class="btn btn-success">Read More &raquo;</a>
        </div>
    </div>
  </div>

  <!--The View Ahead and Alumni section-->
  <div class="section viewahead-alumni">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-5">
          <div class="col-sm-6 hidden-xs">
            <img src="/envision/wp-content/uploads/2017/04/Jay-profile-signature-1.png" alt="Jay Adkrige" class="img-responsive">
          </div>
          <div class="col-sm-6 viewahead-text">
            <h2 class="viewahead-title">The View Ahead</h2>
            <p>Welcome to the inaugural edition of Envision, the new Purdue College of Agriculture magazine! Envision showcases the Purdue College of Agriculture’s distinctive strengths and global impact through the efforts of our faculty, staff, students, and alumni.</p>
            <a href="/envision/s17-the-view-ahead/" class="btn btn-primary btn-block">Read More</a>
          </div>
        </div>
        <div class="col-sm-7">
          <h2>Alumni</h2>
          <div class="col-md-4">
            <a href="/envision/the-future-of-the-worlds-water/" class="alumni-link">
              <img src="/envision/wp-content/uploads/2017/05/close-up.jpg" alt="Alumni Close Up" class="img-responsive img-hover">
              <h3 class="alumni-heading">Alumni Close-Up</h3>
            </a>
          </div>
          <div class="col-md-4">
            <a href="/envision/then-and-now/" class="alumni-link">
              <img src="/envision/wp-content/uploads/2017/05/thenandnow.jpg" alt="Then and Now" class="img-responsive img-hover">
              <h3 class="alumni-heading">Then and Now</h3>
            </a>
          </div>
          <div class="col-md-4">
            <a href="/envision/alumni-spotlights/" class="alumni-link">
              <img src="/envision/wp-content/uploads/2017/05/spotlight.jpg" alt="Alumni Spotlights" class="img-responsive img-hover">
              <h3 class="alumni-heading">Alumni Spotlights</h3>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>




<?php
//get_sidebar();
get_footer();


