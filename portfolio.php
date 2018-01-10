<?php
//includes all the admin script files that are listed in config file
   include_once("admin/scripts/config.php"); 
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chantel Oatman</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
   <!--width is 12 columns therefore, small must add to 12 and large must also add to 12 per row, you can also use offset-NUMBER OF BLANK SPACE COLUMNS to stand in for columns/invisible colums, still must add to 12 per row though -->
   
    <!--TOP BAR-->
   <section class="row"><h2 class="hidden">Top Bar</h2>
   <div id="topBar" class="small-12 hide-for-medium hide-for-large columns boxHelper"></div>
   </section>
    
   <!--MENU SMALL-->
	  <nav id="mainNav" class="data-sticky-container hide-for-medium hide-for-large"><h2 class="hidden">Navigation</h2><a href="index.php"><img src="images/<?php echo $sitelogoSmall ?>" alt="logo" class="hide-for-medium-only hide-for-large" id="logoSmall"></a>
         <div class="title-bar small-12" data-responsive-toggle="menuNav" data-hide-for="large">
		<button class="menu-icon float-right" type="button" data-toggle></button>
	    </div>
   <div id="menuNav" class="small-12 hide-for-medium"><h2 class="hidden">Menu</h2>
	  <ul>
		  <li id="homeNav"><a href="index.php">Home</a></li>
          <li id="aboutNav"><a href="about.php">About</a></li>
          <li id="portfolioNav"><a href="#">Portfolio</a></li>
          <li id="contactNav"><a href="contact.html">Contact Me</a></li>
      </ul>
   </div>
    </nav>
    
    <section id="topBarLarge" class="hide-for-small-only"><h2 class="hidden">Top Bar</h2></section>
   
   <!--PROMO NAME SECTION-->
   <section class="row" id="promoSection"><h2 class="hidden">Promo Name Section</h2>
	   <div id="promoName" class="small-12 medium-12 large-12 columns"><h2>Chantel Oatman</h2></div>
	   <div id="promoPosition" class="small-12 medium-12 large-12 columns"><p>Digital Services</p></div>
   </section>
   
   <!--MENU MEDIUM/LARGE-->
   <a href="index.php"><div id="logo">
   	<img src="images/<?php echo $sitelogoMedium ?>" alt="logo" class="hide-for-small-only hide-for-large" id="logoMedium">
   	<img src="images/<?php echo $sitelogoLarge ?>" alt="logo" class="hide-for-small-only hide-for-medium-only" id="logoLarge">
   </div></a>
   <div id="menuLarge" class="row hide-for-small-only">
   	<nav id="largeNavigation" class=" medium-12 large-12 columns">
   	   <ul>
   	      <li id="homeNavLarge"><a href="index.php">Home</a></li>
          <li id="aboutNavLarge"><a href="about.php">About</a></li>
          <li id="portfolioNavLarge"><a href="#">Portfolio</a></li>
          <li id="contactNavLarge"><a href="contact.html">Contact Me</a></li>
       </ul>
    </nav>
   </div>
    
   <!--PHOTOGRAPHY SECTION-->
   <section class="row" id="portfolioPhotography"><h2 class="hidden">Photography Section</h2>
   <!--Photography Content-->
   <section id="photoContent" class="row sectionBackground"><h2 class="hidden">Photography Content</h2>
    <!--Photography Title-->
   <section id="photographyTitle" class="row"><h2 class="headStyle">Original Photography</h2></section>
      <!--gallery-->
      <div id="galleryArea">
       <!--preview buttons-->
	   <div id="leftPhotoGallery" class="photoGalleryButton hide-for-medium hide-for-large"><img src="images/arrow-left-small.png" alt="left_button" id="leftArrowS"></div>
	   <div id="rightPhotoGallery" class="photoGalleryButton hide-for-medium hide-for-large columns small-offset-11"><img src="images/arrow-right-small.png" alt="right_button" id="rightArrowS"></div>
	   
	   <div id="leftPhotoGalleryM" class="photoGalleryButton hide-for-small-only"><img src="images/arrow-left-medium.png" alt="left_button" id="leftArrowM"></div>
	   <div id="rightPhotoGalleryM" class="photoGalleryButton hide-for-small-only columns small-offset-11"><img src="images/arrow-right-medium.png" alt="right_button" id="rightArrowM"></div>
	   <!--photos-->
	   <div id="rosePhotoAreaS" class="small-12 medium-10 medium-offset-1 large-8 large-offset-2 columns">
	   	<img src="images/<?php echo $galleryRoseSmallImg ?>" alt="love_of_the_shadows_photo" id="photoRoseS"><!--photo-rose-small.jpg-->
	   </div>
	   <div id="rosePhotoAreaM" class="hide-for-small-only medium-10 medium-pull-1 large-8 hide-for-large columns">
	   	<img src="images/<?php echo $galleryRoseMediumImg ?>" alt="love_of_the_shadows_photo" id="photoRoseM">
	   </div>
	   </div>
	   <div id="rosePhotoAreaL" class="hide-for-small-only hide-for-medium-only large-8 large-offset-2 columns">
	   	<img src="images/<?php echo $galleryRoseLargeImg ?>" alt="love_of_the_shadows_photo" id="photoRoseL">
	   </div>
	   <!--<div id="duckPhotoAreaS" class="small-12 medium-10 medium-offset-1 large-8 large-offset-2 columns">
	   	<img src="images/photo-duck-small.jpg" alt="smiling_duck_photo" id="photoDuckS">
	   </div>-->
	   <!-- <div id="photoPreviousButton" class="small-6 medium-5 medium-offset-1 large-4 large-offset-2 columns galleryButton boxHelper">Previous Photo</div>-->
	   <!-- <div id="photoNextButton" class="small-6 medium-5 large-4 columns galleryButton boxHelper">Next Photo</div> -->
    </div>
	    <div id="photoDescription" class="small-12 medium-10 medium-pull-1 large-8 large-pull-2 columns">
			<h3 id="roseSubHeading" class="subHeading gallerySubHead">Image Title Here</h3>
			<p id="roseDesc" class="paraStyle galleryDesc">This photo was taken in the dark, with a long exposure time, using a flashlight's beam to light up the scene.</p>
	    </div>
   </section>
   </section>
   
   <!--GRAPHICS SECTION-->
   <section class="row" id="portfolioGraphics"><h2 class="hidden">Graphics Section</h2>

   <!--Graphics Content-->
	   <section id="graphicContent" class="row sectionBackground"><h2 class="hidden">Graphics Content</h2>
	   <!--Graphics Title-->
	    <section id="graphicsTitle" class="row"><h2 class="headStyle">Graphic Work</h2></section>
   <section id="graphicInfo" class="row hide-for-medium"><h2 class="hidden">Graphics Info</h2>
   </section>
   <!--small graphics-->
    <div class="graphicIcons">
   <section class="row hide-for-medium" id="graphicButtonsRow1"><h2 class="hidden">Graphics Buttons First Row</h2>
   <div class="small-12 columns">
	   <div class="small-3 columns graphicButton"><img src="images/graphic-sitelogo-small.png" alt="current_site_logo"></div>
	   <div class="small-3 columns graphicButton"><img src="images/graphic-arts-small.png" alt="my_arts_site_logo"></div>
	   <div class="small-3 columns graphicButton"><img src="images/graphic-graffiti-small.png" alt="graffiti_graphic"></div>
	   <div class="small-3 columns graphicButton"><img src="images/graphic-vhs-small.png" alt="vhs_icon"></div>
   </div>
   </section>
   
   <section class="lightbox row hide-for-medium-only hide-for-large">
	   <i class="lightboxClose"></i> <!--close graphicLightbox-->
	   <!--the image-->
	   <img src="images/" alt="view_image" class="lightboxImg">
	   <!--the image description-->
	   <p class="lightboxDesc">placeholder</p>
   </section>
   
   <section class="row hide-for-medium" id="graphicButtonsRow2"><h2 class="hidden">Graphics Buttons Second Row</h2>
   <div class="small-12 columns">
	   <div class="small-3 columns graphicButton"><img src="images/graphic-duck-small.png" alt="duck_vector"></div>
	   <div class="small-3 columns graphicButton"><img src="images/graphic-tattoo-small.png" alt="tattoo_custom_graphic"></div>
	   <div class="small-3 columns graphicButton"><img src="images/graphic-curiouscat-small.png" alt="curious_cat_logo"></div>
	   <div class="small-3 columns graphicButton"><img src="images/graphic-gears-small.png" alt="tattoo_custom_graphic"></div>
	   </div>
   </section>
		   </div>
   <!--MEDIUM GRAPHICS-->
   <!--medium graphics Image and Description Area-->
   <section class="row hide-for-small-only" id="graphicWorkAreaM"><h2 class="hidden">Graphics Show Work Area</h2>
     <!--medium graphics Image-->
     
      <div id="graphicWorkAreaImgM" class="hide-for-large-only medium-4 columns">
       <img src="images/" alt="site_logo_large_view" class="graphicShowML">
      <!--the image <img src="images/graphicshow-sitelogo-medium.png" alt="site_logo_large_view">-->
       <?php echo '<img src="images/graphicshow-sitelogo-medium.png" alt="site_logo_large_view">' ?> 
	 </div>
    
     <!--medium graphics Description--> 
     <div id="graphicWorkAreaDescM" class="hide-for-large-only medium-8 columns">
		<h3 class="subHeading">Chantel Oatman - Logo</h3>
		<p class="paraStyle">This is the logo I created for the wevsite that you are currently on. I wanted to convey both who I am and what I do within this logo, and I did this by using my initials, and the visual of a speech buble, to signify communicating your company's brand digitally.</p>
		<p class="paraStyle">This logo was created using Illustrator.</p>
	 </div>
   </section>
   <!--medium/large graphics-->
   <section class="row hide-for-small-only"><h2 class="hidden">Graphics Buttons</h2>
	 <div class="hide-for-small-only medium-12 columns" id="graphicButtonRowL">
	   <div class="graphicButtonM medium-1 columns">
	   	<img src="images/graphic-sitelogo-medium.png" alt="site_logo">
	   </div>
	   <div class="graphicButtonM medium-1 columns"><img src="images/graphic-arts-medium.png" alt="my_arts_site_logo"></div>
	   <div class="graphicButtonM medium-1 columns"><img src="images/graphic-graffiti-medium.png" alt="graffiti_custom_graphic"></div>
	   <div class="graphicButtonM medium-1 columns"><img src="images/graphic-vhs-medium.png" alt="vhs_icon"></div>
	   <div class="graphicButtonM medium-1   columns"><img src="images/graphic-duck-medium.png" alt="duck_logo_vector"></div>
	   <div class="graphicButtonM medium-1  columns"><img src="images/graphic-tattoo-medium.png" alt="tatto_custom_graphic"></div>
	   <div class="graphicButtonM medium-1 columns"><img src="images/graphic-curiouscat-medium.png" alt="curious_cat_logo"></div>
	   <div class="graphicButtonM medium-1 columns" ><img src="images/graphic-gears-medium.png" alt="gears_custom_graphic"></div>
	   </div>
  </section>
   </section>
   </section>
   
   <!--BRAND SECTION-->
   <section class="row" id="portfolioBranding"><h2 class="hidden">Brand Section</h2>
    
   <!--Brand Content-->
   <section id="brandContent" class="row sectionBackground"><h2 class="hidden">Ads Brochure Content</h2>
   <!--Brand Title-->
	    <section id="brandTitle" class="row"><h2 class="headStyle">Branding Style Guides</h2></section>
   <!--Brand Mobile-->
   <section class="row"><h2 class="hidden">Graphic Buttons</h2>
	 <div class="columns small-12" id="brandChantel"> 
	    <div id="brandViewButtonChantel" class="small-2 small-push-1 hide-for-medium columns brandViewButton brandChantel">View</div>
	   <div id="brandDescChantel" class="small-9 hide-for-medium columns brandDesc">
	   	   <h3 class="subHeading">Chantel - StyleGuide</h3>
		   <p class="paraStyle">For my site you are currently on.</p>
	   </div>
     </div>
     <div class="columns small-12" id="brandFlash">
	   <div id="brandViewButtonFlash" class="small-2 small-push-1  hide-for-medium columns brandViewButton brandFlash">View</div>
	   <div id="brandDescFlash" class="small-9 hide-for-medium columns brandDesc">
		   <h3 class="subHeading">Flashback - StyleGuide</h3>
		   <p class="paraStyle">For a flashback, child-friendly multi-media site.</p>
	   </div>
	 </div>
     <div class="columns small-12" id="brandJeff">
	   <div id="brandViewButtonJeff" class="small-2 small-push-1 hide-for-medium columns brandViewButton brandJeff">View</div>
	   <div id="brandDescJeff" class="small-9 hide-for-medium columns brandDesc">
	   	  <h3 class="subHeading">Jeff Designs - StyleGuide</h3>
		  <p class="paraStyle">Created around a person's style & hobbies.</p>
	   </div>
	 </div>
	   <section class="row hide-for-small-only"><h2 class="hidden">View Branding Section</h2>
  <div id="viewbrandButtonsM" class="medium-10 medium-offset-1 large-offset-0 large-pull-1 columns">
	   <div id="brandDescChantelM" class="medium-3 large-4 columns brandDesc">
   	   <div class="brandViewButton brandChantel">View</div>
	   	  <h3 class="subHeading">Chantel - StyleGuide</h3>
		  <p class="paraStyle">For my site you are currently on.</p>
	   </div>
	   
	   <div id="brandDescFlashM" class="medium-3 large-4 columns brandDesc">
   	   <div class="brandViewButton brandFlash">View</div>
	   	  <h3 class="subHeading">Flashback - StyleGuide</h3>
		  <p class="paraStyle">For a flashback, child-friendly multi-media site.</p>
	   </div>
	   
	   <div id="brandDescJeffM" class="medium-3 medium-pull-3 large-4 large-pull-0 columns brandDesc">
   	      <div class="brandViewButton brandJeff">View</div>
	   	  <h3 class="subHeading">Jeff Designs - StyleGuide</h3>
		  <p class="paraStyle">Created around a person's style & hobbies.</p>
	  </div>
	   </div>
	   
  </section>
 <!-- <section class="row hide-for-small-only"><h2 class="hidden">View Branding Section</h2>
      <div id="brandDescChantelM" class="medium-3 medium-push-2 columns brandDesc">
	   	  <h3 class="subHeading">Jeff Designs - StyleGuide</h3>
		  <p class="paraStyle">Created around a person's style & hobbies.</p>
	   </div>
      <div id="brandDescFlashM" class="medium-3 medium-push-1 columns brandDesc">
	   	  <h3 class="subHeading">Jeff Designs - StyleGuide</h3>
		  <p class="paraStyle">Created around a person's style & hobbies.</p>
	   </div>
        <div id="brandDescJeffM" class="medium-3 medium-pull-2 columns brandDesc">
	   	  <h3 class="subHeading">Jeff Designs - StyleGuide</h3>
		  <p class="paraStyle">Created around a person's style & hobbies.</p>
	   </div>-->
  </section>
  
   </section>
   </section>
   
   <!--CONTACT SECTION HOME-->
   <section class="row hide-for-small-only"><h2 class="hidden">Contact Section HomePage</h2>
   <!--Contact Content-->
   <section id="contactContent" class="sectionBackground row"><h2 class="hidden">Contact Content</h2>
  	   <!--Contact Title-->
   	   <div id="contactTitleBarPortfolio" class="headStyle small-12 columns">Contact</div>
	   <div id=" medium-12 colums"> 
	   <div id="contactInfoPortfolio" class="hide-for-small-only medium-offset-2 medium-8 columns paraStyle">
		   <p>Like What You See?</p>
	   </div>
	   </div>
	   <div class=" medium-12 columns">
		   <a href="contact.html"><div id="contactButtonPortfolio" class="hide-for-small-only small-6 medium-2 medium-offset-5 columns buttons">Contact Me</div></a>
	   </div>
   </section>
   </section>
     <section id="footer" class="row hide-for-medium hide-for-large"><h2 class="hidden">Footer</h2>
   <div id="footerContent" class="row">
	   <p id="nameBottom" class="columns small-6">chanteloatman.com</p>
	   <a href="https://www.linkedin.com/in/chantel-oatman-40b177156/"><div id="facebookFooter" class="small-3 small-push-1 columns socialIcon"><img src="images/social-linkedin.png" id="likedin" alt="linkedin"></div></a>
	   <a href="https://www.facebook.com/Chantel-Oatman-Digital-Services-139315516756341/"><div id="linkedinFooter" class="small-3 columns socialIcon"><img src="images/social-facebook.png" id="facebook" alt="facebook"></div></a>
   </div>
   </section>
   
     <section id="footerLarge" class="row hide-for-small-only"><h2 class="hidden">Footer</h2>
	 <p class="hide-for-small-only medium-3 columns" id="nameBottomLarge">Chantel Oatman</p>
	    <div id="socialIconsLarge" class=" hide-for-small-only">
		<div class="columns medium-2 medium-push-5 large-push-6" id="linkedinDivLarge"><a href="https://www.linkedin.com/in/chantel-oatman-40b177156/"><img src="images/social-linkedin-large.png" id="linkedinLarge" alt="linkedin"></a></div>
		<div class="columns medium-2" id="facebookDivLarge"><a href="https://www.facebook.com/Chantel-Oatman-Digital-Services-139315516756341/"><img src="images/social-facebook-large.png" id="facebookLarge" alt="facebook"></a></div>
	  </div>
  </section>
  	
  <section id="bottomBar" class="hide-for-small-only"><h2 class="hidden">Bottom Bar</h2></section>
   	
   	<script>
	var gallerySmall = <?php echo $grpResult ?>;
	
	//var galleryMedium
    </script>
   
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/lightboxes.js"></script>
  
  </body>
</html>
