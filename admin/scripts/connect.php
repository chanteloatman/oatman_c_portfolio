<?php
//Set up for connection credentials below
$user = "   ";
$pass = "root"; //for Mac 
//$pass = ""; for PC
$url = "localhost";
$db = "db_portfolio"; //database name you want to access
	
//the line below combines information & stores in one link/line of code,"it creates us access to token our data"
$link = mysqli_connect($url, $pass, $db, "8889"); //note: the 4 numbers at the end is whatever your number is

//This is check connection with error screen, if connection isn't working, the message will show and it'll check for an error
if(mysqli_connect_errno()){
	printf("Connection failed: %s\n", mysqli_connect_errno());
	exit();
}
?>
