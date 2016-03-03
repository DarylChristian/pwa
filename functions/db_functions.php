<?php

session_start();
include_once("connection_string.php");
include_once("logic_functions.php");
date_default_timezone_set("Asia/Taipei");

error_reporting(E_ALL);
ini_set('display_errors', 1);

//for displays
function getBucketClasses()
{
	$con = $GLOBALS['dbh'];
	$status = 1;
	$select = "SELECT * FROM pwa_bucket_class WHERE status = $status ORDER BY id";

	echo "
	<!-- Modal content-->
     <div class=\"modal-content\">
        <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
         <h4 class=\"modal-title\">Add Buckets</h4>
         </div>
          <div class=\"modal-body\">
          <form action='' name='form_add_bucket' id='form_add_bucket' method=POST>
			Bucket Classification:
              <select name='bucket_class' id='bucket_class' class='form-control'> 
              	<option value=0>--Please select--</option>           
		";

	foreach($con->query($select) as $row)
	{
		$id = $row['id'];
		$class_name = $row['class_name'];

		echo "<option value=$id >$class_name</option>";
	}
	echo "
		</select>
		Bucket Name:
		<select class='form-control	' id=add_bucket_name name='add_bucket_name' disabled>
			<option value=''>--Please select--</option>
		</select>
		<div class='hidden_tf1 hidden'>
			Ticket Name:
			<input type='text' class='form-control' id='hidden_ticket_name' value='' name='hidden_ticket_name' />
		</div>
		<div class='hidden_tf2 hidden'>
			Ticket Stage:
			<!--<select name='ticket_stage' id='ticket_stage' class='form-control'>
				<option value=0 >--Please select a Ticket Stage--</option> -->
		";
			//getTicketStagesOption();
		echo "<div class='row'>";
		echo "<div class='col-md-4'>Stage 1
				<div class='checkbox'><label><input type=checkbox id=checkAll1 value='A'>Select All</label></div>";
			getTicketStagesByStage(1);
		echo "</div>";
		echo "<div class='col-md-4'>Stage 2
				<div class='checkbox'><label><input type=checkbox id=checkAll2 value='A'>Select All</label></div>";
			getTicketStagesByStage(2);
		echo "</div>";
		echo "<div class='col-md-4'>Stage 3
				<div class='checkbox'><label><input type=checkbox id=checkAll3 value='A'>Select All</label></div>";
			getTicketStagesByStage(3);
		echo "</div>";
		echo "</div>";

		echo "
			<!--</select> -->
		</div>
		
		
</div>
        <div class=\"modal-footer\">
        	<button type=\"submit\" name='submit_add_bucket' class=\"btn btn-primary disabled\" id='btn_add_bucket' >Add Bucket</button>
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </form>
        </div>
        </div>";
		
}
function getTicketStagesByStage($stage)
{
	$con = $GLOBALS['dbh'];
	$status = 1;
	$select = "SELECT * FROM pwa_ticket_stage WHERE stage = $stage AND status = $status";
	foreach($con->query($select) as $row)
	{
		$id = $row['id'];
		$stage_name = $row['name'];
		$stage_num = $row['stage'];
		$stage_class = "stage"."$stage_num";
		echo "<div class='checkbox'>
				<label>
					<input class=$stage_class type='checkbox' name='ticket_stage[]' value=$id >$stage_name
				</label>
			</div>";
	}

}
function getTicketStagesOption()
{
	$con = $GLOBALS['dbh'];
	$status = 1;
	$select = "SELECT * FROM pwa_ticket_stage WHERE status = $status";
	foreach($con->query($select) as $row)
	{
		$id = $row['id'];
		$stage_name = $row['name'];
		$stage_num = $row['stage'];
		echo "<option value=$id >$stage_name</option>";
	}
}
function getBucketClassNameById($id)
{
	$con = $GLOBALS['dbh'];
	$select = "SELECT * FROM pwa_bucket_class WHERE id = ?";
	$stmt = $con->prepare($select);
	$stmt->execute(array($id));
	$res = $stmt->fetch(PDO::FETCH_ASSOC);
	return $res['class_name'];
}
function getLiveBuckets($class, $status, $collapse_name)
{
	$live_user = $_SESSION['user'];
	$con = $GLOBALS['dbh'];
	$select = "SELECT * FROM pwa_personal_buckets WHERE class_id = $class AND author = $live_user AND status = $status ORDER BY stage_id";
	foreach($con->query($select) as $row)
	{
		$id = $row['id'];
		$class_id = $row['class_id'];
		$bucket_id = $row['bucket_id'];
		$type = $row['type'];
		$ticket_name = $row['ticket_name'];
		$bucket_class_name = strtolower(getBucketClassNameById($class));
		$class_mod = "$collapse_name"."$class";

		$select2 = "SELECT * FROM pwa_buckets WHERE id = ? AND status = ?";
		$stmt = $con->prepare($select2);
		$stmt->execute(array($bucket_id, $status));
		$res = $stmt->fetch(PDO::FETCH_ASSOC);
		$bucket_name = $res['bucket_name'];


		echo "
		<tr>  
            <td class=\"col-md-3 no_border zeroPadding\"><div class=\"collapse $class_mod align-me-right withPadding2\" >$bucket_name $ticket_name</div></td>
            <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><input type=\"text\" class=\"form-control numbersOnly\" disabled value=\"9\" /></div></td>
            <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><input type=\"text\" class=\"form-control numbersOnly\" name=\"time_entry\" /></div></td>
            <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><input type=\"text\" class=\"form-control numbersOnly\" name=\"time_entry\" /></div></td>
            <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><input type=\"text\" class=\"form-control numbersOnly\" name=\"time_entry\" /></div></td>
            <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><input type=\"text\" class=\"form-control numbersOnly\" name=\"time_entry\" /></div></td>
            <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><input type=\"text\" class=\"form-control numbersOnly\" name=\"time_entry\" /></div></td>
            <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><input type=\"text\" class=\"form-control numbersOnly\" name=\"time_entry\" /></div></td>
            <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><input type=\"text\" class=\"form-control numbersOnly\" name=\"time_entry\" /></div></td>
            <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><span class=\"glyphicon glyphicon-edit center \"></div></td>
        </tr>";
	}
}
function getTicketType($id)
{
	$con = $GLOBALS['dbh'];
	$select = "SELECT * FROM pwa_ticket_type WHERE id = ?";
	$stmt = $con->prepare($select);
	$stmt->execute(array($id));
	$res = $stmt->fetch(PDO::FETCH_ASSOC);
	return $res['name'];
}
function getStageName($id)
{
	$con = $GLOBALS['dbh'];
	$select = "SELECT * FROM pwa_ticket_stage WHERE id = ?";
	$stmt = $con->prepare($select);
	$stmt->execute(array($id));
	$res = $stmt->fetch(PDO::FETCH_ASSOC);
	return $res['name'];
}
function getLiveTicketHeader($ticket_type, $ticket_string)//$ticket_type= FOF = 1 etc.
{
	$con = $GLOBALS['dbh'];
	$live_user = $_SESSION['user'];
	$status = 1;
	$glo = 1;
	$ticket_num_cons = 6;
	$select = "SELECT * FROM pwa_tickets_added WHERE added_by = $live_user AND ticket_type = $ticket_type AND status = $status";
	foreach($con->query($select) as $row)
	{
		$id = $row['id'];
		$ticket_name = $row['ticket_name'];
		$ticket_type = $row['ticket_type'];
		$ticket_type_string = getTicketType($ticket_type);
		$class_mod = $ticket_string."$id";
		$class_mod_btn = $class_mod."btn";

		echo "
			<tr >
                  <td class='col-md-3'   data-toggle=\"collapse\"  data-target=\".$class_mod\" >$ticket_type_string $ticket_name</td>
                  <td colspan=9 class=\"color-gray col-md-9\">
                      <div class=\"align-me-right\"><div class=\"dropdown\">
                      <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                        <span class=\"caret\"></span>
                      </button>
                      <ul class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenu1\">
                        <li><a href=\"#\">Archive Bucket</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"#\">Delete Bucket</a></li>
                      </ul>
                    </div></div>
                  </td>
                </tr>

     			";
			//getLiveTicketBody($id, $class_mod);
     	$select2 = "SELECT * FROM pwa_personal_buckets WHERE ticket_name = $id ORDER BY stage_id";
     	foreach($con->query($select2) as $row2)
     	{
     		$id = $row2['id'];
			$stage_id = $row2['stage_id'];
			$stage_name = getStageName($stage_id);
			echo "
				<tr class=' no-border'>  
					
                   <td class=\"col-md-3 zeroPadding\"><div class=\"collapse $class_mod align-me-right withPadding2\" >$stage_name</div></td>
                   <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><input type=\"text\" class=\"form-control  numbersOnly\" disabled value=\"9\" /></div></td>
                   <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><input type=\"text\" class=\"form-control  numbersOnly\" name=\"time_entry\" /></div></td>
                   <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><input type=\"text\" class=\"form-control  numbersOnly\" name=\"time_entry\" /></div></td>
                   <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><input type=\"text\" class=\"form-control  numbersOnly\" name=\"time_entry\" /></div></td>
                   <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><input type=\"text\" class=\"form-control  numbersOnly\" name=\"time_entry\" /></div></td>
                   <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><input type=\"text\" class=\"form-control  numbersOnly\" name=\"time_entry\" /></div></td>
                   <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><input type=\"text\" class=\"form-control  numbersOnly\" name=\"time_entry\" /></div></td>
                   <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><input type=\"text\" class=\"form-control  numbersOnly\" name=\"time_entry\" /></div></td>
                   <td class=\"col-md-1 zeroPadding\"><div class=\"collapse $class_mod withPadding\" ><span class=\"glyphicon glyphicon-edit center withPadding2 \"></div></td>
                   
                   <!--
                   <td class=\"col-md-3 no_border\">$stage_name</td>
                   <td class=\"col-md-1\"><input type=\"text\" class=\"form-control no-border numbersOnly\" disabled value=\"9\" /></td>
                   <td class=\"col-md-1\"><input type=\"text\" class=\"form-control no-border numbersOnly\" name=\"time_entry\" /></td>
                   <td class=\"col-md-1\"><input type=\"text\" class=\"form-control no-border numbersOnly\" name=\"time_entry\" /></td>
                   <td class=\"col-md-1\"><input type=\"text\" class=\"form-control no-border numbersOnly\" name=\"time_entry\" /></td>
                   <td class=\"col-md-1\"><input type=\"text\" class=\"form-control no-border numbersOnly\" name=\"time_entry\" /></td>
                   <td class=\"col-md-1\"><input type=\"text\" class=\"form-control no-border numbersOnly\" name=\"time_entry\" /></td>
                   <td class=\"col-md-1\"><input type=\"text\" class=\"form-control no-border numbersOnly\" name=\"time_entry\" /></td>
                   <td class=\"col-md-1\"><input type=\"text\" class=\"form-control no-border numbersOnly\" name=\"time_entry\" /></td>
                   <td class=\"col-md-1\"><span class=\"glyphicon glyphicon-edit center \"></div></td>
                   -->
                 </tr>
                 
                ";
     	}
	}
	
}
function getLiveTicketBody($ticket_id, $class_mod)
{
	$con = $GLOBALS['dbh'];
	$select = "SELECT * FROM pwa_personal_buckets WHERE ticket_name = $ticket_id ORDER BY stage_id ASC";
	/*
	$stmt = $con->prepare($select);
	$stmt->execute(array($ticket_name));
	$res = $stmt->fetch(PDO::FETCH_ASSOC);
	*/
	foreach($con->query($select) as $row)
				$id = $row['id'];
				$stage_id = $row['stage_id'];
				$stage_name = getStageName($stage_id);
				echo "
					<tr>  
                    <td class=\"col-md-3 no_border\"><div class=\" $class_mod align-me-right \" >$stage_name</div></td>
                    <td class=\"col-md-1\"><div class=\"collapse $class_mod\" ><input type=\"text\" class=\"form-control no-border numbersOnly\" disabled value=\"9\" /></div></td>
                    <td class=\"col-md-1\"><div class=\"collapse $class_mod\" ><input type=\"text\" class=\"form-control no-border numbersOnly\" name=\"time_entry\" /></div></td>
                    <td class=\"col-md-1\"><div class=\"collapse $class_mod\" ><input type=\"text\" class=\"form-control no-border numbersOnly\" name=\"time_entry\" /></div></td>
                    <td class=\"col-md-1\"><div class=\"collapse $class_mod\" ><input type=\"text\" class=\"form-control no-border numbersOnly\" name=\"time_entry\" /></div></td>
                    <td class=\"col-md-1\"><div class=\"collapse $class_mod\" ><input type=\"text\" class=\"form-control no-border numbersOnly\" name=\"time_entry\" /></div></td>
                    <td class=\"col-md-1\"><div class=\"collapse $class_mod\" ><input type=\"text\" class=\"form-control no-border numbersOnly\" name=\"time_entry\" /></div></td>
                    <td class=\"col-md-1\"><div class=\"collapse $class_mod\" ><input type=\"text\" class=\"form-control no-border numbersOnly\" name=\"time_entry\" /></div></td>
                    <td class=\"col-md-1\"><div class=\"collapse $class_mod\" ><input type=\"text\" class=\"form-control no-border numbersOnly\" name=\"time_entry\" /></div></td>
                    <td class=\"col-md-1\"><div class=\"collapse $class_mod\" ><span class=\"glyphicon glyphicon-edit center \"></div></td>
                  </tr>
					";
			
}

//for insert, delete, update
function addBucket($b_class, $b_name, $ticket_name, $ticket_stage)
{
	$now = date("Y-m-d H:i:s");
	$status = 1;
	$live_user = $_SESSION['user'];
	if($ticket_name == "")
	{$type = 0;}else{$type=1;}
	$con = $GLOBALS['dbh'];
	$insert = "INSERT INTO pwa_personal_buckets (class_id, bucket_id, type, type2, stage_id, ticket_name, author, created_date, modified_by, modified_date, status) 
				VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = $con->prepare($insert);
	$stmt->execute(array($b_class, $b_name, $type, $b_name, $ticket_stage, $ticket_name, $live_user, $now, $live_user, $now, $status));
	header("location:index.php?page=home&add=success");
}
function getTicketId($ticket_name)
{
	$con = $GLOBALS['dbh'];
	$select = "SELECT * FROM pwa_tickets_added WHERE ticket_name = ?";
	$stmt = $con->prepare($select);
	$stmt->execute(array($ticket_name));
	$res = $stmt->fetch(PDO::FETCH_ASSOC);
	return $res['id'];
}
function addBucketTicket($b_class, $b_name, $ticket_name, $ticket_stage)
{
	$now = date("Y-m-d H:i:s");
	$status = 1;
	$live_user = $_SESSION['user'];
	if($ticket_name == "")
	{$type = 0;}else{$type=1;}
	$con = $GLOBALS['dbh'];
	$query_if_exist = "SELECT COUNT(*) FROM pwa_tickets_added WHERE ticket_name = ?";
	$stmt3 = $con->prepare($query_if_exist);
	$stmt3->execute(array($ticket_name));
	$num_rows = $stmt3->fetchColumn(); 
	$per_stage = explode(",", $ticket_stage);
	if($num_rows == 0)
	{
		
			$insert = "INSERT INTO pwa_tickets_added (ticket_name, ticket_type, added_by, created_date, modified_by, modified_date, status) 
						VALUES (?, ?, ?, ?, ?, ?, ?)";
			$stmt = $con->prepare($insert);
			$stmt->execute(array($ticket_name, $b_name, $live_user, $now, $live_user, $now, $status));
			$get_id = getTicketId($ticket_name);
		//adding the array of ticket stages
		foreach($per_stage as $s)
		{
			$insert2 = "INSERT INTO pwa_personal_buckets (class_id, bucket_id, type, type2, stage_id, ticket_name, author, created_date, modified_by, modified_date, status) 
						VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$stmt2 = $con->prepare($insert2);
			//$stmt2->execute(array($b_class, $b_name, $type, $b_name, $ticket_stage, $get_id, $live_user, $now, $live_user, $now, $status));			
			$stmt2->execute(array($b_class, $b_name, $type, $b_name, $s, $get_id, $live_user, $now, $live_user, $now, $status));			
		}
		header("location:index.php?page=home&add=success");
	}
	else
	{
		$get_id = getTicketId($ticket_name);
		foreach($per_stage as $s)
		{
			$insert2 = "INSERT INTO pwa_personal_buckets (class_id, bucket_id, type, type2, stage_id, ticket_name, author, created_date, modified_by, modified_date, status) 
						VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$stmt2 = $con->prepare($insert2);
			$stmt2->execute(array($b_class, $b_name, $type, $b_name, $s, $get_id, $live_user, $now, $live_user, $now, $status));			
		}
		header("location:index.php?page=home&add=success");
	}
		
}

//buttons pressed
if(isset($_POST['submit_add_bucket']))
{
	$b_class = $_POST['bucket_class'];
	if($b_class == 6)
	{
		$b_name = $_POST['add_bucket_name'];
		$ticket_name = $_POST['hidden_ticket_name'];
		//$ticket_stage[] = $_POST['ticket_stage'];
		$stage_list = implode(',', $_POST['ticket_stage']);
		//addBucketTicket($b_class, $b_name, $ticket_name, $ticket_stage);
		addBucketTicket($b_class, $b_name, $ticket_name, $stage_list);
	
	}else
	{
		$b_name = $_POST['add_bucket_name'];
		$ticket_name = $_POST['hidden_ticket_name'];
		$ticket_stage = $_POST['ticket_stage'];
		addBucket($b_class, $b_name, $ticket_name, $ticket_stage);
	}
}

?>