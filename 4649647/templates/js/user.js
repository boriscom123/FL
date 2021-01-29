$(document).ready(function () {
   
   var url_path = $("body").data("prefix");
   var id_dialog = 0;
   var id_review = 0;

   function loadChat( event ){

     id_dialog = event.data("id");

     if(id_dialog){

        $(".module-chat-users > div").removeClass("active");
        event.addClass("active");

        $(".module-chat-dialog").html('<div class="chat-dialog-spinner"><div class="spinner-border text-primary" role="status"></div></div>');

         $.ajax({type: "POST",url: url_path + "systems/ajax/profile.php",data: "id=" + id_dialog + "&action=load_chat",dataType: "json",cache: false,success: function (data) { 
            $(".module-chat-dialog").html(data["dialog"]);
            if(data["count_msg"]) $(".update-count-message").html(data["count_msg"]); else $(".update-count-message").hide();
            $("[data-id="+id_dialog+"]").find(".module-chat-users-count-msg").hide();
            $(".module-chat-dialog-content").scrollTop($(".module-chat-dialog-content").get(0).scrollHeight);
         }});
         
      }

   }

   loadChat( $(".module-chat-users .active") );

   $(document).on('click','.module-chat-users > div', function () {  
      
     loadChat( $(this) );

   });

   $(document).on('click','.chat-dialog-send', function (e) {  

   	var this_ = $(this);
      
      if($(".chat-dialog-text").val()){

      this_.prop('disabled', true);

      $.ajax({type: "POST",url: url_path + "systems/ajax/profile.php",data: "id=" + id_dialog + "&text=" + encodeURIComponent($(".chat-dialog-text").val())  + "&action=send_chat",dataType: "json",cache: false,success: function (data) { 
         $(".module-chat-dialog").html(data["dialog"]);
         $(".chat-dialog-text").val("");
         $(".module-chat-dialog-content").scrollTop($(".module-chat-dialog-content").get(0).scrollHeight);
         this_.prop('disabled', false);
      }});

      }

      e.preventDefault();

   });


   $('.user-avatar-replace').click(function (e) { $('#user-form-avatar > input').click(); });
   $('#user-form-avatar > input').on('change', function(){ 

        var data_form = new FormData($('#user-form-avatar')[0]);
        data_form.append('action', 'user-avatar'); 

        $.ajax({type: "POST",url: url_path + "systems/ajax/profile.php",data: data_form,dataType: "json",cache: false,contentType: false,processData: false,                        
            success: function (data){
               if(!data["error"]){ 
                  $('.user-avatar-img img').attr("src",data["img"]);
               }else{
                  alert(data["error"]);
               }                                            
            }
        });

   });

   $(document).on('click','.chat-user-delete', function (e) {  

      $.ajax({type: "POST",url: url_path + "systems/ajax/profile.php",data: "id=" + id_dialog + "&action=delete_chat",dataType: "json",cache: false,success: function (data) { 

         if(data["count_chat_users"]){        
            $(".module-chat-dialog").html(data["dialog"]);
            $("[data-id="+id_dialog+"]").hide();
         }else{
            $(".module-chat").html(data["dialog"]); 
         }

         $(".modal-custom-bg").hide();
         $("body").css("overflow", "auto"); 

      }});

      e.preventDefault();

   });

   $(document).on('click','.chat-user-block', function (e) {  

      $('.chat-user-block').prop('disabled', true);

      $.ajax({type: "POST",url: url_path + "systems/ajax/profile.php",data: "id=" + id_dialog + "&action=chat_user_locked",dataType: "json",cache: false,success: function (data) { 

         $(".module-chat-dialog").html(data["dialog"]);
         $(".modal-custom-bg").hide();
         $("body").css("overflow", "auto");
         $('.chat-user-block').prop('disabled', false);

      }});

      e.preventDefault();

   });

   $(document).on('click','.profile-user-block', function (e) {  

      $.ajax({type: "POST",url: url_path + "systems/ajax/profile.php",data: "id=" + $(this).data("id") + "&action=profile_user_locked",dataType: "json",cache: false,success: function (data) { 

         location.reload();

      }});

      e.preventDefault();

   });

   $(document).on('click','.dialog-header-menu i', function (e) {  

      $(".chat-options-list").toggle();

   });


   $(document).on('click','.user-menu-tab > div', function () {  

      var tab = $(this).data("id-tab");

      $(".user-menu-tab-content").hide();
      $(".user-menu-tab > div").removeClass("active");
      $(this).addClass("active");
      $(".user-menu-tab-content[data-id-tab="+tab+"]").show();

   });

   $(document).on('click','.user-balance-payment > div', function () {  

      $(".user-balance-payment > div").removeClass("active");
      $(this).addClass("active");
      $(this).find("input").prop("checked", true);

   });

   $(document).on('click','.user-balance-summa > div', function () {  

      $(".user-balance-summa > div").removeClass("active");
      $(this).addClass("active");
      $(this).find("input").prop("checked", true);

      if( $(this).find("input").val() ){
         $(".balance-input-amount").hide();
      }else{
         $(".balance-input-amount").show();
      }

   });

   $(document).on('submit','.form-balance', function (e) {  

      $('.form-balance').find("button").prop("disabled", true);

      $.ajax({type: "POST",url: url_path + "systems/ajax/profile.php",data: $(this).serialize() + "&action=balance_payment",dataType: "json",cache: false,success: function (data) { 

         if(data["status"]){
            if( data["redirect"]["link"] ){
               location.href = data["redirect"]["link"];
            }else{
               $(".redirect-form-pay").html(data["redirect"]["form"]);
               $(".form-pay .pay-trans").click();               
            }
         }else{
            alert(data["answer"]);
         }

         $('.form-balance').find("button").prop("disabled", false);

      }});

      e.preventDefault();

   });

   $(document).on('click','.user-mobile-menu > span', function (e) {  

      $(this).next().toggle();

   });

   $(document).on('submit','.user-form-settings', function (e) {  

      $.ajax({type: "POST",url: url_path + "systems/ajax/profile.php",data: $(this).serialize() + "&action=user_edit",dataType: "json",cache: false,success: function (data) { 

         if(data["status"]){
            location.href = data["location"];
         }else{

            var temp = [];

            $.each( data["answer"] ,function(index,value){
              
              temp.push(index);

              $(".msg-error[data-name="+index+"]").html(value).show();

            });

            $('html, body').animate({ scrollTop: $(".msg-error[data-name="+temp[0]+"]").offset().top-130 }, 500);

         }

      }});

      e.preventDefault();

   });

  $(document).on('change','input[name=status]', function (e) { 
      
      if($(this).val() == "user"){
         $(".user-name-company").hide();
      }else{
         $(".user-name-company").show();
      }

  });

   $(document).on('click','.user-edit-pass', function (e) {  

      $.ajax({type: "POST",url: url_path + "systems/ajax/profile.php",data: "user_current_pass=" + $("input[name=user_current_pass]").val() + "&user_new_pass=" + $("input[name=user_new_pass]").val() + "&action=user_edit_pass",dataType: "json",cache: false,success: function (data) { 

         if(data["status"]){
            location.reload();
         }else{
            alert(data["answer"]);
         }

      }});

      e.preventDefault();

   });

   $(document).on('click','.user-edit-email', function (e) {  
      
      $('.user-edit-email').prop('disabled', true);

      $.ajax({type: "POST",url: url_path + "systems/ajax/profile.php",data: "user_email=" + $("input[name=email]").val() + "&action=user_edit_email",dataType: "json",cache: false,success: function (data) { 

         if(data["status"]){
            $(".confirm-edit-email").html(data["answer"]).show();
            $("input[name=email]").hide();
         }else{
            alert(data["answer"]);
            $('.user-edit-email').prop('disabled', false);
         }

      }});

      e.preventDefault();

   });

   $(document).on('click','.user-edit-phone-send', function (e) {  
      
      $('.user-edit-phone-send').prop('disabled', true);

      $.ajax({type: "POST",url: url_path + "systems/ajax/profile.php",data: "phone=" + $("input[name=phone]").val() + "&action=user_edit_phone_send",dataType: "json",cache: false,success: function (data) { 

         if(data["status"]){
            $("#modal-edit-phone input[name=code]").show();
            $("#modal-edit-phone input[name=phone]").hide();
            $(".user-edit-phone-send").hide();
            $(".user-edit-phone-save").show();
         }else{
            alert(data["answer"]);
            $('.user-edit-phone-send').prop('disabled', false);
         }

      }});

      e.preventDefault();

   });

   $(document).on('click','.user-edit-phone-save', function (e) {  
      
      $('.user-edit-phone-save').prop('disabled', true);

      $.ajax({type: "POST",url: url_path + "systems/ajax/profile.php",data: "code=" + $("input[name=code]").val() + "&phone=" + $("input[name=phone]").val() + "&action=user_edit_phone_save",dataType: "json",cache: false,success: function (data) { 

         if(data["status"]){
            location.reload();
         }else{
            alert(data["answer"]);
            $('.user-edit-phone-save').prop('disabled', false);
         }

      }});

      e.preventDefault();

   });

   $(document).on('change','.modal-edit-notifications-content input', function (e) {  
      
      $.ajax({type: "POST",url: url_path + "systems/ajax/profile.php",data: $(".form-edit-notifications").serialize() + "&action=user_edit_notifications",dataType: "html",cache: false,success: function (data) { 
      }});

      e.preventDefault();

   });

   $(document).on('click','.user-edit-bank-card', function (e) {  
      
      $(this).prop('disabled', true);

      $.ajax({type: "POST",url: url_path + "systems/ajax/profile.php",data: "bank_card=" + $("input[name=bank_card]").val() + "&action=user_edit_bank_card",dataType: "json",cache: false,success: function (data) { 

         if(data["status"]){
            location.reload();
         }else{
            alert(data["answer"]);
            $('.user-edit-bank-card').prop('disabled', false);
         }

      }});

      e.preventDefault();

   });

   $(document).on('click','.user-delete-review', function (e) {  
      
      $(this).prop('disabled', true);

      $.ajax({type: "POST",url: url_path + "systems/ajax/profile.php",data: "id=" + id_review + "&action=delete_review",dataType: "html",cache: false,success: function (data) { 

         location.reload();

      }});

      e.preventDefault();

   });

   $(document).on('click','.user-review-item-delete', function (e) {  
      
      id_review = $(this).data("id");

   });


});