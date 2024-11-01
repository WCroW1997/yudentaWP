<footer class="footer">
        <div class="container footer__container">
            <div class="footer__zone">
                <div class="logo footer__logo">
                    <?php 
                        if( has_custom_logo()){
                            echo get_custom_logo();
                        }
                    ?>
                </div>
                <h3>Часи роботи
                    вул. Івана та Юрія Лип, 76
                </h3>
                <p>Пн - Пт: 09:00 - 18:00</p>
                <p>Сб,Нд: Вихідний</p>
            </div>
            <div class="footer__zone">
                <h3>Наша клініка</h3>
                <?php wp_nav_menu( [
                    'theme_location'  => 'footer',
                    'container'       => false,
                    'menu_class'      => '',
                    'menu_id'         => false,
                    'echo'            => true,
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ] )?>
                <!-- <ul>
                    <li><a href="#">Головна</a></li>
                    <li><a href="#">Прайс</a></li>
                    <li><a href="#">Роботи</a></li>
                    <li><a href="#">Контакти</a></li>
                </ul> -->
            </div>
            <div class="footer__zone">
                <h3>Контакти</h3>


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
                <div class="aside__mail">
                    <img src="<?php echo get_template_directory_uri()?>/img/email.svg" alt="icon: email">
                    <a href="mailto:<?php the_field('e-mail')?>">
                    <?php the_field('e-mail')?>
                    </a>
                </div>

            </div>
            <div class="footer__zone">
                <h3>Соц мережі</h3>
                <div class="footer__links">
                    <a href="#" class="links">
                        <img src="<?php echo get_template_directory_uri()?>/img/facebook.svg" alt="link: facebook">
                    </a>
                    <a href="#" class="links">
                        <img src="<?php echo get_template_directory_uri()?>/img/inst.svg" alt="link: instagram">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

    <?php wp_footer()?>
</body>

</html>