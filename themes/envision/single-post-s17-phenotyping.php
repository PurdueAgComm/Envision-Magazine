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
  <div class="landing" style="background-image: url('<?php echo get_the_post_thumbnail_url($postID, "full"); ?>')"></div>
<?php endif; ?>


 <body onload="niceTabs();">

 <script>
function niceTabs() {
  $('.tabgroup > div').hide();
  $('.tabgroup > div:first-of-type').show();
  $('.tabs a').click(function(e){
  e.preventDefault();
    var $this = $(this),
        tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
        others = $this.closest('li').siblings().children('a'),
        target = $this.attr('href');
    others.removeClass('active');
    $this.addClass('active');
    $(tabgroup).children('div').hide();
    $(target).show();
    });
}
</script>



<style>

  .big-idea-container{
    max-height: 500px;
  }
  .big-idea-parallax {
    background: url("https://dev.ag.purdue.edu/envision/wp-content/uploads/2017/05/big-idea-banner.jpg");
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
</style>
  <!--Big Idea & Spotlights-->

<div class="section big-idea-header big-idea-parallax">
  <div class="container-fluid">
    <div class="col-sm-4 col-md-offset-1 big-idea-container">
      <img class="img-responsive" src="/envision/wp-content/uploads/2017/05/The-Big-Idea-ver2.png" style="max-height: 470px;">
    </div>
    <div class="col-md-7 col-sm-8">
      <div class="col-sm-12 big-idea">
        <h1 class="big-idea-heading">Phenotyping</h1>
        <div class="col-sm-4">
          <img class="circle-header" src="/envision/wp-content/uploads/2017/05/The-Big-Idea.png">
          blueprint of genetic potential writteen across billions of DNA base pairs
        </div>
        <div class="col-sm-4">
          <img class="circle-header" src="/envision/wp-content/uploads/2017/05/The-Big-Idea.png">
        environmental factors (e.g., precipitation, sunlight, nutrients, weed & pest protection applications)</div>
        <div class="col-sm-4">
          <img class="circle-header" src="/envision/wp-content/uploads/2017/05/The-Big-Idea.png">
        observable characteristics resulting after the environmental has influenced which genes are expressed (e.g., leaf or canopy area, nitrogen content, photosynthetic activity)</div>
      </div>
      <h1 style="float: right;">genotype x environment = phenotype</h1>
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



      <div class="section" style="margin-top: 30px; margin-bottom: 30px;">
        <div class="container">
            <div class="col-sm-6">
              <img class="img-responsive" src="/envision/wp-content/uploads/2017/05/corngenome.jpg">
              <p style="text-align: center;">Identify the minimum fertilizer application for a specific genotype that allows for maximum growth</p>
            </div>
            <div class="col-sm-6">
            <img class="img-responsive" src="/envision/wp-content/uploads/2017/05/corngenome.jpg">
              <p style="text-align: center;">Identify the minimum fertilizer application for a specific genotype that allows for maximum growth</p>
            </div>
        </div>
      </div>



<div class="section big-idea-footer big-idea-parallax">
  <div class="container">
    <div class="col-md-12">
      <div class="col-sm-12 big-idea">
        <h1 class="big-idea-bottom-heading">Why is phenotyping important?</h1>
        <div class="col-sm-12">
        <p>New Technologies are required to feed an estimated global population of 9 billion people by 2050 while minimizing our environmental impact.</p>
        </div>
        <div class="col-sm-12">



<div class="wrapper">
  <ul class="tabs clearfix" data-tabgroup="first-tab-group">
    <li><a href="#tab1" class="active">Tab 1</a></li>
    <li><a href="#tab2">Tab 2</a></li>
    <li><a href="#tab3">Tab 3</a></li>
    <li><a href="#tab4">Tab 4</a></li>
    <li><a href="#tab5">Tab 5</a></li>
  </ul>
  <section id="first-tab-group" class="tabgroup">
    <div id="tab1">
      <h2>Heading 1</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla deserunt consectetur ratione id tempore laborum laudantium facilis reprehenderit beatae dolores ipsum nesciunt alias iusto dicta eius itaque blanditiis modi velit.</p>
    </div>
    <div id="tab2">
      <h2>Heading 2</h2>
      <p>Adipisci autem obcaecati velit natus quos beatae explicabo at tempora minima voluptates deserunt eum consectetur reiciendis placeat dolorem repellat in nam asperiores impedit voluptas iure repellendus unde eveniet accusamus ex.</p>
    </div>
    <div id="tab3">
      <h2>Heading 3</h2>
      <p>Atque ratione soluta laboriosam illo inventore amet ipsum aliquam assumenda harum provident nam accusantium neque debitis obcaecati maxime officia saepe ad ducimus in quam libero vero quasi. Saepe sit nisi?</p>
    </div>
    <div id="tab4">
      <h2>Heading 4</h2>
      <p>Quidem perferendis id sapiente cumque ullam repellendus dolorum odit rerum quibusdam tempora voluptatibus ipsum. Maiores laborum velit aperiam dicta quisquam assumenda at esse exercitationem culpa sequi porro minus ipsa aut.</p>
    </div>
    <div id="tab5">
      <h2>Heading 5</h2>
      <p>Iste eligendi ratione libero impedit quos necessitatibus labore corporis deserunt quo porro hic eius delectus ea ad amet dolore officiis debitis! Libero officia magnam consequuntur dignissimos molestias quia modi repellat.</p>
    </div>
  </section>
</div>

<style>
* {
  margin: 0;
  padding: 0;
}
.wrapper {
  margin: 100px auto;
  width: 80%;
  font-family: sans-serif;
  color: #98927C;
  font-size: 14px;
  line-height: 24px;
  max-width: 600px;
  min-width: 340px;
  overflow: hidden;
}
.tabs li {
  list-style: none;
  float: left;
  width: 20%;
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
  top: -100%;
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
  top: -100%;
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
      <h1 style="float: right;">genotype x environment = phenotype</h1>
    </div>
  </div>
</div>





<!--         <?php if(has_category() || has_tag()) : ?>
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
        <br><br> -->


<?php endwhile; else: ?>
  <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>