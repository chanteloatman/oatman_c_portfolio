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
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <title>Chantel Oatman</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
   
   <!--error reporting-->
   <?php 
   ini_set('display_errors', 1);
   error_reporting(E_ALL);

$text = "error report";
     ?>
    <h1 class="hidden">Chantel Oatman - Index</h1>
    
    <!--TOP BAR-->
   <section class="row"><h2 class="hidden">Top Bar</h2>
   <div id="topBar" class="small-12 hide-for-medium hide-for-large columns"></div>
   </section>
    
   
    <!--MENU SMALL-->
   <nav id="mainNav" class="data-sticky-container hide-for-medium hide-for-large"><h2 class="hidden">Navigation</h2>
        <img src="images/<?php echo $sitelogoSmall ?>" alt="logo" class="hide-for-medium-only hide-for-large" id="logoSmall">
         <div class="title-bar small-12" data-responsive-toggle="menuNav" data-hide-for="large">
		<button class="menu-icon float-right" type="button" data-toggle></button>
	    </div>
   <div id="menuNav" class="small-12 hide-for-medium"><h2 class="hidden">Menu</h2>
	  <ul>
		  <li id="homeNav"><a href="#">Home</a></li>
          <li id="aboutNav"><a href="about.php">About</a></li>
          <li id="portfolioNav"><a href="portfolio.php">Portfolio</a></li>
          <li id="contactNav"><a href="contact.php">Contact Me</a></li>
      </ul>
   </div>
    </nav>
    
    <section id="topBarLarge" class="hide-for-small-only"><h2 class="hidden">Top Bar</h2></section>
   
   <!--PROMO NAME SECTION-->
   <section class="row" id="promoSection"><h2 class="hidden">Promo Name Section</h2>
	   <div id="promoName" class="small-12 medium-12 large-12 columns"><h2>Chantel Oatman</h2></div>
	   <div id="promoPosition" class="small-12 medium-12 large-12 columns"><p>Digital Visuals & Design</p></div>
   </section>
   
   <!--MENU MEDIUM/LARGE-->
   <div id="logo">
   	<img src="images/<?php echo $sitelogoMedium ?>" alt="logo" class="hide-for-small-only hide-for-large" id="logoMedium"><!--logo-medium.png-->
   	<img src="images/<?php echo $sitelogoLarge ?>" alt="logo" class="hide-for-small-only hide-for-medium-only" id="logoLarge"><!--logo-large.png-->
   </div>
   <div id="menuLarge" class="row hide-for-small-only">
	<nav id="largeNavigation" class=" medium-12 large-12 columns"><h2 class="hidden">Navigation</h2>
   	   <ul>
   	      <li id="homeNavLarge"><a href="#">Home</a></li>
          <li id="aboutNavLarge"><a href="about.php">About</a></li>
          <li id="portfolioNavLarge"><a href="portfolio.php">Portfolio</a></li>
          <li id="contactNavLarge"><a href="contact.php">Contact Me</a></li>
       </ul>
    </nav>
   </div>
   
  
 <!--SERVICES-->
<section class="row hide-for-medium-only hide-for-large"><h2 class="hidden">Services</h2>
    <!--Services Content-->
	<section id="servicesContent" class="row sectionBackground hide-for-large hide-for-medium-only"><h2 class="hidden">Services Content</h2>
    <!--Services Info-->
		<section id="servicesTitle" class="row"><h2 class="headStyle">My Services</h2></section>
	<div id="servicesInfo" class="small-12 columns"><div class="paraStyle"><?php echo "<p>{$aboutServicesInfo}</p>"; ?></p></div><!--tbl_paragraphs, paragraph_id=1, paragraph_text="Within my work, I offer a vast range of services within each of my specialty areas, check out what I have to offer below:"--> </div>
	   <!--Photo Service Button-->
	   <div id="photoServiceButton" class="small-offset-2 small-8 hide-for-medium large-pull-1 large-10 columns servicesButton">Photography Services</div>
	    <div id="photoServicesDescS" class="columns small-8 small-offset-3 .servicesDescS hidden">
		   	<div class="bulletList">
		   	<?php echo "<p>{$servicePhotoInfoSmall}</p>"; ?>
		   	<!--tbl_paragraph, paragraph_id=2
		   	<ul> 
			   <li>Creative Photography</li>
			   <li>Headshots</li>
			   <li>Photoshoots</li>
			   <li>Promotional Photography</li>
		    </ul>-->
			</div>
		   </div>
	   <div id="graphicServiceButton" class="small-offset-2 small-8 hide-for-medium large-pull-1 large-10 columns servicesButton">Graphic & Design Services</div>
	   <div id="graphicServicesDescS" class="columns small-8 small-offset-3 servicesDescS hidden">
		   	<div class="bulletList">
		   	<?php echo "<p>{$serviceGraphicsInfoSmall}</p>"; ?>
		   	<!--tbl_paragraph, paragraph_id=3
		   	<ul>
			   <li>Custom Graphics</li>
			   <li>Icons</li>
			   <li>Logos</li>
			   <li>Vectorized Images</li>
		    </ul>-->
		   </div>
        </div>
	   <div id="brandServiceButton" class="small-offset-2 small-8 hide-for-medium large-pull-1 large-10 columns servicesButton">Branding Services</div>
	   <div id="brandServicesDescS" class="columns small-8 small-offset-3 servicesDescS hidden">
		  <div class="bulletList">
	   	<?php echo "<p>{$serviceBrandInfoSmall}</p>"; ?>
		   	<!--tbl_paragraph, paragraph_id=4
		   	  <ul class="bulletList">
			  <li>Branding Style Guides</li>
			   <li>Business Cards</li>
			   <li>Custom Branding Requests</li>
			   <li>Promotional Posters</li>
		    </ul>-->
		   </div>
		</div>
    <div id="aboutButton" class="row">
		<a href="about.php"><div id="moreAboutButton" class="small-6 small-offset-3 medium-6 large-pull-2 columns large-8 buttons">About Chantel</div></a>
	</div>
  
   </section>
</section>
   
   <!--PORTFOLIO SECTION HOME-->
   <section class="row sectionMobile hide-for-medium-only hide-for-large"><h2 class="hidden">Portfolio Section HomePage</h2>
    
   <!--Portfolio Content-->
   <section id="portfolioContentHome" class="row sectionBackground hide-for-medium hide-for-large"><h2 class="hidden">Portfolio Content</h2>
	   
	   <section id="PortfolioTitle" class="row"><h2 class="headStyle">My Portfolio</h2></section><!--My Portfolio, tbl_paragraph, paragraph_id=22-->
	  
	   <div id="viewGraphicsButton" class="small-offset-2 small-8 hide-for-medium-only hide-for-large columns portfolioHomeButtons">
		   <a href="portfolio.php#portfolioPhotography"><img src="images/<?php echo $photoViewPhotoSmall ?>" id="viewPhotoMobile" alt="view_graphics"></a><!--viewphotography-mobile.png-->
	   </div>
	   <div id="viewPhotosButton" class="small-offset-2 small-8 hide-for-medium-only hide-for-large columns portfolioHomeButtons">
		   <a href="portfolio.php#portfolioGraphics"><img src="images/<?php echo $photoViewGraphicsSmall ?>" id="viewGraphicsMobile" alt="view_graphics"></a><!--viewgraphics-mobile.png-->
	   </div>
	    <div id="viewBrochuresButton" class="small-offset-2 small-8 hide-for-medium-only hide-for-large columns portfolioHomeButtons">
			<a href="portfolio.php#portfolioBranding"><img src="images/<?php echo $photoViewBrandSmall ?>" id="viewBrandMobile" alt="view_branding"></a><!--viewbrand-mobile.png-->
	    </div>
	   <div id="toPortfolio" class="row">
		   <a href="portfolio.php"><div id="viewPortfolioButton" class="small-offset-3 small-6 medium-offset-5 medium-2 columns buttons">View Portfolio</div></a>
	   </div>
   </section>
   </section>
   
   
    <!--SERVICES SECTION HOME - LARGE-->
   <section class="row hide-for-small-only"><h2 class="hidden">Services Section HomePage</h2>
   <!--SERVICES-->
   <section id="servicesContentHome" class="row sectionBackground"><h2 class="hidden">Services Content</h2>
   <section id="servicesTitleLarge" class="row"><h2 class="headStyle">My Services</h2></section><!--<h2 class="headStyle">-->
	   <div id="servicesInfoHome" class="small-12 medium-offset-2 medium-8 columns">
		   <div class="paraStyle"><?php echo "<p>{$aboutServicesInfo}</p>"; ?></div> <!--tbl_paragraph, paragraph_id=1, Within my portfolio work, I offer a vast range of services within each of my speciality areas, check out what I have to offer below:-->
	   </div>
	   <!--SERVICES MEDIUM-->
	   <section id="servicesMedium" class="hide-for-small-only hide-for-large"><h2 class="hidden">Services</h2>
		  <!--Photography Services-->
		  <div id="photoServicesMedium" class="row">
		   <div id="photoServicesImgM" class="medium-4 medium-offset-2 columns">
			   <a href="portfolio.php#portfolioPhotography"><img src="images/<?php echo $photoViewPhotoMedium ?>" alt="view_photography"></a><!--viewphotography-medium.png-->
		   </div>
		   <div id="photoServicesDescM" class="columns medium-6 medium-pull-1 ">
		   	<div class="subHeading listTitleM"><?php echo "<p>{$servicePhotoSubtitleML}</p>"; ?></div><!--My Photography Services Include:-->
		   		<div class="bulletList">
		   	    <?php echo "<p>{$servicePhotoInfoML}</p>"; ?>
		   	<!--tbl_paragraph, paragraph_id=2
		   	<ul> 
			   <li>Creative Photography</li>
			   <li>Headshots</li>
			   <li>Photoshoots</li>
			   <li>Promotional Photography</li>
		    </ul>-->
			</div>
		  </div>
		 </div>
		  <!--Graphic Services-->
		  <div id="graphicServicesMedium" class="row">
		   <div id="graphicServicesImgM" class="medium-4 medium-offset-2 columns">
			   <a href="portfolio.php#portfolioGraphics"><img src="images/<?php echo $photoViewGraphicsMedium ?>" alt="view_graphics"></a><!--viewgraphics-medium.png-->
		   </div>
		   <div id="graphicServicesDescM" class="columns medium-6 medium-pull-1 ">
		   	<div class="subHeading listTitleM"><?php echo "<p>{$serviceGraphicsSubtitleML}</p>"; ?></div><!--My Graphic Services Include:-->
		   	<div class="bulletList">
		   	<?php echo "<p>{$serviceGraphicsInfoML}</p>"; ?>
		   	<!--tbl_paragraph, paragraph_id=3
		   	<ul>
			   <li>Custom Graphics</li>
			   <li>Icons</li>
			   <li>Logos</li>
			   <li>Vectorized Images</li>
		    </ul>-->
		   </div>
		   </div>
		  </div>
		   <!--Graphic Services-->
		  <div id="brandServicesMedium" class="row">
		   <div id="brandServicesImgM" class="medium-4 medium-offset-2 columns">
			   <a href="portfolio.php#portfolioBranding"><img src="images/<?php echo $photoViewBrandMedium ?>" alt="view_branding"></a><!--viewbrand-medium.png-->
		   </div>
		   <div id="brandServicesDescM" class="columns medium-6 medium-pull-1 ">
		   	<div class="subHeading listTitleM"><?php echo "<p>{$serviceBrandSubtitleML}</p>"; ?></div><!--My Branding Services Include:-->
		   	<div class="bulletList">
		   	<?php echo "<p>{$serviceBrandInfoML}</p>"; ?>
		   	<!--tbl_paragraph, paragraph_id=4
		   	  <ul class="bulletList">
			  <li>Branding Style Guides</li>
			   <li>Business Cards</li>
			   <li>Custom Branding Requests</li>
			   <li>Promotional Posters</li>
		    </ul>-->
		   </div>
		   </div>
		  </div>
		  <div id="webServicesMedium" class="row">
		  <div id="webServices" class="medium-9 medium-offset-2 hide-for-large columns">
		  	<div class="subHeading"><?php echo "<p>{$serviceWebSubtitleML}</p>"; ?></div><!--My Web Design Services Include:-->
		    <div class="paraStyle"><?php echo "<p>{$serviceWebInfoML}</p>"; ?></div><!--Creating websites like the one you are currently on, designed and coded by Chantel Oatman:-->
		  </div>
		  </div>
		  <div id="aboutButtonM" class="row">
		<a href="about.php"><div id="moreAboutButtonM" class="hide-for-small-only medium-2 medium-offset-5 buttons hide-for-large">About Chantel</div></a>
	</div>
	   </section>
	   
	   <!--services large images-->
	   <section class="row hide-for-medium-only sectionBackground"><h2 class="hidden">My Services</h2>
	   <div id="photoServiceHome" class="columns large-4">
		  <a href="portfolio.php#portfolioPhotography"><img src="images/<?php echo $photoViewPhotoLarge ?>" id="viewPhotographyLarge" alt="view_photography"></a><!--viewphotography-large.png-->
	   </div>
	   <div id="graphicServiceHome" class="columns large-4">
		   <a href="portfolio.php#portfolioGraphics"><img src="images/<?php echo $photoViewGraphicsLarge ?>" id="viewGraphicsLarge" alt="view_graphics"></a><!--viewgraphics-large.png-->
	   </div>
	   <div id="brandServiceHome" class="columns large-4">
		   <a href="portfolio.php#portfolioBranding"><img src="images/<?php echo $photoViewBrandLarge ?>" id="viewBrandLarge" alt="view_branding"></a><!--viewbrand-large.png-->
	   </div>
	   
	   </section>
	   <!--Services Large Buttons-->
	   <a href="portfolio.html#photoContent"><div id="viewPhotoButton" class="hide-for-small-only hide-for-medium-only columns large-4 buttons homePortfolioButtons">View Portfolio</div></a>
	   <a href="portfolio.html#graphicContent"><div id="viewGraphicButton" class="hide-for-small-only hide-for-medium-only columns large-4 buttons homePortfolioButtons">View Graphics</div></a>
	   <div id="viewBrandButton" class="hide-for-small-only hide-for-medium-only columns large-4 buttons homePortfolioButtons">View Branding</div>
	   <!--services large info-->
	   <section class="row hide-for-small-only hide-for-medium-only sectionBackground"><h2 class="hidden">My Services Descriptions</h2>
	   <div id="photoServiceDescHome" class="columns large-4">
		   <div class="subHeading listTitleL"><?php echo "<p>{$servicePhotoSubtitleML}</p>"; ?></div><!--My Photography Services Include:-->
		   <div class="bulletList bulletListStyleL bulletListPhotoL">
		   <?php echo "<p>{$servicePhotoInfoML}</p>"; ?>
		   	<!--tbl_paragraph, paragraph_id=3
		   	<ul>
			   <li>Custom Graphics</li>
			   <li>Icons</li>
			   <li>Logos</li>
			   <li>Vectorized Images</li>
		    </ul>-->
		   </div>
	   </div>
	   <div id="graphicServiceDescHome" class="columns large-4">
	    <div class="subHeading listTitleL"><?php echo "<p>{$serviceGraphicsSubtitleML}</p>"; ?></div><!--My Graphic Services Include:-->
		   <div class="bulletList bulletListStyleL bulletListGraphicL">
		   <?php echo "<p>{$serviceGraphicsInfoML}</p>"; ?>
		   	<!--tbl_paragraph, paragraph_id=3
		   	<ul>
			   <li>Custom Graphics</li>
			   <li>Icons</li>
			   <li>Logos</li>
			   <li>Vectorized Images</li>
		    </ul>-->
		   </div>
	   </div>
	   <div id="brandServiceDescHome" class="columns large-4">
	    <div class="subHeading listTitleL"><?php echo "<p>{$serviceBrandSubtitleML}</p>"; ?></div><!--My Branding Services Include:-->
	   <div class="bulletList bulletListStyleL bulletListBrandL">
		   <?php echo "<p>{$serviceBrandInfoML}</p>"; ?>
	   	  <!--tbl_paragraph, paragraph_id=4
		   	  <ul class="bulletList">
			  <li>Branding Style Guides</li>
			   <li>Business Cards</li>
			   <li>Custom Branding Requests</li>
			   <li>Promotional Posters</li>
		    </ul>-->
		   </div>
		 </div>
		 <div id="webServicesLarge" class="row">
		  <div id="webServicesL" class="hide-for-medium-only large-8 columns">
		  	<div class="subHeading"><?php echo "<p>{$serviceWebSubtitleML}</p>"; ?></div><!--My Web Design Services Include:-->
		    <div class="paraStyle"><?php echo "<p>{$serviceWebInfoML}</p>"; ?></div><!--Creating websites like the one you are currently on, designed and coded by Chantel Oatman:-->
		  </div>
		  </div>
		  <div id="aboutButtonL" class="row">
		 <a href="about.php"><div id="moreAboutButtonL" class="hide-for-small-only hide-for-medium-only large-2 buttons">About Chantel</div></a>
	     </div>
	   </section>
	   </section>
	  
   </section>
   
   <!--CONTACT SECTION HOME-->
   <section class="row"><h2 class="hidden">Contact Section HomePage</h2>
   <!--Contact Content-->
   <section id="contactContentHome" class="row sectionBackground"><h2 class="hidden">Contact Content</h2>
   <section id="ContactTitle" class="row"><h2 class="headStyle">Contact Me</h2></section>
	   <div id="contactInfoHome" class="small-12 medium-offset-2 medium-8 columns ">
		   <div class="paraStyle"><?php echo "<p>{$contactInfo}</p>"; ?></div><!--If you would like to hire me for your photography, graphic, branding, or site design needs, please fill out the contact information form to get in touch with me:-->
	   </div>
	   <a href="contact.php"> <div id="contactButton" class="small-6 small-offset-3 medium-2 medium-offset-5 columns buttons">Contact Form</div></a>
	  
	   </section>
   </section>
<!--</section>-->
   <!--Footer Small-->
    <section id="footer" class="row hide-for-medium hide-for-large"><h2 class="hidden">Footer</h2>
   <div id="footerContent" class="row">
	   <p id="nameBottom" class="columns small-6">chanteloatman.com</p>
	   <a href="https://www.linkedin.com/in/chantel-oatman-40b177156/"><div id="facebookFooter" class="small-3 small-push-1 columns socialIcon"><img src="images/<?php echo $socialLinkedinSmall ?>" id="likedin" alt="linkedin"></div></a><!--social-linkedin.png-->
	   <a href="https://www.facebook.com/Chantel-Oatman-Digital-Services-139315516756341/"><div id="linkedinFooter" class="small-3 columns socialIcon"><img src="images/<?php echo $socialFacebookSmall ?>" id="facebook" alt="facebook"></div></a><!--social-facebook.png-->
   </div>
   </section>
   <!--Footer M/L-->
     <section id="footerLarge" class="row hide-for-small-only"><h2 class="hidden">Footer</h2>
	 <p class="hide-for-small-only medium-3 columns" id="nameBottomLarge">chanteloatman.com</p>
	    <div id="socialIconsLarge" class=" hide-for-small-only">
		 <!--Medium Social-->
		<div class="columns medium-2 medium-push-5 hide-for-large" id="linkedinDivM"><a href="https://www.linkedin.com/in/chantel-oatman-40b177156/"><img src="images/<?php echo $socialLinkedinMedium ?>" id="linkedinMedium" alt="linkedin"></a></div><!--social-linkedin-medium.png-->
		<div class="columns medium-2 medium-push-5 hide-for-large" id="facebookDivM"><a href="https://www.facebook.com/Chantel-Oatman-Digital-Services-139315516756341/"><img src="images/<?php echo $socialFacebookMedium ?>" id="facebookMedium" alt="facebook"></a></div><!--social-facebook-medium.png-->
		
		 <!--Large Social-->
		<div class="columns hide-for-medium-only large-push-6 large-2 columns" id="linkedinDivLarge"><a href="https://www.linkedin.com/in/chantel-oatman-40b177156/"><img src="images/<?php echo $socialLinkedinLarge ?>" id="linkedinLarge" alt="linkedin"></a></div><!--social-linkedin-large.png-->
		<div class="columns hide-for-medium-only large-2 columns" id="facebookDivLarge"><a href="https://www.facebook.com/Chantel-Oatman-Digital-Services-139315516756341/"><img src="images/<?php echo $socialFacebookLarge ?>" id="facebookLarge" alt="facebook"></a></div><!--social-facebook-large.png-->
	  </div>
  </section>
  	
  <section id="bottomBar" class="hide-for-small-only"><h2 class="hidden">Bottom Bar</h2></section>
   	
    <!--foundation-->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <!--js for index page functionality-->
    <script src="js/index.js"></script>
  </body>
</html>
