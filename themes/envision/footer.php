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

<div class="section footer-span">
  <div class="container">
  	<footer id="colophon" class="site-footer" role="contentinfo">
        <?php get_template_part( 'components/footer/site', 'info' ); ?>
  	</footer>
  </div>
</div>

<div class="section ada-span">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Purdue Agriculture, 615 West State Street, West Lafayette, IN 47907-2053 USA, (765) 494-8392</p>
        <p>&copy; <?php echo date("Y")?> Purdue University | An equal access/equal opportunity university | Integrity Statement | Copyright Complaints | <a href="https://ag.purdue.edu/agcomm">Maintained by Agricultural Communication</a></p>
        <p>Trouble with this page? Disability-related accessibility issue? Please contact us at <a href="mailto:agweb@purdue.edu">agweb@purdue.edu</a> so we can help.</p>
      </div>
    </div>
  </div>
</div>


<?php wp_footer(); ?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=agcomm"></script>
</body>
</html>
