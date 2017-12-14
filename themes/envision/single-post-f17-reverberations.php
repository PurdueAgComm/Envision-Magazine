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
    background: url("/envision/wp-content/uploads/2017/11/takeaway-bg-reverberations.jpg");
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

@media (max-width: 768px) {
  #soundscapeQuiz {
    height: 600px;
  }

}

</style>

<div class="container story-body" style="/*shame*/min-height: 0vh;">
  <div class="row">
    <div class="maincontent blog-maincontent col-md-offset-1 col-md-10">
      <?php
       if(isset($custom_fields["banner-caption"])) {
          echo "<div class='blog-meta' style='border-left: 3px solid #dadada;'>";
            echo "<p style='margin: 0;' class='text-muted'><small>" . $custom_fields['banner-caption'][0] . "</small></p>";
          echo "</div>";
        }
        ?>
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
        <p><a href="https://ag.purdue.edu/fnr/Pages/Profile.aspx?strAlias=bpijanow">Bryan Pijanowski’s</a> passport is overstuffed with visas from some of the world’s most far-flung outposts. As a professor of soundscape ecology in the <a href="https://ag.purdue.edu/fnr/Pages/default.aspx">Department of Forestry and Natural Resources</a> and director of the <a href="https://centerforglobalsoundscapes.org/">Center for Global Soundscapes</a> at Purdue’s <a href="http://www.purdue.edu/discoverypark/">Discovery Park</a>, he has journeyed from the lush rainforests of Costa Rica to the wide-open, gently rolling landscapes of Mongolia’s eastern steppes, in an effort to preserve and analyze the sounds that define life on Earth.</p>

        <p>In Borneo, he traveled up the winding Temburong River to spend months deep in the oldest forest on Earth, recording sounds at the top of a 250-foot tower to compare sounds in the canopy to those on the ground. In Costa Rica, his microphones recorded the calls of nearly 1,000 different animal species in one of the most biologically diverse ecosystems on the planet. On a recent expedition to a remote Tanzanian research station, he studied the vocalization patterns of baboons, chimpanzees, monkeys, and bushbabies in the world’s largest woodland biome. He has experienced the vast wonder of nature from the tops of glaciers to the depths of coral reefs.</p>

        <p>“We are going to places that are as unspoiled as possible, places where the biome has not been altered,” Pijanowski says, leaning back in his office chair, closing his eyes and letting his thoughts drift thousands of miles away and to ecosystems thousands of years old. “In Borneo, where the forests are over 130 million years old, the layering of sounds by animals can be explained by the evolutionary sequence of animals present in this forest. In Costa Rica, which has rainforest that’s approximately two million years old, I could hear a young ecosystem still developing.”</p>
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
            <ul class="takeaway" style="padding-bottom: 5px;">
              <li>At Purdue’s <a href="https://centerforglobalsoundscapes.org/">Center for Global Soundscapes</a>, Professor <a href="https://ag.purdue.edu/fnr/Pages/Profile.aspx?strAlias=bpijanow">Bryan Pijanowski</a> leads the study of the natural and manmade sounds that define our ecosystems, and what changes in those soundscapes can tell us about the health of our landscapes and native species.</li>
              <li>Two examples: The sounds inside a glacier can reveal information about the physics of the glacier, including its size, formation, and movement. And in some cultures, ranchers can identify the sounds of individual members of a herd.</li>
              <li>In the past four years, the center has installed more than 3,600 audio sensors in 27 sites worldwide, collecting more than 1.2 million recordings totaling 250,000 hours of sound.</li>
              <li>Center projects include <a href="https://centerforglobalsoundscapes.org/vanishing-soundscapes/">Vanishing Soundscapes</a>, which monitors soundscape ecology in protected and high-value ecological areas like parks, monuments, and reserves, and a <a href="https://centerforglobalsoundscapes.org/midwest-initiative/">Midwest Initiative</a> to collect and catalog natural sounds in the north-central United States.</li>
              <li>For the <a href="https://www.recordtheearth.org/">Record the Earth</a> project, citizen scientists can use an app to record and submit soundscapes from anywhere across the globe.</li>
              <li>The sounds around us also help shape our psychological attachment to and relationship with the places we know.</li>
              <li><a href="http://www.recordtheearth.org">Download the “Record the Earth” app for iOS or Android to record and submit sounds from your landscape, and listen to soundscapes from across the globe.</a></li>
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