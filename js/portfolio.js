// JavaScript Document
//$(document).foundation();


(function(){
	"use strict";
	console.log("SEAF Fired");

//............PHOTO GALLERY.............
//VARIABLES
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
	var photoRoseS = document.querySelector("#photoRoseS"); //the first image in gallery for small
	var photoRoseM = document.querySelector("#photoRoseM"); //the first image in gallery for medium
	var photoRoseL =document.querySelector("#photoRoseL"); //the first image in gallery for large
	//var roseSubHeading = document.querySelector("#roseSubHeading");
	//var roseDesc = document.querySelector("#roseDesc");
	//var logsDesc = document.querySelector('#logsDesc');
	//var descSmall = document.querySlectorAll('.notes');
	var sgsubheading = document.querySelectorAll('.sgsubheading'); //all the small gallery subheadings
	var mgsubheading = document.querySelectorAll('.mgsubheading'); //all the medium gallery subheadings
	var lgsubheading = document.querySelectorAll('.lgsubheading'); //all the large gallery subheadings
	var sgDesc = document.querySelectorAll('.sgDesc'); //all the small gallery descriptions
	var sgNote = document.querySelectorAll('.sgNote'); //all the small gallery notes
	var mgDesc = document.querySelectorAll('.mgDesc'); //all the medium gallery descriptions
	var mgNote = document.querySelectorAll('.mgNote'); //all the medium gallery notes
	var lgDesc = document.querySelectorAll('.lgDesc'); //all the large gallery descriptions
	var lgNote = document.querySelectorAll('.lgNote'); //all the large gallery notes
//FUNCTIONS
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
	    }
	
//LISTENERS
	rightArrowS.addEventListener("click", moveGalleryForwardS, false);
	leftArrowS.addEventListener("click", moveGalleryBackS, false);
	rightArrowM.addEventListener("click", moveGalleryForwardM, false);
	leftArrowM.addEventListener("click", moveGalleryBackM, false);
	rightArrowL.addEventListener("click", moveGalleryForwardL, false);
	leftArrowL.addEventListener("click", moveGalleryBackL, false);
	//document.querySelector("#rosePhotoAreaS").addEventListener("click", lightboxOn(0,0), false);
	
//............GRAPHICS MEDIUM/LARGE.............
//VARIABLES
	//...graphic icons medium...
	//var graphicButtonM = document.querySelector(".graphicButtonM");
	var sitelogoButtonM = document.querySelector("#sitelogoIconM");
	var artsButtonM = document.querySelector("#artsIconM");
	var graffitiButtonM = document.querySelector("#graffitiIconM");
	var vhsButtonM = document.querySelector("#vhsIconM");
	var duckButtonM = document.querySelector("#duckIconM");
	var tattooButtonM = document.querySelector("#tattooIconM");
	var catButtonM = document.querySelector("#catIconM");
	var gearsButtonM = document.querySelector("#gearsIconM");
	//...graphic icons large...
	var sitelogoButtonL = document.querySelector("#sitelogoIconL");
	var artsButtonL = document.querySelector("#artsIconL");
	var graffitiButtonL = document.querySelector("#graffitiIconL");
	var vhsButtonL = document.querySelector("#vhsIconL");
	var duckButtonL = document.querySelector("#duckIconL");
	var tattooButtonL = document.querySelector("#tattooIconL");
	var catButtonL = document.querySelector("#catIconL");
	var gearsButtonL = document.querySelector("#gearsIconL");
	   //...graphic images medium...
	   //var graphicSitelogoM =document.querySelector("#graphicImgSitelogoM");
	   //var photoNumberGraphics = 0;
	   //...graphic images large...
	   //var graphicSitelogoL =document.querySelector("#graphicImgSitelogoL");
	   //var photoNumberGraphicsL = 0;
	//...medium graphicshow content..
	var graphicContentM = document.querySelectorAll(".graphicImgM");
	var sitelogoShowM = document.querySelectorAll(".sitelogoShowM");
	var artsShowM = document.querySelectorAll(".artsShowM");
	var graffitiShowM = document.querySelectorAll(".graffitiShowM");
	var vhsShowM = document.querySelectorAll(".vhsShowM");
	var duckShowM = document.querySelectorAll(".duckShowM");
	var tattooShowM = document.querySelectorAll(".tattooShowM");
	var catShowM = document.querySelectorAll(".catShowM");
	var gearsShowM = document.querySelectorAll(".gearsShowM");
	//var i = 0;
	//...large graphicshow content..
	var graphicContentL = document.querySelectorAll(".graphicImgL");
	var sitelogoShowL = document.querySelectorAll(".sitelogoShowL");
	var artsShowL = document.querySelectorAll(".artsShowL");
	var graffitiShowL = document.querySelectorAll(".graffitiShowL");
	var vhsShowL = document.querySelectorAll(".vhsShowL");
	var duckShowL = document.querySelectorAll(".duckShowL");
	var tattooShowL = document.querySelectorAll(".tattooShowL");
	var catShowL = document.querySelectorAll(".catShowL");
	var gearsShowL = document.querySelectorAll(".gearsShowL");
	
	//general for medium large
	var i = 0;

//FUNCTIONS
	//medium graphics show graphic content
  function showGraphic(photoNumberGraphics){
		//console.log("show graphic working");
	        //all the graphic content is hidden
			for(i=0; i<graphicContentM.length; i++) //length so if want to add more later you can
				{graphicContentM[i].style.display = 'none';} //i is the number you want (think of this like page number in a book)
	       //show the sitelogo graphic M
	        if (photoNumberGraphics===0){
				for(i=0; i<sitelogoShowM.length; i++) 
				{sitelogoShowM[i].style.display = 'block';} 
			}
	       //show the arts graphic M
				else if (photoNumberGraphics===1){
				for(i=0; i<artsShowM.length; i++) 
				{artsShowM[i].style.display = 'block';} 
			}
	      //show the graffiti graphic M
	            else if (photoNumberGraphics===2){
				for(i=0; i<graffitiShowM.length; i++)
				{graffitiShowM[i].style.display = 'block';} 
			}
	     //show the vhs graphic M
	            else if (photoNumberGraphics===3){
				for(i=0; i<vhsShowM.length; i++) 
				{vhsShowM[i].style.display = 'block';}
			}
	     //show the duck graphic M
	            else if (photoNumberGraphics===4){
				for(i=0; i<duckShowM.length; i++) 
				{duckShowM[i].style.display = 'block';} 
			}
	    //show the tattoo graphic M
	            else if (photoNumberGraphics===5){
				for(i=0; i<tattooShowM.length; i++) 
				{tattooShowM[i].style.display = 'block';} 
			}
	    //show the cat graphic M
	            else if (photoNumberGraphics===6){
				for(i=0; i<catShowM.length; i++) 
				{catShowM[i].style.display = 'block';} 
			}
	    //show the gears graphic M
	            else if (photoNumberGraphics===7){
				for(i=0; i<gearsShowM.length; i++) 
				{gearsShowM[i].style.display = 'block';} 
			}
			} //function close bracket 
	  
	
	//large graphics show graphic content
  function showGraphicL(photoNumberGraphicsL){
		//console.log("show graphic working L");
	        //all the graphic content is hidden
			for(i=0; i<graphicContentL.length; i++) //length so if want to add more later you can
				{graphicContentL[i].style.display = 'none';} //i is the number you want (think of this like page number in a book)
	       //show the sitelogo graphic L
	        if (photoNumberGraphicsL===0){
				for(i=0; i<sitelogoShowL.length; i++) 
				{sitelogoShowL[i].style.display = 'block';} 
			}
	       //show the arts graphic L
				else if (photoNumberGraphicsL===1){
				for(i=0; i<artsShowL.length; i++) 
				{artsShowL[i].style.display = 'block';} 
			}
	      //show the graffiti graphic L
	            else if (photoNumberGraphicsL===2){
				for(i=0; i<graffitiShowL.length; i++)
				{graffitiShowL[i].style.display = 'block';} 
			}
	     //show the vhs graphic L
	            else if (photoNumberGraphicsL===3){
				for(i=0; i<vhsShowL.length; i++) 
				{vhsShowL[i].style.display = 'block';}
			}
	     //show the duck graphic L
	            else if (photoNumberGraphicsL===4){
				for(i=0; i<duckShowL.length; i++) 
				{duckShowL[i].style.display = 'block';} 
			}
	    //show the tattoo graphic L
	            else if (photoNumberGraphicsL===5){
				for(i=0; i<tattooShowL.length; i++) 
				{tattooShowL[i].style.display = 'block';} 
			}
	    //show the cat graphic L
	            else if (photoNumberGraphicsL===6){
				for(i=0; i<catShowL.length; i++) 
				{catShowL[i].style.display = 'block';} 
			}
	    //show the gears graphic L
	            else if (photoNumberGraphicsL===7){
				for(i=0; i<gearsShowL.length; i++) 
				{gearsShowL[i].style.display = 'block';} 
			}
			} //function close bracket 
	
//LISTEN FOR/SHOW
	//...medium listen for click of button to show specific showgraphic content (number defines which content)
	sitelogoButtonM.addEventListener('click', function(){showGraphic(0);}, false);
	artsButtonM.addEventListener('click', function(){showGraphic(1);}, false);
	graffitiButtonM.addEventListener('click', function(){showGraphic(2);}, false);
	vhsButtonM.addEventListener('click', function(){showGraphic(3);}, false);
	duckButtonM.addEventListener('click', function(){showGraphic(4);}, false);
	tattooButtonM.addEventListener('click', function(){showGraphic(5);}, false);
	catButtonM.addEventListener('click', function(){showGraphic(6);}, false);
	gearsButtonM.addEventListener('click', function(){showGraphic(7);}, false);
    //...large listen for click of icons to show specific showgraphic content
	sitelogoButtonL.addEventListener('click', function(){showGraphicL(0);}, false);
	artsButtonL.addEventListener('click', function(){showGraphicL(1);}, false);
	graffitiButtonL.addEventListener('click', function(){showGraphicL(2);}, false);
	vhsButtonL.addEventListener('click', function(){showGraphicL(3);}, false);
	duckButtonL.addEventListener('click', function(){showGraphicL(4);}, false);
	tattooButtonL.addEventListener('click', function(){showGraphicL(5);}, false);
	catButtonL.addEventListener('click', function(){showGraphicL(6);}, false);
	gearsButtonL.addEventListener('click', function(){showGraphicL(7);}, false);
	
})();