<?php 
$image = $Ads->getImages($value["ads_images"]);
?>
<div class="col-lg-3 col-md-3 col-sm-6 col-6" >
  <div class="item-grid" title="<?php echo $value["ads_title"]; ?>" >
     <div class="item-grid-label-status" > <?php echo $Ads->publicationAndStatus($value); ?> </div>
     <a class="item-grid-img" href="<?php echo $Ads->alias($value); ?>" >
       <img alt="<?php echo $value["ads_title"]; ?>" src="<?php echo Exists($config["media"]["big_image_ads"],$image[0],$config["media"]["no_image"]); ?>" >
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
        <a href="<?php echo $Ads->alias($value); ?>" ><?php echo custom_substr($value["ads_title"], 35); ?></a>
     </div>
  </div>
</div>