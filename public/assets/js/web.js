$(function () {

  // Masonry init.
  var container = document.querySelector('#web-tags-container');
  var msnry = new Masonry( container, {"itemSelector": ".item"});

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
      using: function( position, feedback ) {
        $( this ).css( position );
        $( "<div>" )
          .addClass( "arrow" )
          .addClass( feedback.vertical )
          .addClass( feedback.horizontal )
          .appendTo( this );
      }
    }
  });

});