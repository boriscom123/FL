
<header class="d-block d-md-none" >
  <div class="top-toolbar schema-color-header" >

    <div class="top-toolbar-container" >

      <div class="row" >

         <div class="col-lg-6 col-md-4 col-sm-4 col-4" >

            <a class="h-logo" href="<?php echo _link(); ?>" title="<?php echo $ULang->t($settings["title"]); ?>" >
                <img src="<?php echo $settings["logotip"]; ?>" data-inv="<?php echo $settings["logo_color_inversion"]; ?>" width="100px" alt="<?php echo $ULang->t($settings["title"]); ?>">
            </a>

         </div>
         <div class="col-lg-6 col-md-8 col-sm-8 col-8 text-right" >

           <?php if($settings["visible_lang_site"]){ ?>
            <div class="toolbar-dropdown dropdown-hover">
              <span><img width="20px" style="margin-right: 5px;" src="<?php echo Exists( $config["media"]["other"],$_SESSION["langSite"]["image"],$config["media"]["no_image"] ); ?>"></span>
              <div class="toolbar-dropdown-box width-180 right-0 no-padding">

                   <div class="dropdown-box-list-link dropdown-lang-list">

                      <?php
                        $getLang = getAll("select * from uni_languages where status=?", [1]);
                        if(count($getLang)){
                           foreach ($getLang as $key => $value) {
                              ?>
                              <a href="<?php echo trim($config["urlPath"] . "/" . $value["iso"] . "/" . REQUEST_URI, "/"); ?>"> <img src="<?php echo Exists( $config["media"]["other"],$value["image"],$config["media"]["no_image"] ); ?>"> <span><?php echo $value["name"]; ?></span> </a>
                              <?php
                           }
                        }
                      ?>

                   </div>

              </div>
            </div>
            <?php } ?>

            <a href="#" class="toolbar-link mobile-menu" > <i class="las la-bars icon-link"></i></a>

         </div>

      </div>

    </div>

  </div>
</header>

<header class="d-none d-md-block" >
  <div class="top-toolbar schema-color-header" >

    <div class="top-toolbar-container" >

      <div class="row justify-content-between" >
         <div class="col-auto" ><!-- class="col-lg-6 col-md-6" -->

            <a class="h-logo" href="<?php echo _link(); ?>" title="<?php echo $ULang->t($settings["title"]); ?>" >
                <img src="<?php echo $settings["logotip"]; ?>" data-inv="<?php echo $settings["logo_color_inversion"]; ?>" width="100px" alt="<?php echo $ULang->t($settings["title"]); ?>">
            </a>

         </div>
         <div class="col-auto text-right" ><!-- class="col-lg-6 col-md-6 text-right" -->

           <div <?php if(!$settings["city_id"]){ ?> class="toolbar-link open-modal" data-id-modal="modal-geo" <?php }else{ ?> class="toolbar-link" <?php } ?> >
             <span> <i class="las la-map-marker-alt"></i> <?php if($_SESSION["geo"]){ echo $ULang->t($Geo->change()["name"], [ "table"=>"geo", "field"=>"geo_name" ] ); }else{ echo $ULang->t('Выберите город'); } ?></span>
           </div>

           <div class="toolbar-link open-modal" data-id-modal="modal-category" >
             <span> <?php echo $ULang->t("Рубрики"); ?> <i class="las la-angle-down"></i> </span>
           </div>

           <div class="toolbar-link">
             <i class="ion-ios-heart-outline"></i>
           </div>

           <?php if($settings["visible_lang_site"]){ ?>
            <div class="toolbar-dropdown dropdown-hover">
              <span><img width="20px" style="margin-right: 5px;" src="<?php echo Exists( $config["media"]["other"],$_SESSION["langSite"]["image"],$config["media"]["no_image"] ); ?>"> <?php echo $_SESSION["langSite"]["name"]; ?></span>
              <div class="toolbar-dropdown-box width-180 right-0 no-padding">

                   <div class="dropdown-box-list-link dropdown-lang-list">

                      <?php
                        $getLang = getAll("select * from uni_languages where status=?", [1]);
                        if(count($getLang)){
                           foreach ($getLang as $key => $value) {
                              ?>
                              <a href="<?php echo trim($config["urlPath"] . "/" . $value["iso"] . "/" . REQUEST_URI, "/"); ?>"> <img src="<?php echo Exists( $config["media"]["other"],$value["image"],$config["media"]["no_image"] ); ?>"> <span><?php echo $value["name"]; ?></span> </a>
                              <?php
                           }
                        }
                      ?>

                   </div>

              </div>
            </div>
            <?php } ?>



            <?php echo $Profile->headerUserMenu(); ?>
             <div class="toolbar-button-box" >
              <a href="<?php echo _link("ad/create"); ?>" class="toolbar-link-button" > <?php echo $ULang->t("Подать объявление"); ?> </a>
            </div>
         </div>
      </div>

    </div>

  </div>
</header>

<div class="mobile-sidebar-menu schema-color-sidebar-menu" >
   <div class="mobile-sidebar-menu-content" >
       <span class="mobile-sidebar-close" > <i class="las la-times"></i> </span>
       <div class="mobile-sidebar-login" >
           <?php echo $Profile->mobileAuthCard(); ?>
       </div>
       <hr>
       <div <?php if(!$settings["city_id"]){ ?> class="open-modal mobile-sidebar-loc" data-id-modal="modal-geo" <?php }else{ ?> class="mobile-sidebar-loc" <?php } ?> >
          <span> <i class="las la-map-marker-alt"></i> <?php if($_SESSION["geo"]){ echo $ULang->t($Geo->change()["name"], [ "table"=>"geo", "field"=>"geo_name" ] ); }else{ echo $ULang->t('Выберите город'); } ?></span>
       </div>
       <hr>
       <div class="mobile-sidebar-cat" >
         <?php
           if(count($getCategoryBoard["category_board_id_parent"][0])){
              foreach ($getCategoryBoard["category_board_id_parent"][0] as $key => $value) {
                 ?>
                 <a href="<?php echo $CategoryBoard->alias($value["category_board_chain"]); ?>">
                      <span class="mobile-sidebar-cat-icon" style="background-color: <?php echo generateRandomColor(); ?>" >

                        <?php if($value["category_board_image"]){ ?>
                        <img src="<?php echo Exists($config["media"]["other"],$value["category_board_image"],$config["media"]["no_image"]); ?>">
                        <?php }else{ ?>
                        <span class="main-category-list-initials" style="font-size: 18px;" > <?php echo $Main->initials( $value["category_board_name"] ); ?> </span>
                        <?php } ?>

                      </span>
                      <span class="mobile-sidebar-cat-name" ><?php echo $ULang->t($value["category_board_name"], [ "table" => "uni_category_board", "field" => "category_board_name" ] ); ?></span>
                 </a>
                 <?php
              }
           }
         ?>
       </div>
       <div class="mobile-sidebar-footer" >
          <hr>
          <a href="<?php echo _link("ad/create"); ?>" >  <?php echo $ULang->t("Подать объявление"); ?> </a>
       </div>
   </div>
</div>

<?php echo $Banners->out( ["position_name"=>"stretching", "current_id_cat"=>$data["category"]["category_board_id"], "categories"=>$getCategoryBoard] ); ?>
