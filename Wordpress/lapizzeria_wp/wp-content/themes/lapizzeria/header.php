<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width", initial-scale="1">
    <!-- Make IOS compatible -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="La Pizzeria Restaurant">
    <link rel="apple-mobile-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.jpg">

    <!-- Make Android compatible -->
    <meta name="theme-color" content="#a61206">
    <meta name="mobile-web-app-capable" content="yes">
    
    <?php wp_head();?>
</head>
<body <?php body_class(); ?> >

    <header class="site-header">
        <!-- Container -->
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <?php
                    if(function_exists('the_custom_logo')) {
                        the_custom_logo(); 
                    }
                ?>
            </div>
            <!-- Fim logo -->
            <!-- Header Information -->
            <div class="header-information">
                <!-- Socials -->
                <div class="socials">
                    <?php
                        $args = array(
                            "theme_location" => "social-menu",
                            "container" => "nav",
                            "container_class" => "socials",
                            "container_id" => "socials",
                            "link_before" => "<span class='sr-text'>",
                            "link_after" => "</span>",
                        );
                        wp_nav_menu($args);
                    ?>
                </div>
                <!-- Fim socials -->
                <!-- Address -->
                <div class="address">
                    <p> <?php echo esc_html(get_option('lapizzeria_location'));?></p>
                    <p> Phone number: <?php echo esc_html(get_option('lapizzeria_phonenumber'));?></p>
                </div>
                <!-- Fim address -->
            </div>
            <!-- Fim Header Information -->
        </div>
        <!-- Fim Container -->
    </header>
    <div class="main-menu">
        <div class="mobile-menu">
            <a href="#" class="mobile"><i class="fa fa-bars"></i> Menu </a>
        </div>
        <div class="navigation container">
            <!--
                Print menus in wordpress
            -->
            <?php
                $args = array(
                    "theme_location" => "header-menu",
                    "container" => "nav",
                    "container_class" => "site-nav",
                );
                wp_nav_menu($args);
            ?>
        </div>
    </div>
