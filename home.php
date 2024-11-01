
<?php get_header();?>
    <section class="page-info">
        <div class="container page-info__container">
            <a href="./index.html">Головна</a>
            <span>/</span>
            <a href="#">Лікування</a>
        </div>
    </section>


    <section class="blog-page">
        <div class="container blog-page__container">

            <h2 class="section__title blog-page__title">
                Блог
            </h2>
            <div class="blog-page__wrapper">
                <?php
                    global $post;

                    $query = new WP_Query( [
                        'posts_per_page' => 6,
                        'category_name' => 'post',
                    ] );

                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            ?>
                            <div class="blog__card blog-page__card">
                                <img src="<?php echo get_the_post_thumbnail_url()?>" alt="">
                                <div class="blog__card_text">

                                    <h3><?php the_title()?></h3>
                                    <p><?php the_excerpt()?> </p>
                                    <a href="<?php echo get_the_permalink() ?>">Детальніше</a>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        
                    }

                    wp_reset_postdata(); // 
                ?>
            </div>
        </div>
    </section>

<?php get_footer();?>