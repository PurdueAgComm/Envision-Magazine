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
    background: url("/envision/wp-content/uploads/2017/11/takeaway-bg-saving.jpg");
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
        <p>It’s impossible to measure the full impact of Madame Astou Gaye Mbacke’s entrepreneurship on the people of Senegal—and it all grew from small golden grains of millet. Her facility processes cereal-based products from grains grown by Senegalese farmers, including signature products of millet grain mixed with mango, baobab, or other local fruits and run through an extruder. The result: precooked pellets that are ground into a fortified flour, the key ingredient of porridge. Thanks to the extruder, the preparation of porridge is reduced from hours to minutes. Just add hot water, and an entire family is fed.</p>

        <p>Mbacke’s business is a success due in part to the training she received at a food processing incubation center established by Purdue University in collaboration with the ITA, a food research institute in Senegal. In the <a href="https://ag.purdue.edu/ipia/fpl/Pages/default.aspx">Feed the Future Innovation Lab for Food Processing and Post-Harvest Handling</a>, food-processing entrepreneurs have access to food and nutrition technologies, as well as training to help them establish or upgrade their businesses. Mbacke now employs over 100 people in the processing plant and sells the millet flour-based products to a network of over 3,000 women entrepreneurs who distribute them to urban markets. She also sells to government programs that feed hungry and malnourished children. Her work is a reminder that creating an efficient food supply isn’t just what happens in the field, but what happens after harvest.</p>

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
              <li>Previous research aimed at feeding the globe has focused largely on increasing crop production. Faculty in the <a href="https://www.purdue.edu/postharvest/">Purdue Postharvest Initiative</a> focus on research in developing nations to efficiently dry and store grains and process them as high-quality food products.</li>
              <li>Key innovations include low-cost transportable grain dryers, extrusion technology to create ready-to-eat foods, and fortified food products. In addition, <a href="https://www.picsnetwork.org/">Purdue Improved Crop Storage</a> bags are now used in 29 countries in Africa and Asia.</li>
              <li>Processors use local fruits and vegetables to fortify new food products with key nutrients, helping to promote growth and disease resistance in local populations.</li>
              <li>Women play a key role in agriculture as smallholder farmers and food processors. They pass on the economic benefits, purchasing nutritious foods, medical care, and access to education for their children.</li>
              <li><a href="https://purdue.edu/postharvest">Learn more about all of the projects in the Purdue Postharvest Initiative and the impact they’re having around the globe.</a></li>
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