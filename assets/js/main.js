"use strict";

jQuery(function() {
  jQuery('a[href^="#"]').on('click', function(){
    var speed = 300;
    var href= jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" || href == "" ? 'html' : href);
    var position = target.offset().top;
    jQuery("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
    console.log('hoge')
  });

  // ヘッダースクロール時固定
  let headerElement = jQuery(".header")

   jQuery(window).on("scroll", function () {
    const heroBottom = 52;
    if (jQuery(window).scrollTop() > heroBottom) {
      headerElement.addClass("-fixed");
    } else {
      if (!(jQuery("#trigger").hasClass("active"))) {
        headerElement.removeClass("-fixed");
      }
    }
  });

  // タブレットの時はPC版縮小表示
  let ua = navigator.userAgent;
  if((ua.indexOf('iPhone') > 0) || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)){
      jQuery('head').prepend('<meta name="viewport" content="width=device-width,initial-scale=1">');
  } else {
      jQuery('head').prepend('<meta name="viewport" content="width=1440">');
  }

  // spメニューOPEN
  jQuery(".header__trigger").on('click', function() {
    if ((jQuery(this)).hasClass("-opened")) {
      jQuery(".header__hammenuWrapper").fadeOut(300);
    } else {
      jQuery(".header__hammenuWrapper").fadeIn(300);
      jQuery(".header__hammenuWrapper").css('display', 'flex');
    }
    if (!(jQuery("#header").hasClass("-fixed"))) {
      jQuery(".header").addClass('-fixed');
    } else {
      if (_window.scrollTop() < 94) {
        jQuery("header").removeClass("-fixed");
      }
    }
    jQuery(this).toggleClass('-opened')
    jQuery(".header__trigger").toggleClass('active');
  });

  // spメニューページ内リンク
  jQuery(".header .menu a").on("click", function() {
    jQuery(".header__hammenuWrapper").css('display', 'none');
    jQuery(".header__trigger").removeClass('-opened');
  })

  // fadein
  jQuery(function () {
    jQuery(window).scroll(function () {
      jQuery(".fadein").each(function () {
        var elemPos = jQuery(this).offset().top;
        var scroll = jQuery(window).scrollTop();
        var windowHeight = jQuery(window).height();
        if (scroll > elemPos - windowHeight + 100) {
          jQuery(this).addClass("scrollin");
        }
      });
    });
    jQuery(window).scroll();
  });

  // ヘッダー固定
  var _window = jQuery(window),
  _header = jQuery(".header__nav"),
  heroBottom;

  _window.on("scroll", function () {
    heroBottom = 80;
    if (_window.scrollTop() > heroBottom) {
      _header.addClass("-fixed");
      _header.addClass("-hasLogoBgColor");
    } else {
      _header.removeClass("-fixed");
    }
  });

  _window.trigger("scroll");
})