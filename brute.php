<?php

include_once("connection_string.php");

function getAllBucketClass()
{
	$con = $GLOBALS['dbh'];
	$select = "SELECT * FROM pwa_bucket_class";
	foreach($con->query($select) as $row)
	{
		$id = $row['id'];
		$class= $row['class_name'];

		echo "
			$id -> $class <br>
		";
	}
}






?>