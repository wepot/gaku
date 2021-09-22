"use strict";

//--------------------------------
// ハンバーガーメニュー開閉
//--------------------------------
jQuery(function ($) {
  $(".gnavSp_btn").on("click", function () {
    $(this).toggleClass("open");

    if ($(this).hasClass("open")) {
      $("body").addClass("is-fixed");
      $(".gnavSp").addClass("open");
    } else {
      $("body").removeClass("is-fixed");
      $(".gnavSp").removeClass("open");
    }
  });
});

jQuery(function ($) {
  $(".gnavSp_item").click(function () {
    $("body").removeClass("is-fixed");
    $(".gnavSp, .gnavSp_btn").removeClass("open");
  });

  $(".gnavSp_list a[href]").on("click", function (event) {
    $(".gnavSp_btn").trigger("click");
  });
});

//--------------------------------
// 検索ボックス
//--------------------------------

$(".open-btn1").click(function () {
  $(this).toggleClass("btn-active");
  $("#search-wrap").toggleClass("panel-active");
  $("#search-text").focus();
}); //--------------------------------
// トップへ戻るボタン
//--------------------------------

function getScrolled() {
  return window.pageYOffset !== undefined ? window.pageYOffset : document.documentElement.scrollTop;
}

var topButton = document.getElementById('js-scroll-fadein');

window.onscroll = function () {
  getScrolled() > 200 ? topButton.classList.add('is-fadein') : topButton.classList.remove('is-fadein');
};

function scrollToTop() {
  var scrolled = getScrolled();
  window.scrollTo(0, Math.floor(scrolled / 2));

  if (scrolled > 0) {
    window.setTimeout(scrollToTop, 30);
  }
}

;

topButton.onclick = function () {
  scrollToTop();
}; //--------------------------------
// 内部リンク位置
//--------------------------------


jQuery(function ($) {
  var headerHeight = $("header").outerHeight();
  var urlHash = location.hash;

  if (urlHash) {
    $("body,html").stop().scrollTop(0);
    setTimeout(function () {
      var target = $(urlHash);
      var position = target.offset().top - headerHeight;
      $("body,html").stop().animate({
        scrollTop: position
      }, 500);
    }, 100);
  }

  $('a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href);
    var position = target.offset().top - headerHeight;
    $("body,html").stop().animate({
      scrollTop: position
    }, 500);
    return false;
  });
});