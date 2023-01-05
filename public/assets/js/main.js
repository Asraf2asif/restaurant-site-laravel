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

    // Nice Select
    // $("select").niceSelect();

    // Date Picker
    jQuery("#datepicker").datetimepicker({
      timepicker: false,
      format: "d/m/Y",
    });

    // Time Picker
    jQuery("#timepicker").datetimepicker({
      datepicker: false,
      format: "h:m",
      formatTime: "h:m a",
    });

    // Google Map
    if ($("#mapBox").length) {
      var $lat = $("#mapBox").data("lat");
      var $lon = $("#mapBox").data("lon");
      var $zoom = $("#mapBox").data("zoom");
      var $marker = $("#mapBox").data("marker");
      var $info = $("#mapBox").data("info");
      var $markerLat = $("#mapBox").data("mlat");
      var $markerLon = $("#mapBox").data("mlon");
      var map = new GMaps({
        el: "#mapBox",
        lat: $lat,
        lng: $lon,
        scrollwheel: false,
        scaleControl: true,
        streetViewControl: false,
        panControl: true,
        disableDoubleClickZoom: true,
        mapTypeControl: false,
        zoom: $zoom,
        styles: [
          {
            featureType: "water",
            elementType: "geometry.fill",
            stylers: [
              {
                color: "#dcdfe6",
              },
            ],
          },
          {
            featureType: "transit",
            stylers: [
              {
                color: "#808080",
              },
              {
                visibility: "off",
              },
            ],
          },
          {
            featureType: "road.highway",
            elementType: "geometry.stroke",
            stylers: [
              {
                visibility: "on",
              },
              {
                color: "#dcdfe6",
              },
            ],
          },
          {
            featureType: "road.highway",
            elementType: "geometry.fill",
            stylers: [
              {
                color: "#ffffff",
              },
            ],
          },
          {
            featureType: "road.local",
            elementType: "geometry.fill",
            stylers: [
              {
                visibility: "on",
              },
              {
                color: "#ffffff",
              },
              {
                weight: 1.8,
              },
            ],
          },
          {
            featureType: "road.local",
            elementType: "geometry.stroke",
            stylers: [
              {
                color: "#d7d7d7",
              },
            ],
          },
          {
            featureType: "poi",
            elementType: "geometry.fill",
            stylers: [
              {
                visibility: "on",
              },
              {
                color: "#ebebeb",
              },
            ],
          },
          {
            featureType: "administrative",
            elementType: "geometry",
            stylers: [
              {
                color: "#a7a7a7",
              },
            ],
          },
          {
            featureType: "road.arterial",
            elementType: "geometry.fill",
            stylers: [
              {
                color: "#ffffff",
              },
            ],
          },
          {
            featureType: "road.arterial",
            elementType: "geometry.fill",
            stylers: [
              {
                color: "#ffffff",
              },
            ],
          },
          {
            featureType: "landscape",
            elementType: "geometry.fill",
            stylers: [
              {
                visibility: "on",
              },
              {
                color: "#efefef",
              },
            ],
          },
          {
            featureType: "road",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#696969",
              },
            ],
          },
          {
            featureType: "administrative",
            elementType: "labels.text.fill",
            stylers: [
              {
                visibility: "on",
              },
              {
                color: "#737373",
              },
            ],
          },
          {
            featureType: "poi",
            elementType: "labels.icon",
            stylers: [
              {
                visibility: "off",
              },
            ],
          },
          {
            featureType: "poi",
            elementType: "labels",
            stylers: [
              {
                visibility: "off",
              },
            ],
          },
          {
            featureType: "road.arterial",
            elementType: "geometry.stroke",
            stylers: [
              {
                color: "#d6d6d6",
              },
            ],
          },
          {
            featureType: "road",
            elementType: "labels.icon",
            stylers: [
              {
                visibility: "off",
              },
            ],
          },
          {},
          {
            featureType: "poi",
            elementType: "geometry.fill",
            stylers: [
              {
                color: "#dadada",
              },
            ],
          },
        ],
      });
    }
  });

  jQuery(window).on("load", function () {
    // WOW JS
    new WOW().init();
    // Preloader
    $(".preloader").fadeOut(500);
  });
})(jQuery);
