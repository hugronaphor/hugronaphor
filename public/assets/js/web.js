$(function() {

    $(window).load(function() {
        //	Responsive layout, resizing the items
        $('#web-carousel').carouFredSel({
//            circular: true, // Determines whether the carousel should be circular.
//            infinite: true,
            auto: false,
//            prev: '#prev',
//            next: '#next',
            pagination: "#pager",
            responsive: true,
            width: '100%',
            scroll: 1,
            height: 'variable',
            items: {
                width: 350,
                height: 'variable',
                visible: {
                    min: 2,
                    max: 2
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

    // Masonry init.
    var container = document.querySelector('#web-tags-container');
    var msnry = new Masonry(container, {"itemSelector": ".item"});

    // JQueryUI Tooltip
    $('#web-tags-container').tooltip({
        show: {
            effect: "show",
            delay: 0
        },
        hide: {
            effect: "hide",
            delay: 0
        },
        position: {
            my: "center bottom-7",
            at: "center top",
            using: function(position, feedback) {
                $(this).css(position);
                $("<div>")
                        .addClass("arrow")
                        .addClass(feedback.vertical)
                        .addClass(feedback.horizontal)
                        .appendTo(this);
            }
        }
    });

});