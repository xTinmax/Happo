import $ from 'jquery';
import Swiper, { Navigation, Pagination } from 'swiper';



$(function () {
  //NAVIGATION
  $(".gNavBtn").on("click touchstart", function (event) {
    event.preventDefault();
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(".gNav,.mainFix_topFix_language").removeClass("active");
      bodyScrollPrevent(false);
    } else {
      $(this).addClass("active");
      $(".gNav,.mainFix_topFix_language").addClass("active");
      bodyScrollPrevent(true);
    }
  });
  $(".gNav_main a").click(function () {
    $(".gNavBtn,.gNav,.mainFix_topFix_language").removeClass("active");
    bodyScrollPrevent(false);
  });

  //SMOOTHSCROLL
  var adjust = 0;
  $(window).on('load resize', function () {
    var windowWidth = window.innerWidth;
    if (windowWidth <= 767) {
      adjust = 40;
    } else {
      adjust = 80;
    }
  });
  $('a[href^="#"]').click(function () {
    var speed = 1600;
    if ($(this).parents(".gNav").length) {
      speed = 0;
      console.log("ナビ");
    }
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var margin = parseInt(target.css('margin-top'));
    var position = target.position().top - adjust + margin;
    $('html, body').animate({
      scrollTop: position
    }, speed, 'easeInOutCubic');
    return false;
  });

  // SCROLL
  var scrollPos = 0;
  var windowHeight = $(window).height();
  jQuery(document).scroll(function () {
    windowHeight = $(window).outerHeight();
    show('.fadeIn');
    show('.fadeIn02');
    show('.scrollAnimation');
    if (scrollPos > 70) {
      $(".mainFix_bottomFix").addClass("scroll");
    } else {
      $(".mainFix_bottomFix").removeClass("scroll");
    }
    if ($(this).scrollTop() < scrollPos) {
      $(".mainFix_topFix").removeClass("hide");
    } else {
      $(".mainFix_topFix").addClass("hide");
    }
    scrollPos = $(this).scrollTop();
  });

  //ACTIVITIES SLIDER
  
  var mySwiper = new Swiper('.activities_slider', {
    speed: 6000,
    slidesPerView: '7',
    loop: true,
    allowTouchMove: false,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
  });
  
  

  // FIXED
  function bodyScrollPrevent(flag) {
    let scrollPosition;
    const body = document.getElementsByTagName('body')[0];
    const ua = window.navigator.userAgent.toLowerCase();
    const isiOS = ua.indexOf('iphone') > -1 || ua.indexOf('ipad') > -1 || ua.indexOf('macintosh') > -1 && 'ontouchend' in document;
    const scrollBarWidth = window.innerWidth - document.body.clientWidth;
    if (flag) {
      body.style.paddingRight = scrollBarWidth + 'px';
      if (isiOS) {
        scrollPosition = -window.pageYOffset;
        body.style.position = 'fixed';
        body.style.width = '100%';
        body.style.top = scrollPosition + 'px';
      } else {
        body.style.overflow = 'hidden';
      }
    } else if (!flag) {
      body.style.paddingRight = '';
      if (isiOS) {
        scrollPosition = parseInt(body.style.top.replace(/[^0-9]/g, ''));
        body.style.position = '';
        body.style.width = '';
        body.style.top = '';
        window.scrollTo(0, scrollPosition);
      } else {
        body.style.overflow = '';
      }
    }
  }

  new Rellax('.js_rellax', {
    speed: -1,
    center: true,
  });
});

function show(el) {
   var windowHeight = jQuery(window).height();
   jQuery(el).each(function() {
      var thisPos = jQuery(this).offset().top;
      var topOfWindow = jQuery(window).scrollTop();
      if (topOfWindow + windowHeight - 100 > thisPos) {
         jQuery(this).addClass('on');
      }
   });
}
