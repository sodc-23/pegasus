<?php
/**
* Template Name: Amenities Page Template
 */

get_header(); ?>
	<div id="page-sub-header" class="banner" <?php if( $options['amenities_banner_bg_image'] ) { ?>data-parallax data-image-src="<?php echo wp_get_attachment_image_src( $options['amenities_banner_bg_image'], 'full' )[0]; ?>"<?php } ?>>
        <div class="container">
        	<?php if ( $options['amenities_banner_title'] ): ?>
        		<h1 class="banner-title white-color"><?php echo $options['amenities_banner_title']; ?></h1>
    		<?php endif; ?>
        </div>
    </div>

    <section class="section amenities-feature-boxes">
        <div class="container">
            <div class="row">
            <?php
            foreach ( $options['amenities_feature_boxes'] as $box ) {
                $box_image = $box['box_image'];
                $box_title = $box['box_title'];
                $box_desc = $box['box_desc'];
                $box_features = $box['box_features'];

                echo '<div class="col-lg-4 co-12">';
                echo '<div class="amenities-feature-box">';
                echo '<div class="box-image secondary-bgcolor">';
                
                if ( $box_image )
                    echo '<img src="' . $box_image . '" class="lazy" />';

                echo '</div>';
                echo '<div class="box-content">';

                if ( $box_title )
                    echo '<h4>' . $box_title . '</h4>';

                if ( $box_desc )
                    echo '<p>' . $box_desc . '</p>';

                if ( $box_features ) {
                    echo '<ul>';

                    foreach ( $box_features as $feature ) {
                        $feature_item = $feature['item'];
                        echo '<li><i class="fas fa-check-square primary-color"></i>' . $feature_item . '</li>';
                    }

                    echo '</ul>';
                }

                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
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