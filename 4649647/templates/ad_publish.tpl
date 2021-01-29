<!doctype html>
<html lang="<?php echo $settings["lang_site_default"]; ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php $ULang->t("Объявление готово к публикации"); ?></title>

    <?php include $config["basePath"] . "/templates/head.tpl"; ?>

  </head>

  <body data-prefix="<?php echo $config["urlPrefix"]; ?>" >
    
    <?php include $config["basePath"] . "/templates/header.tpl"; ?>

    <span class="shape1 d-none d-md-block" ></span>
    <span class="shape2 d-none d-md-block" ></span>

    <div class="container" >
       
        <div class="row" >
            <div class="col-lg-12" >

              <h3 class="mt30" > <strong><?php $ULang->t("Объявление готово к публикации"); ?></strong> </h3>

              <div class="mt25 bg-container" >

                <?php echo $ULang->t("Ваше объявление перемещено в архив. В категории"); ?> <strong>«<?php echo $data["category_board_name"]; ?>»</strong> <?php echo $ULang->t("вы уже публиковали"); ?> <?php echo $data["category_board_count_free"]; ?> <?php echo $ULang->t("объявление бесплатно. Стоимость размещения в данную категорию"); ?> <?php echo $Main->price($data["category_board_price"]); ?>

               <div class="row mt25" >
                  <div class="col-lg-3" >
                    <span class="btn-custom btn-color-green ads-cat-pay-publication" data-id="<?php echo $data["ads_id"]; ?>" ><?php echo $ULang->t("Подключить за"); ?> <?php echo $Main->price($data["category_board_price"]); ?></span>
                  </div>
               </div>               
                  
              </div>

            </div>
        </div>
         
          
       <div class="mt50" ></div>


    </div>


    <?php include $config["basePath"] . "/templates/footer.tpl"; ?>

  </body>
</html>