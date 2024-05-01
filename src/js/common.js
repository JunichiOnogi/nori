// JavaScript Document

$(function () {
  // Gナビ
  $('.nav__toggle').click(function () {
    $(this).toggleClass('opened');
    $('.header__gnav').toggleClass("active");
  });
  $('.header__gnav ul li a').click(function () {
    $('.nav__toggle').toggleClass("opened");
    $('.header__gnav').toggleClass("active");
  });

  //スムーススクロール
  $('a[href^="#"]' + 'a:not(.non-scroll)').click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - 100;
    $("html, body").animate({ scrollTop: position }, 800, "swing");
    return false;
  });
});