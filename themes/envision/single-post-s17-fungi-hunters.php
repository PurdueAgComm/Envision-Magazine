<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Envision_Magazine
 */

$postID = get_the_ID();
$featuredURL = get_the_post_thumbnail_url($postID, "full");

$custom_fields = get_post_custom();

// if post has featured image, display it in a banner
if(!empty($featuredURL)) {
  get_header('secondary-faded');
}
else {
  get_header();
}

if ( have_posts() ) : while ( have_posts() ) : the_post();

if(!empty($featuredURL)) : ?>

<?php endif; ?>


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

.exposure-callout {
  width: 100%;
  background-image: url('/envision/wp-content/uploads/2017/05/photo-library.jpg');
  height: 602px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
<!-- PRIMARY FEATURE -->
<div style="overflow-x: hidden;">
  <!-- TODO: Change link to match story -->
  <a href="/envision/s17-fungi-hunters/">
    <div class="landing" style="border-bottom: 7px solid #f87428;">
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



<style>
  .takeaway-parallax {
    background: url("/envision/wp-content/uploads/2017/05/takeaway-bg-fungi.jpg");
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>


<div class="container story-body" style="/*shame*/min-height: 0vh;">
  <div class="row">
    <div class="maincontent blog-maincontent col-md-offset-1 col-md-10">
        <h1 class="blog-title"><?php the_title(); ?></h1>
        <div class="blog-date text-muted">
          <i class="fa fa-calendar fa-fw"></i> <?php the_time('l, F jS, Y'); ?>
          <?php
            // set variable
            if(isset($custom_fields["byline"])) {
              $byline = $custom_fields['byline'];
          ?>
            <i class="fa fa-user fa-fw"></i> <?php echo $byline[0]; ?>
          <?php } ?>
        </div>
        <br>

        <p>The Islander pitches in the headwinds as gauzy clouds spatter the windshield. Below, the plane’s shadow ripples over dense tracts of canopy broken only by dark rivers snaking toward the horizon and the occasional mine, bright gashes on the landscape. A placard in the cockpit reads “No flips, spins or acrobatic maneuvers permitted.” But landing on a jungle airstrip—just a streak of red dirt on a hillside—is quite an aerial feat in itself. A slick patch can send the plane reeling into the rainforest that flanks the strip, but with some rib-rattling jolts and a screech of metal on metal, we are suddenly on the ground in the Pakaraima Mountains of western Guyana.</p>
        <br style="clear: both;">
        <a href="https://purdueag.exposure.co/ec6cace3f8aabbc878cf9d4b652d7fa3" style="text-decoration: none !important;">
        <div class="col-sm-5 exposure-callout">
          <div class="throw-shade" style="position: relative; top: 52%; text-align: center;">
            <h1 style="margin-top: 0; margin-bottom: 10px; color: #fff; text-decoration: none !important;">Rainforest Researchers</h1>
           <div class="btn btn-success">View Gallery &raquo;</div>
          </div>
        </div>
        </a>
        <br style="clear: both;"><br style="clear: both;">
        <p style="margin-top: 10px;">The researchers tumble out: <a href="https://ag.purdue.edu/btny/Pages/Profile.aspx?strAlias=maime">Catherine Aime</a>, professor of <a href="https://ag.purdue.edu/btny/Pages/default.aspx">botany and plant pathology</a>; her doctoral student <a href="https://ag.purdue.edu/btny/Pages/Profile.aspx?strAlias=koch17&intDirDeptID=10">Rachel Koch</a>; and <a href="http://www2.humboldt.edu/biosci/faculty/henkel.html">Terry Henkel</a>, a professor of botany at Humboldt State University. Everyone hustles to unload the gear from the cargo hold so the pilot can be on his way before the weather changes. Fifteen Patamona, Amerindians who have worked with Aime and Henkel in this region for nearly two decades, wade out of the bushes to lend a hand. It’s been a year since the last expedition, and handshakes and hugs are exchanged all around.</p>

        <p>The team hauls buckets of provisions into the forest and prepares to hike further into the interior to an open-air research camp next to the blackwater Potaro River. In this makeshift home, army ants scurry below the hammocks at night, bees clean the sugar spoon in the morning, scorpions shelter inside shoes left out to dry, and drifts of mold thicken on backpacks. And with the Patamona as research partners, Aime and Henkel’s team pursues the undiscovered fungi of Guyana.</p>
      </div>
    </div>
  </div>
  <!--Big Idea & Spotlights-->


  <div class="section takeaway-parallax">
    <div class="section takeaway-header">
      <div class="container">
        <h2>the takeaway</h2>
      </div>
    </div>
    <div class="arrow-down"></div>
    <div class="container">
        <div class="col-sm-12 takeaway">
            <ul class="takeaway">
              <li>Guyana, in the northeastern corner of South America, hosts some of the world’s last remaining virgin tropical rainforests. There, in the upper Potaro Basin of western Guyana near Mount Ayanganna, Professor <a href="https://ag.purdue.edu/btny/Pages/Profile.aspx?strAlias=maime">Cathie Aime</a> and her colleagues hunt for undiscovered fungi.</li>
              <li><strong>140 new species</strong> - The team has racked up descriptions of about 140 new species of mushrooms and eight new genera so far. Discovering a new genus is a rare event in biology.</li>
              <li>Aime and Henkel earned a <a href="https://www.nsf.gov">National Science Foundation</a> grant to study the symbiosis between fungi and the trees that dominate the forests they study.</li>
              <li>Fungi help provide clean air, clean water, and nutrition for plants, but much less is known about the estimated 3 million to 5 million fungal species than about the animal and plant kingdoms.</li>
              <li>Aime coauthored a recent <a href="http://science.sciencemag.org/content/353/6298/488">study published in <em>Science</em></a>, announcing that lichens, thought to be a symbiosis between an algae and fungus, include a third partner: a previously undescribed yeast. This discovery was covered in <a href="https://blog.education.nationalgeographic.com/2016/07/25/lichen-the-threesome/"><em>National Geographic</em></a>, <a href="https://www.scientificamerican.com/podcast/episode/for-lichens-3-s-not-a-crowd/"><em>Scientific American</em>, <a href="https://www.theatlantic.com/science/archive/2016/07/how-a-guy-from-a-montana-trailer-park-upturned-150-years-of-biology/491702/"><em>The Atlantic</em></a>, <a href="https://www.nytimes.com/2016/07/22/science/lichen-symbiotic-relationship.html?_r=0"><em>The New York Times</em></a>, and <a href="https://www.washingtonpost.com/news/speaking-of-science/wp/2016/07/22/lichen-is-a-famous-biological-partnership-but-it-might-actually-be-a-threesome/?utm_term=.62c71a74cbed"><em>The Washington Post</em></a>.</li>
            </ul>
        </div>
    </div>
  </div>

  <div class="container story-body">
    <div class="row">
      <div class="maincontent blog-maincontent col-md-offset-1 col-md-10">




        <?php the_content();

        if(isset($custom_fields["photo-credit"])) {
          echo "<p class='text-muted small'><em>Photos provided by " . $custom_fields['photo-credit'][0] . ".</em></p>";
        } ?>

        <?php if(has_category() || has_tag()) : ?>
          <div class="blog-meta">
            <?php if(has_category()) : ?>
              <i class="fa fa-folder" title="category"></i> Category: <?php the_category(', '); ?> <br>
            <?php endif; ?>
            <?php if(has_tag()) : ?>
              <i class="fa fa-tags"></i> Tag: <?php the_tags(''); ?>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <br>
        <nav id="nav-single">
          <h3 class="sr-only"><?php _e( 'Read more', 'purduetwentyfourteen' ); ?></h3>
          <div class="pull-left"><?php previous_post_link( '%link', __( '<i class="fa fa-arrow-circle-left"></i> %title', 'purduetwentyfourteen' ) ); ?></div>
          <div class="pull-right"><?php next_post_link( '%link', __( '%title <i class="fa fa-arrow-circle-right"></i>', 'purduetwentyfourteen' ) ); ?></div>
        </nav>
        <br><br>
    </div>
  </div>
</div>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>