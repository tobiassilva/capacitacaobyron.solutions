<?php 

function capacitacao_opcoes() {
    add_menu_page('Ajustes', 'Capacitação Opções', 'administrator', 
        'capacitacao_opcoes', 'capacitacao_adjustments', '', 20);
}

add_action('admin_menu', 'capacitacao_opcoes');

function capacitacao_settings() {
    // Google Maps Group
    register_setting('capacitacao_theme_option', 'capacitacao_gmap_latitude');
    register_setting('capacitacao_theme_option', 'capacitacao_gmap_longitude');
    register_setting('capacitacao_theme_option', 'capacitacao_gmap_zoom');
    register_setting('capacitacao_theme_option', 'capacitacao_gmap_apikey'); 

    // Information carousel
    register_setting('capacitacao_theme_option', 'capacitacao_velocidade_carousel');

    // Information footer
    register_setting('capacitacao_theme_option', 'capacitacao_email');
    register_setting('capacitacao_theme_option', 'capacitacao_facebook');
    register_setting('capacitacao_theme_option', 'capacitacao_github');
    register_setting('capacitacao_theme_option', 'capacitacao_instagram');
}

add_action('init', 'capacitacao_settings');

function capacitacao_adjustments() { ?>
    <div class="wrap">
        <h1> Ajustes: </h1>
        <form action="options.php" method="post">
            <?php
                settings_fields('capacitacao_theme_option');
                do_settings_sections('capacitacao_theme_option');
            ?>
            <h2> Google Maps</h2>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"> Latitude: </th>
                    <td>
                        <input type="text" name="capacitacao_gmap_latitude" value="<?php echo esc_attr(get_option('capacitacao_gmap_latitude')); ?>">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"> Longitude: </th>
                    <td>
                        <input type="text" name="capacitacao_gmap_longitude" value="<?php echo esc_attr(get_option('capacitacao_gmap_longitude')); ?>">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"> Zoom Level: </th>
                    <td>
                        <input type="number" min="12" max="21" name="capacitacao_gmap_zoom" value="<?php echo esc_attr(get_option('capacitacao_gmap_zoom')); ?>">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"> API Key: </th>
                    <td>
                        <input type="text" name="capacitacao_gmap_apikey" value="<?php echo esc_attr(get_option('capacitacao_gmap_apikey')); ?>">
                    </td>
                </tr>
            </table> 
            <h2> Carousel Ajustes </h2>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"> Velocidade do carousel em milisegundos: </th>
                    <td>
                        <input type="number" min="1000" name="capacitacao_velocidade_carousel" value="<?php echo esc_attr(get_option('capacitacao_velocidade_carousel')); ?>">
                    </td>
                </tr>
            </table> 
            <h2> Footer ajustes </h2>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"> Email: </th>
                    <td>
                        <input type="text" name="capacitacao_email" value="<?php echo esc_attr(get_option('capacitacao_email')); ?>">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"> Facebook: </th>
                    <td>
                        <input type="text" name="capacitacao_facebook" value="<?php echo esc_attr(get_option('capacitacao_facebook')); ?>">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"> GitHub: </th>
                    <td>
                        <input type="text" name="capacitacao_github" value="<?php echo esc_attr(get_option('capacitacao_github')); ?>">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"> Instagram: </th>
                    <td>
                        <input type="text" name="capacitacao_instagram" value="<?php echo esc_attr(get_option('capacitacao_instagram')); ?>">
                    </td>
                </tr>
            </table> 
            <?php  submit_button(); ?>
        </form>
    </div>
<?php }