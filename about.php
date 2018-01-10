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
   <!--width is 12 columns therefore, small must add to 12 and large must also add to 12 per row, you can also use offset-NUMBER OF BLANK SPACE COLUMS to stand in for columns/invisible colums, still must add to 12 per row though -->
   
   <!--TOP BAR-->
   <section class="row"><h2 class="hidden">Top Bar</h2>
   <div id="topBar" class="small-12 hide-for-medium hide-for-large columns"></div>
   </section>
    
   <!--MENU SMALL-->
   <nav id="mainNav" class="data-sticky-container hide-for-medium hide-for-large"><h2 class="hidden">Navigation</h2>
        <a href="index.php"><img src="images/<?php echo $sitelogoSmall ?>" alt="logo" class="hide-for-medium-only hide-for-large" id="logoSmall"><!--</a>-->
         <div class="title-bar small-12" data-responsive-toggle="menuNav" data-hide-for="large">
		<button class="menu-icon float-right" type="button" data-toggle></button>
	    </div>
   <div id="menuNav" class="small-12 hide-for-medium"><h2 class="hidden">Menu</h2>
	  <ul>
		  <li id="homeNav"><a href="index.php">Home</a></li>
          <li id="aboutNav"><a href="#">About</a></li>
          <li id="portfolioNav"><a href="portfolio.html">Portfolio</a></li>
          <li id="contactNav"><a href="contact.html">Contact Me</a></li>
      </ul>
   </div>
    </nav>
    
    <section id="topBarLarge" class="hide-for-small-only"><h2 class="hidden">Top Bar</h2></section>
   
   <!--PROMO NAME SECTION-->
   <section class="row" id="promoSection"><h2 class="hidden">Promo Name Section</h2>
	   <div id="promoName" class="small-12 medium-12 large-12 columns"><h2></h2></div><!--Chantel Oatman-->
	   <div id="promoPosition" class="small-12 medium-12 large-12 columns"><p></p></div><!--Digital Services-->
   </section>
   
   <!--MENU MEDIUM/LARGE-->
   <a href="index.php"><div id="logo">
   	<img src="images/<?php echo $sitelogoMedium ?>" alt="logo" class="hide-for-small-only hide-for-large" id="logoMedium"><!--logo-medium.png-->
   	<img src="images/<?php echo $sitelogoLarge ?>" alt="logo" class="hide-for-small-only hide-for-medium-only" id="logoLarge"><!--logo-large.png-->
    </div></a>
   <div id="menuLarge" class="row hide-for-small-only">
   	<nav id="largeNavigation" class=" medium-12 large-12 columns">
   	   <ul>
   	      <li id="homeNavLarge"><a href="index.html">Home</a></li>
          <li id="aboutNavLarge"><a href="#">About</a></li>
          <li id="portfolioNavLarge"><a href="portfolio.html">Portfolio</a></li>
          <li id="contactNavLarge"><a href="contact.html">Contact Me</a></li>
       </ul>
    </nav>
   </div>
   
   <!--ABOUT SECTION-->
   <section class="row"><h2 class="hidden">About Section HomePage</h2>
   <!--About Content-->
   <section id="aboutContent" class="row sectionBackground"><h2 class="hidden">About Content</h2>
   <!--About Title-->
  <section id="aboutTitleHome" class="row"><h2 class="hidden">About Title</h2>
   	   <div id="aboutTitleBarHome" class="headStyle small-12 columns">About Me</div>
   </section>

	  <div id="aboutContainer">
	   <div id="aboutChantelInfo" class="small-12 medium-12 columns aboutInfo textBG">
	   <!--About Image-->
		 <img src="images/<?php echo $aboutHeadshotSmall ?>" id="aboutChantelImg" class="small-6 hide-for-medium-only hide-for-large columns"><!--aboutImg-small.jpg-->
		  <img src="images/<?php echo $aboutHeadshotMedium ?>" id="aboutChantelImgM" class="hide-for-small-only medium-offset-1 medium-4 hide-for-large columns"><!--aboutimg-medium.jpg-->
		   <img src="images/<?php echo $aboutHeadshotLarge ?>" id="aboutChantelImgL" class="hide-for-small-only hide-for-medium-only large-offset- large-4 columns"><!--aboutimg-large.jpg-->
		<!--About Paragraphs-->
		   <div id="aboutPara1" class="paraStyle"><?php echo "<p>{$aboutPara1}</p>"; ?></div><!--My name is Chantel Oatman, and I am a current second year student in the <a href="https://www.fanshawec.ca/programs-and-courses/program/idp3-interactive-media-design/next-year" id="programLink">Interactive Media Design</a> program at Fashawe College. -->
		   <div id="aboutPara2" class="aboutPara paraStyle"><?php echo "<p>{$aboutPara2}</p>"; ?></div><!--I am involved in many areas of the Arts, including: Digital, Performing, and Fine Arts. I am always looking for ways to expand my knowlege and share my creativity.-->
		   <div id="aboutPara3" class="aboutPara paraStyle hiddenPara"><?php echo "<p>{$aboutPara3}</p>"; ?></div><!--I have 8 years of experience in the promotional photography, and 2 years experience in designing with the Adobe Creative Suite, including: Photoshop and Illustrator. -->
		   <div id="aboutPara3L" class="aboutPara paraStyle hide-for-small-only"><?php echo "<p>{$aboutPara4}</p>"; ?></div><!--I have 8 years of experience in the promotional photography, and 2 years experience in designing with the Adobe Creative Suite, including: Photoshop and Illustrator.-->
		   <div id="aboutPara4" class="aboutPara paraStyle hiddenPara"><?php echo "<p>{$aboutPara5}</div>"; ?></p><!--Through my program at Fanshawe, I have gained many valuable communication, design, and software skills, as well as management experience in being Project Manager for some of our major team projects. -->
		     <p id="aboutPara4L" class="aboutPara paraStyle hide-for-small-only"></p><!--Through my program at Fanshawe, I have gained many valuable communication, design, and software skills, as well as management experience in being Project Manager for some of our major team projects.-->
		   <p id="aboutPara5" class="aboutPara paraStyle hiddenPara hide-for-medium hide-for-large"></p><!--To learn more about my skills and experience, please check out my resume below.-->
	   </div>
	   <!--Read More/Less Button-->
	   <div id="readMoreLess" class="row">
	      <div id="readMore" class="small-4 small-offset-4 buttons hide-for-medium hide-for-large columns">Read More</div>
	      <div id="readLess" class="small-4 small-offset-4 buttons hideReadButton hide-for-medium hide-for-large columns">Read Less</div>
	  </div>
    </div>
   </section>
 </section>
  
  <!--RESUME SECTION-->
  <section id="aboutResumeSection" class="row sectionBackground"><h2 class="hidden">About Content</h2>
  <!--Resume Title-->
  <section id="resumeTitleAbout" class="row"><h2 class="hidden">Resume Title</h2><div id="resumeTitle" class="headStyle small-12 columns">Resume</div>
  </section>
  <!--Resume Info-->
  <div id="resumeInfoSection" class="row">
	  <div id="resumeInfo" class="paraStyle hide-for-small-only medium-8 medium-offset-2 large-8 large-offset-2 columns"><?php echo "<p>{$resumeInfoPara}</p>"; ?></div><!--To learn more about my skills and experience in my field, please check out my resume by clicking the "See Resume" button below:-->
  </div>
  <!--See Resume Button-->
  <div id="resumeButton" class="hide-for-small-only medium-offset-5 medium-2 buttons">See Resume</div>
  <!--Resume-->
  <div id="resumeSection" class="row">
	  <div id="resume" class="small-12 hide-for-medium hide-for-large medium-10 medium-offset-1 columns">
	  	<img src="images/<?php echo $chantelResume ?>" id="chantelResumeFile" alt="chantel_oatman_resume">
	  </div>
  </div>
  </section>

   <section id="footer" class="row hide-for-medium hide-for-large"><h2 class="hidden">Footer</h2>
   <div id="footerContent" class="row">
   <!--Small-->	
	   <p id="nameBottom" class="columns small-6"></p><!--chanteloatman.com-->
	   <a href="https://www.linkedin.com/in/chantel-oatman-40b177156/"><div id="linkedinFooter" class="small-3 small-push-1 columns socialIcon"><img src="images/<?php echo $socialLinkedinSmall ?>" id="likedin" alt="linkedin"></div></a><!--social-linkedin.png-->
	   <a href="https://www.facebook.com/Chantel-Oatman-Digital-Services-139315516756341/"><div id="facebookFooter" class="small-3 columns socialIcon"><img src="images/<?php echo $socialFacebookSmall ?>" id="facebook" alt="facebook"></div></a><!--social-facebook.png-->
   </div>
   </section>
   
     <section id="footerLarge" class="row hide-for-small-only"><h2 class="hidden">Footer</h2>
	 <p class="hide-for-small-only medium-3 columns" id="nameBottomLarge"></p><!--chanteloatman.com-->
	    <div id="socialIconsLarge" class=" hide-for-small-only">
 <!--Medium-->		
		<div class="columns medium-2 medium-push-5 hide-for-large" id="linkedinDivM"><a href="https://www.linkedin.com/in/chantel-oatman-40b177156/"><img src="images/<?php echo $socialLinkedinMedium ?>" id="linkedinMedium" alt="linkedin"></a></div><!--social-linkedin-medium.png-->
		<div class="columns medium-2 hide-for-large" id="facebookDivM"><a href="https://www.facebook.com/Chantel-Oatman-Digital-Services-139315516756341/"><img src="images/<?php echo $socialFacebookMedium ?>" id="facebookMedium" alt="facebook"></a></div><!--social-facebook-medium.png-->
 <!--Large-->
		<div class="columns hide-for-medium-only large-push-6 large-2 columns" id="linkedinDivLarge"><a href="https://www.linkedin.com/in/chantel-oatman-40b177156/"><img src="images/<?php echo $socialLinkedinLarge ?>" id="linkedinLarge" alt="linkedin"></a></div><!--social-linkedin-large.png-->
		<div class="columns hide-for-medium-only large-2 columns" id="facebookDivLarge"><a href="https://www.facebook.com/Chantel-Oatman-Digital-Services-139315516756341/"><img src="images/<?php echo $socialFacebookLarge ?>" id="facebookLarge" alt="facebook"></a></div><!--social-facebook-large.png-->
	  </div>
  </section>
  	
  <section id="bottomBar" class="hide-for-small-only"><h2 class="hidden">Bottom Bar</h2></section>
   	

   <!--JavaScript Links - Foundation-->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
   <!-- <script src="js/app.js"></script>-->
    <!--JavaScript Links-->
    <script src="js/about.js"></script>

  </body>
</html>
