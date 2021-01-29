<?php
$config = require "./config.php";
$static_msg = require "./static/msg.php";
$route_name = "catalog";
$visible_footer = true;

$Main = new Main();
$settings = $Main->settings();

$CategoryBoard = new CategoryBoard(); 
$Ads = new Ads();
$Seo = new Seo();
$Geo = new Geo();
$Profile = new Profile();
$Filters = new Filters();
$Banners = new Banners();
$Elastic = new Elastic();
$ULang = new ULang();

if($_SESSION["geo"]["action"] == "uri" || !$_SESSION["geo"]){
    $Geo->set( array( "city_id" => $data["geo"]["city_id"] , "region_id" => $data["geo"]["region_id"] , "country_id" => $data["geo"]["country_id"], "action" => "uri" ) );
}

if($_SESSION["geo"]["action"] == "modal"){
    
    $uri = explode("/", trim( $_SERVER['REQUEST_URI'] , "/") );

	if($uri[0] != $_SESSION["geo"]["alias"]){
		$_SESSION["geo"]["action"] = "uri";
		header( "location: ".catalogLocationtUri() );
	}

}

if( !$_GET["search"] ){

if($data["filter"]){

	$ads_filters_alias_title = $ULang->t( $data["filter"]["ads_filters_alias_title"] , [ "table" => "uni_ads_filters_alias", "field" => "ads_filters_alias_title" ] );
    
    $data["meta_title"] = $ads_filters_alias_title;
	$data["h1"] = $ads_filters_alias_title;
	$data["meta_desc"] = $ads_filters_alias_title;
	$data["breadcrumb"] = $CategoryBoard->breadcrumb($getCategoryBoard,$data["category"]["category_board_id"],'
                  <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{LINK}"><span itemprop="name">{NAME}</span></a></li>
                ') . '<li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span itemprop="name">'.$ads_filters_alias_title.'</span></li>
	';

	parse_str("filter[".$data["filter"]["ads_filters_items_id_filter"]."][]=".$data["filter"]["ads_filters_alias_id_filter_item"], $data["param_filter"]);

}elseif($data["seo_filter"]){

	$Filters->viewSeoFilter( $data["seo_filter"]["seo_filters_id"] );

	$seo_filters_title = $ULang->t( $data["seo_filter"]["seo_filters_title"] , [ "table" => "uni_seo_filters", "field" => "seo_filters_title" ] );
	$seo_filters_desc = $ULang->t( $data["seo_filter"]["seo_filters_desc"] , [ "table" => "uni_seo_filters", "field" => "seo_filters_desc" ] );
	$seo_filters_text = $ULang->t( $data["seo_filter"]["seo_filters_text"] , [ "table" => "uni_seo_filters", "field" => "seo_filters_text" ] );
    
    $data["meta_title"] = $seo_filters_title;
	$data["h1"] = $seo_filters_title;
	$data["meta_desc"] = $seo_filters_desc;
	$data["seo_text"] = $seo_filters_text;
	$data["breadcrumb"] = $CategoryBoard->breadcrumb($getCategoryBoard,$data["category"]["category_board_id"],'
                  <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{LINK}"><span itemprop="name">{NAME}</span></a></li>
                ') . '<li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span itemprop="name">'.$seo_filters_title.'</span></li>
	';

	parse_str($data["seo_filter"]["seo_filters_params"], $data["param_filter"]);

}elseif($data["category"]){
    
    $data["meta_title"] = $Seo->out(["page" => "board", "field" => "meta_title"], $data);
	$data["h1"] = $Seo->out(["page" => "board", "field" => "h1"], $data);
	$data["meta_desc"] = $Seo->out(["page" => "board", "field" => "meta_desc"], $data);
	if(!$_GET["filter"]) $data["seo_text"] = $Seo->out(["page" => "board", "field" => "text"], $data);
	$data["breadcrumb"] = $CategoryBoard->breadcrumb($getCategoryBoard,$data["category"]["category_board_id"],'
                  <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{LINK}"><span itemprop="name">{NAME}</span></a></li>
                ');
	$data["param_filter"] = $_GET;

}elseif($_SESSION["geo"]){
    
    $data["meta_title"] = $static_msg["18"];
	$data["h1"] = $static_msg["18"];
	$data["meta_desc"] = "";
	$data["breadcrumb"] = '<li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span itemprop="name">'.$data["h1"].'</span></li>';
	$data["param_filter"] = $_GET;    

}

}else{
	$data["meta_title"] = $static_msg["50"] . ' "'.$_GET["search"].'"';
	$data["h1"] = $static_msg["50"] . ' "'.$_GET["search"].'"';
	$data["meta_desc"] = "";
	$data["param_filter"]["search"] = $_GET["search"];
}

$data["count_filters"] = $Filters->countFilters($data["category"]["category_board_id"]);
$data["count_get_filters"] = $Filters->countGetFilters( $data["param_filter"] );

$data["city_areas"] = getAll("select * from uni_city_area where city_area_id_city=? order by city_area_name asc", [ intval($_SESSION["geo"]["data"]["city_id"]) ]);
$data["city_metro"] = getAll("select * from uni_metro where city_id=? and parent_id!=0 Order by name ASC", [ intval($_SESSION["geo"]["data"]["city_id"]) ]);

echo $Main->tpl("catalog.tpl", compact( 'Seo','Geo','Main','visible_footer','Ads','route_name','Profile','settings','CategoryBoard','data','getCategoryBoard', 'Filters', 'Banners', 'ULang' ) );

?>