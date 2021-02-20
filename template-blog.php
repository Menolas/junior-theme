<?php

/*
Template Name: Blog Page
*/

get_header();

?>

<main>
  <section class="blog">
    <div class="container">
      <ul class="blog-links-list">
        <li class="blog-links-list__item">
          <a class="blog-links-list__link blog-links-list__link--active" href="#">Новости</a>
        </li>
        <li class="blog-links-list__item">
          <a class="blog-links-list__link" href="#">Стартапы</a>
        </li>
        <li class="blog-links-list__item">
          <a class="blog-links-list__link" href="#">Интервью</a>
        </li>
      </ul>

      <div class="blog-content">
        <ul class="blog-content__list">
          <li class="blog-content__item">
            <img class="blog-content__image" src="../wp-content/themes/js-corp/images/blog/back_item.jpg" width="190" height="190" alt="background">
            <h2 class="blog-content__title">Шаурма "По-Братски"</h2>
            <span class="blog-content__info">Мобильное приложение для онлайн-заказа, с собственной панелью управления и возможностью собирать отзывы клиентов.</span>
          </li>
          <li class="blog-content__item">
            <img class="blog-content__image" src="../wp-content/themes/js-corp/images/blog/back_item.jpg" width="190" height="190" alt="background">
            <h2 class="blog-content__title">Шаурма "По-Братски"</h2>
            <span class="blog-content__info">Мобильное приложение для онлайн-заказа, с собственной панелью управления и возможностью собирать отзывы клиентов.</span>
          </li>
          <li class="blog-content__item">
            <img class="blog-content__image" src="../wp-content/themes/js-corp/images/blog/back_item.jpg" width="190" height="190" alt="background">
            <h2 class="blog-content__title">Шаурма "По-Братски"</h2>
            <span class="blog-content__info">Мобильное приложение для онлайн-заказа, с собственной панелью управления и возможностью собирать отзывы клиентов.</span>
          </li>
        </ul>
        <div id="true_loadmore" class="btn showmore__btn">Показать еще</div>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>
