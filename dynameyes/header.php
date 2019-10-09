<!DOCTYPE html>
<html>
<head>
	<title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <section id="dynameyes-header">
        <header>            
            <div class="header_top">
                <div class="container">
                    <div class="header_brand">
                        <a id="header_brand_link" href="<?php echo get_home_url(); ?>">
                            <?php bloginfo('name'); ?>
                        </a>
                    </div>
                    <div class="header_navigation">
                        <?php
                            if ( has_nav_menu( 'header_menu' ) ){
                                wp_nav_menu(array('theme_location'=>'header_menu'));
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="container">
                    <?php dynamic_sidebar( 'header-bottom-widget-area' ); ?>                
                </div>
            </div>
        </header>
    </section>