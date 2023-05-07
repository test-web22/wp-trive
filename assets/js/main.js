"use strict"
document.addEventListener('click', documentClick);
function documentClick(e) {
	const targetItem = e.target;
	const burgerOpen = document.querySelector('body');
	if (targetItem.closest('.icon-menu')) {
		burgerOpen.classList.toggle('menu-open');
	}
	if (targetItem.closest('.menu, .header__logo, .header__button')) {
		console.log(targetItem);
		burgerOpen.classList.remove('menu-open');
	}
}
//========================================================================================================================================================
const anchors = document.querySelectorAll('a[href*="#"]')
for (let anchor of anchors) {
	anchor.addEventListener('click', function (e) {
		e.preventDefault()
		const blockID = anchor.getAttribute('href').substr(1)
		document.getElementById(blockID).scrollIntoView({
			behavior: 'smooth',
			block: 'center'
		})
	})
}
//=========================== E-mail validator==========================//


function validation() {
	let subform = document.getElementById("subform");
	let subemail = document.getElementById("email").value;
	let subtext = document.getElementById("subscribe_text");
	let pattern = /^[^ ]+@[^ ]+\.[a-z]{1,3}$/;

	if (subemail.match(pattern)) {
		subform.classList.add("valid");
		subform.classList.remove("invalid");
		subtext.innerHTML = "Your Email Address in Valid.";
		subtext.style.color = "#000000";
	} else {
		subform.classList.remove("valid");
		subform.classList.add("invalid");
		subtext.innerHTML = "Please Enter Valid Email Address";
		subtext.style.color = "#ff0000";
	}
	if (subemail == "") {
		subform.classList.remove("valid");
		subform.classList.remove("invalid");
		subtext.innerHTML = "";
		subtext.style.color = "#0fff00";
	}
}
