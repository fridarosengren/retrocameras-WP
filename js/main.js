/*
* Create sticky bottom header
*/

// Get bottom header element
const bottomNav = document.getElementById("bottom-header");
const burgerNav = document.querySelector('#burger-nav ul');

// Get top position of bottom header
const navPosition = bottomNav.offsetTop;

// Run function on scroll
window.onscroll = function() {
	if(window.pageYOffset >= navPosition) {
		bottomNav.classList.add("sticky-nav");
		burgerNav.style.top = "50px";
		burgerNav.style.opacity = "0.9";
	} else {
		bottomNav.classList.remove("sticky-nav");
		burgerNav.style.top = "137px";
		burgerNav.style.opacity = "1";
	}
}