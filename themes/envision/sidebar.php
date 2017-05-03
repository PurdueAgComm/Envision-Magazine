<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Envision_Magazine
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<br><br>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <aside id="secondary" role="complementary">
          	    <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </aside>
        </div>
    </div>
</div>
