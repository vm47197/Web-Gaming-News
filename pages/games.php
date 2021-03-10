<?php  
include('connection.php'); 
if(!isset($_SESSION['username']))
{
	header("location: login.php");
	
}
else{
	if($_SESSION['role'] == "User"){
	}
	else if($_SESSION['role'] == "Admin"){
		header("location: /Web-Gaming-News/pages/admin-dashboard.php");
	}
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>GameHub | Games</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/Web-Gaming-News/assets/css/main.css" />
    <link rel="stylesheet" href="/Web-Gaming-News/assets/css/style.css" />
    <link rel="stylesheet" href="/Web-Gaming-News/assets/css/loading.css" />
    <link rel="shortcut icon" href="/Web-Gaming-News/images/titlelogo.png" type="image/x-icon">
    <script src="/Web-Gaming-News/assets/js/jquery.min.js"></script>
    <script src="/Web-Gaming-News/assets/js/skel.min.js"></script>
    <script src="/Web-Gaming-News/assets/js/util.js"></script>
    <script src="/Web-Gaming-News/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
	<script>
        $(document).ready(function() {
            $(".modal").css("visibility", "hidden");
            $(".modal").css("opacity", "0");
            $("#loader-wrapper").fadeOut(800);
        });
		function ExitModal(){
            $(".modal").css("visibility", "hidden");
            $(".modal").css("opacity", "0");
        }
	</script>
</head>

<body>

    <!-- Header -->
    <header id="header" class="alt">
        <div class="inner">
            <h1>Check Out the new Games made from our Devs</h1>
        </div>
        <a onclick="CheckScroll('#wrapper')" style="cursor:pointer;">
            <div class="box">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>
    </header>
    <!-- Wrapper -->
    <div id="wrapper" style="width: 90em;">
        <section class="main items">
            <article class="item first-items">
                <header style="border:none">
                    <a href=""><img src="/Web-Gaming-News/images/Shooter.jpg" alt="" /></a>
                </header>
                <ul class="actions">
                    <p style="margin-bottom:4%"><b>Shooter</b>: Shoot to kill foreign objects that are trying to destroy
                        you</p>
                    <li><a class="button" href="games/shooter.php">Play</a></li>
                </ul>
            </article>
            <article class="item first-items">
                <header style="border:none">
                    <a href="#"><img src="/Web-Gaming-News/images/Snake.PNG" alt="" /></a>
                </header>
                <ul class="actions">
                    <p style="margin-bottom:4%"><b>Snake</b>: Based on the old Snake game.</p>
                    <li><a class="button" href="games/snake.php">Play</a></li>
                </ul>
            </article>
            <article class="item first-items">
                <header style="border:none">
                    <a href="#"><img src="/Web-Gaming-News/images/PingPong.png" alt="" /></a>
                </header>
                <ul class="actions">
                    <p style="margin-bottom:4%"><b>Ping Pong</b></p>
                    <li><a class="button" href="games/pingpong.php">Play</a></li>
                </ul>
            </article>
            <article class="item first-items">
                <header style="border:none">
                    <a href="#"><img src="/Web-Gaming-News/images/tictactoe.PNG" alt="" /></a>
                </header>
                <ul class="actions">
                    <p style="margin-bottom:4%"><b>Tic Tac Toe</b></p>
                    <li><a class="button" href="games/ticTacToe.php">Play</a></li>
                </ul>
            </article>
        </section>
    </div> 
            
	<a style="position:fixed;bottom:0;right:0;color:white;margin:10px" href="#demo-modal" onclick="$('.modal').css('visibility', 'visible');$('.modal').css('opacity', '1');"><i class="fa fa-question-circle fa-2x" aria-hidden="true"></i></a>
    <div id="demo-modal" class="modal">
            <div class="modal__content">
                <button type="button" class="close" onclick="ExitModal()" id="close_mdl_btn">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h1 style="color:#000 !important;margin:0">Report Bugs</h1>
                <form method="post" action="games.php" id="registerform2">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label style="margin:0">Game</label>
                        <select name="game">
                            <option value="Shooter">Shooter</option>
                            <option value="Snake">Snake</option>
                            <option value="Ping Pong">Ping Pong</option>
                            <option value="Tic Tac Toe">Tic Tac Toe</option>
                        </select>
                    </div>
                    <?php 
                        $conn = mysqli_connect('localhost', 'frida_root', ')qoyn++@N0g$', 'frida_gamehubdb');
                        $bug_types = $conn->query("SELECT * FROM bug_type"); 
                    ?>
                    <div class="form-group">
                        <label style="margin:0">Bug Type</label>
                        <select name="bug_type">
                            <?php foreach($bug_types as $item): ?>
                                <option value="<?php echo $item['type_id']; ?>"><?php echo $item['description'];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="margin:0">Message</label>
                        <textarea type="text" class="form-control" name="message" style="resize:none;margin-bottom:4%"></textarea>
                    </div>
                    <button type="submit" name="addbug" class="btn btn-success">Submit Report</button>
                </form>
            </div>
        </div>
    
    <!-- Scripts -->
    
    <script>
        $("#registerform2").validate({
            rules: {
                game: {
                    required: true,
                },
                bug_type: {
                    required: true,
                },
                message: {
                    required: true,
                    minlength: 5
                },
            }
        });
    function CheckScroll(data) {
        var position = $(data).position();
        var top = position.top;
        var left = position.left;
        $("html").animate({
            scrollTop: top
        }, 800)
    }
    </script>
    <!--#region Preloader-->
    <div id="loader-wrapper" style="display: block;">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!--#endregion-->
    <script src="/Web-Gaming-News/assets/js/snow.js"></script>
</body>

</html>
<style>
.error{
    color:red;
}
#close_mdl_btn{
    padding:0;
    background:none;
    box-shadow:none;
    float:right;
    outline:none;
}

#header {
    background-image: url(/Web-Gaming-News/images/games.png) !important;
}

#header.alt {
    height: 38em;
    min-height: 75vh;
}

#header.alt h1 {
    border-bottom: none;
}

.modal {
    visibility: hidden;
    opacity: 0;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(77, 77, 77, .7);
    transition: all .4s;
    z-index:99;
}

.modal:target {
    visibility: visible;
    opacity: 1;
}

.modal__content {
    border-radius: 4px;
    position: relative;
    width: 500px;
    max-width: 90%;
    background: #fff;
    padding: 1em 2em;
}

.modal__close {
    position: absolute;
    top: 10px;
    right: 10px;
    color: #585858;
    text-decoration: none;
}

</style>

</html>
<?php include '../assets/includeFiles/footer.php'?>
<?php include '../assets/includeFiles/navbar.php'?>