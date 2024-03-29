<!DOCTYPE HTML>
<html>
  <head>
    <style>
      body {
        margin: 0px;
        padding: 0px;
      }
      #container{
          width: 960px;
          height: 500px;
          margin: 3px;
          border: 3px black dotted;
      }
      
    </style>
  </head>
  <body>
    <div id="container"></div>
    <script src="http://d3lp1msu2r81bx.cloudfront.net/kjs/js/lib/kinetic-v4.7.2.min.js"></script>
    <script defer="defer">
      function drawImage(imageObj) { 
        var stage = new Kinetic.Stage({
          container: "container",
          width: 960,
          height: 500
        });
        var layer = new Kinetic.Layer();

        // darth vader
        var darthVaderImg = new Kinetic.Image({
          image: imageObj,
          x: stage.getWidth() / 2 - 200 / 2,
          y: stage.getHeight() / 2 - 137 / 2,
          width: 200,
          height: 137,
          draggable: true
        });

        // add cursor styling
        darthVaderImg.on('mouseover', function() {
          document.body.style.cursor = 'pointer';
        });
        darthVaderImg.on('mouseout', function() {
          document.body.style.cursor = 'default';
        });

        layer.add(darthVaderImg);
        stage.add(layer);
      }
      var imageObj = new Image();
      imageObj.onload = function() {
        drawImage(this);
      };
      imageObj.src = 'http://www.html5canvastutorials.com/demos/assets/darth-vader.jpg';
      
    </script>
  </body>
</html>