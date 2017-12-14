<?php
/**
 *
 * Template Name: Fall 2017 Cover
 *
**/

get_header('faded'); ?>
<link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/csshake/1.5.2/csshake-little.css" rel="stylesheet">

<!-- PRIMARY FEATURE -->
<div style="overflow-x: hidden;">
  <!-- TODO: Change link to match story -->
  <a href="/envision/f17-reverberations/">
    <div class="landing landing-f17">
      <!-- TODO: update link -->
        <div id="scroll-down" class="col-sm-12 mag-headline f17" style="top: 19vh;">
          <h1 class="f17 shake-little shake-constant shake-constant--hover">REVERBERATIONS<br>IN THE<br>LANDSCAPE</h1>
          <br>
          <div class="btn btn-success">Read More &raquo;</div>
        </div>
    </div>
  </a>
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
  <div class="section two-features-f17">
    <div class="container-fluid">
      <a href="/envision/f17-data/" style="color: white; text-decoration: none;">
        <div class="col-md-4 col-md-offset-2">
          <!-- TODO: Change link to match story -->
          <figure class="snip1213 feature-1">
            <img src="/envision/wp-content/uploads/2017/11/web-digital-banner.jpg" alt="The Big Data Harvest"/>
            <div class="snip1213 feature-headline-shader">
              <h1 class="feature-headline">The Big Data Harvest</h1>
            </div>
            <figcaption class="hidden-sm hidden-xs">
            <h3>Scientists in the College of Agriculture are using innovative technologies to reap a new kind of harvest.</h3>
            <div class="btn btn-success" style="margin-top: 10px;">Read More »</div>
            </figcaption>
          </figure>
        </div>
      </a>

      <a href="/envision/f17-saving/" style="color: white; text-decoration: none;">
        <div class="col-md-4" >
          <!-- TODO: Change link to match story -->
          <figure class="snip1213">
            <img src="/envision/wp-content/uploads/2017/11/web-feed-banner.jpg" alt="Saving for the Future"/>
            <div class="snip1213 feature-headline-shader">
              <h1 class="feature-headline">Saving for the Future</h1>
            </div>
            <figcaption class="hidden-sm hidden-xs">
            <h3>Creating an efficient food supply isn’t just what happens in the field, but what happens after harvest.</h3>
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
      <div class="col-sm-11 col-sm-offset-1">
        <h2>In Focus: News from Purdue Agriculture</h2>
      </div>
      <!-- TODO: update URL, article headline, article category -->
      <a href="/envision/f17-view-ahead/">
        <div class="col-sm-2 col-sm-offset-1 infocus-article">
          <h3 class="article-heading">The View Ahead</h3>
          <small>Message from Interim Dean Karen Plaut</small>
        </div>
      </a>

      <a href="/envision/f17-organic-help">
        <div class="col-sm-2 infocus-article">
          <h3 class="article-heading">Help to go organic</h3>
        </div>
      </a>

      <!-- TODO: update URL, article headline, article category -->
      <a href="/envision/f17-urm-stem/">
        <div class="col-sm-2 infocus-article">
          <h3 class="article-heading">Engaging underrepresented students in STEM</h3>
        </div>
      </a>

      <!-- TODO: update URL, article headline, article category -->
      <a href="/envision/f17-firefighters/">
        <div class="col-sm-2 infocus-article">
          <h3 class="article-heading">Purdue prepares firefighters</h3>
        </div>
      </a>

      <!-- TODO: update URL, article headline, article category -->
      <a href="/envision/f17-food-supply/">
        <div class="col-sm-2 infocus-article">
          <h3 class="article-heading">The what and why of our food supply</h3>
        </div>
      </a>

  </div> <!-- /.row -->
  </div></div>

  <!--Big Idea & Spotlights-->
  <div class="section big-idea-section parallax parallax-f17">
    <div class="container">
        <div class="col-sm-4 col-sm-offset-1">
          <!-- TODO: link big idea & change alt text -->
          <a href="/envision/f17-iot/"><img src="/envision/wp-content/uploads/2017/05/The-Big-Idea-ver1.png" alt="the big idea" class="img-responsive big-idea-pic"></a>
        </div>
        <div class="col-sm-5 throw-shade big-idea-callout">
          <h1>Internet of Things</h1>
          <p class="hidden-xs">The Internet of Things (IoT) is an informal name for the network of devices connected to the Internet. See why IoT is essential to Purdue's efforts in digital agriculture.</p>
          <!-- TODO: update link -->
          <a href="/envision/f17-iot/" class="btn btn-success">Read More &raquo;</a>
        </div>
    </div>
  </div>

  <!--The View Ahead and Alumni section-->
  <div class="section viewahead-alumni">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 hidden-xs">
          <a href="/envision/wp-content/uploads/2017/11/TCAM5461-207-1709.jpg" target="_blank" style="color: white; text-decoration: none;">
              <!-- TODO: Change link to match story -->
              <figure class="snip1213 feature-1"  style="background-image: url('/envision/wp-content/uploads/2017/11/trophy.jpg');">
                <img class="img-responsive" src="/envision/wp-content/uploads/2017/11/final-view.jpg" alt="Shadow of bowling trophy cast against brick">
                <div class="snip1213 feature-headline-shader">
                  <h1 class="feature-headline">Final View Trophy</h1>
                </div>
                <figcaption class="hidden-sm hidden-xs">
                <h3>Staff are emptying the ABE building attic before its  renovation and addition. Staff of ABE won this bowling trophy as champions of the Purdue staff league in 1966-1967.</h3>
                <div class="btn btn-success" style="margin-top: 10px;">See the winners »</div>
                </figcaption>
              </figure>
          </a>
        </div>
        <div class="col-sm-9">
          <h2>Alumni & Students</h2>
          <div class="col-md-3">
            <a href="/envision/f17-alumni-close-up/" class="alumni-link">
              <img src="/envision/wp-content/uploads/2017/11/web-alumni-profile.jpg" alt="Alumni Close Up" class="img-responsive img-hover">
              <h3 class="alumni-heading">Alumni Close-Up</h3>
            </a>
          </div>
          <div class="col-md-3">
            <a href="/envision/f17-then-and-now/" class="alumni-link">
              <img src="/envision/wp-content/uploads/2017/11/web-alumni-then-now.jpg" alt="Then and Now" class="img-responsive img-hover">
              <h3 class="alumni-heading">Then and Now</h3>
            </a>
          </div>
          <div class="col-md-3">
            <a href="/envision/f17-alumni-spotlights/" class="alumni-link">
              <img src="/envision/wp-content/uploads/2017/11/sara-williams.jpg" alt="Alumni Spotlights" class="img-responsive img-hover">
              <h3 class="alumni-heading">Alumni Spotlights</h3>
            </a>
          </div>
          <div class="col-md-3">
            <a href="/envision/f17-my-purdue-view/" class="alumni-link">
              <img src="/envision/wp-content/uploads/2017/11/my-purdue-view.jpg" alt="Then and Now" class="img-responsive img-hover">
              <h3 class="alumni-heading">My Purdue View</h3>
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


