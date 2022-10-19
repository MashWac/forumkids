let button1 = document.querySelector('#add_rating');
let ratingPopup = document.querySelector('.bg-modal');
let star = document.querySelectorAll('input');
let showValue = document.querySelector('#rating-value');

button1.addEventListener("click", function(){
	ratingPopup.style.display = "flex";

	for (let i = 0; i < star.length; i++) {
		star[i].addEventListener('click', function() {
			i = this.value;
	
			showValue.innerHTML = i + " out of 5";
		});
	}
});
document.querySelector('.close').addEventListener("click", function() {
	ratingPopup.style.display = "none";
});



