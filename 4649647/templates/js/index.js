$(document).ready(function () {

   var url_path = $("body").data("prefix");
   var currentCountPage = 1;
   var loadingAdScroll = true;

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

   function indexLoadAds( _page = 1, _this_button = null, _scroll = false ){

    loadingAdScroll = false;

        if( _this_button != null ) _this_button.prop('disabled', true);
        $.ajax({type: "POST",url: url_path + "systems/ajax/ads.php",data: "page="+_page+"&action=load_index_ads",dataType: "json",cache: false,success: function (data) {
            // console.log(data);
            $(".action-index-load-ads").hide();
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
        // VIP
        $.ajax({type: "POST",url: url_path + "systems/ajax/ads.php",data: "page="+_page+"&action=load_index_vip_ads",dataType: "json",cache: false,success: function (data) {
            // console.log(data);
            $(".action-index-load-ads").hide();
            $(".vip-catalog-results").append('<div class="load-page'+_page+' col-lg-12" ></div><div class="row flex-nowrap no-gutters gutters10 vip-slider"><div class="vip-slider-arrow left-arrow"><i class="las la-arrow-left"></i></div><div class="vip-slider-arrow right-arrow"><i class="las la-arrow-right"></i></div>'+data["content"]+'</div>');
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

   $(document).on('click','.action-index-load-ads > button', function () {

        currentCountPage = currentCountPage + 1;

        indexLoadAds( currentCountPage , $(this), true );

   });

   if( $("body").data("type-loading") == 2 ){

      $(window).scroll(function(){

         if( ( $(document).scrollTop() + 500 ) >= $(".catalog-results").height() ){
            if(loadingAdScroll == true){

               $(".preload-scroll").show();

               currentCountPage = currentCountPage + 1;

               indexLoadAds( currentCountPage , null, false );

            }
         }

      });

   }


   indexLoadAds();
   console.log('index.js');
   // news slider
   let newsBlock = $(".news-items");
   newsBlock.click(function () {
    if(event.target.classList.contains('left-arrow') || event.target.classList.contains('la-arrow-left')) {
      // console.log('Кнопка влево');
      this.children[3].classList.add('left-out');
      this.children[3].classList.remove('left-outside');
      this.children[4].classList.add('left-outside');
      this.children[4].classList.remove('left-news');
      this.children[5].classList.add('left-news');
      this.children[5].classList.remove('right-news');
      this.children[6].classList.add('right-news');
      this.children[6].classList.remove('right-outside');
      this.children[7].classList.add('right-outside');
      this.children[7].classList.remove('right-out');
      this.children[2].classList.remove('left-out');
      this.children[2].classList.add('d-none');
      this.append(this.children[2]);
      this.children[7].classList.add('right-out');
      this.children[7].classList.remove('d-none');
    }
    if(event.target.classList.contains('right-arrow') || event.target.classList.contains('la-arrow-right')) {
      // console.log('Кнопка вправо');
      this.children[2].classList.add('left-outside');
      this.children[2].classList.remove('left-out');
      this.children[3].classList.add('left-news');
      this.children[3].classList.remove('left-outside');
      this.children[4].classList.add('right-news');
      this.children[4].classList.remove('left-news');
      this.children[5].classList.add('right-outside');
      this.children[5].classList.remove('right-news');
      this.children[6].classList.add('right-out');
      this.children[6].classList.remove('right-outside');
      this.children[7].classList.add('d-none');
      this.children[7].classList.remove('right-out');
      this.children[1].after(this.lastElementChild);
      this.children[2].classList.add('left-out');
      this.children[2].classList.remove('d-none');
    }
   });
   let vipBlock = $(".vip-catalog-results");
   vipBlock.click(function () {
     let containerEl = this.children[1];
     this.children[1].style.height = this.children[1].children[2].offsetHeight+'px';
     if(event.target.classList.contains('left-arrow') || event.target.classList.contains('la-arrow-left')) {
       // console.log('Кнопка влево');
       containerEl.children[2].classList.add('move-to-left');
       setTimeout(()=>{containerEl.children[2].classList.remove('move-to-left'); containerEl.append(containerEl.children[2]);}, 300);
     }
      if(event.target.classList.contains('right-arrow') || event.target.classList.contains('la-arrow-right')) {
        // console.log('Кнопка вправо');
        containerEl.children[6].classList.add('move-to-right');
        setTimeout(()=>{containerEl.children[6].classList.remove('move-to-right'); containerEl.children[1].after(containerEl.lastElementChild);}, 300);

      }
   });
});
