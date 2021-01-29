<!doctype html>
<html lang="<?php echo $settings["lang_site_default"]; ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="<?php echo $ULang->t($data["meta_desc"]); ?>">

    <title><?php echo $ULang->t($data["meta_title"]); ?></title>

    <?php include $config["basePath"] . "/templates/head.tpl"; ?>

  </head>

  <body data-prefix="<?php echo $config["urlPrefix"]; ?>" data-type-loading="<?php echo $settings["type_content_loading"]; ?>" >

    <div class="mobile-filter" >

         <div class="mobile-filter-header" >
           <i class="las la-times"></i>
           <h4> <strong> <?php echo $ULang->t("Фильтры"); ?> </strong> </h4>
         </div>

          <?php if( isset( $getCategoryBoard["category_board_id_parent"][$data["category"]["category_board_id"]] ) ){ ?>
          <div class="catalog-list-options toggle-list-options">
              <span class="catalog-list-options-name"><?php echo $ULang->t("Категории"); ?> <i class="las la-angle-down"></i></span>

              <div class="catalog-list-options-content catalog-list-category">

                    <?php
                    echo $CategoryBoard->outParent($getCategoryBoard, [ "tpl_parent" => '<a {ACTIVE} href="{PARENT_LINK}">{PARENT_NAME}</a>', "tpl" => '{PARENT_CATEGORY}', "category" => $data["category"] ]);
                    ?>

              </div>

          </div>
          <?php }elseif( count($getCategoryBoard["category_board_id_parent"][0]) ){ ?>
          <div class="catalog-list-options toggle-list-options">
              <span class="catalog-list-options-name"><?php echo $ULang->t("Категории"); ?> <i class="las la-angle-down"></i></span>

              <div class="catalog-list-options-content catalog-list-category">

                    <?php
                      foreach ($getCategoryBoard["category_board_id_parent"][0] as $key => $value) {
                         ?>
                         <a href="<?php echo $CategoryBoard->alias($value["category_board_chain"]); ?>"><?php echo $ULang->t( $value["category_board_name"], [ "table" => "uni_category_board", "field" => "category_board_name" ] ); ?></a>
                         <?php
                      }
                    ?>

              </div>

          </div>
          <?php } ?>

         <div class="mobile-filter-content" ></div>

    </div>

    <div class="d-block d-md-none" >

        <div class="mobile-footer-menu" >
           <div class="row no-gutters" >
              <div class="col-lg-6 col-6" >
                 <div class="mobile-footer-menu-item toggle-catalog-filter btn-color-blue" ><i class="las la-filter"></i> <?php echo $ULang->t("Категории и фильтры"); ?></div>
              </div>
              <div class="col-lg-6 col-6" >
                 <a class="mobile-footer-menu-item btn-color-green" href="<?php echo _link("ad/create"); ?>" ><i class="las la-plus"></i> <?php echo $ULang->t("Добавить объявление"); ?></a>
              </div>
           </div>
        </div>

    </div>

    <?php include $config["basePath"] . "/templates/header.tpl"; ?>

    <span class="shape1 d-none d-md-block" ></span>
    <span class="shape2 d-none d-md-block" ></span>

    <div class="container" >

       <div class="mt35" ></div>

       <div class="d-none d-md-block catalog-action-options" >
       <form method="get" action="<?php echo $_SESSION["geo"]["alias"] ? _link($_SESSION["geo"]["alias"]) : _link($settings["country_default"]); ?>" >
       <div class="row no-gutters" >

         <div class="<?php if($data["city_areas"] || $data["city_metro"]){ echo 'col-lg-9'; }else{ echo 'col-lg-12'; } ?>" >

          <div class="main-search" >
            <div>
              <input type="text" name="search" class="ajax-live-search" autocomplete="off" placeholder="<?php echo $ULang->t("Поиск по объявлениям"); ?>" value="<?php echo clear($_GET["search"]); ?>" >
              <div class="main-search-results" ></div>
              <div class="main-search-action" >
                <button class="btn"><i class="las la-search"></i></button>
              </div>
            </div>
          </div>

         </div>

         <?php if($data["city_areas"] || $data["city_metro"]){ ?>
         <div class="col-lg-3" >
           <div class="catalog-button-city-option open-modal" data-id-modal="modal-geo-options" >

            <span>
              <?php if($data["city_areas"] && $data["city_metro"]){ ?>
                     Метро / Районы
              <?php }elseif($data["city_areas"]){ ?>
                     Районы
              <?php }elseif($data["city_metro"]){ ?>
                     Метро
              <?php } ?>

              <?php if($Ads->getCountChangeOptionsCity( $data )){ echo '<span class="city-option-count" >'.$Ads->getCountChangeOptionsCity( $data ).'</span>'; } ?> <i class="las la-angle-down"></i>

            </span>

           </div>
         </div>
         <?php } ?>

       </div>
       </form>
       </div>

       <div class="d-block d-md-none" >
       <form method="get" action="<?php echo $_SESSION["geo"]["alias"] ? _link($_SESSION["geo"]["alias"]) : _link($settings["country_default"]); ?>" >

       <div class="row no-gutters" >

         <div class="<?php if($data["city_areas"] || $data["city_metro"]){ echo 'col-lg-9 col-7'; }else{ echo 'col-lg-12'; } ?>" >

          <div class="main-search" >
            <div>
              <input type="text" name="search" class="ajax-live-search" autocomplete="off" placeholder="<?php echo $ULang->t("Поиск по объявлениям"); ?>" value="<?php echo clear($_GET["search"]); ?>" >
              <div class="main-search-results" ></div>
              <div class="main-search-action" >
                <button class="btn"><i class="las la-search"></i></button>
              </div>
            </div>
          </div>

         </div>

         <?php if($data["city_areas"] || $data["city_metro"]){ ?>
         <div class="col-lg-3 col-5" >
           <div class="catalog-button-city-option open-modal" data-id-modal="modal-geo-options" >

            <span>
              <?php if($data["city_areas"] && $data["city_metro"]){ ?>
                     Метро / Районы
              <?php }elseif($data["city_areas"]){ ?>
                     Районы
              <?php }elseif($data["city_metro"]){ ?>
                     Метро
              <?php } ?>

              <?php if($Ads->getCountChangeOptionsCity( $data )){ echo '<span class="city-option-count" >'.$Ads->getCountChangeOptionsCity( $data ).'</span>'; } ?> <i class="las la-angle-down"></i>

            </span>

           </div>
         </div>
         <?php } ?>

       </div>

       </form>
       </div>

       <div class="d-none d-md-block" >

       <div class="catalog-category-slider owl-carousel owl-theme mt35" >

        <?php

            if(count($getCategoryBoard["category_board_id_parent"][0])){
              foreach ($getCategoryBoard["category_board_id_parent"][0] as $key => $value) {
                ?>
                  <div class="main-category-list-item" style="width: 130px;" >
                    <a href="<?php echo $CategoryBoard->alias($value["category_board_chain"]); ?>">
                      <span class="main-category-list-icon" style="background-color: <?php echo generateRandomColor(); ?>" >

                        <?php if($value["category_board_image"]){ ?>
                        <img src="<?php echo Exists($config["media"]["other"],$value["category_board_image"],$config["media"]["no_image"]); ?>">
                        <?php }else{ ?>
                        <span class="main-category-list-initials" > <?php echo $Main->initials( $value["category_board_name"] ); ?> </span>
                        <?php } ?>

                      </span>
                      <span class="main-category-list-name" ><?php echo $ULang->t($value["category_board_name"], [ "table" => "uni_category_board", "field" => "category_board_name" ] ); ?></span>
                    </a>
                  </div>
                <?php
              }
            }

        ?>

       </div>

       <?php echo $Banners->out( ["position_name"=>"catalog_top", "current_id_cat"=>$data["category"]["category_board_id"], "categories"=>$getCategoryBoard] ); ?>

       <?php
       $outParent = $CategoryBoard->outParent($getCategoryBoard, [ "tpl_parent" => '<div class="col-lg-3 col-6 col-md-4 col-sm-4" ><a {ACTIVE} href="{PARENT_LINK}">{PARENT_NAME}</a></div>', "tpl" => '{PARENT_CATEGORY}', "category" => $data["category"] ]);
       ?>

       <?php if( $outParent ){ ?>
       <div class="catalog-subcategory mb15 mt25" >

          <div class="row" >
          <?php
            echo $outParent;
          ?>
          </div>

       </div>
       <?php } ?>

       </div>

       <?php echo $Filters->outSeoAliasCategory( $data["category"]["category_board_id"] ); ?>

       <nav aria-label="breadcrumb">

          <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">

            <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="<?php echo $config["urlPath"]; ?>">
              <span itemprop="name"><?php echo $ULang->t("Главная"); ?></span></a>
            </li>

            <?php echo $data["breadcrumb"]; ?>

          </ol>

        </nav>

          <div class="row" >
              <div class="col-lg-9 min-height-600" >

                <div class="row" >
                   <div class="col-lg-8 col-12 col-md-6 col-sm-6" >
                     <h2 class="catalog-title" ><?php echo $ULang->t($data["h1"]); ?></h2>
                   </div>
                   <div class="col-lg-4 col-md-6 col-sm-6 text-right" >

                      <div class="catalog-sort" >
                         <div>

                            <?php echo $Ads->outSorting(); ?>

                         </div>
                         <div data-view="grid" class="catalog-ad-view <?php if($_SESSION["catalog_ad_view"] == "grid" || !$_SESSION["catalog_ad_view"]){ echo 'active'; } ?>" > <i class="las la-border-all"></i> </div>
                         <div data-view="list" class="catalog-ad-view <?php if($_SESSION["catalog_ad_view"] == "list"){ echo 'active'; } ?>" > <i class="las la-list"></i> </div>
                      </div>

                   </div>
                </div>

                <div class="mt25" ></div>

                <div class="catalog-results" >

                    <div class="preload" >

                        <div class="spinner-grow mt80 preload-spinner" role="status">
                          <span class="sr-only"></span>
                        </div>

                    </div>

                </div>

              </div>
              <div class="col-lg-3 d-none d-md-block" >


                 <?php include $config["basePath"] . "/templates/catalog_sidebar.tpl"; ?>


              </div>
          </div>

          <?php if($data["seo_text"]){ ?> <div class="mt35" > <?php echo $data["seo_text"]; ?> </div> <?php } ?>

       <div class="mt50" ></div>

       <?php echo $Banners->out( ["position_name"=>"catalog_bottom", "current_id_cat"=>$data["category"]["category_board_id"], "categories"=>$getCategoryBoard] ); ?>

    </div>


    <?php include $config["basePath"] . "/templates/footer.tpl"; ?>

    <script type="text/javascript">

          $(document).ready(function () {

            $('.catalog-category-slider').owlCarousel({
              dots:false,
              loop:false,
              margin:10,
              nav:true,
              autoWidth:true,
              autoplay:false,
              autoplayTimeout:4000,
              autoplayHoverPause:false,
              navText: ['<i class="las la-arrow-left"></i>','<i class="las la-arrow-right"></i>']
              });

          });

    </script>

  </body>
</html>
