$(function() {

  // Create base header clone.  
  var clonedHeaderRow = $(".base-header", this);
  $(".content").prepend(clonedHeaderRow.clone().removeClass('base-header'));

  if ($(window).width() > 768) {

    var dots = {
      0: {
        "x": 40, // top
        "y": 1, // left
        "interval": 50,
        "text": '.',
      },
      1: {
        "x": 39,
        "y": 2,
        "interval": 100,
        "text": '.',
      },
      2: {
        "x": 38,
        "y": 3,
        "interval": 100,
        "text": '.',
      },
      3: {
        "x": 38,
        "y": 4,
        "interval": 100,
        "text": '.',
      },
      4: {
        "x": 41,
        "y": 6,
        "interval": 100,
        "text": '.',
      },
      5: {
        "x": 43,
        "y": 8,
        "interval": 100,
        "text": '.',
      },
      6: {
        "x": 45,
        "y": 10,
        "interval": 100,
        "text": '.',
      },
      7: {
        "x": 47,
        "y": 12,
        "interval": 100,
        "text": '.',
      },
      8: {
        "x": 50,
        "y": 14,
        "interval": 100,
        "text": '.',
      },
      9: {
        "x": 50,
        "y": 16,
        "interval": 100,
        "text": '<span class="pink-point">.</span><span class="here-bottom">WAS HERE</span>',
      },
      10: {
        "x": 49,
        "y": 18,
        "interval": 500,
        "text": '.',
      },
      11: {
        "x": 47,
        "y": 21,
        "interval": 100,
        "text": '.',
      },
      12: {
        "x": 49,
        "y": 24,
        "interval": 100,
        "text": '.',
      },
      13: {
        "x": 48,
        "y": 27,
        "interval": 100,
        "text": '.',
      },
      14: {
        "x": 47,
        "y": 30,
        "interval": 100,
        "text": '.',
      },
      15: {
        "x": 45,
        "y": 31,
        "interval": 100,
        "text": '.',
      },
      16: {
        "x": 43,
        "y": 32,
        "interval": 100,
        "text": '.',
      },
      17: {
        "x": 41,
        "y": 33,
        "interval": 100,
        "text": '.',
      },
      18: {
        "x": 39,
        "y": 35,
        "interval": 200,
        "text": '<span class="pink-point">.</span><span class="here-top">WAS HERE</span>',
      },
      19: {
        "x": 41,
        "y": 37,
        "interval": 500,
        "text": '.',
      },
      20: {
        "x": 44,
        "y": 39,
        "interval": 100,
        "text": '.',
      },
      21: {
        "x": 47,
        "y": 41,
        "interval": 100,
        "text": '.',
      },
      22: {
        "x": 50,
        "y": 43,
        "interval": 100,
        "text": '.',
      },
      23: {
        "x": 53,
        "y": 45,
        "interval": 100,
        "text": '.',
      },
      24: {
        "x": 56,
        "y": 46,
        "interval": 100,
        "text": '.',
      },
      25: {
        "x": 57,
        "y": 47,
        "interval": 100,
        "text": '.',
      },
      26: {
        "x": 56,
        "y": 48,
        "interval": 200,
        "text": '<span class="pink-point">.</span><span class="here-bottom">HERE</span>',
      },
      27: {
        "x": 53,
        "y": 51,
        "interval": 500,
        "text": '.',
      },
      28: {
        "x": 49,
        "y": 55,
        "interval": 100,
        "text": '.',
      },
      29: {
        "x": 47,
        "y": 60,
        "interval": 100,
        "text": '.',
      },
      30: {
        "x": 45,
        "y": 63,
        "interval": 100,
        "text": '.',
      },
      31: {
        "x": 47,
        "y": 67,
        "interval": 100,
        "text": '<span class="pink-point">.</span><span class="here-top">WILL BE HERE</span>',
      }
    }


    var key = 0;
    function buildDots() {
      var obj = dots[key];
      setTimeout(function() {
        $('<div></div>', {
          class: 'dot-g',
          id: 'dot-' + key,
//        style: 'top:' + obj['x'] + '%;left:' + (key*1.9) + '%',
          style: 'top:' + obj['x'] + '%;left:' + obj['y'] + '%',
        }).html(obj['text']).appendTo('.contact-animation');
        //document.getElementById('bump1').play();
        key++;
        if (key < 32) {
          buildDots();
        }
      }, obj['interval'])
    }

    buildDots();

  }
  else {
    $('.contact-animation').append('IMAGE TO REPLACE ANIMATION');
  }




//  var divToChange = '.base-content-nav.max';
//  vAlignDiv(divToChange)
//  $(window).resize(function() {
//    vAlignDiv(divToChange)
//  });
//
//
//  $('.base-content-nav a').bind('click', function(e) {
//
//    var page = $( this ).attr('rel');
//    $('.base-content-nav a').removeClass('active');
//    $( this ).addClass('active');
//
//    $(".base-content-nav.max").removeClass('max').addClass('mini').animate({
//      top: "3%",
//      width: "40%",
////    marginLeft: "0.6in",
//  }, 1000, "linear", function() {
//  $("#slogan").slideUp(800);
//});
//
//
//    $('.base-pages').show();
//    $('.base-pages div').slideUp();
//    $(".base-pages div[title='"+page+"']").slideDown();
//
////    alert(page)
//
//
//    e.preventDefault();
//    return false;
//  });



  function vAlignDiv(divToChange) {
    var windowHeight = $(window).height()
    var divHeight = $(divToChange).height();
    $(divToChange).css({'top': (windowHeight / 2) - (divHeight / 2)});
  }

}); // end $(function(){});

