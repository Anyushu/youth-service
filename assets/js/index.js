// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";
import slick from "slick-carousel";

$(function ($) {
  let w = $(window).width();
  let md = 991.98;

  // リサイズ
  $(window).on("load resize", function () {
    if (w <= md) {
      $(".img-switch").each(function () {
        $(this).attr("src", $(this).attr("src").replace("_pc", "_sp"));
        let srcset = $(this).attr("srcset");
        if (srcset != null) {
          let result = srcset.replace("_pc", "_sp");
          while (result !== srcset) {
            srcset = srcset.replace("_pc", "_sp");
            result = result.replace("_pc", "_sp");
          }
          $(this).attr("srcset", result);
        }
      });
    }
  });

  // スクロールイベント
  $(window).on("scroll", function () {
    let s = $(window).scrollTop();
  });

  // スムーススクロール
  $('a[href^="#"]').on("click", function () {
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - 100;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

  // menu
  $(".outermenu--toggle").on("change", function () {
    let check = $(this).prop("checked");
    if (check) {
      $(".outermenu__wrap").addClass("active");
    } else {
      $(".outermenu__wrap").removeClass("active");
    }
  });
  $(".outermenu__wrap__inner__close").on("click", function () {
    $(".outermenu__wrap").removeClass("active");
    $(".outermenu--toggle").prop("checked", false);
  });

  // slick
  $(".voice__list").slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    centerPadding: "20vw",
    adaptiveHeight: true,
    prevArrow: '<span class="home__camp__slide__prevarrow"><i class="fas fa-chevron-left"></i></span>',
    nextArrow: '<span class="home__camp__slide__nextarrow"><i class="fas fa-chevron-right"></i></span>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          centerPadding: "0",
        },
      },
    ],
  });
  $(".home__camp__slide").slick({
    infinite: true,
    speed: 300,
    slidesPerRow: 3,
    centerMode: true,
    centerPadding: "10vw",
    prevArrow: '<span class="home__camp__slide__prevarrow"><i class="fas fa-chevron-left"></i></span>',
    nextArrow: '<span class="home__camp__slide__nextarrow"><i class="fas fa-chevron-right"></i></span>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          slidesPerRow: 1,
          centerPadding: "5vw",
        },
      },
    ],
  });
  $(".home__mv__slide--1").slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: "linear",
    speed: 8000,
    slidesToShow: 4,
    slidesToScroll: 1,
    vertical: true,
    infinite: true,
    touchMove: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
        },
      },
    ],
  });
  $(".home__mv__slide--2").slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: "linear",
    speed: 13000,
    slidesToShow: 4,
    slidesToScroll: 1,
    vertical: true,
    infinite: true,
    touchMove: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
        },
      },
    ],
  });
  $(".home__mv__slide--3").slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: "linear",
    speed: 8000,
    slidesToShow: 4,
    slidesToScroll: 1,
    vertical: true,
    infinite: true,
    touchMove: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
        },
      },
    ],
  });
  $(".home__mv__slide--4").slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: "linear",
    speed: 13000,
    slidesToShow: 4,
    slidesToScroll: 1,
    vertical: true,
    infinite: true,
    touchMove: false,
  });
  $(".home__gallery__list").slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: "linear",
    speed: 10000,
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    touchMove: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });
  $(".beginner__loop__1").slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: "linear",
    speed: 8000,
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    touchMove: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });
  $(".beginner__loop__2").slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: "linear",
    speed: 10000,
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    touchMove: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });

  // 遷移
  $(".send-url").on("change", function () {
    let url = $(this).val();
    if (url != "") {
      location.href = url;
    }
  });
});
