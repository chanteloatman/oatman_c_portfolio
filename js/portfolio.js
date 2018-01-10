// JavaScript Document
//$(document).foundation();


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
	var leftArrowL = document.querySelector("#leftArrowL");
	var rightArrowL = document.querySelector("#rightArrowL");
	//Photos
	var gallerySmall = new Array("images/photo-rose-small.jpg", "images/photo-logs-small.jpg", "images/photo-redforest-small.jpg", "images/photo-duck-small.jpg", "images/photo-squirrel-small.jpg", "images/photo-makeup-small.jpg");
	var galleryMedium = new Array("images/photo-rose-medium.jpg", "images/photo-logs-medium.jpg", "images/photo-redforest-medium.jpg", "images/photo-duck-medium.jpg", "images/photo-squirrel-medium.jpg", "images/photo-makeup-medium.jpg");
	var galleryLarge = new Array("images/photo-rose-large.jpg", "images/photo-logs-large.jpg", "images/photo-redforest-large.jpg", "images/photo-duck-large.jpg", "images/photo-squirrel-large.jpg", "images/photo-makeup-large.jpg");
	var currentPhoto = new Image();
	var photoNumberGallery = 0;
	//current show
	var photoRoseS = document.querySelector("#photoRoseS");
	var photoRoseM = document.querySelector("#photoRoseM");
	var photoRoseL =document.querySelector("#photoRoseL");
	//var roseSubHeading = document.querySelector("#roseSubHeading");
	//var roseDesc = document.querySelector("#roseDesc");
	//var logsDesc = document.querySelector('#logsDesc');
	//var descSmall = document.querySlectorAll('.notes');
	var sgsubheading = document.querySelectorAll('.sgsubheading');
	var mgsubheading = document.querySelectorAll('.mgsubheading');
	var lgsubheading = document.querySelectorAll('.lgsubheading');
	var sgDesc = document.querySelectorAll('.sgDesc');
	var sgNote = document.querySelectorAll('.sgNote');
	var mgDesc = document.querySelectorAll('.mgDesc');
	var mgNote = document.querySelectorAll('.mgNote');
	var lgDesc = document.querySelectorAll('.lgDesc');
	var lgNote = document.querySelectorAll('.lgNote');
//Functions
	//small gallery
	function moveGalleryForwardS(){
		//console.log("forward working");
		if(photoNumberGallery<5){
			sgsubheading[photoNumberGallery].style.display = 'none'; //subheading none
			sgDesc[photoNumberGallery].style.display = 'none'; //desc none
			sgNote[photoNumberGallery].style.display = 'none'; //note none
			photoNumberGallery++;
			currentPhoto.src = gallerySmall[photoNumberGallery];
			sgsubheading[photoNumberGallery].style.display = 'block'; //subheading block
			sgDesc[photoNumberGallery].style.display = 'block'; //desc block
			sgNote[photoNumberGallery].style.display = 'block'; //note block
		    photoRoseS.src = currentPhoto.src;
		   // galleryDescHideShow(galleryDescHideShow);
		}
	}
	function moveGalleryBackS(){
		if(photoNumberGallery>=1){
			sgsubheading[photoNumberGallery].style.display = 'none'; //subheading none
			sgDesc[photoNumberGallery].style.display = 'none'; //desc none
			sgNote[photoNumberGallery].style.display = 'none'; //note none
			photoNumberGallery=photoNumberGallery-1;
			currentPhoto.src = gallerySmall[photoNumberGallery];
			sgsubheading[photoNumberGallery].style.display = 'block'; //subheading block
			sgDesc[photoNumberGallery].style.display = 'block';  //desc block
			sgNote[photoNumberGallery].style.display = 'block'; //note block
		    photoRoseS.src = currentPhoto.src;
		    //galleryDescHideShow(galleryDescHideShow);
	    }
	}
	//medium gallery
	function moveGalleryForwardM(){
		//console.log("forward working");
		if(photoNumberGallery<5){
			mgsubheading[photoNumberGallery].style.display = 'none';  //subheading none
			mgDesc[photoNumberGallery].style.display = 'none'; //desc none
			mgNote[photoNumberGallery].style.display = 'none'; //note none
			photoNumberGallery++;
			currentPhoto.src = galleryMedium[photoNumberGallery];}
		    photoRoseM.src = currentPhoto.src;
		    mgsubheading[photoNumberGallery].style.display = 'block'; //subheading block
			mgDesc[photoNumberGallery].style.display = 'block'; //desc block
			mgNote[photoNumberGallery].style.display = 'block'; //note block
		    //galleryDescHideShow(galleryDescHideShow);
		}
	function moveGalleryBackM(){
		//console.log("back working");
		if(photoNumberGallery>=1){
			mgsubheading[photoNumberGallery].style.display = 'none'; //subheading none
			mgDesc[photoNumberGallery].style.display = 'none'; //desc none
			mgNote[photoNumberGallery].style.display = 'none'; //note none
			photoNumberGallery=photoNumberGallery-1;
			currentPhoto.src = galleryMedium[photoNumberGallery];}
		    photoRoseM.src = currentPhoto.src;
		    mgsubheading[photoNumberGallery].style.display = 'block'; //subheading block
			mgDesc[photoNumberGallery].style.display = 'block'; //desc block
			mgNote[photoNumberGallery].style.display = 'block'; //note block
		    //galleryDescHideShow(galleryDescHideShow);
	    }
	//large gallery
	function moveGalleryForwardL(){
		//console.log("forward working");
		if(photoNumberGallery<5){
			lgsubheading[photoNumberGallery].style.display = 'none'; //subheading none
			lgDesc[photoNumberGallery].style.display = 'none'; //desc none
			lgNote[photoNumberGallery].style.display = 'none'; //note none
			photoNumberGallery++;
			currentPhoto.src = galleryLarge[photoNumberGallery];}
		    photoRoseL.src = currentPhoto.src;
		    lgsubheading[photoNumberGallery].style.display = 'block'; //subheading block
			lgDesc[photoNumberGallery].style.display = 'block'; //desc block
			lgNote[photoNumberGallery].style.display = 'block'; //note block
		    //galleryDescHideShow(galleryDescHideShow);
		}
	function moveGalleryBackL(){
		//console.log("back working");
		if(photoNumberGallery>=1){
			lgsubheading[photoNumberGallery].style.display = 'none';
			lgDesc[photoNumberGallery].style.display = 'none'; //desc none
			lgNote[photoNumberGallery].style.display = 'none';
			photoNumberGallery=photoNumberGallery-1;
			currentPhoto.src = galleryLarge[photoNumberGallery];}
		    photoRoseL.src = currentPhoto.src;
		    lgsubheading[photoNumberGallery].style.display = 'block';
			lgDesc[photoNumberGallery].style.display = 'block';
			lgNote[photoNumberGallery].style.display = 'block';
		    //galleryDescHideShow(galleryDescHideShow);
	    }
	
	
	/*function galleryDescHideShow(){
		if(photoNumberGallery===0){
			photoRoseS.querySelector('#photoRoseSmall');
			roseSubHeading.display = 'block';
			var desc = document.querySelectAll('.descHide');
			
			//roseDesc.display = 'block';
		}
		else if(photoNumberGallery===1){
			//propertyOfHTML('#roseDescS');
           // roseSubHeading.innerHTML="Photo Title 2";
			//roseDesc.innerHTML="Description 2";
		}
		else if(photoNumberGallery===2){
			roseSubHeading.innerHTML="Photo Title 3";
			//roseDesc.innerHTML="Description 3";
		}
		else if(photoNumberGallery===3){
			roseSubHeading.innerHTML="Photo Title 4";
			//roseDesc.innerHTML="Description 4";
		}
		else if(photoNumberGallery===4){
			roseSubHeading.innerHTML="Photo Title 5";
			//roseDesc.innerHTML="Description 5";
		}
		else if(photoNumberGallery===5){
			roseSubHeading.innerHTML="Photo Title 6";
			//roseDesc.innerHTML="Description 6";
		}
	}*/
	
	//Listeners
	rightArrowS.addEventListener("click", moveGalleryForwardS, false);
	leftArrowS.addEventListener("click", moveGalleryBackS, false);
	rightArrowM.addEventListener("click", moveGalleryForwardM, false);
	leftArrowM.addEventListener("click", moveGalleryBackM, false);
	rightArrowL.addEventListener("click", moveGalleryForwardL, false);
	leftArrowL.addEventListener("click", moveGalleryBackL, false);
	//document.querySelector("#rosePhotoAreaS").addEventListener("click", lightboxOn(0,0), false);
	
	
})();