
<?php
//includes all the admin script files that are listed in config file
   include_once("admin/scripts/admin/scripts/config.php");
   //include 'contact.html';
?>

<?php
require_once('admin/scripts/admin/script/config.php');
if(isset($_POST['name'])){
	echo"working";
	$direct = "thankyou.php";
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];
	$street = $_POST['street'];
	$message = $_POST['comment'];
	
	if($street === ""){
		echo "send mail";
		$sendMail = submitMessage($direct, $firstname, $lastname, $email, $comment);
	}
}
?>
