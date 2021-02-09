//#region Id Selectors
let mainNav = document.getElementById("js-menu");
let navBarToggle = document.getElementById("js-navbar-toggle");
//#endregion

//#region Onload Scroll On Top of Page
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}
//#endregion

//#region Document Ready Events
$(document).ready(function () {
    $("#loader-wrapper").fadeOut(900);
    toastr.success('Enjoy the calm and cozy ambient');
});
//#endregion

//#region Redirect to Specific div with smooth scrolling
function CheckScroll(data) {
    var position = $(data).position();
    var top = position.top;
    var left = position.left;
    $("html").animate({
        scrollTop: top
    }, 800)
}
//#endregion

