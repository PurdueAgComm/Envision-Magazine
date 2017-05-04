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

<style>
  .takeaway-parallax {
    background: url("/envision/wp-content/uploads/2017/05/takeaway-bg-taming.jpg");
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
        <p>A small printer tucked into a corner of Chris Hurt’s cluttered, busy office hums with rhythmic precision, spitting out page after page of the U.S. Department of Agriculture’s grain crop production report. Hurt snatches each sheet and scans the hundreds of rows of tiny numbers packed as tightly as corn stalks in a fertile field.</p>
        <p>One of the nation’s leading agricultural economists, Hurt knows exactly what to look for in the dense block of data—specifically, which numbers will move the market up or down. For hundreds of farm families, a swing of a few cents in the price of a bushel of corn or soybeans can mean the difference between putting money away for a child’s education and keeping food on the table. The line between success and subsistence can be painfully thin.</p>
        <p>After he performs a few mental calculations, Hurt’s expression softens into a warm grin.</p>
        <p>“There’s not a major change here, but it is generally positive for producers,” he says.</p>
        <p>The numbers indicate that grain prices might be stabilizing, a signal that the worst of the current downturn in the corn and soybean markets could be over. Grain prices have been slumping since 2014, due mostly to near-record supplies and weakening global demand. Conditions have been especially tough for smaller-scale farmers caught between shrinking income and rising production costs.</p>
        <p>The College of Agriculture is helping producers manage through the downturn with a series of workshops, webinars, and other outreach efforts.</p>
        <p>For Hurt, who grew up on his family’s farm in southern Illinois, the stakes are personal. He understands the financial pressures producers face even in good years. “It’s a difficult balancing act,” he says. “If you’re a farmer, you must be as productive as possible, but that can lead to global oversupply, which is the situation we’ve had for the past couple of years. It can take time for things to balance out.”</p>
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
              <ul><li>Agricultural market cycles typically last five years; the current downturn is in its third year.</li>
              <li>Due to overproduction, grain prices are off about 30 percent since their peak in 2014—but they may be stabilizing.</li>
              <li>Dynamics in a family-owned business can make financial stress more difficult, but the Purdue Initiative for Family Firms can help with tools to maintain family bonds.</li><li>The College of Agriculture offers a wealth of online resources to provide farmers more information about financial management and business planning. Here are a few places to get started:<ul><li>See the <a href="http://ag.purdue.edu/commercialag">Center for Commercial Agriculture</a> for information on:
                <ul>
                <li><a href="http://ag.purdue.edu/commercialag/farmrisk">An overview of managing farm risk</a></li>
                <li>Upcoming and archived financial planning webinars</li>
                <li>Agricultural policy/crop insurance/farmland value/farm finance</li>
                <li>Stress-testing financial performance</li></ul></li>
                <li>Purdue Succession Planning Team</li>
                <li>Purdue Farmland Value Survey</li>
                <li>Purdue Crop Cost and Return Guide</li></ul></li>
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