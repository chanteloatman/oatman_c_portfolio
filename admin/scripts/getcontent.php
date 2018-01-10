<?php
//connect to database
include('connect.php');

//...........................IMAGES FROM DATABASE................................

//GENERAL MENU LOGOS
$sql = "SELECT * FROM tbl_main WHERE main_type='sitelogo'";//select all from tbl social that are small
$result = mysqli_query($link, $sql); //the result: the image
while($row = mysqli_fetch_array($result)){ 
	if($row['main_size'] == 1){
		$sitelogoSmall = $row['main_logo'];
	}
	elseif($row['main_size'] == 2){
		$sitelogoMedium = $row['main_logo'];
	}
	elseif($row['main_size'] == 3){
		$sitelogoLarge = $row['main_logo'];
	}
}

//GENERAL SOCIAL MEDIA
//General Small Social Media
$sql = "SELECT * FROM tbl_social WHERE social_size=1";//select all from tbl social that are small
$result = mysqli_query($link, $sql); //the result: the image
while($row = mysqli_fetch_array($result)){ 
	if($row['social_id'] == 1){
		$socialLinkedinSmall = $row['social_icon'];
	}
	elseif($row['social_id'] == 4){
		$socialFacebookSmall = $row['social_icon'];
	}
}
//General Medium Social Media
$sql = "SELECT * FROM tbl_social WHERE social_size=2";//select all from tbl social that are small
$result = mysqli_query($link, $sql); //the result: the image
while($row = mysqli_fetch_array($result)){ 
	if($row['social_id'] == 2){
		$socialLinkedinMedium = $row['social_icon'];
	}
	elseif($row['social_id'] == 5){
		$socialFacebookMedium = $row['social_icon'];
	}
}
//General Large Social Media
$sql = "SELECT * FROM tbl_social WHERE social_size=3";//select all from tbl social that are small
$result = mysqli_query($link, $sql); //the result: the image
while($row = mysqli_fetch_array($result)){ 
	if($row['social_id'] == 3){
		$socialLinkedinLarge = $row['social_icon'];
	}
	elseif($row['social_id'] == 6){
		$socialFacebookLarge = $row['social_icon'];
	}
}
//INDEX VIEW IMAGES
//Index Small ViewImages
$sql = "SELECT * FROM tbl_images WHERE images_size=1"; //here we want all the small images selected in the images table
$result = mysqli_query($link, $sql); //the result: the image
while($row = mysqli_fetch_array($result)){ 
	if($row['images_phototype'] == 'photography'){ //select the images that have a phototype of photography
		$photoViewPhotoSmall = $row['images_photo']; //name of variable will call in index.php in img tag
	}
	elseif($row['images_phototype'] == 'graphics'){ //select the images that have a phototype of graphics
		$photoViewGraphicsSmall = $row['images_photo']; //name of variable will call in index.php in img tag
    }   
	elseif($row['images_phototype'] == 'brand'){ //select the images that have a phototype of brand
		$photoViewBrandSmall = $row['images_photo']; //name of variable will call in index.php in img tag
}
	}
//Index Medium ViewImages
$sql = "SELECT * FROM tbl_images WHERE images_size=2"; //here we want all the medium images selected in the images table
$result = mysqli_query($link, $sql); //the result: the image
while($row = mysqli_fetch_array($result)){ 
	if($row['images_phototype'] == 'photography'){ $photoViewPhotoMedium = $row['images_photo'];}
	elseif($row['images_phototype'] == 'graphics'){ $photoViewGraphicsMedium = $row['images_photo'];}   
	elseif($row['images_phototype'] == 'brand'){ $photoViewBrandMedium = $row['images_photo'];}
	}
//Index Large ViewImages
$sql = "SELECT * FROM tbl_images WHERE images_size=3";  //here we want all the large images selected in the images table
$result = mysqli_query($link, $sql); //the result: the image
while($row = mysqli_fetch_array($result)){ 
	if($row['images_phototype'] == 'photography'){$photoViewPhotoLarge = $row['images_photo'];} //phototype of 
	elseif($row['images_phototype'] == 'graphics'){$photoViewGraphicsLarge = $row['images_photo'];}   
	elseif($row['images_phototype'] == 'brand'){$photoViewBrandLarge = $row['images_photo'];}
	}

//ABOUT IMAGES
$sql = "SELECT * FROM tbl_images WHERE images_phototype='headshot'"; //here we want all the medium images selected in the images table
$result = mysqli_query($link, $sql); //the result: the image
while($row = mysqli_fetch_array($result)){ 
	if($row['images_size'] == 1){ $aboutHeadshotSmall = $row['images_photo'];}
	elseif($row['images_size'] == 2){ $aboutHeadshotMedium = $row['images_photo'];}   
	elseif($row['images_size'] == 3){ $aboutHeadshotLarge = $row['images_photo'];}
	}

//PORTFOLIO IMAGES
//......Gallery...... 

//Selecting all the small images that are photographs, then each image by their title (to specifiy what small image to use)
$sql = "SELECT * FROM tbl_portfoliowork WHERE portfoliowork_size = 1 AND portfolio_type = 'photograph'";
$result = mysqli_query($link, $sql); //the result: image
while($row = mysqli_fetch_array($result)){
	if($row['portfoliowork_title'] == 'Love of the Shadows'){ //if the title of portfoliowork is love of shadows
		$galleryRoseSmallImg = $row['portfoliowork_img']; //then show the small love of the shadows image
	}
	elseif($row['portfoliowork_title'] == 'Logs of Time'){ //if the title of portfoliowork is logs of time
		$galleryLogsSmallImg = $row['portfoliowork_img']; //then show the small logs of time image
	}
	elseif($row['portfoliowork_title'] == 'The Heart of Nature'){ //if the title of portfoliowork is the heart of nature
		$galleryNatureSmallImg = $row['portfoliowork_img']; //then show the small the heart of nature image
	}
	elseif($row['portfoliowork_title'] == 'The Smiling Duck'){ //if the title of portfoliowork is the smiling
		$galleryDuckSmallImg = $row['portfoliowork_img']; //then show the small the the smiling duck image
	}
	elseif($row['portfoliowork_title'] == 'Squirrel of Dreams'){ //if the title of portfoliowork is squirrel of dreams
		$galleryRoseSmallImg = $row['portfoliowork_img']; //then show the small the squirrel of dreams image
	}
	elseif($row['portfoliowork_title'] == 'Beaneath the Makeup'){ //if the title of portfoliowork is beneath the makeup
		$galleryRoseSmallImg = $row['portfoliowork_img']; //then show the small beneath the makeup image
	}
}
//Selecting all the medium images that are photographs, then each image by their title (to specifiy what small image to use)
$sql = "SELECT * FROM tbl_portfoliowork WHERE portfoliowork_size = 2 AND portfolio_type = 'photograph'";
$result = mysqli_query($link, $sql); //the result: image
while($row = mysqli_fetch_array($result)){
	if($row['portfoliowork_title'] == 'Love of the Shadows'){ //if the title of portfoliowork is love of shadows
		$galleryRoseMediumImg = $row['portfoliowork_img']; //then show the medium love of the shadows image
	}
	elseif($row['portfoliowork_title'] == 'Logs of Time'){ //if the title of portfoliowork is logs of time
		$galleryLogsMediumImg = $row['portfoliowork_img']; //then show the medium logs of time image
	}
	elseif($row['portfoliowork_title'] == 'The Heart of Nature'){ //if the title of portfoliowork is the heart of nature
		$galleryNatureMediumImg = $row['portfoliowork_img']; //then show the medium the heart of nature image
	}
	elseif($row['portfoliowork_title'] == 'The Smiling Duck'){ //if the title of portfoliowork is the smiling
		$galleryDuckMediumImg = $row['portfoliowork_img']; //then show the medium the the smiling duck image
	}
	elseif($row['portfoliowork_title'] == 'Squirrel of Dreams'){ //if the title of portfoliowork is squirrel of dreams
		$galleryRoseMediumImg = $row['portfoliowork_img']; //then show the medium the squirrel of dreams image
	}
	elseif($row['portfoliowork_title'] == 'Beaneath the Makeup'){ //if the title of portfoliowork is beneath the makeup
		$galleryRoseMediumImg = $row['portfoliowork_img']; //then show the medium beneath the makeup image
	}
}

//Selecting all the large images that are photographs, then each image by their title (to specifiy what small image to use)
$sql = "SELECT * FROM tbl_portfoliowork WHERE portfoliowork_size = 3 AND portfolio_type = 'photograph'";
$result = mysqli_query($link, $sql); //the result: image
while($row = mysqli_fetch_array($result)){
	if($row['portfoliowork_title'] == 'Love of the Shadows'){ //if the title of portfoliowork is love of shadows
		$galleryRoseLargeImg = $row['portfoliowork_img']; //then show the large love of the shadows image
	}
	elseif($row['portfoliowork_title'] == 'Logs of Time'){ //if the title of portfoliowork is logs of time
		$galleryLogsLargeImg = $row['portfoliowork_img']; //then show the large logs of time image
	}
	elseif($row['portfoliowork_title'] == 'The Heart of Nature'){ //if the title of portfoliowork is the heart of nature
		$galleryNatureLargeImg = $row['portfoliowork_img']; //then show the large the heart of nature image
	}
	elseif($row['portfoliowork_title'] == 'The Smiling Duck'){ //if the title of portfoliowork is the smiling
		$galleryDuckLargeImg = $row['portfoliowork_img']; //then show the large the the smiling duck image
	}
	elseif($row['portfoliowork_title'] == 'Squirrel of Dreams'){ //if the title of portfoliowork is squirrel of dreams
		$galleryRoseLargeImg = $row['portfoliowork_img']; //then show the large the squirrel of dreams image
	}
	elseif($row['portfoliowork_title'] == 'Beaneath the Makeup'){ //if the title of portfoliowork is beneath the makeup
		$galleryRoseLargeImg = $row['portfoliowork_img']; //then show the large beneath the makeup image
	}
}

//...........................TEXT FROM DATABASE................................
//..........INDEX SERVICES (TEXT)..........
//Index Services Info
//$sql = "SELECT paragraph_text FROM tbl_paragraph WHERE paragraph_id='1'";
//$result = mysqli_query($link, $sql);
//while($row = mysqli_fetch_array($result, $servicesInfo));

$sql = "SELECT paragraph_text FROM tbl_paragraph WHERE paragraph_type='About Info'";
$result = mysqli_query($link, $sql); //the result: the Resume Info Paragraph
while($row = mysqli_fetch_array($result)){
	$aboutServicesInfo= $row['paragraph_text'];
}

//INDEX SERVICES TEXT
//Index Services Small Text
$sql = "SELECT * FROM tbl_paragraph WHERE paragraph_type='Service Info' AND paragraph_size=1"; //here we want all the paragraphs with the type of service info and have a size of 1
$result = mysqli_query($link, $sql); //the result: the Service Info Paragraphs
while($row = mysqli_fetch_array($result)){ 
	if($row['paragraph_id'] == 2){ //select the paragraph that has the id of 2
		$servicePhotoInfoSmall = $row['paragraph_text']; //name of variable the will put in the index.php img tag
	}
	elseif($row['paragraph_id'] == 3){ //select the paragraph that has the id of 3
		$serviceGraphicsInfoSmall = $row['paragraph_text']; //name of variable the will put in the index.php img tag
    }   
	elseif($row['paragraph_id'] == 4){ //select the paragraph that has the id of 4
		$serviceBrandInfoSmall = $row['paragraph_text']; //name of variable the will put in the index.php img tag
    }
}
//Index Services Medium/Large Text
$sql = "SELECT * FROM tbl_paragraph WHERE paragraph_type='Service Info' AND paragraph_size=2";  //here we want all the paragraphs with the type of service info and have a size of 2
$result = mysqli_query($link, $sql); //the result: the Service Info Paragraphs
while($row = mysqli_fetch_array($result)){ 
	if($row['paragraph_id'] == 6){ //select the paragraph that has the id of 6
		$servicePhotoSubtitleML = $row['paragraph_subtitle']; //variable name to put in index.php
		$servicePhotoInfoML = $row['paragraph_text']; //variable name to put in index.php
	}
	elseif($row['paragraph_id'] == 7){ //select the paragraph that has the id of 7
		$serviceGraphicsSubtitleML = $row['paragraph_subtitle']; //variable name to put in index.php
		$serviceGraphicsInfoML = $row['paragraph_text']; //variable name to put in index.php
    }   
	elseif($row['paragraph_id'] == 8){ //select the paragraph that has the id of 8
		$serviceBrandSubtitleML = $row['paragraph_subtitle']; //variable name to put in index.php
		$serviceBrandInfoML = $row['paragraph_text']; //variable name to put in index.php
    }
	elseif($row['paragraph_id'] == 9){ //select the paragraph that has the id of 9
		$serviceWebSubtitleML = $row['paragraph_subtitle']; //variable name to put in index.php
		$serviceWebInfoML = $row['paragraph_text']; //variable name to put in index.php
    }
}

$sql = "SELECT paragraph_text FROM tbl_paragraph WHERE paragraph_type='Contact Info'";
$result = mysqli_query($link, $sql); //the result: the Resume Info Paragraph
while($row = mysqli_fetch_array($result)){
	$contactInfo= $row['paragraph_text'];
}


//ABOUT PARAGRAPHS
$sql = "SELECT * FROM tbl_paragraph WHERE paragraph_type='About Para'"; //here we want all the small images selected in the images table
$result = mysqli_query($link, $sql); //the result: the About Paragraphs
while($row = mysqli_fetch_array($result)){ 
	if($row['paragraph_id'] == 10){ //select the paragraph that has the id of 10
		$aboutPara1 = $row['paragraph_text']; //name of variable the will put in the index.php img tag
	}
	elseif($row['paragraph_id'] == 11){ //select the paragraph that has the id of 11
		$aboutPara2 = $row['paragraph_text']; //name of variable the will put in the index.php img tag
    }   
	elseif($row['paragraph_id'] == 12){ //select the paragraph that has the id of 12
		$aboutPara3 = $row['paragraph_text']; //name of variable the will put in the index.php img tag
    }
	elseif($row['paragraph_id'] == 13){ //select the paragraph that has the id of 13
		$aboutPara4 = $row['paragraph_text']; //name of variable the will put in the index.php img tag
    }  
	elseif($row['paragraph_id'] == 14){ //select the paragraph that has the id of 14
		$aboutPara5 = $row['paragraph_text']; //name of variable the will put in the index.php img tag
    } 
	  }

$sql = "SELECT paragraph_text FROM tbl_paragraph WHERE paragraph_type='Resume Info'";
$result = mysqli_query($link, $sql); //the result: the Resume Info Paragraph
while($row = mysqli_fetch_array($result)){
	$resumeInfoPara = $row['paragraph_text'];
}
$sql = "SELECT images_photo FROM tbl_images WHERE images_phototype='resume'";
$result = mysqli_query($link, $sql); //the result: the Resume Info Paragraph
while($row = mysqli_fetch_array($result)){
	$chantelResume= $row['images_photo'];
}



//.............
	//attempting database link for 
	//$graphicSiteShow = "SELECT * FROM tbl_portfoliowork WHERE portfoliowork_type="graphic-image" AND portfoliowork_id=50";
	//$result = mysqli_query('$result');
//mysqli_close($link);

//attempting database link for the graphic icons click
//if(isset($GET{'filter'})){
	//$filter = $_GET['filter'];
	//$filterQuery = "SELECT p.portfoliowork_id, p.portfoliowork_img, p.portfoliowork_title, portfolio_desc
	//FROM tbl_portfoliowork p"
	//$filterQueryIcons = "SELECT * FROM tbl_portfoliowork WHERE portfoliowork_type="graphic-icons""
	
	
	//$getIcons = mysqli_query($link, $filterQueryIcons);
	
//}elseif(isset($_GET['id'])){
	//for one graphic icon 
	//$id = $_GET['id'];
	//$querySingleIcon = "SELECT * FROM tbl_portfoliowork WHERE portfoliowork_id={$id}";
	//$getIcons = mysqli($link, $querySingleIcon);
//}
  

$sql = "SELECT * FROM tbl_portfoliowork WHERE portfoliowork_type='photograph'";
$result = mysqli_query($link, $sql); //the result: the image from database query
   //$grpResult = "";
   //echo "[";
   while($row = mysqli_fetch_assoc($result)){ 
	$jsonResult = json_encode($row);
	$grpResult .= $jsonResult.",";
}
   //echo substr($grpResult, 0, -1);
   // echo "]";

   //mysqli_close($link);
?>
