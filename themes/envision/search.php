<?php
/* Template for displaying all category posts */
get_header(); ?>

      <style>
      .breadcrumb{
       display: none;
      }
      </style>

<div class="container">
  <div class="row">
    <div class="maincontent col-lg-7 col-md-7 col-sm-7">
   <?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h1>Search Results</h1>");
        echo "<p>Your search results for <strong>" . get_query_var('s') . "</strong>: </p>";
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                 	<div class="row post-bg" style="border-left: 7px solid #ffd100;">
				        <div class="col-sm-12">
				          <h2 style="padding-top: 0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				          <p class="text-muted"><em><?php the_time('l, F jS, Y'); ?></em></p>
				          <?php the_excerpt(); ?>
				          <?php echo "<a class='btn btn-default btn-block' href='" . get_the_permalink() . "'>Read More</a>"; ?>
				        </div>
				      </div>

                 <?php
        }
        echo "<br><div class='well'><h2>Couldn't find what you were looking for?</h2>";
        echo "<p>Try your search again.</p>";
        get_search_form();
        echo "</div>";
    }else{


?>

        <h1>Nothing Found</h1>
        <div class="alert alert-info">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
        <?php get_search_form(); ?>
<?php } ?>
    </div>

    <?php get_sidebar('sidenav'); ?>
    <?php get_sidebar('sidecontent'); ?>
  </div>
</div>
<?php get_footer(); ?>

