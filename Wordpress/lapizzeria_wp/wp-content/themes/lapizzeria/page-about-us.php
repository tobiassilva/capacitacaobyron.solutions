<?php get_header(); ?>

    <?php while(have_posts()): the_post();?>
        <div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <div class="hero-content">
                <div class="hero-text">
                    <h2> <?php the_title(); ?> </h2>
                </div>
            </div>
        </div>
        <div class="main-content container">
            <main class="text-center content-text">
                <?php the_content(); ?>
            </main>
        </div>
    <?php endwhile; ?>

    <div class="box-information container">
        <div class="box">
            <?php 
                $id_image = get_field('image_1');
                $image = wp_get_attachment_image_src($id_image, 'boxes');
            ?>
            <img src="<?php echo $image[0]; ?>" alt="">
            <div class="content-box">
                <?php echo the_field('description_1'); ?>
            </div>
        </div>
        <div class="box">
            <?php 
                $id_image = get_field('image_2');
                $image = wp_get_attachment_image_src($id_image, 'boxes');
            ?>
            <img src="<?php echo $image[0]; ?>" alt="">
            <div class="content-box">
                <?php echo the_field('description_2'); ?>
            </div>
        </div>
        <div class="box">
            <?php 
                $id_image = get_field('image_3');
                $image = wp_get_attachment_image_src($id_image, 'boxes');
            ?>
            <img src="<?php echo $image[0]; ?>" alt="">
            <div class="content-box">
                <?php echo the_field('description_3'); ?>
            </div>
        </div>

    </div>

<?php get_footer(); ?>