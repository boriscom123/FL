<!doctype html>
<html lang="<?php echo $settings["lang_site_default"]; ?>">
   <head>
      
      <title><?php echo $ULang->t("Публикация объявления"); ?> - <?php echo $settings["site_name"]; ?></title>
      
      <?php include $config["basePath"] . "/templates/head.tpl"; ?>

   </head>
   <body data-prefix="<?php echo $config["urlPrefix"]; ?>" >

     <?php include $config["basePath"] . "/templates/header.tpl"; ?>

      <div class="container">
         
               <form class="ads-form-ajax create-list-tabs" >

                  <div class="create-tab-1 create-tab" >

                     <div class="row" >
                        <div class="col-lg-9" >

                             <h1 class="h1title mt30 mb30" > <?php echo $ULang->t("Выберите категорию"); ?> </h1>
                          
                             <div class="create-list-categories bg-container-shadow" >

                                <div class="row" >

                                   <?php
                                      if(count($getCategoryBoard["category_board_id_parent"][0])){
                                        foreach ($getCategoryBoard["category_board_id_parent"][0] as $key => $value) {
                                          $count = count($getCategoryBoard["category_board_id_parent"][ $value["category_board_id"] ]);
                                          ?>

                                             <div class="col-lg-4 col-6 col-sm-6 col-md-6" >
                                               <?php
                                               if($getCategoryBoard["category_board_id_parent"][ $value["category_board_id"] ]){
                                                ?>
                                                 <h6> <?php echo $value["category_board_name"]; ?> </h6>
                                                 <?php foreach (array_slice($getCategoryBoard["category_board_id_parent"][ $value["category_board_id"] ], 0,5) as $key => $parent_value) { ?>
                                                 <a href="#" data-id="<?php echo $parent_value["category_board_id"]; ?>" ><?php echo $ULang->t($parent_value["category_board_name"], "uni_category_board"); ?></a>
                                                 <?php }

                                                 if( $count > 5 ){
                                                    ?>
                                                    <a href="#" data-id="<?php echo $value["category_board_id"]; ?>" class="create-list-categories-more" ><?php echo $ULang->t("Еще"); ?> <i class="las la-arrow-right"></i></a>
                                                    <?php
                                                 }

                                               }else{
                                                 ?>
                                                  <a href="#" data-id="<?php echo $value["category_board_id"]; ?>" ><h6><?php echo $ULang->t($value["category_board_name"], "uni_category_board"); ?></h6></a> 
                                                 <?php
                                               }
                                               ?>
                                               <div class="mb25" ></div>
                                             </div>

                                          <?php
                                        }
                                      }
                                   ?>
                                                             
                                </div>
                               
                             </div>

                        </div>
                     </div>

                  </div>
                  <div class="create-tab-2" data-tab="show" >

                    <h1 class="h1title mt30 mb30" > <span class="create-tab-prev" data-step="2" ><i class="las la-arrow-left"></i></span> <?php echo $ULang->t("Название и описание"); ?> </h1>
                    
                    <div class="row" >
                       <div class="col-lg-7" >
                          <div class="bg-container-shadow item-create" >
                            
                            <h5> <?php echo $ULang->t("Заголовок объявления"); ?> </h5>

                            <input type="text" name="title" class="form-control create-list-input" >
                            <div class="msg-error" data-name="title" ></div>

                          </div>                         
                       </div>
                       <div class="col-lg-4" ></div>
                    </div>

                    <div class="row" >
                       <div class="col-lg-7" >
                          <div class="bg-container-shadow item-create" >
                            
                            <h5> <?php echo $ULang->t("Описание"); ?> </h5>

                            <textarea class="form-control" name="text" ></textarea>
                            <div class="msg-error" data-name="text" ></div>

                          </div>                         
                       </div>
                       <div class="col-lg-4 mb10" >
                          <?php echo $ULang->t("Не указывайте телефон, e-mail или адрес сайта в описании – для этого есть отдельные поля."); ?>
                       </div>
                    </div>
                    
                    <div class="row" >
                       <div class="col-lg-7" >
                          <div class="bg-container-shadow item-create" >
                            
                            <h5> <?php echo $ULang->t("Видео"); ?> </h5>

                            <input type="text" class="form-control" name="video" >
                            <div class="msg-error" data-name="video" ></div>

                          </div>                         
                       </div>
                       <div class="col-lg-4 mb10" >
                          <?php echo $ULang->t("Добавьте ссылку на видеоролик — это привлечёт больше внимания и повысит доверие к продавцу."); ?>
                       </div>
                    </div>

                    <div class="row" >
                       <div class="col-lg-7" >
                          <div class="bg-container-shadow item-create" >
                            
                            <h5> <?php echo $ULang->t("Готовность к онлайн-показу"); ?> </h5>

                            <p class="create-info" >Выберите, если готовы показать товар/объект с помощью видео-звонка — например, через WhatsApp, Viber, Skype или другой сервис</p>

                            <div class="custom-control custom-checkbox mt15">
                                <input type="checkbox" class="custom-control-input" name="online_view" id="online_view" value="1" >
                                <label class="custom-control-label" for="online_view"><?php echo $ULang->t("Готов показать товар/объект онлайн"); ?></label>
                            </div>                            

                          </div>                         
                       </div>
                       <div class="col-lg-4 mb10" >
                          <?php echo $ULang->t("Покупатель позвонит вам по телефону или напишет в чат. Вы договоритесь, через какой сервис провести видео-звонок"); ?>
                       </div>
                    </div>

                    <div class="row mt10" >
                       <div class="col-lg-3" ><div class="btn-custom btn-color-blue create-tab-continue" data-step="2" ><?php echo $ULang->t("Продолжить"); ?> <i class="las la-arrow-right"></i></div></div>
                    </div>
                  
                  </div>
                  <div class="create-tab-3" data-tab="show" >

                    <h1 class="h1title mt30 mb30" > <span class="create-tab-prev" data-step="3" ><i class="las la-arrow-left"></i></span> <span class="variant-price-name" ><?php echo $ULang->t("Цена"); ?></span> </h1>
                    
                    <div class="var_price_list" >
                      <div class="row" >
                         <div class="col-lg-7" >
                            <div class="bg-container-shadow item-create" >
                              
                              <div class="custom-control custom-radio">
                                  <input type="radio" class="custom-control-input" name="var_price" id="var_price_fix" value="fix" checked="" >
                                  <label class="custom-control-label" for="var_price_fix"><?php echo $ULang->t("Фиксированная"); ?></label>
                              </div>                        

                              <div class="custom-control custom-radio">
                                  <input type="radio" class="custom-control-input" name="var_price" id="var_price_auction" value="auction" >
                                  <label class="custom-control-label" for="var_price_auction"><?php echo $ULang->t("Аукцион"); ?></label>
                              </div>

                            </div>                         
                         </div>
                         <div class="col-lg-4" ></div>
                      </div>
                    </div>

                    <div class="var_price_1" style="display: block;" >
                      <div class="row" >
                         <div class="col-lg-7" >
                            <div class="bg-container-shadow item-create" >

                              <h5> <?php echo $ULang->t("Укажите сумму"); ?> </h5>
                              
                              <div class="input-group" style="max-width: 170px;" >
                                <input type="text" class="form-control inputNumber" name="var_price_1" autocomplete="nope" maxlength="11" value="0" >

                                <?php if(!$settings["ad_create_currency"]){ ?>

                                  <div class="input-group-append">
                                    <span class="input-group-text"> <?php echo $settings["currency_main"]["sign"]; ?> </span>
                                  </div>

                                <?php }else{ ?>

                                  <div class="input-group-append">
                                    
                                    <span class="uni-dropdown-bg">
                                     <div class="uni-dropdown uni-dropdown-align" >
                                        <span class="uni-dropdown-name" > <span><?php echo $settings["currency_main"]["sign"]; ?></span> <i class="las la-angle-down"></i> </span>
                                        <div class="uni-dropdown-content" >
                                           <?php
                                             echo $list_currency;
                                           ?>
                                        </div>
                                     </div>
                                    </span>

                                  </div>

                                <?php } ?>
                              </div>

                            </div>                         
                         </div>
                         <div class="col-lg-4" ></div>
                      </div>
                    </div>                 
                    
                    <div class="var_price_2" >

                      <div class="row" >
                         <div class="col-lg-7" >
                            <div class="bg-container-shadow item-create" >
                              
                              <h5> <?php echo $ULang->t("С какой цены начать торг?"); ?> </h5>

                                  <div class="input-group" style="max-width: 170px;" >
                                    <input type="text" class="form-control inputNumber" name="var_price_2" autocomplete="nope" maxlength="11" value="0" >

                                    <?php if(!$settings["ad_create_currency"]){ ?>

                                      <div class="input-group-append">
                                        <span class="input-group-text"> <?php echo $settings["currency_main"]["sign"]; ?> </span>
                                      </div>

                                    <?php }else{ ?>

                                      <div class="input-group-append">
                                        
                                        <span class="uni-dropdown-bg">
                                         <div class="uni-dropdown uni-dropdown-align" >
                                            <span class="uni-dropdown-name" > <span><?php echo $settings["currency_main"]["sign"]; ?></span> <i class="las la-angle-down"></i> </span>
                                            <div class="uni-dropdown-content" >
                                               <?php
                                                 echo $list_currency;
                                               ?>
                                            </div>
                                         </div>
                                        </span>

                                      </div>

                                    <?php } ?>
                                   </div>

                               <div class="msg-error" data-name="var_price_2" ></div>

                            </div>                         
                         </div>
                         <div class="col-lg-4" ></div>
                      </div>
                      
                      <div class="auction_price_sell" >
                      <div class="row" >
                         <div class="col-lg-7" >
                            <div class="bg-container-shadow item-create" >
                              
                              <h5> <?php echo $ULang->t("Цена продажи"); ?> </h5>

                                <div class="input-group" style="max-width: 170px;" >
                                  <input type="text" class="form-control inputNumber" name="auction_price_sell" autocomplete="nope" maxlength="11" value="0" >
                                  <div class="input-group-append">
                                      <span class="input-group-text"> <?php echo $settings["currency_main"]["sign"]; ?> </span>
                                  </div>
                                </div>

                                <div class="msg-error" data-name="auction_price_sell" ></div>

                            </div>                         
                         </div>
                         <div class="col-lg-4 mb10" ><?php echo $ULang->t("Укажите цену, за которую вы готовы сразу продать товар или оставьте это поле пустым если у аукциона нет ограничений по цене."); ?></div>
                      </div>
                      </div>

                      <div class="row" >
                         <div class="col-lg-7" >
                            <div class="bg-container-shadow item-create" >
                              
                              <h5> <?php echo $ULang->t("Длительность торгов"); ?> </h5>
                              <input type="text" style="max-width: 170px;" class="form-control" name="auction_duration_day" autocomplete="nope" maxlength="2" value="1" >

                              <div class="msg-error" data-name="auction_duration_day" ></div>

                            </div>                         
                         </div>
                         <div class="col-lg-4 mb10" ><?php echo $ULang->t("Укажите срок действия аукциона от 1-го до 30-ти дней."); ?> </div>
                      </div>

                    </div> 


                    <div class="row mt10" >
                       <div class="col-lg-3" ><div class="btn-custom btn-color-blue create-tab-continue" data-step="3" ><?php echo $ULang->t("Продолжить"); ?> <i class="las la-arrow-right"></i></div></div>
                    </div>

                  </div>
                  <div class="create-tab-4"  data-tab="show" >

                    <h1 class="h1title mt30 mb30" > <span class="create-tab-prev" data-step="4" ><i class="las la-arrow-left"></i></span> <?php echo $ULang->t("Параметры"); ?> </h1>

                    <div class="row" >
                       <div class="col-lg-7" >
                          <div class="bg-container-shadow item-create" >
                            
                            <div class="ad-filters max-width-filter-item" ></div>

                          </div>                         
                       </div>
                       <div class="col-lg-4 mb10" > <?php echo $ULang->t("Укажите как можно больше параметров - это повысит интерес к объявлению."); ?> </div>
                    </div>

                    <div class="row mt10" >
                       <div class="col-lg-3" ><div class="btn-custom btn-color-blue create-tab-continue" data-step="4" ><?php echo $ULang->t("Продолжить"); ?> <i class="las la-arrow-right"></i></div></div>
                    </div> 

                  </div>
                  <div class="create-tab-5"  data-tab="show" >

                    <h1 class="h1title mt30 mb30" > <span class="create-tab-prev" data-step="5" ><i class="las la-arrow-left"></i></span> <?php echo $ULang->t("Фотографии"); ?> </h1>

                    <div class="row" >
                       <div class="col-lg-7" >
                          <div class="bg-container-shadow item-create" >
                            
                             <p class="create-info" > <i class="las la-question-circle"></i> <?php echo $ULang->t("Не загружайте фотографии с текстом, контактными данными, логотипом."); ?></p>

                             <div class="add-gallery mt35" >
                                <div>
                                  <i class="las la-camera"></i>
                                  <span><?php echo $ULang->t("Добавить"); ?></span>
                                </div>
                             </div>
                             <div class="container-gallery" id="dragula" ></div>

                             <div class="msg-error" data-name="gallery" ></div>

                          </div>                         
                       </div>
                       <div class="col-lg-4 mb10" > <?php echo $ULang->t("Первое фото будет отображаться в результатах поиска, выберите наиболее удачное. Вы можете загрузить до"); ?> <?php echo $settings["count_images_add_ad"]; ?> <?php echo $ULang->t("фотографий в формате JPG или PNG. Максимальный размер фото"); ?> — <?php echo $settings["size_images_add_ad"]; ?>MB. </div>
                    </div>


                    <div class="row mt10" >
                       <div class="col-lg-3" ><div class="btn-custom btn-color-blue create-tab-continue" data-step="5" ><?php echo $ULang->t("Продолжить"); ?> <i class="las la-arrow-right"></i></div></div>
                    </div>

                  </div>
                  <div class="create-tab-6" data-tab="show" >

                      <h1 class="h1title mt30 mb30" > <span class="create-tab-prev" data-step="6" ><i class="las la-arrow-left"></i></span> <?php echo $ULang->t("Местоположение"); ?> </h1>
                    
                      <div class="row" >
                         <div class="col-lg-7" >
                            <div class="bg-container-shadow item-create" >
                              
                                <h5> <?php echo $ULang->t("Город"); ?> </h5>

                                <div class="container-custom-search" >
                                  <input type="text" autocomplete="nope" class="form-control action-input-search-city create-list-input" value="" >
                                  <div class="custom-results SearchCityResults SearchCityOptions" ></div>
                                </div>

                                <div class="msg-error" data-name="city_id" ></div>
                                <input type="hidden" name="city_id" value="0" >

                            </div>                         
                         </div>
                         <div class="col-lg-4" ></div>
                      </div>

                      
                      <div class="options-area" >

                          <div class="row" >
                             <div class="col-lg-7" >
                                <div class="bg-container-shadow item-create" >

                                    <h5> <?php echo $ULang->t("Район"); ?> </h5>
                                  
                                    <div class="container-list-area" ></div> 

                                </div>                         
                             </div>
                             <div class="col-lg-4" ></div>
                          </div>

                      </div>

                      <div class="options-metro" >

                          <div class="row" >
                             <div class="col-lg-7" >
                                <div class="bg-container-shadow item-create" >

                                    <h5> <?php echo $ULang->t("Метро"); ?> </h5>
                                  
                                    <div class="container-list-metro" ></div> 

                                </div>                         
                             </div>
                             <div class="col-lg-4" ></div>
                          </div>

                      </div>

                      <div class="row" >
                         <div class="col-lg-7" >
                            <div class="bg-container-shadow item-create" >

                                <h5> <?php echo $ULang->t("Адрес"); ?> </h5>
                              
                                <div class="boxSearchAddress" >
                                   <input type="text" class="form-control searchMapAddress create-list-input" id="searchMapAddress" autocomplete="nope" name="address" >
                                   <div class="custom-results SearchAddressResults" ></div>
                                </div>

                                <div class="msg-error" data-name="address" ></div>

                                <div class="mapAddress" id="mapAddress" ></div>
                                <input type="hidden" name="map_lat" value="0" >
                                <input type="hidden" name="map_lon" value="0" >

                            </div>                         
                         </div>
                         <div class="col-lg-4" ></div>
                      </div>

                      <div class="row mt10" >
                         <div class="col-lg-3" ><div class="btn-custom btn-color-blue create-tab-continue" data-step="6" > <?php echo $ULang->t("Опубликовать объявление"); ?> <i class="las la-arrow-right"></i></div></div>
                      </div>

                  </div>

                  <input type="file" accept=".jpg,.jpeg,.png" multiple="true" style="position: absolute; visibility: hidden;" class="ads-images-multiple" />
                  <input type="hidden" name="currency" value="<?php echo $settings["currency_main"]["code"]; ?>" >
                  <input type="hidden" name="c_id" value="0"  >

               </form>
              

         
      </div>


      <div class="mt45" ></div>

      <?php include $config["basePath"] . "/templates/footer.tpl"; ?>

      <?php echo $Geo->vendorMap(); ?>

      <?php echo $Ads->mapAdAddress(); ?>

   </body>
</html>