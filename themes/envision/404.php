<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Envision_Magazine
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'envision' ); ?></h1>
							</header>
							<div class="page-content">
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'envision' ); ?></p>

								<?php
									get_search_form();

									the_widget( 'WP_Widget_Recent_Posts' );

									// Only show the widget if site has multiple categories.
									if ( envision_categorized_blog() ) :
								?>

								<div class="widget widget_categories">
									<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'envision' ); ?></h2>
									<ul>
									<?php
										wp_list_categories( array(
											'orderby'    => 'count',
											'order'      => 'DESC',
											'show_count' => 1,
											'title_li'   => '',
											'number'     => 10,
										) );
									?>
									</ul>
								</div>
								<?php
									endif;

									/* translators: %1$s: smiley */
									the_widget( 'WP_Widget_Archives', 'dropdown=0');

								?>

							</div>
						</section>
					</main>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();
