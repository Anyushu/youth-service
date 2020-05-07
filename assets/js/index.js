// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";
import slick from "slick-carousel";

$(function ($) {
  let w = $(window).width();
  let md = 991.98;

  // リサイズ
  $(window).on("resize", function () {
    if (w <= md) {
      $(".img-switch").each(function () {
        $(this).attr("src", $(this).attr("src").replace("_pc", "_sp"));
        $(this).attr("srcset", $(this).attr("srcset").replace("_pc", "_sp"));
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

  // slick
  $(".home__camp__slide").slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    centerPadding: "10vw",
    prevArrow: '<span class="home__camp__slide__prevarrow"><i class="fas fa-chevron-left"></i></span>',
    nextArrow: '<span class="home__camp__slide__nextarrow"><i class="fas fa-chevron-right"></i></span>',
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
});
