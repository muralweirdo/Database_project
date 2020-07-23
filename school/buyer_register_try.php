0<?php
	include "connect.php";

	//echo "You are here, you have a quiz?";
	$buyerNo = $_POST["txtBuyerno"];
	$fname = $_POST["txtFname"];
	$lname = $_POST["txtLname"];
	$phone = $_POST["txtPhone"];
	$qry = "INSERT INTO buyer VALUES('".$buyerNo."','".$lname."', '".$fname."', '".$phone."')";

	//echo $qry;
	if ($con->query($qry)) {
		$msg = "Buyer Registered";
	}
	else
		$msg = "Error!";

	header("Location:buyer_register.php?Message=$msg")
?>
