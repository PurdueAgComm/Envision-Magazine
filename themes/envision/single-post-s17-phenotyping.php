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
  get_header('');
}

if ( have_posts() ) : while ( have_posts() ) : the_post();

if(!empty($featuredURL)) : ?>
  <div class="landing" style="background-image: url('<?php echo get_the_post_thumbnail_url($postID, "full"); ?>')"></div>
<?php endif; ?>


 <body onload="niceTabs();">

 <script>

function niceTabs() {
  jQuery('.tabgroup > div').hide();
  jQuery('.tabgroup > div:first-of-type').show();
  jQuery('.tabs a').click(function(e){
  e.preventDefault();
    var $this = jQuery(this),
        tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
        others = $this.closest('li').siblings().children('a'),
        target = $this.attr('href');
    others.removeClass('active');
    $this.addClass('active');
    jQuery(tabgroup).children('div').hide();
    jQuery(target).show();
    });
}
</script>



<style>

  .big-idea-container{
    max-height: 500px;
  }
  .big-idea-parallax {
    background: url("/envision/wp-content/uploads/2017/05/big-idea-banner.jpg");
    height: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    margin-bottom: 30px;
    margin-top: -20px;
  }

.big-idea-bottom-parallax {
    background: url("/envision/wp-content/uploads/2017/05/Big-Idea-Bottom-Parallax-Background2.jpg");
    height: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    margin-bottom: 30px;
    margin-top: -20px;
  }

  .big-idea {
    color: #fff;
    text-align: center;
  }
  .big-idea h1{
    text-align: left;
  }

  .big-idea-header {
    background-color: #033f47;
    padding: 20px;
    padding-top: 50px;
    color: white;
    margin-bottom: 0;
  }


  .big-idea-footer {
    background-color: #2c2a50;
    padding: 20px;
    color: white;
    margin-bottom: 0;
  }

  .big-idea-header h2 {
    margin: 0;
    padding: 0;
  }

  ul.big-idea {
    font-family: "Open Sans", Georgia, serif;
    font-size: 1.3em;
    padding: 30px;
  }

  ul.big-idea li {
    padding: 10px;
  }

  .big-idea-heading {
    font-size: 5em;
    margin-bottom: 20px;
  }

  .big-idea-bottom-heading{
    font-family: "PT Serif", Georgia, serif;
    font-size: 4em;
  }
  .circle-header {
    margin-bottom: 10px;
  }

  .arrow-down{
    border-top: 20px solid #033f47;
  }

  .genotype-equation{
    float: right;
  }

  @media (max-width: 768px){
      .genotype-equation{
      float:none;
      text-align: center;
      }
      .big-idea-logo{
      margin-left: auto;
      margin-right: auto;
      }
      .big-idea h1{
      text-align: center;
      }
      .big-idea-heading {
      font-size: 4em;
      }

      .big-idea-bottom-heading {
      font-size: 3.5em;
      }
    }

  @media (max-width: 550px){
      .big-idea-heading, .big-idea-bottom-heading {
      font-size: 3em;
      }
  }
</style>
  <!--Big Idea & Spotlights-->

<div class="section big-idea-header big-idea-parallax">
  <div class="container-fluid">
    <div class="col-sm-4 col-md-offset-1 big-idea-container">
      <img class="img-responsive big-idea-logo" src="/envision/wp-content/uploads/2017/05/The-Big-Idea-ver2.png" style="max-height: 470px;">
    </div>
    <div class="col-md-7 col-sm-8">
      <div class="col-sm-12 big-idea">
        <h1 class="big-idea-heading">Phenotyping</h1>
        <div class="col-sm-4" style="margin-bottom: 20px; font-size: 1.2em;">
          <img class="circle-header" src="/envision/wp-content/uploads/2017/05/DNA-circle.png">
          <h2>genotype</h2>
          blueprint of genetic potential writteen across billions of DNA base pairs
        </div>
        <div class="col-sm-4" style="margin-bottom: 20px; font-size: 1.2em;"">
          <img class="circle-header" src="/envision/wp-content/uploads/2017/05/plant-cirlce.png">
          <h2>environment</h2>
        environmental factors (e.g., precipitation, sunlight, nutrients, weed & pest protection applications)</div>
        <div class="col-sm-4" style="margin-bottom: 20px; font-size: 1.2em;"">
          <img class="circle-header" src="/envision/wp-content/uploads/2017/05/corn-circle.png">
          <h2>phenotype</h2>
        observable characteristics resulting after the environmental has influenced which genes are expressed (e.g., leaf or canopy area, nitrogen content, photosynthetic activity)</div>
      </div>
      <h1 class="genotype-equation">genotype x environment = phenotype</h1>
    </div>
  </div>
</div>

<div class="arrow-down"></div>
<div class="section big-idea-parallax"></div>

  <div class="container story-body" style="min-height: 0vh;">
    <div class="row">
      <div class="maincontent blog-maincontent col-md-offset-1 col-md-10">

        <?php the_content();
        if(isset($custom_fields["photo-credit"])) {
          echo "<p class='text-muted small'><em>Photos provided by " . $custom_fields['photo-credit'][0] . ".</em></p>";
        } ?>

      </div>
    </div>
  </div>



      <div class="section" style="margin-top: 30px; margin-bottom: 40px;">
        <div class="container">
            <div class="col-sm-6">
              <img class="img-responsive" src="/envision/wp-content/uploads/2017/05/corngenome.jpg">
              <p style="text-align: center;">Identify the minimum fertilizer application for a specific genotype that allows for maximum growth</p>
            </div>
            <div class="col-sm-6">
            <img class="img-responsive" src="/envision/wp-content/uploads/2017/05/corngenome2.jpg">
              <p style="text-align: center;">Identify the genotype that produces the highest yield after fertilizer application</p>
            </div>
        </div>
      </div>



<div class="section big-idea-footer big-idea-bottom-parallax">
  <div class="container">
    <div class="col-md-12">
      <div class="col-sm-12 big-idea-bottom">
        <h1 class="big-idea-bottom-heading">Why is phenotyping important?</h1>
        <div class="col-sm-12 new-tech">
        <p style="margin-top: 10px; margin-bottom: 20px;text-align: left;font-size: 1.4em;">New technologies are required to feed an estimated global population of <strong>9 billion people by 2050 </strong> while minimizing our environmental impact.</p>
        </div>
        <div class="col-sm-12">
        <h2 style="background-color: rgba(0,0,0,.8);padding: 20px; margin-bottom: 0;">Matching phenotypes to their genotypes results in:</h2>

<div class="wrapper hidden-xs">
  <ul class="tabs clearfix" style="margin-bottom: 0px;" data-tabgroup="first-tab-group">
    <li><a href="#tab1" class="active">1. Efficiency</a></li>
    <li><a href="#tab2">2. Precision</a></li>
    <li><a href="#tab3">3. Sustainability</a></li>
  </ul>
  <section id="first-tab-group" class="tabgroup">
    <div id="tab1">
      <h2>Higher yields with less waste</h2>
    </div>
    <div id="tab2">
      <h2>Fewer inputs in just the right place</h2>
    </div>
    <div id="tab3">
      <h2>Reduced costs and environmental impact from precise inputs</h2>
    </div>
  </section>
</div>

<div class="hidden-sm hidden-md hidden-lg hidden-xl">
  <h2>1. Efficiency</h2>
  <h4><li>Higher yields with less waste</li></h4>
  <h2>2. Precision</h2>
  <h4><li>Fewer inputs in just the right place</li></h4>
  <h2>3. Sustainability</h2>
  <h4><li>Reduced costs and environmental impact from precise inputs</li></h4>
</div>

<style>
* {
  margin: 0;
  padding: 0;
}
.wrapper {
  margin: 40px auto;
  width: 80%;
  font-family: sans-serif;
  color: #98927C;
  font-size: 14px;
  line-height: 24px;
  max-width: 680px;
  min-width: 340px;
  overflow: hidden;
}

.tabs li {
  list-style: none;
  float: left;
  width: 30%;
}


@media (max-width: 992px){
  .wrapper ul {
    font-size: .9em;
   }
}



.tabs a {
  display: block;
  text-align: center;
  text-decoration: none;
  position: relative;
  text-transform: uppercase;
  color: #fff;
  height: 70px;
  line-height: 90px;
  background: linear-gradient(165deg, transparent 29%, #98927C 30%);
}
.tabs a:hover,
.tabs a.active {
  background: linear-gradient(165deg, transparent 29%, #F2EEE2 30%);
  color: #98927C;
}
.tabs a:before {
  content: '';
  position: absolute;
  z-index: 11;
  left: 100%;
  top: -0%;
  height: 70px;
  line-height: 90px;
  width: 0;
  border-bottom: 70px solid rgba(0, 0, 0, 0.1);
  border-right: 7px solid transparent;
}
.tabs a.active:before {
  content: '';
  position: absolute;
  z-index: 11;
  left: 100%;
  top: 0%;
  height: 70px;
  line-height: 90px;
  width: 0;
  border-bottom: 70px solid rgba(0, 0, 0, 0.2);
  border-right: 20px solid transparent;
}
.tabgroup {
  box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.1);
}
.tabgroup div {
  padding: 30px;
  background: #F2EEE2;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
}
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

</style>
        </div>
      </div>
      <h1 class="genotype-equation">Who benefits? Everyone.</h1>
    </div>
  </div>
</div>


      <div class="section" style="margin-top: 30px; margin-bottom: 30px;">
        <div class="container">
          <h1>A Multidisciplinary Approach</h1>
            <div class="col-sm-4" style="text-align: center;">
                <h3>Agronomy</h3>
                <p>Applying the science of soil management and crop production.</p>
             </div>
            <div class="col-sm-4" style="text-align: center;">
                <h3>Electrical Engineering</h3>
                <p>Designing, constructing, and maintaining sensors.</p>
            </div>
            <div class="col-sm-4" style="text-align: center;">
                <h3>Aviation Technology</h3>
                <p>Using UAVs (unmanned aerial vehicles) to collect data.</p>
            </div>
            <div class="col-sm-4" style="text-align: center;">
                <h3>Civil Engineering</h3>
                <p>Developing images from sensors and collecting data from images.</p>
            </div>
            <div class="col-sm-4" style="text-align: center;">
                <h3>Computer Science</h3>
                <p>Analyzing data collected through machine learning more efficiently.</p>
            </div>
            <div class="col-sm-4" style="text-align: center;">
                <h3>Producers</h3>
                <p>Applying the science for better crops and yields.</p>
            </div>

        </div>
      </div>


      <div class="container">
        <div class="row">
          <div class="col-sm-12">

            <?php
            $custom_fields = get_post_custom();
            if(isset($custom_fields["photo-credit"])) {
              echo "<p class='text-muted small'><em>Inforgraphics provided by " . $custom_fields['photo-credit'][0] . ".</em></p>";
            } ?>

            <?php if(has_category() || has_tag()) : ?>
              <div class="blog-meta">
                <?php if(has_category()) : ?>
                  <i class="fa fa-folder" title="category"></i> Category <?php the_category(', '); ?> <br>
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