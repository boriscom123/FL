
<div class="modal-custom-bg" id="modal-auth" style="display: none;" >
    <div class="modal-custom" style="max-width: 450px" >

      <span class="modal-custom-close" ><i class="las la-times"></i></span>

      <div class="modal-auth-content" >

         <?php include $config["basePath"] . "/templates/include/auth.php"; ?>

      </div>


    </div>
</div>

<div class="modal-custom-bg" id="modal-geo-options" style="display: none;" >
    <div class="modal-custom" style="max-width: 850px;" >

      <span class="modal-custom-close" ><i class="las la-times"></i></span>

      <div class="modal-geo-options-tab" >
          <?php if($data["city_areas"] && $data["city_metro"]){ ?>
                  <div data-id="1" class="active" > <?php echo $ULang->t("Метро"); ?> </div>
                  <div data-id="2" > <?php echo $ULang->t("Районы"); ?> </div>
          <?php }elseif($data["city_areas"]){ ?>
                  <div data-id="2" class="active" > <?php echo $ULang->t("Районы"); ?> </div>
          <?php }elseif($data["city_metro"]){ ?>
                  <div data-id="1" class="active" > <?php echo $ULang->t("Метро"); ?> </div>
          <?php } ?>
      </div>

      <form class="modal-geo-options-form" >
      <div class="modal-geo-options-tab-content" >
          <div data-tab="1" <?php if($data["city_metro"]){ echo 'class="active"'; } ?> >

           <div class="geo-options-metro" >
           <div class="row" >
           <?php
             echo $Geo->outOptionsMetro( $data );
           ?>
           </div>
           </div>

          </div>
          <div data-tab="2" <?php if(!$data["city_metro"] && $data["city_areas"]){ echo 'class="active"'; } ?> >
             <div class="geo-options-areas" >
             <div class="row" >
             <?php
             echo $Geo->outOptionsArea( $data );
             ?>
             </div>
             </div>
          </div>
      </div>
      </form>

      <div class="row mt30" >
         <div class="col-lg-6" ></div>
         <div class="col-lg-3" > <button class="btn-custom btn-color-light width100 button-click-close mb5" ><?php echo $ULang->t("Закрыть"); ?></button> </div>
         <div class="col-lg-3" > <button class="btn-custom btn-color-blue width100 filter-accept mb5" ><?php echo $ULang->t("Применить"); ?></button> </div>
      </div>

    </div>
</div>

<div class="modal-custom-bg" id="modal-geo" style="display: none;" >
    <div class="modal-custom" style="max-width: 800px;" >

      <span class="modal-custom-close" ><i class="las la-times"></i></span>

      <div class="modal-geo-list" >
          <h4><i class="las la-map-marker"></i> <?php echo $ULang->t("Город или регион"); ?></h4>

          <div class="container-custom-search" >
            <input type="text" autocomplete="nope" class="form-control modal-geo-search" value="<?php echo $Geo->change()["name"]; ?>" >
            <div class="custom-results modal-geo-change-city" ></div>
          </div>

          <div class="geo-list-popular modal-geo-change-city" >

               <?php

               if( $_SESSION["geo"] ){
                   $country_alias = $_SESSION["geo"]["data"]["country_alias"];
               }else{
                   $country_alias = $settings["country_default"];
               }

               echo $Geo->cityDefault($country_alias,30);
               ?>

          </div>
      </div>

    </div>
</div>

<div class="modal-custom-bg" id="modal-category" style="display: none;" >
    <div class="modal-custom" style="max-width: 850px;" >

      <span class="modal-custom-close" ><i class="las la-times"></i></span>

      <h4> <strong><?php echo $ULang->t("Выберите рубрику"); ?></strong> </h4>

      <div class="main-category-list row no-gutters" >

        <?php

            if(count($getCategoryBoard["category_board_id_parent"][0])){
              foreach ($getCategoryBoard["category_board_id_parent"][0] as $key => $value) {
                ?>
                <div class="col-lg-2 col-md-3 col-sm-3 col-6" >
                  <div class="main-category-list-item mt25" >
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
                </div>
                <?php
              }
            }

        ?>

      </div>

    </div>

</div>

<div class="modal-custom-bg bg-click-close" style="display: none;" id="modal-notification" >
    <div class="modal-custom animation-modal" style="max-width: 400px" >

      <span class="modal-custom-close" ><i class="las la-times"></i></span>

      <div class="modal-notification-content" >
          <i class="las la-check"></i>

          <h4 class="modal-notification-text" ></h4>
      </div>

    </div>
</div>

<div class="modal-custom-bg"  id="modal-auth-recovery" style="display: none;" >
    <div class="modal-custom animation-modal" style="max-width: 450px;" >

      <span class="modal-custom-close" ><i class="las la-times"></i></span>

      <h4> <strong><?php echo $ULang->t("Восстановление пароля"); ?></strong> </h4>

      <div class="mt30" ></div>

      <input type="text" class="form-control input-style-custom auth-forgot-login" placeholder="<?php echo $ULang->t("Телефон или электронная почта"); ?>" >
      <div class="msg-error mb10" data-name="user_recovery_login" ></div>

      <div class="mt30" ></div>

      <div class="row" >
         <div class="col-lg-7" >
           <button class="button-style-custom schema-color-button color-green mb10 auth-forgot" ><span class="spinner-border spinner-border-sm button-ajax-loader" role="status" aria-hidden="true"></span> <?php echo $ULang->t("Восстановить пароль"); ?></button>
         </div>
      </div>

    </div>
</div>

<div class="modal-custom-bg bg-click-close"  id="modal-auth-recovery-success" style="display: none;" >
    <div class="modal-custom animation-modal" style="max-width: 450px;" >

      <span class="modal-custom-close" ><i class="las la-times"></i></span>

      <h4> <strong><?php echo $ULang->t("Восстановление пароля"); ?></strong> </h4>

      <div class="mt30" ></div>

      <p></p>

      <div class="mt30" ></div>

    </div>
</div>

<div class="modal-custom-bg bg-click-close"  id="modal-auth-block" style="display: none;" >
    <div class="modal-custom animation-modal" style="max-width: 450px;" >

      <span class="modal-custom-close" ><i class="las la-times"></i></span>

      <h4 style="color: red;" > <strong><?php echo $ULang->t("Ваш аккаунт заблокирован!"); ?></strong> </h4>

      <div class="mt30" ></div>

      <p><?php echo $ULang->t("Если вы не согласны с нашим решением — напишите в службу поддержки"); ?></p>

      <div class="mt30" ></div>

      <div class="row" >
         <div class="col-lg-7" >
           <a class="button-style-custom schema-color-button color-green mb10" href="<?php echo _link("feedback"); ?>" ><?php echo $ULang->t("Написать в поддержку"); ?></a>
         </div>
      </div>

    </div>
</div>

<div class="modal-custom-bg bg-click-close"  id="modal-auth-delete" style="display: none;" >
    <div class="modal-custom animation-modal" style="max-width: 450px;" >

      <span class="modal-custom-close" ><i class="las la-times"></i></span>

      <h4 style="color: red;" > <strong><?php echo $ULang->t("Ваш аккаунт удален!"); ?></strong> </h4>

      <div class="mt30" ></div>

      <div class="row" >
         <div class="col-lg-7" >
           <a class="button-style-custom schema-color-button color-green mb10" href="<?php echo _link("feedback"); ?>" ><?php echo $ULang->t("Написать в поддержку"); ?></a>
         </div>
      </div>

    </div>
</div>

<div class="modal-custom-bg bg-click-close"  id="modal-balance" style="display: none;" >
    <div class="modal-custom animation-modal" style="max-width: 500px;" >

      <span class="modal-custom-close" ><i class="las la-times"></i></span>

      <div class="text-center" >
        <span class="circle-icon" > <i class="las la-wallet"></i> </span>
      </div>

      <h4 class="text-center" > <strong><?php echo $ULang->t("Недостаточно средств для оплаты!"); ?></strong> </h4>

      <div class="mt30" ></div>

      <h5 class="text-center" ><?php echo $ULang->t("Ваш баланс"); ?> <strong class="modal-balance-summa" ></strong> </h5>

      <div class="mt30" ></div>

      <div class="row" >
         <div class="col-lg-3" ></div>
         <div class="col-lg-6" >
           <a class="button-style-custom schema-color-button color-green mb10" href="<?php echo _link("user/".$_SESSION["profile"]["data"]["clients_id_hash"]."/balance"); ?>" ><?php echo $ULang->t("Пополнить"); ?></a>
         </div>
         <div class="col-lg-3" ></div>
      </div>

    </div>
</div>

<div class="block-cookies" >
   <p>
     <?php echo $ULang->t("Этот Сайт использует файлы cookies для более удобной работы пользователей с ним. Продолжая любое дальнейшее использование Сайта, Вы соглашаетесь с этим. Более подробная информация доступна в"); ?> <a href="<?php echo _link("politika-cookie"); ?>"><?php echo $ULang->t("Политики использования cookie"); ?></a>
   </p>
   <span class="btn-custom btn-color-blue" ><?php echo $ULang->t("Понятно"); ?></span>
</div>

<div class="lang-js-1 lang-js" ><?php echo $ULang->t("Аукцион завершен"); ?></div>
<div class="lang-js-2 lang-js" ><?php echo $ULang->t("мин"); ?></div>
<div class="lang-js-3 lang-js" ><?php echo $ULang->t("сек"); ?></div>
<div class="lang-js-4 lang-js" ><?php echo $ULang->t("Выбрано"); ?></div>
<div class="lang-js-5 lang-js" ><?php echo $ULang->t("Добавить"); ?></div>

<?php if( $visible_footer == true ){ ?>

<div class="footer-bg" >
<div class="container" >

<div class="mt50" ></div>

<footer>

   <div class="row" >

     <!-- <div class="col-lg-4 col-md-4" >

          <div class="footer-list-link" >
            <a href="<?php echo _link("rules"); ?>"><?php echo $ULang->t("Правила сервиса"); ?></a>
            <a href="<?php echo _link("polzovatelskoe-soglashenie"); ?>"><?php echo $ULang->t("Пользовательское соглашение"); ?></a>
            <a href="<?php echo _link("feedback"); ?>"><?php echo $ULang->t("Служба поддержки"); ?></a>
          </div>

     </div>

     <div class="col-lg-8 col-md-8" >

        <?php if($Main->socialLink()){ ?>
        <div class="footer-list-social" >
           <?php echo $settings["site_name"]; ?> <?php echo $ULang->t("в социальных сетях"); ?>
           <div class="mt10" ></div>
           <?php echo $Main->socialLink(); ?>
        </div>
        <?php } ?>

        <p class="footer-list-text" >
          © <?php echo date("Y"); ?> <?php echo $settings["title"]; ?>
        </p>

     </div> -->

     <div class="col-lg-3 col-md-3">
       <div class="footer-list-link" >
         <a href="<?php echo _link("rules"); ?>"><?php echo $ULang->t("Правила сервиса"); ?></a>
         <a href="<?php echo _link("polzovatelskoe-soglashenie"); ?>"><?php echo $ULang->t("Пользовательское соглашение"); ?></a>
         <a href="<?php echo _link("feedback"); ?>"><?php echo $ULang->t("Служба поддержки"); ?></a>
       </div>
     </div>

     <div class="col-lg-3 col-md-3">
       <div class="footer-list-text" >
          <?php echo $settings["title"]; ?> в социальных сетях
       </div>
       <div class="footer-list-icons">
         <div class="">
            <img src="templates/images/icon-vk.png" alt="vk">
         </div>
         <div class="">
            <img src="templates/images/icon-ok.png" alt="ok">
         </div>
         <div class="">
            <img src="templates/images/icon-fb.png" alt="fb">
         </div>
         <div class="">
            <img src="templates/images/icon-inst.png" alt="inst">
         </div>
         <div class="">
            <img src="templates/images/icon-you.png" alt="youtube">
         </div>
       </div>
     </div>

     <div class="col-lg-3 col-md-3">
       <div class="footer-list-text" >
          Мобильное приложение <?php echo $settings["title"]; ?>
       </div>
       <div class="footer-list-apps">
         <div class="">
            <img src="templates/images/appstore.svg" alt="appstore">
         </div>
         <div class="">
            <img src="templates/images/google-play-badge.png" alt="google-play">
         </div>
      </div>
     </div>

     <div class="col-lg-3 col-md-3">
       <p class="footer-list-text" >
         © <?php echo date("Y"); ?> <?php echo $settings["title"]; ?>
       </p>
     </div>

   </div>

</footer>

</div>
</div>

<?php

  }

  echo $Main->assets($config["js_plugins"]);
  echo urldecode($settings["code_script"]);
  include $config["basePath"] . "/systems/widget/admin-toolbar.php";

?>

<!-- Работает на системе UniSite CMS. https://unisitecms.ru/ -->
