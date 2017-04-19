<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Envision_Magazine
 */

?>
      </div> <!-- /.row from header.php -->
    </div> <!-- /.container from header.php -->
  </div> <!-- /#content from header.php -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php get_template_part( 'components/footer/site', 'info' ); ?>
	</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
