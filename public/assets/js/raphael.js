//window.onload = function() {
//  var path = "M210.333,65.331C104.367,66.105-12.349,150.637,1.056,276.449c4.303,40.393,18.533,63.704,52.171,79.03  c36.307,16.544,57.022,54.556,50.406,112.954c-9.935,4.88-17.405,11.031-19.132,20.015c7.531-0.17,14.943-0.312,22.59,4.341  c20.333,12.375,31.296,27.363,42.979,51.72c1.714,3.572,8.192,2.849,8.312-3.078c0.17-8.467-1.856-17.454-5.226-26.933  c-2.955-8.313,3.059-7.985,6.917-6.106c6.399,3.115,16.334,9.43,30.39,13.098c5.392,1.407,5.995-3.877,5.224-6.991  c-1.864-7.522-11.009-10.862-24.519-19.229c-4.82-2.984-0.927-9.736,5.168-8.351l20.234,2.415c3.359,0.763,4.555-6.114,0.882-7.875  c-14.198-6.804-28.897-10.098-53.864-7.799c-11.617-29.265-29.811-61.617-15.674-81.681c12.639-17.938,31.216-20.74,39.147,43.489  c-5.002,3.107-11.215,5.031-11.332,13.024c7.201-2.845,11.207-1.399,14.791,0c17.912,6.998,35.462,21.826,52.982,37.309  c3.739,3.303,8.413-1.718,6.991-6.034c-2.138-6.494-8.053-10.659-14.791-20.016c-3.239-4.495,5.03-7.045,10.886-6.876  c13.849,0.396,22.886,8.268,35.177,11.218c4.483,1.076,9.741-1.964,6.917-6.917c-3.472-6.085-13.015-9.124-19.18-13.413  c-4.357-3.029-3.025-7.132,2.697-6.602c3.905,0.361,8.478,2.271,13.908,1.767c9.946-0.925,7.717-7.169-0.883-9.566  c-19.036-5.304-39.891-6.311-61.665-5.225c-43.837-8.358-31.554-84.887,0-90.363c29.571-5.132,62.966-13.339,99.928-32.156  c32.668-5.429,64.835-12.446,92.939-33.85c48.106-14.469,111.903,16.113,204.241,149.695c3.926,5.681,15.819,9.94,9.524-6.351  c-15.893-41.125-68.176-93.328-92.13-132.085c-24.581-39.774-14.34-61.243-39.957-91.247  c-21.326-24.978-47.502-25.803-77.339-17.365c-23.461,6.634-39.234-7.117-52.98-31.273C318.42,87.525,265.838,64.927,210.333,65.331  z M445.731,203.01c6.12,0,11.112,4.919,11.112,11.038c0,6.119-4.994,11.111-11.112,11.111s-11.038-4.994-11.038-11.111  C434.693,207.929,439.613,203.01,445.731,203.01z";
//  var paper = new Raphael(document.getElementById('canvas_container'), 700, 700);
//    
//    var path1 = "M50,400 C100,390 100,200 400,300";
//    
//  var circle = paper.path(path1);
//
//  //var anim = Raphael.animation({cx: 10, cy: 50}, 3e3);
//  //circle.animate(anim); // run the given animation immediately
//
//
//
//
// 
//
//
//}

//$("body").css("overflow", "hidden");

var pathObj = {
  "kiwi": {
    "strokepath": [
      {
        "path": "M59.688-551.547c63.641,2.827,127.959,3.839,191.053-6.338c53.909-8.696,108.042-27.837,146.12-68.571    c33.916-36.281,60.253-98.125,31.492-144.611c-12.739-20.591-35.373-34.96-58.959-39.584    c-21.913-4.296-49.029-0.279-58.445,22.813c-8.37,20.526,4.01,42.853,19.391,56.078c16.822,14.465,38.71,22.479,59.44,29.475    c29.431,9.932,59.79,16.827,89.124,27.069c27.118,9.469,55.979,21.904,74.713,44.562c8.827,10.675,14.322,24.395,13.791,38.326    c-0.546,14.337-9.689,26.453-21.104,34.33c-10.627,7.333-23.433,11.134-36.027,13.315c-14.793,2.561-30.211,2.467-44.717-1.6    c-12.629-3.54-23.588-11.1-28.388-23.648c-4.837-12.646-0.28-26.515,6.083-37.687c12.779-22.435,35.997-36.764,57.211-50.203    c18.754-11.879,38.082-24.268,51.09-42.691c11.883-16.829,14.732-37.099,8.957-56.725c-5.318-18.077-18.334-34.298-36.178-41.068    c-19.739-7.489-41.62-0.028-55.179,15.397c-18.229,20.738-17.329,50.3-18.696,76.187c-1.684,31.909-12.205,61.653-26.456,90.022    c-12.124,24.137-28.185,44.872-50.346,60.491c-16.294,11.483-33.945,21.277-48.279,35.316    c-14.112,13.823-21.678,31.54-19.954,51.399c1.83,21.076,14.808,38.936,30.798,51.924c16.352,13.279,36.331,22.16,56.623,27.426    c22.135,5.742,48.569,8.367,68.896-4.197c19.497-12.053,19.081-37.043,10.104-55.537c-9.767-20.119-28.813-33.82-47.896-44.318    c-21.946-12.076-45.532-20.881-67.694-32.559c-25.119-13.236-49.332-29.712-66.601-52.593    c-15.617-20.692-25.884-49.667-17.748-75.357c8.028-25.347,35.719-34.947,59.867-35.625c31.008-0.87,61.899,12.524,88.692,26.89    c25.709,13.785,49.285,31.312,71.14,50.558c18.571,16.354,34.955,34.473,51.786,52.537c14.707,15.785,30.839,31.229,51.061,39.592    c19.128,7.911,41.429,6.954,59.497-3.237c17.171-9.686,28.317-27.51,32.697-46.386c4.74-20.428,1.062-43.326-11.087-60.568    c-14.863-21.095-39.221-32.681-63.711-38.672c-24.082-5.892-49.747-4.984-72.553,5.181c-21.518,9.592-39.553,25.499-52.524,45.096    c-14.813,22.378-22.379,50.355-17.183,76.972c4.904,25.122,22.979,44.708,44.504,57.292c22.396,13.09,48.736,18.984,74.509,19.334    c26.715,0.361,52.04-6.449,75.47-19.119c18.629-10.072,35.248-23.209,52.61-35.221c17.834-12.339,36.719-23.149,56.406-32.241    c21.103-9.744,43.278-17.185,66.087-21.693c23.415-4.628,47.344-6.173,71.158-6.911c1.569-0.048,1.352-1.913-0.188-1.865    c-30.883,0.958-61.775,3.56-91.685,11.699c-27.909,7.595-54.593,19.81-79.499,34.399c-24.894,14.583-46.955,33.365-71.885,47.864    c-25.501,14.834-53.327,22.086-82.828,21.109c-27.515-0.912-55.157-9.01-77.843-24.791    c-24.738-17.211-38.031-44.831-35.702-74.879c4.038-52.107,49.568-98.749,101.496-103.667    c28.533-2.703,60.414,6.196,83.559,23.054c20.129,14.663,30.914,38,30.311,62.71c-0.525,21.531-10.451,42.792-27.646,55.942    c-19.385,14.824-45.885,14.983-67.358,4.883c-20.749-9.76-36.931-27.435-52.128-44.104c-17.185-18.85-34.873-36.874-54.408-53.335    c-21.553-18.161-44.902-34.237-70.054-47.003c-24.842-12.609-52.812-23.609-81.087-23.303    c-21.913,0.237-44.964,6.81-58.136,25.525c-13.583,19.299-9.337,46.667-0.445,66.935c22.009,50.165,77.068,74.045,123.751,95.345    c21.182,9.665,42.747,20.43,58.793,37.737c15.668,16.896,26.946,46.084,9.269,65.629c-9.397,10.389-24.85,13.309-38.19,13.656    c-12.807,0.334-25.786-2.061-38.086-5.457c-21.588-5.963-42.571-16.475-58.949-31.898c-16.547-15.586-26.427-37.42-23.102-60.342    c3.013-20.771,18.501-35.862,34.598-47.775c16.673-12.339,35.214-22.137,50.364-36.47c20.074-18.992,33.026-44.52,43.58-69.69    c5.936-14.156,10.643-28.827,13.48-43.922c2.753-14.644,2.769-29.587,3.61-44.413c1.563-27.529,9.248-58.082,37.706-69.079    c22.246-8.597,45.133,2.676,57.815,21.377c11.766,17.348,15.049,40.101,7.5,59.724c-8.764,22.778-29.971,37.961-49.657,50.759    c-20.092,13.061-41.077,25.073-57.011,43.368c-13.733,15.77-25.19,40.966-11.172,60.173c14.883,20.39,45.26,21.778,68.052,18.722    c21.987-2.949,45.813-11.875,57.443-32.004c13.146-22.755,0.355-49.435-16.742-65.889c-19.869-19.121-47.471-29.855-73.141-38.569    c-29.414-9.984-59.776-16.874-89.13-27.061c-21.458-7.446-43.912-16.571-59.818-33.385c-16.624-17.573-22.23-48.744,0.416-64.043    c12.666-8.557,29.697-8.336,44.047-5.239c13.715,2.96,26.722,9.334,37.689,18.036c23.734,18.83,32.852,47.81,29.127,77.289    c-6.904,54.646-47.006,100.199-94.489,124.906c-54.844,28.538-119.644,34.535-180.464,36.347    c-33.976,1.013-67.983,0.018-101.929-1.49C58.765-553.475,58.043-551.62,59.688-551.547L59.688-551.547z",
        "duration": 1800
      },
      {
        "path": "M14.222,276.248c63.641,2.826,127.959,3.838,191.053-6.338c53.909-8.696,108.042-27.838,146.12-68.572   c33.916-36.281,60.253-98.125,31.492-144.611c-12.739-20.591-35.373-34.959-58.959-39.584   c-21.913-4.296-49.029-0.279-58.445,22.813c-8.37,20.526,4.01,42.854,19.391,56.078c16.822,14.465,38.71,22.479,59.44,29.476   c29.431,9.932,59.79,16.827,89.124,27.069c27.118,9.469,55.979,21.904,74.713,44.563c8.827,10.674,14.322,24.395,13.791,38.326   c-0.546,14.336-9.689,26.452-21.104,34.329c-10.627,7.333-23.433,11.134-36.027,13.315c-14.793,2.561-30.211,2.467-44.717-1.6   c-12.629-3.541-23.588-11.1-28.388-23.648c-4.837-12.646-0.28-26.516,6.083-37.688c12.779-22.434,35.997-36.764,57.211-50.202   c18.754-11.88,38.082-24.268,51.09-42.69c11.883-16.83,14.732-37.1,8.957-56.726c-5.318-18.077-18.334-34.298-36.178-41.067   c-19.739-7.49-41.62-0.029-55.179,15.396c-18.229,20.738-17.329,50.301-18.696,76.188c-1.684,31.908-12.205,61.652-26.456,90.021   c-12.124,24.138-28.185,44.873-50.346,60.492c-16.294,11.482-33.945,21.277-48.279,35.316   c-14.112,13.822-21.678,31.539-19.954,51.398c1.83,21.076,14.808,38.936,30.798,51.924c16.352,13.279,36.331,22.16,56.623,27.426   c22.135,5.742,48.569,8.367,68.896-4.197c19.497-12.053,19.081-37.043,10.104-55.537c-9.767-20.119-28.813-33.82-47.896-44.318   c-21.946-12.076-45.532-20.881-67.694-32.559c-25.119-13.236-49.332-29.713-66.601-52.594   c-15.617-20.691-25.884-49.666-17.748-75.357c8.028-25.347,35.719-34.946,59.867-35.624c31.008-0.87,61.899,12.524,88.692,26.89   c25.709,13.785,49.285,31.312,71.14,50.558c18.571,16.354,34.955,34.474,51.786,52.536c14.707,15.785,30.839,31.229,51.061,39.592   c19.128,7.912,41.429,6.955,59.497-3.236c17.171-9.686,28.317-27.51,32.697-46.387c4.74-20.428,1.062-43.326-11.087-60.567   c-14.863-21.095-39.221-32.681-63.711-38.672c-24.082-5.892-49.747-4.984-72.553,5.181c-21.518,9.592-39.553,25.5-52.524,45.096   c-14.813,22.379-22.379,50.355-17.183,76.973c4.904,25.121,22.979,44.707,44.504,57.291c22.396,13.09,48.736,18.984,74.509,19.334   c26.715,0.361,52.04-6.449,75.47-19.119c18.629-10.072,35.248-23.209,52.61-35.221c17.834-12.34,36.719-23.15,56.406-32.241   c21.103-9.744,43.278-17.185,66.087-21.692c23.415-4.629,47.344-6.174,71.158-6.912c1.569-0.048,1.352-1.912-0.188-1.865   c-30.883,0.958-61.775,3.561-91.685,11.699c-27.909,7.596-54.593,19.811-79.499,34.4c-24.894,14.582-46.955,33.365-71.885,47.863   c-25.501,14.834-53.327,22.086-82.828,21.109c-27.515-0.912-55.157-9.01-77.843-24.791c-24.738-17.211-38.031-44.83-35.702-74.879   c4.038-52.107,49.568-98.748,101.496-103.667c28.533-2.702,60.414,6.196,83.559,23.054c20.129,14.664,30.914,38,30.311,62.711   c-0.525,21.531-10.451,42.793-27.646,55.941c-19.385,14.824-45.885,14.984-67.358,4.883c-20.749-9.76-36.931-27.434-52.128-44.104   c-17.185-18.85-34.873-36.873-54.408-53.335c-21.553-18.161-44.902-34.237-70.054-47.003   c-24.842-12.609-52.812-23.609-81.087-23.304c-21.913,0.237-44.964,6.81-58.136,25.525c-13.583,19.3-9.337,46.667-0.445,66.935   c22.009,50.165,77.068,74.045,123.751,95.346c21.182,9.664,42.747,20.43,58.793,37.736c15.668,16.896,26.946,46.084,9.269,65.629   c-9.397,10.389-24.85,13.309-38.19,13.656c-12.807,0.334-25.786-2.061-38.086-5.457c-21.588-5.963-42.571-16.475-58.949-31.898   c-16.547-15.586-26.427-37.42-23.102-60.342c3.013-20.771,18.501-35.861,34.598-47.775c16.673-12.338,35.214-22.137,50.364-36.47   c20.074-18.992,33.026-44.52,43.58-69.69c5.936-14.155,10.643-28.826,13.48-43.922c2.753-14.644,2.769-29.587,3.61-44.412   c1.563-27.529,9.248-58.082,37.706-69.079c22.246-8.597,45.133,2.676,57.815,21.378c11.766,17.348,15.049,40.101,7.5,59.723   c-8.764,22.779-29.971,37.961-49.657,50.76c-20.092,13.061-41.077,25.072-57.011,43.367c-13.733,15.77-25.19,40.967-11.172,60.174   c14.883,20.389,45.26,21.777,68.052,18.721c21.987-2.949,45.813-11.875,57.443-32.004c13.146-22.755,0.355-49.436-16.742-65.889   c-19.869-19.121-47.471-29.855-73.141-38.568c-29.414-9.984-59.776-16.875-89.13-27.061c-21.458-7.447-43.912-16.572-59.818-33.386   c-16.624-17.573-22.23-48.744,0.416-64.043c12.666-8.557,29.697-8.337,44.047-5.239c13.715,2.961,26.722,9.335,37.689,18.036   c23.734,18.829,32.852,47.81,29.127,77.288c-6.904,54.646-47.006,100.199-94.489,124.906   c-54.844,28.538-119.644,34.535-180.464,36.348c-33.976,1.012-67.983,0.018-101.929-1.49   C13.299,274.32,12.578,276.175,14.222,276.248L14.222,276.248z",
        "duration": 1800
      }
    ],
    "dimensions": {
      "width": 886,
      "height": 470
    }
  }
};


$(function() {

  var paths = {
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
  }


//IE, Opera, Safari
  $(window).bind('mousewheel', function(e) {
    if (e.originalEvent.wheelDelta < 0) {
      //scroll down


      //$('#kiwi').append('.');
      $('#kiwi').lazylinepainter(
              {
                "svgData": pathObj,
                "strokeWidth": 2,
                "strokeColor": "#e09b99"
              }).lazylinepainter('paint');



      //console.log('Down');
    } else {
      //scroll up
      //

      $('#kiwi').lazylinepainter(
              {
                "svgData": pathObj,
                "strokeWidth": 2,
                "strokeColor": "#e77799",
                //"onComplete" : alert('hello end'),
              }).lazylinepainter('erase');



    }

    //prevent page fom scrolling
    return false;
  });


  for (var i = 0; i < 11; i++) {
    
    $(".lazy-animation-nav ul").append('<li class=""><span b-point=' + i + '></span></li>')
    
    paths[1]["x"];
  }


  




});