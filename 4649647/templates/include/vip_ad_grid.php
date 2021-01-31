<?php
$Ads->updateCD($value["ads_id"]);
$image = $Ads->getImages($value["ads_images"]);
$service = $Ads->adServices($value["ads_id"]);
print_r($Ads);
echo "Шаблон формирования ВИП ОБъявлений";
?>
<div class="col-lg-3 col-md-3 col-sm-6 col-12" >
<div class="item-grid" title="<?php echo $value["ads_title"]; ?>" >
   <a class="item-grid-img" href="<?php echo $Ads->alias($value); ?>" >

     <div class="item-labels" >
        <?php
        if($Ads->getStatusSecure($value)){
           ?>
           <div class="item-secure" data-tippy-placement="top" title="<?php echo $ULang->t("Доступна безопасная сделка"); ?>" > <i class="las la-shield-alt"></i> </div>
           <?php
        }
        if($value["ads_auction"]){
           ?>
           <div class="item-auction" data-tippy-placement="top" title="<?php echo $ULang->t("Аукцион"); ?>" > <i class="las la-gavel"></i> <span <?php echo $Ads->auctionTimeCompletion( $value["ads_auction_duration"], "pulse-time-grid" ); ?> ></span> </div>
           <?php
        }
        ?>
     </div>

     <img alt="<?php echo $value["ads_title"]; ?>" src="<?php echo Exists($config["media"]["big_image_ads"],$image[0],$config["media"]["no_image"]); ?>" >
     <span class="item-grid-city" ><?php echo $value["city_name"]; ?></span>
   </a>
   <div class="item-grid-info" >
      <div class="row" >
         <div class="col-lg-9 col-md-9 col-sm-9 col-9" >
           <?php
             if($value["ads_price"]){
                echo '<span class="item-list-price" >' . $Main->price($value["ads_price"], $value["ads_currency"]) . '</span>';
             }else{
                echo '<span class="item-list-price" >'.$ULang->t("Бесплатно").'</span>';
             }
           ?>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-right" >
           <?php echo $Ads->adActionFavorite($value, "catalog"); ?>
         </div>
      </div>
      <a href="<?php echo $Ads->alias($value); ?>" ><?php echo $value["ads_title"]; ?></a>
   </div>
</div>
</div>
