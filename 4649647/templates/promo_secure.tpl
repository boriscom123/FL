<!doctype html>
<html lang="<?php echo $settings["lang_site_default"]; ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $ULang->t("Безопасные сделки"); ?> - <?php echo $ULang->t($settings["site_name"]); ?></title>

    <?php include $config["basePath"] . "/templates/head.tpl"; ?>

  </head>

  <body data-prefix="<?php echo $config["urlPrefix"]; ?>" style="background-color: white;" >
    
      <div class="secure-page-header" >
        <h1> <strong><?php echo $ULang->t("Покупайте и продавайте <br> товары безопасно!"); ?></strong> </h1>
        <p><?php echo $ULang->t("Если что-то пойдет не так, деньги вернутся вам на карту. Это поможет защититься от мошенников."); ?></p>
      </div>

      <div class="secure-page-content mt30" >

         <div class="row" >
            
            <div class="col-lg-4" >
              <div>
                <i class="las la-check icon-green-big"></i>
                <h4><?php echo $ULang->t("Гарантия возврата"); ?></h4>
                <p><?php echo $ULang->t("Если товар не получен или он не соответствует описанию, деньги будут возвращены на карту."); ?></p>
              </div>
            </div>
            <div class="col-lg-4" >
              <div>
                 <i class="las la-check icon-green-big"></i>
                 <h4><?php echo $ULang->t("Решение споров"); ?></h4>
                 <p><?php echo $ULang->t("Наши Арбитры помогут решить спор с продавцом, если он возник при личной передаче товара."); ?></p>
              </div>
            </div>
            <div class="col-lg-4" >
              <div>
                <i class="las la-check icon-green-big"></i>
                <h4><?php echo $ULang->t("Безопасность"); ?></h4>
                <p><?php echo $ULang->t("Все денежные переводы безопасны, а данные банковских карт защищены."); ?></p>
              </div>
            </div>

         </div>

         <h3 class="mt50 mb30" > <strong>Как покупать с помощью безопасной сделки?</strong> </h3>

         <div class="row" >
            
            <div class="col-lg-12" >
              <div>
                <i class="las la-check icon-green-big"></i>
                <h4><?php echo $ULang->t("Выберите товар"); ?></h4>
                <p><?php echo $ULang->t("Выберите товар с пометкой Безопасная сделка и оплатите его."); ?></p>
              </div>
            </div>
            <div class="col-lg-12" >
              <div>
                 <i class="las la-check icon-green-big"></i>
                 <h4><?php echo $ULang->t("Договоритесь о получении товара"); ?></h4>
                 <p><?php echo $ULang->t("После оплаты товара у вас появится специальная страница где вы сможете отслеживать процесс покупки. После получения вами товара и осмотра его - вам необходимо подтвердить получение, и только после этого продавец получит деньги, а если вас, что то не устроит, то вы сможете обратиться в арбитраж и запросить возврат денег."); ?></p>
              </div>
            </div>
            <div class="col-lg-12" >
              <div>
                <i class="las la-check icon-green-big"></i>
                <h4><?php echo $ULang->t("Отзыв"); ?></h4>
                <p><?php echo $ULang->t("После сделки вы сможете оставить отзыв о продавце."); ?></p>
              </div>
            </div>

         </div>

         <br>

         <a href="<?php echo _link("ad/create"); ?>"><?php echo $ULang->t("Подать объявление"); ?></a>

         <br>

      </div>
          

    <?php include $config["basePath"] . "/templates/footer.tpl"; ?>


  </body>
</html>