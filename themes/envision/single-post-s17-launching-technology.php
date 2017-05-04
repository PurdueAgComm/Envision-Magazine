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
  <div class="landing" style="border-bottom: 7px solid #8fcfac; background-image: url('<?php echo get_the_post_thumbnail_url($postID, "full"); ?>')"></div>
<?php endif; ?>

<style>
  .takeaway-parallax {
    background: url("/envision/wp-content/uploads/2017/05/takeaway-bg-launching.jpg");
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

        <p>When David Wilson visited farmers in Ethiopia last fall, he watched oxen trample grain to remove the chaff. Months earlier, those same oxen slowly pulled moldboard plows through a field before the crop was planted.</p>

        <p>For those farmers, crop loss can be significant, as grain laid in the sun to dry and then threshed by stomping animals can blow away or become contaminated by those animals, dust, or insects. Later, when taking the grain to market, rutted, sometimes muddy roads make vehicle transportation difficult. Farmers tend to walk, carrying only what they can haul by hand.</p>

        <p>The farmers Wilson has met in Ethiopia, Cameroon, Nigeria, and Kenya aren’t likely to see their roads paved. And the tools farmers in more developed countries use to mechanize plowing, harvesting, drying, and threshing are simply too expensive for these growers, who are mostly subsistence farmers, with little left over to sell.</p>

        <p>College of Agriculture researchers have been working on problems like these for years, and the affordable, multiuse tools they’ve developed could quickly make an impact where they are needed most. But many large companies aren’t interested in investments that aren’t likely to provide a quick or abundant return. Rather than let their work languish on a shelf, Purdue researchers are taking on the challenges of entrepreneurship.</p>

        <p>“To see the farmers actually spending hours and hours manually working on these things—and losing half their yield— showed me the importance of this type of work,” Wilson says. “Universities do well at research and development, and there are examples of successful implementation of technology. This needed to get to the farmers, and it just couldn’t wait.”</p>

        <p>Wilson (BS ’13, MS ’15, agricultural and biological engineering) and several current and former students founded Mobile Agricultural Power Solutions (MAPS) to produce a versatile basic utility vehicle that can be used on sub-Saharan farms to haul water and crop inputs, plow fields, and haul as much as 1 ton of yield to market on even the worst roads.</p>

        <p>And Klein Ileleji, an associate professor of agricultural and biological engineering, started JUA Technologies with his wife, Reiko Habuto Ileleji (MS ’01, PhD ’08, education) to further develop and market a multifunctional device that can dry grains and horticultural food crops and run small household appliances.</p>

        <p>Both companies are now working to enter markets where the technologies are needed most. These activities must be separate from work conducted for University appointments, so startups are often championed by a student or other person close to the work developing the commercial operation, with a faculty member contributing to related research and learning about entrepreneurship. Startups must also compensate Purdue at fair market rates for any University resources used.</p>


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
              <li>President Mitch Daniels has made research commercialization a key initiative of his Purdue Moves—and College of Agriculture faculty, staff, students, and alumni are taking advantage of resources like the Purdue Foundry and the Ag-celerator fund to take their innovations to market.</li>
              <li>Commercial channels can allow for more efficient dissemination of knowledge and technology at a wider scale, says Dan Dawes, a College of Agriculture alumnus and entrepreneur-in-residence at the Purdue Foundry.</li>
              <li>Recent innovations in the College include a multipurpose grain dryer; software to predict grain yield and optimum fertilizer applications; a faster, cheaper method for E. coli detection in food products; and a utility vehicle that can be sourced, built, and used in sub-Saharan Africa.</li>
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