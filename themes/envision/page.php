<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

if(!empty($featuredURL)) : ?>
	<div class="landing" style="background-image: url('<?php echo get_the_post_thumbnail_url($postID, "full"); ?>')"></div>
<?php endif; ?>

	<div id="content" class="site-content">
    <div class="container">
      <div class="row">
      	<div class="col-sm-12">
					<div id="primary">
						<main id="main" role="main">

							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'components/page/content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>
						</main>
					</div>
				</div> <!-- /.col-sm-12-->

<?php
get_footer();
