// JavaScript Document
$(document).foundation();


(function(){
	"use strict";
	console.log("SEAF Fired");
	
//Variables
  //Gallery
	//Arrows
	var leftArrowS = document.querySelector("#leftArrowS");
	var rightArrowS = document.querySelector("#rightArrowS");
	var leftArrowM = document.querySelector("#leftArrowM");
	var rightArrowM = document.querySelector("#rightArrowM");
	//Photos
	var gallerySmall = new Array("images/photo-rose-small.jpg", "images/photo-logs-small.jpg", "images/photo-redforest-small.jpg", "images/photo-duck-small.jpg", "images/photo-squirrel-small.jpg", "images/photo-makeup-small.jpg");
	var galleryMedium = new Array("images/photo-rose-medium.jpg", "images/photo-logs-medium.jpg", "images/photo-redforest-medium.jpg", "images/photo-duck-medium.jpg", "images/photo-squirrel-medium.jpg", "images/photo-makeup-medium.jpg");
	//var galleryLarge = new Array("images/photo-rose-large.jpg", "images/photo-duck-large.jpg");
	var currentPhoto = new Image();
	var photoNumberGallery = 0;
	//current show
	var photoRoseS = document.querySelector("#photoRoseS");
	var photoRoseM = document.querySelector("#photoRoseM");
	//var photoRoseL =document.querySelector("#photoRoseL");
	var roseSubHeading = document.querySelector("#roseSubHeading");
	var roseDesc = document.querySelector("#roseDesc");
//Functions
	//small gallery
	function moveGalleryForwardS(){
		console.log("forward working");
		if(photoNumberGallery<5){
			photoNumberGallery++;
			currentPhoto.src = gallerySmall[photoNumberGallery];}
		    photoRoseS.src = currentPhoto.src;
		    galleryDescHideShow(galleryDescHideShow);
		}
	function moveGalleryBackS(){
		//console.log("back working");
		if(photoNumberGallery>=1){
			photoNumberGallery=photoNumberGallery-1;
			currentPhoto.scr = gallerySmall[photoNumberGallery];}
		    photoRoseS.src = currentPhoto.src;
		    galleryDescHideShow(galleryDescHideShow);
	    }
	//medium gallery
	function moveGalleryForwardM(){
		//console.log("forward working");
		if(photoNumberGallery<5){
			photoNumberGallery++;
			currentPhoto.src = galleryMedium[photoNumberGallery];}
		    photoRoseM.src = currentPhoto.src;
		    //galleryDescHideShow(galleryDescHideShow);
		}
	function moveGalleryBackM(){
		//console.log("back working");
		if(photoNumberGallery>=1){
			photoNumberGallery=photoNumberGallery-1;
			currentPhoto.scr = galleryMedium[photoNumberGallery];}
		    photoRoseM.src = currentPhoto.src;
		    //galleryDescHideShow(galleryDescHideShow);
	    }
	function galleryDescHideShow(){
		if(photoNumberGallery==0){
			roseSubHeading.innerHTML="Photo Title 1";
			roseDesc.innerHTML="Description 1";
		}
		else if(photoNumberGallery==1){
			roseSubHeading.innerHTML="Photo Title 2";
			roseDesc.innerHTML="Description 2";
		}
		else if(photoNumberGallery==2){
			roseSubHeading.innerHTML="Photo Title 3";
			roseDesc.innerHTML="Description 3";
		}
		else if(photoNumberGallery==3){
			roseSubHeading.innerHTML="Photo Title 4";
			roseDesc.innerHTML="Description 4";
		}
		else if(photoNumberGallery==4){
			roseSubHeading.innerHTML="Photo Title 5";
			roseDesc.innerHTML="Description 5";
		}
		else if(photoNumberGallery==5){
			roseSubHeading.innerHTML="Photo Title 6";
			roseDesc.innerHTML="Description 6";
		}
	}
	
	//Listeners
	rightArrowS.addEventListener("click", moveGalleryForwardS, false);
	leftArrowS.addEventListener("click", moveGalleryBackS, false);
	rightArrowM.addEventListener("click", moveGalleryForwardM, false);
	leftArrowM.addEventListener("click", moveGalleryBackM, false);
	
	
})();