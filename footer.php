<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 */
?>

    <?php
    $options = get_fields('options');
    ?>
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
                <div class="col-lg-7 secondary-bgcolor">
                    <div class="left-col">
                        <div class="row">
                            <div class="col-md-6 mb-5">
                                <h2 class="section-title uppercase white-color">Contact Us</h2>
                                <h5 class="white-color">Text Us:</h5>
                                <p class="white-color"><?php echo $options['email']; ?></p>
                                <h5 class="white-color">Call Us:</h5>
                                <p class="white-color"><?php echo $options['phone_number']; ?></p>
                                <h5 class="white-color">Visit Us:</h5>
                                <p class="white-color"><?php echo $options['community_address']; ?></p>
                                <p class="white-color footer-links"><a class="white-color" href="">Privacy Policy</a> | <a class="white-color" href="">Terms of Service</a></p>
                            </div>
                            <div class="col-md-6 mb-5">
                                <h2 class="section-title uppercase white-color">Office Hours</h2>
                                <?php if ( $options['office_hours'] ) { ?>
                                <ul class="office-hours">
                                    <?php foreach ( $options['office_hours'] as $item ) { ?>
                                        <li>
                                            <h5 class="white-color"><?php echo $item['day']; ?>:</h5>
                                            <p><?php echo $item['hours']; ?></p>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <?php } ?>
                            </div>
                        </div>
                        <!--
                        <div class="row">
                            <div class="col-12">
                                <div class="map" id="footerMap" data-plugin-googlemap></div>
                            </div>
                        </div>                        
                        -->
                    </div>
                </div>
                <div class="col-lg-5 third-bgcolor">
                    <div class="right-col">
                        <?php if ( $options['special_offer_title'] ): ?>
                        <h2 class="section-title uppercase white-color"><?php echo $options['special_offer_title']; ?></h2>
                        <?php endif; ?>

                        <?php echo $options['special_offer_description']; ?>

                        <form id="footerForm">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="email" class="form-control" placeholder="Email address">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="Choose Your Desired Move-in Date">
                                </div>
                            </div>
                            <?php if ( $options['special_offer_button_title'] ): ?>
                            <button type="submit" class="button primary-button"><?php echo $options['special_offer_button_title']; ?></button>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-7">
                    <div class="footer-bottom third-bgcolor">
                        <div class="copyright">
                            <?php if ($options['copyright_text']): ?>
                            <span><?php echo $options['copyright_text']; ?></span>
                            <?php endif; ?>

                            <?php if ($options['copyright_logo']): ?>
                            <img src="<?php echo $options['copyright_logo']; ?>" />
                            <?php endif; ?>
                        </div>
                        <ul class="footer-logos">
                            <li><a href="#"><i class="fas fa-hand-holding-heart white-color"></i></a></li>
                            <li><a href="#"><i class="fas fa-wheelchair white-color"></i></a></li>
                            <li><a href="#"><i class="fas fa-home white-color"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>            
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<?php
if ( $options['footer_code'] ):
    echo htmlspecialchars_decode( $options['footer_code'] );
endif;
?>

</body>
</html>