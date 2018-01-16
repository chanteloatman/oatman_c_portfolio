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
    <h1 class="hidden">Chantel Oatman - PortfolioWork</h1>
   
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
   <a href="index.php"><div id="logo">
   	<img src="images/<?php echo $sitelogoMedium ?>" alt="logo" class="hide-for-small-only hide-for-large" id="logoMedium">
   	<img src="images/<?php echo $sitelogoLarge ?>" alt="logo" class="hide-for-small-only hide-for-medium-only" id="logoLarge">
   </div></a>
   <div id="menuLarge" class="row hide-for-small-only">
   	<nav id="largeNavigation" class=" medium-12 large-12 columns"><h2 class="hidden">Navigation</h2>
   	   <ul>
   	      <li id="homeNavLarge"><a href="index.php">Home</a></li>
          <li id="aboutNavLarge"><a href="about.php">About</a></li>
          <li id="portfolioNavLarge"><a href="#">Portfolio</a></li>
          <li id="contactNavLarge"><a href="contact.php">Contact Me</a></li>
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
  <!--GALLERY ARROWS-->
       <!--......Small Arrows......-->
	   <div id="leftPhotoGallery" class="photoGalleryButton hide-for-medium-only hide-for-large"><img src="images/<?php echo $leftArrowGallerySmall ?>" alt="left_button" id="leftArrowS"></div><!--arrow-left-small.png-->
	   <div id="rightPhotoGallery" class="photoGalleryButton hide-for-medium hide-for-large columns small-offset-11"><img src="images/<?php echo $rightArrowGallerySmall ?>" alt="right_button" id="rightArrowS"></div><!--arrow-right-small.png-->
	   <!--......Medium Arrows......-->
	   <div id="leftPhotoGalleryM" class="photoGalleryButton hide-for-small-only hide-for-large"><img src="images/<?php echo $leftArrowGalleryMedium ?>" alt="left_button" id="leftArrowM"></div><!--arrow-left-medium.png-->
	   <div id="rightPhotoGalleryM" class="photoGalleryButton hide-for-small-only medium-offset-11 hide-for-large columns "><img src="images/<?php echo $rightArrowGalleryMedium ?>" alt="right_button" id="rightArrowM"></div><!--arrow-right-medium.png-->
	   <!--......Large Arrows......-->
	   <div id="leftPhotoGalleryL" class="photoGalleryButton hide-for-small-only large-offset-1 hide-for-medium-only"><img src="images/<?php echo $leftArrowGalleryLarge ?>" alt="left_button" id="leftArrowL"></div><!--arrow-left-large.png-->
	   <div id="rightPhotoGalleryL" class="photoGalleryButton hide-for-small-only  large-offset-10 hide-for-medium-only columns "><img src="images/<?php echo $rightArrowGalleryLarge ?>" alt="right_button" id="rightArrowL"></div><!--arrow-right-large.png-->
<!--GALLERY PHOTOS-->
	   <!--......photos small......-->
	   <div id="rosePhotoAreaS" class="small-12 hide-for-medium-only hide-for-large columns">
	   	<img src="images/<?php echo $galleryRoseSmallImg ?>" alt="love_of_the_shadows_photo" id="photoRoseS">
	   	<img src="images/<?php echo $galleryLogsSmallImg ?>" alt="logs_of_time_photo" id="photoLogsS" class="photoHidden">
	   	<img src="images/<?php echo $galleryNatureSmallImg ?>" alt="heart_of_nature_photo" id="photoNatureS" class="photoHidden">
	   	<img src="images/<?php echo $galleryDuckSmallImg ?>" alt="the_smiling_duck_photo" id="photoDuckS" class="photoHidden">
	   	<img src="images/<?php echo $gallerySquirrelSmallImg ?>" alt="squirrel_photo" id="photoSquirrelS" class="hiddenGalleryImgS">
	   	<img src="images/<?php echo $galleryMakeupSmallImg ?>" alt="makeup_photo" id="photoGearsS" class="photoHidden">
	   	<!--......photos medium......-->
	   </div>
	   <div id="rosePhotoAreaM" class="hide-for-small-only medium-10 medium-pull-1 hide-for-large columns">
	   	<img src="images/<?php echo $galleryRoseMediumImg ?>" alt="love_of_the_shadows_photo" id="photoRoseM">
	   	<img src="images/<?php echo $galleryLogsMediumImg ?>" alt="logs_of_time_photo" id="photoLogsM" class="photoHidden">
	   	<img src="images/<?php echo $galleryNatureMediumImg ?>" alt="heart_of_nature_photo" id="photoNatureM" class="photoHidden">
	   	<img src="images/<?php echo $galleryDuckMediumImg ?>" alt="the_smiling_duck_photo" id="photoDuckM" class="photoHidden">
	   	<img src="images/<?php echo $gallerySquirrelMediumImg ?>" alt="squirrel_photo" id="photoSquirrelM" class="photoHidden">
	   	<img src="images/<?php echo $galleryMakeupMediumImg ?>" alt="makeup_photo" id="photoGearsM" class="photoHidden">
	    </div>
	    </div>
	    <!--......photos large......-->
	    <div id="rosePhotoAreaL" class="hide-for-small-only hide-for-medium-only large-8 large-offset-2 columns">
	   	<img src="images/<?php echo $galleryRoseLargeImg ?>" alt="love_of_the_shadows_photo" id="photoRoseL">
	   	<img src="images/<?php echo $galleryLogsLargeImg ?>" alt="logs_of_time_photo" id="photoLogsL" class="photoHidden">
	   	<img src="images/<?php echo $galleryNatureLargeImg ?>" alt="heart_of_nature_photo" id="photoNatureL" class="photoHidden">
	   	<img src="images/<?php echo $galleryDuckLargeImg ?>" alt="the_smiling_duck_photo" id="photoDuckL" class="photoHidden">
	   	<img src="images/<?php echo $gallerySquirrelLargeImg ?>" alt="squirrel_photo" id="photoSquirrelL" class="photoHidden">
	   	<img src="images/<?php echo $galleryMakeupLargeImg ?>" alt="makeup_photo" id="photoGearsL" class="photoHidden">
	   </div>
<!--GALLERY DESCRIPTIONS-->
	 <!--Gallery Descriptions Small-->

	    <div id="photoDescriptionS" class="small-12 hide-for-medium-only hide-for-large columns">
			<div id="roseSubHeadingS" class="subHeading gallerySubHead sgsubheading"><?php echo "<p>{$galleryRoseSmallTitle}</p>"; ?></div>
			<div id="roseDescS" class="paraStyle galleryDesc sgDesc"><?php echo "<p>{$galleryRoseSmallDesc}</p>"; ?></div>
			<div id="roseNoteS" class="paraStyle notes galleryDesc sgNote"><?php echo "<p>{$galleryRoseSmallNote}</p>"; ?></div> 
            <!--logs-->
            <div id="logsSubHeadingS" class="subHeading gallerySubHead descHide sgsubheading"><?php echo "<p>{$galleryLogsSmallTitle}</p>"; ?></div>
			<div id="logsDescS" class="paraStyle galleryDesc descHide sgDesc"><?php echo "<p>{$galleryLogsSmallDesc}</p>"; ?></div>
			<div id="logsNoteS" class="paraStyle galleryDesc notes sgNote descHide"><?php echo "<p>{$galleryLogsSmallNote}</p>"; ?></div> 
            <!--nature-->
           <div id="natureSubHeadingS" class="subHeading gallerySubHead descHide sgsubheading"><?php echo "<p>{$galleryNatureSmallTitle}</p>"; ?></div>
		   <div id="natureDescS" class="paraStyle galleryDesc sgDesc descHide"><?php echo "<p>{$galleryNatureSmallDesc}</p>"; ?></div>
		   <div id="natureNoteS" class="paraStyle galleryDesc notes sgNote descHide"><?php echo "<p>{$galleryNatureSmallNote}</p>"; ?></div> 
           <!--duck-->
           <div id="duckSubHeadingS" class="subHeading gallerySubHead descHide sgsubheading"><?php echo "<p>{$galleryDuckSmallTitle}</p>"; ?></div>
		   <div id="duckDescS" class="paraStyle galleryDesc sgDesc descHide"><?php echo "<p>{$galleryDuckSmallDesc}</p>"; ?></div>
		   <div id="duckNoteS" class="paraStyle galleryDesc notes sgNote descHide"><?php echo "<p>{$galleryDuckSmallNote}</p>"; ?></div> 
           <!--squirrel-->
           <div id="squirrelSubHeadingS" class="subHeading gallerySubHead descHide sgsubheading"><?php echo "<p>{$gallerySquirrelSmallTitle}</p>"; ?></div>
		   <div id="squirrelDescS" class="paraStyle galleryDesc sgDesc descHide"><?php echo "<p>{$gallerySquirrelSmallDesc}</p>"; ?></div>
		   <div id="squirrelNoteS" class="paraStyle galleryDesc notes sgNote descHide"><?php echo "<p>{$gallerySquirrelSmallNote}</p>"; ?></div> 
           <!--makeup-->
           <div id="makeupSubHeadingS" class="subHeading gallerySubHead descHide sgsubheading"><?php echo "<p>{$galleryMakeupSmallTitle}</p>"; ?></div>
		   <div id="makeupDescS" class="paraStyle galleryDesc sgDesc descHide"><?php echo "<p>{$galleryMakeupSmallDesc}</p>"; ?></div>
		   <div id="makeupUrlS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$galleryMakeupSmallUrl}</p>"; ?></div> 
		   <div id="makeupNoteS" class="paraStyle galleryDesc notes sgNote descHide"><?php echo "<p>{$galleryMakeupSmallNote}</p>"; ?></div> 
    </div>
    <!--Gallery Descriptions Medium-->
	    <div id="photoDescriptionM" class="hide-for-small-only medium-10 medium-offset-1 hide-for-large columns">
			<div id="roseSubHeadingM" class="subHeading gallerySubHead mgsubheading"><?php echo "<p>{$galleryRoseMediumTitle}</p>"; ?></div>
		   <div id="roseDescM" class="paraStyle mgDesc galleryDesc"><?php echo "<p>{$galleryRoseMediumDesc}</p>"; ?></div>
		    <div id="roseNoteM" class="paraStyle notes mgNote  galleryDesc"><?php echo "<p>{$galleryRoseMediumNote}</p>"; ?></div> 
           <!--logs-->
           <div id="logsSubHeadingM" class="subHeading gallerySubHead descHide mgsubheading"><?php echo "<p>{$galleryLogsMediumTitle}</p>"; ?></div>
		   <div id="logsDescM" class="paraStyle galleryDesc mgDesc descHide"><?php echo "<p>{$galleryLogsMediumDesc}</p>"; ?></div>
		   <div id="logsNoteM" class="paraStyle galleryDesc notes mgNote descHide"><?php echo "<p>{$galleryLogsMediumNote}</p>"; ?></div> 
           <!--nature-->
           <div id="natureSubHeadingM" class="subHeading gallerySubHead mgsubheading descHide"><?php echo "<p>{$galleryNatureMediumTitle}</p>"; ?></div>
		   <div id="natureDescM" class="paraStyle galleryDesc mgDesc descHide"><?php echo "<p>{$galleryNatureMediumDesc}</p>"; ?></div>
		   <div id="natureNoteM" class="paraStyle galleryDesc notes mgNote  descHide"><?php echo "<p>{$galleryNatureMediumNote}</p>"; ?></div> 
           <!--duck-->
           <div id="duckSubHeadingM" class="subHeading gallerySubHead mgsubheading descHide"><?php echo "<p>{$galleryDuckMediumTitle}</p>"; ?></div>
		   <div id="duckDescM" class="paraStyle galleryDesc mgDesc descHide"><?php echo "<p>{$galleryDuckMediumDesc}</p>"; ?></div>
		   <div id="duckNoteM" class="paraStyle galleryDesc notes mgNote  descHide"><?php echo "<p>{$galleryDuckMediumNote}</p>"; ?></div> 
           <!--squirrel-->
           <div id="squirrelSubHeadingM" class="subHeading gallerySubHead mgsubheading descHide"><?php echo "<p>{$gallerySquirrelMediumTitle}</p>"; ?></div>
		   <div id="squirrelDescM" class="paraStyle galleryDesc mgDesc descHide"><?php echo "<p>{$gallerySquirrelMediumDesc}</p>"; ?></div>
		   <div id="squirrelNoteM" class="paraStyle galleryDesc mgNote notes descHide"><?php echo "<p>{$gallerySquirrelMediumNote}</p>"; ?></div> 
           <!--makeup-->
           <div id="makeupSubHeadingM" class="subHeading gallerySubHead mgsubheading descHide"><?php echo "<p>{$galleryMakeupMediumTitle}</p>"; ?></div>
		   <div id="makeupDescM" class="paraStyle galleryDesc mgDesc  descHide"><?php echo "<p>{$galleryMakeupMediumDesc}</p>"; ?></div>
		   <div id="makeupUrlM" class="paraStyle galleryDesc descHide"><?php echo "<p>{$galleryMakeupMediumUrl}</p>"; ?></div> 
		   <div id="makeupNoteM" class="paraStyle galleryDesc notes mgNote descHide"><?php echo "<p>{$galleryMakeupMediumNote}</p>"; ?></div> 
	    </div>
	    <!--Gallery Descriptions Large -->
	     <div id="photoDescriptionL" class="hide-for-small-only hide-for-medium-only large-8 large-pull-2 columns">
			<div id="roseSubHeadingL" class="subHeading gallerySubHead lgsubheading"><?php echo "<p>{$galleryRoseLargeTitle}</p>"; ?></div>
		   <div id="roseDescL" class="paraStyle lgDesc galleryDesc"><?php echo "<p>{$galleryRoseLargeDesc}</p>"; ?></div>
		    <div id="roseNoteL" class="paraStyle notes lgNote  galleryDesc"><?php echo "<p>{$galleryRoseLargeNote}</p>"; ?></div> 
           <!--logs-->
           <div id="logsSubHeadingL" class="subHeading gallerySubHead lgsubheading descHide"><?php echo "<p>{$galleryLogsLargeTitle}</p>"; ?></div>
		   <div id="logsDescL" class="paraStyle galleryDesc lgDesc descHide"><?php echo "<p>{$galleryLogsLargeDesc}</p>"; ?></div>
		   <div id="logsNoteL" class="paraStyle notes lgNote galleryDesc descHide"><?php echo "<p>{$galleryLogsLargeNote}</p>"; ?></div> 
           <!--nature-->
           <div id="natureSubHeadingL" class="subHeading gallerySubHead lgsubheading descHide"><?php echo "<p>{$galleryNatureLargeTitle}</p>"; ?></div>
		   <div id="natureDescL" class="paraStyle galleryDesc lgDesc descHide"><?php echo "<p>{$galleryNatureLargeDesc}</p>"; ?></div>
		   <div id="natureNoteL" class="paraStyle notes lgNote galleryDesc descHide"><?php echo "<p>{$galleryNatureLargeNote}</p>"; ?></div> 
           <!--duck-->
           <div id="duckSubHeadingL" class="subHeading gallerySubHead lgsubheading descHide"><?php echo "<p>{$galleryDuckLargeTitle}</p>"; ?></div>
		   <div id="duckDescL" class="paraStyle galleryDesc lgDesc descHide"><?php echo "<p>{$galleryDuckLargeDesc}</p>"; ?></div>
		   <div id="duckNoteL" class="paraStyle notes lgNote galleryDesc descHide"><?php echo "<p>{$galleryDuckLargeNote}</p>"; ?></div> 
           <!--squirrel-->
           <div id="squirrelSubHeadingL" class="subHeading gallerySubHead lgsubheading descHide"><?php echo "<p>{$gallerySquirrelLargeTitle}</p>"; ?></div>
		   <div id="squirrelDescL" class="paraStyle galleryDesc lgDesc descHide"><?php echo "<p>{$gallerySquirrelLargeDesc}</p>"; ?></div>
		   <div id="squirrelNoteL" class="paraStyle notes lgNote galleryDesc descHide"><?php echo "<p>{$gallerySquirrelLargeNote}</p>"; ?></div> 
           <!--makeup-->
           <div id="makeupSubHeadingL" class="subHeading gallerySubHead lgsubheading descHide"><?php echo "<p>{$galleryMakeupLargeTitle}</p>"; ?></div>
		   <div id="makeupDescL" class="paraStyle galleryDesc lgDesc descHide"><?php echo "<p>{$galleryMakeupLargeDesc}</p>"; ?></div>
		   <div id="makeupUrlL" class="paraStyle galleryDesc descHide"><?php echo "<p>{$galleryMakeupLargeUrl}</p>"; ?></div> 
		   <div id="makeupNoteL" class="paraStyle notes lgNote galleryDesc descHide"><?php echo "<p>{$galleryMakeupLargeNote}</p>"; ?></div> 
	    </div>
   </section>
   </section>
   
   
   <!--.........LIGHTBOX.........-->
	<section class="lightbox row hide-for-medium-only hide-for-large" id="lightbox"><h2 class="hidden">Lightbox</h2>
	   <div id="lightboxContentBG">
	   <div class="small-2 small-offset-10 columns"><i class="lightboxClose">X</i></div> <!--close graphicLightbox--> 
	   <!--the image-->
	   <div class="columns small-12">
	   <img src="images/graphicshow-sitelogo-small.png" alt="view_image" class="lightboxImg small-6 small-offset-3 columns">
	   </div>
	   <!--the image description-->
	   <div class="columns small-12 lightboxDescS">
	    <p class="lightboxTitle" id="pTitleS">Title</p>
	   <p class="lightboxDesc" id="pDescS">Description</p>
	   <p class="lightboxNote" id="pNoteS">Note</p>
	   </div>
	   </div>
   </section>
   
   <!--GRAPHICS SECTION-->
   <section class="row" id="portfolioGraphics"><h2 class="hidden">Graphics Section</h2>

   <!--Graphics Content-->
	   <section id="graphicContent" class="row sectionBackground"><h2 class="hidden">Graphics Content</h2>
	   <!--Graphics Title-->
	    <section id="graphicsTitle" class="row"><h2 class="headStyle">Graphic Work</h2></section>
   <section id="graphicInfo" class="row hide-for-medium"><h2 class="hidden">Graphics Info</h2>
   </section>
   
   <!--small graphics icons-->
    <div class="graphicIcons">
   <section class="row hide-for-medium" id="graphicButtonsRow1"><h2 class="hidden">Graphics Buttons First Row</h2>
   <div class="small-12 columns">
	   <div class="small-3 columns graphicButton" id="sitelogoIcon"><img src="images/<?php echo $graphicIconSitelogoSmall ?>" alt="current_site_logo"></div><!--graphic-sitelogo-small.png-->
	   <div class="small-3 columns graphicButton" id="artsIcon"><img src="images/<?php echo $graphicIconArtsSmall ?>" alt="my_arts_site_logo"></div><!--graphic-arts-small.png-->
	   <div class="small-3 columns graphicButton" id="graffitiIcon"><img src="images/<?php echo $graphicIconGraffitiSmall ?>" alt="graffiti_graphic"></div><!--graphic-graffiti-small.png-->
	   <div class="small-3 columns graphicButton" id="vhsIcon"><img src="images/<?php echo $graphicIconVhsSmall ?>" alt="vhs_icon"></div><!--graphic-vhs-small.png-->
   </div>
   </section>
   <section class="row hide-for-medium" id="graphicButtonsRow2"><h2 class="hidden">Graphics Buttons Second Row</h2>
   <div class="small-12 columns">
	   <div class="small-3 columns graphicButton"><img src="images/<?php echo $graphicIconDuckSmall ?>" alt="duck_vector" id="duckIcon"></div><!--graphic-duck-small.png-->
	   <div class="small-3 columns graphicButton"><img src="images/<?php echo $graphicIconTattooSmall ?>" alt="tattoo_custom_graphic" id="tattooIcon"></div><!--graphic-tattoo-small.png-->
	   <div class="small-3 columns graphicButton" id="catIcon"><img src="images/<?php echo $graphicIconCatSmall ?>" alt="curious_cat_logo"></div><!--graphic-curiouscat-small.png-->
	   <div class="small-3 columns graphicButton" id="gearsIcon"><img src="images/<?php echo $graphicIconGearsSmall ?>" alt="tattoo_custom_graphic"></div><!--graphic-gears-small.png-->
	   </div>
   </section>
		   </div>
	<!--small graphics images-->	  
	<div class="hide-for-medium-only hide-for-large">
   <img src="images/<?php echo $graphicImgSitelogoSmall ?>" alt="site_logo" id="graphicImgSitelogoS" class="photoHidden"> 
   <img src="images/<?php echo $graphicImgArtsSmall ?>" alt="arts_logo_vector" id="graphicImgArtsS" class="photoHidden"> 
   <img src="images/<?php echo $graphicImgGraffitiSmall ?>" alt="graffiti_custom" id="graphicImgGraffitiS" class="photoHidden"> 
   <img src="images/<?php echo $graphicImgVhsSmall ?>" alt="flashback_movies_icon" id="graphicImgVhsS" class="photoHidden"> 
   <img src="images/<?php echo $graphicImgDuckSmall ?>" alt="duck_vector" id="graphicImgDuckS" class="photoHidden"> 
   <img src="images/<?php echo $graphicImgTattooSmall ?>" alt="tattoo_custom" id="graphicImgTattooS" class="photoHidden"> 
   <img src="images/<?php echo $graphicImgCatSmall ?>" alt="curious_cat_logo" id="graphicImgCatS" class="photoHidden"> 
   <img src="images/<?php echo $graphicImgGearsSmall ?>" alt="chantel_gears_custom" id="graphicImgGearsS" class="photoHidden "> 
    </div>
  
<!--small graphics descriptions-->
   <div class="graphicDescShowS">  
		   <!--sitelogo-->
           <div id="graphicTitleSitelogoS" class="subHeading gallerySubHead descHide"><?php echo "<p>{$graphicTitleSitelogoSmall}</p>"; ?></div>
		   <div id="graphicDescSitelogoS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$graphicDescSitelogoSmall}</p>"; ?></div>
		   <div id="graphicNoteSitelogoS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$graphicNoteSitelogoSmall}</p>"; ?></div>
		   <!--arts-->
           <div id="graphicTitleArtsS" class="subHeading gallerySubHead descHide"><?php echo "<p>{$graphicTitleArtsSmall}</p>"; ?></div>
		   <div id="graphicDescArtsS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$graphicDescArtsSmall}</p>"; ?></div>
		   <div id="graphicNoteArtsS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$graphicNoteArtsSmall}</p>"; ?></div>
		   <!--graffiti-->
           <div id="graphicTitleGraffitiS" class="subHeading gallerySubHead descHide"><?php echo "<p>{$graphicTitleGraffitiSmall}</p>"; ?></div>
		   <div id="graphicDescGraffitiS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$graphicDescGraffitiSmall}</p>"; ?></div>
		   <div id="graphicNoteGraffitiS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$graphicNoteGraffitiSmall}</p>"; ?></div>
		     <!--vhs-->
           <div id="graphicTitleVhsS" class="subHeading gallerySubHead descHide"><?php echo "<p>{$graphicTitleVhsSmall}</p>"; ?></div>
		   <div id="graphicDescVhsS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$graphicDescVhsSmall}</p>"; ?></div>
		   <div id="graphicNoteVhsS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$graphicNoteVhsSmall}</p>"; ?></div>
		   <!--duck-->
           <div id="graphicTitleDuckS" class="subHeading gallerySubHead descHide"><?php echo "<p>{$graphicTitleDuckSmall}</p>"; ?></div>
		   <div id="graphicDescDuckS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$graphicDescDuckSmall}</p>"; ?></div>
		   <div id="graphicNoteDuckS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$graphicNoteDuckSmall}</p>"; ?></div>
		    <!--tattoo-->
           <div id="graphicTitleTattooS" class="subHeading gallerySubHead descHide"><?php echo "<p>{$graphicTitleTattooSmall}</p>"; ?></div>
		   <div id="graphicDescTattooS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$graphicDescTattooSmall}</p>"; ?></div>
		   <div id="graphicNoteTattooS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$graphicNoteTattooSmall}</p>"; ?></div>
		    <!--curious cat-->
           <div id="graphicTitleCatS" class="subHeading gallerySubHead descHide"><?php echo "<p>{$graphicTitleCatSmall}</p>"; ?></div>
		   <div id="graphicDescCatS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$graphicDescCatSmall}</p>"; ?></div>
		   <div id="graphicNoteCatS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$graphicNoteCatSmall}</p>"; ?></div>
		    <!--gears-->
           <div id="graphicTitleGearsS" class="subHeading gallerySubHead descHide"><?php echo "<p>{$graphicTitleGearsSmall}</p>"; ?></div>
		   <div id="graphicDescGearsS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$graphicDescGearsSmall}</p>"; ?></div>
		   <div id="graphicNoteGearsS" class="paraStyle galleryDesc descHide"><?php echo "<p>{$graphicNoteGearsSmall}</p>"; ?></div>
   </div> 
   <!--MEDIUM GRAPHICS-->
   <!--medium graphics Image and Description Area-->
   <section class="row hide-for-small-only" id="graphicWorkAreaM"><h2 class="hidden">Graphics Show Work Area</h2>
   <!--medium graphics Images-->
      <div id="graphicWorkAreaImgM" class="hide-for-small-only medium-4 hide-for-large columns">
       <!--sitelogoM--><img src="images/<?php echo $graphicImgSitelogoMedium ?>" alt="site_logo" id="graphicImgSitelogoM" class="graphicImgM sitelogoShowM"> 
       <!--artsM--><img src="images/<?php echo $graphicImgArtsSmall ?>" alt="chantel_arts_logo_vector" id="graphicImgArtsM" class="photoHidden graphicImgM artsShowM"> 
       <!--graffitiM--><img src="images/<?php echo $graphicImgGraffitiMedium ?>" alt="graffiti_custom" id="graphicImgGraffitiM" class="photoHidden graphicImgM graffitiShowM"> 
       <!--vhsM--><img src="images/<?php echo $graphicImgVhsMedium ?>" alt="falshback_movies_icon" id="graphicImgVhsM" class="photoHidden graphicImgM vhsShowM"> 
       <!--duckM--><img src="images/<?php echo $graphicImgDuckMedium ?>" alt="duck_vector" id="graphicImgDuckM" class="photoHidden graphicImgM duckShowM"> 
       <!--tattooM--><img src="images/<?php echo $graphicImgTattooMedium ?>" alt="tattoo_custom" id="graphicImgTattooM" class="photoHidden graphicImgM tattooShowM"> 
       <!--catM--><img src="images/<?php echo $graphicImgCatMedium ?>" alt="curious_cat_logo" id="graphicImgCatM" class="photoHidden graphicImgM catShowM"> 
       <!--gearsM--><img src="images/<?php echo $graphicImgGearsMedium ?>" alt="chantel_gears_custom" id="graphicImgGearsM" class="photoHidden graphicImgM gearsShowM"> 
	 </div>
   <!--medium graphics Descriptions--> 
     <div id="graphicWorkAreaDescM" class="hide-for-small-only hide-for-large medium-8 columns">
	   <!--site logo desc M-->
	   <div class="subHeading mgrTitle sitelogoShowM graphicImgM" id="graphicTitleSitelogoM"><?php echo "<p>$graphicTitleSitelogoMedium<p>" ?></div>
	   <div class="paraStyle mgrDesc graphicImgM sitelogoShowM" id="graphicDescSitelogoM"><?php echo "<p>$graphicDescSitelogoMedium<p>" ?></div>
	   <div class="paraStyle mgrNote graphicImgM sitelogoShowM" id="graphicNoteSitelogoM"><?php echo "<p>$graphicNoteSitelogoMedium<p>" ?></div>
	   <!--arts desc M-->
	   <div class="subHeading mgrTitle graphicImgM artsShowM descHide" id="graphicTitleArtsM"><?php echo "<p>$graphicTitleArtsMedium<p>" ?></div>
	   <div class="paraStyle mgrDesc graphicImgM artsShowM descHide" id="graphicDescArtsM"><?php echo "<p>$graphicDescArtsMedium<p>" ?></div>
	   <div class="paraStyle mgrNote artsShowM graphicImgM descHide" id="graphicNoteArtsM"><?php echo "<p>$graphicNoteArtsMedium<p>" ?></div>
	   <!--graffiti desc M-->
	   <div class="subHeading mgrTitle graphicImgM graffitiShowM descHide" id="graphicTitleGraffitiM"><?php echo "<p>$graphicTitleGraffitiMedium<p>" ?></div>
	   <div class="paraStyle mgrDesc graphicImgM graffitiShowM descHide" id="graphicDescGraffitiM"><?php echo "<p>$graphicDescGraffitiMedium<p>" ?></div>
	   <div class="paraStyle mgrNote graphicImgM graffitiShowM descHide" id="graphicNoteGraffitiM"><?php echo "<p>$graphicNoteGraffitiMedium<p>" ?></div>
	   <!--Vhs desc M-->
	   <div class="subHeading mgrTitle graphicImgM vhsShowM descHide" id="graphicTitleVhsM"><?php echo "<p>$graphicTitleVhsMedium<p>" ?></div>
	   <div class="paraStyle mgrDesc graphicImgM vhsShowM descHide" id="graphicDescVhsM"><?php echo "<p>$graphicDescVhsMedium<p>" ?></div>
	   <div class="paraStyle mgrNote graphicImgM vhsShowM descHide" id="graphicNoteVhsM"><?php echo "<p>$graphicNoteVhsMedium<p>" ?></div>
	   <!--duck desc M-->
	   <div class="subHeading mgrTitle graphicImgM duckShowM descHide" id="graphicTitleDuckM"><?php echo "<p>$graphicTitleDuckMedium<p>" ?></div>
	   <div class="paraStyle mgrDesc graphicImgM duckShowM descHide" id="graphicDescDuckM"><?php echo "<p>$graphicDescDuckMedium<p>" ?></div>
	   <div class="paraStyle mgrNote graphicImgM duckShowM descHide" id="graphicNoteDuckM"><?php echo "<p>$graphicNoteDuckMedium<p>" ?></div>
	    <!--tattoo desc M-->
	   <div class="subHeading mgrTitle graphicImgM tattooShowM descHide" id="graphicTitleTattooM"><?php echo "<p>$graphicTitleTattooMedium<p>" ?></div>
	   <div class="paraStyle mgrDesc graphicImgM tattooShowM descHide" id="graphicDescTattooM"><?php echo "<p>$graphicDescTattooMedium<p>" ?></div>
	   <div class="paraStyle mgrNote graphicImgM tattooShowM descHide" id="graphicNoteTattooM"><?php echo "<p>$graphicNoteTattooMedium<p>" ?></div>
	    <!--cat desc M-->
	   <div class="subHeading mgrTitle graphicImgM catShowM descHide" id="graphicTitleCatM"><?php echo "<p>$graphicTitleCatMedium<p>" ?></div>
	   <div class="paraStyle mgrDesc graphicImgM catShowM descHide" id="graphicDescCatM"><?php echo "<p>$graphicDescCatMedium<p>" ?></div>
	   <div class="paraStyle mgrNote graphicImgM catShowM descHide" id="graphicNoteCatM"><?php echo "<p>$graphicNoteCatMedium<p>" ?></div>
	    <!--gears desc M-->
	   <div class="subHeading mgrTitle graphicImgM gearsShowM descHide" id="graphicTitleGearsM"><?php echo "<p>$graphicTitleGearsMedium<p>" ?></div>
	   <div class="paraStyle mgrDesc graphicImgM gearsShowM  descHide" id="graphicDescGearsM"><?php echo "<p>$graphicDescGearsMedium<p>" ?></div>
	   <div class="paraStyle mgrNote graphicImgM gearsShowM  descHide" id="graphicNoteGearsM"><?php echo "<p>$graphicNoteGearsMedium<p>" ?></div>
	 </div>
   </section>
   <!--LARGE GRAPHICS-->
   <!--large graphics Image and Description Area-->
   <section class="row hide-for-small-only" id="graphicWorkAreaL"><h2 class="hidden">Graphics Show Work Area</h2>
   <!--large graphics Images-->
      <div id="graphicWorkAreaImgL" class="hide-for-small-only large-4 large-offset-2 hide-for-medium-only columns">
       <!--sitelogoL--><img src="images/<?php echo $graphicImgSitelogoLarge ?>" alt="site_logo" id="graphicImgSitelogoL" class="graphicImgL sitelogoShowL"> 
       <!--artsL--><img src="images/<?php echo $graphicImgArtsLarge ?>" alt="chantel_arts_logo_vector" id="graphicImgArtsL" class="photoHidden graphicImgL artsShowL"> 
       <!--graffitiL--><img src="images/<?php echo $graphicImgGraffitiLarge ?>" alt="chantel_arts_logo_vector" id="graphicImgGraffitiL" class="photoHidden graphicImgL graffitiShowL"> 
       <!--vhsL--><img src="images/<?php echo $graphicImgVhsLarge ?>" alt="graffiti_custom" id="graphicImgVhsL" class="photoHidden graphicImgL vhsShowL"> 
       <!--duckL--><img src="images/<?php echo $graphicImgDuckLarge ?>" alt="duck_vector" id="graphicImgDuckL" class="photoHidden graphicImgL duckShowL"> 
       <!--tattooL--><img src="images/<?php echo $graphicImgTattooLarge ?>" alt="tattoo_custom" id="graphicImgTattooL" class="photoHidden graphicImgL tattooShowL"> 
       <!--catL--><img src="images/<?php echo $graphicImgCatLarge ?>" alt="curious_cat_logo" id="graphicImgCatL" class="photoHidden graphicImgL catShowL"> 
       <!--gearsL--><img src="images/<?php echo $graphicImgGearsLarge ?>" alt="chantel_gears_custom" id="graphicImgGearsL" class="photoHidden graphicImgL gearsShowL"> 
	 </div>
   <!--large graphics Descriptions--> 
     <div id="graphicWorkAreaDescL" class="hide-for-small-only hide-for-medium-only large-5 large-pull-1 columns">
	   <!--site logo desc L-->
	   <div class="subHeading graphicImgL sitelogoShowL" id="graphicTitleSitelogoL"><?php echo "<p>$graphicTitleSitelogoLarge<p>" ?></div>
	   <div class="paraStyle graphicImgL sitelogoShowL" id="graphicDescSitelogoL"><?php echo "<p>$graphicDescSitelogoLarge<p>" ?></div>
	   <div class="paraStyle graphicImgL sitelogoShowL" id="graphicNoteSitelogoL"><?php echo "<p>$graphicNoteSitelogoLarge<p>" ?></div>
	   <!--arts desc L-->
	   <div class="subHeading graphicImgL artsShowL descHide" id="graphicTitleArtsL"><?php echo "<p>$graphicTitleArtsLarge<p>" ?></div>
	   <div class="paraStyle graphicImgL artsShowL descHide" id="graphicDescArtsL"><?php echo "<p>$graphicDescArtsLarge<p>" ?></div>
	   <div class="paraStyle graphicImgL artsShowL descHide" id="graphicNoteArtsL"><?php echo "<p>$graphicNoteArtsLarge<p>" ?></div>
	   <!--graffiti desc L-->
	   <div class="subHeading graphicImgL graffitiShowL descHide" id="graphicTitleGraffitiL"><?php echo "<p>$graphicTitleGraffitiLarge<p>" ?></div>
	   <div class="paraStyle graphicImgL graffitiShowL descHide" id="graphicDescGraffitiL"><?php echo "<p>$graphicDescGraffitiLarge<p>" ?></div>
	   <div class="paraStyle graphicImgL graffitiShowL descHide" id="graphicNoteGraffitiL"><?php echo "<p>$graphicNoteGraffitiLarge<p>" ?></div>
	   <!--Vhs desc L-->
	   <div class="subHeading graphicImgL vhsShowL descHide" id="graphicTitleVhsL"><?php echo "<p>$graphicTitleVhsLarge<p>" ?></div>
	   <div class="paraStyle graphicImgL vhsShowL descHide" id="graphicDescVhsL"><?php echo "<p>$graphicDescVhsLarge<p>" ?></div>
	   <div class="paraStyle graphicImgL vhsShowL descHide" id="graphicNoteVhsL"><?php echo "<p>$graphicNoteVhsLarge<p>" ?></div>
	   <!--duck desc L-->
	   <div class="subHeading graphicImgL duckShowL descHide" id="graphicTitleDuckL"><?php echo "<p>$graphicTitleDuckLarge<p>" ?></div>
	   <div class="paraStyle graphicImgL duckShowL descHide" id="graphicDescDuckL"><?php echo "<p>$graphicDescDuckLarge<p>" ?></div>
	   <div class="paraStyle graphicImgL duckShowL descHide" id="graphicNoteDuckL"><?php echo "<p>$graphicNoteDuckLarge<p>" ?></div>
	    <!--tattoo desc L-->
	   <div class="subHeading graphicImgL tattooShowL descHide" id="graphicTitleTattooL"><?php echo "<p>$graphicTitleTattooLarge<p>" ?></div>
	   <div class="paraStyle graphicImgL tattooShowL descHide" id="graphicDescTattooL"><?php echo "<p>$graphicDescTattooLarge<p>" ?></div>
	   <div class="paraStyle graphicImgL tattooShowL descHide" id="graphicNoteTattooL"><?php echo "<p>$graphicNoteTattooLarge<p>" ?></div>
	    <!--cat desc L-->
	   <div class="subHeading graphicImgL catShowL descHide" id="graphicTitleCatL"><?php echo "<p>$graphicTitleCatLarge<p>" ?></div>
	   <div class="paraStyle graphicImgL catShowL descHide" id="graphicDescCatL"><?php echo "<p>$graphicDescCatLarge<p>" ?></div>
	   <div class="paraStyle graphicImgL catShowL descHide" id="graphicNoteCatL"><?php echo "<p>$graphicNoteCatLarge<p>" ?></div>
	    <!--gears desc L-->
	   <div class="subHeading graphicImgL gearsShowL descHide" id="graphicTitleGearsL"><?php echo "<p>$graphicTitleGearsLarge<p>" ?></div>
	   <div class="paraStyle graphicImgL gearsShowL descHide" id="graphicDescGearsL"><?php echo "<p>$graphicDescGearsLarge<p>" ?></div>
	   <div class="paraStyle graphicImgL gearsShowL descHide" id="graphicNoteGearsL"><?php echo "<p>$graphicNoteGearsLarge<p>" ?></div>
	 </div>
   </section>
   
   <!--Medium & Large Graphics Icons-->
   <section class="row hide-for-small-only"><h2 class="hidden">Graphics Buttons</h2>
   <!--Medium Graphics Icons-->
	 <div class="hide-for-small-only medium-12 hide-for-large columns" id="graphicButtonRowM">
	   <div class="graphicButtonM medium-1 columns">
	   	<img src="images/<?php echo $graphicIconSitelogoMedium ?>" alt="site_logo" id="sitelogoIconM">
	   </div>
	   <div class="graphicButtonM medium-1 columns" id="artsIconM"><img src="images/<?php echo $graphicIconArtsMedium ?>" alt="chantel_arts_graphic_vector"></div>
	   <div class="graphicButtonM medium-1 columns" id="graffitiIconM"><img src="images/<?php echo $graphicIconGraffitiMedium ?>" alt="graffiti_custom_graphic"></div>
	   <div class="graphicButtonM medium-1 columns" id="vhsIconM"><img src="images/<?php echo $graphicIconVhsMedium ?>" alt="flashback_movies_icon"></div>
	   <div class="graphicButtonM medium-1 columns" id="duckIconM"><img src="images/<?php echo $graphicIconDuckMedium ?>" alt="duck_vector_graphic"></div>
	   <div class="graphicButtonM medium-1  columns" id="tattooIconM"><img src="images/<?php echo $graphicIconTattooMedium ?>" alt="tatto_custom_graphic"></div>
	   <div class="graphicButtonM medium-1 columns" id="catIconM"><img src="images/<?php echo $graphicIconCatMedium ?>" alt="curious_cat_logo" ></div>
	   <div class="graphicButtonM medium-1 columns" id="gearsIconM"><img src="images/<?php echo $graphicIconGearsMedium ?>" alt="gears_custom_graphic"></div>
	   </div>
	  <!--Large Graphics Icons--> 
	   <div class="hide-for-small-only hide-for-medium-only large-12 columns" id="graphicButtonRowL">
	   <div class="graphicButtonL large-1 large-offset-2 columns">
	   <img src="images/<?php echo $graphicIconSitelogoLarge ?>" alt="site_logo_icon" id="sitelogoIconL">
	   </div>
	   <div class="graphicButtonL large-1 columns" id="artsIconL"><img src="images/<?php echo $graphicIconArtsLarge ?>" alt="arts_icon"></div>
	   <div class="graphicButtonL large-1 columns" id="graffitiIconL"><img src="images/<?php echo $graphicIconGraffitiLarge ?>" alt="graffiti_icon"></div>
	   <div class="graphicButtonL large-1 columns" id="vhsIconL"><img src="images/<?php echo $graphicIconVhsLarge ?>" alt="flashback_movies_icon"></div>
	   <div class="graphicButtonL large-1   columns" id="duckIconL"><img src="images/<?php echo $graphicIconDuckLarge ?>" alt="duck_icon"></div>
	   <div class="graphicButtonL large-1  columns" id="tattooIconL"><img src="images/<?php echo $graphicIconTattooLarge ?>" alt="tatto_custom_graphic"></div>
	   <div class="graphicButtonL large-1 columns" id="catIconL"><img src="images/<?php echo $graphicIconCatLarge ?>" alt="curious_cat_logo"></div>
	   <div class="graphicButtonL large-1 large-pull-2 columns" id="gearsIconL"><img src="images/<?php echo $graphicIconGearsLarge ?>" alt="gears_custom_graphic"></div>
	   </div>
  </section>
   </section>
   </section>
   
 <!--BRAND SECTION-->
   <section class="row" id="portfolioBranding"><h2 class="hidden">Brand Section</h2>
    
 <!--Brand Content-->
   <section id="brandContent" class="row sectionBackground"><h2 class="hidden">Ads Brochure Content</h2>
   <section id="brandTitle" class="row"><h2 class="headStyle">Branding Style Guides</h2></section><!--Brand Title-->
   <!--Chantel Branding Small-->
   <section class="row"><h2 class="hidden">Graphic Buttons</h2>
	 <div class="columns small-12" id="brandChantel"> 
		 <a href="images/styleguide-chantel.pdf"><div id="brandViewButtonChantel" class="small-2 small-push-1 hide-for-medium columns brandViewButton brandChantel">View</div></a>
	   <div id="brandDescChantel" class="small-9 hide-for-medium columns brandDesc">
	   	   <h3 class="subHeading">Chantel - StyleGuide</h3>
		   <p class="paraStyle">For my site you are currently on.</p>
	   </div>
     </div>
     <!--Flash Branding Small-->
     <div class="columns small-12" id="brandFlash">
		 <a href="images/styleguide-flashback.pdf"> <div id="brandViewButtonFlash" class="small-2 small-push-1  hide-for-medium columns brandViewButton brandFlash">View</div></a>
	   <div id="brandDescFlash" class="small-9 hide-for-medium columns brandDesc">
		   <h3 class="subHeading">Flashback - StyleGuide</h3>
		   <p class="paraStyle">For a flashback, child-friendly multi-media site.</p>
	   </div>
	 </div>
    <!--Jeff Branding Small-->
     <div class="columns small-12" id="brandJeff">
		 <a href="images/styleguide-jeffdesigns.pdf"><div id="brandViewButtonJeff" class="small-2 small-push-1 hide-for-medium columns brandViewButton brandJeff">View</div></a>
	   <div id="brandDescJeff" class="small-9 hide-for-medium columns brandDesc">
	   	  <h3 class="subHeading">Jeff Designs - StyleGuide</h3>
		  <p class="paraStyle">Created around a person's style & hobbies.</p>
	   </div>
	 </div>
	<!--BRANDING M/L-->
   <!--Chantel Branding M/L-->
	   <section class="row hide-for-small-only"><h2 class="hidden">View Branding Section</h2>
  <div id="viewbrandButtonsM" class="medium-10 medium-offset-1 large-offset-0 large-pull-1 columns">
	   <div id="brandDescChantelM" class="medium-3 large-4 columns brandDesc">
	      <a href="images/styleguide-chantel.pdf"> <div class="brandViewButton brandChantel">View</div></a>
	   	  <h3 class="subHeading">Chantel - StyleGuide</h3>
		  <p class="paraStyle">For my site you are currently on.</p>
	   </div>
	<!--Flash Branding M/L-->   
	    <div id="brandDescFlashM" class="medium-3 large-4 columns brandDesc">
   	   <a href="images/styleguide-flashback.pdf"><div class="brandViewButton brandFlash">View</div></a>
	   	  <h3 class="subHeading">Flashback - StyleGuide</h3>
		  <p class="paraStyle">For a flashback, child-friendly multi-media site.</p>
	   </div>
    <!--Jeff Branding M/L--> 
	    <div id="brandDescJeffM" class="medium-3 medium-pull-3 large-4 large-pull-0 columns brandDesc">
   	      <a href="images/styleguide-jeffdesigns.pdf"><div class="brandViewButton brandJeff">View</div></a>
	   	  <h3 class="subHeading">Jeff Designs - StyleGuide</h3>
		  <p class="paraStyle">Created around a person's style & hobbies.</p>
	  </div>
	   </div>
	   
  </section>
  </section>
  
   </section>
   </section>
   
   <!--CONTACT SECTION HOME-->
   <section class="row hide-for-small-only"><h2 class="hidden">Contact Section HomePage</h2>
   <!--Contact Content-->
   <section id="contactContent" class="sectionBackground row"><h2 class="hidden">Contact Content</h2>
  	   <!--Contact Title-->
   	   <div id="contactTitleBarPortfolio" class="headStyle small-12 columns">Contact</div>
	   <div id="medium-12" class="columns"> 
	   <div id="contactInfoPortfolio" class="hide-for-small-only medium-offset-2 medium-8 columns paraStyle">
		   <p>Like What You See?</p>
	   </div>
	   </div>
	   <div class=" medium-12 columns">
		   <a href="contact.php"><div id="contactButtonPortfolio" class="hide-for-small-only small-6 medium-2 medium-offset-5 columns buttons">Contact Me</div></a>
	   </div>
   </section>
   </section>
    <!--small footer-->
     <section id="footer" class="row hide-for-medium hide-for-large"><h2 class="hidden">Footer</h2>
   <div id="footerContent" class="row">
	   <p id="nameBottom" class="columns small-6">chanteloatman.com</p>
	   <a href="https://www.linkedin.com/in/chantel-oatman-40b177156/"><div id="facebookFooter" class="small-3 small-push-1 columns socialIcon"><img src="images/social-linkedin.png" id="likedin" alt="linkedin"></div></a>
	   <a href="https://www.facebook.com/Chantel-Oatman-Digital-Services-139315516756341/"><div id="linkedinFooter" class="small-3 columns socialIcon"><img src="images/social-facebook.png" id="facebook" alt="facebook"></div></a>
   </div>
   </section>
    <!--medium/large footer-->
     <section id="footerLarge" class="row hide-for-small-only"><h2 class="hidden">Footer</h2>
	 <p class="hide-for-small-only medium-3 columns" id="nameBottomLarge">Chantel Oatman</p>
	    <div id="socialIconsLarge" class=" hide-for-small-only">
		<div class="columns medium-2 medium-push-5 large-push-6" id="linkedinDivLarge"><a href="https://www.linkedin.com/in/chantel-oatman-40b177156/"><img src="images/social-linkedin-large.png" id="linkedinLarge" alt="linkedin"></a></div>
		<div class="columns medium-2" id="facebookDivLarge"><a href="https://www.facebook.com/Chantel-Oatman-Digital-Services-139315516756341/"><img src="images/social-facebook-large.png" id="facebookLarge" alt="facebook"></a></div>
	  </div>
  </section>
  	
  <section id="bottomBar" class="hide-for-small-only"><h2 class="hidden">Bottom Bar</h2></section>
   	
   
   
   <!--foundation-->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <!--js for portfolio functionality-->
    <script src="js/portfolio.js"></script>
    <script src="js/lightboxes.js"></script>
  
  </body>
</html>
