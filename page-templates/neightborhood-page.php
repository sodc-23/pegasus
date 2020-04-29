<?php
/**
* Template Name: Neighborhood Page Template
 */

get_header(); ?>
	<div id="page-sub-header" class="banner" <?php if( $options['neighborhood_banner_bg_image'] ) { ?>data-parallax data-image-src="<?php echo wp_get_attachment_image_src( $options['neighborhood_banner_bg_image'], 'full' )[0]; ?>"<?php } ?>>
        <div class="container">
        	<?php if ( $options['neighborhood_banner_title'] ): ?>
        		<h1 class="banner-title white-color"><?php echo $options['neighborhood_banner_title']; ?></h1>
    		<?php endif; ?>
        </div>
    </div>

    <section class="section neighborhood-intro">
    	<div class="container">
    		<div class="row">
    			<div class="col-12 text-center">
    				<?php if ( $options['neighborhood_intro_sub_title'] ): ?>
    				<h5 class="primary-color section-sub-title text-center"><?php echo $options['neighborhood_intro_sub_title']; ?></h5>
    				<?php endif; ?>

    				<?php if ( $options['neighborhood_intro_title'] ): ?>
					<h2 class="secondary-color section-title text-center"><?php echo $options['neighborhood_intro_title']; ?></h2>
					<?php endif; ?>

					<?php if ( $options['neighborhood_intro_desc'] ): ?>
					<?php echo $options['neighborhood_intro_desc']; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="section neighborhood-map-section p-0">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-8">
                    <div class="map" id="map">
                        <!--
                        <div class="poi-info-window">
                            <?php if ( $options['community_name'] ): ?>
                            <div class="title"><?php echo $options['community_name']; ?></div>
                            <?php endif; ?>

                            <?php if ( $options['community_address'] ): ?>
                            <div class="address"><?php echo $options['community_address']; ?></div>
                            <?php endif; ?>

                            <?php if ( $options['google_directions_link'] ): ?>
                            <a targe="_blank" href="<?php echo $options['google_directions_link']; ?>">GET DIRECTIONS</a>
                            <?php endif; ?>
                        </div>
                        -->
                    </div>
                </div>
                <div class="col-lg-4 secondary-bgcolor">
                    <div class="accordion-wrapper">
                        <div class="accordion" data-plugin-neighborhood-map data-center-lat="<?php echo $options['google_map_location']['lat']; ?>" data-center-lng="<?php echo $options['google_map_location']['lng']; ?>">
                        <?php
                        $terms = get_terms( 'neighborhood_cat' );
                        foreach ( $terms as $term ):
                        ?>
                            <h3 class="accordion-header" data-category="<?php echo $term->name; ?>"><?php echo $term->name; ?></h3>
                            <div class="accordion-content">
                            <?php
                            $arg = [
                                'post_type' => 'post-neighborhood',
                                'order' => 'ASC',
                                'orderby' => 'menu_order',
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'neighborhood_cat',
                                        'field' => 'slug',
                                        'terms' => $term->slug,
                                    ),
                                ),
                            ];
                            $the_query = new WP_Query( $arg );
                            if ( $the_query->have_posts() ):
                                while ( $the_query->have_posts() ): $the_query->the_post();
                                    $title = get_field( 'neighborhood_info' ) ?: get_the_title();
                                    $distance = get_field( 'neighborhood_distance' );
                                    $location = get_field( 'neighborhood_location' );
                                    ?>
                                <div class="location" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                                    <p class="location-name"><?php echo $title; ?></p>
                                    <p class="location-remoteness"><?php echo $distance; ?></p>
                                    <div class="location-infowindow-content">
                                        <div class="info-window">
                                            <p class="info-window-category"><?php echo $term->name; ?></p>
                                            <p class="info-window-name"><?php echo $title; ?></p>
                                            <p class="info-window-remoteness"><?php echo $distance; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                            <?php endif; ?>
                            </div> 
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
	</section>
    
    <section class="section schedule-tour-section" <?php if( $options['special_offer_bg'] ) { ?>data-parallax data-image-src="<?php echo wp_get_attachment_image_src( $options['special_offer_bg'], 'full' )[0]; ?>"<?php } ?>>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h5 class="section-sub-title white-color text-center">CALL NOW OR SCHEDULE A TOUR</h5>
                    <h2 class="section-title white-color text-center">HAVE QUESTIONS? CALL US</h2>
                    <h2 class="phone-number white-color"><?php echo $options['phone_number']; ?></h2>
                    <a href="#" class="button secondary-button">Schedule A Tour</a>                   
                </div>
            </div>
        </div>
    </section>    

<?php
get_footer();