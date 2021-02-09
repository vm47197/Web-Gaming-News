<div style="position: absolute;left: 1%;top: 0">
    <a href="index.html" class="logo"><img src="/Web/Images/MainLogo.png" id="MainLogo" width="250" height="130"
            style="position: fixed;z-index: 101;"></a>
</div>
<div>
    <div class="mid-toogle"
        style="display: none;margin-top: 1%;margin-right: 1%;right: 3.5%;top:0;position: fixed;z-index: 51;">
        <label class="label">
            <div class="toggle">
                <input class="toggle-state" id="toggle-Snow" type="checkbox" name="check" value="true"/>
                <div class="indicator"></div>
            </div>
            <div class="label-text">Snow Toggle</div>
        </label>
    </div>
    <div class="button_container" id="toggle">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
    </div>
</div>

<div class="overlay" id="overlay">
    <nav class="overlay-menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="/Web/pages/about.php">About</a></li>
            <li><a href="/Web/pages/games.php">Try our Newest Games</a></li>
            <li><a href="/Web/pages/contact.php">Contact</a></li>
            <li><a href="/Web/pages/login.php" class="fa fa-user">Login</a></li>
        </ul>
    </nav>
</div>
<script>
    //#region Menu Backdrop blur effect
    $('#toggle').click(function () {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
        if ($(this).hasClass('active')) {
            $("#overlay").css("backdrop-filter", "blur(2px)");
            // $(".mid-toogle").css("display","inline-block");
            $(".mid-toogle").fadeIn(300);
        }
        else {
            $("#overlay").css("backdrop-filter", "blur(0px)");
            // $(".mid-toogle").css("display","none");
            $(".mid-toogle").fadeOut(300);
        }
    });
    //#endregion
</script>