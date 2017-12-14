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
    background: url("/envision/wp-content/uploads/2017/11/takeaway-bg-data.jpg");
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
        <p>In a new building near the <a href="https://ag.purdue.edu/agry/acre/pages/default.aspx">Agronomy Center for Research and Education</a>, seven miles northwest of campus, sits a strange menagerie of machines. One resembles an octopus imitating a closed umbrella; at full extension, it looks like a small spaceship bristling with propellers and downwardfacing cameras. Nearby, a fire-engine red crop sprayer carries a custom boom, its nozzles replaced with assorted sensors connected by thick bundles of wires. Along one wall of the hangar-like structure hangs a collection of small unmanned aerial vehicles, each capable of carrying sophisticated instruments on flights over the 1,408-acre farm.</p>

        <p>Today, scientists in the <a href="https://ag.purdue.edu">College of Agriculture</a> are using tools such as drones, rovers, and other innovative technologies to reap a new kind of harvest—the rich, massive data that will help farmers make better decisions in the future. The field is called digital agriculture, and these tools unlock a new era of plant sciences and data-driven farming that will transform both research and industry. With unparalleled facilities, strong interdisciplinary collaborations, corporate partnerships, and a core of experienced faculty, Purdue stands poised as a leader of this new frontier.</p>

        <p>“It really comes down to using data more effectively, making more quantitative and informed and better decisions using data,” says <a href="https://ag.purdue.edu/agry/directory/Pages/mtuinstr.aspx">Mitch Tuinstra</a>, professor of plant breeding and genetics; Wickersham Chair of Excellence in Agricultural Research; and scientific director of the <a href="https://ag.purdue.edu/plantsciences/">Institute for Plant Sciences</a>. “This represents the intersection of many disciplines: plant science, engineering, computer science, data analytics, statistics, even aviation technology. We’re working together to create or develop new platforms to collect more data and take advantage of big data in agriculture.”</p>

        <p>Within projects studying plant breeding, climate resilience, crop genomics, the environmental impact of agriculture, global food security, and more, Purdue researchers are adapting the cutting-edge technologies used by social media networks, search engines, and self-driving vehicles to agricultural use. From the Internet of Things (IoT)—a catchall term for web-connected devices that collect real-time data—to machine learning and computer vision approaches (which enable Facebook to identify faces in photos), these data collection and analysis methods will change the way food is studied, grown, and consumed.</p>
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
              <li>At the new <a href="https://ag.purdue.edu/icsc/">Indiana Corn and Soybean Innovation Center</a>, scientists in multiple disciplines are using tools such as automated field sensors, drones, and the PhenoRover—a special high-clearance sprayer with customized sensors—to collect phenotype data previously gathered by walking through a field.</li>

              <li>The amount of data collected is unprecedented. Its transmission on site is wireless and automated, and can occur from any point across the farm, while data is transmitted to campus by fiber optic cable. Much of this technology is thanks to a partnership with Hewlett Packard Enterprise.</li>

              <li>In early 2018, the College of Agriculture will launch a <a href="https://ag.purdue.edu/cepf/">Controlled Environment Phenotyping Facility</a> that simulates different growing conditions and weather types and uses a conveyor belt to automate plant measurements.</li>

              <li>Analyzing the data provides new challenges, such as eliminating faulty images or bad measurements, digitally stitching images together, and matching data to the correct location in a plot.</li>

              <li>Interpreting the data can allow scientists to determine how well plants are growing and translate that to timely field recommendations for farmers, as well as identify the genes important to plant health.</li>

              <li>These advances in plant science will help us feed the estimated global population of 9 billion people in 2050.</li>

              <li><a href="/envision/f17-iot">See how the Internet of Things works.</a></li>
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