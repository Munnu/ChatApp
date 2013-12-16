

<?php
/* This file inserts data from user into MySQL db. */

//connectivity stuff includes()
include('conf.php');

/* This function gets the ip address of the user */
function getIp() {
	$remote = $_SERVER["REMOTE_ADDR"];
	$remote = ip2long($remote);
	return $remote;
}

/* simple function to get the datetime */
function getDateTime() {
	$nowTime = date("Y-m-d H:i:s");
	return $nowTime;
}


// check to see if values exist
$username = isset($_POST['username']);
$message = isset($_POST['message']);
if ( ($username && $message) ) {
	// set data
	$username = $_POST['username']; 
	$message = $_POST['message'];

	// insert into database
	$nowTime = getDateTime();
	$userIp = getIp();
	$sql = "INSERT INTO shoutbox (id,username, message,date,ip) VALUES ('','$username','$message', '$nowTime', '$userIp') ";
	$result = mysqli_query($connection, $sql);	

   if($result){
   		echo " Data Inserted Successfully";
   } else {
    	echo " Data insert failed - ".mysqli_error($connection);
   }
} else {
  echo " Required fields are missing";
} 
 
// close the connection
mysqli_close($connection);

?>
