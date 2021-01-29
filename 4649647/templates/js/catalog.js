$(document).ready(function () {
   
 var url_path = $("body").data("prefix");
 var currentCountPage = 1;
 var loadingAdScroll = true;
 
 function setFiltersUrl(){

  var hashes = window.location.href.split('?');
      
  var params = $.param($('.form-filter, .modal-form-filter, .modal-geo-options-form').serializeArray().filter(function(el) {
          return $.trim(el.value);
      }));

      history.pushState("", "", hashes[0]+"?"+params);


 }

 function tippyLoad(){
      tippy('[data-tippy-placement]', {
        delay: 100,
        arrow: true,
        arrowType: 'sharp',
        size: 'regular',
        duration: 200,
        animation: 'shift-away',
        animateFill: true,
        theme: 'dark',
        distance: 10,
      });
 }

var status_load = 0;

$(document).on('change','.form-filter input, .modal-form-filter input', function (e) { 

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
        
        if(status_load == 0){

            status_load = 1;

            $.ajax({type: "POST",url: url_path + "systems/ajax/ads.php",data: "id_filter="+id_filter+"&id_item="+id_item+"&view=catalog&action=load_items_filter",dataType: "html",cache: false,success: function (data) {

                element.closest(".filter-items").after(data);

                status_load = 0;

            }});

        }

    }

    e.preventDefault();
});

$(document).on('click','.toggle-list-options > span', function (e) { 
    
    $(this).parent().find(".catalog-list-options-content").toggle();
    $(this).parent().toggleClass("catalog-list-options-active");

});

function formFilter(){
  return $.param($('.form-filter, .modal-form-filter, .modal-geo-options-form').serializeArray().filter(function(el) {
          return $.trim(el.value);
      }));  
}

 $(document).on('submit','.form-filter', function (e) { 

      $.ajax({type: "POST",url: url_path + "systems/ajax/ads.php",data: formFilter()+"&action=load_filters_ads",dataType: "json",cache: false,success: function (data) {
          
          location.href = data["params"];

      }}); 

    e.preventDefault(); 

 });

 $(document).on("click", ".action-clear-filter", function(e) {

     location.href = window.location.href.split("?")[0];
     e.preventDefault();

 });


function auctionTime(){
    $('[data-countdown="true"]').each(function (index, element) {
        $(element).countdown( $(element).attr("data-date") )
        .on('update.countdown', function(event) {
          var format = '%M '+$(".lang-js-2").html()+' %S '+$(".lang-js-3").html();
          $(element).html(event.strftime(format));
        })
        .on('finish.countdown', function(event) {
            $(element).removeClass("pulse-time").html( $(".lang-js-1").html() );
        });

    });
}

$(document).on("click", ".catalog-ad-view", function(e) {

    $.ajax({type: "POST",url: url_path + "systems/ajax/ads.php",data: "view=" + $(this).data("view") + "&action=catalog_view",dataType: "html",cache: false,success: function (data) {
        location.reload();
    }});

});

$(document).on('click','.toggle-catalog-filter', function () {
   
   $(".sidebar-filter").clone().appendTo(".mobile-filter-content");
   $(".mobile-filter").show();
   $(".mobile-footer-menu").hide();
   $("body").css("overflow", "hidden");

});

$(document).on('click','.mobile-filter-header i', function () {
   
   $(".mobile-filter-content").find("input").remove();
   $(".mobile-filter-content").html("");
   $(".mobile-filter").hide();
   $(".mobile-footer-menu").show();
   $("body").css("overflow", "auto");

});

$(document).on('input','.catalog-list-options-search input', function () {
  var str = $(this).val().toLowerCase();
    
    $(this).parent().parent().find('.catalog-list-options-items > div').show();
    
    $(this).parent().parent().find('.catalog-list-options-items > div').each(function(){
      if ($(this).find("label").text().toLowerCase().indexOf(str) < 0){
          $(this).hide();
      }
    });  
      
});

$(document).on('click','.filter-accept', function () { 
   
    $.ajax({type: "POST",url: url_path + "systems/ajax/ads.php",data: formFilter()+"&action=load_filters_ads",dataType: "json",cache: false,success: function (data) {
        
        location.href = data["params"];

    }});

});

function catalogLoadAds( _page = 1, _this_button = null, _scroll = false ){

  loadingAdScroll = false;

    if( _this_button != null ) _this_button.prop('disabled', true);
    $.ajax({type: "POST",url: url_path + "systems/ajax/ads.php",data: formFilter() + "&page="+_page+"&action=load_catalog_ads",dataType: "json",cache: false,success: function (data) { 
        
        $(".action-catalog-load-ads").hide();
        $(".catalog-results").append('<div class="load-page'+_page+' col-lg-12" ></div><div class="row no-gutters gutters10" style="display: none;" >'+data["content"]+'</div>');
        $('.load-page'+_page).next().fadeIn('slow');

        if(_scroll){

          $('html, body').animate({
          scrollTop: $('.load-page'+_page).offset().top-50
          }, 500, 'linear');

        }

        auctionTime();  
        tippyLoad();   

        loadingAdScroll = data["found"]; 
 
        $(".preload, .preload-scroll").hide();

    }});

}

catalogLoadAds();

$(document).on('click','.action-catalog-load-ads > button', function () { 
    
    currentCountPage = currentCountPage + 1;
    
    catalogLoadAds( currentCountPage , $(this), true );   
  
});

if( $("body").data("type-loading") == 2 ){

    $(window).scroll(function(){ 

       if( ( $(document).scrollTop() + 500 ) >= $(".catalog-results").height() ){
          if(loadingAdScroll == true){

             $(".preload-scroll").show();
             
             currentCountPage = currentCountPage + 1;
            
             catalogLoadAds( currentCountPage , null, false );

          }
       }

    });

}


});

