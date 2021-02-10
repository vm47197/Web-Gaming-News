<div class="menu-icon">
	<span class="menu-icon__line menu-icon__line-left"></span>
	<span class="menu-icon__line"></span>
	<span class="menu-icon__line menu-icon__line-right"></span>
</div>

<div class="nav">
	<div class="nav__content">
		<ul class="nav__list">
			<li class="nav__list-item">Home</li>
			<li class="nav__list-item">About</li>
			<li class="nav__list-item">Projects</li>
			<li class="nav__list-item">Contact</li>
		</ul>
	</div>
</div>
<script>
	$(document).ready(function () {
		$(".nav__content").css("cursor","default");
		$(".nav__content").css("position","absolute");
	});
	$(".menu-icon").click(function (e) { 
		$(this).toggleClass('active');
		if ($(this).hasClass('active')) {
			$(".nav__content").hide().css("backdrop-filter","blur(10px)").fadeIn();
			$(".nav__content").css("height","100%");
			$(".nav__list").css("transform","translate(0%, 500%)");
			$(".nav__content").css("cursor","pointer");
			$(".nav__content").css("position","fixed");
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
    element.classList.remove(stringClass);else

    element.classList.add(stringClass);
};

init();
})();
</script>