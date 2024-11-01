<?php get_header();?>

    <main class="main">
        <section class="hero section">
            <div class="hero__slider">
                <div class="swiper heroSwiper">
                <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php
                            global $post;

                            $query = new WP_Query( [
                                // 'posts_per_page' => 6,
                                'post_type' => 'hero',
                            ] );

                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    ?>
                                    <div class="swiper-slide hero__slider__item">
                                    <img class='hero__img' src="<?php echo get_the_post_thumbnail_url()?>" oncontextmenu="return false;"> 
                                    </div>
                                    <?php
                                }
                            } else {
                                
                            }

                            wp_reset_postdata(); // 
                        ?>
                    </div>
                </div>
            </div>
            <div class="container hero__container">
                <div class="hero__text">
                    <h1><?php the_field('main_title')?></h1>
                    <p class="hero__desc">
                    <?php the_field('main_desc')?>
                    </p>
                    <button class="btn btn__action">Записатись на прийом</button>
                </div>
            </div>
        </section>
        <div class="modal">
            <div class="modal__wrapper">
                <span class="cross"></span>
                <?php echo do_shortcode('[contact-form-7 id="823f797" title="Форма"]')?>
                <!-- <form action="" class='form'>
                    <h2>Запис на прийом</h2>
                    <label class='form__label'>Ваше ім'я:<input class="form__input" type="text"  name="name" required></label>
                    <label class='form__label'>Номер телефону:<input class="form__input" type="tel" name="phone" required></label>
                    <lebal class='form__label'>Коментарь:
                        <textarea class='form__comment' name="comment" rows='4'></textarea>
                    </lebal>
                    <button type="submit" class='btn form__btn'>Відправити</button>
                </form> -->
            </div>
        </div>
        <section class="services section">
            <div class="container services__container">
                <h2 class="services__title section__title">
                    НАШІ ПОСЛУГИ
                </h2>
                <div class="services__zone">
                    <div class="services__card services__card1">
                        <p>Лікування</p>
                        <div class="services__card_box"><img src="<?php echo get_template_directory_uri()?>/img/Vector.svg" alt=""></div>
                    </div>
                    <div class="services__card services__card2">
                        <p>Протезування</p>
                        <div class="services__card_box"><img src="<?php echo get_template_directory_uri()?>/img/Vector-1.svg" alt=""></div>
                    </div>
                    <div class="services__card services__card3">
                        <p>Дитинство</p>
                        <div class="services__card_box"><img src="<?php echo get_template_directory_uri()?>/img/Vector-2.svg" alt=""></div>
                    </div>
                    <div class="services__card services__card4">
                        <p>Хірургія</p>
                        <div class="services__card_box"><img src="<?php echo get_template_directory_uri()?>/img/Vector-3.svg" alt=""></div>
                    </div>
                    <div class="services__card services__card5">
                        <p>Лікування у ві сні</p>
                        <div class="services__card_box"><img src="<?php echo get_template_directory_uri()?>/img/Vector-4.svg" alt=""></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="container about__container">
                <div class="about__text">
                    <h2 class="section__title about__title">Про нас</h2>
                    <h3 class="about__subtitle"><?php the_field('about__subtitle')?></h3>
                    <p class="about__desc"><?php the_field('about__desc_1')?>
                    </p>
                    <p class="about__desc"><?php the_field('about__desc_2')?></p>
                </div>
                <div class="about__img">
                    <img src="<?php echo get_template_directory_uri()?>/img/Rectangle 10.jpg" alt="image: person">
                </div>
            </div>
        </section>
        <section class="staff">
            <div class="container staff__container">
                <h2 class="section__title staff__title">
                    Наші працівники
                </h2>
                <div class="staff__wrapper">
                <!-- Slider main container -->
                <div class="staff__box">
                    <!-- Additional required wrapper -->
                    
                        <?php
                            global $post;

                            $query = new WP_Query( [
                                'posts_per_page' => 6,
                                'post_type' => 'staff',
                                'order' => 'ASC'
                            ] );

                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    ?>
                                    <div class="staff__card">
                                        <div class="staff__card staff-page__card">
                                            <img src="<?php echo get_the_post_thumbnail_url()?>" alt="">
                                            <div class="staff__card_text">
                                                <h3><?php the_title()?></h3>
                                                <p><?php the_excerpt()?> </p>
                                            </div>
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
            </div>
        </section>                
        <section class="gallery">
            <div class="container">

                <h2 class="section__title gallery__title">
                    ПРИКЛАДИ РОБІТ
                </h2>
            </div>
            <div class="swiper swiper1">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <?php
                    global $post;

                    $query = new WP_Query( [
                        // 'posts_per_page' => 15,
                        'post_type' => 'gallery',
                    ] );

                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            ?>
                            
                            <div class="swiper-slide gallety__item">
                                <a
                                    data-fancybox="gallery"
                                    data-src="<?php echo get_the_post_thumbnail_url()?>"
                                    data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code"
                                    >
                                    <img src="<?php echo get_the_post_thumbnail_url()?>" alt="">
                                </a>
                            </div>
                            
                            <?php
                        }
                    } else {
                        
                    }

                    wp_reset_postdata(); 
                ?>
                
                </div>

                <div class="button-prev"></div>
                <div class="button-next"></div>

            </div>
        </section>
        <section class="review">
            <div class="container">

                <h2 class="section__title review__title">
                    Відгуки
                </h2>
            </div>
            <div class="swiper swiper2">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <?php
                    global $post;

                    $query = new WP_Query( [
                        'posts_per_page' => 5,
                        'post_type' => 'reviews',
                    ] );

                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            ?>
                            <div class="swiper-slide">
                        <div class="review__wrapper">
                            <img class="review__img" src="<?php echo get_the_post_thumbnail_url()?>" alt="photo: person">
                            <div class="review__text">
                                <div class="qute"></div>
                                <p><?php the_content();?>
                                </p>
                                <div class="review__stars stars">
                                    <img src="<?php echo get_template_directory_uri()?>/img/Star 1.svg" alt="">
                                    <img src="<?php echo get_template_directory_uri()?>/img/Star 1.svg" alt="">
                                    <img src="<?php echo get_template_directory_uri()?>/img/Star 1.svg" alt="">
                                    <img src="<?php echo get_template_directory_uri()?>/img/Star 1.svg" alt="">
                                    <img src="<?php echo get_template_directory_uri()?>/img/Star 1.svg" alt="">
                                </div>
                                <h3 class="review__author">
                                    <?php the_title()?>
                                </h3>
                                <span class="review__label"><?php echo get_the_excerpt();?></span>
                            </div>
                        </div>
                    </div>
                            <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                            <?php
                        }
                    } else {
                        
                    }

                    wp_reset_postdata(); // 
                ?>
                </div>

                <div class="button-prev"></div>
                <div class="button-next"></div>

            </div>
        </section>

        <section class="blog">
            <div class="container">

                <h2 class="section__title blog__title">
                    Блог
                </h2>
            </div>
            <div class="blog__wrapper">
                <!-- Slider main container -->
                <div class="swiper swiper3">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
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
                                    <div class="swiper-slide blog__card">
                                        <div class="blog__card blog-page__card">
                                            <img src="<?php echo get_the_post_thumbnail_url()?>" alt="">
                                            <div class="blog__card_text">

                                                <h3><?php the_title()?></h3>
                                                <p><?php the_excerpt()?> </p>
                                                <a href="<?php echo get_the_permalink() ?>">Детальніше</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                
                            }

                            wp_reset_postdata(); // 
                        ?>
                        <!-- <div class="swiper-slide blog__card">
                            <img src="<?php echo get_template_directory_uri()?>/img/Rectangle 26.jpg" alt="">
                            <div class="blog__card_text">

                                <h3>Morbi in enim odio</h3>
                                <p>Aliquam ac sem et diam iaculis efficitur. Morbi in enim odio. Nullam quis volutpat
                                    est,
                                    sed dapibus sapien. Cras condimentum eu velit id tempor. Curabitur purus sapien,
                                    cursus
                                    sed nisl tristique, commodo vehicula arcu. Aliquam erat volutpat. </p>
                                <a href="./article.html">Детальніше</a>
                            </div>
                        </div>
                        <div class="swiper-slide blog__card">
                            <img src="<?php echo get_template_directory_uri()?>/img/Rectangle 26-1.jpg" alt="">
                            <div class="blog__card_text">

                                <h3>Morbi in enim odio</h3>
                                <p>Aliquam ac sem et diam iaculis efficitur. Morbi in enim odio. Nullam quis volutpat
                                    est,
                                    sed dapibus sapien. Cras condimentum eu velit id tempor. Curabitur purus sapien,
                                    cursus
                                    sed nisl tristique, commodo vehicula arcu. Aliquam erat volutpat. </p>
                                <a href="./article.html">Детальніше</a>
                            </div>
                        </div>
                        <div class="swiper-slide blog__card">
                            <img src="<?php echo get_template_directory_uri()?>/img/Rectangle 26-2.jpg" alt="">
                            <div class="blog__card_text">

                                <h3>Morbi in enim odio</h3>
                                <p>Aliquam ac sem et diam iaculis efficitur. Morbi in enim odio. Nullam quis volutpat
                                    est,
                                    sed dapibus sapien. Cras condimentum eu velit id tempor. Curabitur purus sapien,
                                    cursus
                                    sed nisl tristique, commodo vehicula arcu. Aliquam erat volutpat. </p>
                                <a href="./article.html">Детальніше</a>
                            </div>
                        </div>
                        <div class="swiper-slide blog__card">
                            <img src="<?php echo get_template_directory_uri()?>/img/Rectangle 26.jpg" alt="">
                            <div class="blog__card_text">

                                <h3>Morbi in enim odio</h3>
                                <p>Aliquam ac sem et diam iaculis efficitur. Morbi in enim odio. Nullam quis volutpat
                                    est,
                                    sed dapibus sapien. Cras condimentum eu velit id tempor. Curabitur purus sapien,
                                    cursus
                                    sed nisl tristique, commodo vehicula arcu. Aliquam erat volutpat. </p>
                                <a href="./article.html">Детальніше</a>
                            </div>
                        </div>
                        <div class="swiper-slide blog__card">
                            <img src="<?php echo get_template_directory_uri()?>/img/Rectangle 26-1.jpg" alt="">
                            <div class="blog__card_text">

                                <h3>Morbi in enim odio</h3>
                                <p>Aliquam ac sem et diam iaculis efficitur. Morbi in enim odio. Nullam quis volutpat
                                    est,
                                    sed dapibus sapien. Cras condimentum eu velit id tempor. Curabitur purus sapien,
                                    cursus
                                    sed nisl tristique, commodo vehicula arcu. Aliquam erat volutpat. </p>
                                <a href="./article.html">Детальніше</a>
                            </div>
                        </div>
                        <div class="swiper-slide blog__card">
                            <img src="<?php echo get_template_directory_uri()?>/img/Rectangle 26-2.jpg" alt="">
                            <div class="blog__card_text">

                                <h3>Morbi in enim odio</h3>
                                <p>Aliquam ac sem et diam iaculis efficitur. Morbi in enim odio. Nullam quis volutpat
                                    est,
                                    sed dapibus sapien. Cras condimentum eu velit id tempor. Curabitur purus sapien,
                                    cursus
                                    sed nisl tristique, commodo vehicula arcu. Aliquam erat volutpat. </p>
                                <a href="./article.html">Детальніше</a>
                            </div>
                        </div> -->


                    </div>

                    <!-- If we need navigation buttons -->


                </div>
                <div class="button-prev blog__button-prev"></div>
                <div class="button-next blog__button-next"></div>
            </div>
        </section>

    </main>
    
    <?php get_footer();?>