<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/navbar-style.css" />
    <link rel="stylesheet" href="../styles/style.css" />
<head>
    <meta charset="UTF-8">
    <title>Ping Pong</title>
</head>

<body>
    <div>
        <div>
            <div>
                <canvas id="pong" width="500" height="600"></canvas>
            </div>
            <div class="fixedbtn">
                <button id="EndBtn" style="z-index: 1111;width: 200px;margin-right: auto;margin-left: 46.5%;margin-top: 1.1%;">End Game</button>
            </div>
        </div>
        <div class="fixed" id="modal">
            <div style="background-color: white;width: 40%;padding: 1%;border-radius:15px;width: 400px;">
                <div style="text-align: center;">
                    <div style=" display: inline-block; margin-right: 3%;">
                        <h1 style="color:black; font-size: 3em;margin: 0;" id="UserScore">0</h1>
                        <span style="color:gray">My Points</p>
                    </div>
                    <div style=" display: inline-block;margin-left: 3%;">
                        <h1 style="color:black; font-size: 3em;margin: 0;" id="ComScore">0</h1>
                        <span style="color:gray">Computer Points</p>
                    </div>
                </div>
                <div>
                    <button id="StartBtn">Start Game</button>
                </div>
            </div>
        </div>

    </div>
    <script src="/Web-Gaming-News/assets/js/jquery.min.js"></script>
    <script src="/Web-Gaming-News/assets/js/PingPong/pong.js"></script>
</body>
<style>

    @media (min-width: 768px) {
        .container {
            width: 750px;
        }
    }

    @media (min-width: 992px) {
        .container {
            width: 970px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            width: 1170px;
        }
    }

    #pong {
        border: 2px solid #FFF;
        position: absolute;
        margin: auto;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
    }

    #EndBtn {
        background-color: #ffc107;
        width: 15%;
        padding-top: 1%;
        padding-bottom: 1%;
        border-radius: 11px;
        border-color: #ffc107;
        border-style: solid;
        font-size: 1.5em;
        position: absolute;
        display: inline-block;
    }

    #StartBtn {
        background-color: #ffc107;
        width: 100%;
        padding-top: 1%;
        padding-bottom: 1%;
        border-radius: 11px;
        border-color: #ffc107;
        border-style: solid;
        font-size: 1.5em;
    }


    #modal {
        display: flex;
        justify-content: center;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        align-items: center;
    }

    .fixed {
        user-select: none;
        margin-left: 1%;
        margin-top: 1%;
        color: white;
        position: fixed;
    }

    .fixedbtnsss {
        user-select: none;
        margin-top: 35% !important;
        margin-left: 58% !important;
        color: white;
        position: relative;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
    }

    .fixedbtn {
        display: flex;
        justify-content: center;
        position: absolute;
        margin: auto;

        right: 0;
        left: 0;
        bottom: 20%;
    }

    body {
        margin: 0;
        background-color: #000;
    }
</style>

</html>