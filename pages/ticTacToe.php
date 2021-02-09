<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../styles/tic-tac-toe.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito&display=swap">
    <link rel="stylesheet" href="../styles/navbar-style.css" />
    <script src="https://use.fontawesome.com/6be8a65006.js"></script>
    <title>Tic Tac Toe</title>
</head>
<body>
    <div style="position: absolute;top: 50%;margin-top: -200px;left: 0;width: 100%;">
        <div class="tic-tac-toe">
            <input class="player-1 left first-column top first-row first-diagonal turn-1" id="block1-1-1"
                type="radio" />
            <label class="turn-1" for="block1-1-1"></label>
            <input class="player-1 middle second-column top first-row turn-1" id="block1-1-2" type="radio" />
            <label class="turn-1" for="block1-1-2"></label>
            <input class="player-1 right third-column top first-row second-diagonal turn-1" id="block1-1-3"
                type="radio" />
            <label class="turn-1" for="block1-1-3"></label>
            <input class="player-1 left first-column center second-row turn-1" id="block1-2-1" type="radio" />
            <label class="turn-1" for="block1-2-1"></label>
            <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-1"
                id="block1-2-2" type="radio" />
            <label class="turn-1" for="block1-2-2"></label>
            <input class="player-1 right third-column center second-row turn-1" id="block1-2-3" type="radio" />
            <label class="turn-1" for="block1-2-3"></label>
            <input class="player-1 left first-column bottom third-row second-diagonal turn-1" id="block1-3-1"
                type="radio" />
            <label class="turn-1" for="block1-3-1"></label>
            <input class="player-1 middle second-column bottom third-row turn-1" id="block1-3-2" type="radio" />
            <label class="turn-1" for="block1-3-2"></label>
            <input class="player-1 right third-column bottom third-row first-diagonal turn-1" id="block1-3-3"
                type="radio" />
            <label class="turn-1" for="block1-3-3"></label>
            <input class="player-2 left first-column top first-row first-diagonal turn-2" id="block2-1-1"
                type="radio" />
            <label class="turn-2" for="block2-1-1"></label>
            <input class="player-2 middle second-column top first-row turn-2" id="block2-1-2" type="radio" />
            <label class="turn-2" for="block2-1-2"></label>
            <input class="player-2 right third-column top first-row second-diagonal turn-2" id="block2-1-3"
                type="radio" />
            <label class="turn-2" for="block2-1-3"></label>
            <input class="player-2 left first-column center second-row turn-2" id="block2-2-1" type="radio" />
            <label class="turn-2" for="block2-2-1"></label>
            <input class="player-2 middle second-column center second-row first-diagonal second-diagonal turn-2"
                id="block2-2-2" type="radio" />
            <label class="turn-2" for="block2-2-2"></label>
            <input class="player-2 right third-column center second-row turn-2" id="block2-2-3" type="radio" />
            <label class="turn-2" for="block2-2-3"></label>
            <input class="player-2 left first-column bottom third-row second-diagonal turn-2" id="block2-3-1"
                type="radio" />
            <label class="turn-2" for="block2-3-1"></label>
            <input class="player-2 middle second-column bottom third-row turn-2" id="block2-3-2" type="radio" />
            <label class="turn-2" for="block2-3-2"></label>
            <input class="player-2 right third-column bottom third-row first-diagonal turn-2" id="block2-3-3"
                type="radio" />
            <label class="turn-2" for="block2-3-3"></label>
            <input class="player-1 left first-column top first-row first-diagonal turn-3" id="block3-1-1"
                type="radio" />
            <label class="turn-3" for="block3-1-1"></label>
            <input class="player-1 middle second-column top first-row turn-3" id="block3-1-2" type="radio" />
            <label class="turn-3" for="block3-1-2"></label>
            <input class="player-1 right third-column top first-row second-diagonal turn-3" id="block3-1-3"
                type="radio" />
            <label class="turn-3" for="block3-1-3"></label>
            <input class="player-1 left first-column center second-row turn-3" id="block3-2-1" type="radio" />
            <label class="turn-3" for="block3-2-1"></label>
            <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-3"
                id="block3-2-2" type="radio" />
            <label class="turn-3" for="block3-2-2"></label>
            <input class="player-1 right third-column center second-row turn-3" id="block3-2-3" type="radio" />
            <label class="turn-3" for="block3-2-3"></label>
            <input class="player-1 left first-column bottom third-row second-diagonal turn-3" id="block3-3-1"
                type="radio" />
            <label class="turn-3" for="block3-3-1"></label>
            <input class="player-1 middle second-column bottom third-row turn-3" id="block3-3-2" type="radio" />
            <label class="turn-3" for="block3-3-2"></label>
            <input class="player-1 right third-column bottom third-row first-diagonal turn-3" id="block3-3-3"
                type="radio" />
            <label class="turn-3" for="block3-3-3"></label>
            <input class="player-2 left first-column top first-row first-diagonal turn-4" id="block4-1-1"
                type="radio" />
            <label class="turn-4" for="block4-1-1"></label>
            <input class="player-2 middle second-column top first-row turn-4" id="block4-1-2" type="radio" />
            <label class="turn-4" for="block4-1-2"></label>
            <input class="player-2 right third-column top first-row second-diagonal turn-4" id="block4-1-3"
                type="radio" />
            <label class="turn-4" for="block4-1-3"></label>
            <input class="player-2 left first-column center second-row turn-4" id="block4-2-1" type="radio" />
            <label class="turn-4" for="block4-2-1"></label>
            <input class="player-2 middle second-column center second-row first-diagonal second-diagonal turn-4"
                id="block4-2-2" type="radio" />
            <label class="turn-4" for="block4-2-2"></label>
            <input class="player-2 right third-column center second-row turn-4" id="block4-2-3" type="radio" />
            <label class="turn-4" for="block4-2-3"></label>
            <input class="player-2 left first-column bottom third-row second-diagonal turn-4" id="block4-3-1"
                type="radio" />
            <label class="turn-4" for="block4-3-1"></label>
            <input class="player-2 middle second-column bottom third-row turn-4" id="block4-3-2" type="radio" />
            <label class="turn-4" for="block4-3-2"></label>
            <input class="player-2 right third-column bottom third-row first-diagonal turn-4" id="block4-3-3"
                type="radio" />
            <label class="turn-4" for="block4-3-3"></label>
            <input class="player-1 left first-column top first-row first-diagonal turn-5" id="block5-1-1"
                type="radio" />
            <label class="turn-5" for="block5-1-1"></label>
            <input class="player-1 middle second-column top first-row turn-5" id="block5-1-2" type="radio" />
            <label class="turn-5" for="block5-1-2"></label>
            <input class="player-1 right third-column top first-row second-diagonal turn-5" id="block5-1-3"
                type="radio" />
            <label class="turn-5" for="block5-1-3"></label>
            <input class="player-1 left first-column center second-row turn-5" id="block5-2-1" type="radio" />
            <label class="turn-5" for="block5-2-1"></label>
            <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-5"
                id="block5-2-2" type="radio" />
            <label class="turn-5" for="block5-2-2"></label>
            <input class="player-1 right third-column center second-row turn-5" id="block5-2-3" type="radio" />
            <label class="turn-5" for="block5-2-3"></label>
            <input class="player-1 left first-column bottom third-row second-diagonal turn-5" id="block5-3-1"
                type="radio" />
            <label class="turn-5" for="block5-3-1"></label>
            <input class="player-1 middle second-column bottom third-row turn-5" id="block5-3-2" type="radio" />
            <label class="turn-5" for="block5-3-2"></label>
            <input class="player-1 right third-column bottom third-row first-diagonal turn-5" id="block5-3-3"
                type="radio" />
            <label class="turn-5" for="block5-3-3"></label>
            <input class="player-2 left first-column top first-row first-diagonal turn-6" id="block6-1-1"
                type="radio" />
            <label class="turn-6" for="block6-1-1"></label>
            <input class="player-2 middle second-column top first-row turn-6" id="block6-1-2" type="radio" />
            <label class="turn-6" for="block6-1-2"></label>
            <input class="player-2 right third-column top first-row second-diagonal turn-6" id="block6-1-3"
                type="radio" />
            <label class="turn-6" for="block6-1-3"></label>
            <input class="player-2 left first-column center second-row turn-6" id="block6-2-1" type="radio" />
            <label class="turn-6" for="block6-2-1"></label>
            <input class="player-2 middle second-column center second-row first-diagonal second-diagonal turn-6"
                id="block6-2-2" type="radio" />
            <label class="turn-6" for="block6-2-2"></label>
            <input class="player-2 right third-column center second-row turn-6" id="block6-2-3" type="radio" />
            <label class="turn-6" for="block6-2-3"></label>
            <input class="player-2 left first-column bottom third-row second-diagonal turn-6" id="block6-3-1"
                type="radio" />
            <label class="turn-6" for="block6-3-1"></label>
            <input class="player-2 middle second-column bottom third-row turn-6" id="block6-3-2" type="radio" />
            <label class="turn-6" for="block6-3-2"></label>
            <input class="player-2 right third-column bottom third-row first-diagonal turn-6" id="block6-3-3"
                type="radio" />
            <label class="turn-6" for="block6-3-3"></label>
            <input class="player-1 left first-column top first-row first-diagonal turn-7" id="block7-1-1"
                type="radio" />
            <label class="turn-7" for="block7-1-1"></label>
            <input class="player-1 middle second-column top first-row turn-7" id="block7-1-2" type="radio" />
            <label class="turn-7" for="block7-1-2"></label>
            <input class="player-1 right third-column top first-row second-diagonal turn-7" id="block7-1-3"
                type="radio" />
            <label class="turn-7" for="block7-1-3"></label>
            <input class="player-1 left first-column center second-row turn-7" id="block7-2-1" type="radio" />
            <label class="turn-7" for="block7-2-1"></label>
            <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-7"
                id="block7-2-2" type="radio" />
            <label class="turn-7" for="block7-2-2"></label>
            <input class="player-1 right third-column center second-row turn-7" id="block7-2-3" type="radio" />
            <label class="turn-7" for="block7-2-3"></label>
            <input class="player-1 left first-column bottom third-row second-diagonal turn-7" id="block7-3-1"
                type="radio" />
            <label class="turn-7" for="block7-3-1"></label>
            <input class="player-1 middle second-column bottom third-row turn-7" id="block7-3-2" type="radio" />
            <label class="turn-7" for="block7-3-2"></label>
            <input class="player-1 right third-column bottom third-row first-diagonal turn-7" id="block7-3-3"
                type="radio" />
            <label class="turn-7" for="block7-3-3"></label>
            <input class="player-2 left first-column top first-row first-diagonal turn-8" id="block8-1-1"
                type="radio" />
            <label class="turn-8" for="block8-1-1"></label>
            <input class="player-2 middle second-column top first-row turn-8" id="block8-1-2" type="radio" />
            <label class="turn-8" for="block8-1-2"></label>
            <input class="player-2 right third-column top first-row second-diagonal turn-8" id="block8-1-3"
                type="radio" />
            <label class="turn-8" for="block8-1-3"></label>
            <input class="player-2 left first-column center second-row turn-8" id="block8-2-1" type="radio" />
            <label class="turn-8" for="block8-2-1"></label>
            <input class="player-2 middle second-column center second-row first-diagonal second-diagonal turn-8"
                id="block8-2-2" type="radio" />
            <label class="turn-8" for="block8-2-2"></label>
            <input class="player-2 right third-column center second-row turn-8" id="block8-2-3" type="radio" />
            <label class="turn-8" for="block8-2-3"></label>
            <input class="player-2 left first-column bottom third-row second-diagonal turn-8" id="block8-3-1"
                type="radio" />
            <label class="turn-8" for="block8-3-1"></label>
            <input class="player-2 middle second-column bottom third-row turn-8" id="block8-3-2" type="radio" />
            <label class="turn-8" for="block8-3-2"></label>
            <input class="player-2 right third-column bottom third-row first-diagonal turn-8" id="block8-3-3"
                type="radio" />
            <label class="turn-8" for="block8-3-3"></label>
            <input class="player-1 left first-column top first-row first-diagonal turn-9" id="block9-1-1"
                type="radio" />
            <label class="turn-9" for="block9-1-1"></label>
            <input class="player-1 middle second-column top first-row turn-9" id="block9-1-2" type="radio" />
            <label class="turn-9" for="block9-1-2"></label>
            <input class="player-1 right third-column top first-row second-diagonal turn-9" id="block9-1-3"
                type="radio" />
            <label class="turn-9" for="block9-1-3"></label>
            <input class="player-1 left first-column center second-row turn-9" id="block9-2-1" type="radio" />
            <label class="turn-9" for="block9-2-1"></label>
            <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-9"
                id="block9-2-2" type="radio" />
            <label class="turn-9" for="block9-2-2"></label>
            <input class="player-1 right third-column center second-row turn-9" id="block9-2-3" type="radio" />
            <label class="turn-9" for="block9-2-3"></label>
            <input class="player-1 left first-column bottom third-row second-diagonal turn-9" id="block9-3-1"
                type="radio" />
            <label class="turn-9" for="block9-3-1"></label>
            <input class="player-1 middle second-column bottom third-row turn-9" id="block9-3-2" type="radio" />
            <label class="turn-9" for="block9-3-2"></label>
            <input class="player-1 right third-column bottom third-row first-diagonal turn-9" id="block9-3-3"
                type="radio" />
            <label class="turn-9" for="block9-3-3"></label>
            <div class="end">
                <h3></h3><a href="">Restart</a>
            </div>
        </div>
        <h5>Note: use the Full Page view for the best experience.</h5>
    </div>
</body>
<link rel="stylesheet" href="../styles/footer.css">
<link rel="stylesheet" href="../styles/navbar-style.css">
<div style="position: absolute;left: 1%;top: 0">
    <a href="../index.html" class="logo"><img src="../Images/MainLogo.png" id="MainLogo" width="200" height="100"></a>
</div>
<div class="button_container" id="toggle">
    <span class="top"></span>
    <span class="middle"></span>
    <span class="bottom"></span>
</div>
<div class="overlay" id="overlay">
    <nav class="overlay-menu">
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../pages/about.html">About</a></li>
            <li><a href="../pages/games.html">Try our Newest Games</a></li>
            <li><a href="../pages/contact.html">Contact</a></li>
            <li><a href="../pages/login.html" class="fa fa-user">Login</a></li>
        </ul>
    </nav>
</div>
<!--#region Preloader-->
<link rel="stylesheet" href="../styles/loading.css" />
<div id="loader-wrapper" style="display: block;">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<script src="../scripts/jquery-3.5.1.js"></script>
<script>
    $(document).ready(function () {
        $(".item-4side").hide();
        $("#loader-wrapper").fadeOut(900);
    });
    $('#toggle').click(function () {
       $(this).toggleClass('active');
       $('#overlay').toggleClass('open');
       if ($(this).hasClass('active')) {
           //$("#overlay").css("backdrop-filter","blur(5px)",2000);
           $("#overlay").css("backdrop-filter", "blur(5px)");
       }
       else {
           //$("#overlay").css("backdrop-filter","blur(0px)",2000);
           $("#overlay").css("backdrop-filter", "blur(0px)");
       }
   });
</script>
<styles></styles>
</html>