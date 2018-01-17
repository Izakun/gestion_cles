$(window).bind("load", function() {

    var footerHeight = 0,
    footerTop = 0,
    $footer = $("#footer");

    positionFooter();

    function positionFooter() {

        footerHeight = $footer.height();
        footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";

        // Avec l'animation du footer qui dessend en bas de page

        /*if ( ($(document.body).height()+footerHeight) < $(window).height()) {
            $footer.css({
                position: "absolute"
            }).animate({
                top: footerTop
            })
        } else {
            $footer.css({
                position: "static"
            })
        }

    }*/

        if ( ($(document.body).height()+footerHeight) < $(window).height()) {
            $footer.css({
                position: "absolute",
                top: footerTop
            }).stop()
        } else {
            $footer.css({
                position: "static"
            })
        }
    }

    $(window)
    .scroll(positionFooter)
    .resize(positionFooter)

});
