
<?php
//includes all the admin script files that are listed in config file
   include_once("admin/scripts/config.php");
   //include 'contact.html';
?>

<?php
require_once('admin/scripts/config.php');
if(isset($_POST['firstname'])){
	//echo"working";
	$direct = "thankyou.php";
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$street = $_POST['street'];
	$comment = $_POST['comment'];
	
	if($street === ""){
		//echo "send mail";
		submitMessage($direct, $firstname, $lastname, $email, $comment); //$sendMail =
		redirect_to($direct); //makes the thankyou page appear
	}
}
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
	  <h1 class="hidden">Chantel Oatman - Contact</h1>
   
  <!--TOP BAR-->
   <section class="row"><h2 class="hidden">Top Bar</h2>
   <div id="topBar" class="small-12 hide-for-medium hide-for-large columns boxHelper"></div>
   </section>
    
   <!--MENU SMALL-->
   <nav id="mainNav" class="data-sticky-container hide-for-medium hide-for-large"><h2 class="hidden">Navigation</h2>
        <a href="index.php"><img src="images/logo-small.png" alt="logo" class="hide-for-medium-only hide-for-large" id="logoSmall"></a>
         <div class="title-bar small-12" data-responsive-toggle="menuNav" data-hide-for="large">
		<button class="menu-icon float-right" type="button" data-toggle></button>
	    </div>
   <div id="menuNav" class="small-12 hide-for-medium"><h2 class="hidden">Menu</h2>
	  <ul>
		  <li id="homeNav"><a href="index.php">Home</a></li>
          <li id="aboutNav"><a href="about.php">About</a></li>
          <li id="portfolioNav"><a href="portfolio.php">Portfolio</a></li>
          <li id="contactNav"><a href="#">Contact Me</a></li>
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
   	<img src="images/logo-medium.png" alt="logo" class="hide-for-small-only hide-for-large" id="logoMedium">
   	<img src="images/logo-large.png" alt="logo" class="hide-for-small-only hide-for-medium-only" id="logoLarge">
    </div></a>
   <div id="menuLarge" class="row hide-for-small-only">
	   <nav id="largeNavigation" class=" medium-12 large-12 columns"><h2 class="hidden">Navigation</h2>
   	   <ul>
   	      <li id="homeNavLarge"><a href="index.php">Home</a></li>
          <li id="aboutNavLarge"><a href="about.php">About</a></li>
          <li id="portfolioNavLarge"><a href="portfolio.php">Portfolio</a></li>
          <li id="contactNavLarge"><a href="#">Contact Me</a></li>
       </ul>
    </nav>
   </div>
    
   <!--CONTACT SECTION-->
   <section class="row"><h2 class="hidden">Contact Section</h2>
   <!--Contact Content-->
   <section id="contactContent" class="row sectionBackground"><h2 class="hidden">Contact Content</h2>
   <section id="contactTitle" class="row"><h2 class="hidden">Contact Title</h2>
   	   <div id="contactTitleBar" class="headStyle small-12 large-12 columns">Contact Me</div>
	  <!-- <div id="contactTitleImg" class="titleImg small-3 large-2 columns boxHelper">IMG</div>-->
   </section>
	   <div id="contactFormInfo" class="small-12 large-push-2 large-7 columns paraStyle">
		   <p>To request a quote to hire me for your marketing and/or design needs, or if you would like to leave a comment about some of my work, please fill out the contact information form to get in touch with me.</p>
	   </div>
	   <div id="contactForm" class="small-12 large-12 columns textBG"><h2 class="formStyle">Contact Form</h2>
	   <form method="post">
	   
	   <label for="firstname" class="labelname">First Name</label>
	   <input type="text" id="firstname" class="inputarea" name="firstname" placeholder="first name">
	   
	   <label for="lastname" class="labelname">Last Name</label>
	   <input type="text" id="lastname" class="inputarea" name="lastname" placeholder="last name">
	   
	   <label for="email" class="labelname">Email</label>
	   <input type="text" id="email" class="inputarea" name="email" placeholder="your email">
	   
		   <label class="labelname hidden">Street</label><input class="street hidden" name="street" type="text">
	   
	   <label for="comment" class="labelname">Comment</label>
	   <input type="text" id="comment" class="inputarea" name="comment">
	   
	   <input id="submitButton" class=" small-3 medium-4 buttons" name="submit" type="submit" value="Submit"><!--formaction="thankyou.php"--> 
	   
	   </form>
	   
	   </div>
	   
   </section>
   <!--Contact Footer-->
   <section class="row"><h2 class="hidden">Contact Footer</h2>
	   <div class="small-12 columns sectionFooterLast"></div>
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
   	

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>