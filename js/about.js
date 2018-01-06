// JavaScript Document
$(document).foundation();
(function(){
	"use strict";
	//console.log("SEAF Fired");

//Variables
var readMore = document.querySelector("#readMore");
//var readLess = document.querySelector("#readLess");
var showHideParas = document.querySelectorAll(".hiddenPara");
	//var showHideParas = document.getElementsByClassName("hiddenPara");
var i;
var showHide = document.querySelector(".hiddenPara");
//Functions
//Hide Show the About Text
function hideShowAbout(){
	console.log("hide show working");
	if(showHide.style.display === 'block'){
	//if text is visiable, hide it
	for (i = 0;i < showHideParas.length; i++){
		showHideParas[i].style.display = "none";
	}
	readMore.innerHTML="Read More"; //This changes text back to Read More
	}
	//else, show the hidden paragraphs
	else {
	for (i = 0;i < showHideParas.length; i++){
		showHideParas[i].style.display = "block";
	}
	readMore.innerHTML="Read Less"; //Changes text to say Read Less
	}
	//showHideParas.style.display = "block";
    //showHideParas.classList.toggle(".hiddenPara");
	
}

//Listeners
readMore.addEventListener("click", hideShowAbout, false);
//readLess.addEventListener("click", hideShowAbout, false);
	
})();