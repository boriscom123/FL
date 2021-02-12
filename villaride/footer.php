<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Villaraid
 */

?>

	<footer id="colophon" class="footer site-footer">

      <div class="container d-flex flex-justify-between flex-align-center">

        <a class="header-logo"href="http://villaraid.ru/">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.png" alt="logo">
        </a>

        <ul class="header-navigation d-flex flex-justify-between flex-align-center">
          <li><a href="#catalog"><div>Каталог</div><div class="decoration"></div></a></li>
          <li><a href="#gallery"><div>Галерея</div><div class="decoration"></div></a></li>
          <li><a href="#video"><div>Видео</div><div class="decoration"></div></a></li>
          <li><a href="#feedback"><div>Отзывы</div><div class="decoration"></div></a></li>
          <li><a href="#contacts"><div>Контакты</div><div class="decoration"></div></a></li>
        </ul>

        <div class="header-tel">
          <a href="tel:8932321610304" rel="nofollow"><span>8 3452</span> 61 03 04</a>
          <!-- <p>Звонок по России бесплатный</p> -->
        </div>

        <button class="header-button btn-white" type="button" name="button">Обратный звонок</button>

      </div>

      <div class="footer-bottom-content container d-flex flex-justify-between">

        <div class="">
          <p class="footer-ogrn">ОГРН: 1127232062737</p>
          <p class="footer-privacy">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ </p>
          <p class="footer-copy">© 2021 Все права защищены</p>
        </div>
        <div class="d-flex">

          <div class="icons d-flex flex-align-center">

            <a class="d-flex flex-justify-center flex-align-center" href="https://www.youtube.com/channel/UCEqRh4RSeBYYewFa3M1RBhQ" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="youtube"></a>
            <a class="d-flex flex-justify-center flex-align-center" href="https://www.instagram.com/teplica_villarayd/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/instagram.png" alt="instagram"></a>
            <a class="d-flex flex-justify-center flex-align-center" href="https://wa.me/79199558070"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/watsapp.png" alt="watsapp"></a>
            <a class="d-flex flex-justify-center flex-align-center" href="tel:+79199558070"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/viber.png" alt="viber"></a>
          </div>

          <div class="">
            <div class="d-flex">
              <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/pointer.png" alt="pointer">
              </div>
              <div class="info">
                г. Тюмень, ул. Пржевальского, д.36, оф.131
              </div>
            </div>
            <div class="d-flex">
              <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/mail.png" alt="mail">
              </div>
              <div class="info">
                 <a href="mailto:vlad@htmlbook.ru" rel="nofollow">cct72@bk.ru</a>
              </div>
            </div>
          </div>

          <div class="footer-tel">
						<a href="tel:8932321610304" rel="nofollow">+7 (932) 321-03-04</a>
            <!-- <a href="tel:+73452610304" rel="nofollow">+7 (3452) 61-03-04</a> -->
            <a href="tel:+79199558070" rel="nofollow">+7 (919) 955-80-70</a>
          </div>

        </div>

      </div>

    </footer>

    <div class="modals d-none">

      <div class="image d-none">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/modal-1.png" alt="modal-1">
      </div>

      <div class="image d-none">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/modal-2.png" alt="modal-1">
      </div>

      <div class="modal-info d-none">

        <div class="decoration">
          <div class=""><div class=""><div class=""></div></div></div>
          <div class=""><div class=""><div class=""></div></div></div>
          <div class=""><div class=""><div class=""></div></div></div>
          <div class=""><div class=""><div class=""></div></div></div>
          <div class=""><div class=""><div class=""></div></div></div>
          <div class=""><div class=""><div class=""></div></div></div>
          <div class=""><div class=""><div class=""></div></div></div>
          <div class=""><div class=""><div class=""></div></div></div>
          <div class=""><div class=""><div class=""></div></div></div>
          <div class=""><div class=""><div class=""></div></div></div>
        </div>
        <div class="text"></div>
        <div class="close">
          <div class="close-block">
            <div class="close-text">Закрыть</div>
            <div class="close-icon">
							<i class="fas fa-times close-image"></i>
						</div>
          </div>
        </div>

      </div>

      <div class="modal-form d-none">

        <div class="close">
          <div class="close-block">
            <div class="close-text">Закрыть</div>
            <div class="close-icon">
							<i class="fas fa-times close-image"></i>
						</div>
          </div>
        </div>

        <form class="block-1-form d-flex flex-column flex-align-center flex-justify-between" action="index.html" method="get">
          <h2>Получить <span>Скидку</span></h2>
          <p>В ближайшее время с Вами свяжется специалист и проконсультирует Вас.</p>
          <input class="d-none" type="hiddeh" name="info" value="Получить Скидку - подобрать теплицу">
          <input class="input-text" type="text" name="name" value="" placeholder="Ваше имя">
          <input class="input-text" type="tel" name="tel" value="" placeholder="Ваш телефон">
          <button class="btn-red" type="submit" name="submit">Оставить заявку</button>
          <div class="form-checkbox d-flex flex-justify-center flex-align-center">
            <input class="d-none" type="checkbox" name="modal-privacy" value="" id="modal-privacy">
            <label class="checkbox-field" for="modal-privacy"></label>
            <label class="checkbox-label" for="modal-privacy">Я согласен с <a href="#">обработкой персональных данных</a></label>
          </div>

        </form>

      </div>

      <div class="modal-thanks d-none">

        <div class="close">
          <div class="close-block">
            <div class="close-text">Закрыть</div>
            <div class="close-icon">
							<i class="fas fa-times close-image"></i>
						</div>
          </div>
        </div>

        <div class="info">
          <h2>Спасибо</h2>
          <p>заявка отправлена и будет обработана первым специалистом</p>
        </div>

      </div>

			<div class="modal-video d-none">

				<div class="close">
					<div class="close-block">
						<div class="close-text">Закрыть</div>
						<div class="close-icon">
							<i class="fas fa-times close-image"></i>
						</div>
					</div>
				</div>

				<div class="video">
					<video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/8-4.jpg" preload="none">
						<source src="<?php echo get_template_directory_uri(); ?>/assets/video/8-4-hd.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
						Тег video не поддерживается вашим браузером.
						<a href="<?php echo get_template_directory_uri(); ?>/assets/video/8-4-hd.mp4">Скачайте видео</a>.
					</video>
				</div>

			</div>

    </div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
