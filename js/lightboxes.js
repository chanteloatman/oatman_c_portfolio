// JavaScript Document

//$(document).foundation();


(function(){
	"use strict";
	console.log("SEAF Fired");
	
//...GRAPHIC ICONS...
	//GRAPHIC ICONS S
	//var graphicButton = document.querySelector(".graphicButton");
	var sitelogoButton = document.querySelector("#sitelogoIcon");
	var artsButton = document.querySelector("#artsIcon");
	var graffitiButton = document.querySelector("#graffitiIcon");
	var vhsButton = document.querySelector("#vhsIcon");
	var duckButton = document.querySelector("#duckIcon");
	var tattooButton = document.querySelector("#tattooIcon");
	var catButton = document.querySelector("#catIcon");
	var gearsButton = document.querySelector("#gearsIcon");
	
	
//....GRAPHIC ARRAYS....
 
	//...GRAPHIC ARRAYS S...
	//IMAGES ARRAY S
	var images = new Array("graphicshow-sitelogo-small.png", "graphicshow-arts-small.png", "graphicshow-graffiti-small.jpg", "graphicshow-vhs-small.png", "graphicshow-duck-small.png", "graphicshow-tattoo-small.png", "graphicshow-curiouscat-small.png", "graphicshow-gears-small.png");
	//TITLES ARRAY S
	var title = new Array("#graphicTitleSitelogoS p", "#graphicTitleArtsS p", "#graphicTitleGraffitiS p", "#graphicTitleVhsS p", "#graphicTitleDuckS p", "#graphicTitleTattooS p", "#graphicTitleCatS p", "#graphicTitleGearsS p");
	//DESCRIPTIONS ARRAY S
	var desc = new Array("#graphicDescSitelogoS p", "#graphicDescArtsS p", "#graphicDescGraffitilogoS p", "#graphicDescVhsS p", "#graphicDescDuckS p", "#graphicDescTattooS p", "#graphicDescCatS p", "#graphicDescGearsS p");
	//NOTES ARRAY S
	var note = new Array("#graphicNoteSitelogoS p", "#graphicNoteArtsS p", "#graphicNoteGraffitilogoS p", "#graphicNoteVhsS p", "#graphicNoteDuckS p", "#graphicNoteTattooS p", "#graphicNoteCatS p", "#graphicNoteGearsS p");
  
	
	//Turn on the Lightbox
	function lightboxOn(currentIndex,){
		//debugger;
		//console.log("lightbox on");
		
		//takes away the ability to scroll on the page
		window.scrollTo(0, 0);
		document.body.style.overflow = "hidden";
		
		//the lightbox
		let lightbox = document.querySelector('.lightbox');
		lightbox.style.display = 'block'; //show the lightbox
		
		//populate lightbox content
		let lightboxImg = lightbox.querySelector("img");
		let lightboxClose = lightbox.querySelector(".lightboxClose"); //defining closing
        let lightboxTitle = lightbox.querySelector('#pTitleS'); //defining the titles
		let lightboxDesc = lightbox.querySelector('#pDescS'); //defining the descriptions
		let lightboxNote = lightbox.querySelector('#pNoteS'); //defining the notes
		//let sitelogoImg = lightbox.querySelector("#graphicImgSitelogoS");
		//let sitelogoImg = sitelogoButton.querySelector("#graphicImgSitelogoS");
		
		//the lines below take the array content from the html where it is connected to database on the getcontent page
		lightboxImg.src = "images/" + images[currentIndex]; //the images
        lightboxTitle.innerHTML = document.querySelector(title[currentIndex]).innerHTML; //the title
		lightboxDesc.innerHTML = document.querySelector(desc[currentIndex]).innerHTML; //the description
		lightboxNote.innerHTML = document.querySelector(note[currentIndex]).innerHTML; //the note
	    //lightboxDesc.innerHTML = currentObject.imageDescription[currentIndex];
		//lightboxImg.src="images/graphicshow-sitelogo-small.png";
		
		
		lightboxClose.addEventListener('click', closeLightbox, false);
	}
	
	//display images
	/*function{
		var unhide = document.querySelector("#g")
		
	}*/
	
	
	//Turn off the Lightbox, and make scroll work again
	function closeLightbox(){
		window.scrollTo(0, 700); //scroll back to the graphics section of page
		let lightbox = document.querySelector('.lightbox'); //defining the lightbox
		let lightboxImg = lightbox.querySelector("img"); //defining the image
		lightbox.style.display = ''; //displays nothing for the lightbox
		document.body.style.overflow = 'auto'; //allows the user to scroll again
	    
		//to unpopulate the content/reset:
		let lightboxImgClose = lightbox.querySelector("img"); //defining closing the image
		//close the lightboxImg
		lightboxImgClose.src = ''; //source will go away
		//close the lightboxDesc
		let lightboxDesc = lightbox.querySelector('p');
		lightboxDesc.innerHTML = ''; //the source will go away
	}
	
	//LISTENERS
	//small icons lightbox click to open the defined image
	sitelogoButton.addEventListener('click', function(){lightboxOn(0)}, false);
	artsButton.addEventListener('click', function(){lightboxOn(1)}, false);
	graffitiButton.addEventListener('click', function(){lightboxOn(2)}, false);
	vhsButton.addEventListener('click', function(){lightboxOn(3)}, false);
	duckButton.addEventListener('click', function(){lightboxOn(4)}, false);
	tattooButton.addEventListener('click', function(){lightboxOn(5)}, false);
	catButton.addEventListener('click', function(){lightboxOn(6)}, false);
	gearsButton.addEventListener('click', function(){lightboxOn(7)}, false);
	//old trials
	//sitelogoButton.addEventListener('click', lightboxOn(0), false);
	//artsButton.addEventListener('click', lightboxOn(1), false);
	//artsButton.addEventListener('click', function(){lightboxOn(1)}, false);
	//graffitiButton.addEventListener('click', function(){lightboxOn(2)}, false);
	
})();