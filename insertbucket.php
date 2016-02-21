
<form action="" method="POST">
	Bucket Name:<input type="text" name="b_name" autofocus /><br>
	Bucket Class: <input type="text" name="b_class" value=5 /><br>
	<button type="submit" name="submit">Save</button>

<?php

date_default_timezone_set('Asia/Taipei');
$now = date("Y-m-d H:i:s");
include_once('connection_string.php');

	

	function insertBuckets($name, $class, $author, $date, $status)
	{
		$con = $GLOBALS['dbh'];
		$insert = "INSERT INTO pwa_buckets (bucket_name, class_id, author, created_date, 
											modified_by, modified_date, stage, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
		$stage = "";
		$stmt = $con->prepare($insert);
		$stmt->execute(array($name, $class, $author, $date, $author, $date, $stage, $author));
		header("location:insertbucket.php");

	}

	function displayBuckets()
	{
		$con = $GLOBALS['dbh'];
		$select = "SELECT * FROM pwa_buckets ORDER BY id";
		foreach($con->query($select) as $row)
		{
			$id = $row['id'];
			$name = $row['bucket_name'];
			$class = $row['class_id'];
			$author = $row['author'];
			$c_date = $row['created_date'];
			$m_by = $row['modified_by'];
			$m_date = $row['modified_date'];
			$stage = $row['stage'];
			$status = $row['status'];
			
			echo "
				$id. $name || $class || $author || $c_date || $m_by || $m_date || $stage || $status <br>
				";
		}
	}


	if(isset($_POST['submit']))
	{
		$name = $_POST['b_name'];
		$class = $_POST['b_class'];
		$author = 1;
		$date = $now;
		$status = 1;

		insertBuckets($name,$class,$author,$date,$status);
		
	}
	displayBuckets();
?>