<!doctype html>
<html lang="<?php echo $settings["lang_site_default"]; ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="<?php echo $Seo->out(array("page" => "index", "field" => "meta_desc")); ?>">

    <title><?php echo $Seo->out(array("page" => "index", "field" => "meta_title")); ?></title>

    <?php include $config["basePath"] . "/templates/head.tpl"; ?>

  </head>

  <body data-prefix="<?php echo $config["urlPrefix"]; ?>" data-type-loading="<?php echo $settings["type_content_loading"]; ?>" >

    <?php include $config["basePath"] . "/templates/header.tpl"; ?>


    <span class="shape1 d-none d-md-block" ></span>
    <span class="shape2 d-none d-md-block" ></span>
    <span class="shape3 d-none d-md-block" ></span>
    <span class="shape4 d-none d-md-block" ></span>
    <span class="shape5 d-none d-md-block" ></span>


     <div class="fix-calling-add owl-calling owl-carousel owl-theme" >
         <div>
           <h1><?php echo $ULang->t( "Подать бесплатно – Продать быстро!" ); ?></h1>
           <p><?php echo $ULang->t( "Получите Бонусы в подарок!" ); ?></p>
           <a href="<?php echo _link("ad/create"); ?>"><?php echo $ULang->t( "Подать объявление" ); ?></a>
         </div>

         <!-- <?php if( $settings["secure_status"] ){ ?>
         <div>
           <h1><?php echo $ULang->t( "Продавайте товары через безопасную сделку" ); ?></h1>
           <p><?php echo $ULang->t( "Это просто и безопасно!" ); ?></p>
           <a href="<?php echo _link("ad/create"); ?>"><?php echo $ULang->t( "Добавить товар" ); ?></a>
         </div>
         <?php } ?> -->

         <?php if($settings["functionality"]["auction"]){ ?>
         <div>
           <h1><?php echo $ULang->t( "Аукционные товары" ); ?></h1>
           <p><?php echo $ULang->t( "Хотите продать товар по максимальной цене? Откройте аукцион!" ); ?></p>
           <a href="<?php echo _link("ad/create"); ?>"><?php echo $ULang->t( "Добавить товар" ); ?></a>
         </div>
         <?php } ?>

     </div>

     <div class="news-block mt35">

       <div class="container news-items" >

         <div class="news-block-arrow left-arrow"><i class="las la-arrow-left"></i></div>
         <div class="news-block-arrow right-arrow"><i class="las la-arrow-right"></i></div>

         <div class="news left-news">
           <div class="info">
             <h2>Название новости 1</h2>
             <p>Короткое описание</p>
             <a href="#">Подробнее</a>
           </div>
           <div class="image">
             <img src="templates/images/news/001.jpg" alt="lady">
           </div>
         </div>
         <div class="news right-news">
           <div class="info">
             <h2>Название новости 2</h2>
             <p>Короткое описание</p>
             <a href="#">Подробнее</a>
           </div>
           <div class="image">
             <img src="templates/images/news/002.jpg" alt="worker">
           </div>
         </div>
         <div class="news left-outside">
           <div class="info">
             <h2>Название новости 3</h2>
             <p>Короткое описание</p>
             <a href="#">Подробнее</a>
           </div>
           <div class="image">
             <img src="templates/images/news/003.jpg" alt="pc">
           </div>
         </div>
         <div class="news right-outside">
           <div class="info">
             <h2>Название новости 4</h2>
             <p>Короткое описание</p>
             <a href="#">Подробнее</a>
           </div>
           <div class="image">
             <img src="templates/images/news/004.jpg" alt="rocket">
           </div>
         </div>
         <div class="news d-none">
           <div class="info">
             <h2>Название новости 5</h2>
             <p>Короткое описание</p>
             <a href="#">Подробнее</a>
           </div>
           <div class="image">
             <img src="templates/images/news/005.jpg" alt="block">
           </div>
         </div>

       </div>

     </div>

    <div class="container" >



       <form class="mt35" method="get" action="<?php echo $_SESSION["geo"]["alias"] ? _link($_SESSION["geo"]["alias"]) : _link($settings["country_default"]); ?>" >

           <div class="row no-gutters" >

             <div class="col-lg-12" >

              <div class="main-search" >
                <div>
                  <input type="text" name="search" class="ajax-live-search" autocomplete="off" placeholder="<?php echo $ULang->t("Найти товар или услугу"); ?>" value="<?php echo clear($_GET["search"]); ?>" >
                  <div class="main-search-results" > </div>
                  <div class="main-search-action" >
                    <button class="btn">Поиск</button>
                    <!-- <button class="btn"><i class="las la-search"></i></button> -->
                  </div>
                </div>
              </div>

             </div>

           </div>

       </form>

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
                      <span class="main-category-list-name" ><?php echo $ULang->t( $value["category_board_name"], [ "table" => "uni_category_board", "field" => "category_board_name" ] ); ?></span>
                    </a>
                  </div>
                <?php
              }
            }

        ?>

       </div>

       <?php echo $Banners->out( ["position_name"=>"index_top"] ); ?>

       <div class="row mt30" >
          <div class="col-lg-12" ><!-- <div class="col-lg-9" > -->


            <?php // print_r($data);
            if($data["vip"]["count"]){ ?>
            <h3 class="mt20 mb25" > <strong><?php echo $ULang->t( "VIP объявления" ); ?></strong> </h3>
              <div class="row no-gutters gutters10" >
              <?php

                 foreach ($data["vip"]["all"] as $key => $value) {
                     include $config["basePath"] . "/templates/include/vip_ad_grid.php";
                 }

              ?>

              <div class="col-lg-3 col-md-3 col-sm-6 col-12">
              <div class="item-grid-plug" >
                 <a href="<?php echo $data["vip_link"]; ?>" >

                     <div> <i class="las la-crown"></i> <br> Все VIP объявления <i class="las la-arrow-right"></i> </div>

                 </a>
              </div>
              </div>

              </div>
            <?php
            }
            ?>


            <h3 class="mt20 mb25" > <strong><?php echo $ULang->t( "Все объявления" ); ?></strong> </h3>

            <div class="catalog-results" >

                <div class="preload" >

                    <div class="spinner-grow mt80 preload-spinner" role="status">
                      <span class="sr-only"></span>
                    </div>

                </div>

            </div>


          </div>
          <div class="col-lg-3" >

             <?php
             // include $config["basePath"] . "/templates/index_sidebar.tpl";
             ?>

          </div>
       </div>

       <?php if($data["seo_text"]){ ?> <div class="mt35" > <?php echo $data["seo_text"]; ?> </div> <?php } ?>

       <?php echo $Banners->out( ["position_name"=>"index_bottom"] ); ?>


    </div>

    <?php include $config["basePath"] . "/templates/footer.tpl"; ?>

    <script type="text/javascript">

          $(document).ready(function () {

            $('.owl-calling').owlCarousel({dots:true,loop:true,nav:false,autoplay:true,autoplayTimeout:4000,autoplayHoverPause:true,responsive:{0:{items:1},900:{items:1}}})

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
