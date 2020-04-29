<?php
/**
 * The header for paisley theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<?php
global $options;
$options = get_fields('options');
?>
<style>
    body { color: <?php echo $options['body_color']; ?>; }
    .form-control-plaintext { color: <?php echo $options['body_color']; ?>; }    
    .gray-color { color: <?php echo $options['body_color']; ?>; }
    .primary-color { color: <?php echo $options['primary_color']; ?>; }
    .secondary-color { color: <?php echo $options['secondary_color']; ?>; }
    .third-color { color: <?php echo $options['third_color']; ?>; }
    .fourth-color { color: <?php echo $options['fourth_color']; ?>; }
    .primary-bgcolor { background-color: <?php echo $options['primary_color']; ?>; }
    .secondary-bgcolor { background-color: <?php echo $options['secondary_color']; ?>; }
    .third-bgcolor { background-color: <?php echo $options['third_color']; ?>; }
    .fourth-bgcolor { background-color: <?php echo $options['fourth_color']; ?>; }
    .primary-button { background-color: <?php echo $options['primary_color']; ?>; border-color: <?php echo $options['primary_color']; ?>; } 
    .primary-button:hover { color: <?php echo $options['primary_color']; ?> !important; }
    .secondary-button { background-color: <?php echo $options['secondary_color']; ?>; border-color: <?php echo $options['secondary_color']; ?>; }
    .secondary-button:hover { color: <?php echo $options['secondary_color']; ?> !important; }
    .calendar-button { border-color: <?php echo $options['primary_color']; ?>; color: <?php echo $options['primary_color']; ?> !important; }    
    .calendar-button .calendar { text-shadow: 0 0 0 <?php echo $options['primary_color']; ?>; }
    header#masthead .navbar-nav > li > a:hover { color: <?php echo $options['primary_color']; ?>; }
    #page-sub-header { background-color: <?php echo $options['secondary_color']; ?>; }
    #page-sub-header.home-banner .banner-featured-desc { color: <?php echo $options['secondary_color']; ?>; }
    a:hover { color: <?php echo $options['primary_color']; ?>; }
    .form-control { color: <?php echo $options['secondary_color']; ?>; background-color: <?php echo $options['fourth_color']; ?>; }    
    .top-menu li a:hover { color: <?php echo $options['primary_color']; ?>; }
    .social-links li a:hover { color: <?php echo $options['primary_color']; ?>; }
    .about-section .video-wrapper { background-color: <?php echo $options['secondary_color']; ?>; }
    .gallery-categories li a.active, .gallery-categories li a:hover { color: <?php echo $options['primary_color']; ?>; background-color: <?php echo $options['secondary_color']; ?>; }
    .about-section .about-bottom-wrapper:before { background-color: <?php echo $options['secondary_color']; ?>; }
    .portal-social-media .social-link { border-left: 1px solid <?php echo $options['fourth_color']; ?>; }    
    .portal-social-media .social-link:hover { background-color: <?php echo $options['primary_color']; ?>; }
    .member-socials li a:hover { background-color: <?php echo $options['secondary_color']; ?>; }
    .ui-widget.ui-widget-content { border: 2px solid <?php echo $options['primary_color']; ?>; }
    .ui-datepicker .ui-datepicker-header { background: <?php echo $options['primary_color']; ?>; }
    .ui-datepicker th { color: <?php echo $options['secondary_color']; ?>; }
    .ui-state-default, .ui-widget-content .ui-state-default { border: 1px solid <?php echo $options['primary_color']; ?>; background: <?php echo $options['fourth_color']; ?>;  color: <?php echo $options['secondary_color']; ?>; }
    .ui-widget-content .ui-state-highlight.ui-state-active { background: <?php echo $options['primary_color']; ?>; }
    .special-offer-section .parallax-overlay { background-color: <?php echo hexToRGB( $options['primary_color'], 0.9 ); ?>; }
    .schedule-tour-section .parallax-overlay { background-color: <?php echo hexToRGB( $options['primary_color'], 0.9 ); ?>; }
    .gallery-img:after { background-color: <?php echo hexToRGB( $options['primary_color'], 0.5 ); ?>; }
    .rrac_tabSection.rracHighland .nav-tabs li a.active, .rrac_tabSection.rracHighland .nav-tabs li a:hover { background-color: <?php echo $options['secondary_color']; ?> !important; color: <?php echo $options['primary_color']; ?> !important; }
    /*
    .rrac_tabSection.rracHighland .tab-content .rrac_appt_img { background-color: <?php echo $options['third_color']; ?>; }
    .rrac_tabSection.rracHighland .tab-content .rrac_appt_det { background-color: <?php echo $options['fourth_color']; ?>; color: <?php echo $options['body_color']; ?> !important; }
    .rrac_tabSection.rracHighland .tab-content .rrac_appt_det > .appname { color: <?php echo $options['secondary_color']; ?> !important; }
    .rrac_tabSection.rracHighland .tab-content .rrac_appt_btn a { background: <?php echo $options['primary_color']; ?> !important; border: 2px solid <?php echo $options['primary_color']; ?> !important; }
    .rrac_tabSection.rracHighland .tab-content .rrac_appt_btn a:hover { color: <?php echo $options['primary_color']; ?> !important; }
    .rrac_tabSection.rracHighland .tab-content .rrac_appt_btn a:last-child { border: 2px solid <?php echo $options['primary_color']; ?> !important; color: <?php echo $options['primary_color']; ?> !important; }
    .rrac_tabSection.rracHighland .tab-content .rrac_appt_btn a:last-child:hover { background: <?php echo $options['primary_color']; ?> !important; }
    */
    .gm-style .gm-style-iw, .gm-style .gm-style-iw div { background: <?php echo $options['primary_color']; ?>; }
    .gm-style .gm-style-iw-a.active .gm-style-iw-t::after, .gm-style .gm-style-iw-a .gm-style-iw-t::after { border-color: <?php echo $options['primary_color']; ?> transparent transparent; }
    .ui-accordion .ui-accordion-header { color: <?php echo $options['secondary_color']; ?>; }
    .ui-accordion .ui-accordion-header.ui-accordion-header-active { color: <?php echo $options['primary_color']; ?>; }
    .ui-accordion .ui-accordion-header.ui-accordion-header-active .ui-icon { color: <?php echo $options['primary_color']; ?>; }
    .ui-accordion .ui-accordion-content { color: <?php echo $options['secondary_color']; ?>; }
    .ui-accordion .ui-accordion-content .location.active, .ui-accordion .ui-accordion-content .location:hover { color: <?php echo $options['primary_color']; ?>; }

    body { font-family: '<?php echo $options["body_font"]["font_family"]; ?>', sans-serif; <?php if ( $options['body_font']['font_size'] ) { ?>font-size: <?php echo $options['body_font']['font_size']; ?>rem;<?php } ?> <?php if ( $options['body_font']['line_height'] ) { ?>line-height: <?php echo $options['body_font']['line_height']; ?>rem;<?php } ?> <?php if ( $options['body_font']['font_weight'] ) { ?>font-weight: <?php echo $options['body_font']['font_weight']; ?>;<?php } ?> }
    h1, h2, h3, h4, h5, h6 { font-family: '<?php echo $options["heading_font_family"]; ?>', sans-serif; }
    h1 { <?php if ( $options['h1_font']['font_size'] ) { ?>font-size: <?php echo $options['h1_font']['font_size']; ?>rem;<?php } ?> <?php if ( $options['h1_font']['line_height'] ) { ?>line-height: <?php echo $options['h1_font']['line_height']; ?>rem;<?php } ?> <?php if ( $options['h1_font']['font_weight'] ) { ?>font-weight: <?php echo $options['h1_font']['font_weight']; ?>;<?php } ?> }
    h2 { <?php if ( $options['h2_font']['font_size'] ) { ?>font-size: <?php echo $options['h2_font']['font_size']; ?>rem;<?php } ?> <?php if ( $options['h2_font']['line_height'] ) { ?>line-height: <?php echo $options['h2_font']['line_height']; ?>rem;<?php } ?> <?php if ( $options['h2_font']['font_weight'] ) { ?>font-weight: <?php echo $options['h2_font']['font_weight']; ?>;<?php } ?> }
    h3 { <?php if ( $options['h3_font']['font_size'] ) { ?>font-size: <?php echo $options['h3_font']['font_size']; ?>rem;<?php } ?> <?php if ( $options['h3_font']['line_height'] ) { ?>line-height: <?php echo $options['h3_font']['line_height']; ?>rem;<?php } ?> <?php if ( $options['h3_font']['font_weight'] ) { ?>font-weight: <?php echo $options['h3_font']['font_weight']; ?>;<?php } ?> }
    h4 { <?php if ( $options['h4_font']['font_size'] ) { ?>font-size: <?php echo $options['h4_font']['font_size']; ?>rem;<?php } ?> <?php if ( $options['h4_font']['line_height'] ) { ?>line-height: <?php echo $options['h4_font']['line_height']; ?>rem;<?php } ?> <?php if ( $options['h4_font']['font_weight'] ) { ?>font-weight: <?php echo $options['h4_font']['font_weight']; ?>;<?php } ?> }
    h5 { <?php if ( $options['h5_font']['font_size'] ) { ?>font-size: <?php echo $options['h5_font']['font_size']; ?>rem;<?php } ?> <?php if ( $options['h5_font']['line_height'] ) { ?>line-height: <?php echo $options['h5_font']['line_height']; ?>rem;<?php } ?> <?php if ( $options['h5_font']['font_weight'] ) { ?>font-weight: <?php echo $options['h5_font']['font_weight']; ?>;<?php } ?> }
    h6 { <?php if ( $options['h6_font']['font_size'] ) { ?>font-size: <?php echo $options['h6_font']['font_size']; ?>rem;<?php } ?> <?php if ( $options['h6_font']['line_height'] ) { ?>line-height: <?php echo $options['h6_font']['line_height']; ?>rem;<?php } ?> <?php if ( $options['h6_font']['font_weight'] ) { ?>font-weight: <?php echo $options['h6_font']['font_weight']; ?>;<?php } ?> }
    p { <?php if ( $options['body_font']['font_size'] ) { ?>font-size: <?php echo $options['body_font']['font_size']; ?>rem;<?php } ?> <?php if ( $options['body_font']['line_height'] ) { ?>line-height: <?php echo $options['body_font']['line_height']; ?>rem;<?php } ?>}
    .section-title { <?php if ( $options['section_title_font']['font_size'] ) { ?>font-size: <?php echo $options['section_title_font']['font_size']; ?>rem;<?php } ?> <?php if ( $options['section_title_font']['line_height'] ) { ?>line-height: <?php echo $options['section_title_font']['line_height']; ?>rem;<?php } ?> <?php if ( $options['section_title_font']['font_weight'] ) { ?>font-weight: <?php echo $options['section_title_font']['font_weight']; ?>;<?php } ?> }
    .section-sub-title { <?php if ( $options['section_sub_title_font']['font_size'] ) { ?>font-size: <?php echo $options['section_sub_title_font']['font_size']; ?>rem;<?php } ?> <?php if ( $options['section_sub_title_font']['line_height'] ) { ?>line-height: <?php echo $options['section_sub_title_font']['line_height']; ?>rem;<?php } ?> <?php if ( $options['section_sub_title_font']['font_weight'] ) { ?>font-weight: <?php echo $options['section_sub_title_font']['font_weight']; ?>;<?php } ?> }
</style>

<?php
if ( $options['header_code'] ):
    echo htmlspecialchars_decode( $options['header_code'] );
endif;
?>

</head>

<body <?php body_class(); ?>> 
<div id="page" class="site">
    <header id="masthead" class="site-header navbar-static-top sticky" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0 m-0">
                <div class="navbar-brand">                    
                    <?php if ( $options['community_logo_color'] ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_url( $options['community_logo_color'] ); ?>" alt="<?php echo esc_attr( $options['community_name'] ); ?>">
                        </a>
                    <?php endif; ?>

                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".header-menu-bottom" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="header-menu">
                    <div class="header-menu-row header-menu-top">
                        <ul class="top-menu top-menu-left">
                            <li class="d-none d-md-inline-block"><a href="<?php $options['google_directions_link']; ?>"><i class="fas fa-map-marker-alt"></i> get directions</a></li>
                            <li><a href="tel:<?php echo $options['phone_number']; ?>"><i class="fas fa-phone-volume"></i> <?php echo $options['phone_number']; ?></a></li>
                            <li class="d-none d-md-inline-block">
                                <a href="#office_hours" data-magnific-popup><i class="far fa-clock"></i> OFFICE HOURS</a>
                                <div id="office_hours" class="white-popup-block mfp-hide">
                                    <h3 class="primary-color">OFFICE HOURS</h3>
                                    <?php if ( $options['office_hours'] ) { ?>
                                    <ul class="office-hours">
                                        <?php foreach ( $options['office_hours'] as $item ) { ?>
                                            <li>
                                                <h5 class="secondary-color"><?php echo $item['day']; ?>:</h5>
                                                <p class="secondary-color"><?php echo $item['hours']; ?></p>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                    <?php } ?>
                                </div>
                            </li>
                        </ul>
                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'top',
                            'container'       => 'div',
                            'container_id'    => 'top-nav',
                            'container_class' => 'top-menu-right',
                            'menu_id'         => false,
                            'menu_class'      => 'top-menu',
                            'depth'           => 3
                        ));
                        ?>
                    </div>

                    <div class="header-menu-row header-menu-bottom collapse">
                        <ul class="social-links">
                            <li><a href="<?php echo $options['community_facebook']; ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo $options['community_twitter']; ?>"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php echo $options['community_instagram']; ?>"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'primary',
                            'container'       => 'div',
                            'container_id'    => 'main-nav',
                            'container_class' => '',
                            'menu_id'         => false,
                            'menu_class'      => 'navbar-nav',
                            'depth'           => 3
                        ));
                        ?>
                    </div>                        
                </div>               

            </nav>
        </div>
    </header><!-- #masthead -->    