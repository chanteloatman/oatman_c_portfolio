<?php
//Set up for connection credentials below
$user = "chanteloatman";
$pass = "chantel3347!P"; //for Mac 
//$pass = ""; for PC
$url = "mysqlcluster21.registeredsite.com";
$db = "db_cportfolio"; //database name you want to access
	
//the line below combines information & stores in one link/line of code,"it creates us access to token our data"
$link = mysqli_connect($url, $user, $pass, $db); //hosting, username, password, databasename

//This is check connection with error screen, if connection isn't working, the message will show and it'll check for an error
if(mysqli_connect_errno()){
	printf("Connection failed: %s\n", mysqli_connect_errno());
	exit();
}
?>
