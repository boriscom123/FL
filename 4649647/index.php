<?php 
session_start();
define("unisitecms", true);
$config = require("config.php");
include_once("systems/classes/UniSite.php");
$Main = new Main();
$Profile = new Profile();
$Geo = new Geo();
$Banners = new Banners();
if( isset($_GET["search"]) && !$_GET["search"] ) 
{
    $link = ($_SESSION["geo"]["alias"] ? _link($_SESSION["geo"]["alias"]) : _link($settings["country_default"]));
    header("Location: " . $link);
    exit();
}

$pathinfo = pathinfo($_SERVER["REQUEST_URI"], PATHINFO_EXTENSION);
if( $pathinfo ) 
{
    (new Main())->response(404);
}

if( (!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] == "off") && $config["https"] ) 
{
    $redirect_url = "https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    header("Location: " . $redirect_url);
    exit();
}

if( strpos($_SERVER["REQUEST_URI"], $config["urlPrefix"]) !== false && $config["urlPrefix"] != "/" ) 
{
    $explode_uri = explode("/", trim($_SERVER["REQUEST_URI"], "/"));
    unset($explode_uri[0]);
    $_SERVER["REQUEST_URI"] = implode("/", $explode_uri);
}

if( isset($_GET["logout"]) ) 
{
    unset($_SESSION["profile"]);
}

if( file_exists($config["basePath"] . "/installment_access.php") ) 
{
    include($config["basePath"] . "/installment_access.php");
}

define("LANG_URI", langUri());
define("REQUEST_URI", requestUri());
define("REAL_REQUEST_URI", trim($_SERVER["REQUEST_URI"], "/"));
$_SERVER["REQUEST_URI"] = REQUEST_URI;
if( $settings["visible_lang_site"] ) 
{
    if( !LANG_URI ) 
    {
        if( !$_SESSION["langSite"]["iso"] && $settings["auto_lang_detection"] ) 
        {
            $SxGeo = new SxGeo($config["basePath"] . "/systems/libs/SxGeo/SxGeoCity.dat", SXGEO_BATCH | SXGEO_MEMORY);
            $getGeo = $SxGeo->getCityFull($_SERVER["REMOTE_ADDR"]);
            if( $getGeo["country"]["iso"] ) 
            {
                $findLang = findOne("uni_languages", "iso = ? and status = ?", [ $getGeo["country"]["iso"], 1 ]);
                if( $findLang ) 
                {
                    $getIso = $findLang->iso;
                }
                else
                {
                    $getIso = getLang();
                }

            }
            else
            {
                $getIso = getLang();
            }

        }
        else
        {
            $getIso = getLang();
        }

        header("Location: " . $config["urlPath"] . "/" . $getIso);
        exit();
    }
    else
    {
        $findLang = findOne("uni_languages", "iso = ? and status = ?", [ LANG_URI, 1 ]);
        if( $findLang ) 
        {
            $_SESSION["langSite"]["iso"] = $findLang->iso;
            $_SESSION["langSite"]["name"] = $findLang->name;
            $_SESSION["langSite"]["image"] = $findLang->image;
        }
        else
        {
            header("Location: " . $config["urlPath"] . "/" . getLang() . "/" . REAL_REQUEST_URI);
            exit();
        }

    }

}

$Main->accessSite();
$Geo->metrics();
$Banners->click();
$Main->createDir();
$Main->createRobots();
$Profile->checkAuth();
$Profile->setMode();
$Profile->sessionsFavorites();
$Profile->activation();
$Main->searchKeyword();
Router::route("", function()
{
    require("route/index.php");
}

);
Router::route("([a-zA-Z0-9\\-]+)/vip", function($alias_city)
{
    require("route/vip.php");
}

);
Router::route("ad/create", function()
{
    require("route/ad_create.php");
}

);
Router::route("ad/update/([0-9]+)", function($id_ad)
{
    require("route/ad_update.php");
}

);
Router::route("ad/publish/([0-9]+)", function($id_ad)
{
    require("route/ad_publish.php");
}

);
Router::route("user/([a-zA-Z0-9\\-]+)/([a-zA-Z0-9\\-]+)", function($id_user, $action)
{
    require("route/profile.php");
}

);
Router::route("user/([a-zA-Z0-9\\-]+)", function($id_user)
{
    require("route/profile.php");
}

);
Router::route("chat", function()
{
    require("route/chat.php");
}

);
Router::route("chat/([a-zA-Z0-9\\-]+)/([0-9]+)", function($id_user, $id_ad)
{
    require("route/chat.php");
}

);
Router::route("auth", function()
{
    require("route/auth.php");
}

);
Router::route("cities", function()
{
    require("route/cities.php");
}

);
Router::route("buy/([a-zA-Z0-9\\-]+)", function($id_ad)
{
    require("route/buy.php");
}

);
Router::route("order/([0-9]+)", function($id_order)
{
    require("route/order.php");
}

);
Router::route("pay/status/([a-zA-Z=]+)", function($status)
{
    require("route/pay_status.php");
}

);
Router::route("unsubscribe", function()
{
    require("route/unsubscribe.php");
}

);
Router::route("subscribe", function()
{
    require("route/subscribe.php");
}

);
Router::route("feedback", function()
{
    require("route/feedback.php");
}

);
Router::route("blog", function()
{
    require("route/blog.php");
}

);
Router::route("blog/(.*?)", function($riddle)
{
    require("route/blog.php");
}

);
Router::route("promo/([a-zA-Z]+)", function($name)
{
    require("route/promo.php");
}

);
Router::route("page/([a-zA-Z0-9\\-]+)", function($name)
{
    require("route/other_page.php");
}

);
Router::route("([a-zA-Z\\-]+)/(.*?)", function($alias_city, $riddle)
{
    $getCategoryBoard = (new CategoryBoard())->getCategories("where category_board_visible=1");
    $data["geo"] = (new Geo())->aliasCheckOut($alias_city);
    $data["category"] = $getCategoryBoard["category_board_chain"][$riddle];
    if( $data["geo"] && $data["category"] ) 
    {
        require("route/catalog.php");
    }
    else
    {
        $Ads = new Ads();
        $param = parseUriAd($riddle);
        $data["ad"] = $Ads->get("ads_id = ? and ads_alias = ? and city_alias = ? and category_board_alias = ?", [ $param["id"], $param["alias_ad"], $alias_city, $param["alias_cat"] ]);
        $data["category"] = $getCategoryBoard["category_board_id"][$data["ad"]["ads_id_cat"]];
        if( $data["ad"] ) 
        {
            require("route/ad_view.php");
        }
        else
        {
            $data["category"] = $getCategoryBoard["category_board_chain"][$alias_city . "/" . $riddle];
            if( $data["category"] ) 
            {
                header("Location: " . _link("cities"));
            }
            else
            {
                $param = parseUriFilter($riddle);
                $data["category"] = $getCategoryBoard["category_board_chain"][$param["alias_cat"]];
                $data["filter"] = getOne("select * from uni_ads_filters_alias INNER JOIN `uni_ads_filters_items` ON `uni_ads_filters_alias`.ads_filters_alias_id_filter_item = `uni_ads_filters_items`.ads_filters_items_id INNER JOIN `uni_ads_filters` ON `uni_ads_filters`.ads_filters_id = `uni_ads_filters_items`.ads_filters_items_id_filter where ads_filters_alias_alias=? and ads_filters_alias_id_cat=? and ads_filters_visible=?", [ $param["alias_filter"], $data["category"]["category_board_id"], 1 ]);
                if( $data["filter"] && $data["geo"] && $data["category"] ) 
                {
                    require("route/catalog.php");
                }
                else
                {
                    (new Main())->response(404);
                }

            }

        }

    }

}

);
Router::route("([a-zA-Z0-9\\-]+)", function($alias)
{
    $getCategoryBoard = (new CategoryBoard())->getCategories("where category_board_visible=1");
    $data["category"] = $getCategoryBoard["category_board_chain"][$alias];
    $data["geo"] = (new Geo())->aliasCheckOut($alias);
    if( $data["geo"] ) 
    {
        require("route/catalog.php");
    }
    else
    {
        $data["page"] = findOne("uni_pages", "alias=?", [ $alias ]);
        if( $data["page"] ) 
        {
            require("route/page.php");
        }
        else
        {
            if( $data["category"] ) 
            {
                header("Location: " . _link("cities"));
            }
            else
            {
                $data["seo_filter"] = getOne("select * from uni_seo_filters where seo_filters_alias=?", [ clear($alias) ]);
                if( $data["seo_filter"] ) 
                {
                    $data["category"] = $getCategoryBoard["category_board_chain"][$data["seo_filter"]["seo_filters_alias_category"]];
                    if( $data["category"] ) 
                    {
                        $data["geo"] = (new Geo())->aliasCheckOut($data["seo_filter"]["seo_filters_alias_geo"]);
                        require("route/catalog.php");
                    }
                    else
                    {
                        (new Main())->response(404);
                    }

                }
                else
                {
                    (new Main())->response(404);
                }

            }

        }

    }

}

);
Router::execute(trim(explode("?", $_SERVER["REQUEST_URI"])[0], "/"));
echo " ";
function parseMainDomain($domen)
{
    if( strpos($domen, "://") !== false ) 
    {
        $explode_protocol = explode("://", $domen);
        unset($explode_protocol[0]);
        $explode_point = explode(".", $explode_protocol[1]);
        if( $explode_point[0] == "www" ) 
        {
            unset($explode_point[0]);
        }

    }
    else
    {
        $explode_point = explode(".", $domen);
        if( $explode_point[0] == "www" ) 
        {
            unset($explode_point[0]);
        }

    }

    $domen = array_values($explode_point);
    if( count($domen) == 2 ) 
    {
        return implode(".", $domen);
    }
    else
    {
        if( count($domen) == 3 ) 
        {
            if( (mb_strlen($domen[1], "UTF-8") == 2 || mb_strlen($domen[1], "UTF-8") == 3) && (mb_strlen($domen[2], "UTF-8") == 2 || mb_strlen($domen[2], "UTF-8") == 3) ) 
            {
                return implode(".", $domen);
            }
            else
            {
                unset($domen[0]);
                return implode(".", $domen);
            }

        }
        else
        {
            if( count($domen) == 4 ) 
            {
                unset($domen[0]);
                return implode(".", $domen);
            }

        }

    }

}


