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
			<div class="home-content col-md-6 text-center intro-text">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/quote-symbol.jpg">
				<?php
					the_content();
				?>
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
			<div class="col-md-12 text-center mt-4 mb-4">
	<?php
		$treatments_title = get_field( "treatments_title" );
	?>

				<h2><?php echo $treatments_title ?></h2>
			</div>		
		</div>
		<div class="row">

		<?php if( have_rows('stages') ): 
			 while( have_rows('stages') ): the_row(); 
			// vars
			$image = get_sub_field('image');
			$title = get_sub_field('title');
			$description = get_sub_field('description');
			$color = get_sub_field('colour');

		?>



			<div class="col-sm col-md-6 col-lg">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" width="90%"/>
				<div class="d-flex flex-row">
				<?php if ($color == 'blue') { ?>
					<div class="service-tab bg-blue">
				    <?php echo $title; ?>
					</div>
					<div class="blue-triangle-right">
					</div>
				<?php } elseif ($color == 'beige') {?>
					<div class="service-tab bg-beige">
				    <?php echo $title; ?>
					</div>
					<div class="beige-triangle-right">
					</div>
				<?php } elseif ($color == 'white') {?>
					<div class="service-tab bg-white txt-blue">
				    <?php echo $title; ?>
					</div>
					<div class="white-triangle-right">
					</div>
				<?php } ?>
				</div>
			    <?php echo $description; ?>					
			</div>
			<?php endwhile;
		endif; ?>

		</div>
	</div>


	<div class="container divider-rule">
		<div class="row">

	<?php if( have_rows('treatment_panels') ): ?>
		<?php while( have_rows('treatment_panels') ): the_row(); 

		// vars
		$image = get_sub_field('image');
		$title = get_sub_field('title');
		$description = get_sub_field('description');
		$color = get_sub_field('colour');
		$order = get_sub_field('image-bottom');
		?>

			<div class="col-sm-12 col-md-6 col-lg">

			<?php if ($order == 'Yes') { ?>
			<div class="treatment-panels text-center bg-white">
				<h6>WHAT WE DO</h6>
				<h3>
				    <?php echo $title; ?>
				</h3>
				<p>
			    <?php echo $description; ?>					
				</p>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" width="100%"/>
			</div>
			<?php } else {?>
			<div class="treatment-panels text-center bg-beige">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" width="100%"/>
					<h6>WHAT WE DO</h6>
					<h3>
					    <?php echo $title; ?>
					</h3>
					<p>
				    <?php echo $description; ?>					
					</p>
			</div>
				<?php 
				}
				?>



			</div>

	<?php endwhile; ?>
<?php endif; ?>
		</div>
	</div>

<?php
	$firstimage = get_field( "practice_image1" );
	$secondimage = get_field( "practice_image2" );
	$practice_description = get_field( "practice_description" );
?>
	<div class="container divider-rule">
		<div class="row mt-4">
			<div class="col-sm-12 col-md-4 col-lg">
				<img src="<?php echo $firstimage['url']; ?>" alt="<?php echo $firstimage['alt'] ?>" width="100%"/>
			</div>
			<div class="col-sm-12 col-md-4 col-lg">
				<img src="<?php echo $secondimage['url']; ?>" alt="<?php echo $secondimage['alt'] ?>" width="100%"/>
			</div>
			<div class="col-sm-12 col-md-4 col-lg">
				<?php echo $practice_description ?>
			</div>
		</div>
	</div>

<?php
	$academia_image = get_field( "academia_image" );
	$academia_description = get_field( "academia_description" );
?>
	<div class="container divider-rule">
		<div class="row mt-4">
			<div class="col-sm-12 col-md-6 col-lg">
				<img src="<?php echo $academia_image['url']; ?>" alt="<?php echo $academia_image['alt'] ?>" width="100%"/>
			</div>
			<div class="col">
				<?php echo $academia_description ?>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row  justify-content-center">
			<div class="col-md-12 text-center mt-4 mb-4">
				<h2>Affiliates</h2>
			</div>		

		<?php if( have_rows('affiliates') ): ?>
			<?php while( have_rows('affiliates') ): the_row(); 

		// vars
		$logo = get_sub_field('affiliate_logo');
		$link = get_sub_field('affiliate_link');

		?>
			<div class="col col-md-1">
				<a href="<?php echo $link; ?>" target="_blank">
				<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" width="100px"/>
				</a>
			</div>

	<?php endwhile; ?>
<?php endif; ?>

		</div>
	</div>



</article>