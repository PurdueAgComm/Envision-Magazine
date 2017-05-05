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
  <div class="landing" style="border-bottom: 7px solid #5B6870; background-image: url('<?php echo get_the_post_thumbnail_url($postID, "full"); ?>')"></div>
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
        <p>A small printer tucked into a corner of <a href="https://ag.purdue.edu/agecon/Pages/Profile.aspx?strAlias=hurtc">Chris Hurt’s</a> cluttered, busy office hums with rhythmic precision, spitting out page after page of the <a href="https://www.usda.gov/">U.S. Department of Agriculture’s</a> grain crop production report. Hurt snatches each sheet and scans the hundreds of rows of tiny numbers packed as tightly as corn stalks in a fertile field.</p>
        <figure id="attachment_333" style="width: 400px" class="wp-caption alignright"><img class="wp-image-333" src="/envision/wp-content/uploads/2017/05/Chris-Hurt.jpg" alt="Chris Hurt" width="400" height="542" srcset="/envision/wp-content/uploads/2017/05/Chris-Hurt.jpg 600w, /envision/wp-content/uploads/2017/05/Chris-Hurt.jpg 256w" sizes="(max-width: 400px) 100vw, 400px"><figcaption class="wp-caption-text">Chris Hurt, professor of agricultural economics</figcaption></figure>
        <p>One of the nation’s leading <a href="https://ag.purdue.edu/agecon">agricultural economists</a>, Hurt knows exactly what to look for in the dense block of data—specifically, which numbers will move the market up or down. For hundreds of farm families, a swing of a few cents in the price of a bushel of corn or soybeans can mean the difference between putting money away for a child’s education and keeping food on the table. The line between success and subsistence can be painfully thin.</p>
        <p>After he performs a few mental calculations, Hurt’s expression softens into a warm grin.</p>
        <p>“There’s not a major change here, but it is generally positive for producers,” he says.</p>
        <p>The numbers indicate that grain prices might be stabilizing, a signal that the worst of the current downturn in the corn and soybean markets could be over. Grain prices have been slumping since 2014, due mostly to near-record supplies and weakening global demand. Conditions have been especially tough for smaller-scale farmers caught between shrinking income and rising production costs.</p>
        <p>The <a href="https://ag.purdue.edu">College of Agriculture</a> is helping producers manage through the downturn with a series of workshops, webinars, and other outreach efforts.</p>
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
            <ul class="takeaway" style="padding-bottom: 5px;">
              <li>Agricultural market cycles typically last five years; the current downturn is in its third year.</li>
              <li>Due to overproduction, grain prices are off about 30 percent since their peak in 2014—but they may be stabilizing.</li>
              <li>Dynamics in a family-owned business can make financial stress more difficult, but the <a href="https://ag.purdue.edu/agecon/piff/pages/piff.aspx">Purdue Initiative for Family Firms</a> can help with tools to <a href="https://ag.purdue.edu/agecon/PIFF/Pages/FC.aspx">maintain family bonds</a>.</li>
            </ul>
            <p  style="padding-top:0;">The <a href="https://ag.purdue.edu">College of Agriculture</a> offers a wealth of online resources to provide farmers more information about financial management and business planning. Here are a few places to get started:</p>
            <ul class="takeaway" style="padding-top: 0;">
              <li>See the <a href="http://ag.purdue.edu/commercialag">Center for Commercial Agriculture</a> for information on:
              <ul>
                <li><a href="http://ag.purdue.edu/commercialag/farmrisk">An overview of managing farm risk</a></li>
                <li>Upcoming and archived <a href="https://ag.purdue.edu/commercialag/Pages/Webinars.aspx">financial planning webinars</a></li>
                <li><a href="https://ag.purdue.edu/commercialag/Pages/ResourceTopics.aspx">Agricultural policy/crop insurance/farmland value/farm finance</a></li>
                <li><a href="https://ag.purdue.edu/commercialag/Pages/Resources/Finance/Financial-Stress/Stress-Testing-Financial-Performance.aspx">Stress-testing financial performance</a></li>
              </ul></li>
            <li><a href="https://www.cdext.purdue.edu/collaborative-projects/succession-planning/">Purdue Succession Planning Team</a></li>
            <li><a href="https://ag.purdue.edu/agecon/Documents/PAER%20AUGUST%202016.pdf">Purdue Farmland Value Survey</a> (PDF)</li>
            <li><a href="https://ag.purdue.edu/commercialag/Documents/Resources/Mangagement-Strategy/Crop-Economics/Crop%20Budget/2016_10_01_Dobbings_Purdue_Crop_Guide.pdf">Purdue Crop Cost and Return Guide</a> (PDF)</li></ul>
        </div>
    </div>
  </div>



<div class="container story-body" style="/*shame*/min-height: 0vh;">
  <div class="row">
    <div class="maincontent blog-maincontent col-md-offset-1 col-md-10">
      <h2>A sense of comfort</h2>
      <p>Associate Dean <a href="https://ag.purdue.edu/agecon/Pages/Profile.aspx?strAlias=hender65&intDirDeptID=4">Jason Henderson</a>, director of <a href="https://extension.purdue.edu">Purdue Extension</a> and one of the nation’s foremost experts in agricultural market cycles, sees an almost reassuring predictability in current market conditions.</p>

      <p>“There is some sense of comfort in that we’ve seen it before,” Henderson says. “Agricultural markets go through cycles. Periods of accelerated production create oversupply, which drives down prices and can create a liquidity crisis.”</p>

      <p>The worst downturn in memory came in the 1980s. After the Soviet Union agreed to buy American grain in 1972, prices skyrocketed, and United States farmers borrowed money to expand production. Prices collapsed in 1980 after the United States cut off grain shipments to the U.S.S.R. in the wake of the Soviet invasion of Afghanistan. When interest rates soared in the early 1980s, many farmers faced debts they could not pay. In the 1930s, there were 6.8 million farms in the United States—but by 1985, only 2.2 million were left.</p>

      <p>“Many farmers found themselves overextended after investments in the 1970s and high interest rates in the 1980s, didn’t make adjustments soon enough, and found themselves struggling to keep their family farms,” Henderson says.</p>
    </div>
  </div>
</div>


  <div class="section takeaway-parallax">
    <div class="section takeaway-header">
      <div class="container">
        <h2>creating a farm management plan</h2>
      </div>
    </div>
    <div class="arrow-down"></div>
    <div class="container">
        <div class="col-sm-12 takeaway">
          <p style="font-size: 1.5em">Surviving the current downturn in the agricultural economy requires planning and discipline, says Associate Dean <a href="https://ag.purdue.edu/agecon/Pages/Profile.aspx?strAlias=hender65&intDirDeptID=4">Jason Henderson</a>. Henderson offers five tips to help farmers solidify their bottom line:</p>
            <ol class="takeaway">
              <li><strong>Analyze</strong> your cost structure. Cutting production costs is vital when revenues are shrinking.</li>
              <li><strong>Look</strong> at your debt structure. If possible, lock in lower long-term interest rates when borrowing money for capital expenses.</li>
              <li><strong>Develop</strong> a risk management plan. Try to minimize downside risk while maximizing upside opportunities.</li>
              <li><strong>Create</strong> a practical financial management plan. Know how to read and interpret your own balance sheets.</li>
              <li><strong>Remember</strong> that the goal is to survive the short-term downturn and position yourself to take advantage of the market when it recovers.</li>
            </ol>
          <p style="font-size: 1.5em; padding-top: 0px; padding-bottom: 20px; ">“The biggest thing is don’t borrow a lot of money to get through this,” Henderson says. “You have to make some adjustments, but it can be done.” </p>
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