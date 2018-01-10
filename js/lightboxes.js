// JavaScript Document

$(document).foundation();


(function(){
	"use strict";
	console.log("SEAF Fired");
	
	
	//Turn on the Lightbox
	function lightboxOn(currentIndex, currentObject){
		//debugger;
		
		//takes away the ability to scroll on the page
		window.ScrollTo(0, 0);
		docment.body.style.overflow - "hidden";
		
		//the lightbox
		let lightbox = document.querySelector('.lightbox');
		
		//populate lightbox content
		let lightboxImg = lightbox.querySelector("img");
		let lightboxClose = lightbox.querySelector(".lightboxClose");
		let lightboxDesc = lightbox.querySelector('p');
		
		//the two lines below, change to pulling from the database on the getcontent page
		lightboxImg.src = "images/" + currentObject.images[currentIndex];
		lightboxDesc.innerHTML = currentObject.imageDescription[currentIndex];
		
		lightboxClose.addEventListener('click', closeLightbox, false);
	}
	
	//Turn off the Lightbox, and make scroll work again
	function closeLightbox(){
		let lightbox = document.querySelector('.lightbox');
		lightbox.style.display = ''; //displays nothing for the lightbox
		document.body.style.overflow = 'auto'; //allows the user to scroll again
		
		//to unpopulate the content/reset:
		//close the lightboxImg
		let lightboxImg = lightbox.querySelector('img');
		lightbox.Img.src = ''; //source will go away
		//close the lightboxDesc
		let lightboxDesc - lightbox.querySelector('p');
		lightboxDesc.innerHTML = ''; //the source will go away
	}
	
	//don't think would need this line below
	//changeElements.call(document.querySelector('#imgMain').click();
	
	
})();