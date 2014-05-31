$(function(a) {


  initDesignHaos();

  function initDesignHaos() {

    var haosString = $(".home-art-block-img").text();

    var haosWords = haosString.split(" "),
            outText = '';

    for (i = 0; i < haosWords.length; i++) {
      var randomNumb = Math.floor((Math.random() * 4) + 1);

      switch (randomNumb)
      {
        case 1:
          outText += '<span class="italic">' + haosWords[i] + ' </span>';
          break;
        case 2:
          outText += '<span class="bold">' + haosWords[i] + ' </span>';
          break;
        case 3:
          outText += '<span class="biggersize">' + haosWords[i] + ' </span>';
          break;
        case 4:
          outText += '<span class="lesssize">' + haosWords[i] + ' </span>';
          break;
        default:
          outText += '<span class="">' + haosWords[i] + ' </span>';
      }


    }

    $(".home-art-block-img").html(outText);

  }

//  console.log(haosWords);

  $(".home-first-text-piece span.design-action").click(function() {
    var haosStringEl = $(".home-art-block-img");

    // Haos text init.
    //if (!$(haosStringEl).hasClass('processed')) {
    $(haosStringEl).find('span').each(function() {
      $(this).animate({fontSize: '22px', 'fontweight': 'initial', fontstyle: 'normal'}, 0);
      $(this).removeClass().parent().addClass('processed');
    });
    //}

    return false;

  });

  $(".home-first-text-piece span.chaos-action").click(function() {
    initDesignHaos();
    return false;
  });


  $(window).load(function() {

   var isMobile = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/);
    /* Disable top fixed header */    
    if(isMobile) {
      //alert(navigator.userAgent);
      $('.base-header').css({
        "position": "initial!important"
      });
      $('.behindHeader').css({
        "display": "none"
      });

      $('.home-top-land').css({
        "position": "initial!important"
      });


//  .base-header {position: initial!important;}
//  .behindHeader {display: none;}
    }
    else {
      
    }
setMarginTopForBaseHeader();

  });
  //setMarginTopForBaseHeader(); // can't get right header height on first page load, I suppose because of images load.
  //$('.header').css('margin-top', $(".home-top-land").height() - $(".slogan-signature").height());
  $(window).resize(function() {
    setMarginTopForBaseHeader();
  });


  var baseHeader = $(".base-header");
  var baseHeaderHeight = baseHeader.height();
  var offset = baseHeader.offset();
  var baseHeaderTop = offset.top;
  var topHeaderHeight = $(".home-top-land").height();

  function setMarginTopForBaseHeader() {
    $('.header').css('margin-top', $(".home-top-land").height());
  }

  // Base top fixed menu.
  function UpdateOnScroll() {
    $(".page").each(function() {

      var el = $(this),
              offset = el.offset(),
              scrollTop = $(window).scrollTop(),
              floatingHeader = $(".floatingHeader", this),
              languageBaseBar = $(".home .floatingHeader .language_bar_chooser"),
              tremendousEl = $(".home-about-facts"),
              haosStringEl = $(".home-art-block-img"),
              tremendousElOffset = tremendousEl.offset(),
              haosStringElOffset = haosStringEl.offset();

//      // Haos text init.
//      if ((scrollTop > haosStringElOffset.top - 200)) {
//        if (!$(haosStringEl).hasClass('processed')) {
//          $(haosStringEl).find('span').each(function() {
//            $(this).animate({fontSize: '22px', 'fontweight': 'initial', fontstyle: 'normal'}, 400);
//            $(this).removeClass().parent().addClass('processed');
//          });
//
//        }
//      }

      // Tremendous facts init.
      if ((scrollTop > tremendousElOffset.top - 500)) {
        increaseFacts(1, '.project-n', 20);
        increaseFacts(2, '.coffe-n', 20);
        increaseFacts(3, '.fb-n', 20);
        increaseFacts(4, '.client-n', 20);
      }

      floatingHeader.css({
        //"width": $(".base-header").width()
      });

      if ((scrollTop > offset.top) && (scrollTop < offset.top + el.height())) {

        languageBaseBar.show();

        floatingHeader.css({
          "visibility": "visible"
        });
        //$('.fb-like').addClass('fb-in-fixed-header');

      } else {
        languageBaseBar.hide();
        floatingHeader.css({
          "visibility": "hidden"
        });
        $('.fb-like').removeClass('fb-in-fixed-header');
      }
      ;
    });
  }

  var clonedHeaderRow;

  $(".page").each(function() {
    clonedHeaderRow = $(".base-header", this);
    clonedHeaderRow
            .before(clonedHeaderRow.clone())
            //.css("width", clonedHeaderRow.width())
            .addClass("floatingHeader behindHeader");
  });

  $(window).scroll(UpdateOnScroll).trigger("scroll");
  // End Base top fixed menu.

  // Video logic.
//  $(window).load(function () {
//    // executes when complete page is fully loaded.
//    setHomeVideoWrappHeight();
//  });
//
//  $(window).resize(function () {
//    setHomeVideoWrappHeight();
//  });

  function setHomeVideoWrappHeight() {
    var videoHeight = $('.h-video-wrapp video').height(),
            el1 = $('.h-video-on-video'),
            cultureHeight = $('.video-our-culture').height(),
            el2 = $('.h-culture-centered');
    //el1.css({height: videoHeight, marginTop: -videoHeight -5 });
//    $('.h-video-centered-content').css({top: videoHeight / 2 - $('.h-video-centered-content').height() / 2});
//    el2.css({top: cultureHeight / 2 - el2.height() / 2});
  }

// run js if Chrome is being used
  if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1) {
    // set background-attachment back to the default of 'scroll'
    $('.video-our-culture').css('background-attachment', 'scroll');

    // move the background-position according to the div's y position
    $(window).scroll(function() {
      scrollTop = $(window).scrollTop();
      photoTop = $('.video-our-culture').offset().top;
      distance = (photoTop - scrollTop);
      $('.video-our-culture').css('background-position', 'center ' + (distance * -1) + 'px');
    });
  }

});
/**
 * Dynamically increase of the number.
 * @param intervalObj Just to avoid conflict with other intervals.
 * @param classString
 * @param steps
 */
function increaseFacts(intervalObj, classString, steps) {
  var numberTo = $(classString).attr('data-count'),
          s = numberTo / steps,
          step = 1,
          el = $(classString + ' p:first-child');

  if (el.hasClass('processed'))
    return;

  intervalObj = setInterval(function() {
    el.html(Math.ceil(s * step));
    step += 1;
    steps = steps - 1;
    if (steps <= 0) {
      clearInterval(intervalObj);
      el.addClass('processed');
    }
  }, 40);
}

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


