"use strict";

let gmapAPIKey = "AIzaSyDtxwRGTL4-AKlGJYKDVxzr_MymCP9XpLQ";

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
