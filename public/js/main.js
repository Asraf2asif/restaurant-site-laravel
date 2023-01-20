(function ($) {
  "use strict";
  jQuery(document).ready(function () {
    // Navigation for Mobile Device
    $(".nav-ham.open").on("click", function () {
      $(".nav-collapse").slideDown(500);
      $(".nav-ham.close").removeClass("hidden");
      $(".nav-ham.open").addClass("hidden");
    });
    $(".nav-ham.close").on("click", function () {
      $(".nav-collapse").slideUp(500);
      $(".nav-ham.open").removeClass("hidden");
      $(".nav-ham.close").addClass("hidden");
    });
    $(window).on("resize", function () {
      if ($(window).width() > 1024) {
        $(".nav-collapse").removeAttr("style");
      } else if ($(window).width() < 1024) {
        if ($(".nav-ham.close").hasClass("hidden") === true) {
          $(".nav-collapse").addClass("hidden");
        } else {
          $(".nav-collapse").removeClass("hidden");
        }
      }
    });

    // Employee Slider
    $(".testimonial-slider").owlCarousel({
      loop: true,
      margin: 30,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      nav: false,
      dots: true,
      smartSpeed: 1000,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
        },
        576: {
          items: 1,
        },
        768: {
          items: 1,
        },
        992: {
          items: 2,
        },
      },
    });

    jQuery.datetimepicker.setLocale("en");
    // Date Picker
    jQuery("#datepicker").datetimepicker({
      timepicker: false,
      format: "d/m/Y",
      formatDate: "d/m/Y",
    });

    // Time Picker
    jQuery("#timepicker").datetimepicker({
      datepicker: false,
      format: "h:m a",
      formatTime: "h:m a",
    });
  });

  jQuery(window).on("load", function () {
    // WOW JS
    new WOW().init();
    // Preloader
    $(".preloader").fadeOut(500);
  });
})(jQuery);
