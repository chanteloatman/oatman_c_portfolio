<?php
//connect to database
include('connect.php');

//..........................IMAGES FROM DATABASE...............................

//...........GENERAL MENU LOGOS...........
$sql = "SELECT * FROM tbl_main WHERE main_type='sitelogo'";//select all from tbl social that are small
$result = mysqli_query($link, $sql); //the result: the image
while($row = mysqli_fetch_array($result)){ 
	if($row['main_size'] == 1){$sitelogoSmall = $row['main_logo'];} //small logo
	elseif($row['main_size'] == 2){$sitelogoMedium = $row['main_logo'];} //medium logo
	elseif($row['main_size'] == 3){$sitelogoLarge = $row['main_logo'];} //large logo
}
//...........GENERAL SOCIAL MEDIA...........
//General Small Social Media
$sql = "SELECT * FROM tbl_social WHERE social_size=1";//select all from tbl social that are small
$result = mysqli_query($link, $sql); //the result: the image
while($row = mysqli_fetch_array($result)){ 
	if($row['social_id'] == 1){$socialLinkedinSmall = $row['social_icon'];} //linkedin small
	elseif($row['social_id'] == 4){$socialFacebookSmall = $row['social_icon'];} //facebook small
}
//General Medium Social Media
$sql = "SELECT * FROM tbl_social WHERE social_size=2";//select all from tbl social that are small
$result = mysqli_query($link, $sql); //the result: the image
while($row = mysqli_fetch_array($result)){ 
	if($row['social_id'] == 2){$socialLinkedinMedium = $row['social_icon'];} //linkedin medium
	elseif($row['social_id'] == 5){$socialFacebookMedium = $row['social_icon'];} //facebook medium
}
//General Large Social Media
$sql = "SELECT * FROM tbl_social WHERE social_size=3";//select all from tbl social that are small
$result = mysqli_query($link, $sql); //the result: the image
while($row = mysqli_fetch_array($result)){ 
	if($row['social_id'] == 3){$socialLinkedinLarge = $row['social_icon'];} //linkedin large
	elseif($row['social_id'] == 6){$socialFacebookLarge = $row['social_icon'];} //facebook large
}
//...........INDEX VIEW IMAGES...........
//Index Small ViewImages
$sql = "SELECT * FROM tbl_images WHERE images_size=1"; //here we want all the small images selected in the images table
$result = mysqli_query($link, $sql); //the result: the image
while($row = mysqli_fetch_array($result)){ 
	if($row['images_phototype'] == 'photography'){ //select images with phototype of photography
		$photoViewPhotoSmall = $row['images_photo']; //name of variable for in index.php in img tag
	}
	elseif($row['images_phototype'] == 'graphics'){ //select images with phototype of graphics
		$photoViewGraphicsSmall = $row['images_photo']; //name of variable for in index.php in img tag
    }   
	elseif($row['images_phototype'] == 'brand'){ //select images with phototype of brand
		$photoViewBrandSmall = $row['images_photo']; //name of variable for in index.php in img tag
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
//...........ABOUT PAGE HEADSHOT IMAGES...........
$sql = "SELECT * FROM tbl_images WHERE images_phototype='headshot'"; //here we want all the medium images selected in the images table
$result = mysqli_query($link, $sql); //the result: the image
while($row = mysqli_fetch_array($result)){ 
	if($row['images_size'] == 1){ $aboutHeadshotSmall = $row['images_photo'];} //small headshot
	elseif($row['images_size'] == 2){ $aboutHeadshotMedium = $row['images_photo'];} //medium headshot 
	elseif($row['images_size'] == 3){ $aboutHeadshotLarge = $row['images_photo'];} //large headshot
	}
//...........PORTFOLIO GALLERY IMAGES...........
//Selecting all the small images that are photographs, then each image by their title (to specifiy what small image to use), and then make specific variables to access content
$sql = "SELECT * FROM tbl_portfoliowork WHERE portfoliowork_size=1 AND portfolio_type = 'photograph'";
$result = mysqli_query($link, $sql); //the result: images, titles, descs, urls, notes
while($row = mysqli_fetch_array($result)){
	if($row['portfoliowork_title'] == 'Love of the Shadows'){ //if title is love of shadows
		$galleryRoseSmallImg = $row['portfoliowork_img']; //show small love of the shadows image
		$galleryRoseSmallTitle = $row['portfoliowork_title']; //show small love of the shadows title
		$galleryRoseSmallDesc = $row['portfoliowork_desc']; //show small love of the shadows desc
		$galleryRoseSmallNote = $row['portfoliowork_note']; //show small love of the shadows note
		//variable to use in index.php is in green (the one specific to what it's for, not the row), and the blue is the where getting the graphic or text from
	}
	elseif($row['portfoliowork_title'] == 'Logs of Time'){ //if title is logs of time
		$galleryLogsSmallImg = $row['portfoliowork_img']; //show small logs of time image
		$galleryLogsSmallTitle = $row['portfoliowork_title']; //show small logs of time title
		$galleryLogsSmallDesc = $row['portfoliowork_desc']; //show small logs of time desc
		$galleryLogsSmallNote = $row['portfoliowork_note']; //show small logs of time note
	}
	elseif($row['portfoliowork_title'] == 'The Heart of Nature'){ //if title is the heart of nature
		$galleryNatureSmallImg = $row['portfoliowork_img']; //show small the heart of nature image
		$galleryNatureSmallTitle = $row['portfoliowork_title']; //show small the heart of nature title
		$galleryNatureSmallDesc = $row['portfoliowork_desc']; //show small the heart of nature desc
		$galleryNatureSmallNote = $row['portfoliowork_note']; //show small the heart of nature note
	}
	elseif($row['portfoliowork_title'] == 'The Smiling Duck'){ //if title is the smiling
		$galleryDuckSmallImg = $row['portfoliowork_img']; //show small the the smiling duck image
		$galleryDuckSmallTitle = $row['portfoliowork_title']; //show small the the smiling duck title
		$galleryDuckSmallDesc = $row['portfoliowork_desc']; //show small the the smiling duck desc
		$galleryDuckSmallNote = $row['portfoliowork_note']; //show small the the smiling duck note
	}
	elseif($row['portfoliowork_title'] == 'Squirrel of Dreams'){ //if title is squirrel of dreams
		$gallerySquirrelSmallImg = $row['portfoliowork_img']; //show small squirrel of dreams image
		$gallerySquirrelSmallTitle = $row['portfoliowork_title']; //show small squirrel of dreams title
		$gallerySquirrelSmallDesc = $row['portfoliowork_desc']; //show small squirrel of dreams desc
		$gallerySquirrelSmallNote = $row['portfoliowork_note']; //show small squirrel of dreams note
	}
	elseif($row['portfoliowork_title'] == 'Beaneath the Makeup'){ //if title is beneath the makeup
		$galleryMakeupSmallImg = $row['portfoliowork_img']; //show small beneath the makeup image
		$galleryMakeupSmallTitle = $row['portfoliowork_title']; //show small beneath the makeup title
		$galleryMakeupSmallDesc = $row['portfoliowork_desc']; //show small beneath the makeup desc
		$galleryMakeupSmallUrl = $row['portfoliowork_url']; //show small beneath the makeup url
		$galleryMakeupSmallNote = $row['portfoliowork_note']; //show small beneath the makeup note
	}
}
//Selecting all the medium images that are photographs, then each image by their title (to specifiy what small image to use)
$sql = "SELECT * FROM tbl_portfoliowork WHERE portfoliowork_size=2 AND portfolio_type = 'photograph'";
$result = mysqli_query($link, $sql); //the result: images, titles, descs, urls, notes
while($row = mysqli_fetch_array($result)){
	if($row['portfoliowork_title'] == 'Love of the Shadows'){ //if the title of portfoliowork is love of shadows
		$galleryRoseMediumImg = $row['portfoliowork_img']; //show medium love of the shadows image
		$galleryRoseMediumTitle = $row['portfoliowork_title']; //show medium  love of the shadows title
		$galleryRoseMediumDesc = $row['portfoliowork_desc']; //show medium  love of the shadows desc
		$galleryRoseMediumNote = $row['portfoliowork_note']; //show medium  love of the shadows note
		//variable to use in index.php is in green (the one specific to what it's for, not the row), and the blue is the where getting the graphic or text from
	}
	elseif($row['portfoliowork_title'] == 'Logs of Time'){ //if title is logs of time
		$galleryLogsMediumImg = $row['portfoliowork_img']; //then show the medium logs of time image
		$galleryLogsMediumTitle = $row['portfoliowork_title']; //show medium logs of time title
		$galleryLogsMediumDesc = $row['portfoliowork_desc']; //show medium logs of time desc
		$galleryLogsMediumNote = $row['portfoliowork_note']; //show medium logs of time note
	}
	elseif($row['portfoliowork_title'] == 'The Heart of Nature'){ //if title is the heart of nature
		$galleryNatureMediumImg = $row['portfoliowork_img']; //show medium the heart of nature image
		$galleryNatureMediumTitle = $row['portfoliowork_title'];//show medium the heart of nature title
		$galleryNatureMediumDesc = $row['portfoliowork_desc']; //show medium the heart of nature desc
		$galleryNatureMediumNote = $row['portfoliowork_note']; //show medium the heart of nature note
	}
	elseif($row['portfoliowork_title'] == 'The Smiling Duck'){ //if title is the smiling duck
		$galleryDuckMediumImg = $row['portfoliowork_img']; //show medium the smiling duck image
		$galleryDuckMediumTitle = $row['portfoliowork_title']; //show medium the the smiling duck title
		$galleryDuckMediumDesc = $row['portfoliowork_desc']; //show medium the the smiling duck desc
		$galleryDuckMediumNote = $row['portfoliowork_note']; //show medium the the smiling duck note
	}
	elseif($row['portfoliowork_title'] == 'Squirrel of Dreams'){ //if title is squirrel of dreams
		$gallerySquirrelMediumImg = $row['portfoliowork_img']; //show medium squirrel of dreams image
		$gallerySquirrelMediumTitle = $row['portfoliowork_title'];//show medium squirrel of dreams title
		$gallerySquirrelMediumDesc = $row['portfoliowork_desc']; //show medium squirrel of dreams desc
		$gallerySquirrelMediumNote = $row['portfoliowork_note']; //show medium squirrel of dreams note
	}
	elseif($row['portfoliowork_title'] == 'Beaneath the Makeup'){ //if title is beneath the makeup
		$galleryMakeupMediumImg = $row['portfoliowork_img']; //show medium beneath the makeup image
		$galleryMakeupMediumTitle = $row['portfoliowork_title']; //show small beneath the makeup title
		$galleryMakeupMediumDesc = $row['portfoliowork_desc']; //show small beneath the makeup desc
		$galleryMakeupMediumUrl = $row['portfoliowork_url']; //show small beneath the makeup url
		$galleryMakeupMediumNote = $row['portfoliowork_note']; //show small beneath the makeup note
	}
}

//Selecting all the large images that are photographs, then each image by their title (to specifiy what small image to use)
$sql = "SELECT * FROM tbl_portfoliowork WHERE portfoliowork_size=3 AND portfolio_type = 'photograph'";
$result = mysqli_query($link, $sql); //the result: images, titles, descs, urls, notes
while($row = mysqli_fetch_array($result)){
	if($row['portfoliowork_title'] == 'Love of the Shadows'){ //if title is love of shadows
		$galleryRoseLargeImg = $row['portfoliowork_img']; //show large love of the shadows image
		$galleryRoseLargeTitle = $row['portfoliowork_title']; //show large  love of the shadows title
		$galleryRoseLargeDesc = $row['portfoliowork_desc']; //show large love of the shadows desc
		$galleryRoseLargeNote = $row['portfoliowork_note']; //show large  love of the shadows note
		//variable to use in index.php is in green (the one specific to what it's for, not the row), and the blue is the where getting the graphic or text from
	}
	elseif($row['portfoliowork_title'] == 'Logs of Time'){ //if title is logs of time
		$galleryLogsLargeImg = $row['portfoliowork_img']; //show large logs of time image
		$galleryLogsLargeTitle = $row['portfoliowork_title']; //show large logs of time title
		$galleryLogsLargeDesc = $row['portfoliowork_desc']; //show large logs of time desc
		$galleryLogsLargeNote = $row['portfoliowork_note']; //show large logs of time note
	}
	elseif($row['portfoliowork_title'] == 'The Heart of Nature'){ //if title is the heart of nature
		$galleryNatureLargeImg = $row['portfoliowork_img']; //show large the heart of nature image
		$galleryNatureLargeTitle = $row['portfoliowork_title'];//show large the heart of nature title
		$galleryNatureLargeDesc = $row['portfoliowork_desc']; //show large the heart of nature desc
		$galleryNatureLargeNote = $row['portfoliowork_note']; //show large the heart of nature note
	}
	elseif($row['portfoliowork_title'] == 'The Smiling Duck'){ //if title is the smiling duck
		$galleryDuckLargeImg = $row['portfoliowork_img']; //show large the smiling duck image
		$galleryDuckLargeTitle = $row['portfoliowork_title']; //show large the the smiling duck title
		$galleryDuckLargeDesc = $row['portfoliowork_desc']; //show large the the smiling duck desc
		$galleryDuckLargeNote = $row['portfoliowork_note']; //show large the the smiling duck note
	}
	elseif($row['portfoliowork_title'] == 'Squirrel of Dreams'){ //if title is squirrel of dreams
		$gallerySquirrelLargeImg = $row['portfoliowork_img']; //show large squirrel of dreams image
	    $gallerySquirrelLargeTitle = $row['portfoliowork_title'];//show large squirrel of dreams title
		$gallerySquirrelLargeDesc = $row['portfoliowork_desc']; //show large squirrel of dreams desc
		$gallerySquirrelLargeNote = $row['portfoliowork_note']; //show large squirrel of dreams note
	}
	elseif($row['portfoliowork_title'] == 'Beaneath the Makeup'){ //if title is beneath the makeup
		$galleryMakeupLargeImg = $row['portfoliowork_img']; //show large beneath the makeup image
		$galleryMakeupLargeTitle = $row['portfoliowork_title']; //show large beneath the makeup title
		$galleryMakeupLargeDesc = $row['portfoliowork_desc']; //show large beneath the makeup desc
		$galleryMakeupLargeUrl = $row['portfoliowork_url']; //show large beneath the makeup url
		$galleryMakeupLargeNote = $row['portfoliowork_note']; //show large beneath the makeup note
	}
}
//..............GRAPHIC ICONS (the ones you click to show lightbox)..............
//...........Graphic Icons Small...........
$sql = "SELECT * FROM tbl_portfoliowork WHERE portfoliowork_size=1 AND portfoliowork_type='graphic-icon'"; //here we want all the small graphic icons
$result = mysqli_query($link, $sql); //the result: the graphic icons
while($row = mysqli_fetch_array($result)){ 
	if($row['portfoliowork_title'] == 'Chantel Oatman - Logo'){ //select graphic with this title
		$graphicIconSitelogoSmall = $row['portfoliowork_img']; //name of variable to use in index.php img tag in green, and the blue is where getting the graphic from
	}
	elseif($row['portfoliowork_title'] == 'Chantel, Anything Arts - Logo Vector'){//if graphic has this title 
		$graphicIconArtsSmall = $row['portfoliowork_img']; //get the small arts icon
    }   
	elseif($row['portfoliowork_title'] == 'Graffiti Wonderland - Custom'){//if graphic has this title 
		$graphicIconGraffitiSmall = $row['portfoliowork_img']; //get the small graffiti icon 
    }
	elseif($row['portfoliowork_title'] == '"Flashback - Movies" - Icon'){//if graphic has this title 
		$graphicIconVhsSmall = $row['portfoliowork_img']; //get the small vhs icon 
    }
	elseif($row['portfoliowork_title'] == 'Dazzling Duck Tuxedos - Logo Vector'){//if graphic has this title 
		$graphicIconDuckSmall = $row['portfoliowork_img']; //get the small duck icon 
    }
	elseif($row['portfoliowork_title'] == 'Digital Tattoo - Custom'){//if graphic has this title 
		$graphicIconTattooSmall = $row['portfoliowork_img']; //get the small tattoo icon 
    }
	elseif($row['portfoliowork_title'] == 'Curious Cat - Logo'){//if graphic has this title 
		$graphicIconCatSmall = $row['portfoliowork_img']; //get the small cat icon 
    }
	elseif($row['portfoliowork_title'] == 'Turning Gears on Creativity - Custom'){//if graphic has this title 
		$graphicIconGearsSmall = $row['portfoliowork_img']; //get the small gears icon 
    }
}
//...........Graphic Icons Medium...........
$sql = "SELECT * FROM tbl_portfoliowork WHERE portfoliowork_size=2 AND portfoliowork_type='graphic-icon'"; //here we want all the medium graphic icons
$result = mysqli_query($link, $sql); //the result: the graphic icons
while($row = mysqli_fetch_array($result)){ 
	if($row['portfoliowork_title'] == 'Chantel Oatman - Logo'){ //select graphic with this title
		$graphicIconSitelogoMedium = $row['portfoliowork_img']; //name of variable to use in index.php img tag in green, and the blue is where getting the graphic from
	}
	elseif($row['portfoliowork_title'] == 'Chantel, Anything Arts - Logo Vector'){//if graphic has this title
		$graphicIconArtsMedium = $row['portfoliowork_img']; //get the medium arts icon
    }   
	elseif($row['portfoliowork_title'] == 'Graffiti Wonderland - Custom'){//if graphic has this title 
		$graphicIconGraffitiMedium = $row['portfoliowork_img']; //get the medium graffiti icon
    }
	elseif($row['portfoliowork_title'] == '"Flashback - Movies" - Icon'){//if graphic has this title 
		$graphicIconVhsMedium = $row['portfoliowork_img']; //get the medium vhs icon
    }
	elseif($row['portfoliowork_title'] == 'Dazzling Duck Tuxedos - Logo Vector'){//if graphic has this title 
		$graphicIconDuckMedium = $row['portfoliowork_img']; //get the medium duck icon
    }
	elseif($row['portfoliowork_title'] == 'Digital Tattoo - Custom'){//if graphic has this title 
		$graphicIconTattooMedium = $row['portfoliowork_img']; //get the medium tattoo icon
    }
	elseif($row['portfoliowork_title'] == 'Curious Cat - Logo'){//if graphic has this title 
		$graphicIconCatMedium = $row['portfoliowork_img']; //get the medium cat icon
    }
	elseif($row['portfoliowork_title'] == 'Turning Gears on Creativity - Custom'){//if graphic has this title 
		$graphicIconGearsMedium = $row['portfoliowork_img']; //get the medium gears icon
    }
}
//...........Graphic Icons Large...........
$sql = "SELECT * FROM tbl_portfoliowork WHERE portfoliowork_size=3 AND portfoliowork_type='graphic-icon'"; //here we want all the large graphic icons
$result = mysqli_query($link, $sql); //the result: the graphic icons
while($row = mysqli_fetch_array($result)){ 
	if($row['portfoliowork_title'] == 'Chantel Oatman - Logo'){ //select graphic with this title
		$graphicIconSitelogoLarge = $row['portfoliowork_img']; //name of variable to use in index.php img tag in green, and the blue is where getting the graphic from
	}
	elseif($row['portfoliowork_title'] == 'Chantel, Anything Arts - Logo Vector'){//if graphic has this title
		$graphicIconArtsLarge = $row['portfoliowork_img']; //get the large arts icon
    }   
	elseif($row['portfoliowork_title'] == 'Graffiti Wonderland - Custom'){//if graphic has this title
		$graphicIconGraffitiLarge = $row['portfoliowork_img']; //get the large graffiti icon
    }
	elseif($row['portfoliowork_title'] == '"Flashback - Movies" - Icon'){//if graphic has this title
		$graphicIconVhsLarge = $row['portfoliowork_img']; //get the large vhs icon
    }
	elseif($row['portfoliowork_title'] == 'Dazzling Duck Tuxedos - Logo Vector'){//if graphic has this title 
		$graphicIconDuckLarge = $row['portfoliowork_img']; //get the large duck icon
    }
	elseif($row['portfoliowork_title'] == 'Digital Tattoo - Custom'){//if graphic has this title 
		$graphicIconTattooLarge = $row['portfoliowork_img']; //get the large tattoo icon
    }
	elseif($row['portfoliowork_title'] == 'Curious Cat - Logo'){//if graphic has this title 
		$graphicIconCatLarge = $row['portfoliowork_img']; //get the large cat icon
    }
	elseif($row['portfoliowork_title'] == 'Turning Gears on Creativity - Custom'){//if graphic has this title
		$graphicIconGearsLarge = $row['portfoliowork_img']; //get the large gears icon
    }
}
//...........GRAPHIC / LIGHTBOX IMAGES...........
//Graphic Small Show Images
$sql = "SELECT * FROM tbl_portfoliowork WHERE portfoliowork_size=1 AND portfoliowork_type='graphic-image'"; //here we want all the small graphic titles, images, and descriptions for the lightbox
$result = mysqli_query($link, $sql); //the result: the graphic icons
while($row = mysqli_fetch_array($result)){ 
	if($row['portfoliowork_title'] == 'Chantel Oatman - Logo'){ //select graphic with this title
		$graphicTitleSitelogoSmall = $row['portfoliowork_title']; //graphic title
		$graphicImgSitelogoSmall = $row['portfoliowork_img']; //graphic image
		$graphicDescSitelogoSmall = $row['portfoliowork_desc']; //graphic description
		$graphicNoteSitelogoSmall = $row['portfoliowork_note']; //graphic note
		//variable to use in index.php img tag is in green, and the blue is the where getting the graphic or text from
	}
	elseif($row['portfoliowork_title'] == 'Chantel, Anything Arts - Logo Vector'){ 
		$graphicTitleArtsSmall = $row['portfoliowork_title']; //graphic title
		$graphicImgArtsSmall = $row['portfoliowork_img']; //graphic image
		$graphicDescArtsSmall = $row['portfoliowork_desc']; //graphic description
		$graphicUrlArtsSmall = $row['portfoliowork_url']; //graphic url (website link)
		$graphicNoteArtsSmall = $row['portfoliowork_note']; //graphic note
    }   
	elseif($row['portfoliowork_title'] == 'Graffiti Wonderland - Custom'){ 
		$graphicTitleGraffitiSmall = $row['portfoliowork_title']; //graphic title
		$graphicImgGraffitiSmall = $row['portfoliowork_img']; //graphic image
		$graphicDescGraffitiSmall = $row['portfoliowork_desc']; //graphic description
		$graphicNoteGraffitiSmall = $row['portfoliowork_note']; //graphic note
    }
	elseif($row['portfoliowork_title'] == '"Flashback - Movies" - Icon'){ 
		$graphicTitleVhsSmall = $row['portfoliowork_title']; //graphic title
		$graphicImgVhsSmall = $row['portfoliowork_img']; //graphic image
		$graphicDescVhsSmall = $row['portfoliowork_desc']; //graphic description
		$graphicNoteVhsSmall = $row['portfoliowork_note']; //graphic note
    }
	elseif($row['portfoliowork_title'] == 'Dazzling Duck Tuxedos - Logo Vector'){ 
		$graphicTitleDuckSmall = $row['portfoliowork_title']; //graphic title
		$graphicImgDuckSmall = $row['portfoliowork_img']; //graphic image
		$graphicDescDuckSmall = $row['portfoliowork_desc']; //graphic description
		$graphicNoteDuckSmall = $row['portfoliowork_note']; //graphic note
    }
	elseif($row['portfoliowork_title'] == 'Digital Tattoo - Custom'){ 
		$graphicTitleTattooSmall = $row['portfoliowork_title']; //graphic title
		$graphicImgTattooSmall = $row['portfoliowork_img']; //graphic image
		$graphicDescTattooSmall = $row['portfoliowork_desc']; //graphic description
		$graphicNoteTattooSmall = $row['portfoliowork_note']; //graphic note
    }
	elseif($row['portfoliowork_title'] == 'Curious Cat - Logo'){ 
		$graphicTitleCatSmall = $row['portfoliowork_title']; //graphic title
		$graphicImgCatSmall = $row['portfoliowork_img']; //graphic image
		$graphicDescCatSmall = $row['portfoliowork_desc']; //graphic description
		$graphicNoteCatSmall = $row['portfoliowork_note']; //graphic note
    }
	elseif($row['portfoliowork_title'] == 'Turning Gears on Creativity - Custom'){ 
		$graphicTitleGearsSmall = $row['portfoliowork_title']; //graphic title
		$graphicImgGearsSmall = $row['portfoliowork_img']; //graphic image
		$graphicDescGearsSmall = $row['portfoliowork_desc']; //graphic description
		$graphicNoteGearsSmall = $row['portfoliowork_note']; //graphic note
    }
}
//Graphic Medium Show Images
$sql = "SELECT * FROM tbl_portfoliowork WHERE portfoliowork_size=2 AND portfoliowork_type='graphic-image'"; //here we want all the medium graphic titles, images, and descriptions for the lightbox
$result = mysqli_query($link, $sql); //the result: the graphic icons
while($row = mysqli_fetch_array($result)){ 
	if($row['portfoliowork_title'] == 'Chantel Oatman - Logo'){ //select graphic with this title
		$graphicTitleSitelogoMedium = $row['portfoliowork_title']; //graphic title
		$graphicImgSitelogoMedium = $row['portfoliowork_img']; //graphic image
		$graphicDescSitelogoMedium = $row['portfoliowork_desc']; //graphic description
		//variable to use in index.php img tag is in green, and the blue is the where getting the graphic or text from
	}
	elseif($row['portfoliowork_title'] == 'Chantel, Anything Arts - Logo Vector'){ 
		$graphicTitleArtsMedium = $row['portfoliowork_title']; //graphic title
		$graphicImgArtsMedium = $row['portfoliowork_img']; //graphic image
		$graphicDescArtsMedium = $row['portfoliowork_desc']; //graphic description
    }   
	elseif($row['portfoliowork_title'] == 'Graffiti Wonderland - Custom'){ 
		$graphicTitleGraffitiMedium = $row['portfoliowork_title']; //graphic title
		$graphicImgGraffitiMedium = $row['portfoliowork_img']; //graphic image
		$graphicDescGraffitiMedium = $row['portfoliowork_desc']; //graphic description
    }
	elseif($row['portfoliowork_title'] == '"Flashback - Movies" - Icon'){ 
		$graphicTitleVhsMedium = $row['portfoliowork_title']; //graphic title
		$graphicImgVhsMedium = $row['portfoliowork_img']; //graphic image
		$graphicDescVhsMedium = $row['portfoliowork_desc']; //graphic description
    }
	elseif($row['portfoliowork_title'] == 'Dazzling Duck Tuxedos - Logo Vector'){ 
		$graphicTitleDuckMedium = $row['portfoliowork_title']; //graphic title
		$graphicImgDuckMedium = $row['portfoliowork_img']; //graphic image
		$graphicDescDuckMedium = $row['portfoliowork_desc']; //graphic description
    }
	elseif($row['portfoliowork_title'] == 'Digital Tattoo - Custom'){ 
		$graphicTitleTattooMedium = $row['portfoliowork_title']; //graphic title
		$graphicImgTattooMedium = $row['portfoliowork_img']; //graphic image
		$graphicDescTattooMedium = $row['portfoliowork_desc']; //graphic description
    }
	elseif($row['portfoliowork_title'] == 'Curious Cat - Logo'){ 
		$graphicTitleCatMedium = $row['portfoliowork_title']; //graphic title
		$graphicImgCatMedium= $row['portfoliowork_img']; //graphic image
		$graphicDescCatMedium = $row['portfoliowork_desc']; //graphic description
    }
	elseif($row['portfoliowork_title'] == 'Turning Gears on Creativity - Custom'){ 
		$graphicTitleGearsMedium = $row['portfoliowork_title']; //graphic title
		$graphicImgGearsMedium = $row['portfoliowork_img']; //graphic image
		$graphicDescGearsMedium = $row['portfoliowork_desc']; //graphic description
    }
}
//Graphic Large Show Images
$sql = "SELECT * FROM tbl_portfoliowork WHERE portfoliowork_size=3 AND portfoliowork_type='graphic-image'"; //here we want all the large graphic titles, images, and descriptions for the lightbox
$result = mysqli_query($link, $sql); //the result: the graphic icons
while($row = mysqli_fetch_array($result)){ 
	if($row['portfoliowork_title'] == 'Chantel Oatman - Logo'){ //select graphic with this title
		$graphicTitleSitelogoLarge = $row['portfoliowork_title']; //graphic title
		$graphicImgSitelogoLarge = $row['portfoliowork_img']; //graphic image
		$graphicDescSitelogoLarge = $row['portfoliowork_desc']; //graphic description
		//variable to use in index.php img tag is in green, and the blue is the where getting the graphic or text from
	}
	elseif($row['portfoliowork_title'] == 'Chantel, Anything Arts - Logo Vector'){ 
		$graphicTitleArtsLarge = $row['portfoliowork_title']; //graphic title
		$graphicImgArtsLarge= $row['portfoliowork_img']; //graphic image
		$graphicDescArtsLarge = $row['portfoliowork_desc']; //graphic description
    }   
	elseif($row['portfoliowork_title'] == 'Graffiti Wonderland - Custom'){ 
		$graphicTitleGraffitiLarge = $row['portfoliowork_title']; //graphic title
		$graphicImgGraffitiLarge= $row['portfoliowork_img']; //graphic image
		$graphicDescGraffitiLarge= $row['portfoliowork_desc']; //graphic description
    }
	elseif($row['portfoliowork_title'] == '"Flashback - Movies" - Icon'){ 
		$graphicTitleVhsLarge = $row['portfoliowork_title']; //graphic title
		$graphicImgVhsLarge = $row['portfoliowork_img']; //graphic image
		$graphicDescVhsLarge = $row['portfoliowork_desc']; //graphic description
    }
	elseif($row['portfoliowork_title'] == 'Dazzling Duck Tuxedos - Logo Vector'){ 
		$graphicTitleDuckLarge = $row['portfoliowork_title']; //graphic title
		$graphicImgDuckLarge = $row['portfoliowork_img']; //graphic image
		$graphicDescDuckLarge = $row['portfoliowork_desc']; //graphic description
    }
	elseif($row['portfoliowork_title'] == 'Digital Tattoo - Custom'){ 
		$graphicTitleTattooLarge = $row['portfoliowork_title']; //graphic title
		$graphicImgTattooLarge= $row['portfoliowork_img']; //graphic image
		$graphicDescTattooLarge = $row['portfoliowork_desc']; //graphic description
    }
	elseif($row['portfoliowork_title'] == 'Curious Cat - Logo'){ 
		$graphicTitleCatLarge = $row['portfoliowork_title']; //graphic title
		$graphicImgCatLarge = $row['portfoliowork_img']; //graphic image
		$graphicDescCatLarge= $row['portfoliowork_desc']; //graphic description
    }
	elseif($row['portfoliowork_title'] == 'Turning Gears on Creativity - Custom'){ 
		$graphicTitleGearsLarge = $row['portfoliowork_title']; //graphic title
		$graphicImgGearsLarge= $row['portfoliowork_img']; //graphic image
		$graphicDescGearsLarge = $row['portfoliowork_desc']; //graphic description
    }
}
//Branding Style Guides
$sql = "SELECT portfolio_img FROM tbl_portfoliowork WHERE portfoliowork_type='styleguide' "; //here we want all the styleguide pdfs
$result = mysqli_query($link, $sql); //the result: the graphic icons
while($row = mysqli_fetch_array($result)){ 
	if($row['portfoliowork_title'] == 'Flashback - StyleGuide'){//select styleguide with this title
		$brandStyleGuideChantel = $row['portfoliowork_img']; //chantel oatman styleguide pdf
		$brandStyleGuideFlash = $row['portfoliowork_img']; //flashback styleguide pdf
		$brandStyleGuideJeff = $row['portfoliowork_img']; //jeff designs styleguide pdf
		//variable to use in index.php img tag is in green, and the blue is the where getting the graphic or text from
	}
}
//Chantel Oatman Resume
$sql = "SELECT portfolio_img FROM tbl_portfoliowork WHERE portfoliowork_type='resume' "; //here we want my resume
$result = mysqli_query($link, $sql); //the result: the my resume
while($row = mysqli_fetch_array($result)){ 
	if($row['portfoliowork_title'] == 'resume'){//select resume with this title
		$chantelOatmanResume = $row['portfoliowork_img']; //get chantel oatman resume pdf
		//variable to use in index.php img tag is in green, and the blue is the where getting the graphic or text from
	}
}


//.......................TEXT FROM DATABASE............................
//..........INDEX SERVICES (TEXT)..........
//Index Services Info
//$sql = "SELECT paragraph_text FROM tbl_paragraph WHERE paragraph_id='1'";
//$result = mysqli_query($link, $sql);
//while($row = mysqli_fetch_array($result, $servicesInfo));

//.........ABOUT SERVICES INFO TEXT.........
$sql = "SELECT paragraph_text FROM tbl_paragraph WHERE paragraph_type='About Info'";
$result = mysqli_query($link, $sql); //the result: the Services Info Paragraph
while($row = mysqli_fetch_array($result)){
	$aboutServicesInfo= $row['paragraph_text'];
}
//...........INDEX SERVICES TEXT...........
//Index Services Small Text
$sql = "SELECT * FROM tbl_paragraph WHERE paragraph_type='Service Info' AND paragraph_size=1"; //here we want all the paragraphs with the type of service info that have a size of 1
$result = mysqli_query($link, $sql); //the result: the Service Info Paragraphs
while($row = mysqli_fetch_array($result)){ 
	if($row['paragraph_id'] == 2){ //select the paragraph that has the id of 2
		$servicePhotoInfoSmall = $row['paragraph_text']; //name of variable to put in index.php img tag
	}
	elseif($row['paragraph_id'] == 3){ //select the paragraph that has the id of 3
		$serviceGraphicsInfoSmall = $row['paragraph_text']; //name of variable to put in index.php img tag
    }   
	elseif($row['paragraph_id'] == 4){ //select the paragraph that has the id of 4
		$serviceBrandInfoSmall = $row['paragraph_text']; //name of variable to put in index.php img tag
    }
}
//Index Services Medium/Large (ML) Text
$sql = "SELECT * FROM tbl_paragraph WHERE paragraph_type='Service Info' AND paragraph_size=2";  //here we want all the paragraphs with the type of service info that have a size of 2
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
//...........CONTACT INFO TEXT...........
$sql = "SELECT paragraph_text FROM tbl_paragraph WHERE paragraph_type='Contact Info'";
$result = mysqli_query($link, $sql); //the result: the Resume Info Paragraph
while($row = mysqli_fetch_array($result)){
	$contactInfo= $row['paragraph_text'];
}
//...........ABOUT PAGE PARAGRAPHS...........
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
