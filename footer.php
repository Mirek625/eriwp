<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EriPress
 */

?>

	</div><!-- #content -->

	<footer class="page-footer orange accent-4">
    <div class="footer-copyright">
      <div class="container">
        Copyright &copy; 2016, Luca Hagel
      </div>
    </div>
  </footer>

	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/materialize.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/init.js"></script>

<?php wp_footer(); ?>

</body>
</html>
