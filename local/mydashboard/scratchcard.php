
<html>
<head>

<script type="text/javascript" src="https://www.goocode.net/demo/img/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="external/wScratchPad.js"></script>
</head>
<body>
<div id="page">

<div class="section">
<p>
  <style>
    #demo1, #demo2, #demo3 {
      width: 25%;
      height: 100px;
      border: solid 1px;
      display: inline-block;
    }
  </style>

  <div id="demo2" class="scratchpad"></div>
  <div id="demo3" class="scratchpad"></div>

  <br/>
  <input type="button" value="Reset" onclick="$('.scratchpad').wScratchPad('reset');"/>
  <input type="button" value="Clear" onclick="$('.scratchpad').wScratchPad('clear');"/>
  <input type="button" value="Enable" onclick="$('.scratchpad').wScratchPad('enable', true);"/>
  <input type="button" value="Disable" onclick="$('.scratchpad').wScratchPad('enable', false);"/>

  <script type="text/javascript">


    // Test 2
    $('#demo2').wScratchPad({
//      bg: 'http://localhost/ceasefire/local/mydashboard/sunil/images/scratch.png',
      fg: 'http://localhost/ceasefire/local/mydashboard/sunil/images/scratch.png',
      bg: '#ff0000',
      scratchMove: function (e, percent) {
        console.log(percent);

        if (percent > 70) {
          this.clear();
        }
      }
    });
    $('#demo2').wScratchPad('cursor', 'url("cursors/coin.png") 5 5, default');

    // Test 3
    $('#demo3').wScratchPad({
      cursor: 'url("cursors/mario.png") 5 5, default',
      scratchMove: function (e, percent) {
        console.log(percent);
      }
    });
    $('#demo3').wScratchPad('bg', 'images/winner.png');
    $('#demo3').wScratchPad('fg', 'images/scratch-to-win.png');
    $('#demo3').wScratchPad('size', 10);
  </script>


</p>  	
	
   
</div>

</body>
</html>