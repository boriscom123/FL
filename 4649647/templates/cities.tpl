<!doctype html>
<html lang="<?php echo $settings["lang_site_default"]; ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $ULang->t("Все города"); ?></title>

    <?php include $config["basePath"] . "/templates/head.tpl"; ?>

  </head>

  <body data-prefix="<?php echo $config["urlPrefix"]; ?>">
    
    <?php include $config["basePath"] . "/templates/header.tpl"; ?>

    <span class="shape1 d-none d-md-block" ></span>
    <span class="shape2 d-none d-md-block" ></span>

    <div class="container" >
       
       <nav aria-label="breadcrumb">
 
          <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">

            <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="<?php echo $config["urlPath"]; ?>">
              <span itemprop="name"><?php echo $ULang->t("Главная"); ?></span>
              </a>
            </li>

            <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
              <span itemprop="name"><?php echo $ULang->t("Все города"); ?></span>
            </li>                 
          </ol>

        </nav>
          
        <div class="row" >
            <div class="col-lg-12" >

              <h1><?php echo $ULang->t("Выберите город"); ?></h1>

              <div class="cities-list" >

              <?php
               if( $_SESSION["geo"] ){
                   $country_alias = $_SESSION["geo"]["data"]["country_alias"];
               }else{
                   $country_alias = $settings["country_default"];
               }
              ?>
              
              <div class="row" >
              <?php  
                $getCities = getAll("SELECT * FROM uni_city INNER JOIN `uni_country` ON `uni_country`.country_id = `uni_city`.country_id WHERE `uni_country`.country_status = '1' and `uni_country`.country_alias='".$country_alias."' order by city_alias asc");
                
                if(count($getCities)){

                foreach ($getCities as $key => $value) {
                      $list[ mb_substr( mb_strtoupper($value["city_name"] , "UTF-8"), 0, 1, "UTF-8") ][$value["city_name"]] = '<a href="'._link( $value["city_alias"] ).'" >' . $value["city_name"] . '</a>';
                }

                foreach ($list as $letter => $nested) {

                  $alphabet .= '<span data-id="letter-'.translite($letter).'" >'.$letter.'</span>';

                  ?>
                  <div class="col-lg-3 col-3 col-sm-2 col-md-2" > <p class="cities-letter" id="letter-<?php echo translite($letter); ?>" ><?php echo $letter; ?></p> </div>
                  <div class="col-lg-9 col-9 col-sm-10 col-md-10" >
                      <div class="row mb25" >
                      <?php

                      $length = floor(count($list) / 4);

                      $array_chunk = array_chunk($nested, $length ? $length : 1, true);

                      foreach ($array_chunk as $key1 => $value1) {
                          ?>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-12" >
                          <?php
                          foreach ($value1 as $key2 => $value2) {
                              echo $value2;
                          }
                          ?>
                          </div>
                          <?php
                      }

                      ?>
                      </div>
                  </div>
                  <?php

                }

                }
              ?>
              </div>

              </div>

            </div>
        </div>
         
          
       <div class="mt50" ></div>


       <div class="cities-alphabet" >
          <?php echo $alphabet; ?>
       </div>


    </div>


    <?php include $config["basePath"] . "/templates/footer.tpl"; ?>


  </body>
</html>