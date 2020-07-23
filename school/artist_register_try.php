0<?php
	include "connect.php";

	//echo "You are here, you have a quiz?";
	$artistNo = $_POST["txtArtistno"];
	$fname = $_POST["txtFname"];
	$lname = $_POST["txtLname"];
	$phone = $_POST["txtPhone"];
	$qry = "INSERT INTO artist VALUES('".$artistNo."','".$lname."', '".$fname."', '".$phone."')";

	//echo $qry;
	if ($con->query($qry)) {
		$msg = "Artist Registered";
	}
	else
		$msg = "Error!";

	header("Location:artist_register.php?Message=$msg")
?>
