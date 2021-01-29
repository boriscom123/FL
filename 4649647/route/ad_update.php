<?php
$config = require "./config.php";

$route_name = "ad_update";
$visible_footer = false;

if( !$_SESSION['cp_auth'][ $config["private_hash"] ] && !$_SESSION['cp_control_board'] ){

	if(!$_SESSION["profile"]["id"]){
	   header("location:" . _link("auth", true) );
	}

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

if( $_SESSION['cp_control_board'] ){

   $data = $Ads->get("ads_id=?",[$id_ad]);

}else{

   $data = $Ads->get("ads_id='$id_ad' and ads_id_user='".intval($_SESSION["profile"]["id"])."' and clients_status IN(0,1) and ads_status IN(0,7,2,1)");

}

if(!$data){
	$Main->response("404");
}


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
	  	$list_period .= '<span data-value="'.$value.'" data-name="'.$value.' '.ending($value, "день", "дня","дней" ).'" data-input="period" >'.$value.' '.ending($value, $ULang->t("день"), $ULang->t("дня"), $ULang->t("дней") ).'</span>';
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

$list_filters = $Filters->load_filters_ad($data["ads_id_cat"],$Filters->getVariants($data["ads_id"]));

if($data["ads_metro_ids"]){

	$getMetro = getAll("select * from uni_metro where id IN(".$data["ads_metro_ids"].")");

	if(count($getMetro)){
		foreach ($getMetro as $key => $value) {
			$main = findOne("uni_metro", "id=?", [$value["parent_id"]]);
			$list_metro .= '
	           <span><i style="background-color:'.$main["color"].';"></i>'.$value["name"].' <i class="las la-times ads-metro-delete"></i><input type="hidden" value="'.$value["id"].'" name="metro[]"></span>
			';
		}
	}

}

$getArea = getAll("select * from uni_city_area where city_area_id_city=? order by city_area_name asc", [$data["ads_city_id"]]);

if(count($getArea)){
	foreach ($getArea as $key => $value) {
		if( in_array($value["city_area_id"], explode(",", $data["ads_area_ids"]) ) ){
            $active = 'class="uni-select-item-active"'; $checked = 'checked=""';			
		}else{
            $active = ''; $checked = '';
		}
		$list_area .= '
           <label '.$active.' > <input '.$checked.' type="checkbox" name="area[]" value="'.$value["city_area_id"].'" > <span>'.$value["city_area_name"].'</span> <i class="la la-check"></i> </label>
		';
	}
}

$visible_metro = findOne("uni_metro","city_id=?",[$data["ads_city_id"]]);

echo $Main->tpl("ad_update.tpl", compact( 'Seo','Geo','Main','visible_footer','list_categories','Ads','out_metro','out_area','route_name','Profile','CategoryBoard','getCategoryBoard','data','settings','list_period','list_currency','Filters','list_filters','list_metro','list_area','Banners','visible_metro', 'ULang' ) );

?>