<?php

$config = require "./config.php";

$route_name = "promo";
$visible_footer = false;

$Main = new Main();
$settings = $Main->settings();

$Main = new Main();
$Seo = new Seo();
$Geo = new Geo();
$Profile = new Profile();
$CategoryBoard = new CategoryBoard();
$Banners = new Banners();
$ULang = new ULang();

$getCategoryBoard = $CategoryBoard->getCategories("where category_board_visible=1");

if( $name == "services" ){
  $tpl = "promo_services.tpl";
}else if( $name == "secure" ){
  $tpl = "promo_secure.tpl";	
}else{
  $Main->response(404);
}

echo $Main->tpl($tpl, compact( 'Seo','Geo','Main','visible_footer','route_name','settings','config','data','Profile','CategoryBoard','Banners','getCategoryBoard','ULang' ) );

?>