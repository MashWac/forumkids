let button2 = document.querySelector('#create_forum');
let forumPopup = document.querySelector('.sm-modal');

button2.addEventListener("click", function(){
	forumPopup.style.display = "flex";
});
document.querySelector('.done').addEventListener("click", function() {
	forumPopup.style.display = "none";
});



