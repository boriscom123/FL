<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom
 */
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!— START CSS —>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/fonts/fonts.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/libs/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/libs/css/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/libs/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/media.css">
	<!— END CSS —>
	<!— START JS —>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri (); ?>/libs/js/jquery.magnific-popup.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script src="<?php echo get_template_directory_uri (); ?>/libs/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri (); ?>/libs/js/jquery.sticky.js"></script>
    <script src="<?php echo get_template_directory_uri (); ?>/js/main.js"></script>
	<!— END JS —>
	<!— Yandex.Metrika counter —>
<script type="text/javascript" >
(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

ym(45984804, "init", {
clickmap:true,
trackLinks:true,
accurateTrackBounce:true,
webvisor:true
});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45984804" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!— /Yandex.Metrika counter —> 
<!-- calltouch -->
<script type="text/javascript">
    (function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}function p(cId){var a=d.getElementsByTagName("script")[0],s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)};s.type="text/javascript";s.async=true;s.src="https://mod.calltouch.ru/init.js?id="+cId;if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}})(window,document,"ct","29b0c8cb");
    </script>
          
    
    <title>Эконом заправка</title>
	
	<meta name="yandex-verification" content="70ae96eed0e2031f" />
	<script src="//code-ya.jivosite.com/widget/dtfpncfgPe" async></script>
	
<!-- 	quiz -->
	<!-- Marquiz script start -->
<script src="//script.marquiz.ru/v1.js" type="application/javascript"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  Marquiz.init({ 
    host: '//quiz.marquiz.ru', 
    id: '5fa96854fa805e0044f0573f', 
    autoOpen: false, 
    autoOpenFreq: 'once', 
    openOnExit: false 
  });
});
</script>
<!-- Marquiz script end -->
<?php wp_head(); ?>
</head>

<body>
	    <div class="preloader">
        <div class="preloader__row">
          <div class="preloader__item"></div>
          <div class="preloader__item"></div>
        </div>
      </div>

      <script>
        window.onload = function () {
          document.body.classList.add('loaded_hiding');
          window.setTimeout(function () {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
          }, 500);
        }
      </script>
<!-- HEADER -->
    <header id="sticker">
    <div class="container">
        <a href="#" class="logo"><img src="<?php the_field('logo'); ?>" alt=""></a>
        <a href="#" class="menu-toggle">
            <svg class="ham ham3" viewBox="0 0 100 100" width="50">
                <path
                      class="line top"
                      d="m 70,33 h -40 c -11.092231,0 11.883874,13.496726 -3.420361,12.956839 -0.962502,-2.089471 -2.222071,-3.282996 -4.545687,-3.282996 -2.323616,0 -5.113897,2.622752 -5.113897,7.071068 0,4.448316 2.080609,7.007933 5.555839,7.007933 2.401943,0 2.96769,-1.283974 4.166879,-3.282995 2.209342,0.273823 4.031294,1.642466 5.857227,-0.252538 v -13.005715 16.288404 h 7.653568" />
                <path
                      class="line middle"
                      d="m 70,50 h -40 c -5.6862,0 -8.534259,5.373483 -8.534259,11.551069 0,7.187738 3.499166,10.922274 13.131984,10.922274 11.021777,0 7.022787,-15.773343 15.531095,-15.773343 3.268142,0 5.177031,-2.159429 5.177031,-6.7 0,-4.540571 -1.766442,-7.33533 -5.087851,-7.326157 -3.321409,0.0092 -5.771288,2.789632 -5.771288,7.326157 0,4.536525 2.478983,6.805271 5.771288,6.7" />
                <path
                      class="line bottom"
                      d="m 70,67 h -40 c 0,0 -3.680675,0.737051 -3.660714,-3.517857 0.02541,-5.415597 3.391687,-10.357143 10.982142,-10.357143 4.048418,0 17.88928,0.178572 23.482143,0.178572 0,2.563604 2.451177,3.403635 4.642857,3.392857 2.19168,-0.01078 4.373905,-1.369814 4.375,-3.392857 0.0011,-2.023043 -1.924401,-2.589191 -4.553571,-4.107143 -2.62917,-1.517952 -4.196429,-1.799562 -4.196429,-3.660714 0,-1.861153 2.442181,-3.118811 4.196429,-3.035715 1.754248,0.0831 4.375,0.890841 4.375,3.125 2.628634,0 6.160714,0.267857 6.160714,0.267857 l -0.178571,-2.946428 10.178571,0 -10.178571,0 v 6.696428 l 8.928571,0 -8.928571,0 v 7.142858 l 10.178571,0 -10.178571,0" />
              </svg>
        </a>
        <nav class="main-menu">
          <ul class="clearfix">
            <li><a href="#services">Услуги</a></li>
            <li><a href="#price">Стоимость</a></li>
            <li><a href="#brands">Бренды</a></li>
            <li><a href="#about">О компании</a></li>
            <li><a href="#reviews">Отзывы</a></li>
            <li><a href="#contacts">Контакты</a></li>
          </ul>
        </nav> 
        <div class="tel-block">
            <p class="tel"><a href="#" class="touchnumber"><?php the_field('telephone_header'); ?></a></p>
            <p class="gr"><?php the_field('schedule_header'); ?></p>
        </div>
    </div>
      </header>
<!-- HEADER -->   
