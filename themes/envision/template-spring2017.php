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
  <a href="#">
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

  <!--TWO SECONDARY FEATURES -->
  <div class="section two-features">
    <div class="container-fluid bleed-both">
      <div class="col-sm-6 bleed-left">
        <a href="#">
          <!-- TODO: Change color to match story -->
          <div class="col-sm-12 feature-two" style="border-bottom: 7px solid green;">
            <!-- TODO: Update image and alt text -->
            <img src="/envision/wp-content/uploads/2017/05/launching-technology.jpg" alt="Launching Technology from Discovery to Delivery" class="img-responsive" style="width: 100%;">
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
            <!-- TODO: Update image and alt text -->
            <img src="/envision/wp-content/uploads/2017/05/bear-market.jpg" alt="Taming Bear Market" class="img-responsive" style="width: 100%;">
            <div class="feature-headline-shader">
              <h1 class="feature-headline">Taming the Bear Market</h1>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="section infocus-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
          <a href="#">
            <img src="/envision/wp-content/uploads/2017/04/EverTrue.jpg" alt="Ever True - The Campaign for Purdue University" class="img-responsive infocus-pic" >
          </a>
        </div>

    <div class="col-sm-8 ">
      <!-- TODO: update URL, article headline, article category -->
      <a href="article1">
        <div class="col-sm-4 infocus-article">
          <h5 class="channel">Alumni</h5>
          <h3 class="article-heading">Sculpture honoring pioneering entomologists</h3>
        </div>
      </a>

      <!-- TODO: update URL, article headline, article category -->
      <a href="ARTICLEURL">
        <div class="col-sm-4 infocus-article">
          <h5 class="channel">Outreach</h5>
          <h3 class="article-heading">New website acts as information hub for Indiana CFOs</h3>
        </div>
      </a>

      <!-- TODO: update URL, article headline, article category -->
      <a href="ARTICLEURL">
        <div class="col-sm-4 infocus-article">
          <h5 class="channel">Alumni</h5>
          <h3 class="article-heading">Union Tap Room features local brews and science</h3>
        </div>
      </a>

      <!-- TODO: update URL, article headline, article category -->
      <a href="ARTICLEURL">
        <div class="col-sm-4 infocus-article">
          <h5 class="channel">Research</h5>
          <h3 class="article-heading">Vanishing Soundscapes Initiative featured on CNN</h3>
        </div>
      </a>

      <!-- TODO: update URL, article headline, article category -->
      <a href="ARTICLEURL">
        <div class="col-sm-4 infocus-article">
          <h5 class="channel">Research</h5>
          <h3 class="article-heading">Breakthrough disocvery for detecting cancer</h3>
        </div>
      </a>

      <!-- TODO: update URL, article headline, article category -->
      <a href="ARTICLEURL">
        <div class="col-sm-4 infocus-article">
          <h5 class="channel">Awards</h5>
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
          <a href="#"><img src="/envision/wp-content/uploads/2017/05/The-Big-Idea-ver1.png" alt="the big idea - PHENOTYPING" class="img-responsive big-idea-pic"></a>
        </div>
        <div class="col-sm-5 throw-shade big-idea-callout">
          <h1>PHENOTYPING</h1>
          <p class="hidden-xs">Phenotyping, the process of measuring and analyzing observable plant characteristics, is a term used frequently in the College of Agriculture these days—and a technique that is now automated for field research at Purdue.</p>
          <a href="#" class="btn btn-success">Read More &raquo;</a>
        </div>
    </div>
  </div>

  <!--The View Ahead and Alumni section-->
  <div class="section viewahead-alumni">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <div class="col-sm-5 hidden-xs">
            <img src="/envision/wp-content/uploads/2017/04/Jay-profile-signature-1.png" alt="Jay Adkrige" class="img-responsive">
          </div>
          <div class="col-sm-7 viewahead-text">
            <h2 class="viewahead-title">The View Ahead</h2>
            <p>Welcome to the inaugural edition of Envision, the new Purdue College of Agriculture magazine! Envision showcases the Purdue College of Agriculture’s distinctive strengths and global impact through the efforts of our faculty, staff, students, and alumni.</p>
            <a href="/experience/Pages/index.html" class="btn btn-primary btn-block">
          Read More</a>
          </div>
        </div>
        <div class="col-sm-6">
          <img src="/envision/wp-content/uploads/2017/04/alumnicloseup.jpg" alt="Alumni Close Up" class="img-responsive alumni-pic">
          <div class="alumni-headline-shader">
            <h2 class="alumni-headline">Alumni Close Up</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Ever True Campaign (Not a main feature area)
  <div class="section evertrue-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
        <img src="/envision/wp-content/uploads/2017/04/EverTrue.jpg" alt="Ever True - The Campaign for Purdue University" class="img-responsive">
        </div>
         <div class="col-sm-6">
            <h2 class="evertrue-header">Ever True Campaign</h2>
            <p>The Ever True campaign to advance Purdue as a national and global leader spans July 2012 through June 2019. See what generous support of the College of Agriculture has accomplisarticle-heading so far. </p>
         </div>
      </div>
    </div>
  </div> -->
</div>




<?php
//get_sidebar();
get_footer();


