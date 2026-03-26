jQuery(function () {
    jQuery('.featured-offer figure.wp-block-gallery').wrap('<div class="wp-block-group carousel slide carousel-fade" id="carouselExampleFade"/>').contents().unwrap();
    jQuery('.featured-offer .slide').attr({
        'data-ride': 'carousel'
    });
    jQuery('.featured-offer .slide ul').wrap('<div class="carousel-inner"/>').contents().unwrap();
    jQuery('.featured-offer .slide .carousel-inner li').wrap('<div class="carousel-item"/>').contents().unwrap();
    jQuery('.featured-offer .slide .carousel-inner .carousel-item figure').wrap('').contents().unwrap();

    jQuery('.featured-offer .slide .carousel-inner .carousel-item:first').addClass('active');
    jQuery('.featured-offer .slide .carousel-inner .carousel-item img').addClass('w-100');


    jQuery("#offers-carousel > div").flickity({
        autoPlay: false,
        prevNextButtons: true,
        percentPosition: false,
        draggable: true,
        contain: true,
        freeScroll: true,
        pageDots: false,
        lazyLoad: 2,
        imagesLoaded: true
    });
    jQuery("#dine-carousel > div").flickity({
        autoPlay: false,
        prevNextButtons: true,
        percentPosition: false,
        draggable: true,
        contain: true,
        freeScroll: true,
        pageDots: false,
        cellAlign: "left",
        lazyLoad: 4
    });
});

$(window).on("load", function () {
    var bodyElement = document.querySelector("#offers-carousel");
    //bodyElement.addEventListener("wheel", getMouseDirection, false);
    bodyElement.addEventListener("mousemove", getMouseDirection, false);
    var xDirection = "";
    var oldX = 0;

    function getMouseDirection(e) {
        //deal with the horizontal case
        if (oldX < e.pageX) {
            xDirection = "right";
        } else {
            xDirection = "left";
        }
        oldX = e.pageX;
        if ((xDirection == "right") && (($(document).width() - e.pageX) < 150)) {
            $('#offers-carousel .flickity-prev-next-button.next').click();
        } else if ((xDirection == "left") && (e.pageX < 150)) {
            $('#offers-carousel .flickity-prev-next-button.previous').click();
        }
    }

    var sliderElement = document.querySelector("#dine-carousel");
    sliderElement.addEventListener("mousemove", getMouseDirection2, false);
    var xDirection = "";
    var oldX = 0;

    function getMouseDirection2(e) {
        //deal with the horizontal case
        if (oldX < e.pageX) {
            xDirection = "right";
        } else {
            xDirection = "left";
        }
        oldX = e.pageX;
        if ((xDirection == "right") && (($(document).width() - e.pageX) < 150)) {
            $('#dine-carousel .flickity-prev-next-button.next').click();
        } else if ((xDirection == "left") && (e.pageX < 150)) {
            $('#dine-carousel .flickity-prev-next-button.previous').click();
        }
    }

});