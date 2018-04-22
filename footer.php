<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package johndeanfield
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12 text-center site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1 class="mb-0">Professor John Deanfield</h1>
			   	<p>PROFESSOR OF CARDIOLOGY<br>
			   <span class="qualifications">BA Hons. MB.BChir (Cantab), FRCP, FACC, FESC</span></a>
			   </div>
			</div>
			<div class="row text-center">
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>

			</div>
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("stickynav");
var content = document.getElementById("content");

var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
    content.classList.add("site-content-sticky")
  } else {
    navbar.classList.remove("sticky");
    content.classList.remove("site-content-sticky")
  }
}
</script>


<?php wp_footer(); ?>

</body>
    

</html>
