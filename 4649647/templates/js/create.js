$(document).ready(function () {

var url_path = $("body").data("prefix");

dragula([document.getElementById('dragula')]);

function progress_step( step = 1 ){

   $('.create-list-tabs > div').hide();
   $(".create-tab-"+step).show();

}

$(document).on('click','.create-list-categories a', function (e) { 

    var _this = $(this);

    var data_id = $(this).attr("data-id");

    $.ajax({type: "POST",url: url_path + "systems/ajax/ads.php",data: "id="+data_id+"&action=create_load_category",dataType: "json",cache: false,success: function (data) {  
       
       if(data["status"] == true){

         $(".create-list-categories .row").html(data["data"]);

       }else{

         progress_step( 2 );
         
         $(".create-list-categories a").removeClass("active");
         _this.addClass("active");

         $("input[name=c_id]").val(data_id);

         if( parseInt(data["price"]) ){

           $(".create-tab-3").attr("data-tab", "show");
           $(".variant-price-name").html(data["price_name"]);

           if( parseInt(data["auction"]) ){
              $(".var_price_list").show();
           }else{
              $(".var_price_list").hide();
              $(".var_price_1").show();
              $(".var_price_2").hide();
              $("#var_price_fix").prop("checked", true);
           }

           if( parseInt(data["secure"]) ){
              $(".auction_price_sell").show();
           }else{
              $(".auction_price_sell").hide();
           }

         }else{
            $(".create-tab-3").attr("data-tab", "hide");
         }

         if( data["filters"] ){
             $(".ad-filters").html(data["filters"]);
             $(".create-tab-4").attr("data-tab", "show");
         }else{
             $(".ad-filters > div").remove();
             $(".ad-filters").html("");
             $(".create-tab-4").attr("data-tab", "hide");
         }

       }

    }});
   
   e.preventDefault();

});

$(document).on('click','.create-list-categories-back', function (e) { 

    var data_id = $(this).attr("data-id");

    $.ajax({type: "POST",url: url_path + "systems/ajax/ads.php",data: "id="+data_id+"&action=create_load_category_back",dataType: "html",cache: false,success: function (data) {  

       $(".create-list-categories .row").html(data);

    }});
   
   e.preventDefault();
   
});

$(document).on('change','.ad-filters input[type=radio]', function (e) { 

    var id_filter = $(this).closest(".filter-items").attr("id-filter");
    var id_parent = $(this).closest(".filter-items").attr("main-id-filter");
    var id_item = $(this).val();
    var element = $(this);

    if($(this).closest(".filter-items").attr("data-ids") != undefined){
       var ids = $(this).closest(".filter-items").attr("data-ids").split(",");
    }

    if(ids){

      $.each(ids,function(index,value){

        $('div[id-filter="'+value+'"]').remove();

      });

    }

    if($(this).val() != "null"){ 

      $.ajax({type: "POST",url: url_path + "systems/ajax/ads.php",data: "id_filter="+id_filter+"&id_item="+id_item+"&view=ad&action=load_items_filter",dataType: "html",cache: false,success: function (data) {

          element.closest(".filter-items").after(data);

      }}); 

    }

    e.preventDefault();
});

 $(document).on('click','.ads-image-delete', function () {    

   $(this).parent().parent().find("input").remove();
   $(this).parent().parent().hide();

 });

 
 $(document).on('click','.add-gallery', function () { $('.ads-images-multiple').click(); });
 $(document).on('change','.ads-images-multiple', function () {  
     if(this.files.length > 0){  
        uploader_gallery(this);
     }   
 });

 function uploader_gallery(input) {

    var data = new FormData();
    $.each( input.files, function( key, value ){
        data.append( key, value );
    });

    data.append('action', 'load_temp_image');
   
   var i = 0;
   var count_load_img = input.files.length;

    while (i < count_load_img) {

      if (input.files && input.files[i]) {
          var reader = new FileReader();
          
          reader.onload = function (e) { 

             $(".container-gallery").append('<div class="ads-image-loader ads-image-item" ><div><div class="spinner-grow text-primary"></div><img class="ads-image-sort" data-angle="0" src="'+e.target.result+'" /></div></div>'); 
          
          };

          reader.readAsDataURL(input.files[i]);
      }
      
      i++
    }
 
    $.ajax({url: url_path + "systems/ajax/ads.php",type: 'POST',data: data,cache: false,dataType: 'html',processData: false,contentType: false,
        success: function( respond, textStatus, jqXHR ){

             $(".container-gallery").append(respond);
             $(".ads-image-loader").hide();

        }
    });


 }

 
 $(document).on('click','.ads-image-rotate', function (e) {   

    var parent = $(this).parent(); 
    var step = 90; 
    var angle = parent.find("img").data('angle') + step;

    if (angle > 360) angle = step;

    parent.find("img").data('angle', angle);

    $(this).prop('disabled', true);
    $.ajax({type: "POST",url: url_path + "systems/ajax/ads.php",data: "name="+parent.find("input").val()+"&action=temp_rotate_image",dataType: "html",cache: false,success: function (data) {  parent.find("img").css("-webkit-transform","rotate(+"+angle+"deg)"); $('.ads-image-rotate').prop('disabled', false);  }});
    e.preventDefault();

 });

 $(document).on('click','.SearchMetroResults div', function (e) { 

    var color = $(this).data("color");
    var name = $(this).data("name");
    var id = $(this).data("id");

    if( !$(".ads-container-metro-station").find("input[value="+id+"]").length ){
    
    $(".ads-container-metro-station").append('<span><i style="background-color:'+color+';"></i>'+name+' <i class="las la-times ads-metro-delete"></i><input type="hidden" value="'+id+'" name="metro[]"></span>');
    
    }

    $(".SearchMetroResults").hide();
    $(".action-input-search-metro").val("");

 });

 $(document).on('click','.ads-metro-delete', function (e) { 

    $(this).parent().remove();

 });

 $(document).on('input click','.action-input-search-metro', function (e) { 
    $.ajax({type: "POST",url: url_path + "systems/ajax/geo.php",data: "city_id=" + $("input[name=city_id]").val() + "&search="+$(this).val()+"&action=search_metro",dataType: "html",cache: false,success: function (data) { if(data != false){ $(".SearchMetroResults").html(data).show(); }else{ $(".SearchMetroResults").html("").hide(); }  }});  
 });

 $(document).on('change','input[name=type_person]', function (e) {
   if($(this).val() == "company"){ $(".ads-name-company").show(); }else{ $(".ads-name-company").hide(); }
 });

 $(document).on('click','.SearchCityOptions .item-city', function () {  
    $.ajax({type: "POST",url: url_path + "systems/ajax/geo.php",data: "id="+$(this).attr("id-city")+"&action=city-options",dataType: "json",cache: false,success: function (data) { if( data["metro"] ){ $(".container-list-metro").html( data["metro"] ); $(".options-metro").show(); }else{ $(".options-metro").hide(); $(".container-list-metro").find("input").remove(); }  if( data["area"] ){ $(".container-list-area").html( data["area"] ); $(".options-area").show(); }else{ $(".options-area").hide(); $(".container-list-area").find("input").remove(); }   }});
 });


function ad_create(){

  $('.ads-form-ajax button').prop('disabled', true);

    $.ajax({type: "POST",url: url_path + "systems/ajax/ads.php",data: $(".ads-form-ajax").serialize()+"&action=ad-create",dataType: "json",cache: false,success: function (data) { 

       if(data["status"] == true){

            location.href = data["location"];

        }else{

            alert( data["answer"] );
            $('.ads-form-ajax button').prop('disabled', false);

        }

    }});

}

$(document).on('change','input[name=var_price]', function (e) { 

    if( $(this).val() == "fix" ){

       $(".var_price_1").show();
       $(".var_price_2").hide();

    }else if( $(this).val() == "auction" ){
       
       $(".var_price_2").show();
       $(".var_price_1").hide();

    }

});


$(document).on('click','.create-tab-continue', function (e) { 
    
    $(".msg-error").hide();

    var element = $(this);

    $(this).prop('disabled', true);
    
    var step = parseInt($(this).attr("data-step"));

    $.ajax({type: "POST",url: url_path + "systems/ajax/ads.php",data: $(".ads-form-ajax").serialize() + "&step="+step+"&action=create_progress_step",dataType: "json",cache: false,success: function (data) { 

        if(data["status"] == true){

            if( step == 6 ){

               ad_create();

            }else{

               findNextTab( step + 1 );

            }

        }else{

            $.each( data["answer"] ,function(index,value){
              
              $(".msg-error[data-name="+index+"]").html(value).show();

            });

        }

        element.prop('disabled', false);

     }
    });

     
});

$(document).on('click','.create-tab-prev', function (e) { 
    
    var step = parseInt($(this).attr("data-step"));

    findPrevTab(step-1);

});

function findPrevTab(step){
  if( $(".create-tab-"+step).attr("data-tab") == "show" ) 
    progress_step( step );
  else 
    if(step != 1) return findPrevTab(step-1); else progress_step( 1 );
}

function findNextTab(step){
  if( $(".create-tab-"+step).attr("data-tab") == "show" ) 
    progress_step( step );
  else 
    if(step != 6) return findNextTab(step+1); else progress_step( 6 );
}


});

$(window).load(function() { 

    $(".display-load-page").show();
    $(".preload").hide();

});