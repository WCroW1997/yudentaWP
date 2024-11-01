<?php
/*
Template Name: Шаблон сторінки Про нас
Template Post Type: page
*/

?>
<?php get_header();?>
    <section class="page-info">
        <div class="container page-info__container">
            <a href="./index.html">Головна</a>
            <span>/</span>
            <a href="#">Лікування</a>
        </div>
    </section>

    <main class="main">
        <section class="aboutUs">
            <div class="container aboutUs__container">
                <h2 class="section__title aboutUs__title">
                <?php the_field('about__title')?>
                </h2>
                <h3 class="aboutUs__subtitle">
                <?php the_field('about__subtitle')?>
                </h3>
                <p><?php the_field('about__text')?>
                </p>

                <div class="aboutUs__gallery">
                    <img src="<?php echo get_template_directory_uri()?>/img/Rectangle 38.jpg" alt="#">
                    <img src="<?php echo get_template_directory_uri()?>/img/Rectangle 39.jpg" alt="#">
                    <img src="<?php echo get_template_directory_uri()?>/img/Rectangle 41.jpg" alt="#">
                    <img src="<?php echo get_template_directory_uri()?>/img/Rectangle 40.jpg" alt="#">
                </div>
            </div>
        </section>
    </main>

    <?php get_footer();?>