<!DOCTYPE html>
<html style="overflow: none;">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Snake Game</title>
  
</head>

<body style="overflow: hidden;">
  <div class="fixed" id="Snakemodal">
    <div id="bla" style="background-color: white;width: 40%;padding: 1%;border-radius:15px;">
      <div style="text-align: center;">
        <h1 style="color:black; font-size: 3em;margin: 0;" id="SnakeMainScore">0</h1>
        <span style="color:gray">Points</p>
      </div>
      <div>
        <button id="StartBtn">Start Game</button>
      </div>
    </div>
  </div>
  <div>
    <div>
      <canvas id="canvas" class="canvas" height="800" width="800" style="background-color: #3e3e3e"></canvas>
    </div>
    <div style="display: inline-block;margin-left: 72%;margin-right: 21%;margin-top: 3%;">
      <h1 class="score" style="color:#fff; font-size: 3em;margin: 0;">0</h1>
      <span class="" style="color: #fff;" style="color:gray">Points</p>
    </div>
    <div style="margin-right: -61%;margin-left: 71%;margin-top: 34.1%">
      <button id="EndButton" style="padding: 1%;">End Game</button>
    </div>
  </div>
</body>
<
<!--Next Stage-->
<!-- <div class="loading" style="opacity:0.95;background-size:150px 150px">
    <h3 style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, 300%);">
        The Request is being Processed!
    </h3>
</div> -->
<div style="position: absolute;left: 1%;top: 0">
    <a href="../index.html" class="logo"><img src="../../images/MainLogo.png" id="MainLogo" width="200" height="100"></a>
</div>

<!--#region Preloader-->
<script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../../assets/js/snake/draw.js"></script>
<script type="text/javascript" src="../../assets/js/snake/fruit.js"></script>
<script type="text/javascript" src="../../assets/js/snake/snake.js"></script>
</html>

<style>
  #StartBtn {
    background-color: #ffc107;
    width: 100%;
    padding-top: 1%;
    padding-bottom: 1%;
    border-radius: 11px;
    border-color: #ffc107;
    border-style: solid;
    font-size: 1.5em;
    z-index: 999;
  }

  #EndButton {
    background-color: #ffc107;
    width: 10%;
    border-radius: 11px;
    border-color: #ffc107;
    border-style: solid;
    font-size: 1.5em;
    z-index: 1001;
  }


  #Snakemodal {
    display: flex;
    justify-content: center;
    top: 0px;
    right: 1%;
    bottom: 0px;
    left: 0px;
    align-items: center;
  }

  .fixed {
    user-select: none;
    margin-left: 1%;
    margin-top: 1%;
    color: white;
    z-index: 999;
    position: fixed;
  }

  body {
    margin: 0;
    background-color: #000;
  }


  #canvas {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
  }
</style>