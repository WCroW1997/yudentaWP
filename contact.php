<?php
/*
Template Name: Шаблон сторінки контактів
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
        <section class="contact">
            <div class="container contact__container">
                <h2 class="section__title contact__title">
                    Контакти
                </h2>
                <div class="contact__zone">
                    <div class="contact__box">
                        <div class="aside__mail">
                            <img src="<?php echo get_template_directory_uri()?>/img/email.svg" alt="icon: email">
                            <a href="mailto:<?php the_field('e-mail')?>">
                                <?php the_field('e-mail')?>
                            </a>
                        </div>
                    </div>
                    <div class="contact__box">
                        <div class="aside__phone">
                            <img src="<?php echo get_template_directory_uri()?>/img/phone.svg" alt="icon: phone number">
                            <a href="tel:<?php the_field('phone_number_1')?>">
                                <?php the_field('phone_number_1')?>
                            </a>
                        </div>
                        <div class="aside__phone">
                            <img src="<?php echo get_template_directory_uri()?>/img/phone.svg" alt="icon: phone number">
                            <a href="tel:<?php the_field('phone_number_2')?>">
                                <?php the_field('phone_number_2')?>
                            </a>
                        </div>

                    </div>
                    <div class="contact__box">
                        <div class="aside__phone">
                            <img src="<?php echo get_template_directory_uri()?>/img/target.svg" alt="icon: map target">
                            <p>
                                <?php the_field('adress')?>
                            </p>
                        </div>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1456.8195969682454!2d30.701402988215435!3d46.426715649240776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c633042778dcb5%3A0x78a9c6b3fae507d0!2z0K7QtNC10L3RgtCwLCDRgdGC0L7QvNCw0YLQvtC70L7Qs9GW0YfQvdC40Lkg0LrQsNCx0ZbQvdC10YI!5e0!3m2!1suk!2sua!4v1715027908240!5m2!1suk!2sua" width="1320" height="425" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!-- <img class="contact__img" src="<?php echo get_template_directory_uri()?>/img/Rectangle 37.jpg" alt=""> -->
            </div>
        </section>
    </main>

<?php get_footer();?>