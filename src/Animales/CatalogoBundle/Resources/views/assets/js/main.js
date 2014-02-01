$(document).ready(function () {
    function jqUpdateSize() {
        // Get the dimensions of the viewport
        var width = $(window).width();

        if (width > "660") {
            $("#largeCarousel img").each(function () {
                var $this = $(this);
                var t = $this.attr('data-original');
                if (t != undefined && t != null && t.length > 0) {
                    $this.attr("src", t);
                    $this.removeAttr('data-original');
                }
            });
        }
    };



    //$("img.lazy").lazyload();
    //var width = $(window).width();
    if ($("#largeCarousel").is(':visible')) {
        $(window).load(function () {
            $("#largeCarousel img.verylazy").each(function () {
                var $this = $(this);
                var t = $this.attr('data-original');
                $this.attr("src", t);
            });
        });

        $("#largeCarousel img.lazy").each(function () {
            var $this = $(this);
            var t = $this.attr('data-original');
            $this.attr("src", t);
        });
    } else {
        // Sets a local style on the element so that the normal responsive behaviour can't kick in
        $(window).resize(jqUpdateSize);
        //$(".largeCarousel").css("display", "none");
        //$(".smallCarousel").css("display", "block");
        //$(".smallCarousel").css("margin-bottom", "20px");
        //$(".smallCarousel img").css("min-width", "100%"); 
    }

    // TOOLTIP

    $("a.tooltip").tooltip();

    // HOVER EFFECTS

    $('.span4 a').hover(function () {
        var deadLink = $(this).attr("href");
        if (deadLink == "#") {
            $('.textContent', this).css('background-color', '#333');
            return false;
        }
    });
    $('.span4 a').click(function () {
        var deadLink = $(this).attr("href");
        if (deadLink == "#") {
            return false;
        }
    });


    if (window.slideshowImages && slideshowImages.length > 0) {
        // create a hidden container for the gallery anchor links to go
        var hga = $('<div/>', { id: 'hiddenGalleryAnchors', css: { display: 'none'} }).appendTo(document.body);
        // set the href of the opener link to the first image
        $('a.fancybox').attr('href', slideshowImages[0].src).attr('rel', 'gallery').attr('title', slideshowImages[0].title);
        // create hidden links to the rest of the images
        for (var i = 1, j = slideshowImages.length; i < j; i++) {
            $('<a/>', { rel: 'gallery', href: slideshowImages[i].src, title: slideshowImages[i].title, text: slideshowImages[i].alt }).appendTo(hga);
        }
        $('#hiddenGalleryAnchors a').add('a.fancybox').fancybox({ padding: 0 });
    }

    //TABS

    $('#saturday').addClass('active');
    $('#myTab div').click(function (e) {
        removeClass();
        $(this).toggleClass('active');
        e.preventDefault();
        $(this).tab('show');
    })

    function removeClass() {
        $('#myTab div').removeClass('active');
    }

    //NAV LINK STATES
    function getURL() {
        var currentURL = $(location).attr('pathname');

        currentURL.indexOf(1);
        currentURL.toLowerCase();
        currentURL = currentURL.split("/")[1];

        if (currentURL == "speakers") {
            $("body").attr('id', 'speakers');
        } else if (currentURL == "workshops") {
            $("body").attr('id', 'workshops');
        } else if (currentURL == "about") {
            $("body").attr('id', 'about');
        }
    }

    //GOOGLE ANALYTICS EVENT TRACKING

    $(".buyNow a").each(function () {
        value = $(this).attr("class").replace("Mix", "Mix ").replace("Workshops", "Workshops ");
        $(this).attr("class", value);
    });
    $('.buyNow a.Weekend').click(function (evt) {
        eventWithRedirect(evt, 'http://wildphotos.seetickets.com', null, 'Click', 'BuyTickets', 'Weekend');
    });
    $('.buyNow a.Day').click(function (evt) {
        eventWithRedirect(evt, 'http://wildphotos.seetickets.com', null, 'Click', 'BuyTickets', 'Day');
    });
    $('.buyNow a.Mix*').click(function (evt) {
        eventWithRedirect(evt, 'http://wildphotos.seetickets.com', null, 'Click', 'BuyTickets', 'Mix');
    });
    $('.buyNow a.Workshops').click(function (evt) {
        eventWithRedirect(evt, 'http://wildphotos.seetickets.com', null, 'Click', 'BuyTickets', 'Workshops');
    });
    $('.buyNow a.Evening').click(function (evt) {
        eventWithRedirect(evt, 'http://wildphotos.seetickets.com', null, 'Click', 'BuyTickets', 'Evening');
    });


    //$(document).ready(jqUpdateSize);    // When the page first loads
    //$(window).resize(jqUpdateSize);     // When the browser changes size
    getURL();
});

