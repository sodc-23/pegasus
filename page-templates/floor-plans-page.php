<?php
/**
* Template Name: Floor Plans Page Template
 */

get_header(); ?>
	<div id="page-sub-header" class="banner" <?php if( $options['floor_plans_banner_image'] ) { ?>data-parallax data-image-src="<?php echo wp_get_attachment_image_src( $options['floor_plans_banner_image'], 'full' )[0]; ?>"<?php } ?>>
        <div class="container">
        	<?php if ( $options['floor_plans_banner_title'] ): ?>
        		<h1 class="banner-title white-color"><?php echo $options['floor_plans_banner_title']; ?></h1>
    		<?php endif; ?>
        </div>
    </div>

    <section class="section">
    	<div class="container">
			<div class="col text-center move-in-date">				
				<p class="underline uppercase">select your desired move-in date to see pricing & availability</p>
				<div class="banner-buttons">
					<?php if ( $options['floor_plans_calendar_btn']['option'] == 'button' ) { ?>
					<div class="button banner-button calendar-button mb-2">
						<i class="fas fa-calendar-alt"></i>
						<input type="text" class="calendar" />
					</div>
					<?php } else {
						echo do_shortcode( $options['floor_plans_calendar_btn']['shortcode'] );
					} ?>

					<?php if ( $options['floor_plans_homes_btn']['option'] == 'button' ) { ?>
						<a herf="<?php if ( $options['floor_plans_homes_btn']['btn_link'] ) echo $options['floor_plans_homes_btn']['btn_link']; else echo '#'; ?>" class="button primary-button banner-button mb-2"><?php echo $options['floor_plans_homes_btn']['btn_title']; ?></a>
					<?php } else {
						echo do_shortcode( $options['floor_plans_homes_btn']['shortcode'] );
					} ?>
				</div>
			</div>
		</div>
	</section>

	<section class="section pt-0">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php if ( $options['floor_plans_homes_shortcode'] ):
						echo do_shortcode( $options['floor_plans_homes_shortcode'] );
					endif; ?>
				</div>
			</div>
		</div>
	</section>	

<?php
get_footer();