<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--#region CssLinks-->
    <link rel="stylesheet" href="styles/cards.css" />
    <link rel="stylesheet" href="styles/navbar-style.css" />
    <link rel="stylesheet" href="styles/footer.css" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/slider.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito&display=swap">
    <link rel="stylesheet" href="styles/loading.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <!--#endregion-->

    <!--#region Scripts-->

    <script src="scripts/jquery-3.5.1.js"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/snow.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <!--#endregion-->

    <div class="TopContainer">
        <div class="item">
            <h1>Assassin's Creed Valhalla</h1>
            <h3 style="margin-top: 1%;">Explore the newest game from Ubisoft, <br>and watch the Cinematic Trailer of
                this game</h3>
            <a href="#ACV"><button class="FindOutMore" id="" onclick="CheckScroll('#ACV')" style="outline: none;">Find
                    Out More</button></a>
        </div>
    </div>
    <style>
        @media(max-width: 700px) {
            .mid-container {
                height: 18% !important;
            }
            .mid-toogle {
                display: none !important;
            }
        }
        .mid-toogle {
            transition: 300ms linear;
        }
    </style>
</head>
<div
    style="background-color: #000;filter: blur(10px);margin-top: -0.8%;margin-left: 0%;margin-right:0%;padding-bottom: 2%;position: relative;z-index: 100;height: 5%;">
    <br />
    <br />
</div>

<body>
    <!--#region Cards-->
    <div class="mid-container"
        style="text-align: center;font-size: 30px;margin-top: 2%;margin-bottom: 2%;background-color: #0b3728;height: 8%;">
        <div>
            <div style="display: inline-block;">
                <p id="enjoy"></p>Enjoy the latest news in gaming</p>
            </div>
        </div>
    </div>
    <section class="cards-wrapper" style="padding: 0;">
        <div class="card-grid-space">
            <div class="num"></div>
            <a class="cardg" onclick="CheckScroll('#Riot')" style="background-image: url(Images/PostImages/Riot.jpg);">
                <div class="backdroper">
                    <h1>Riot</h1>
                    <p>Riot confirms it’s making a League of Legends MMO</p>
                    <div class="tags">
                        <div class="tag">Learn More</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="card-grid-space">
            <div class="num"></div>
            <a class="cardg" onclick="CheckScroll('#CB2077')"
                style="background-image: url(Images/PostImages/CyberPunkPostImg.jpg);">
                <div class="backdroper">
                    <h1>Cyberpunk 2077</h1>
                    <p>Microsoft offers Cyberpunk 2077 refunds for all digital sales, but it’s not pulling the game</p>
                    <div class="tags">
                        <div class="tag">Learn More</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="card-grid-space">
            <div class="num"></div>
            <a class="cardg" onclick="CheckScroll('#AmongUs')"
                style="background-image: url(Images/PostImages/Among-us.jpg);">
                <div class="backdroper">
                    <h1>Among Us</h1>
                    <p>Among Us launches for the Nintendo Switch today</p>
                    <div class="tags">
                        <div class="tag">Learn More</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="card-grid-space">
            <div class="num"></div>
            <a class="cardg" onclick="CheckScroll('#Snap')"
                style="background-image: url(Images/PostImages/Snapchat.jpg);">
                <div class="backdroper">
                    <h1>Snapchat,</h1>
                    <p>Snapchat is releasing Bitmoji Paint, a massively multiplayer online painting game </p>
                    <div class="tags">
                        <div class="tag">Learn More</div>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section class="cards-wrapper2">
        <div class="card-grid-space">
            <div class="num"></div>
            <a class="cardg" onclick="CheckScroll('#Fortnite')"
                style="background-image: url(Images/PostImages/Fortnite.jpg);width: 100%;">
                <div class="backdroper">
                    <h1>Fortnite</h1>
                    <p>Fortnite gets a performance mode so it runs better on older PCs</p>
                    <div class="tags">
                        <div class="tag">Learn More</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="card-grid-space">
            <div class="num"></div>
            <a class="cardg" href="https://video.gjirafa.com/mastersleague"
                style="background-image: url(Images/PostImages/GjirafaPrizePool.jpg);width: 100%;">
                <div class="backdroper">
                    <h1>Gjirafa Masters League</h1>
                    <p>A gaming evenet with a Prize Pool of over 25,000$</p>
                    <div class="tags">
                        <div class="tag">Learn More</div>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section class="cards-wrapper2">
        <div class="card-grid-space">
            <div class="num"></div>
            <a class="cardg" onclick="CheckScroll('#FarCry6')"
                style="background-image: url(Images/PostImages/FarCry6.jpg);width: 100%;">
                <div class="backdroper">
                    <h1>Far Cry 6</h1>
                    <p>Soon to come...</p>
                    <div class="tags">
                        <div class="tag">Learn More</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="card-grid-space">
            <div class="num"></div>
            <a class="cardg" onclick="CheckScroll('#ACV')"
                style="background-image: url(Images/eivor-assassins-creed-valhalla-pc-games-playstation-4-3840x2160-1753.jpg);width: 100%;">
                <div class="backdroper">
                    <h1>Assassin's Creed Valhalla</h1>
                    <p>The latest and greatest game till now from UbiSoft</p>
                    <div class="tags">
                        <div class="tag">Learn More</div>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <!--#endregion-->

    <!--#endregion -->
    <hr class="fade-in" id="ACV" style="color: #fff;margin: 0 auto;width: 96%;margin-top:2%">
    <!--Assassin's Creed Valhalla-->
    <div class="fade-in-left">
        <div style="margin-top: 2%;margin-bottom: 5%;display: flex;justify-content:center">
            <div class="Post"
                style="display: inline-block;border: 1px;border-bottom: 0;border-color: #fff;border-style: solid;max-width: 1000px;">
                <img src="Images/eivor-assassins-creed-valhalla-pc-games-playstation-4-3840x2160-1753.jpg"
                    style="max-width: 100%;">
                <div style="display: inline;">
                    <div>
                        <h1>Assassin's Creed Valhalla</h1>
                    </div>
                    <div style="margin: 1%;">
                        <span class="fade-in">Assassin's Creed Valhalla is an action role-playing video game developed
                            by Ubisoft
                            Montreal and published by Ubisoft. It is the twelfth major installment and the
                            twenty-second
                            release in the Assassin's Creed series, and a successor to the 2018's Assassin's Creed
                            Odyssey. Set in 873 AD, the game recounts a fictional story during the Viking invasion
                            of
                            Britain. The player controls Eivor, a Viking raider who becomes embroiled in the
                            conflict
                            between the Brotherhood of Assassins and the Templar Order.[c]

                            The game was released on November 10, 2020, for Microsoft Windows, PlayStation 4, Xbox
                            One,
                            Xbox Series X and Series S, and Stadia, while the PlayStation 5 version was released on
                            November 12. The game received generally positive reviews from critics, who praised the
                            graphics and story, but criticized it for technical issues and lack of
                            innovation.</span>
                    </div>
                </div>
            </div>
        </div>
        <!--#region Iframe-->
        <div style="display: flex;justify-content: center;margin-top: -5%">
            <video controls="true" style="border: 1px solid;max-width: 1000px;max-height: 500px;width: 100%;">
                <source src="Images/Media/Assassin's Creed Valhalla - Official Trailer.mp4" />
            </video>
        </div>
        <!--#endregion-->
    </div>
    <hr class="fade-in" id="CB2077" style="color: #fff;margin: 0 auto;width: 96%;margin-top:2%">
    <!--CyberPunk 2077-->
    <div class="fade-in-right">
        <div style="margin-top: 2%;display: flex;justify-content:center">
            <div class="Post fadein"
                style="display: inline-block;border: 1px;border-color: #fff;border-style: solid;max-width: 1000px;">
                <img src="Images/PostImages/CyberPunkPostImg.jpg" style="max-width: 100%;">
                <div style="display: inline;">
                    <div>
                        <h1>CyberPunk 2077</h1>
                    </div>
                    <div style="margin: 1%;">
                        <span class="fade-in">Cyberpunk 2077 is a 2020 action role-playing video game developed and
                            published by CD
                            Projekt. The story takes place in Night City, an open world set in the Cyberpunk
                            universe.
                            Players assume the first-person perspective of a customisable mercenary known as V, who
                            can
                            acquire skills in hacking and machinery with options for melee and ranged combat.
                            The game was developed using the REDengine 4 by a team of around 500 people, exceeding
                            the
                            number that worked on the studio's previous game The Witcher 3: Wild Hunt (2015). CD
                            Projekt
                            launched a new division in Wrocław, Poland, and partnered with Digital Scapes, Nvidia,
                            QLOC,
                            and Jali Research to aid the production. Cyberpunk creator Mike Pondsmith was a
                            consultant,
                            and actor Keanu Reeves has a starring role. The original score was led by Marcin
                            Przybyłowicz, featuring the contributions of several licensed artists.
                            CD Projekt released Cyberpunk 2077 for PlayStation 4, Stadia, Windows, and Xbox One on
                            10
                            December 2020, with PlayStation 5 and Xbox Series X/S versions planned to follow in
                            2021. It
                            received praise for its narrative, setting, and graphics, although some of its gameplay
                            elements received mixed responses. In contrast, it was widely criticized for bugs,
                            particularly in the console versions which also suffered from performance issues; Sony
                            removed it from the PlayStation Store on 17 December 2020.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="fade-in" id="Riot" style="color: #fff;margin: 0 auto;width: 96%;margin-top:2%">
    <!--Riot-->
    <div class="fade-in-left">
        <div style="margin-top: 2%;display: flex;justify-content:center">
            <div class="Post"
                style="display: inline-block;border: 1px;border-color: #fff;border-style: solid;max-width: 1000px;">
                <img src="Images/PostImages/Riot.jpg" style="max-width: 100%;">
                <div style="display: inline;">
                    <div>
                        <h1>Riot MMO</h1>
                    </div>
                    <div style="margin: 1%;">
                        <span class="fade-in">League of Legends developer Riot Games is working on a massively
                            multiplayer online
                            (MMO)
                            roleplaying game in the League universe, Riot’s VP of IP and entertainment, Greg Street,
                            tweeted on Thursday.

                            “My recent job at Riot has been to help develop the League universe, which we’re going
                            to
                            need!” Street said. “My new job is to kick off a big (some might say massive) game that
                            many
                            of you, and many Rioters, have been asking us to create.” If the deliberate use of the
                            word
                            “massive” in that quote wasn’t enough of a hint, in a reply to another Twitter user,
                            Street
                            confirmed the game is an MMO.The new MMO isn’t entirely surprising, as Riot has been
                            working
                            to expand the League universe into other games and mediums as of late</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="fade-in" id="AmongUs" style="color: #fff;margin: 0 auto;width: 96%;margin-top:2%">
    <!--Among Us-->
    <div class="fade-in-right">
        <div style="margin-top: 2%;display: flex;justify-content:center">
            <div class="Post"
                style="display: inline-block;border: 1px;border-color: #fff;border-style: solid;max-width: 1000px;">
                <img src="Images/PostImages/Among-us.jpg" style="max-width: 100%;">
                <div style="display: inline;">
                    <div>
                        <h1>Among Us</h1>
                    </div>
                    <div style="margin: 1%;">
                        <span class="fade-in">Among Us, Innersloth’s breakout hit of 2020, is coming to the Nintendo
                            Switch today.
                            The
                            news was announced during a special indie game-focused Nintendo Direct. The game will
                            feature crossplay.
                            Among Us is an online social deduction game, one in which players have to work together
                            to
                            complete tasks around the ship and figure out who the crew’s imposters are. Imposters,
                            meanwhile, attempt to quietly kill as many other players as they can. Although the game
                            first launched in 2018, it’s become a sensation, thanks to a newfound popularity on
                            Twitch,
                            played by streamers and Rep. Alexandria Ocasio-Cortez. Among Us has become so popular,
                            in
                            fact, that Innersloth canceled the game’s sequel to focus on improving the original.
                            The game picked up the award for best multiplayer title of the year during this year’s
                            Game
                            Awards. A new airship map is expected next year.
                            FEATURED VIDEOS FROM THE VERGE
                            iPhone 12 Pro review: more shine
                            MORE FROM THE VERGE
                            Nearly half a billion users played Among Us in November
                            Discord adds mobile screensharing, and it’s perfect for casual hangouts with your
                            friends
                            NPR shows are now available on Spotify worldwide
                            The Surface Duo gets better TikTok support and availability outside the US
                            Spelunky is coming to the Switch along with other great-looking indies
                            Nomad’s new leather MacBook Pro sleeves are luxurious but pricey.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="fade-in" id="Fortnite" style="color: #fff;margin: 0 auto;width: 96%;margin-top:2%">
    <!--Fortnite-->
    <div class="fade-in-left">
        <div style="margin-top: 2%;display: flex;justify-content:center">
            <div class="Post"
                style="display: inline-block;border: 1px;border-color: #fff;border-style: solid;max-width: 1000px;">
                <img src="Images/PostImages/Fortnite.jpg" style="max-width: 100%;">
                <div style="display: inline;">
                    <div>
                        <h1>Fortnite</h1>
                    </div>
                    <div style="margin: 1%;">
                        <span class="fade-in">Beginning December 15th, the Fortnite team is launching a new performance
                            mode on all
                            PCs
                            that meet
                            Fortnite’s minimum specifications. Available in Alpha, Performance Mode will be
                            selectable
                            through the in-game settings menu and offers significant performance gains by trading
                            out
                            visual quality to lower memory usage and lighten the load on CPU and GPU. For players
                            already on low scalability settings or less powerful hardware, this mode will allow the
                            game
                            to run better than ever before and maintain a smoother framerate.Performance Mode is
                            opt-in
                            for most users and will launch with support for Battle Royale and Creative mode only.
                            Users
                            running on older hardware will see a prompt pushing them to the mode to try it out as
                            the
                            recommended way to experience the game. Performance Mode can be enabled or disabled at
                            any
                            time through the in-game settings menu and restarting the game.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="fade-in" id="Snap" style="color: #fff;margin: 0 auto;width: 96%;margin-top:2%">
    <!--Snap-->
    <div class="fade-in-right">
        <div style="margin-top: 2%;display: flex;justify-content:center">
            <div class="Post"
                style="display: inline-block;border: 1px;border-color: #fff;border-style: solid;max-width: 1000px;">
                <img src="Images/PostImages/Snapchat.jpg" style="max-width: 100%;">
                <div style="display: inline;">
                    <div>
                        <h1>Snapchat Game</h1>
                    </div>
                    <div style="margin: 1%;">
                        <span class="fade-in">"Today, we announced Bitmoji Paint, a new game inside of Snapchat where
                            millions of
                            players can come together simultaneously to contribute to one, massive collage.
                            Built by Snap Games Studio, Bitmoji Paint introduces a whole new kind of game inside of
                            Snapchat. Snapchatters’ Bitmojis can travel the globe, team up with friends and let
                            their
                            imagination run free on one shared canvas. Simple scribbles, fun messages or even giant
                            landscapes are all possible in Bitmoji Paint.We are also introducing Snap Tokens to
                            customize the Bitmoji Paint experience for Android users. Snap Tokens are digital goods
                            that
                            can be purchased and stored in a virtual wallet tied to your Snapchat account. Within
                            Bitmoji Paint on Android, Snap Tokens can be used toward roller skates or hoverboards to
                            move around the game more quickly, or things like an ink painter or a paint roller to
                            make
                            larger creations." Say the Snapchat Bitmoji Paint Team.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="fade-in" id="EA" style="color: #fff;margin: 0 auto;width: 96%;margin-top:2%">
    <!--EA Sports-->
    <div class="fade-in-left">
        <div style="margin-top: 2%;display: flex;justify-content:center">
            <div class="Post"
                style="display: inline-block;border: 1px;border-color: #fff;border-style: solid;max-width: 1000px;">
                <img src="Images/PostImages/Codemasters.jpg" style="max-width: 100%;">
                <div style="display: inline;">
                    <div>
                        <h1>EA && CodeMasters</h1>
                    </div>
                    <div style="margin: 1%;">
                        <span class="fade-in">Electronic Arts has agreed to buy out UK developer Codemasters in a move
                            that could
                            see
                            the US publishing giant wrest control of the racing video game genre. The deal is
                            expected
                            to close in the first quarter of next year for £6.04 (~$7.98) a share, valuing
                            Codemasters
                            at around $1.2 billion.

                            Sky News first reported EA’s interest in Codemasters over the weekend, saying that the
                            British company had previously agreed a $970 million deal with Rockstar Games and 2K
                            Sports
                            owner Take-Two Interactive. EA confirmed the agreement early Monday morning.

                            Codemasters is one of the oldest British game developers, having been founded in the
                            ‘80s
                            and producing early hits like Dizzy for systems that were popular in the UK like the ZX
                            Spectrum and the Commodore 64. In recent decades it’s been best known for creating
                            racing
                            games like the Dirt, Grid, and Formula 1 series, and last year acquired the developer
                            behind
                            Project Cars.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="fade-in" id="FarCry6" style="color: #fff;margin: 0 auto;width: 96%;margin-top:2%">
    <!--Far Cry 6-->
    <div class="fade-in-right">
        <div style="margin-top: 2%;margin-bottom: 5%;display: flex;justify-content:center">
            <div class="Post"
                style="display: inline-block;border: 1px;border-bottom: 0;border-color: #fff;border-style: solid;max-width: 1000px;">
                <img src="Images/PostImages/FarCry6.jpg" style="max-width: 100%;">
                <div style="display: inline;">
                    <div>
                        <h1>Far Cry 6</h1>
                    </div>
                    <div style="margin: 1%;">
                        <span class="fade-in">Far Cry 6 is an upcoming first-person shooter game developed by Ubisoft
                            Toronto and
                            published by Ubisoft. It is the sixth main installment of the Far Cry series for Amazon
                            Luna, Microsoft Windows, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X/S, and
                            Stadia.

                            The game is set on Yara, a fictional Caribbean island ruled as a dictatorship by "El
                            Presidente" Antón Castillo (portrayed by Giancarlo Esposito), who is raising his son
                            Diego
                            (Anthony Gonzalez) to follow in his rule. The player takes the role of guerilla fighter
                            Dani
                            Rojas, attempting to topple Castillo and his regime.Production of Far Cry 6 had been
                            ongoing
                            for four years at the time of its July 2020 announcement, with Ubisoft Toronto the lead
                            studio for the game.[5] Narrative director Navid Khavari said that they started
                            researching
                            on revolutions of the past, they came across the idea of the modern guerrilla revolution
                            such as the Cuban Revolution, which gave them numerous ideas of how to drive the
                            player-character into fighting against a repressive government. </span>
                    </div>
                </div>
            </div>
        </div>
        <!--#region Iframe-->
        <div class="fade-in" style="display: flex;justify-content: center;margin-top: -5%">
            <video controls="true" style="border: 1px solid;max-width: 1000px;max-height: 500px;width: 100%;">
                <source src="Images/Media/Far Cry 6 - Official Reveal Trailer _ Ubisoft Forward.mp4" />
            </video>
        </div>
    </div>
    <!--#endregion-->

    <!--#region Slider-->
    <h1 style="padding-top: 60px;">Regional News</h1>
    <div id="carouselExampleCaptions" class="carousel slide fade-in" data-bs-ride="carousel"
        style="margin-right:auto !important;margin-left: auto !important;">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/SliderImg/gamingevent2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="slider-h5">First slide label</h5>
                    <p class="slider-p">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/SliderImg/gamingevent3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="slider-h5">First slide label</h5>
                    <p class="slider-p">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/SliderImg/gamingevent4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="slider-h5">First slide label</h5>
                    <p class="slider-p">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/SliderImg/gamingevent1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="slider-h5">First slide label</h5>
                    <p class="slider-p">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/SliderImg/gamingevent2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="slider-h5">First slide label</h5>
                    <p class="slider-p">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/SliderImg/GjirafaPrizePool.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="slider-h5">First slide label</h5>
                    <p class="slider-p">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <!--#endregion Slider-->

    <!--#region Preloader-->
    <div id="loader-wrapper" style="display: block;">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!--#endregion-->

<hr style="color:#fff;margin-top: 5%">
<?php include 'includeFiles/navbar.php'?>
<?php include 'includeFiles/footer.php'?>

</body>

<script>
    //#region Fade effect for Posts(in,left,right)//
    const fadein = document.querySelectorAll(".fade-in");
    const fadeinleft = document.querySelectorAll(".fade-in-left");
    const fadeinright = document.querySelectorAll(".fade-in-right");
    const postfade = document.querySelectorAll(".post-span");
    const appearOptions = {
        threshold: 0,
    };
    const appearOnScrollIn = new IntersectionObserver(function (
        entries,
        appearOnScroll
    ) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return;
            } else {
                entry.target.classList.add("appear");
                appearOnScroll.unobserve(entry.target);
            }
        });
    }, appearOptions);
    const appearOnScrollLeft = new IntersectionObserver(function (
        entries,
        appearOnScroll
    ) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return;
            } else {
                entry.target.classList.add("appear");
                appearOnScroll.unobserve(entry.target);
            }
        });
    }, appearOptions);
    const appearOnScrollRight = new IntersectionObserver(function (
        entries,
        appearOnScroll
    ) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return;
            } else {
                entry.target.classList.add("appear");
                appearOnScroll.unobserve(entry.target);
            }
        });
    }, appearOptions);
    const postfader = new IntersectionObserver(function (
        entries,
        appearOnScroll
    ) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return;
            } else {
                entry.target.classList.add("appear");
                appearOnScroll.unobserve(entry.target);
            }
        });
    }, appearOptions);
    fadein.forEach(fadein => {
        appearOnScrollIn.observe(fadein);
    });
    fadeinleft.forEach(fadeinleft => {
        appearOnScrollLeft.observe(fadeinleft);
    });
    fadeinright.forEach(fadeinright => {
        appearOnScrollRight.observe(fadeinright);
    });
    postfade.forEach(post => {
        postfader.observe(post);
    });
    //#endregion Fade effect//
</script>

</html>