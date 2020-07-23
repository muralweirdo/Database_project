<?php
	include "connect.php";

	//echo "You are here, you have a quiz?";
	$orderId = $_POST["txtOrderid"];
	$artistId = $_POST["txtArtistid"];
    $buyerId = $_POST["txtBuyerid"];
    $artId = $_POST["txtArtId"];
	$price = $_POST["numPrice"];
	$qry = "INSERT INTO sold VALUES('".$orderId."','".$artistId."', '".$buyerId."', '".$artId."', ".$price.")";

	echo $qry;
	if ($con->query($qry)) {
		$msg = "Sold";
	}
	else
		$msg = "Error!";

	header("Location:sold.php?Message=$msg")
?>
