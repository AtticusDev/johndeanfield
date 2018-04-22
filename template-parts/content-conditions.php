<?php
/**
 * Template part for displaying page content in home.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package johndeanfield
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<?php if( have_rows('conditions') ): ?>
	<?php while( have_rows('conditions') ): the_row(); 

		// vars
		$image = get_sub_field('image');
		$title = get_sub_field('title');
		$description = get_sub_field('description');
		?>

		<?php

		if( get_row_index() % 2 == 0 ){
		?>
		<div class="container divider-rule">
			<div class="row  mt-4 mb-4">
				<div class="col-sm col-md-4">

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" width="90%"/>

				</div>
				<div class="col-sm col-md-8">
					<h2>
				    <?php echo $title; ?>
					</h2>
					<p>
				    <?php echo $description; ?>					
					</p>
				</div>
			</div><!-- end row -->
		</div><!-- end container -->

		<?php
	}else {
		?>
		<div class="container divider-rule">
			<div class="row mt-4 mb-4">
			<div class="col-sm col-md-8">
				<h2>
			    <?php echo $title; ?>
				</h2>
				<p>
			    <?php echo $description; ?>					
				</p>
			</div>
			<div class="col-sm col-md-4">

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" width="90%"/>

			</div>
			</div><!-- end row -->
		</div><!-- end container -->

		<?php
	}
	?>

	<?php endwhile; ?>
<?php endif; ?>

	<div class="container divider-rule">
		<div class="row">
			<div class="col-md-12 text-center mt-4 mb-4">
				<a role="button" href="#" class="btn btn-primary">REQUEST APPOINTMENT</a>
			</div>
		</div>
	</div>


	<div class="container divider-rule">
		<div class="row">
			<div class="col-md-12 text-center mt-4 mb-4 bg-primary p-5 text-white">

				<?php 
				$args = array( 'post_type' => 'quote', 'posts_per_page' => 1, 'orderby' => 'rand' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				 $quotename = get_field( "quote_by" );
				?>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/quote-symbol-white.png">
								<h6>QUOTATIONS</h6>
								<div class="largeQuote text-white"><?php the_content(); ?></div>
				<p><?php echo $quotename ?></p>

				<?php 
				endwhile;
				wp_reset_query();
				?>

			</div> <!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->









</article><!-- #post-## -->
