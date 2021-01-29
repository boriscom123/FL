<?php
$config = require "./config.php";
$static_msg = require "./static/msg.php";

$route_name = "profile";
$visible_footer = true;

$Main = new Main();
$settings = $Main->settings();

$CategoryBoard = new CategoryBoard(); 
$Main = new Main();
$Ads = new Ads();
$Seo = new Seo();
$Geo = new Geo();
$Profile = new Profile();
$Banners = new Banners();
$ULang = new ULang();

$getCategoryBoard = $CategoryBoard->getCategories("where category_board_visible=1");

$array_tabs = array("ad", "sold", "archive" , "orders", "favorites", "settings", "balance", "history", "reviews");

$user = $Profile->oneUser(" where clients_id_hash=?" , array( clear($id_user) ) );

if( $user["clients_id"] == intval($_SESSION['profile']['id']) ){

	$data["advanced"] = true;

    if($action) if( !in_array($action, $array_tabs) ) $Main->response(404);
    
}else{
    
    $data["advanced"] = false;

	  if($action && $action != "reviews") header("Location: " . _link( "user/".$id_user ) );

}

if(!$user){ $Main->response(404); }

if($action == "ad"){
  $data["page_name"] = $ULang->t("Мои объявления");
}elseif($action == "orders"){
  $data["page_name"] = $ULang->t("Мои заказы");
}elseif($action == "favorites"){
  $data["page_name"] = $ULang->t("Избранное");
}elseif($action == "settings"){
  $data["page_name"] = $ULang->t("Настройки");
}elseif($action == "balance"){
  $data["page_name"] = $ULang->t("Кошелек");
}elseif($action == "history"){
  $data["page_name"] = $ULang->t("История платежей");
}elseif($action == "reviews"){
  $data["page_name"] = $ULang->t("Отзывы");
}else{
  $data["page_name"] = $ULang->t("Мои объявления");
}
 
$data["ratings"] = $Profile->outRating( $user["clients_id"] );
$data["reviews"] = getAll("select * from uni_clients_reviews INNER JOIN `uni_clients` ON `uni_clients`.clients_id = `uni_clients_reviews`.clients_reviews_from_id_user where clients_reviews_id_user=? order by clients_reviews_id desc", [ $user["clients_id"] ]);
$data["share"] = $Main->share( array( "title" => $static_msg["1"] . " ".$settings["site_name"].". ".$static_msg["2"], "image" => $Profile->userAvatar($user["clients_avatar"]), "url" => _link( "user/".$id_user ) ) );


if( $action == "ad" || !$action ){

$data["ad"] = $Ads->getAll( [ "navigation" => true, "page" => $_GET["page"], "query" => "ads_id_user='".$user["clients_id"]."' and ads_status='1' and ads_period_publication > now()", "sort" => "order by ads_id desc" ] );
$data["sold"] = $Ads->getAll( [ "navigation" => true, "page" => $_GET["page"], "query" => "ads_id_user='".$user["clients_id"]."' and ads_status IN(5,4)", "sort" => "order by ads_id desc" ] );
$data["archive"] = $Ads->getAll( ["navigation" => true, "page" => $_GET["page"], "query" => "ads_id_user='".$user["clients_id"]."' and (ads_status NOT IN(1,5,4,8) or ads_period_publication < now())", "sort" => "order by ads_id desc" ] );

}

$data["locked"] = findOne( "uni_chat_locked", "chat_locked_user_id=? and chat_locked_user_id_locked=?", array(intval($_SESSION['profile']['id']),$user["clients_id"]) );

if( $data["advanced"] ){
  
  if( $action == "orders" ){

  $data["orders"]["buy"] = getAll("select * from uni_secure where secure_id_user_buyer=? order by secure_id desc", [ intval($_SESSION['profile']['id']) ]);
  $data["orders"]["sell"] = getAll("select * from uni_secure where secure_id_user_seller=? order by secure_id desc", [ intval($_SESSION['profile']['id']) ]);

  }

  $data["favorites"] = getAll( "select * from uni_favorites INNER JOIN `uni_ads` ON `uni_ads`.ads_id = `uni_favorites`.favorites_id_ad where favorites_id_user=? and ads_status!=?", [intval($_SESSION['profile']['id']),8] );

  if($settings["payment_variant"]){
    $data["payments"] = getAll("select * from uni_payments where id IN(".$settings["payment_variant"].")");
  }else{
    $data["payments"] = [];
  }

  $data["notifications_param"] = $Profile->paramNotifications($user["clients_notifications"]);

}

$user["clients_bank_card"] = decrypt($user["clients_bank_card"]);
$data["new_messages"] = $Profile->getMessage();

echo $Main->tpl("profile.tpl", compact( 'Seo','Geo','Main','visible_footer','Ads','route_name','list_services','data','Profile','languages_content','user','list_chat_users','action','list_complaints','settings','getCategoryBoard','CategoryBoard','Banners','ULang' ) );

?>