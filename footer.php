<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */

?>

	<footer class="site__footer">
		<!-- <h2>G. Rizzoli, <a href=https://github.com/rizo32>mon github!</a></h2> -->
        <?php get_sidebar( 'footer-1' ); ?>
        <?php get_sidebar( 'footer-2' ); ?>
        <?php get_sidebar( 'footer-3' ); ?>
    </footer><!-- #colophon -->
</div><!-- #page -->

<aside>
</aside>

<?php wp_footer(); ?>

</body>
</html>