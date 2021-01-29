<?php

$config = require "./config.php";

$route_name = "index";
$visible_footer = true;

$Main = new Main();
$settings = $Main->settings();

$Ads = new Ads();
$Main = new Main();
$Seo = new Seo();
$Geo = new Geo();
$Profile = new Profile();
$CategoryBoard = new CategoryBoard();
$Banners = new Banners();
$Filters = new Filters();
$Blog = new Blog();
$ULang = new ULang();
$Elastic = new Elastic();

$getCategoryBoard = $CategoryBoard->getCategories("where category_board_visible=1");

$data["seo_text"] = $Seo->out(array("page" => "index", "field" => "text"));

$data["article_rand"] = $Blog->getAll( ["query"=>"blog_articles_visible=1", "sort"=>"order by rand() limit 3"] );

$geo = $Ads->queryGeo() ? " and " . $Ads->queryGeo() : "";

$param_search = $Elastic->paramAdquery();
$param_search["query"]["bool"]["filter"][]["term"] = $Ads->arrayGeo();
$param_search["query"]["bool"]["filter"][]["term"]["ads_vip"] = 1;

$data["vip"] = $Ads->getAll( ["query"=>"ads_status='1' and clients_status IN(0,1) and ads_period_publication > now() and ads_vip='1' $geo limit 3", "param_search" => $param_search, "output" => 3 ] );

if($_SESSION["geo"]["alias"]){
  $data["vip_link"] = _link($_SESSION["geo"]["alias"]."/vip");
}else{
  $data["vip_link"] = _link($settings["country_default"]."/vip"); 
}

echo $Main->tpl("index.tpl", compact( 'Seo','Geo','Main','visible_footer','route_name','settings','config','data','Profile','CategoryBoard','Banners','getCategoryBoard', 'Ads', 'Blog', 'ULang' ) );

?>