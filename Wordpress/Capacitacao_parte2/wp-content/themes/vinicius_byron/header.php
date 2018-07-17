<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Projeto Final (Wordpress) Vinícius </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

</head>

<body class="container">
    <header class="navbar">
        <div class="botao-mobile">
            <button id="nav-button"><i class="fa fa-bars fa-lg"></i></button>
        </div>
        <?php
            $args = array(
                "theme_location" => "main-menu",
                "container" => "nav",
                "container_id" => "main-menu"
            );
            wp_nav_menu($args);
        ?>
    </header>
