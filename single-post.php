
<?php get_header();?>
    <section class="page-info">
        <div class="container page-info__container">
            <a href="./index.html">Головна</a>
            <span>/</span>
            <a href="#">Лікування</a>
        </div>
    </section>
    <section class="article">
        <div class="container article__container">
            <h1 class="article__title"><?php the_title()?>
            </h1>
            <img src="<?php echo get_the_post_thumbnail_url()?>" alt="">
            <?php the_content()?>

        </div>
    </section>
<?php get_footer();?>