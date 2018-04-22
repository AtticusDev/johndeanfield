<?php
/**
 * Template part for displaying page content in about.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package johndeanfield
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container divider-rule">
		<div class="row justify-content-center">
			<div class="about-content col-md-6 text-left">
				<?php
					the_content();
				?>
				<a role="button" href="#" class="btn btn-primary">REQUEST APPOINTMENT</a>
			</div>
			<div class="col-md-6 col-sm-12 col-12">
				<div class="item">
			        <?php the_post_thumbnail('full', array('class' => 'home_thumbnail')); ?>
				<div class="item-overlay top"></div>
			    </div>

			</div><!-- .entry-content -->
		</div>
	</div>



	<div class="container divider-rule">
		<div class="row">
			<div class="col-md-12 text-center mt-4 mb-4 bg-primary p-5 text-white">

				<?php 
				$args = array( 'post_type' => 'quote', 'posts_per_page' => '1', 'orderby' => 'rand' );
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

	<div class="container">
		<div class="row justify-content-center mt-4">
			<div class="about-content col-md-8 text-left">
				<?php
					$research = get_field('description');
					$research_img = get_field('research_image');

					 echo $research; 
				?>
			</div>
			<div class="col-md-4 col-sm-12 col-12 text-right">
				<div class="item">
					<img src="<?php echo $research_img['url']; ?>" alt="<?php echo $research_img['alt'] ?>" width="90%"/>
			    </div>

			</div><!-- .entry-content -->
		</div>
	</div>



</article><!-- #post-## -->
