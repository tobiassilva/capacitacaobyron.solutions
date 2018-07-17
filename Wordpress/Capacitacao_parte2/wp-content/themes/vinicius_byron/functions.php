<?php

require get_template_directory() . '/inc/opcoes.php';

function capacitacao_styles_scripts() {
    wp_register_style("style", get_template_directory_uri() . "/style.css", array(), '1.0');
    wp_register_style('googlefonts', "https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i", array(), '1.0.0');
    wp_register_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '1.0.0');

    wp_enqueue_style('style');
    wp_enqueue_style('googlefonts');
    wp_enqueue_style('fontawesome');

    wp_register_script("script", get_template_directory_uri(). '/js/main.js', array(), true);
    $apiKey = esc_html(get_option('capacitacao_gmap_apikey'));
    wp_register_script("googlemaps", 'https://maps.googleapis.com/maps/api/js?key='. $apiKey .'&callback=initMap', array(), '', true);

    wp_enqueue_script("jquery");
	wp_enqueue_script("script");
    wp_enqueue_script("googlemaps");
    
    wp_localize_script(
		'script',
		'options',
		array(
			'latitude'	    => esc_html(get_option('capacitacao_gmap_latitude')),
			'longitude'	    => esc_html(get_option('capacitacao_gmap_longitude')),
            'zoom'		    => esc_html(get_option('capacitacao_gmap_zoom')),
            'velocidade'    => esc_html(get_option('capacitacao_velocidade_carousel'))
		)
	);

}

add_action('wp_enqueue_scripts', 'capacitacao_styles_scripts');


// Adicionar Menu ao Dashboard
function capacitacao_menus()
{
    register_nav_menus( array(
        "main-menu" => __("Principal", "capacitacao"),
        "social-menu" => __("Social Menu", "capacitacao"),
    ));
}

add_action("init", "capacitacao_menus");

// Removendo css padrao do gallery do wordpress
add_filter( 'use_default_gallery_style', '__return_false' );
add_filter( 'the_content', 'remove_br_gallery', 11, 2);
function remove_br_gallery($output) {
    return preg_replace('/<br style=(.*)>/mi', '', $output);
}
