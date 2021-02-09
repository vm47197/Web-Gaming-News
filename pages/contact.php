<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../styles/footer.css">
  <link rel="stylesheet" href="../styles/navbar-style.css">
  <link rel="stylesheet" href="../styles/contact.css">
</head>
<body>
  <div class="container">
    <h2>Contact us</h2>
    <div class="row100">
      <div class="col">
        <div class="inputBox">
          <input type="text" name="" required="required">
          <span class="text">First Name</span>
          <span class="line"></span>
        </div>
      </div>
      <div class="col">
        <div class="inputBox">
          <input type="text" name="" required="required">
          <span class="text">Last Name</span>
          <span class="line"></span>
        </div>
      </div>
    </div>
    <div class="row100">
      <div class="col">
        <div class="inputBox">
          <input type="text" name="" required="required">
          <span class="text">Email</span>
          <span class="line"></span>
        </div>
      </div>
      <div class="col">
        <div class="inputBox">
          <input type="text" name="" required="required">
          <span class="text">Phone Number</span>
          <span class="line"></span>
        </div>
      </div>
    </div>
    <div class="row100">
      <div class="col">
        <div class="inputBox textarea">
          <textarea required="required"></textarea>
          <span class="text">Type your message here...</span>
          <span class="line"></span>
        </div>
      </div>
    </div>
    <div class="row100">
      <div class="col">
        <input type="submit" value="Send">
      </div>
    </div>
  </div>
  <div>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.5852581709564!2d21.170527215699472!3d42.648951624800645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ec0d5603ad7%3A0x1ba2ce0329d66240!2sRruga%20B%2C%20Prishtin%C3%AB!5e0!3m2!1sen!2s!4v1610619700469!5m2!1sen!2s"
      width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
      tabindex="0"></iframe>
  </div>
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
  <!--#endregion-->
</body>
<script src="../scripts/jquery-3.5.1.js"></script>
</script>
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

</html>