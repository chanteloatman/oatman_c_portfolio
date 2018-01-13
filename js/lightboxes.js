// JavaScript Document

$(document).foundation();


(function(){
	"use strict";
	console.log("SEAF Fired");
	
	//Graphic Icons
	var graphicButton = document.querySelector(".graphicButton");
	var sitelogoButton = document.querySelector("#sitelogoIcon");
	var artsButton = document.querySelector("#artsIcon");
	var graffitiButton = document.querySelector("#graffitiIcon");
	var vhsButton = document.querySelector("#vhsIcon");
	var duckButton = document.querySelector("#duckIcon");
	var tattooButton = document.querySelector("#tattooIcon");
	var catButton = document.querySelector("#catIcon");
	var gearsButton = document.querySelector("#gearsIcon");
	//Graphic Images
	//var sitelogoImg = document.querySelector("#graphicImgSitelogoS");
	
	//show the graphic
	//function showImg(){
//		sitelogoImg.display = 'block';
//	}
	
	sitelogoButton.addEventListener("click", showImg, false);
	
	//Turn on the Lightbox
	function lightboxOn(currentIndex, currentObject){
		//debugger;
		
		//takes away the ability to scroll on the page
		window.scrollTo(0, 0);
		document.body.style.overflow = "hidden";
		
		//the lightbox
		let lightbox = document.querySelector('.lightbox');
		
		//populate lightbox content
		let lightboxImg = lightbox.querySelector("img");
		let lightboxClose = lightbox.querySelector(".lightboxClose");
		let lightboxDesc = lightbox.querySelector('p');
		//let sitelogoImg = lightbox.querySelector("#graphicImgSitelogoS");
		//let sitelogoImg = sitelogoButton.querySelector("#graphicImgSitelogoS");
		
		//the two lines below, change to pulling from the database on the getcontent page
		//lightboxImg.src = "images/" + currentObject.images[currentIndex];
		//lightboxDesc.innerHTML = currentObject.imageDescription[currentIndex];
		lightboxImg.src="images/graphicshow-sitelogo-small.png";
		
		lightboxClose.addEventListener('click', closeLightbox, false);
	}
	
	//display images
	/*function{
		var unhide = document.querySelector("#g")
		
	}*/
	
	
	//Turn off the Lightbox, and make scroll work again
	function closeLightbox(){
		let lightbox = document.querySelector('.lightbox');
		lightbox.style.display = ''; //displays nothing for the lightbox
		document.body.style.overflow = 'auto'; //allows the user to scroll again
		document.body.stlye.opacity = '0.7';
		
		//to unpopulate the content/reset:
		//close the lightboxImg
		let lightboxImg = lightbox.querySelector('img');
		lightbox.Img.src = ''; //source will go away
		//close the lightboxDesc
		let lightboxDesc = lightbox.querySelector('p');
		lightboxDesc.innerHTML = ''; //the source will go away
	}
	
	//don't think would need this line below
	//changeElements.call(document.querySelector('#imgMain').click();
	
	//small icons lightbox click to open
	sitelogoButton.addEventListener('click', lightboxOn, false);
	artsButton.addEventListener('click', lightboxOn, false);
	graffitiButton.addEventListener('click', lightboxOn, false);
	vhsButton.addEventListener('click', lightboxOn, false);
	duckButton.addEventListener('click', lightboxOn, false);
	tattooButton.addEventListener('click', lightboxOn, false);
	catButton.addEventListener('click', lightboxOn, false);
	gearsButton.addEventListener('click', lightboxOn, false);
	
})();