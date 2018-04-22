<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package johndeanfield
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('text-center'); ?>>
	<div class="container">
		<div class="row justify-content-center">
			<div class="entry-content intro-text pt-1 pb-5">
				<?php
					the_content();
				?>
			</div><!-- .entry-content -->
			<div class="contact-map">
				<?php
					the_post_thumbnail('full', array('class' => ''));
				?>
			</div>
		</div>
		<div class="row justify-content-center">
		<?php
			$directions = get_field( "directions" );
			$dir_button = get_field( "button_text" );
			$dir_url = get_field( "button_url" );
		?>
			<div class="col-md-8 mt-4">
				<?php echo $directions ?>
			</div>

			<div class="col-md-8 mt-4">
				<a class="btn btn-primary btn-square button-text" href="<?php echo $dir_url ?>" role="button" target="_blank"><span class="txt-sml"><?php echo $dir_button ?></span></a>
			</div>

		</div>
	</div>
</article><!-- #post-## -->
