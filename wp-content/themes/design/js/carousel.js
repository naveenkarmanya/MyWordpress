jQuery(document).ready(function ($) {
    $("#owl-demo").owlCarousel({
        slideSpeed: 300,
        autoPlay: true,
        navigation: false,
        pagination: false,
        singleItem: true
    });
    $("#owl-demo2").owlCarousel({
        slideSpeed: 300,
        autoPlay: true,
        navigation: false,
        pagination: true,
        singleItem: true
    });
});
