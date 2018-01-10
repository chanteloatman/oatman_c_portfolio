// JavaScript Document

(function(){
	"use strict";
	
//For Hiding and Showing Services Mobile	
	//Variables
	var photoServ = document.querySelector("#photoServicesDescS");
	var photoServButton = document.querySelector("#photoServiceButton");
	
	var graphicServ = document.querySelector("#graphicServicesDescS");
	var graphicServButton = document.querySelector("#graphicServiceButton");
	
	var brandServ = document.querySelector("#brandServicesDescS");
	var brandServButton = document.querySelector("#brandServiceButton");
	
	//Functions
	//Show/Hide Photo Services
	function hideShowPhotoServ(){
		console.log("hide show working");
		//display none
		if(photoServ.style.display === 'block'){
			photoServ.style.display = 'none';}
		//display block
		else {photoServ.style.display = 'block';}
	}
	//Show/Hide Graphic Services
	function hideShowGraphicServ(){
		console.log("hide show working");
		//display none
		if(graphicServ.style.display === 'block'){
			graphicServ.style.display = 'none';}
		//display block
		else {graphicServ.style.display = 'block';}
	}
	//Show/Hide Brand Services
	function hideShowBrandServ(){
		console.log("hide show working");
		//display none
		if(brandServ.style.display === 'block'){
			brandServ.style.display = 'none';}
		//display block
		else {brandServ.style.display = 'block';}
	}
	
	//Listeners
	photoServButton.addEventListener("click", hideShowPhotoServ, false);
	graphicServButton.addEventListener("click", hideShowGraphicServ, false);
	brandServButton.addEventListener("click", hideShowBrandServ, false);
	
	})();