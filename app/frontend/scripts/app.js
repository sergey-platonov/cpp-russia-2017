"use strict";

if (window.google) {
    let position = {
        lat: 55.784366,
        lng: 37.672338
    };

    let map = new google.maps.Map(document.getElementById("google_map"), {
        center: position,
        scrollwheel: false,
        zoom: 17
    });
    let marker = new google.maps.Marker({
        map: map,
        icon: "http://2017.cppconf.ru/app/frontend/template/google-marker.png",
        position: position
    });
}

window.addEventListener("scroll", function (event) {
   let scrollY = document.body.scrollTop || window.scrollY || window.pageYOffset;

    if (scrollY > document.querySelector(".cpp-b_main-menu").offsetTop || 0) {
        document.querySelector(".responsive-head").classList.add("fixed");
    } else {
        document.querySelector(".responsive-head").classList.remove("fixed");
    }
});

document.querySelector(".cpp-e_main-menu-button").addEventListener("click", function () {
   document.querySelector(".cpp-b_main-menu-links").classList.toggle("collapsed");
});

[].slice.call(document.querySelectorAll(".cpp-b_main-menu-links")).forEach(function (elem) {
    elem.addEventListener("click", function () {
        document.querySelector(".cpp-b_main-menu-links").classList.toggle("collapsed");
    });
});