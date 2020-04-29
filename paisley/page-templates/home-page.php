<?php
/**
* Template Name: Home Page Template
 */

get_header(); ?>
	<?php if ( $options['home_banner_bg_options'] == 'image' ) { ?>
	<div id="page-sub-header" class="home-banner banner" <?php if( $options['home_banner_bg_image'] ) { ?> style="background-image: url(<?php echo wp_get_attachment_image_src( $options['home_banner_bg_image'], 'full' )[0]; ?>)" <?php } ?>>
	<?php } else if ( $options['home_banner_bg_options'] == 'video' ) { ?>
	<div id="page-sub-header" class="home-banner banner video-bg">
		<?php if( $options['home_banner_bg_video'] ) { ?>		
		<div class="video-bg-wrapper">
			<video autoplay muted loop>
			  	<source src="<?php echo $options['home_banner_bg_video']['url']; ?>" type="<?php echo $options['home_banner_bg_video']['mime_type']; ?>">
			</video>
		</div>
		<?php } ?>	
	<?php } else if ( $options['home_banner_bg_options'] == 'slider' ) { ?>
	<div id="page-sub-header" class="home-banner banner slider-bg">
		<?php if( $options['home_banner_bg_slider'] ) { ?>		
		<div class="slider-bg-wrapper">
			<div class="owl-carousel owl-theme" data-owl-carousel data-plugin-options="{'margin':0, 'autoplayHoverPause':false}">
				<?php foreach ( $options['home_banner_bg_slider'] as $img ) { ?>
				<img class="owl-lazy" data-src="<?php echo wp_get_attachment_image_src( $img['src'], 'full' )[0]; ?>" />
				<?php } ?>
			</div>
		</div>
		<?php } ?>
	<?php } ?>
        <div class="container">
        	<?php if ( $options['home_banner_title'] ): ?>
        		<?php echo $options['home_banner_title']; ?>
    		<?php endif; ?>

			<?php if ( $options['home_banner_sub_title'] ): ?>
    		<p class="banner-sub-title white-color"><?php echo $options['home_banner_sub_title']; ?></p>
			<?php endif; ?>

			<?php if ( $options['home_banner_feataured_desc'] ): ?>
    		<p class="banner-featured-desc secondary-color"><?php echo $options['home_banner_feataured_desc']; ?></p>
			<?php endif; ?>

			<div class="move-in-date">
				<p class="uppercase underline white-color">select your desired move-in date to see pricing & availability</p>
				<div class="banner-buttons">
					<?php if ( $options['home_banner_calendar_btn']['option'] == 'button' ) { ?>
					<div class="button banner-button calendar-button mb-2">
						<i class="fas fa-calendar-alt"></i>
						<input type="text" class="calendar" />
					</div>
					<?php } else {
						echo do_shortcode( $options['home_banner_calendar_btn']['shortcode'] );
					} ?>

					<?php if ( $options['home_banner_btn']['option'] == 'button' ) { ?>
						<a herf="<?php if ( $options['home_banner_btn']['btn_link'] ) echo $options['home_banner_btn']['btn_link']; else echo '#'; ?>" class="button primary-button banner-button mb-2"><?php echo $options['home_banner_btn']['btn_title']; ?></a>
					<?php } else {
						echo do_shortcode( $options['home_banner_btn']['shortcode'] );
					} ?>
				</div>
			</div><!-- end move-indate -->            
        </div><!-- end .container -->
    </div><!-- end #page-sub-header -->

    <section class="section about-section pt-100 pb-0">    	
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-area">
						<?php if ( $options['home_about_show_options'] == 'image' ) {?>
							<?php if ( $options['home_about_image'] ) { ?>
							<img src="<?php echo wp_get_attachment_image_src( $options['home_about_image'], 'full' )[0]; ?>" class="lazy" />
							<?php  } ?>
						<?php } else if ( $options['home_about_show_options'] == 'video' ) { ?>
							<?php if ( $options['home_about_video'] ) { ?>
							<video autoplay loop>
							  	<source src="<?php echo $options['home_about_video']['url']; ?>" type="<?php echo $options['home_about_video']['mime_type']; ?>">
							</video>
							<?php } ?>
						<?php } else if ( $options['home_about_show_options'] == 'slider' ) { ?>
							<?php if ( $options['home_about_slider'] ) { ?>
							<div class="owl-carousel owl-theme" data-owl-carousel data-plugin-options="{'margin':0, 'dots':true}">
								<?php foreach ( $options['home_about_slider'] as $img ) { ?>
								<img class="owl-lazy img-responsive" data-src="<?php echo wp_get_attachment_image_src( $img['src'], 'full' )[0]; ?>" />
								<?php } ?>
							</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
				<div class="col-lg-6">
					<?php if ( $options['home_about_sub_title'] ): ?>
			    	<h5 class="section-sub-title primary-color"><?php echo $options['home_about_sub_title']; ?></h5>
			    	<?php endif; ?>

			    	<?php if ( $options['home_about_title'] ): ?>
			    	<h2 class="section-title secondary-color"><?php echo $options['home_about_title']; ?></h2>
			    	<?php endif; ?>	

					<?php if ( $options['home_about_desc'] ): ?>
						<?php echo $options['home_about_desc']; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!--
		<div class="container-fluid">
			<div class="row no-gutter about-bottom-wrapper">
				<div class="col-lg-6 offset-lg-6">
					<h2 class="white-color">I AM LOOKING FOR A...</h2>
					<ul>
						<li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/one_bed_room.png" class="lazy" />
							<p class="white-color">one bedroom</p>
						</li>
						<li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/two_bed_room.png" class="lazy" />
							<p class="white-color">two bedroom</p>
						</li>
						<li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/three_bed_room.png" class="lazy" />
							<p class="white-color">three bedroom</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		-->		
	</section>

	<section class="section special-offer-section white-color" <?php if( $options['special_offer_bg'] ) { ?>data-parallax data-image-src="<?php echo wp_get_attachment_image_src( $options['special_offer_bg'], 'full' )[0]; ?>"<?php } ?>>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php if ( $options['home_spec_offer_sub_title'] ): ?>
					<h5 class="section-sub-title text-center white-color"><?php echo $options['home_spec_offer_sub_title']; ?></h5>
					<?php endif; ?>

					<?php if ( $options['home_spec_offer_title'] ): ?>
					<h2 class="section-title text-center white-color"><?php echo $options['home_spec_offer_title']; ?></h2>
					<?php endif; ?>

					<?php if ( $options['home_spec_offer_desc'] ):
						echo $options['home_spec_offer_desc'];
					endif; ?>

					<form id="spec_offer_form" class="form-inline mb-5">
						<div class="form-group mx-md-1 mb-2">
					    	<input type="text" class="form-control-plaintext" id="first_name" value="First Name" />
					  	</div>
					  	<div class="form-group mx-md-1 mb-2">
					    	<input type="text" class="form-control-plaintext" id="last_name" value="Last Name" />
					  	</div>
					  	<div class="form-group mx-md-1 mb-2">
					    	<input type="text" class="form-control-plaintext" id="phone_number" value="Phone Number" />
					  	</div>
					  	<div class="form-group mx-md-1 mb-2">
					    	<input type="email" class="form-control-plaintext" id="email_addr" value="Email Address" />
					  	</div>
				    	<button class="button secondary-button mx-md-1 mb-2">Redeem Now</button>
					</form>
				</div>
			</div>
			<?php if ( $options['special_offer_terms_and_conditions'] ): ?>
			<div class="row">
				<div class="col-12">
					<?php echo $options['special_offer_terms_and_conditions']; ?>					
				</div>
			</div>
			<?php endif; ?>		
		</div>
	</section>

	<section class="section floor-plans-section pt-100">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php if ( $options['home_floor_plans_sub_ttile'] ): ?>
					<h5 class="section-sub-title text-center primary-color"><?php echo $options['home_floor_plans_sub_ttile']; ?></h5>
					<?php endif; ?>

					<?php if ( $options['home_floor_plans_title'] ): ?>
					<h2 class="section-title text-center secondary-color"><?php echo $options['home_floor_plans_title']; ?></h2>
					<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<?php if ( $options['home_floor_plans_homes_shortcode'] ):
						echo do_shortcode( $options['home_floor_plans_homes_shortcode'] );
					endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="section amenities-section primary-bgcolor white-color pt-0 pb-0">
		<div class="container-fluid pl-0 pr-0">
			<div class="row no-gutters">
				<div class="col-lg-6 d-flex">
					<?php if ( $options['home_amenities_images'] ) { ?>
					<div class="owl-carousel owl-theme" data-owl-carousel>
						<?php foreach ( $options['home_amenities_images'] as $img ) { ?>
						<img class="owl-lazy" data-src="<?php echo $img['src']; ?>" />
						<?php } ?>
					</div>
					<?php } ?>
				</div>
				<div class="col-lg-6 features-content">
					<?php if ( $options['home_amenities_title'] ): ?>
					<h2 class="section-title white-color"><?php echo $options['home_amenities_title']; ?></h2>
					<?php endif; ?>
					
					<?php if ( $options['home_amenities_features'] ) {
						foreach ( $options['home_amenities_features'] as $feature ) {
							$feature_title = $feature[ 'feature_title' ];
							$feature_items = $feature[ 'feature_items' ];

							if ( $feature_title )
								echo '<h4 class="third-color">' . $feature_title . '</h4>';

							if ( $feature_items ) {
								echo '<ul>';

								foreach ( $feature_items as $featured_item ) {
									$item = $featured_item['item'];
									echo '<li class="white-color"><i class="fas fa-chevron-right"></i>' . $item . '</li>';
								}

								echo '</ul>';
							}
						}
					} ?>

					<?php if ( $home_amenities_btns ) {
						echo '<div class="buttons">';

						foreach ( $options['home_amenities_btns'] as $btn ) {
							$title = $btn['btn_title'];
							$link = $btn['btn_link'];

							if ( $title ) {
								if ( $link )
									echo '<a href="' . ( $link ? $link : '#' ) . '" class="button secondary-button mb-2">' . $title . '</a>';
								else
									echo '<a href="#" class="button secondary-button mb-2">' . $title . '</a>';
							}
						}

						echo '</div>';
					} ?>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();