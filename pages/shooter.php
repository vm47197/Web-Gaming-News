<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../styles/navbar-style.css" />
<link rel="stylesheet" href="../styles/style.css" />
<link rel="stylesheet" href="../styles/footer.css">
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
<canvas style="width: 100% !important;height: 100% !important;background-color: #fff;touch-action: none;"></canvas>

<!--#region Preloader-->
<link rel="stylesheet" href="styles/../loading.css" />
<div id="loader-wrapper" style="display: block;">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!--#endregion-->
<hr style="color:#fff;margin-top: 5%">
<footer class="footer-distributed">
    <div class="footer-left">
        <img src="../Images/MainLogo.png" style="margin-top: -12% !important;">
        <p class="footer-links">
            <a href="../index.html" class="link-1">Home</a>
            <a href="pages/about.html">About Us</a>
            <a href="pages/games.html">Try Our new Games</a>
            <a href="pages/contact.html">Contact</a>
            <a href="#">Login</a>
        </p>
        <p class="footer-company-name">GameHub © 2015</p>
    </div>
    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p>Prishtine/Kosovo</p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p>+1.555.555.5555</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">support@company.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <form>
            <h1 style="font-size: 2rem;float:left">Newsletter Signup</h1>
            <div class="info">
                <input type="text" placeholder="Your Name">
                <input type="email" placeholder="Your Email">
            </div>
            <input type="submit" value="Subscribe">
        </form>
    </div>

</footer>
<article id="wrap">
    <article id="lightings">
        <section id="one">
            <section id="two">
                <section id="three">
                    <section id="four">
                        <section id="five">

                        </section>
                    </section>
                </section>
            </section>
        </section>
    </article>
</article>
<!--Next Stage-->
<!-- <div class="loading" style="opacity:0.95;background-size:150px 150px">
    <h3 style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, 300%);">
        The Request is being Processed!
    </h3>
</div> -->
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
            <li><a href="index.html">Home</a></li>
            <li><a href="pages/about.html">About</a></li>
            <li><a href="pages/games.html">Try our Newest Games</a></li>
            <li><a href="pages/contact.html">Contact</a></li>
            <li><a href="pages/login.html" class="fa fa-user">Login</a></li>
        </ul>
    </nav>
</div>
</html>
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
<style>
    #Score {
        margin-top: 5.5%;
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
<script src="../scripts/Shooter/shooter.js"></script>