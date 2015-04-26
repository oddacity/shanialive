<?php
/**
 * Template Name: Homepage
 *
 *
 * @package shanialive
 */

get_header();
the_post(); ?>

<div class="homepage">
	
	<div class="container-fluid">

		<div id="top" class="row">
			<div class="banner lazy col-lg-12 col-md-12 col-sm-12 col-xs-12" data-original="<?php echo the_field('banner_image');?>">
				
			</div>
		</div>

		<div id="about" class="row">
			<div class="content">
				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<h2>About Shania Live</h2>
					<p><?php echo the_field('about');?></p>
				</div>
			</div>	
		</div>

		<div id="shows" class="row">
			<div class="shows lazy" data-original="<?php echo the_field('shows_background_image');?>">
				<div class="overlay"></div>
				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<?php if(have_rows('shows')) : ?>
						<h2>Upcoming Shows</h2>
						<?php while(have_rows('shows')) : the_row(); ?>
					
							<div class="row single-show">
								<div class="wrapper">
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<h3><?php echo the_sub_field('date');?></h3>
									</div>
									<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
										<h3><?php echo the_sub_field('location');?></h3>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
										<a class="btn btn-grey" href="<?php echo the_sub_field('link');?>" target="_blank">More Info</a>
									</div>
								</div>	
							</div>

						<?php endwhile; ?>
					<?php endif;?>
				</div>
			</div>
		</div>

		<?php 

		$images = get_field('image_gallery');

		if( $images ): ?>

			<div id="media" class="row">
				<div class="gallery">
					<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
						<h2>Media Gallery</h2>
						<div class="row">	
						   	<?php foreach( $images as $image ): ?>
						   		<div class="image col-lg-2 col-md-2 col-sm-4 col-xs-6">
					                <a href="<?php echo $image['url']; ?>" data-lightbox="image-gallery">
					                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
					                </a>
					            </div> 
					        <?php endforeach; ?>
					    </div>    

					</div>
				</div>
			</div>

		<?php endif;?>

		<div id="contact" class="row">
			<div class="contact lazy" data-original="<?php echo the_field('contact_background_image');?>">
				<div class="overlay"></div>
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<h2>Contact Shania Live</h2>
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
				</div>
			</div>
		</div>

	</div>	
</div>

<?php get_footer(); ?>
