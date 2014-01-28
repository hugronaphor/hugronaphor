$(function() {

    $(window).load(function() {
        //	Responsive layout, resizing the items
        $('#art-carousel').carouFredSel({
//            circular: true, // Determines whether the carousel should be circular.
//            infinite: true,
            auto: false,
//    prev: '#prev2',
//    next: '#next2',
            pagination: "#pager",
            responsive: true,
            width: '100%',
            scroll: 2,
            height: 'variable',
            items: {
                width: 350,
                height: 'variable',
                visible: {
                    min: 2,
                    max: 4
                }
            },
            swipe: {
                onTouch: true
            }
        });
    });

    // Create base header clone.
    var clonedHeaderRow = $(".base-header", this);
    $(".content").prepend(clonedHeaderRow.clone().removeClass('base-header'));



    // Art block.
    // Initial build of all images.
    for (var i = 1; i < 18; i++) {
        $(".art-animation").append('<img style="display:none;z-index:9;" src="http://youngers/assets/img/art/animation/line/' + i + '.svg" />');
        if (i < 17) {
            $(".art-animation").append('<img style="display:none;z-index:10;" src="http://youngers/assets/img/art/animation/point/' + i + '.svg" />');
            $(".art-animation").append('<img style="display:none;z-index:11;" src="http://youngers/assets/img/art/animation/text/' + i + '.svg" />');
        }
    }

    // IE, Opera, Safari
    var count = 0;
    $('.art-animation').bind('mousewheel', function(e) {
//        $('.art-animation').show();
        // Get current svg object.
        if (e.originalEvent.wheelDelta < 0) {
            if (count === 0 || $('.art-animation').find('img').eq(count - 1).hasClass('processed')) {
                drawImgs(3, count, 0);
                if (count <= 56) {
                    count = count + 3;
                }
            }
        } else {
            if (!$('.art-animation').find('img').eq(count + 1).hasClass('processed')) {
                hideImgs(3, count, 0);
                if (count > 0) {
                    count = count - 3;
                }
            }
        }

        //prevent page fom scrolling
        return false;
    });

});

function hideImgs(imgNumber, count, key) {
    setTimeout(function() {
        $('.art-animation').find('img').eq(count - key).fadeOut(50, function() {
            $(this).removeClass('processed');
        });
        key++;
        if (key <= imgNumber) {
            hideImgs(imgNumber, count, key);
        }
    }, 50);
}

function drawImgs(imgNumber, count, key) {

    var speed = 50;
    var fade = 400;
    // Line speed.
    if (key == 0) {
        speed = 50;
        fade = 100;
    }
    else if (key == 1) {
        //speed = obj['speed'];
        speed = 100;
        fade = 120;
    }
    else {
        speed = 200;
        fade = 200;
    }

    setTimeout(function() {
        $('.art-animation').find('img').eq(count + key).fadeIn(fade, function() {
            $(this).addClass('processed');
        });
        key++;
        if (key < imgNumber) {
            drawImgs(imgNumber, count, key);
        }
    }, speed);
}

setBlocksHeight = function(container) {
    var headerHeight = $('.header').height(),
            windowHeight = $(window).height();
    $(container).each(function() {
        $(this).css("min-height", windowHeight - headerHeight + "px");
    });
}





//  var svgs = {
//    0: {
//      "speed": 100,
//      "dotSpeed": 150,
//      "textSpeed": 400,
//      "imgNumber": 3,
//    },
//    1: {
//      "speed": 100,
//      "dotSpeed": 150,
//      "textSpeed": 400,
//      "imgNumber": 3,
//    },
//    2: {
//      "speed": 100,
//      "dotSpeed": 150,
//      "textSpeed": 400,
//      "imgNumber": 3,
//    },
//    3: {
//      "speed": 100,
//      "dotSpeed": 150,
//      "textSpeed": 400,
//      "imgNumber": 3,
//    },
//    4: {
//      "speed": 100,
//      "dotSpeed": 150,
//      "textSpeed": 400,
//      "imgNumber": 3,
//    },
//    5: {
//      "speed": 100,
//      "dotSpeed": 150,
//      "textSpeed": 400,
//      "imgNumber": 3,
//    },
//    6: {
//      "speed": 100,
//      "dotSpeed": 150,
//      "textSpeed": 400,
//      "imgNumber": 3,
//    },
//    7: {
//      "speed": 100,
//      "dotSpeed": 150,
//      "textSpeed": 400,
//      "imgNumber": 3,
//    },
//    8: {
//      "speed": 100,
//      "dotSpeed": 150,
//      "textSpeed": 400,
//      "imgNumber": 3,
//    },
//    9: {
//      "speed": 100,
//      "dotSpeed": 150,
//      "textSpeed": 400,
//      "imgNumber": 3,
//    },
//    10: {
//      "speed": 100,
//      "dotSpeed": 150,
//      "textSpeed": 400,
//      "imgNumber": 3,
//    },
//  }