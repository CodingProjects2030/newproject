

window.onload=function(){
   
	
	const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener("click", handler);
    signInButton.addEventListener("click", handler2);




}


function handler() {
    container.classList.add("right-panel-active");
}

function handler2() {
   container.classList.remove("right-panel-active");
}