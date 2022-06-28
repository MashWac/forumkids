let button = document.querySelector('#add_rating');
let showPopup = document.querySelector('.bg-modal');
let star = document.querySelectorAll('input');
let showValue = document.querySelector('#rating-value');

button.addEventListener("click", function(){
	showPopup.style.display = "flex";

	for (let i = 0; i < star.length; i++) {
		star[i].addEventListener('click', function() {
			i = this.value;
	
			showValue.innerHTML = i + " out of 5";
		});
	}
});

document.querySelector('.close').addEventListener("click", function() {
	showPopup.style.display = "none";
});

