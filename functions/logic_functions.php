<?php

include_once("db_functions.php");
include_once("connection_string.php");
//include_once("enc_functions.php");

function checkSessionLogin()
{
	if(isset($_SESSION['user']))
	{
		header("location:index.php");
	}
}
function checkSessionIndex()
{
	if(!isset($_SESSION['user']))
	{
		header("location:login.php");
	}
}
function checkCredentials($eid, $pw)
{
	$con = $GLOBALS['dbh'];
	$select = "SELECT * FROM pwa_users WHERE eid = ?";
	$stmt = $con->prepare($select);
	$stmt->execute(array($eid));
	$res = $stmt->fetch(PDO::FETCH_ASSOC);
	$pw_db = $res['pw'];
	$id = $res['id'];
	if($pw == $pw_db)
	{
		$_SESSION['user'] = $id;
		header("location:../index.php");
	}
	else
	{
		header("location:../login.php?error=1");
	}
}
function logout()
{
	unset($_SESSION['user']);
	header("location:../login.php");
}

//buttons pressed
if(isset($_POST['btn_login']))
{
	$eid = $_POST['eid'];
	$pw = $_POST['pw'];
	checkCredentials($eid, $pw);
}
if(isset($_GET['logout']))
{
	logout();
}


?>