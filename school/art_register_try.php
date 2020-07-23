<?php
	include "connect.php";

	//echo "You are here, you have a quiz?";
	$artId = $_POST["txtArtid"];
	$artistId = $_POST["txtArtistid"];
	$genre = $_POST["txtGenre"];
	$price = $_POST["numPrice"];
	$qry = "INSERT INTO art VALUES('".$artId."','".$artistId."', '".$genre."', ".$price.")";

	echo $qry;
	if ($con->query($qry)) {
		$msg = "Art Registered";
	}
	else
		$msg = "Error!";

	header("Location:art_register.php?Message=$msg")
?>
