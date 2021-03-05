<link rel="stylesheet" href="/Web-Gaming-News/assets/css/footer.css" />
<!--footer Lights-->

<footer class="footer">
  <div class="footer__addr">
      <img src="/Web-Gaming-News/images/MainLogo.png">
  </div>
  
  <ul class="footer__nav">
    
    
    <li class="nav__item nav__item--extra">
      <h2 class="nav__title">About Us</h2>
      <ul class="nav__ul nav__ul--extra">
        <li>
        Our team is made of young,ambitious and hard-working Computer Science majors.What brought us together is a project that required us to create our first website from sratch.We learned together through the process basic html,css,js and php knowledge and did our best to succeed at it.
        </li>
      </ul>
    </li>
    <li class="nav__item">
        <h2 class="nav__title">Media</h2>
  
        <ul class="nav__ul">
          <li>
            <a href="/Web-Gaming-News/index.php">Home</a>
          </li>
          <li>
            <a href="/Web-Gaming-News/pages/about-us.php">About</a>
          </li>
          <li>
            <a href="/Web-Gaming-News/pages/games.php">Games</a>
          </li>
          <li>
              <a href="/Web-Gaming-News/pages/contact-us.php">Contact-Us</a>
          </li>
        </ul>
      </li>
    <li class="nav__item">
      <h2 class="nav__title">Legal</h2>
      
      <ul class="nav__ul">
        <li>
          <a href="#">Privacy Policy</a>
        </li>
        
        <li>
          <a href="#">Terms of Use</a>
        </li>
        
        <li>
          <a href="#">Sitemap</a>
        </li>
      </ul>
    </li>
  </ul>
  
  <div class="legal">
    <p>&copy;Gamehub 2021. All rights reserved.</p>
  </div>
</footer>
<article id="wrap">
	<article id="lightings">
    	<section class="section" id="one">
            <section class="section" id="two">
                <section class="section" id="three">
                    <section class="section" id="four">
                        <section class="section" id="five">
                            
                        </section>
                    </section>
                </section>
            </section>
		</section>
    </article>
</article> 
<style>
    
.footer {
  display: flex;
  flex-flow: row wrap;
  padding: 30px 30px 20px 30px;
  color: #2f2f2f;
  background-color: #0f0f0f;
  border-top: 1px solid #e5e5e5;
}

.footer > * {
  flex:  1 100%;
}

.footer__addr {
  margin-right: 1.25em;
  margin-bottom: 2em;
}

.footer__logo {
  font-family: 'Pacifico', cursive;
  font-weight: 400;
  text-transform: lowercase;
  font-size: 1.5rem;
}

.footer__addr h2 {
  margin-top: 1.3em;
  font-size: 15px;
  font-weight: 400;
}

.nav__title {
  font-weight: 400;
  font-size: 15px;
}

.footer address {
  font-style: normal;
  color: #999;
}

.footer__btn {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 36px;
  max-width: max-content;
  background-color: rgb(33, 33, 33, 0.07);
  border-radius: 100px;
  color: #2f2f2f;
  line-height: 0;
  margin: 0.6em 0;
  font-size: 1rem;
  padding: 0 1.3em;
}

.footer ul {
  list-style: none;
  padding-left: 0;
}

.footer li {
  line-height: 2em;
}

.footer a {
  text-decoration: none;
}

.footer__nav {
  display: flex;
	flex-flow: row wrap;
}

.footer__nav > * {
  flex: 1 50%;
  margin-right: 1.25em;
}

.nav__ul a {
  color: #999;
}

.nav__ul--extra {
  column-count: 1;
  column-gap: 1.25em;
  color: #999;
}

.legal {
  display: flex;
  flex-wrap: wrap;
  color: #999;
}
  
.legal__links {
  display: flex;
  align-items: center;
}

.heart {
  color: #2f2f2f;
}

@media screen and (min-width: 24.375em) {
  .legal .legal__links {
    margin-left: auto;
  }
}

@media screen and (min-width: 40.375em) {
  .footer__nav > * {
    flex: 1;
  }
  
  .nav__item--extra {
    flex-grow: 2;
  }
  
  .footer__addr {
    flex: 0 0px;
  }
  
  .footer__nav {
    flex: 2 0px;
  }
}
    </style>
	