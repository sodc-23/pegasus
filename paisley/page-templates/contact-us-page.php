<?php
/**
* Template Name: Contact Us Page Template
 */

get_header(); ?>
	<div id="page-sub-header" class="banner" <?php if( $options['contact_banner_bg_image'] ) { ?>data-parallax data-image-src="<?php echo wp_get_attachment_image_src( $options['contact_banner_bg_image'], 'full' )[0]; ?>"<?php } ?>>
        <div class="container">
        	<?php if ( $options['contact_banner_title'] ): ?>
        		<h1 class="banner-title white-color"><?php echo $options['contact_banner_title']; ?></h1>
    		<?php endif; ?>
        </div>
    </div>

    <section class="section contact-us-section">
    	<div class="container">
    		<div class="row">
				<div class="col-12 text-center">
					<h5 class="primary-color section-sub-title text-center">Contact Us</h5>
					<h2 class="secondary-color section-title text-center">Get In Touch</h2>
					<form id="contactForm">
						<div class="row">
							<div class="col-lg-6">
								<input type="text" class="form-control" id="name" placeholder="Your name" />
							</div>
							<div class="col-lg-6">
								<input type="email" class="form-control" id="email" placeholder="Email address" />
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<textarea class="form-control" id="message" placeholder="Write your message"></textarea>
							</div>
						</div>
						<button type="submit" class="button primary-button">Send Message</button>
					</form>
				</div>
			</div>
    		<div class="row">					
			    <div class="col-12">
			        <div class="map" id="contactMap" data-plugin-googlemap data-lat="<?php echo $options['google_map_location']['lat']; ?>" data-lng="<?php echo $options['google_map_location']['lng']; ?>">
			        	<div class="info-window">
			            	<?php if ( $options['community_name'] ): ?>
			                <p class="info-window-category"><?php echo $options['community_name']; ?></p>
			                <?php endif; ?>

			                <?php if ( $options['community_address'] ): ?>
			                <p class="info-window-name"><?php echo $options['community_address']; ?></p>
			                <?php endif; ?>

			                <?php if ( $options['google_directions_link'] ): ?>
			                <a targe="_blank" href="<?php echo $options['google_directions_link']; ?>">GET DIRECTIONS</a>
			                <?php endif; ?>
			            </div>
			        </div>
			    </div>
			</div>			
		</div>
	</section>	

<?php
get_footer();