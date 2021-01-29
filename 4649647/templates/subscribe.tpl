<!doctype html>
<html lang="<?php echo $settings["lang_site_default"]; ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $ULang->t("Подписка успешно подтверждена!"); ?></title>

    <?php include $config["basePath"] . "/templates/head.tpl"; ?>

  </head>

  <body data-prefix="<?php echo $config["urlPrefix"]; ?>">
    
    <?php include $config["basePath"] . "/templates/header.tpl"; ?>

    <span class="shape1 d-none d-md-block" ></span>
    <span class="shape2 d-none d-md-block" ></span>

    <div class="container" >
       
        <div class="row" >
            <div class="col-lg-12" >

              <div class="minheight400" >

               <div class="icon-circle-status mt50" >
                  <div class="status-green" >
                    <i class="las la-check"></i>
                  </div>
               </div>

                <h4 class="text-center mt30" > <strong><?php echo $ULang->t("Подписка успешно подтверждена!"); ?></strong> </h4>

              </div>

            </div>
        </div>
         
          
       <div class="mt50" ></div>


    </div>


    <?php include $config["basePath"] . "/templates/footer.tpl"; ?>

  </body>
</html>