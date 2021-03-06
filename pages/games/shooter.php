<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../styles/navbar-style.css" />
<link rel="stylesheet" href="../styles/style.css" />

<head>
    <title>Shooter Game</title>
</head>
<div class="fixed" id="Score">
    <span>Score:</span><span id="ScoreEl">0</span>
</div>
<div class="fixed" id="modal">
    <div style="background-color: white;width: 40%;padding: 1%;border-radius:15px;">
        <div style="text-align: center;">
            <h1 style="color:black; font-size: 3em;margin: 0;" id="MainScore">0</h1>
            <span style="color:gray">Points</p>
        </div>
        <div>
            <button id="StartBtn">Start Game</button>
        </div>
    </div>
</div>
<canvas style="width: 99.6% !important;height: 100% !important;background-color: #fff;touch-action: none;"></canvas>

</html>
<style>
    #Score {
        margin-top: 4.5%;
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
        margin-left: 1.5%;
        margin-top: 1%;
        color: white;
        position: fixed;
    }

    body {
        margin: 0;
        background-color: #000;
    }

    @media(max-width: 900px) {
        #Score {
            margin-top: 7.5%;
        }
    }

    @media(max-width: 400px) {
        #Score {
            margin-top: 13.5%;
        }
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
    integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
    crossorigin="anonymous"></script>
<script src="../../assets/js/Shooter/shooter.js"></script>