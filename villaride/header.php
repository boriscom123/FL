<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Villaraid
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'villaraid' ); ?></a>

    <header id="masthead" class="header w-100 site-header">

      <div class="container d-flex flex-justify-between flex-align-center h-100">

        <a class="header-logo" href="http://villaraid.ru/">
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

        <button class="header-button btn-white" type="button" name="button" id="header-button">Обратный звонок</button>

        <div class="mobile-navigation">
          &#9776;
          <ul class="d-none">
            <li><a href="#catalog">Каталог</a></li>
            <li><a href="#gallery">Галерея</a></li>
            <li><a href="#video">Видео</a></li>
            <li><a href="#feedback">Отзывы</a></li>
            <li><a href="#contacts">Контакты</a></li>
          </ul>
        </div>

      </div>

      <div class="mobile-header">
        <div class="">
          <a class="header-logo"href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.png" alt="logo">
          </a>
          <div class="header-tel">
            <a href="tel:8932321610304" rel="nofollow"><span>61 03 04</span></a>
            <!-- <p>Звонок по России бесплатный</p> -->
          </div>
        </div>
        <div class="mobile-navigation">
          &#9776;
          <ul class="d-none">
            <li><a href="#catalog">Каталог</a></li>
            <li><a href="#gallery">Галерея</a></li>
            <li><a href="#video">Видео</a></li>
            <li><a href="#feedback">Отзывы</a></li>
            <li><a href="#contacts">Контакты</a></li>
          </ul>
        </div>
      </div>

    </header>
