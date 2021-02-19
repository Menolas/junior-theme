<footer class="main-footer">
        <div class="container">
        <div class="main-footer__flex-container"> 

         <form class="news-form">
                <a class="news-form__link footer-link" href="#">ВСЕ СТАТЬИ ></a>
                <input class="news-form__email-input" type="email" name="email" placeholder="Введите ваш e-mail"></input>
                <button class="news-form__btn btn" type="submit">Получать новости</button>
                <div class="news-form__info-polity"><input type="checkbox" id="confidentiality" name="confidentiality"></input>
                <label for="confidentiality">Принимаю условия <a href="#" class="footer-link">политики конфиденциальности</a></label></div>
         </form>

            <section class="contact-us">
                <h4 class="contact-us__title title-fourth">Связаться с нами:</h4>
                <ul class="contact-us__list">
                    <li class="contact-us__item">
                        <a href="mailto:office@jscorp.ru?subject=Feedback">office@jscorp.ru</a>
                    </li>
                    <li class="contact-us__item  contact-us__item--fb">
                        <a href="#">
                            <svg><use xlink:href="/wp-content/themes/js-corp/images/svg/sprite.svg#fb"></use></svg>
                        </a>
                    </li>
                    <li class="contact-us__item  contact-us__item--vk">
                        <a href="#">
                            <svg><use xlink:href="/wp-content/themes/js-corp/images/svg/sprite.svg#vk"></use></svg>
                        </a>
                    </li>
                </ul>
                <div class="contact-us__download-links">
                    <a class="contact-us__download-item  contact-us__download-item--apple" href="#">
                        <img src="/wp-content/themes/js-corp/images/icons/icon-download-apple.svg">
                    </a>
                    <a class="contact-us__download-item  contact-us__download-item--google" href="#">
                        <img src="/wp-content/themes/js-corp/images/icons/icon-download-google.svg">
                    </a>
                </div>
            </section>
            <nav class="footer-menu">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'menu_class' => 'footer-menu__list'
                    )
                );?>
            </nav>

        </div> <!--main-footer__flex-container close -->

        <div class="main-footer__info-line"></div>

            <div class="footer-info">
                <div class="footer-info__logo">
                    <a href="/">
                        <svg><use xlink:href="/wp-content/themes/js-corp/images/svg/sprite.svg#logo"></use></svg>
                        <span>corp.</span>
                    </a>
                </div>
                 <p class="footer-info__company">2019-2021 © Junior Specialists Corporation llc.
                 </p> 
                 <div class="footer-info__polity-box">
                    <a href="#" class="footer-info__polity">Политика конфиденциальности |</a>
                    <a href="#" class="footer-info__polity">Условия использования</a>
                </div> 
            </div> 
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>
