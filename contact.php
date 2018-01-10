
<?php
require_once('admin/script/config.php');
if(isset($_POST['name'])){
	echo"working";
	$direct = "thankyou.php";
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];
	$street = $_POST['street'];
	$message = $_POST['message'];
	
	if($street === ""){
		echo "send mail";
		$sendMail = submitMessage($direct, $firstname, $lastname, $email, $message);
	}
}



?>
