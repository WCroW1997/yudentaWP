<?php
/*
Template Name: Шаблон сторінки послуги
Template Post Type: page
*/

?>
<?php get_header();?>
    <main class="main">
        <section class="page-info">
            <div class="container page-info__container">
                <a href="./index.html">Головна</a>
                <span>/</span>
                <a href="#">Лікування</a>
            </div>
        </section>

        <section class="price">
            <div class="container price__container">
                <h2 class="section__title price__title">
                    Лікування
                </h2>
                <div class="price__warning">
                    <img src="<?php echo get_template_directory_uri()?>/img/warning.svg" alt="#">
                    <div class="price__warning_text">
                        <p><?php the_field('price_first')?></p>
                        <p><?php the_field('price_second')?></p>
                    </div>
                </div>
                <div class="price__zone">
                    <details>
                        <summary>
                            <div class="price__card">
                                <p>Лікування</p>
                                <div class="price__card_box"><img src="<?php echo get_template_directory_uri()?>/img/Vector.svg" alt=""></div>
                            </div>
                        </summary>
                        <table>
                            <?php
                                global $post;

                                $query = new WP_Query( [
                                    'posts_per_page' => 100,
                                    'category_name' => 'treatment',
                                    'order' => 'ASC'
                                ] );

                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                        
                                        if (get_field('header')){
                                            ?>
                                            <tr class='bold'>
                                                <td><?php the_title()?></td>
                                                <td></td>
                                            </tr>
                                        <?php
                                        }
                                        else if (get_field('ps')) {
                                            ?>
                                            <tr class='ps'>
                                                <td><?php the_title()?></td>
                                                <td></td>
                                            </tr>
                                        <?php
                                        }
                                        else{
                                            ?>
                                        <tr>
                                            <td><?php the_title()?></td>
                                            <td><?php the_field('services_price')?></td>
                                        </tr>
                                        <?php
                                        }
                                        
                                    }
                                } else {
                                    
                                }

                                wp_reset_postdata(); // 
                            ?>
                        
                        </table>
                    </details>
                    <details>
                        <summary>
                            <div class="price__card">
                                <p>Протезування</p>
                                <div class="price__card_box"><img src="<?php echo get_template_directory_uri()?>/img/Vector-1.svg" alt=""></div>
                            </div>
                        </summary>
                        <table>
                        <?php
                                global $post;

                                $query = new WP_Query( [
                                    'posts_per_page' => 100,
                                    'category_name' => 'prosthesis',
                                    'order' => 'ASC'
                                ] );

                                 if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                        
                                        if (get_field('header')){
                                            ?>
                                            <tr class='bold'>
                                                <td><?php the_title()?></td>
                                                <td></td>
                                            </tr>
                                        <?php
                                        }
                                        else if (get_field('ps')) {
                                            ?>
                                            <tr class='ps'>
                                                <td><?php the_title()?></td>
                                                <td></td>
                                            </tr>
                                        <?php
                                        }
                                        else{
                                            ?>
                                        <tr>
                                            <td><?php the_title()?></td>
                                            <td><?php the_field('services_price')?></td>
                                        </tr>
                                        <?php
                                        }
                                        
                                    }
                                } else {
                                    
                                }

                                wp_reset_postdata(); // 
                            ?>
                        </table>
                    </details>
                    <details>
                        <summary>
                            <div class="price__card">
                                <p>Дитинство</p>
                                <div class="price__card_box"><img src="<?php echo get_template_directory_uri()?>/img/Vector-2.svg" alt=""></div>
                            </div>
                        </summary>
                        <table>
                        <?php
                                global $post;

                                $query = new WP_Query( [
                                    'posts_per_page' => 100,
                                    'category_name' => 'child',
                                    'order' => 'ASC'
                                ] );

                                 if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                        
                                        if (get_field('header')){
                                            ?>
                                            <tr class='bold'>
                                                <td><?php the_title()?></td>
                                                <td></td>
                                            </tr>
                                        <?php
                                        }
                                        else if (get_field('ps')) {
                                            ?>
                                            <tr class='ps'>
                                                <td><?php the_title()?></td>
                                                <td></td>
                                            </tr>
                                        <?php
                                        }
                                        else{
                                            ?>
                                        <tr>
                                            <td><?php the_title()?></td>
                                            <td><?php the_field('services_price')?></td>
                                        </tr>
                                        <?php
                                        }
                                        
                                    }
                                } else {
                                    
                                }

                                wp_reset_postdata(); // 
                            ?>
                        </table>
                    </details>
                    <details>
                        <summary>
                            <div class="price__card">
                                <p>Хірургія</p>
                                <div class="price__card_box"><img src="<?php echo get_template_directory_uri()?>/img/Vector-3.svg" alt=""></div>
                            </div>
                        </summary>
                        <table>
                        <?php
                                global $post;

                                $query = new WP_Query( [
                                    'posts_per_page' => 100,
                                    'category_name' => 'surgery',
                                    'order' => 'ASC'
                                ] );

                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                        
                                        if (get_field('header')){
                                            ?>
                                            <tr class='bold'>
                                                <td><?php the_title()?></td>
                                                <td></td>
                                            </tr>
                                        <?php
                                        }
                                        else if (get_field('ps')) {
                                            ?>
                                            <tr class='ps'>
                                                <td><?php the_title()?></td>
                                                <td></td>
                                            </tr>
                                        <?php
                                        }
                                        else{
                                            ?>
                                        <tr>
                                            <td><?php the_title()?></td>
                                            <td><?php the_field('services_price')?></td>
                                        </tr>
                                        <?php
                                        }
                                        
                                    }
                                } else {
                                    
                                }

                                wp_reset_postdata(); // 
                            ?>
                        </table>
                    </details>
                    <!--details>
                        <summary>
                            <div class="price__card">
                                <p>Лікування у ві сні</p>
                                <div class="price__card_box"><img src="<?php echo get_template_directory_uri()?>/img/Vector-4.svg" alt=""></div>
                            </div>
                        </summary>
                        <table>
                        <?php
                                global $post;

                                $query = new WP_Query( [
                                    'posts_per_page' => 100,
                                    'category_name' => 'sleep',
                                    'order' => 'ASC'
                                ] );

                                 if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                        
                                        if (get_field('header')){
                                            ?>
                                            <tr class='bold'>
                                                <td><?php the_title()?></td>
                                                <td></td>
                                            </tr>
                                        <?php
                                        }
                                        else if (get_field('ps')) {
                                            ?>
                                            <tr class='ps'>
                                                <td><?php the_title()?></td>
                                                <td></td>
                                            </tr>
                                        <?php
                                        }
                                        else{
                                            ?>
                                        <tr>
                                            <td><?php the_title()?></td>
                                            <td><?php the_field('services_price')?></td>
                                        </tr>
                                        <?php
                                        }
                                        
                                    }
                                } else {
                                    
                                }

                                wp_reset_postdata(); // 
                            ?>
                        </table>
                    </details -->
					<details>
                        <summary>
                            <div class="price__card">
                                <p>Елайнери</p>
                                <div class="price__card_box"><img src="<?php echo get_template_directory_uri()?>/img/Vector-1.svg" alt=""></div>
                            </div>
                        </summary>
                        <table>
                        <?php
                                global $post;

                                $query = new WP_Query( [
                                    'posts_per_page' => 100,
                                    'category_name' => 'elainer',
                                    'order' => 'ASC'
                                ] );

                                 if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                        
                                        if (get_field('header')){
                                            ?>
                                            <tr class='bold'>
                                                <td><?php the_title()?></td>
                                                <td></td>
                                            </tr>
                                        <?php
                                        }
                                        else if (get_field('ps')) {
                                            ?>
                                            <tr class='ps'>
                                                <td><?php the_title()?></td>
                                                <td></td>
                                            </tr>
                                        <?php
                                        }
                                        else{
                                            ?>
                                        <tr>
                                            <td><?php the_title()?></td>
                                            <td><?php the_field('services_price')?></td>
                                        </tr>
                                        <?php
                                        }
                                        
                                    }
                                } else {
                                    
                                }

                                wp_reset_postdata(); // 
                            ?>
                        </table>
                    </details>





                </div>
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
                        </div>


                    </div>

                    <!-- If we need navigation buttons -->


                </div>
                <div class="button-prev blog__button-prev"></div>
                <div class="button-next blog__button-next"></div>
            </div>
        </section>
    </main>
    <?php get_footer();?>