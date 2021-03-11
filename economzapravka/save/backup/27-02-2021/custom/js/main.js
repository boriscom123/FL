$(document).ready(function(){

$('.slider-reviews').slick({
    dots: true,
    infinite: true,
    slidesToShow: 2,
    arrows: true,
    fade: false,
    prevArrow: '<button type="button" class="slick-prev"><img src="https://economzapravka.ru/wp-content/themes/custom/img/prev.png"></button>',
    nextArrow: '<button type="button" class="slick-next"><img src="https://economzapravka.ru/wp-content/themes/custom/img/next.png"></button>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          arrows: false,
          fade: true,
          dots: true
        }
      },
    ]
  });

  

  //эта функция выполняется, когда страница полностью загрузилась
$(document).ready(function() {
  var menuToggle = $('.menu-toggle');
  var nav = $('.main-menu');
  //при нажатии на кнопку "меню", меню выезжает сверху
  $(menuToggle).on('click', function(e) {
    //так как menuToggle у нас ссылка, то нужно отменить дефолтное действие
    //при нажатии на нее(переход по ссылке). Метод применяется к событию event.
    e.preventDefault();
    nav.slideToggle();
    $(menuToggle).toggleClass('active');
  });

  if (menuToggle.is(':visible')) {
    $('.main-menu li a').on('click', function(e) {
      //так как menuToggle у нас ссылка, то нужно отменить дефолтное действие
      //при нажатии на нее(переход по ссылке). Метод применяется к событию event.
      nav.slideToggle();
    });
  }

  $('.main-menu li a').on('click', function(e) {
    $(menuToggle).removeClass('active');
  });
 


  
  $(window).resize(function() {
    var width = $(window).width();
    if(width > 768 && nav.is(':hidden')) {
      nav.removeAttr('style');
    }
  });


  // menuscroll
// Basice Code keep it 
  $(document).ready(function () {
    $(document).on("scroll", onScroll);
  
    //smoothscroll
    $('nav li a').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
  
        $('nav li a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
  
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top-20
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
  });
  
  // Use Your Class or ID For Selection 
  
  function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('nav li a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('nav li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
  }  

});


// POPUP

// Hinge effect popup
$('a.hinge1').magnificPopup({
  removalDelay: 0, //delay removal by X to allow out-animation
  callbacks: {
    beforeClose: function() {
        this.content.addClass('hinge');
    }, 
    close: function() {
        this.content.removeClass('hinge'); 
    }
  },
  midClick: true
});

let bg = document.querySelector('.mouse-parallax-bg');
let bg1 = document.querySelector('.mouse-parallax-bg1');
let bg2 = document.querySelector('.mouse-parallax-bg2');
let bg4 = document.querySelector('.mouse-parallax-bg4');
let bg5 = document.querySelector('.mouse-parallax-bg5');
let bg6 = document.querySelector('.mouse-parallax-bg6');
window.addEventListener('mousemove', function(e) {
    let x = e.clientX / window.innerWidth;
    let y = e.clientY / window.innerHeight;  
    bg.style.transform = 'translate(-' + x * 50 + 'px, -' + y * 50 + 'px)';
    bg1.style.transform = 'translate(-' + x * 50 + 'px, -' + y * 50 + 'px)';
    bg2.style.transform = 'translate(-' + x * 50 + 'px, -' + y * 50 + 'px)';
    bg4.style.transform = 'translate(-' + x * 50 + 'px, -' + y * 50 + 'px)';
    bg5.style.transform = 'translate(-' + x * 50 + 'px, -' + y * 50 + 'px)';
    bg6.style.transform = 'translate(-' + x * 50 + 'px, -' + y * 50 + 'px)';
});

$(document).ready(function(){
    
  //Check to see if the window is top if not then display button
  $(window).scroll(function(){
      if ($(this).scrollTop() > 100) {
          $('.scrollToTop').fadeIn();
      } else {
          $('.scrollToTop').fadeOut();
      }
  });
  
  //Click event to scroll to top
  $('.scrollToTop').click(function(){
      $('html, body').animate({scrollTop : 0},800);
      return false;
  });
  
});

$('.touchnumber').click(function(event){
  event.preventDefault();
});

});