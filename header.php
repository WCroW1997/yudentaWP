<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <?php wp_head()?>
    <script type="text/javascript" defer>
        (function(d, w, s) {
        var widgetHash = '9on2roigh7i1mypgfioi', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
        gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
        var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
        })(document, window, 'script');
    </script>
</head>

<body>
    <aside class="aside">
        <div class="container aside__container">
            <div class="aside__mail">
                <img src="<?php echo get_template_directory_uri()?>/img/email.svg" alt="icon: email">
                <a href="mailto:<?php the_field('e-mail')?>">
                    <?php the_field('e-mail')?>
                </a>
            </div>
            <div class="aside__phones">
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
        </div>
    </aside>
    <header class="header">
        <div class="container header__container">
            <div class="logo header__logo">
                    <?php 
                        if( has_custom_logo()){
                            echo get_custom_logo();
                        }
                    ?>
            </div>
            <div class="header__burger">
                <span></span>
            </div>
            <nav class="nav header__nav">
                <?php wp_nav_menu( [
                    'theme_location'  => 'header',
                    'container'       => false,
                    'menu_class'      => 'nav__list',
                    'menu_id'         => false,
                    'echo'            => true,
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ] )?>
                <!-- <ul class="nav__list">
                    <li><a href="./index.html">Головна</a></li>
                    <li><a href="./about.php">Про нас</a></li>
                    <li><a href="./services.php">Наші послуги</a></li>
                    <li><a href="./blog.php">Роботи</a></li>
                    <li><a href="./contact.php">Контакти</a></li>
                </ul> -->
            </nav>
            <div class="header__menu">
                <!-- <div class="header__lang">
                    <img src="<?php echo get_template_directory_uri()?>/img/planet.svg" alt="icon: language">
                    <span>Укр</span>
                </div> -->
                <div class="header__links">
                    <a href="https://www.facebook.com/Yudenta.Odessa" class="links">
                        <img src="<?php echo get_template_directory_uri()?>/img/facebook.svg" alt="link: facebook">
                    </a>
                    <a href="https://www.instagram.com/yudenta.odessa?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="links">
                        <img src="<?php echo get_template_directory_uri()?>/img/inst.svg" alt="link: instagram">
                    </a>
                </div>
            </div>
        </div>
    </header>