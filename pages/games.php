<!DOCTYPE html>
<html>
<title>Games</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/navbar-style.css" />
    <link rel="stylesheet" href="../styles/footer.css" />
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="../styles/games.css" />
    <script src="../scripts/jquery-3.5.1.js"></script>
    <script src="../scripts/snow.js"></script>
</head>
<div id="WarningText">
    <h1>Warning!</h1>
    <h2>
        Shumica e ketyre lojrave jane ende ne "Demo Version", qe do te thote eshte versioni beta i tyre, Dhe keto mund
        ti luani vetem ne PC/Desktop Kompjuter
    </h2>
    <h2>
        Ne do te ju ofrojme mundesine per raportimin e "bugs", qe mund ti gjeni gjate luajtjes. Qdo ndihme nga ju do te
        jete e vlefshme ne permirsimin e kesaj Website
    </h2>
</div>

<body>
    <wrapper>
        <h2 id="AllGamesID"><strong>All Games<span>(4)</span></strong></h2>
        <div class="cards">
            <div class="card">
                <a href="shooter.html" style="text-decoration: none;color: #000;">
                    <img src="../Images/Shooter.jpg" />
                    <div style="display: flex;">
                        <figcaption style="color:#fff">Shooter</figcaption><button id="StartBtn"><span
                                style="text-decoration: none;">Start Game</span></button>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="snake.html" style="text-decoration: none;color: #000;">
                    <img src="../Images/Snake.PNG" />
                    <div style="display: flex;">
                        <figcaption style="color:#fff">Snake</figcaption><button id="StartBtn">Start Game</button>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="pingpong.html" style="text-decoration: none;color: #000;">
                    <img src="../Images/PingPong.png" />
                    <div style="display: flex;">
                        <figcaption style="color:#fff">Ping Pong</figcaption><button id="StartBtn">Start Game</button>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="ticTacToe.html" style="text-decoration: none;color: #000;">
                    <img src="../Images/tictactoe.PNG" />
                    <div style="display: flex;">
                        <figcaption style="color:#fff">Ping Pong</figcaption><button id="StartBtn">Start Game</button>
                    </div>
                </a>
            </div>
        </div>
    </wrapper>
</body>
<!--#region Preloader-->
<link rel="stylesheet" href="../styles/loading.css" />
<div id="loader-wrapper" style="display: block;">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!--#endregion-->
<hr style="color:#fff;margin-top: 6%">
<?php include '../includeFiles/navbar.php'?>
<?php include '../includeFiles/footer.php'?>
</html>
<script>
    $(document).ready(function () {
        $("#loader-wrapper").fadeOut(900);
    });
</script>
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
        cursor: pointer;
        margin-top: -4px;
        border-radius: 1px 1px 10px 10px;
    }

    #WarningText {
        margin-top: 5%;
        margin-left: 1.3%;
        color: #aeafaf;
    }

    .abs,
    #AllGamesID:after,
    .cards .card figcaption,
    .cards .card:after {
        position: absolute;
    }

    .rel,
    #AllGamesID,
    #AllGamesID strong,
    .cards .card {
        position: relative;
    }

    .cards {
        display: flex;
    }

    .vm,
    #AllGamesID,
    #AllGamesID strong,
    #AllGamesID span {
        vertical-align: middle;
    }

    body {
        font-family: 'Nunito', sans-serif;
    }

    .wrapper {
        padding: 15px;
    }

    #AllGamesID {
        padding: 10px;
        padding-left: 25px;
        color: #ccc;
        margin: 0;
    }

    #AllGamesID strong {
        z-index: 2;
        background: #24282f;
        padding: 4px 8px;
    }

    #AllGamesID span {
        font-size: 0.7em;
        color: #aaa;
        margin-left: 10px;
    }

    #AllGamesID:after {
        content: '';
        z-index: 1;
        bottom: 50%;
        margin-bottom: -2px;
        height: 2px;
        left: 0;
        right: 0;
        background: #373d47;
    }

    .cards {
        flex-flow: row wrap;
    }

    .cards .card {
        margin: 20px;
        width: 19%;
        height: auto;
        overflow: visible;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.8);
        transform-origin: center top;
        transform-style: preserve-3d;
        transform: translateZ(0);
        transition: 0.3s;
        cursor: pointer;
    }

    .cards .card img {
        width: 100%;
        min-height: 100%;
    }

    .cards .card figcaption {
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px;
        padding-bottom: 10px;
        font-size: 31px;
        background: none;
        color: #fff;
        /*transform: translateY(100%);*/
        transition: 0.3s;
    }

    /* 
    .cards .card:after {
        content: '';
        z-index: 10;
        width: 200%;
        height: 100%;
        top: -90%;
        left: -20px;
        opacity: 0.1;
        transform: rotate(45deg);
        background: linear-gradient(to top, transparent, #fff 15%, rgba(255, 255, 255, 0.5));
        transition: 0.3s;
    } */

    .cards .card:hover,
    .cards .card:focus,
    .cards .card:active {
        box-shadow: 0 8px 16px 3px rgba(0, 0, 0, 0.6);
        transform: translateY(-3px) scale(1.05) rotateX(15deg);
    }

    .cards .card:hover figcaption,
    .cards .card:focus figcaption,
    .cards .card:active figcaption {
        transform: none;
    }

    .cards .card:hover:after,
    .cards .card:focus:after,
    .cards .card:active:after {
        transform: rotate(25deg);
        top: -40%;
        opacity: 0.15;
    }

    @media (max-width: 900px) {
        .cards .card {
            width: 43%;
        }

        #WarningText {
            margin-top: 6%;
        }
    }

    @media (max-width: 600px) {
        .cards .card {
            width: 39%;
        }
    }

    @media (max-width: 400px) {
        .cards .card {
            width: 100%;
        }

        #WarningText {
            margin-top: 20%;
        }
    }
</style>