<!doctype html>
<html lang="<?php echo $settings["lang_site_default"]; ?>">
  <head>
    <meta charset="utf-8">
    
    <title><?php echo $ULang->t("Чат"); ?></title>
    
    <?php include $config["basePath"] . "/templates/head.tpl"; ?>


  </head>

  <body data-prefix="<?php echo $config["urlPrefix"]; ?>">

    <?php include $config["basePath"] . "/templates/header.tpl"; ?>

    <div class="container" >
       
       <nav aria-label="breadcrumb" class="mt15" >
 
          <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">

            <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="/">
              <span itemprop="name"><?php echo $ULang->t("Главная"); ?></span></a>
              <meta itemprop="position" content="1">
            </li>
            
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="<?php echo _link( "user/" . $user["clients_id_hash"] ); ?>">
              <span itemprop="name"><?php echo $Profile->name($user); ?></span></a>
              <meta itemprop="position" content="2">
            </li>
            
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
              <span itemprop="name"><?php echo $ULang->t("Чат"); ?></span>
              <meta itemprop="position" content="3">
            </li>
                             
          </ol>

        </nav>
        
        <div class="mt40" ></div>

        <div class="row" >
           <div class="col-lg-3" >

               <div class="user-sidebar" >

                  <div class="user-avatar" >
                     <div class="user-avatar-img" >
                        <img src="<?php echo $Profile->userAvatar($user["clients_avatar"]); ?>" />
                     </div>  
                     <h4> <?php echo $Profile->name($user); ?> </h4>  
                     <p>На <?php echo $settings["site_name"]; ?> с <?php echo date("d.m.Y", strtotime($user["clients_datetime_add"])); ?></p>  

                     <div class="board-view-stars">
                         
                       <?php echo $data["ratings"]; ?>
                       <div class="clr"></div>   

                     </div>

                  </div>
                  
                  <div class="user-mobile-menu d-block d-lg-none" >
                     <span><?php echo $data["page_name"]; ?> <i class="las la-angle-down"></i></span>
                     <div>
                       <a <?php if($action == "balance"){ echo 'class="active"'; } ?> href="<?php echo _link( "user/" . $user["clients_id_hash"] . "/balance" ); ?>"> <i class="las la-wallet"></i> <?php echo $ULang->t("Кошелек"); ?> <strong><?php echo $Main->price($user["clients_balance"]); ?></strong> </a>
                       <a <?php if($action == "ad"){ echo 'class="active"'; } ?> href="<?php echo _link( "user/" . $user["clients_id_hash"] . "/ad" ); ?>"> <i class="las la-list-ul"></i> <?php echo $ULang->t("Мои объявления"); ?> </a>
                       <a <?php if($action == "orders"){ echo 'class="active"'; } ?> href="<?php echo _link( "user/" . $user["clients_id_hash"] . "/orders" ); ?>"> <i class="las la-shopping-basket"></i> <?php echo $ULang->t("Мои заказы"); ?> </a>
                       <a class="active" href="<?php echo _link( "chat" ); ?>"> <i class="las la-comments"></i> <?php echo $ULang->t("Мои сообщения"); ?> <span <?php if(!$data["new_messages"]) echo 'style="display:none;"'; ?> class="update-count-message label-count" ><?php echo $data["new_messages"]; ?></span> </a>
                       <a <?php if($action == "favorites"){ echo 'class="active"'; } ?> href="<?php echo _link( "user/" . $user["clients_id_hash"] . "/favorites" ); ?>"> <i class="lab la-gratipay"></i> <?php echo $ULang->t("Избранное"); ?> </a>
                       <a <?php if($action == "settings"){ echo 'class="active"'; } ?> href="<?php echo _link( "user/" . $user["clients_id_hash"] . "/settings" ); ?>"> <i class="las la-sliders-h"></i> <?php echo $ULang->t("Настройки"); ?> </a>
                     </div>
                  </div>

                  <div class="user-menu d-none d-lg-block" >
                     <a <?php if($action == "balance"){ echo 'class="active"'; } ?> href="<?php echo _link( "user/" . $user["clients_id_hash"] . "/balance" ); ?>"> <i class="las la-wallet"></i> <?php echo $ULang->t("Кошелек"); ?> <strong><?php echo $Main->price($user["clients_balance"]); ?></strong> </a>
                     <a <?php if($action == "ad"){ echo 'class="active"'; } ?> href="<?php echo _link( "user/" . $user["clients_id_hash"] . "/ad" ); ?>"> <i class="las la-list-ul"></i> <?php echo $ULang->t("Мои объявления"); ?> </a>
                     <a <?php if($action == "orders"){ echo 'class="active"'; } ?> href="<?php echo _link( "user/" . $user["clients_id_hash"] . "/orders" ); ?>"> <i class="las la-shopping-basket"></i> <?php echo $ULang->t("Мои заказы"); ?> </a>
                     <a class="active" href="<?php echo _link( "chat" ); ?>"> <i class="las la-comments"></i> <?php echo $ULang->t("Мои сообщения"); ?> <span <?php if(!$data["new_messages"]) echo 'style="display:none;"'; ?> class="update-count-message label-count" ><?php echo $data["new_messages"]; ?></span> </a>
                     <a <?php if($action == "favorites"){ echo 'class="active"'; } ?> href="<?php echo _link( "user/" . $user["clients_id_hash"] . "/favorites" ); ?>"> <i class="lab la-gratipay"></i> <?php echo $ULang->t("Избранное"); ?> </a>
                     <a <?php if($action == "settings"){ echo 'class="active"'; } ?> href="<?php echo _link( "user/" . $user["clients_id_hash"] . "/settings" ); ?>"> <i class="las la-sliders-h"></i> <?php echo $ULang->t("Настройки"); ?> </a>
                  </div>

                  <div class="d-none d-lg-block" >
                  <hr>
                  <p class="small-title mt0" ><?php echo $ULang->t("Поделиться профилем"); ?></p>
                  <?php echo $data["share"]; ?>
                  </div>

               </div>
             
           </div>
           <div class="col-lg-9" >

               <div class="module-chat" >

                <?php if($list_chat_users){ ?>

                  <div class="row no-gutters" >
                     <div class="col-lg-4" >
                        <div class="module-chat-users" >

                          <?php echo $list_chat_users; ?>
                          
                        </div>
                     </div>
                     <div class="col-lg-8" >
                        <div class="module-chat-dialog" >

                            <div class="chat-dialog-empty" >
                                <svg width="184" height="136" viewBox="0 0 184 136" class="sc-jNvrOh RZGXR"><defs><linearGradient id="dialog-stub_svg__a" x1="100%" x2="0%" y1="0%" y2="100%"><stop offset="0%" stop-color="#BAF8FF"></stop><stop offset="100%" stop-color="#D2D4FF"></stop></linearGradient><linearGradient id="dialog-stub_svg__b" x1="0%" x2="100%" y1="100%" y2="0%"><stop offset="0%" stop-color="#B7F2FF"></stop><stop offset="100%" stop-color="#C1FFE5"></stop></linearGradient><linearGradient id="dialog-stub_svg__c" x1="100%" x2="0%" y1="0%" y2="100%"><stop offset="0%" stop-color="#FFF0BF"></stop><stop offset="100%" stop-color="#FFE0D4"></stop></linearGradient></defs><g fill="none" fill-rule="evenodd"><path fill="#FFF" d="M-88-141h360v592H-88z"></path><g transform="translate(12 8)"><path fill="#FFF" d="M0 3.993A4 4 0 0 1 3.995 0h152.01A3.996 3.996 0 0 1 160 3.993v112.014a4 4 0 0 1-3.995 3.993H3.995A3.996 3.996 0 0 1 0 116.007V3.993z"></path><rect width="24" height="24" x="12" y="8" fill="url(#dialog-stub_svg__a)" rx="4"></rect><path fill="#F5F5F5" d="M71 13H44v6h27zm77 0h-17v6h17zm-35.5 10H44v6h68.5z"></path><circle cx="35" cy="11" r="6" fill="#E6EDFF" stroke="#FFF" stroke-width="2"></circle><rect width="24" height="24" x="12" y="47" fill="url(#dialog-stub_svg__b)" rx="4"></rect><path fill="#F5F5F5" d="M71 52H44v6h27zm77 0h-17v6h17zm-35.5 10H44v6h68.5z"></path><circle cx="35" cy="50" r="6" fill="#E6EDFF" stroke="#FFF" stroke-width="2"></circle><rect width="24" height="24" x="12" y="86" fill="url(#dialog-stub_svg__c)" rx="4"></rect><path fill="#F5F5F5" d="M71 91H44v6h27zm77 0h-17v6h17zm-35.5 10H44v6h68.5z"></path><circle cx="35" cy="89" r="6" fill="#E6EDFF" stroke="#FFF" stroke-width="2"></circle></g></g></svg>
                                <p><?php echo $ULang->t("Выберите чат для общения"); ?></p>
                            </div>
                          
                        </div>                         
                     </div>
                  </div>

                  <?php }else{ ?>

                    <div class="module-chat-dialog" >

                        <div class="chat-dialog-empty" >
                            <svg width="184" height="136" viewBox="0 0 184 136" class="sc-jNvrOh RZGXR"><defs><linearGradient id="dialog-stub_svg__a" x1="100%" x2="0%" y1="0%" y2="100%"><stop offset="0%" stop-color="#BAF8FF"></stop><stop offset="100%" stop-color="#D2D4FF"></stop></linearGradient><linearGradient id="dialog-stub_svg__b" x1="0%" x2="100%" y1="100%" y2="0%"><stop offset="0%" stop-color="#B7F2FF"></stop><stop offset="100%" stop-color="#C1FFE5"></stop></linearGradient><linearGradient id="dialog-stub_svg__c" x1="100%" x2="0%" y1="0%" y2="100%"><stop offset="0%" stop-color="#FFF0BF"></stop><stop offset="100%" stop-color="#FFE0D4"></stop></linearGradient></defs><g fill="none" fill-rule="evenodd"><path fill="#FFF" d="M-88-141h360v592H-88z"></path><g transform="translate(12 8)"><path fill="#FFF" d="M0 3.993A4 4 0 0 1 3.995 0h152.01A3.996 3.996 0 0 1 160 3.993v112.014a4 4 0 0 1-3.995 3.993H3.995A3.996 3.996 0 0 1 0 116.007V3.993z"></path><rect width="24" height="24" x="12" y="8" fill="url(#dialog-stub_svg__a)" rx="4"></rect><path fill="#F5F5F5" d="M71 13H44v6h27zm77 0h-17v6h17zm-35.5 10H44v6h68.5z"></path><circle cx="35" cy="11" r="6" fill="#E6EDFF" stroke="#FFF" stroke-width="2"></circle><rect width="24" height="24" x="12" y="47" fill="url(#dialog-stub_svg__b)" rx="4"></rect><path fill="#F5F5F5" d="M71 52H44v6h27zm77 0h-17v6h17zm-35.5 10H44v6h68.5z"></path><circle cx="35" cy="50" r="6" fill="#E6EDFF" stroke="#FFF" stroke-width="2"></circle><rect width="24" height="24" x="12" y="86" fill="url(#dialog-stub_svg__c)" rx="4"></rect><path fill="#F5F5F5" d="M71 91H44v6h27zm77 0h-17v6h17zm-35.5 10H44v6h68.5z"></path><circle cx="35" cy="89" r="6" fill="#E6EDFF" stroke="#FFF" stroke-width="2"></circle></g></g></svg>
                            <p><?php echo $ULang->t("У вас пока нет диалогов"); ?></p>
                        </div>
                      
                    </div>                    

                  <?php } ?>


               </div>
               
               
           </div>
        </div>



    </div>

 
    <?php include $config["basePath"] . "/templates/footer.tpl"; ?>
    

    <div class="modal-custom-bg bg-click-close" style="display: none;" id="modal-confirm-delete" >
        <div class="modal-custom animation-modal" style="max-width: 400px" >

          <span class="modal-custom-close" ><i class="las la-times"></i></span>
          
          <div class="modal-confirm-content" >
              <h4><?php echo $ULang->t("Вы действительно хотите удалить диалог?"); ?></h4>            
          </div>

          <div class="mt30" ></div>

          <div class="modal-custom-button" >
             <div>
               <button class="button-style-custom color-blue chat-user-delete schema-color-button" ><?php echo $ULang->t("Удалить"); ?></button>
             </div> 
             <div>
               <button class="button-style-custom color-light button-click-close" ><?php echo $ULang->t("Отменить"); ?></button>
             </div>                                       
          </div>

        </div>
    </div>

    <div class="modal-custom-bg bg-click-close" style="display: none;" id="modal-confirm-block" >
        <div class="modal-custom animation-modal" style="max-width: 400px" >

          <span class="modal-custom-close" ><i class="las la-times"></i></span>
          
          <div class="modal-confirm-content" >
              <h4><?php echo $ULang->t("Внести пользователя в чёрный список?"); ?></h4>    
              <p class="mt15" ><?php echo $ULang->t("Пользователь не сможет писать вам в чатах."); ?></p>        
          </div>

          <div class="mt30" ></div>

          <div class="modal-custom-button" >
             <div>
               <button class="button-style-custom color-blue chat-user-block schema-color-button" ><?php echo $ULang->t("Внести"); ?></button>
             </div> 
             <div>
               <button class="button-style-custom color-light button-click-close" ><?php echo $ULang->t("Отменить"); ?></button>
             </div>                                       
          </div>

        </div>
    </div>


  </body>
</html>