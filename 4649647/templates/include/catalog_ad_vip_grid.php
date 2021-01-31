<?php
$Ads->updateCD($value["ads_id"]);
$image = $Ads->getImages($value["ads_images"]);
$service = $Ads->adServices($value["ads_id"]);
if($service[2]) { ?>
  <div class="my-col-5" >
    <div class="item-grid <?php echo $service[2] || $service[3] ? "ads-highlight" : ""; ?>" title="<?php echo $value["ads_title"]; ?>" >
       <a class="item-grid-img" style="height: 180px;" href="<?php echo $Ads->alias($value); ?>" >

         <div class="item-labels" >
            <?php
            echo $service[2] || $service[3] ? "<div data-tippy-placement=\"top\" title=\"".$ULang->t("Вип объявление")."\" class=\"item-vip\" > <i class=\"las la-crown\"></i> </div>" : "";
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

         <img alt="<?php echo $value["ads_title"]; ?>" class="lazy" data-original="<?php echo Exists($config["media"]["big_image_ads"],$image[0],$config["media"]["no_image"]); ?>" src="<?php echo $settings["path_tpl_image"] ?>/loader_img.gif"  >
         <span class="item-grid-city" ><?php echo $value["city_name"]; ?></span>
       </a>
       <div class="item-grid-info" >
         <a href="<?php echo $Ads->alias($value); ?>" ><?php echo custom_substr($value["ads_title"], 35); ?></a>
          <div class="row" >
             <div class="col-lg-9 col-md-9 col-sm-9 col-9" >
               <?php
                 if($value["ads_price"]){
                    echo '<span class="item-grid-info-price" >' . $Main->price($value["ads_price"], $value["ads_currency"]) . '</span>';
                 }else{
                    echo '<span class="item-grid-info-price" >'.$ULang->t("Бесплатно").'</span>';
                 }
               ?>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-right" >
               <?php echo $Ads->adActionFavorite($value, "catalog"); ?>
             </div>
          </div>
          <p><?php echo DateTime::createFromFormat('Y-m-d', explode(' ', $value['ads_datetime_add'])[0])->format('d-m-Y');; ?></p>
       </div>
    </div>
  </div>
  <div class="my-col-5" >
    <div class="item-grid <?php echo $service[2] || $service[3] ? "ads-highlight" : ""; ?>" title="<?php echo $value["ads_title"]; ?>" >
       <a class="item-grid-img" style="height: 180px;" href="<?php echo $Ads->alias($value); ?>" >

         <div class="item-labels" >
            <?php
            echo $service[2] || $service[3] ? "<div data-tippy-placement=\"top\" title=\"".$ULang->t("Вип объявление")."\" class=\"item-vip\" > <i class=\"las la-crown\"></i> </div>" : "";
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

         <img alt="<?php echo $value["ads_title"]; ?>" class="lazy" data-original="<?php echo Exists($config["media"]["big_image_ads"],$image[0],$config["media"]["no_image"]); ?>" src="<?php echo $settings["path_tpl_image"] ?>/loader_img.gif"  >
         <span class="item-grid-city" ><?php echo $value["city_name"]; ?></span>
       </a>
       <div class="item-grid-info" >
         <a href="<?php echo $Ads->alias($value); ?>" ><?php echo custom_substr($value["ads_title"], 35); ?></a>
          <div class="row" >
             <div class="col-lg-9 col-md-9 col-sm-9 col-9" >
               <?php
                 if($value["ads_price"]){
                    echo '<span class="item-grid-info-price" >' . $Main->price($value["ads_price"], $value["ads_currency"]) . '</span>';
                 }else{
                    echo '<span class="item-grid-info-price" >'.$ULang->t("Бесплатно").'</span>';
                 }
               ?>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-right" >
               <?php echo $Ads->adActionFavorite($value, "catalog"); ?>
             </div>
          </div>
          <p><?php echo DateTime::createFromFormat('Y-m-d', explode(' ', $value['ads_datetime_add'])[0])->format('d-m-Y');; ?></p>
       </div>
    </div>
  </div>
  <div class="my-col-5" >
    <div class="item-grid <?php echo $service[2] || $service[3] ? "ads-highlight" : ""; ?>" title="<?php echo $value["ads_title"]; ?>" >
       <a class="item-grid-img" style="height: 180px;" href="<?php echo $Ads->alias($value); ?>" >

         <div class="item-labels" >
            <?php
            echo $service[2] || $service[3] ? "<div data-tippy-placement=\"top\" title=\"".$ULang->t("Вип объявление")."\" class=\"item-vip\" > <i class=\"las la-crown\"></i> </div>" : "";
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

         <img alt="<?php echo $value["ads_title"]; ?>" class="lazy" data-original="<?php echo Exists($config["media"]["big_image_ads"],$image[0],$config["media"]["no_image"]); ?>" src="<?php echo $settings["path_tpl_image"] ?>/loader_img.gif"  >
         <span class="item-grid-city" ><?php echo $value["city_name"]; ?></span>
       </a>
       <div class="item-grid-info" >
         <a href="<?php echo $Ads->alias($value); ?>" ><?php echo custom_substr($value["ads_title"], 35); ?></a>
          <div class="row" >
             <div class="col-lg-9 col-md-9 col-sm-9 col-9" >
               <?php
                 if($value["ads_price"]){
                    echo '<span class="item-grid-info-price" >' . $Main->price($value["ads_price"], $value["ads_currency"]) . '</span>';
                 }else{
                    echo '<span class="item-grid-info-price" >'.$ULang->t("Бесплатно").'</span>';
                 }
               ?>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-right" >
               <?php echo $Ads->adActionFavorite($value, "catalog"); ?>
             </div>
          </div>
          <p><?php echo DateTime::createFromFormat('Y-m-d', explode(' ', $value['ads_datetime_add'])[0])->format('d-m-Y');; ?></p>
       </div>
    </div>
  </div>
<?php
}
?>
