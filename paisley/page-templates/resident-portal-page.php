<?php
/**
* Template Name: Resident Portal Page Template
 */

get_header(); ?>
	<div id="page-sub-header" class="banner" <?php if( $options['portal_banner_image'] ) { ?>data-parallax data-image-src="<?php echo wp_get_attachment_image_src( $options['portal_banner_image'], 'full' )[0]; ?>"<?php } ?>>
        <div class="container">
        	<?php if ( $options['portal_banner_title'] ): ?>
        		<h1 class="banner-title white-color"><?php echo $options['portal_banner_title']; ?></h1>
    		<?php endif; ?>
        </div>
    </div>

    <section class="section portal-resource">
    	<div class="container">
			<div class="col text-center">				
				<?php if ( $options['portal_resources_sub_title'] ): ?>
                <h5 class="section-sub-title primary-color"><?php echo $options['portal_resources_sub_title']; ?></h5>
                <?php endif; ?>

                <?php if ( $options['portal_resources_title'] ): ?>
                <h2 class="section-title secondary-color"><?php echo $options['portal_resources_title']; ?></h2>
                <?php endif; ?>

                <?php if ( $options['portal_resources'] ) { ?>

                	<div class="row">

                	<?php foreach ( $options['portal_resources'] as $resource ) { ?>

                		<div class="col-lg-4 col-12">
                			<div class="resource third-bgcolor lazy" <?php if( $resource['background_image'] ) { ?>style="background-image: url('<?php echo $resource['background_image']; ?>');" <?php } ?>>
                				<?php if ( $resource['button_title'] ) { ?>
                				<a href="<?php echo $resource['button_link'] ? $resource['button_link'] : '#'; ?>" class="button primary-button"><?php echo $resource['button_title']; ?></a>
                				<?php } ?>
                			</div>
                		</div>

                	<?php } ?>

                	</div>

                <?php } ?>
			</div>
		</div>
	</section>

	<section class="section portal-social-media fourth-bgcolor pb-0">
    	<div class="container">
    		<div class="row">
				<div class="col text-center">				
					<?php if ( $options['portal_social_media_sub_title'] ): ?>
	                <h5 class="section-sub-title primary-color"><?php echo $options['portal_social_media_sub_title']; ?></h5>
	                <?php endif; ?>

	                <?php if ( $options['portal_social_media_title'] ): ?>
	                <h2 class="section-title secondary-color"><?php echo $options['portal_social_media_title']; ?></h2>
	                <?php endif; ?>
	            </div>
            </div>
        </div>

        <?php if ( $options['portal_social_media_icons'] ) { ?>
        <div class="container-fluid pl-0 pr-0">
        	<div class="row no-gutters"> 

            	<?php
            	foreach ( $options['portal_social_media_icons'] as $icon ) {
            		if ( $icon['class_name'] ) {
            		?>

            		<div class="col-md">
            			<a href="<?php echo $icon['link'] ? $icon['link'] : '#'; ?>" class="social-link fourth-color secondary-bgcolor">
            				<i class="<?php echo $icon['class_name']; ?>"></i>
        				</a>
            		</div>

	            	<?php }
	            } ?>
                
			</div>
		</div>
		<?php } ?>
	</section>

	<section class="section portal-team">
    	<div class="container">
			<div class="col text-center">				
				<?php if ( $options['portal_team_sub_title'] ): ?>
                <h5 class="section-sub-title primary-color"><?php echo $options['portal_team_sub_title']; ?></h5>
                <?php endif; ?>

                <?php if ( $options['portal_team_title'] ): ?>
                <h2 class="section-title secondary-color"><?php echo $options['portal_team_title']; ?></h2>
                <?php endif; ?>

                <?php if ( $options['portal_team_members'] ) { ?>
                	<?php 
            		$first_member = $options['portal_team_members'][0];
                	?>
                	<div class="row member first-member">
                		<div class="col-lg-6">
                			<div class="member-avatar secondary-bgcolor">
                				<?php if ( $first_member['avatar'] ): ?>
                				<img src="<?php echo $first_member['avatar']; ?>" class="lazy" />
            					<?php endif; ?>
            				</div>
            			</div>
            			<div class="col-lg-6">
            				<div class="member-meta text-left">
            					<?php if ( $first_member['name'] ): ?>
            					<h4 class="member-name"><?php echo $first_member['name']; ?></h4>
        						<?php endif; ?>

        						<?php if ( $first_member['role'] ): ?>
            					<h6 class="member-role"><?php echo $first_member['role']; ?></h6>
        						<?php endif; ?>

        						<?php if ( $first_member['desc'] ): ?>
            					<p class="member-desc"><?php echo $first_member['desc']; ?></p>
        						<?php endif; ?>

    							<?php if ( $first_member['social_links'] ) { ?>
        							<ul class="member-socials">
    								<?php foreach ( $first_member['social_links'] as $link ) { ?>
    									<?php if ( $link['icon'] ) { ?>
    									<li><a href="<?php $link['link'] ? $link['link'] : '#'; ?>" class="gray-color fourth-bgcolor"><i class="<?php echo $link['icon']; ?>"></i></a></li>
    									<?php } ?>
    								<?php } ?>
    								</ul>
    							<?php } ?>
        					</div>
        				</div>
            		</div>

                	<div class="row">

                	<?php foreach ( $options['portal_team_members'] as $inx => $member ) {
                		if ( $inx == 0 ) continue;
                		?>

                		<div class="col-lg-4 col-md-6">
                			<div class="member">
	                			<div class="member-avatar secondary-bgcolor">
	                				<?php if ( $member['avatar'] ): ?>
	                				<img src="<?php echo $member['avatar']; ?>" class="lazy" />
	            					<?php endif; ?>
	        					</div>

	            				<div class="member-meta">
	            					<?php if ( $member['name'] ): ?>
	            					<h4 class="member-name secondary-color"><?php echo $member['name']; ?></h4>
	        						<?php endif; ?>

	        						<?php if ( $member['role'] ): ?>
	            					<h6 class="member-role gray-color"><?php echo $member['role']; ?></h6>
	        						<?php endif; ?>

	    							<?php if ( $member['social_links'] ) { ?>
	        							<ul class="member-socials">
	    								<?php foreach ( $member['social_links'] as $link ) { ?>
	    									<?php if ( $link['icon'] ) { ?>
	    									<li><a href="<?php $link['link'] ? $link['link'] : '#'; ?>" class="gray-color"><i class="<?php echo $link['icon']; ?>"></i></a></li>
	    									<?php } ?>
	    								<?php } ?>
	    								</ul>
	    							<?php } ?>
	        					</div>
        					</div>
                		</div>

                	<?php } ?>

                	</div>

                <?php } ?>
			</div>
		</div>
	</section>

<?php
get_footer();