<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Villaraid
 */

get_header();
?>

	<main id="primary" class="main site-main">

		  <div class="block-1">
        <a name="contacts"></a>

        <div class="container d-flex flex-justify-between">

          <div class="block-1-left">

						<div class="title">
							<h3>
								Поставщик садовых теплиц
							</h3>
							<div class="image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/image/block-1-title.png" alt="block-1-title">
							</div>
						</div>

            <div class="block-1-title d-flex">
              <div class="border"></div>
              <div class="text">
                <h1>Комплекты теплиц</h1>
                <h2>По сниженным ценам</h2>
              </div>
            </div>

            <div class="block-1-info d-flex">

              <div class="d-flex">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/hand.png" alt="hand">
                </div>
                <div class="text">
                  <h4>Доставка по городу</h4>
                  <p>бесплатная</p>
                </div>
              </div>

              <div class="d-flex">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/warehouse.png" alt="warehouse">
                </div>
                <div class="text">
                  <h4>Хранение до весны</h4>
                  <p>бесплатное</p>
                </div>
              </div>

            </div>

            <div class="block-1-buttons d-flex flex-align-center">
              <button class="button btn-blue header-button" type="button" name="button">Подобрать теплицу</button>
              <div class="text">
                <p>Мы заботимся о Вас. Пенсионерам скидки.</p>
                <p>Доставляем Теплицы по звонку.</p>
              </div>
            </div>

          </div>

          <div class="block-1-right">

            <div class="d-flex space-justify-around">

              <div class="icons d-flex flex-align-baseline">
								<?php
									function check_mobile_device() {
								    $mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
								    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
								    foreach ($mobile_agent_array as $value) {
								        if (strpos($agent, $value) !== false) return true;
								    };
								    return false;
									};
								?>
                <a class="d-flex flex-justify-center flex-align-center" href="https://www.youtube.com/channel/UCEqRh4RSeBYYewFa3M1RBhQ"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="youtube"></a>
                <a class="d-flex flex-justify-center flex-align-center" href="https://www.instagram.com/teplica_villarayd/"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/instagram.png" alt="instagram"></a>
                <a class="d-flex flex-justify-center flex-align-center" href="https://wa.me/79199558070"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/watsapp.png" alt="watsapp"></a>
								<? if(check_mobile_device()) :?>
									<a class="d-flex flex-justify-center flex-align-center" title="Viber" href="viber://add?number=79199558070"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/viber.png" alt="viber"></a>
								<? else : ?>
									<a class="d-flex flex-justify-center flex-align-center" title="Viber" href="viber://chat?number=+779199558070"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/viber.png" alt="viber"></a>
								<? endif; ?>
              </div>

              <div class="tel">
								<a href="tel:8932321610304" rel="nofollow">+7 (932) 321-03-04</a>
		            <!-- <a href="tel:+73452610304" rel="nofollow">+7 (3452) 61-03-04</a> -->
		            <a href="tel:+79199558070" rel="nofollow">+7 (919) 955-80-70</a>
              </div>

            </div>

            <form class="block-1-form d-flex flex-column flex-align-center" action="index.html" method="get">
              <h2>Получить</h2>
							<h3>Парник в подарок</h3>
              <p>Оставьте, пожалуйста, Ваши контактные данные.</p>
							<input class="d-none" type="hidden" name="info" value="Получить парник в подарок">
              <input class="input-text" type="text" name="name" value="" placeholder="Ваше имя">
              <input class="input-text" type="tel" name="tel" value="" placeholder="Ваш телефон">
							<?php
								// получаем дату окончания акции
								// параметры по умолчанию
								$post_id = 313;
								$the_post = get_post( $post_id );
								$content = $the_post->post_content;
								$date = explode('-', substr(strstr(strstr($the_post->post_content, '</p>', true), '<p>'), 3));
							?>
							<div class="promo" id="promo-timer" data-action="<?php echo $date[2].'-'.$date[1].'-'.$date[0]; ?>">
								<h2>до конца <span>акции</span> осталось:</h2>
								<div class="timer">
									<div class="month">
										<div class="upper">
											<div class="">
												<div class="top">0</div>
												<div class="bottom">9</div>
											</div>
											<div class="">
												<div class="top">1</div>
												<div class="bottom">0</div>
											</div>
										</div>
										<div class="down">Месяцев</div>
									</div>
									<div class="colon">:</div>
									<div class="day">
										<div class="upper">
											<div class="1">
												<div class="top">2</div>
												<div class="bottom">1</div>
											</div>
											<div class="2">
												<div class="top">3</div>
												<div class="bottom">2</div>
											</div>
										</div>
										<div class="down">Дней</div>
									</div>
									<div class="colon">:</div>
									<div class="hour">
										<div class="upper">
											<div class="">
												<div class="top">4</div>
												<div class="bottom">3</div>
											</div>
											<div class="">
												<div class="top">5</div>
												<div class="bottom">4</div>
											</div>
										</div>
										<div class="down">Часов</div>
									</div>
									<div class="colon">:</div>
									<div class="min">
										<div class="upper">
											<div class="">
												<div class="top">4</div>
												<div class="bottom">3</div>
											</div>
											<div class="">
												<div class="top">5</div>
												<div class="bottom">4</div>
											</div>
										</div>
										<div class="down">Минут</div>
									</div>
									<div class="colon">:</div>
									<div class="sec">
										<div class="upper">
											<div class="">
												<div class="top">4</div>
												<div class="bottom">3</div>
											</div>
											<div class="">
												<div class="top">5</div>
												<div class="bottom">4</div>
											</div>
										</div>
										<div class="down">Секунд</div>
									</div>
								</div>
							</div>
              <button class="btn-red send-form" type="submit" name="submit">Получить парник</button>
              <div class="form-checkbox d-flex flex-justify-center flex-align-center">
                <input class="d-none" type="checkbox" name="privacy-checkbox" value="" id="privacy-checkbox">
                <label class="checkbox-field" for="privacy-checkbox"></label>
                <label class="checkbox-label" for="privacy-checkbox">Я согласен с <a href="#">обработкой персональных данных</a></label>
              </div>

            </form>
          </div>

        </div>

      </div>

      <div class="block-2">

        <div class="block-2-image-left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-2-left.png" alt="bg-2-left">
        </div>

        <div class="block-2-image-right">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-2-right.png" alt="bg-2-right">
        </div>

        <div class="container">

          <div class="title">
            <h2>преимущества</h2>
            <div class="decoration d-flex flex-justify-center">
              <div class="line"><div class="pointer"></div></div>
            </div>
          </div>

          <div class="block-2-content d-flex flex-justify-between">

            <div class="left">

              <div class="item d-flex">
                <div class="item-decoration">
                  <div class="circle">
                    <div class="line top">
                    </div>
                  </div>
                </div>
                <h3 class="item-text"><span>В комплекте  весь крепёжный элемент</span>, включая фиксаторы форточек</h3>
              </div>

              <div class="item d-flex">
                <div class="item-decoration">
                  <div class="circle">
                    <div class="line center">
                    </div>
                  </div>
                </div>
                <h3 class="item-text"><span>Исключительно прочный</span> сотовый поликарбонат толщиной 4мм.</h3>
              </div>

              <div class="item d-flex">
                <div class="item-decoration">
                  <div class="circle">
                    <div class="line center">
                    </div>
                  </div>
                </div>
                <h3 class="item-text"><span>Письменная гарантия</span> 3 года</h3>
              </div>

              <div class="item d-flex">
                <div class="item-decoration">
                  <div class="circle">
                    <div class="line bottom">
                    </div>
                  </div>
                </div>
                <h3 class="item-text"><span>Отличная геометрия</span> каркаса</h3>
              </div>

            </div>

            <div class="center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-2-centr.png" alt="bg-2-centr">
            </div>

            <div class="right">

              <div class="item d-flex">
                <div class="item-decoration">
                  <div class="circle">
                    <div class="line top">
                    </div>
                  </div>
                </div>
                <h3 class="item-text"><span>Лучшая на сегодняшний день</span> уникальная крепёж-система "КРАБ"</h3>
              </div>

              <div class="item d-flex">
                <div class="item-decoration">
                  <div class="circle">
                    <div class="line center">
                    </div>
                  </div>
                </div>
                <h3 class="item-text"><span>Договор + акт</span> о выполненных работах</h3>
              </div>

              <div class="item d-flex">
                <div class="item-decoration">
                  <div class="circle">
                    <div class="line center">
                    </div>
                  </div>
                </div>
                <h3 class="item-text"><span>Нержавеющий крепкий</span> оцинкованный каркас</h3>
              </div>

              <div class="item d-flex">
                <div class="item-decoration">
                  <div class="circle">
                    <div class="line bottom">
                    </div>
                  </div>
                </div>
                <h3 class="item-text"><span>Ваше хорошее настроение</span></h3>
              </div>

            </div>

          </div>

        </div>

      </div>

      <div class="block-3">

        <div class="block-3-image-left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-3-left.png" alt="bg-3-left">
        </div>

        <div class="block-3-image-right">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-3-right.png" alt="bg-3-right">
        </div>

        <div class="container">

          <div class="title">
            <h2>5 советов по выбору теплицы</h2>
            <div class="decoration d-flex flex-justify-center">
              <div class="line"><div class="pointer"></div></div>
            </div>
          </div>

          <div class="block-3-video d-flex flex-justify-center flex-align-center">

            <div class="">
              <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/1.jpg" preload="none">
                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                Тег video не поддерживается вашим браузером.
                <a href="<?php echo get_template_directory_uri(); ?>/assets/video/1.mp4">Скачайте видео</a>.
              </video>
            </div>

            <div class="play">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
            </div>

          </div>

        </div>

      </div>

      <div class="block-4">
        <a name="catalog"></a>

        <div class="bg-image position-1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-4-1.jpg" alt="bg-4-1">
        </div>

        <div class="bg-image position-2">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-4-2.jpg" alt="bg-4-2">
        </div>

        <div class="bg-image position-3">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-4-3.jpg" alt="bg-4-3">
        </div>

        <div class="bg-image position-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-4-4.jpg" alt="bg-4-4">
        </div>

        <div class="bg-image position-5">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-4-5.jpg" alt="bg-4-5">
        </div>

        <div class="bg-image position-6">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-4-6.jpg" alt="bg-4-6">
        </div>

        <div class="bg-image position-7">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-4-7.jpg" alt="bg-4-7">
        </div>

        <div class="bg-image position-8">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-4-8.jpg" alt="bg-4-8">
        </div>

        <div class="bg-image position-9">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-4-9.jpg" alt="bg-4-9">
        </div>

        <div class="bg-image position-10">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-4-10.jpg" alt="bg-4-10">
        </div>

        <div class="bg-image position-11">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-4-11.jpg" alt="bg-4-11">
        </div>

        <div class="bg-image position-12">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-4-12.jpg" alt="bg-4-12">
        </div>

        <div class="bg-image position-13">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-4-13.jpg" alt="bg-4-13">
        </div>

        <div class="bg-image position-14">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-4-14.jpg" alt="bg-4-14">
        </div>

        <div class="bg-image position-15">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-4-15.jpg" alt="bg-4-15">
        </div>

        <div class="container">

          <div class="title">
            <h2>Каталог</h2>
            <div class="decoration d-flex flex-justify-center">
              <div class="line"><div class="pointer"></div></div>
            </div>
            <h3>Найдете дешевле - удвоим разницу</h3>
            <p>Мы всегда готовы к конструктивному диалогу.</p>
						<p>Помните - по стоимости всегда можно договориться</p>
          </div>

          <div class="">

            <div class="card d-flex flex-justify-between">

              <div class="left">

                <div class="title d-flex flex-align-center">
                  <div class="decoration"></div>
                  <h2>Вариант № 1 СПЕЦ ПРЕДЛОЖЕНИЕ</h2>
                </div>

                <div class="product d-flex">
                  <div class="video">
                    <div class="image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-1.jpg" alt="product-1-image">
                    </div>
                  </div>
                  <div class="table">
                    <h2>Размер ТЕПЛИЦА ЦИНК 20/20</h2>
                    <div class="title d-flex">
                      <div class="">Д.Ш.В.</div>
                      <div class="">Каркас, шаг 1м</div>
                      <div class="">Комплект с СПК 4мм</div>
                      <div class="">Монтаж</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">4×3×2,1</div>
                      <div class="">7 700р.</div>
                      <div class="">16 200р.</div>
                      <div class="">3 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">6×3×2,1</div>
                      <div class="">8 700р.</div>
                      <div class="">20 600р.</div>
                      <div class="">4 000р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">8×3×2,1</div>
                      <div class="">10 700р.</div>
                      <div class="">26 600р.</div>
                      <div class="">4 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">10×3×2,1</div>
                      <div class="">13 700р.</div>
                      <div class="">32 400р.</div>
                      <div class="">5 000р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">12×3×2,1</div>
                      <div class="">16 200р.</div>
                      <div class="">38 300р.</div>
                      <div class="">5 500р.</div>
                    </div>

                  </div>

                </div>

                <div class="contact d-flex">
                  <div class="d-flex flex-column">
                    <a href="tel:+73452610304" rel="nofollow"><span>+7 (3452)</span> 61-03-04</a>
                    <button class="btn-blue show-modal-info" type="button" name="button">Узнать подробности</button>
										<div class="info d-none">
											<div class="">
												<h3>ЦИНК УСИЛЕННАЯ 20/20</h3>
												<h2>БОЛТОВОЕ СОЕДЕНЕНИЕ / устойчива к ржавчине</h2>
											</div>
											<div class="h-line"></div>
											<p>Соединение – «гайка-болт».</p>
											<div class="h-line"></div>
											<p>Прямоугольный профиль выдерживает снеговые нагрузки более 80 кг/м2 и ветровые до 25 м/с.</p>
											<div class="h-line"></div>
											<p>Долговечность и стойкость к коррозии - каркас не требует покраски. Все элементы каркаса оцинкованы с двух сторон, в том числе и крепления.</p>
											<div class="h-line"></div>
											<p>Эстетичность, удобство эксплуатации и перевозки.</p>
											<div class="h-line"></div>
											<p>Возможность самостоятельной сборки с минимальным набором инструментов и без специальной подготовки.</p>
											<div class="h-line"></div>
											<p>В комплект входит: Каркас, 2 двери, 2 форточки, исключительно прочный сотовый поликарбонат 4 мм.</p>
										</div>
                  </div>
                  <p>Каркас, 2 двери, 2 форточки, 5 продольных соединителей, снеговая нагрузка до 90кг./кв.м., весь крепеж в комплекте</p>
                </div>

              </div>

              <form class="block-4-form d-flex flex-column flex-align-center flex-justify-between" action="index.html" method="get">
                <h2>Оставьте <span>заявку</span></h2>
                <p>В ближайшее время с Вами свяжется наш специалист и проконсультирует Вас.</p>
                <input class="d-none" type="hidden" name="info" value="Вариант № 1 СПЕЦ ПРЕДЛОЖЕНИЕ">
                <input class="input-text" type="text" name="name" value="" placeholder="Ваше имя">
                <input class="input-text" type="tel" name="tel" value="" placeholder="Ваш телефон">
                <button class="btn-red send-form" type="submit" name="submit">Заказать</button>
                <div class="form-checkbox d-flex flex-justify-center flex-align-center">
                  <input class="d-none" type="checkbox" name="block-4-privacy-1" value="" id="block-4-privacy-1">
                  <label class="checkbox-field" for="block-4-privacy-1"></label>
                  <label class="checkbox-label" for="block-4-privacy-1">Я согласен с <a href="#">обработкой персональных данных</a></label>
                </div>
              </form>

              <div class="decoration-1"><div></div></div>

            </div>
            <div class="decoration-2"></div>

          </div>

          <div class="">

            <div class="card d-flex flex-justify-between">

              <div class="left">

                <div class="title d-flex flex-align-center">
                  <div class="decoration"></div>
                  <h2>Вариант № 2</h2>
                </div>

                <div class="product d-flex">
                  <div class="video">
                    <div class="image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-2.jpg" alt="product-2-image">
                    </div>
                  </div>
                  <div class="table">
                    <h2>ТЕПЛИЦА ЦИНК УСИЛЕННАЯ 20/20</h2>
                    <div class="title d-flex">
                      <div class="">Д.Ш.В.</div>
                      <div class="">Каркас, шаг 1м</div>
                      <div class="">Комплект с СПК 4мм</div>
                      <div class="">Монтаж</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">4×3×2,1</div>
                      <div class="">13 000р.</div>
                      <div class="">19 000р.</div>
                      <div class="">3 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">6×3×2,1</div>
                      <div class="">15 600р.</div>
                      <div class="">23 600р.</div>
                      <div class="">4 000р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">8×3×2,1</div>
                      <div class="">18 100р.</div>
                      <div class="">28 600р.</div>
                      <div class="">4 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">10×3×2,1</div>
                      <div class="">20 000р.</div>
                      <div class="">33 000р.</div>
                      <div class="">5 000р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">12×3×2,1</div>
                      <div class="">22 300р.</div>
                      <div class="">38 000р.</div>
                      <div class="">5 500р.</div>
                    </div>

                  </div>

                </div>

                <div class="contact d-flex">
                  <div class="d-flex flex-column">
                    <a href="tel:+73452610304" rel="nofollow"><span>+7 (3452)</span> 61-03-04</a>
                    <button class="btn-blue show-modal-info" type="button" name="button">Узнать подробности</button>
										<div class="info d-none">
											<div class="">
												<h3>ТЕПЛИЦА для этих позиций 20/20 и 20/30 и 20/40</h3>
												<h2>Арочные теплицы "Урал -премиум" 30*20 и "Урал-люкс" 40*20 - не имеет аналогов на рынке сверхпрочных арочных теплиц.</h2>
											</div>
											<div class="h-line"></div>
											<p>
												Арочная теплица 20*20  Новая разработка дуги с накатом оцинкованной профильной трубы 20/20 по ребру.
												Теплица имеет идеальную геометрию , с легкостью выдерживает снеговую нагрузку любого региона России и Сибири.
												Все соединения исключительно надежны, благодаря уникальной технологии краб-система. 100% защита от коррозии.
												В комплекте 2 двери 2 форточки (20*20) , 5шт перемычек  20*20 на пролет (дополнительные перемычки 98 см с крепежом можно приобрести отдельно).
												Благодаря каркасу из оцинкованной трубы, не требует доп. покраски во время эксплуатации .
												Увеличенное количество дуг (особенно для каркасов из проф. трубы 20*20) позволяет выдерживать значительные снеговые и ветровые нагрузки.
											</p>
											<div class="h-line"></div>
											<p>
												Наша компания предлагает использовать в качестве фундамента деревянный брус размером 150х100 и 100х100 (продаётся отдельно).
												В местах с сильным ветром необходимо обязательно закрепить фундамент из бруса к земле дополнительными якорями (продаётся отдельно).
												Якоря дополнительно крепят теплицу с фундаментом из бруса к земле.
											</p>
											<div class="h-line"></div>
											<p>В наличии боковая форточка с автоматом и без.</p>
										</div>
                  </div>
                  <p>Каркас, 2 двери, 2 форточки, 5 продольных соединителей, снеговая нагрузка до 90кг./кв.м., весь крепеж в комплекте</p>
                </div>

              </div>

              <form class="block-4-form d-flex flex-column flex-align-center flex-justify-between" action="index.html" method="get">
                <h2>Оставьте <span>заявку</span></h2>
                <p>В ближайшее время с Вами свяжется наш специалист и проконсультирует Вас.</p>
                <input class="d-none" type="hidden" name="info" value="Вариант № 2">
                <input class="input-text" type="text" name="name" value="" placeholder="Ваше имя">
                <input class="input-text" type="tel" name="tel" value="" placeholder="Ваш телефон">
                <button class="btn-red send-form" type="submit" name="submit">Заказать</button>
                <div class="form-checkbox d-flex flex-justify-center flex-align-center">
                  <input class="d-none" type="checkbox" name="block-4-privacy-2" value="" id="block-4-privacy-2">
                  <label class="checkbox-field" for="block-4-privacy-2"></label>
                  <label class="checkbox-label" for="block-4-privacy-2">Я согласен с <a href="#">обработкой персональных данных</a></label>
                </div>
              </form>

              <div class="decoration-1"><div></div></div>

            </div>
            <div class="decoration-2"></div>

          </div>

          <div class="">

            <div class="card d-flex flex-justify-between">

              <div class="left">

                <div class="title d-flex flex-align-center">
                  <div class="decoration"></div>
                  <h2>Вариант № 3 ЛУЧШАЯ ЦЕНА</h2>
                </div>

                <div class="product d-flex">
                  <div class="video">
                    <div class="image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-3.jpg" alt="product-3-image">
                    </div>
                  </div>
                  <div class="table">
                    <h2>ТЕПЛИЦА ЦИНК КРЕПЫЖ 20/30</h2>
                    <div class="title d-flex">
                      <div class="">Д.Ш.В.</div>
                      <div class="">Каркас, шаг 1м</div>
                      <div class="">Комплект с СПК 4мм</div>
                      <div class="">Монтаж</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">4×3×2,1</div>
                      <div class="">18 000р.</div>
                      <div class="">24 300р.</div>
                      <div class="">3 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">6×3×2,1</div>
                      <div class="">20 500р.</div>
                      <div class="">29 600р.</div>
                      <div class="">4 000р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">8×3×2,1</div>
                      <div class="">23 000р.</div>
                      <div class="">34 900р.</div>
                      <div class="">4 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">10×3×2,1</div>
                      <div class="">25 500р.</div>
                      <div class="">39 000р.</div>
                      <div class="">5 000р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">12×3×2,1</div>
                      <div class="">28 500р.</div>
                      <div class="">43 900р.</div>
                      <div class="">5 500р.</div>
                    </div>

                  </div>

                </div>

                <div class="contact d-flex">
                  <div class="d-flex flex-column">
                    <a href="tel:+73452610304" rel="nofollow"><span>+7 (3452)</span> 61-03-04</a>
                    <button class="btn-blue show-modal-info" type="button" name="button">Узнать подробности</button>
										<div class="info d-none">
											<div class="">
												<h3>ТЕПЛИЦА для этих позиций 20/20 и 20/30 и 20/40</h3>
												<h2>Арочные теплицы "Урал -премиум" 30*20 и "Урал-люкс" 40*20 - не имеет аналогов на рынке сверхпрочных арочных теплиц.</h2>
											</div>
											<div class="h-line"></div>
											<p>
												Арочная теплица 30*20 не имеет аналогов на рынке сверхпрочных арочных теплиц.
												Новая разработка дуги с накатом оцинкованной профильной трубы 30*20 по ребру.
												Теплица имеет идеальную геометрию , с легкостью выдерживает снеговую нагрузку любого региона России и Сибири.
												Все соединения исключительно надежны, благодаря уникальной технологии краб-система. 100% защита от коррозии.
												В комплекте 2 двери 2 форточки (20*20) , 5шт перемычек 30*20 на пролет (дополнительные перемычки 98 см с крепежом можно приобрести отдельно). Благодаря каркасу из оцинкованной трубы, не требует доп. покраски во время эксплуатации . Увеличенное количество дуг (особенно для каркасов из проф. трубы 20*20) позволяет выдерживать значительные снеговые и ветровые нагрузки.
											</p>
											<div class="h-line"></div>
											<p>
												Наша компания предлагает использовать в качестве фундамента деревянный брус размером 150х100 и 100х100 (продаётся отдельно).
												В местах с сильным ветром необходимо обязательно закрепить фундамент из бруса к земле дополнительными якорями (продаётся отдельно).
												Якоря дополнительно крепят теплицу с фундаментом из бруса к земле.
											</p>
											<div class="h-line"></div>
											<p>В наличии боковая форточка с автоматом и без.</p>
										</div>
                  </div>
                  <p>Каркас, 2 двери, 2 форточки, 5 продольных соединителей, снеговая нагрузка до 150 кг./кв.м. весь крепеж в комплекте</p>
                </div>

              </div>

              <form class="block-4-form d-flex flex-column flex-align-center flex-justify-between" action="index.html" method="get">
                <h2>Оставьте <span>заявку</span></h2>
                <p>В ближайшее время с Вами свяжется наш специалист и проконсультирует Вас.</p>
                <input class="d-none" type="hidden" name="info" value="Вариант № 3 ЛУЧШАЯ ЦЕНА">
                <input class="input-text" type="text" name="name" value="" placeholder="Ваше имя">
                <input class="input-text" type="tel" name="tel" value="" placeholder="Ваш телефон">
                <button class="btn-red send-form" type="submit" name="submit">Заказать</button>
                <div class="form-checkbox d-flex flex-justify-center flex-align-center">
                  <input class="d-none" type="checkbox" name="block-4-privacy-3" value="" id="block-4-privacy-3">
                  <label class="checkbox-field" for="block-4-privacy-3"></label>
                  <label class="checkbox-label" for="block-4-privacy-3">Я согласен с <a href="#">обработкой персональных данных</a></label>
                </div>
              </form>

              <div class="decoration-1"><div></div></div>

            </div>
            <div class="decoration-2"></div>

          </div>

          <div class="">

            <div class="card d-flex flex-justify-between">

              <div class="left">

                <div class="title d-flex flex-align-center">
                  <div class="decoration"></div>
                  <h2>Вариант № 4</h2>
                </div>

                <div class="product d-flex">
                  <div class="video">
                    <div class="image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-4.jpg" alt="product-4-image">
                    </div>
                  </div>
                  <div class="table">
                    <h2>ТЕПЛИЦА ЦИНК ФЕРМА 2-ная ДУГА 20/20</h2>
                    <div class="title d-flex">
                      <div class="">Д.Ш.В.</div>
                      <div class="">Каркас, шаг 1м</div>
                      <div class="">Комплект с СПК 4мм</div>
                      <div class="">Монтаж</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">4×3×2,1</div>
                      <div class="">19 000р.</div>
                      <div class="">23 300р.</div>
                      <div class="">3 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">6×3×2,1</div>
                      <div class="">21 500р.</div>
                      <div class="">27 500р.</div>
                      <div class="">4 000р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">8×3×2,1</div>
                      <div class="">24 000р.</div>
                      <div class="">34 000р.</div>
                      <div class="">4 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">10×3×2,1</div>
                      <div class="">26 500р.</div>
                      <div class="">40 000р.</div>
                      <div class="">5 000р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">12×3×2,1</div>
                      <div class="">29 900р.</div>
                      <div class="">45 000р.</div>
                      <div class="">5 500р.</div>
                    </div>

                  </div>

                </div>

                <div class="contact d-flex">
                  <div class="d-flex flex-column">
                    <a href="tel:+73452610304" rel="nofollow"><span>+7 (3452)</span> 61-03-04</a>
                    <button class="btn-blue show-modal-info" type="button" name="button">Узнать подробности</button>
										<div class="info d-none">
											<div class="">
												<h3>ФЕРМА Арочные теплица "Ферма" не имеет аналогов на рынке сверхпрочных арочных теплиц.</h3>
												<h2>Мощные двойные дуги-фермы из труб 20*20 и 20*20, 30*20 и 20*20, 40*20 и 20*20.</h2>
											</div>
											<div class="h-line"></div>
											<p>
												Расстояние между дугами - 1 м или 0,65 м.
												Теплица имеет идеальную геометрию , с легкостью выдерживает снеговую нагрузку любого региона России и Сибири.
												Все соединения исключительно надежны, благодаря уникальной технологии краб-система.
												100% защита от коррозии.
												В комплекте 2 двери 2 форточки (20*20) , 5 шт перемычек 20*20, 30*20, 40*20 на пролет (дополнительные перемычки 98 см с крепежом можно приобрести отдельно).
												Благодаря каркасу из оцинкованной трубы, не требует доп. покраски во время эксплуатации.
												Увеличенное количество дуг (особенно для каркасов из проф. трубы 20*20) позволяет выдерживать значительные снеговые и ветровые нагрузки.
											</p>
											<div class="h-line"></div>
											<p>
												Наша компания предлагает использовать в качестве базового варианта фундамента, деревянный брус размером 100х100 обработанный реагентом против плесени и гниения (продаётся отдельно).
												В местах с сильным ветром необходимо обязательно закрепить фундамент из бруса к земле дополнительными якорями (продаётся отдельно).
												Якоря дополнительно крепят теплицу с фундаментом из бруса к земле.
											</p>
											<div class="h-line"></div>
											<p>
												В наличии боковая форточка с автоматом и без, перегородка с дверью и без, термошайбы и торцевые профиля.
											</p>
										</div>
                  </div>
                  <p>Каркас, 2 двери, 2 форточки, 5 продольных соединителей, снеговая нагрузка до 250 кг./кв.м. весь крепеж в комплекте</p>
                </div>
              </div>

              <form class="block-4-form d-flex flex-column flex-align-center flex-justify-between" action="index.html" method="get">
                <h2>Оставьте <span>заявку</span></h2>
                <p>В ближайшее время с Вами свяжется наш специалист и проконсультирует Вас.</p>
                <input class="d-none" type="hidden" name="info" value="Вариант № 4">
                <input class="input-text" type="text" name="name" value="" placeholder="Ваше имя">
                <input class="input-text" type="tel" name="tel" value="" placeholder="Ваш телефон">
                <button class="btn-red send-form" type="submit" name="submit">Заказать</button>
                <div class="form-checkbox d-flex flex-justify-center flex-align-center">
                  <input class="d-none" type="checkbox" name="block-4-privacy-4" value="" id="block-4-privacy-4">
                  <label class="checkbox-field" for="block-4-privacy-4"></label>
                  <label class="checkbox-label" for="block-4-privacy-4">Я согласен с <a href="#">обработкой персональных данных</a></label>
                </div>
              </form>

              <div class="decoration-1"><div></div></div>

            </div>
            <div class="decoration-2"></div>

          </div>

          <div class="">

            <div class="card d-flex flex-justify-between">

              <div class="left">

                <div class="title d-flex flex-align-center">
                  <div class="decoration"></div>
                  <h2>Вариант № 5</h2>
                </div>

                <div class="product d-flex">
                  <div class="video">
                    <div class="image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-5.jpg" alt="product-5-image">
                    </div>
                  </div>
                  <div class="table">
                    <h2>ТЕПЛИЦА ЦИНК КРЕПЫЖ ЛЮКС 40/20</h2>
                    <div class="title d-flex">
                      <div class="">Д.Ш.В.</div>
                      <div class="">Каркас, шаг 1м</div>
                      <div class="">Комплект с СПК 4мм</div>
                      <div class="">Монтаж</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">4×3×2,1</div>
                      <div class="">20 700р.</div>
                      <div class="">26 000р.</div>
                      <div class="">3 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">6×3×2,1</div>
                      <div class="">22 500р.</div>
                      <div class="">31 800р.</div>
                      <div class="">4 000р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">8×3×2,1</div>
                      <div class="">25 000р.</div>
                      <div class="">37 700р.</div>
                      <div class="">4 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">10×3×2,1</div>
                      <div class="">27 500р.</div>
                      <div class="">43 300р.</div>
                      <div class="">5 000р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">12×3×2,1</div>
                      <div class="">30 000р.</div>
                      <div class="">49 200р.</div>
                      <div class="">5 500р.</div>
                    </div>

                  </div>

                </div>

                <div class="contact d-flex">
                  <div class="d-flex flex-column">
                    <a href="tel:+73452610304" rel="nofollow"><span>+7 (3452)</span> 61-03-04</a>
                    <button class="btn-blue show-modal-info" type="button" name="button">Узнать подробности</button>
										<div class="info d-none">
											<div class="">
												<h3>ТЕПЛИЦА для этих позиций 20/20 и 20/30 и 20/40</h3>
												<h2>Арочные теплицы "Урал -премиум" 30*20 и "Урал-люкс" 40*20 - не имеет аналогов на рынке сверхпрочных арочных теплиц.</h2>
											</div>
											<div class="h-line"></div>
											<p>
												Арочные теплицы премиум «Урал-люкс» 40*20 - не имеет аналогов на рынке сверхпрочных арочных теплиц.
												Новая разработка дуги с накатом оцинкованной профильной трубы 40*20 по ребру.
												Теплица имеет идеальную геометрию , с легкостью выдерживает снеговую нагрузку любого региона России и Сибири.
												Все соединения исключительно надежны, благодаря уникальной технологии краб-система.
												100% защита от коррозии. В комплекте 2 двери 2 форточки (20*20) , 5шт перемычек 40*20 на пролет (дополнительные перемычки 98 см с крепежом можно приобрести отдельно).
												Благодаря каркасу из оцинкованной трубы, не требует доп. покраски во время эксплуатации .
												Увеличенное количество дуг (особенно для каркасов из проф. трубы 20*20) позволяет выдерживать значительные снеговые и ветровые нагрузки.
											</p>
											<div class="h-line"></div>
											<p>
												Наша компания предлагает использовать в качестве фундамента деревянный брус размером 150х100 и 100х100 (продаётся отдельно).
												В местах с сильным ветром необходимо обязательно закрепить фундамент из бруса к земле дополнительными якорями (продаётся отдельно).
												Якоря дополнительно крепят теплицу с фундаментом из бруса к земле.
											</p>
											<div class="h-line"></div>
											<p>В наличии боковая форточка с автоматом и без.</p>
										</div>
                  </div>
                  <p>Каркас, 2 двери, 2 форточки, 5 продольных соединителей, снеговая нагрузка до 250 кг./кв.м. весь крепеж в комплекте</p>
                </div>

              </div>

              <form class="block-4-form d-flex flex-column flex-align-center flex-justify-between" action="index.html" method="get">
                <h2>Оставьте <span>заявку</span></h2>
                <p>В ближайшее время с Вами свяжется наш специалист и проконсультирует Вас.</p>
                <input class="d-none" type="hidden" name="info" value="Вариант № 5">
                <input class="input-text" type="text" name="name" value="" placeholder="Ваше имя">
                <input class="input-text" type="tel" name="tel" value="" placeholder="Ваш телефон">
                <button class="btn-red send-form" type="submit" name="submit">Заказать</button>
                <div class="form-checkbox d-flex flex-justify-center flex-align-center">
                  <input class="d-none" type="checkbox" name="block-4-privacy-5" value="" id="block-4-privacy-5">
                  <label class="checkbox-field" for="block-4-privacy-5"></label>
                  <label class="checkbox-label" for="block-4-privacy-5">Я согласен с <a href="#">обработкой персональных данных</a></label>
                </div>
              </form>

              <div class="decoration-1"><div></div></div>

            </div>
            <div class="decoration-2"></div>

          </div>

          <div class="">

            <div class="card d-flex flex-justify-between">

              <div class="left">

                <div class="title d-flex flex-align-center">
                  <div class="decoration"></div>
                  <h2>Вариант № 6</h2>
                </div>

                <div class="product d-flex">
                  <div class="video">
                    <div class="image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-6.jpg" alt="product-6-image">
                    </div>
                  </div>
                  <div class="table">
                    <h2>ТЕПЛИЦА ЦИНК КАПЕЛЬКА - ЛЮКС</h2>
                    <div class="title d-flex">
                      <div class="">Д.Ш.В.</div>
                      <div class="">Каркас, шаг 1м</div>
                      <div class="">Комплект с СПК 4мм</div>
                      <div class="">Монтаж</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">4×3×2,1</div>
                      <div class="">19 900р.</div>
                      <div class="">30 400р.</div>
                      <div class="">4 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">6×3×2,1</div>
                      <div class="">22 200р.</div>
                      <div class="">36 800р.</div>
                      <div class="">5 000р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">8×3×2,1</div>
                      <div class="">24 900р.</div>
                      <div class="">42 300р.</div>
                      <div class="">6 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">10×3×2,1</div>
                      <div class="">27 500р.</div>
                      <div class="">49 400р.</div>
                      <div class="">7 000р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">12×3×2,1</div>
                      <div class="">30 400р.</div>
                      <div class="">53 900р.</div>
                      <div class="">7 500р.</div>
                    </div>

                  </div>

                </div>

                <div class="contact d-flex">
                  <div class="d-flex flex-column">
                    <a href="tel:+73452610304" rel="nofollow"><span>+7 (3452)</span> 61-03-04</a>
                    <button class="btn-blue show-modal-info" type="button" name="button">Узнать подробности</button>
										<div class="info d-none">
											<div class="">
												<h3>КАПЕЛЬКА</h3>
												<h2>Стрельчатая форма каркаса с накатом оцинкованной профильной трубы 30*20 по ребру, значительно снижает залегание снега.</h2>
											</div>
											<div class="h-line"></div>
											<p>
												Рекомендуется для регионов с обильными снегопадами.
												Прочный стальной оцинкованный каркас (дуги и перемычки из п/т 30*20 по ребру) позволяет теплице легко справляться даже с самыми сильными ветрами и снеговыми нагрузками.
											</p>
											<div class="h-line"></div>
											<p>
												В комплекте 2 двери 2 форточки (20*20), оцинкованный коньковый элемент, усилители на каждой дуге, перемычек ВОСЕМЬ штук на пролет.
												Поликарбонат на выбор 4мм УФ-защитой с гарантией 15 лет. Россия.
											</p>
											<div class="h-line"></div>
											<p>
												Наша компания предлагает использовать в качестве базового варианта фундамента, деревянный брус размером 100х100 обработанный реагентом против плесени и гниения (продаётся отдельно).
												В местах с сильным ветром необходимо обязательно закрепить фундамент из бруса к земле дополнительными якорями (продаётся отдельно).
												Якоря дополнительно крепят теплицу с фундаментом из бруса к земле.
											</p>
											<div class="h-line"></div>
											<p>
												В наличии боковая форточка с автоматом и без,так же термошайбы и торцевые профиля.
											</p>
										</div>
                  </div>
                  <p>
                    Каркас, 2 двери, 2 форточки, 7 продольных соединителей, снеговая нагрузка до 250 кг./кв.м. весь крепеж в комплекте.
                    В комплект входит коньковый элементю
                  </p>
                </div>

              </div>

              <form class="block-4-form d-flex flex-column flex-align-center flex-justify-between" action="index.html" method="get">
                <h2>Оставьте <span>заявку</span></h2>
                <p>В ближайшее время с Вами свяжется наш специалист и проконсультирует Вас.</p>
                <input class="d-none" type="hidden" name="info" value="Вариант № 6">
                <input class="input-text" type="text" name="name" value="" placeholder="Ваше имя">
                <input class="input-text" type="tel" name="tel" value="" placeholder="Ваш телефон">
                <button class="btn-red send-form" type="submit" name="submit">Заказать</button>
                <div class="form-checkbox d-flex flex-justify-center flex-align-center">
                  <input class="d-none" type="checkbox" name="block-4-privacy-6" value="" id="block-4-privacy-6">
                  <label class="checkbox-field" for="block-4-privacy-6"></label>
                  <label class="checkbox-label" for="block-4-privacy-6">Я согласен с <a href="#">обработкой персональных данных</a></label>
                </div>
              </form>

              <div class="decoration-1"><div></div></div>

            </div>
            <div class="decoration-2"></div>

          </div>

          <div class="">

            <div class="card d-flex flex-justify-between">

              <div class="left">

                <div class="title d-flex flex-align-center">
                  <div class="decoration"></div>
                  <h2>Вариант № 7</h2>
                </div>

                <div class="product d-flex">
                  <div class="video">
                    <div class="image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-7.jpg" alt="product-7-image">
                    </div>
                  </div>
                  <div class="table">
                    <h2>ТЕПЛИЦА ЦИНК СИБИРЯЧКА 2-ная ДУГА</h2>
                    <div class="title d-flex">
                      <div class="">Д.Ш.В.</div>
                      <div class="">Каркас, шаг 1м</div>
                      <div class="">Комплект с СПК 4мм</div>
                      <div class="">Монтаж</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">4×3×2,1</div>
                      <div class="">32 700р.</div>
                      <div class="">50 200р.</div>
                      <div class="">7 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">6×3×2,1</div>
                      <div class="">38 700р.</div>
                      <div class="">63 000р.</div>
                      <div class="">8 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">8×3×2,1</div>
                      <div class="">48 700р.</div>
                      <div class="">75 900р.</div>
                      <div class="">9 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">10×3×2,1</div>
                      <div class="">53 700р.</div>
                      <div class="">91 600р.</div>
                      <div class="">10 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">12×3×2,1</div>
                      <div class="">61 700р.</div>
                      <div class="">105 700р.</div>
                      <div class="">11 500р.</div>
                    </div>

                  </div>

                </div>

                <div class="contact d-flex">
                  <div class="d-flex flex-column">
                    <a href="tel:+73452610304" rel="nofollow"><span>+7 (3452)</span> 61-03-04</a>
                    <button class="btn-blue show-modal-info" type="button" name="button">Узнать подробности</button>
										<div class="info d-none">
											<div class="">
												<h3>ЦИНК ЦИНК СИБИРЯЧКА 2-ная ДУГА</h3>
												<h2>Краб-система, устойчива к ржавчине</h2>
											</div>
											<p>
												Теплица с прямыми стенками из оцинкованной проф. трубы, дуги двойные ( 40х20 и 20х20), соединение краб-система.
												Двойные дуги из проф. трубы 40х20 и 20х20 позволяют выдерживать огромные нагрузки на весь периметр теплицы!
												Высота теплицы позволяет работать с высокими растениями!
												Лучшее соотношение цена-качество по сравнению с подобными моделями теплиц!
											</p>
											<div class="h-line"></div>
											<p>ОСНОВНЫЕ ХАРАКТЕРИСТИКИ ТЕПЛИЦЫ</p>
											<div class="h-line"></div>
											<p>Теплица с прямыми стенками</p>
											<div class="h-line"></div>
											<p>Все элементы изготовлены из квадратной профильной оцинкованной трубы сечением 20х20 и 30*20.</p>
											<div class="h-line"></div>
											<p>Расстояние между двойными дугами 1м.</p>
											<div class="h-line"></div>
											<p>Ширина теплицы - 3м.</p>
											<div class="h-line"></div>
											<p>Высота теплицы - 2.4м.</p>
											<div class="h-line"></div>
											<p>Дуги цельные, двойные.</p>
											<div class="h-line"></div>
											<p>Торцевые двери и по 2 форточки с двух сторон.</p>
											<div class="h-line"></div>
											<p>Простая и удобная сборка.</p>
											<div class="h-line"></div>
											<p>Демонтаж поликарбоната на зимний период не требуется.</p>
											<div class="h-line"></div>
											<p>Соединение оцинкованный крепеж "краб система".</p>
										</div>
                  </div>
                  <p>Каркас, 2 двери, 2 форточки, 5 продольных соединителей, снеговая нагрузка до 600 кг./кв.м. весь крепеж в комплекте</p>
                </div>

              </div>

              <form class="block-4-form d-flex flex-column flex-align-center flex-justify-between" action="index.html" method="get">
                <h2>Оставьте <span>заявку</span></h2>
                <p>В ближайшее время с Вами свяжется наш специалист и проконсультирует Вас.</p>
                <input class="d-none" type="hidden" name="info" value="Вариант № 7">
                <input class="input-text" type="text" name="name" value="" placeholder="Ваше имя">
                <input class="input-text" type="tel" name="tel" value="" placeholder="Ваш телефон">
                <button class="btn-red send-form" type="submit" name="submit">Заказать</button>
                <div class="form-checkbox d-flex flex-justify-center flex-align-center">
                  <input class="d-none" type="checkbox" name="block-4-privacy-7" value="" id="block-4-privacy-7">
                  <label class="checkbox-field" for="block-4-privacy-7"></label>
                  <label class="checkbox-label" for="block-4-privacy-7">Я согласен с <a href="#">обработкой персональных данных</a></label>
                </div>
              </form>

              <div class="decoration-1"><div></div></div>

            </div>
            <div class="decoration-2"></div>

          </div>

          <div class="">

            <div class="card d-flex flex-justify-between">

              <div class="left">

                <div class="title d-flex flex-align-center">
                  <div class="decoration"></div>
                  <h2>Вариант № 8</h2>
                </div>

                <div class="product d-flex">
                  <div class="video">
                    <div class="image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-8.jpg" alt="product-8-image">
                    </div>
                  </div>
                  <div class="table">
                    <h2>ТЕПЛИЦА ЦИНК ДОМИКОМ 40/20</h2>
                    <div class="title d-flex">
                      <div class="">Д.Ш.В.</div>
                      <div class="">Каркас, шаг 1м</div>
                      <div class="">Комплект с СПК 4мм</div>
                      <div class="">Монтаж</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">4×3×2,1</div>
                      <div class="">29 400р.</div>
                      <div class="">47 100р.</div>
                      <div class="">7 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">6×3×2,1</div>
                      <div class="">35 700р.</div>
                      <div class="">59 600р.</div>
                      <div class="">8 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">8×3×2,1</div>
                      <div class="">43 700р.</div>
                      <div class="">73 800р.</div>
                      <div class="">9 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">10×3×2,1</div>
                      <div class="">52 700р.</div>
                      <div class="">87 300р.</div>
                      <div class="">10 500р.</div>
                    </div>
                    <div class="info d-flex">
                      <div class="">12×3×2,1</div>
                      <div class="">60 700р.</div>
                      <div class="">102 400р.</div>
                      <div class="">11 500р.</div>
                    </div>

                  </div>

                </div>

                <div class="contact d-flex">
                  <div class="d-flex flex-column">
                    <a href="tel:+73452610304" rel="nofollow"><span>+7 (3452)</span> 61-03-04</a>
                    <button class="btn-blue show-modal-info" type="button" name="button">Узнать подробности</button>
										<div class="info d-none">
											<div class="">
												<h3>ТЕПЛИЦА ЦИНК ДОМИКОМ 40/20</h3>
												<h2>Краб-система, устойчива к ржавчине</h2>
											</div>
											<p>
												Теплица не имеет аналогов на рынке сверхпрочных арочных теплиц.
												Новая разработка с накатом оцинкованной профильной трубы 20 x 40 по ребру.
												Теплица имеет идеальную геометрию, с легкостью выдерживает снеговую нагрузку любого региона России и Сибири.
												Все соединения исключительно надежны, благодаря уникальной технологии краб-система.
												100% защита от коррозии.
												Мы реализуем только долговечные теплицы. Долговечные и современные теплицы - наше основное преимущество.
											</p>
											<div class="h-line"></div>
											<p>ОСНОВНЫЕ ХАРАКТЕРИСТИКИ ТЕПЛИЦЫ</p>
											<div class="h-line"></div>
											<p>Оцинкованная профильная труба 40х20 мм, накатанной по ребру жесткости.</p>
											<div class="h-line"></div>
											<p>Размеры: ширина - 3 м,высота по коньку 2.4 м.</p>
											<div class="h-line"></div>
											<p>Расстояние между дугами 1 метр.</p>
											<div class="h-line"></div>
											<p>Усилитель на каждой дуге.</p>
											<div class="h-line"></div>
											<p>Торцы - 2 двери и 2 форточки.</p>
											<div class="h-line"></div>
											<p>Соединение – «краб-система».</p>
											<div class="h-line"></div>
											<p>Покрытие - сотовый поликарбонат.</p>
											<div class="h-line"></div>
											<p>Установка на деревянный брус, металлический профиль или бетонный фундамент.</p>
											<div class="h-line"></div>
											<p>Гарантия - 3 года.</p>
										</div>
                  </div>
                  <p>Усилитель на каждой дуге. Торцы - 2 двери и 2 форточки. Гарантия - 3 года.</p>
                </div>

              </div>

              <form class="block-4-form d-flex flex-column flex-align-center flex-justify-between" action="index.html" method="get">
                <h2>Оставьте <span>заявку</span></h2>
                <p>В ближайшее время с Вами свяжется наш специалист и проконсультирует Вас.</p>
                <input class="d-none" type="hidden" name="info" value="Вариант № 8">
                <input class="input-text" type="text" name="name" value="" placeholder="Ваше имя">
                <input class="input-text" type="tel" name="tel" value="" placeholder="Ваш телефон">
                <button class="btn-red send-form" type="submit" name="submit">Заказать</button>
                <div class="form-checkbox d-flex flex-justify-center flex-align-center">
                  <input class="d-none" type="checkbox" name="block-4-privacy-8" value="" id="block-4-privacy-8">
                  <label class="checkbox-field" for="block-4-privacy-8"></label>
                  <label class="checkbox-label" for="block-4-privacy-8">Я согласен с <a href="#">обработкой персональных данных</a></label>
                </div>
              </form>

              <div class="decoration-1"><div></div></div>

            </div>
            <div class="decoration-2"></div>

          </div>

          <div class="">

            <div class="card d-flex flex-justify-between">

              <div class="left">

                <div class="title d-flex flex-align-center">
                  <div class="decoration"></div>
                  <h2>Основание под теплицу</h2>
                </div>

                <div class="product d-flex card-9">

									<div class="left">
			              <img src="<?php echo get_template_directory_uri(); ?>/assets/image/left-icon.svg" alt="left-arrow">
			            </div>
			            <div class="right">
			              <img src="<?php echo get_template_directory_uri(); ?>/assets/image/right-icon.svg" alt="right-arrow">
			            </div>

                  <div class="video">
                    <div class="image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-9.jpg" alt="product-9-image">
                    </div>
                  </div>

									<div class="video">
										<div class="image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-9-1.jpg" alt="product-9-1-image">
										</div>
									</div>

									<div class="video d-none">
										<div class="image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-9-2.jpg" alt="product-9-2-image">
										</div>
									</div>

									<div class="video d-none">
										<div class="image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-9-3.jpg" alt="product-9-3-image">
										</div>
									</div>

									<div class="video d-none">
										<div class="image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-9-4.jpg" alt="product-9-4-image">
										</div>
									</div>

									<div class="video d-none">
										<div class="image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-9-5.jpg" alt="product-9-5-image">
										</div>
									</div>

									<div class="video d-none">
										<div class="image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-9-6.jpg" alt="product-9-6-image">
										</div>
									</div>

									<div class="video d-none">
										<div class="image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-9-7.jpg" alt="product-9-7-image">
										</div>
									</div>

									<div class="video d-none">
										<div class="image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-9-8.jpg" alt="product-9-8-image">
										</div>
									</div>

									<div class="video d-none">
										<div class="image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-9-9.jpg" alt="product-9-9-image">
										</div>
									</div>

									<div class="video d-none">
										<div class="image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-9-10.jpg" alt="product-9-10-image">
										</div>
									</div>

									<div class="video d-none">
										<div class="image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-9-11.jpg" alt="product-9-11-image">
										</div>
									</div>

									<div class="video d-none">
										<div class="image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-9-12.jpg" alt="product-9-12-image">
										</div>
									</div>

									<div class="video d-none">
										<div class="image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-9-13.jpg" alt="product-9-13-image">
										</div>
									</div>

									<div class="video d-none">
										<div class="image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/image/4-9-14.jpg" alt="product-9-14-image">
										</div>
									</div>

                </div>

                <div class="contact d-flex">
                  <div class="d-flex flex-column">
                    <a href="tel:+73452610304" rel="nofollow"><span>+7 (3452)</span> 61-03-04</a>
                    <button class="btn-blue show-modal-info" type="button" name="button">Узнать подробности</button>
										<div class="info d-none">
											<div class="">
												<h3>Основание под теплицу</h3>
												<h2></h2>
											</div>
											<p>
												Фундамент для теплицы – это основа, которая обеспечит устойчивость, целостность конструкции и прочность.
												Фундамент под теплицу из поликарбоната однозначно нужен , это база которая выполняет ряд важных задач.
											</p>
											<div class="h-line"></div>
											<p>- фиксирует тепличный каркас, удерживает его при порывах ветра, сильных ливнях, при затоплении участка и от пр. атмосферных сюрпризов;</p>
											<div class="h-line"></div>
											<p>- изолирует конструкцию от соприкосновения с землей, защищает материалы от вредных воздействий почвы, значительно продлевает срок службы постройки;</p>
											<div class="h-line"></div>
											<p>- помогает сохранить внутри до 10% тепла, способствует благоприятному микроклимату и сэкономить на обогреве;</p>
											<div class="h-line"></div>
											<p>- препятствует проникновению внутрь теплицы туману, холодным потокам воздуха;</p>
											<div class="h-line"></div>
											<p>- помогает оградить конструкцию и урожай от вредных насекомых и грызунов.</p>
											<div class="h-line"></div>
											<p>Наша компания предлагает несколько возможных вариантов фундаментов:</p>
											<div class="h-line"></div>
											<p>1. Брус разного  сечения обработанный реагентом против плесени и гниения.</p>
											<div class="h-line"></div>
											<p>2. Металическое основание из профильной трубу разного сечения.</p>
											<div class="h-line"></div>
											<p>3. Ленточный  бетонный фундамент, не заглублённый -лежащий на твёрдом грунте.</p>
											<div class="h-line"></div>
											<p>4. Основание из керамитоблоков.</p>
											<div class="h-line"></div>
											<p>5. Столбчатый фундамент. Столбы углубляются на 700-800 мм, может быть и не утопленный в грунт. Оптимальное расстояние между столбами 1,5-2,0 м.</p>
											<div class="h-line"></div>
											<p class="active">Стоимость любого вида основания просчитывается индивидуально.</p>
										</div>
                  </div>
                  <button class="card-9-link btn-red" type="button" name="button">Смотреть видео</button>
                </div>

              </div>

              <form class="block-4-form d-flex flex-column flex-align-center flex-justify-between" action="index.html" method="get">
                <h2>Оставьте <span>заявку</span></h2>
                <p>В ближайшее время с Вами свяжется наш специалист и проконсультирует Вас.</p>
                <input class="d-none" type="hidden" name="info" value="Основание под теплицу">
                <input class="input-text" type="text" name="name" value="" placeholder="Ваше имя">
                <input class="input-text" type="tel" name="tel" value="" placeholder="Ваш телефон">
                <button class="btn-red send-form" type="submit" name="submit">Заказать</button>
                <div class="form-checkbox d-flex flex-justify-center flex-align-center">
                  <input class="d-none" type="checkbox" name="block-4-privacy-9" value="" id="block-4-privacy-9">
                  <label class="checkbox-field" for="block-4-privacy-9"></label>
                  <label class="checkbox-label" for="block-4-privacy-9">Я согласен с <a href="#">обработкой персональных данных</a></label>
                </div>
              </form>

              <div class="decoration-1"><div></div></div>

            </div>
            <div class="decoration-2"></div>

          </div>


        </div>

      </div>

      <div class="block-7">
        <a name="feedback"></a>

        <div class="container">

          <div class="title">
            <h2>наши отзывы</h2>
            <div class="decoration d-flex flex-justify-center">
              <div class="line"><div class="pointer"></div></div>
            </div>
          </div>

          <div class="slider" id="feedback-slider">

            <div class="left">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/image/left-icon.svg" alt="left-arrow">
            </div>
            <div class="right">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/image/right-icon.svg" alt="right-arrow">
            </div>

            <div class="card-block d-flex flex-justify-between">

              <div class="card">

                <div class="image">
                  <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/7-1.jpg" preload="none">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/7-1-hd.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    Тег video не поддерживается вашим браузером.
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/video/7-1-hd.mp4">Скачайте видео</a>.
                  </video>
                </div>

                <div class="play">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
                </div>

              </div>

              <div class="card">

                <div class="image">
                  <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/7-2.jpg" preload="none">
                    <!-- <source src="video/duel.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/7-2-hd.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    <!-- <source src="video/duel.webm" type='video/webm; codecs="vp8, vorbis"'> -->
                    Тег video не поддерживается вашим браузером.
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/video/7-2-hd.mp4">Скачайте видео</a>.
                  </video>
                </div>

                <div class="play">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
                </div>

              </div>

              <div class="card d-none">

                <div class="image">
                  <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/7-3.jpg" preload="none">
                    <!-- <source src="video/duel.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/7-3-hd.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    <!-- <source src="video/duel.webm" type='video/webm; codecs="vp8, vorbis"'> -->
                    Тег video не поддерживается вашим браузером.
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/video/7-3-hd.mp4">Скачайте видео</a>.
                  </video>
                </div>

                <div class="play">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
                </div>

              </div>

              <div class="card d-none">

                <div class="image">
                  <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/7-4.jpg" preload="none">
                    <!-- <source src="video/duel.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/7-4-hd.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    <!-- <source src="video/duel.webm" type='video/webm; codecs="vp8, vorbis"'> -->
                    Тег video не поддерживается вашим браузером.
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/video/7-4-hd.mp4">Скачайте видео</a>.
                  </video>
                </div>

                <div class="play">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
                </div>

              </div>

              <div class="card d-none">

                <div class="image">
                  <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/7-5.jpg" preload="none">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/7-5-hd.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    Тег video не поддерживается вашим браузером.
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/video/7-5-hd.mp4">Скачайте видео</a>.
                  </video>
                </div>

				<div class="play">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
                </div>

              </div>

            </div>

            <div class="pagination">
              <div class="item active"></div>
              <div class="item"></div>
              <div class="item"></div>
              <div class="item"></div>
              <div class="item"></div>
            </div>

          </div>

        </div>

      </div>

      <div class="block-6">

        <div class="container">
          <div class="">
            <h2>Получить парник <span>в подарок</span></h2>
            <p>Оставьте, пожалуйста, ваши контактные данные. В ближайшее время с Вами свяжется наш специалист и проконсультирует Вас.</p>
            <form class="block-6-form" action="index.html" method="get">
              <input class="d-none" type="hidden" name="info" value="Получить парник в подарок">
              <input class="input-text" type="text" name="name" value="" placeholder="Ваше имя">
              <input class="input-text" type="tel" name="tel" value="" placeholder="Ваш телефон">
              <button class="btn-green send-form" type="submit" name="submit">Оставить заявку</button>
              <div class="form-checkbox d-flex flex-justify-start flex-align-center">
                <input class="d-none" type="checkbox" name="block-6-privacy" value="" id="block-6-privacy">
                <label class="checkbox-field" for="block-6-privacy"></label>
                <label class="checkbox-label" for="block-6-privacy">Я согласен с <a href="#">обработкой персональных данных</a></label>
              </div>
            </form>
          </div>
        </div>

      </div>

      <!-- <div class="block-5">
        <a name="video"></a>

        <div class="container">

          <div class="title">
            <h2>Посмотрите наши видео</h2>
            <div class="decoration d-flex flex-justify-center">
              <div class="line"><div class="pointer"></div></div>
            </div>
          </div>

          <div class="slider" id="video-slider">

            <div class="left">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/image/left-icon.svg" alt="left-arrow">
            </div>
            <div class="right">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/image/right-icon.svg" alt="right-arrow">
            </div>

            <div class="card-block d-flex flex-justify-between">

              <div class="card">

                <div class="image">
                  <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/4-1.jpg" preload="none">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/4-1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    Тег video не поддерживается вашим браузером.
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/video/4-1.mp4">Скачайте видео</a>.
                  </video>
                </div>

                <div class="play">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
                </div>

              </div>

              <div class="card">

                <div class="image">
                  <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/4-2.jpg" preload="none">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/4-2.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    Тег video не поддерживается вашим браузером.
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/video/4-2.mp4">Скачайте видео</a>.
                  </video>
                </div>

                <div class="play">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
                </div>

              </div>

              <div class="card d-none">

                <div class="image">
                  <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/4-3.jpg" preload="none">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/4-3.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    Тег video не поддерживается вашим браузером.
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/video/4-3.mp4">Скачайте видео</a>.
                  </video>
                </div>

                <div class="play">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
                </div>

              </div>

              <div class="card d-none">

                <div class="image">
                  <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/4-4.jpg" preload="none">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/4-4.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    Тег video не поддерживается вашим браузером.
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/video/4-4.mp4">Скачайте видео</a>.
                  </video>
                </div>

                <div class="play">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
                </div>

              </div>

              <div class="card d-none">

                <div class="image">
                  <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/4-5.jpg" preload="none">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/4-5.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    Тег video не поддерживается вашим браузером.
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/video/4-5.mp4">Скачайте видео</a>.
                  </video>
                </div>

                <div class="play">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
                </div>

              </div>

            </div>

            <div class="pagination">
              <div class="item active"></div>
              <div class="item"></div>
              <div class="item"></div>
              <div class="item"></div>
              <div class="item"></div>
            </div>

          </div>

        </div>

      </div> -->

      <div class="block-8">
        <a name="gallery"></a>

        <div class="container">

          <div class="title">
            <h2>Примеры наших работ</h2>
            <div class="decoration d-flex flex-justify-center">
              <div class="line"><div class="pointer"></div></div>
            </div>
          </div>

          <div class="slider" id="gallery-slider">

            <div class="left">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/image/left-icon.svg" alt="left-arrow">
            </div>
            <div class="right">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/image/right-icon.svg" alt="right-arrow">
            </div>

            <div class="card-block d-flex flex-justify-between">

              <div class="card">

                <div class="image">
                  <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/8-1.jpg" preload="none">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/8-1-hd.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    Тег video не поддерживается вашим браузером.
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/video/8-1-hd.mp4">Скачайте видео</a>.
                  </video>
                </div>

                <div class="play">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
                </div>

              </div>

              <div class="card">

                <div class="image">
                  <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/8-2.jpg" preload="none">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/8-2-hd.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    Тег video не поддерживается вашим браузером.
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/video/8-2-hd.mp4">Скачайте видео</a>.
                  </video>
                </div>

                <div class="play">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
                </div>

              </div>

              <div class="card">

                <div class="image">
                  <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/8-3.jpg" preload="none">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/8-3.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    Тег video не поддерживается вашим браузером.
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/video/8-3.mp4">Скачайте видео</a>.
                  </video>
                </div>

                <div class="play">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
                </div>

              </div>

              <div class="card d-none">

                <div class="image">
                  <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/8-4.jpg" preload="none">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/8-4-hd.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    Тег video не поддерживается вашим браузером.
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/video/8-4-hd.mp4">Скачайте видео</a>.
                  </video>
                </div>

                <div class="play">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
                </div>

              </div>

              <div class="card d-none">

                <div class="image">
                  <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/8-5.jpg" preload="none">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/8-5-hd.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    Тег video не поддерживается вашим браузером.
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/video/8-5-hd.mp4">Скачайте видео</a>.
                  </video>
                </div>

                <div class="play">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
                </div>

              </div>

              <div class="card d-none">

                <div class="image">
                  <video controls="controls" poster="<?php echo get_template_directory_uri(); ?>/assets/video/8-6.jpg" preload="none">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/8-6.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    Тег video не поддерживается вашим браузером.
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/video/8-6.mp4">Скачайте видео</a>.
                  </video>
                </div>

                <div class="play">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/youtube.svg" alt="play">
                </div>

              </div>

            </div>

            <div class="pagination">
              <div class="item active"></div>
              <div class="item"></div>
              <div class="item"></div>
              <div class="item"></div>
              <div class="item"></div>
              <div class="item"></div>
            </div>

          </div>

        </div>

      </div>

      <div class="block-9">

        <div class="bg-image position-1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg-9-1.jpg" alt="bg-9-1">
        </div>

        <div class="container">

          <div class="title">
            <h2>Обращаем внимание!</h2>
            <div class="decoration d-flex flex-justify-center">
              <div class="line"><div class="pointer"></div></div>
            </div>
            <p>
              Наша компания не комплектует каркасы теплиц сотовым поликарбонатом низкого качества, дабы удешевить комплект и снизить рыночную стоимость.
              Мы предлагаем выбор.
              Не ищите сомнительной выгоды, не покупайте теплицы на один сезон.
              Наши теплицы обладают высоким качеством, надежностью и долговечностью.
              Устойчивы к снеговым нагрузкам и сибирским зимам.
              Все каркасы имеют отличную геометрию, минимум сварных соединений, все крепежные элементы сделаны из толстостенного оцинкованного металла, то есть устойчивы к коррозии.
              Дуги ЦЕЛЬНЫЕ, НЕРАЗБОРНЫЕ - не имеют лишних соединений, по типу "труба в трубу".
              Каркасы жесткие и очень крепкие.
              В прайсе представлена максимально честная и подробная информация, никаких дополнительных доплат и надбавок.
            </p>
          </div>

          <div class="map">
            <div class="google">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.84991736983!2d65.58396281626115!3d57.13962788094697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43bbe13739f66d5f%3A0x6d4c55054ebb021e!2z0YPQuy4g0J_RgNC20LXQstCw0LvRjNGB0LrQvtCz0L4sIDM2LCDQotGO0LzQtdC90YwsINCi0Y7QvNC10L3RgdC60LDRjyDQvtCx0LsuLCA2MjUwMjM!5e0!3m2!1sru!2sru!4v1612005402264!5m2!1sru!2sru" width="100%" height="480" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>

        </div>

      </div>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
