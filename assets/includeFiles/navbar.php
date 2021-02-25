<?php 
?>
<link rel="stylesheet" href="/Web-Gaming-News/assets/css/navbar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <span><i class="fa fa-user" id="user-login" aria-hidden="true" style="position: fixed;top: 3.8%;right: 4.5%;color:#fff"></i></span> -->
	<div class="container">
	<div class="menu-icon">
		<span class="menu-icon__line menu-icon__line-left"></span>
		<span class="menu-icon__line"></span>
		<span class="menu-icon__line menu-icon__line-right"></span>
	</div>
		<button class="btn-acc"><span></span><i class="fa fa-user" style="color: #fff;"></i>
			<ul class="dropdown" style="width: 14em;">
				<li class="active" style="text-transform:initial;font-size:20px"><div>User Name:</div></li>
				<li class="active" style="text-transform:initial;font-size:20px;margin-top:-10%"><?php echo  $_SESSION['full_name']." - ".$_SESSION['role']; ?></li>
				<li><a href="">Change Password</a></li>
				<li><a href="/Web-Gaming-News/pages/login.php">Log In / Register</a></li>
				<li><a href="/Web-Gaming-News/index.php?logout='1'">Log Out</a></li>
			</ul>
		</button>

</div>

<div class="nav__content">
	<ul class="nav__list">
		<li class="nav__list-item"><a href="/Web-Gaming-News/index.php">Home</a></li>
		<li class="nav__list-item"><a href="/Web-Gaming-News/pages/about-us.php">About</a></li>
		<li class="nav__list-item"><a href="/Web-Gaming-News/pages/games.php">Games</a></li>
		<li class="nav__list-item"><a href="/Web-Gaming-News/pages/contact-us.php">Contact</a></li>
	</ul>
</div>
<div>
	<a href="/Web-Gaming-News/index.php">
		<img src="/Web-Gaming-News/images/MainLogo.png" width="200" height="100" id="mainLogo" />
	</a>
</div>
<style>
	/* Body */
	 .container {
		position: fixed !important;
		top: 3%;
		right: 0.3%;
		z-index: 11;
		margin-right: 1em;
	} 
	.menu-icon {
		height: 15px;
		width: 30px ;
		position: absolute ;
		z-index: 12 ;
		cursor: pointer;
	}

	.btn-acc {
		height: 2.5em !important;
		outline: 0;
		display: inline-flex;
		align-items: center;
		/* justify-content: space-between;
  background: #5380F7; */
		/* position: fixed;
		right: 1.5%;
		top: 4%; */
		border: 0;
		border-radius: 4px;
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
		box-sizing: border-box;
		padding: 16px 20px;
		color: #FFFFFF;
		font-size: 100%;
		font-weight: 600;
		letter-spacing: 1.2px;
		margin-left: -0.5em;
		margin-top: 1em;
		text-transform: uppercase;
		overflow: hidden;
		cursor: pointer;
		/* margin-top: 0.5em;
		margin-left: -0.5em; */
	}

	.btn-acc:hover {
		box-shadow: none;
	}

	.btn-acc:focus .dropdown,
	.btn-acc:active .dropdown {
		/* transform: translate(0, 23%); */
		opacity: 1;
		visibility: visible;
	}

	.btn-acc .material-icons {
		border-radius: 100%;
		animation: ripple 0.6s linear infinite;
	}

	.btn-acc .dropdown {
		position: absolute;
		top: 100%;
		left: -12em;
		background: #FFFFFF;
		width: 100%;
		border-radius: 4px;
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
		text-align: left;
		opacity: 0;
		visibility: hidden;
		transition: 0.3s ease;
		list-style: none;
	}

	.btn-acc .dropdown:before {
		content: "";
		position: absolute;
		top: -1%;
		left: 12.5em;
		width: 0;
		height: 0;
		box-shadow: 2px -2px 6px rgba(0, 0, 0, 0.05);
		border-top: 6px solid #FFFFFF;
		border-right: 6px solid #FFFFFF;
		border-bottom: 6px solid transparent;
		border-left: 6px solid transparent;
		transform: rotate(-45deg);
		mix-blend-mode: multiple;
	}

	.btn-acc .dropdown li {
		z-index: 1;
		position: relative;
		background: #FFFFFF;
		padding: 0 0;
		color: #666;
	}

	.btn-acc .dropdown li.active {
		color: #5380F7;
	}

	.btn-acc .dropdown li:first-child {
		border-radius: 4px 4px 0 0;
	}

	.btn-acc .dropdown li:last-child {
		border-radius: 0 0 4px 4px;
	}

	.btn-acc .dropdown li:last-child a {
		border-bottom: 0;
	}

	.btn-acc .dropdown a {
		display: block;
		border-bottom: 1px solid rgba(0, 0, 0, 0.05);
		color: inherit;
		font-size: 10px;
		text-decoration: none;
	}

	@keyframes ripple {
		0% {
			box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.1), 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1);
		}

		100% {
			box-shadow: 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1), 0 0 0 80px rgba(255, 255, 255, 0);
		}
	}
</style>
<script src="../assets/js/jquery.min.js"></script>
<script>
	$(document).ready(function () {
		$(".nav__content").css("cursor", "default");
		$(".nav__content").css("display", "none");
	});
	$(".menu-icon").click(function (e) {
		$(this).toggleClass('active');
		if ($(this).hasClass('active')) {
			$(".nav__content").hide().css("backdrop-filter", "blur(10px)").fadeIn();
			$(".nav__content").css("height", "100%");
			$(".nav__list").css("transform", "translate(0%, 500%)");
			$(".nav__content").css("cursor", "pointer");
			$(".nav__content").css("display", "block");
		}
		else {
			$(".nav__content").fadeOut();
		}
	});
	const app = (() => {
		let body;
		let menu;
		let menuItems;

		const init = () => {
			body = document.querySelector('body');
			menu = document.querySelector('.menu-icon');
			menuItems = document.querySelectorAll('.nav__list-item');

			applyListeners();
		};

		const applyListeners = () => {
			menu.addEventListener('click', () => toggleClass(body, 'nav-active'));
		};

		const toggleClass = (element, stringClass) => {
			if (element.classList.contains(stringClass))
				element.classList.remove(stringClass); else

				element.classList.add(stringClass);
		};

		init();
	})();
</script>