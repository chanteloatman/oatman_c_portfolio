<?php

function redirect_to($location){
	if($location != NULL){
		header("Location: {$location}");
	}
}
function submitMessage($direct, $firstname, $lastname, $email, $message){
	//echo "From submitMessage()";
	$to = "chanteloatman@info.com";
	$subject = "Message from user from hosting";
	$extra = "Reply to: ".$email;
	$msg = "First Name: " .$firstname. "/n/nLast Name: ".$lastname."/n/nEmail: ".$email."/n/nMessage:".$message; //double line break is /n/n
	mail($to,$subject,$msg,$extra);
}

?>
