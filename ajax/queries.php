<?php

include_once("../connection_string.php");


	$con = $GLOBALS['dbh'];

	//bucket classes on modals Adding buckets.
	if(isset($_POST['b_class']))
	{
		$class = $_POST['b_class'];
		$con = $GLOBALS['dbh'];
		//checking if global or ticket work
		if($class == 6)
		{
			$t_id = array(); $t_name = array();
				$select = "SELECT id, name FROM pwa_ticket_type WHERE status = 1";
				foreach($con->query($select) as $row)
				{
					$result[] = array(
				      'id' => $row['id'],
				      'name' => $row['name'] );
				}
			echo json_encode($result);
		}
		else
		{
			$b_id = array(); $b_name = array();
			$select = "SELECT id, bucket_name FROM pwa_buckets WHERE class_id = $class AND status = 1";
			foreach($con->query($select) as $row)
			{
				$result[] = array(
			      'id' => $row['id'],
			      'name' => $row['bucket_name'] );
			}
			echo json_encode($result);
		}
	}





?>