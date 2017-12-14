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

get_header('secondary-faded');

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
<div class="section big-idea-header big-idea-parallax" style="background-image: url('https://ag.purdue.edu/envision/wp-content/uploads/2017/11/big-idea-parallax.png');">
  <div class="container-fluid">
    <div class="col-sm-12 big-idea-container">
      <img class="img-responsive big-idea-logo" src="/envision/wp-content/uploads/2017/05/The-Big-Idea-ver2.png" style="max-height: 470px; margin: auto;">
    </div>
  </div>
</div>

<div class="section big-idea-parallax"></div>

  <div class="container story-body" style="min-height: 0vh;">
    <div class="row">
      <div class="maincontent blog-maincontent col-md-offset-1 col-md-10">

        <?php the_content(); ?>


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