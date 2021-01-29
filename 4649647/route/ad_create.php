<?php
$config = require "./config.php";

$route_name = "ad_create";
$visible_footer = false;

if(!$_SESSION["profile"]["id"]){
   header("location:" . _link("auth", true) );
}

$Main = new Main();
$settings = $Main->settings();

$CategoryBoard = new CategoryBoard(); 
$Ads = new Ads();
$Seo = new Seo();
$Geo = new Geo();
$Profile = new Profile();
$Filters = new Filters();
$Banners = new Banners();
$ULang = new ULang();

$getCategoryBoard = $CategoryBoard->getCategories("where category_board_visible=1");


if(count($getCategoryBoard["category_board_id_parent"][0])){
	foreach ($getCategoryBoard["category_board_id_parent"][0] as $key => $value) {
	  $list_categories .= '<span class="box-change-category-list-item" data-name="'.$value["category_board_name"].'" data-id="'.$key.'" >'.$value["category_board_name"].'</span>';
	}
}

if($settings["ad_create_period"]){
	$ad_create_period_list = explode(",", $settings["ad_create_period_list"]);
	if ($ad_create_period_list) {
	  foreach ($ad_create_period_list as $key => $value) {
	  	$list_period .= '<span data-value="'.$value.'" data-name="'.$value.' '.ending($value, "день", "дня","дней" ).'" data-input="period" >'.$value.' '.ending($value, "день", "дня","дней" ).'</span>';
	  }
	}
}

if($settings["ad_create_currency"]){
	$getCurrency = getAll("select * from uni_currency order by id_position asc");
	if ($getCurrency) {
		foreach ($getCurrency as $key => $value) {
		   $list_currency .= '<span data-value="'.$value["code"].'" data-name="'.$value["sign"].'" data-input="currency" >'.$value["name"].' ('.$value["sign"].')</span>';
		}
	}
}

echo $Main->tpl("ad_create.tpl", compact( 'Seo','Geo','Main','visible_footer','list_categories','Ads','out_metro','out_area','route_name','Profile','CategoryBoard','getCategoryBoard','data','settings','list_period','list_currency','Filters','Banners', 'ULang' ) );


?>