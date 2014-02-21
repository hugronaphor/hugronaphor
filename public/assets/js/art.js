$(function() {
  
  // Animate text on hover for Art slider.
  $('#art-carousel div.slider-block').hover(
          function() {
            var speed = 400,
                    overlayHeight = $(this).height();

            $firstEl = $(this).find('.thumb-overlay .first');
            $secondEl = $(this).find('.thumb-overlay .second');

            if ($firstEl.hasClass('processed')) {
              $firstEl.animate({
                top: overlayHeight / 2
              }, speed, function() {
                //$(this).addClass('processed');
              });
            }

            if ($secondEl.hasClass('processed')) {
              $secondEl.animate({
                bottom: overlayHeight / 2
              }, speed, function() {
                //$(this).addClass('processed');
              });
            }
          },
          function() {
            $firstEl = $(this).find('.thumb-overlay .first');
            $secondEl = $(this).find('.thumb-overlay .second');
            $firstEl.stop().css({top: 0}).addClass('processed');
            $secondEl.stop().css({bottom: 0}).addClass('processed');
          }

  );


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
  $(".content").prepend(clonedHeaderRow.clone().removeClass('base-header').addClass("behindHeader"));

  // Art block.
  if ($(window).width() > 1224) {
    // Initial build of all images.
    $("#art-animation").append('<img class="begin-art-animation" style="display:none;" src="/assets/img/art/art_animation_begin.png" />');
    for (var i = 1; i < 18; i++) {
      $("#art-animation").append('<img style="display:none;z-index:9;" src="/assets/img/art/animation/line/' + i + '.svg" />');
      if (i < 17) {
        $("#art-animation").append('<img style="display:none;z-index:10;" src="/assets/img/art/animation/point/' + i + '.svg" />');
        $("#art-animation").append('<img style="display:none;z-index:11;" src="/assets/img/art/animation/text/' + i + '.svg" />');
      }
    }
    $("#art-animation").append('<img class="end-art-animation" style="display:none;" src="/assets/img/art/art_animation_end.png" />');
    // End Initial build of all images.  

    // Set scroll area height.
    $(window).load(function() {
      $('#art-animation').css('height', $('#art-animation img').eq(10).height());
    });
    $(window).resize(function() {
      $('#art-animation').css('height', $('#art-animation img').eq(10).height());
    });
    // End of Set scroll area height.

    var count = 0;

    // Mousewell provided by "jquery-mousewheel" JQuery Plugin.
    $('#art-how-we-work').mousewheel(function(event, delta) {

      if ((count < 50 && count != 0) || (count != 0 && delta > 0)) {
        event.preventDefault();
      }

      if ((count == 0 && delta < 0) || (count == 50 && $('#art-animation').find('img').eq(50).hasClass('processed') && delta > 0)) {
        $('html,body').animate({
          scrollTop: $(this).offset().top - $(".base-header").height() - 20},
        'slow');
      }

      // Mouse down.
      // Counter-ul se strica cind se afiseaza toate elementele si cauzeaza probleme la ascunderea elementului 2.
      if (delta < 0) {
        if (count === 0 || $('#art-animation').find('img').eq(count - 1).hasClass('processed')) {
          var showImagesNr = getImagesNrToProced(count);
          for (var key = 0; key <= showImagesNr - 1; key++) {
            var fade = getShowFadeSpeedByKey(key, count);

            $('#art-animation').find('img').eq(count + key).fadeIn(fade, function() {
              $(this).addClass('processed');
            });
            if (key === showImagesNr - 1 && count < 50) {
              count = count + showImagesNr;
            }
          }
        }
      } else {
        var toCheckImgEq = (count - 1) <= 0 ? 0 : count - 1;
        if ($('#art-animation').find('img').eq(toCheckImgEq).hasClass('processed')) {
          var showImagesNr = getImagesNrToProced2(count);
          for (var key = 0; key < showImagesNr; key++) {
            var fade = getShowFadeSpeedByKey(key, count);
            //console.log(key);
            $('#art-animation').find('img').eq(count + key).fadeOut(fade, function() {
              $(this).addClass('processed');
            });
            if (key === showImagesNr - 1 && count <= 51 && count > 0) {
              count = (count - showImagesNr) < 0 ? 0 : count - showImagesNr;
            }
          }
        }

        // Somewhere the 3(count) items are lost,
        // Cant find where - so - hide all on 0 count value.
        if (count == 0) {
          $('#art-animation img').fadeOut(fade);
        }
      }
    });
  }
  else {
    // Simple image instead scroll animation.
    $("#art-animation").append('<img class="no-art-animation-img" src="/assets/img/art/animation/line/final.svg" />');
    // Set art image area height.
    $(window).load(function() {
      $('#art-animation').css('height', $('#art-animation img').eq(0).height());
    });
    $(window).resize(function() {
      $('#art-animation').css('height', $('#art-animation img').eq(0).height());
    });

  }
});

function getImagesNrToProced2(count) {
  if (count <= 0 || count >= 49) {
    var showImagesNr = 1;
  }
//  else if (count === 27) {
//    var showImagesNr = 15;
//  }
  else {
    var showImagesNr = 3;
  }
  return showImagesNr;
}

function getImagesNrToProced(count) {
  if (count === 0 || count >= 49) {
    var showImagesNr = 1;
  }
//  else if (count === 28) {
//    var showImagesNr = 15;
//  }
  else {
    var showImagesNr = 3;
  }
  return showImagesNr;
}

function getShowFadeSpeedByKey(key, count) {
  var fade = 300;
  // Line speed.
  if (key == 0) {
    fade = 200;
  }
  // point speed
  else if (key == 1) {
    fade = 300;
  }
  else {
    fade = 400;
  }

  return fade;
}



// Unused code bellow.

function hideImgs(imgNumber, count, key) {
//  setTimeout(function() {
  $('#art-animation').find('img').eq(count - key).fadeOut(300, function() {
    $(this).removeClass('processed');
    key++;
    if (key <= imgNumber) {
      hideImgs(imgNumber, count, key);
    }
  });

//  }, 50);
  if (key === imgNumber) {
    return true;

  }
}

function drawImgs(imgNumber, count, key) {
//console.log(count);
  var speed = 50;
  var fade = 600;
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
  // Increase speed for multiple points.
  if (imgNumber > 3) {
    speed = 100;
    fade = 100;
  }

  //setTimeout(function() {
  $('#art-animation').find('img').eq(count + key).fadeIn(fade, function() {
    $(this).addClass('processed');
    key++;
    if (key < imgNumber) {

      drawImgs(imgNumber, count, key);
    }

  });

  if (key === imgNumber) {
    count = count + 200;
    return true;

  }

  //}, speed);

}
