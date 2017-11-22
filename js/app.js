//Do not under any circumstances remove this line!
$(document).foundation()

(function(){
	"use strict";
	
	
	//VARIABLES
	//......................Video Controls........................
    var playButton = document.querySelector("#playButton");
	var pauseButton = document.querySelector("#pauseButton");
	var fullScreenButton = document.querySelector("#fullScreen");
    //.....................Gallery Buttons........................
	var previousButton = deocument.querySelector("#previousButton");
	var nextButton = deocument.querySelector("#nextButton");
	
	//FUNCTIONS
	//......................Video Controls........................
	function playVideo(){
		playButton.play();
	}
	function pauseVideo(){
		pauseButton.pause();
	}
	function fullScreen(){
		//insert code for full screen function here
	}
	//.....................Gallery Buttons........................
	function previousImage(){
	//insert code for previous function here
	}
	function nextImage(){
	//insert code for previous function here
	}
	
	//LISTENERS
	playButton.addEventListener("click", playVideo, false);
	pauseButton.addEventListner("click", pauseVideo, false);
	
	
})();