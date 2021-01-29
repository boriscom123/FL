<!doctype html>
<html lang="<?php echo $settings["lang_site_default"]; ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $ULang->t("Платные услуги"); ?> - <?php echo $ULang->t($settings["site_name"]); ?></title>

    <?php include $config["basePath"] . "/templates/head.tpl"; ?>

  </head>

  <body data-prefix="<?php echo $config["urlPrefix"]; ?>" style="background: url(<?php echo $settings["path_tpl_image"]; ?>/bg-2903058.png);" >
    

  <div class="pg-service-element1 d-none d-lg-block" ></div>
  <div class="pg-service-element2 d-none d-lg-block" ></div>
  <div class="pg-service-element3 d-none d-lg-block" ></div>
  <div class="pg-service-element4 d-none d-lg-block" ></div>
  
      <div class="service-page-content" >
        
         <h2><?php echo $ULang->t("Хотите продавать свои"); ?> <br> <?php echo $ULang->t("товары быстрее?"); ?></h2>
         <p><?php echo $ULang->t("Воспользуйтесь нашими дополнительными услугами! Это быстрый и удобный способ привлечь больше покупателей к вашему объявлению."); ?></p>
         
         <br><br>

         <div class="service-page-block-left">
            <div>
               <img src="<?php echo $settings["path_tpl_image"]; ?>/69f0db38e3bb81d0cf28eec0d669d1d6.png">
               <h4><?php echo $ULang->t("Турбо продажа"); ?></h4>
               <p><?php echo $ULang->t("Ваше предложение увидит максимум посетителей — это увеличит шансы на быструю и выгодную продажу. Объявление будет выделено цветом, поднято в топ и размещено в специальном VIP блоке."); ?></p> 
            </div>    
            <span class="zigelem1 d-none d-lg-block" ></span>          
         </div>
         <div class="service-page-block-right" >
            <div>
               <img src="<?php echo $settings["path_tpl_image"]; ?>/9b9f34bde9e4dc644d955334e1ae5174.png">
               <h4><?php echo $ULang->t("VIP размещение"); ?></h4>
               <p><?php echo $ULang->t("Ваше объявление выделяется и отображается в специальном VIP блоке в каталоге товаров и в карточках объявлений."); ?></p> 
            </div>
            <span class="zigelem2 d-none d-lg-block" ></span>              
         </div>
         <div class="service-page-block-left" >
            <div>
               <img src="<?php echo $settings["path_tpl_image"]; ?>/e2c585525f974b653df72ba3d47dd92f.png">
               <h4><?php echo $ULang->t("Поднятие в ленте"); ?></h4>
               <p><?php echo $ULang->t("ТОП объявления показываются на самых верхних позициях и на всех страницах рубрики и региона, в которой размещено объявление. Такое расположение гарантирует, что Ваши объявления просмотрят максимально возможное количество пользователей."); ?></p>    
            </div> 
            <span class="zigelem3 d-none d-lg-block" ></span>          
         </div>
         
         <br>

         <a href="<?php echo _link("ad/create"); ?>"><?php echo $ULang->t("Подать объявление"); ?></a>

         <br>

      </div>
          

    <?php include $config["basePath"] . "/templates/footer.tpl"; ?>

    <script type="text/javascript">

        let bg1 = document.querySelector('.pg-service-element1');
        let bg2 = document.querySelector('.pg-service-element2');
        let bg3 = document.querySelector('.pg-service-element3');
        let bg4 = document.querySelector('.pg-service-element4');

        window.addEventListener('mousemove', function(e) {
            let x = e.clientX / window.innerWidth;
            let y = e.clientY / window.innerHeight;  
            if(bg1) bg1.style.transform = 'translate(-' + x * 50 + 'px, -' + y * 20 + 'px)';
            if(bg2) bg2.style.transform = 'translate(-' + x * 50 + 'px, -' + y * 30 + 'px)';
            if(bg3) bg3.style.transform = 'translate(-' + x * 30 + 'px, -' + y * 50 + 'px)';
            if(bg4) bg4.style.transform = 'translate(-' + x * 70 + 'px, -' + y * 20 + 'px)';
        });
      

    </script>

  </body>
</html>