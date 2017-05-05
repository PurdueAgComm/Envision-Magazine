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
          <div class="col-sm-12">

          <p>The Ever True campaign to advance Purdue as a national and global leader spans July 2012 through June 2019.</p>
          <p>See what generous support of the College of Agriculture has accomplished so far.</p>
          <br>

          </div>
          <div class="col-sm-8">
            <div class="col-sm-12">
              <h2 style="margin-top: 0;"><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>Student Support</h2>
              <img src="/envision/wp-content/uploads/2017/05/student-support.jpg" alt="Scholarships have a goal of $35,609,669 and have $31,278,995 Raised. Study Abroad $596,339 raised for student travel">
            </div>
            <div class="col-sm-12">
              <h2><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>Faculty Support - Endowed Chairs</h2>
              <img src="/envision/wp-content/uploads/2017/05/Faculty-Chairs.jpg" alt="16 Current Faculty Endowed Chairs, Ten Endowed Charis Eligible for $1 Million Matches">
            </div>
            <div class="col-sm-12">
              <h2><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>Facilities Support</h2>
              <img src="/envision/wp-content/uploads/2017/05/facilities-support.jpg" alt="Completed: Indiana Corn and Soy Bean Center, Under Construction: Hobart and Russell Chreigton Hall of Animal Sciences & Land o'lakes center for experiental learning">
            </div>
          </div>

          <div class="col-sm-4">
            <img src="/envision/wp-content/uploads/2017/05/bell-tower.png" alt="86% or $189,821,145 raised of $220 Million goal">
          </div>


      </div>
    </div>
  </div>



  <div class="container story-body">
    <div class="row">
      <div class="maincontent blog-maincontent col-md-offset-1 col-md-10">

        <?php the_content(); ?>


        <?php
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