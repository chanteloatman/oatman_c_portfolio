<?php

function redirect_to($location){
	if($location != NULL){
		header("Location: {$location}");
	}
}
function submitMessage($direct, $firstname, $lastname, $email, $comment){
	//echo "From submitMessage()";
	$to = "info@chanteloatman.com";
	$subject = "Message from user from hosting";
	$extra = "Reply to: ".$email;
	$msg = "First Name: ".$firstname. "/n/nLast Name: ".$lastname. "/n/nEmail: ".$email. "/n/nComment: ".$comment; //double line break is /n/n
	mail($to,$subject,$msg,$extra);
}

?>
