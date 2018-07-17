<?php get_header(); ?>
    
    <?php while(have_posts()): the_post();?>
    <div id="carousel">
        <?php the_content(); ?>
        <button id="left" onclick="prevImg()">&#10094;</button>
        <button id="right" onclick="nextImg()">&#10095;</button>
        <!-- <h2 id="carousel_text"> Vinícius de Oliveira Souza </h2> -->
    </div>
    <div id="sobre">
        <img class="sobre_img" src="<?php the_field('sobre_img'); ?>">
        <h1 class="sobre_titulo"> <?php the_field('sobre_title'); ?> </h1>
        <p class="sobre_texto"> 
            <?php the_field('sobre_texto'); ?>
        </p>
    </div>    
    <div id="byron">
        <img class="byron_logo" src="<?php the_field('byron_logo'); ?>">
        <h1 class="titulo"> <?php the_field('byron_titulo'); ?> </h1>
        <div class="container_info">
            <i class="fa fa-info" aria-hidden="true"></i>
            <p> <?php the_field('byron_info_text'); ?> </p>
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <p> <?php the_field('byron_email_text'); ?> </p>
            <i class="fa fa-home" aria-hidden="true"></i>
            <p>
                <a href="<?php the_field('byron_site_text'); ?>"> <?php the_field('byron_site_text'); ?> </a>
            </p>
            <i class="fa fa-phone" aria-hidden="true"></i>
            <p> <?php the_field('byron_telefone_text'); ?> </p>
        </div>
        <div id="map"></div>
        <div id="servicos">
            <h1 class="titulo"> <?php the_field('byron_servicos_titulo'); ?> </h1>
            <div class="servicos">
                <div class="container_servicos1">
                    <h2> <?php the_field('byron_servico1'); ?> </h2>
                    <img class="servicos_img" src="<?php the_field('byron_servico1_img'); ?>" alt="">
                    <p> <?php the_field('byron_servico1_text'); ?> </p>
                </div>
                <div class="container_servicos2">
                    <h2> <?php the_field('byron_servico2'); ?> </h2>
                    <img class="servicos_img" src="<?php the_field('byron_servico2_img'); ?>" alt="">
                    <p> <?php the_field('byron_servico2_text'); ?> </p>
                </div>
            </div>
        </div>
    </div>
    <div id="contato">
        <h1 class="titulo"> Contato </h1>
        <div class="contato-form">
            <label> Nome </label>
            <input type="text" placeholder="Informe seu nome">
            <label> Email </label>
            <input type="text" placeholder="Informe seu email">
            <label> Mensagem </label>
            <textarea></textarea>
            <button type="submit"> Enviar </button>
        </div>
    </div>
    <?php endwhile; ?>

    <?php get_footer(); ?>