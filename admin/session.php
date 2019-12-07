<?php
//Start session
session_start();
//Check whether the session variable SESS_mEmBER_ID is present or not
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	header("location:".host()."../index.php");
    exit();
}
$session_id=$_SESSION['id'];
$host="localhost";
		$uname="root";
		$pas="";
		$db_name="cman";
		$tbl_name="admin";
		
		$conn = mysqli_connect($host, $uname, $pas, $db_name);
$user_query = mysqli_query($conn,"select * from admin where admin_id = '$session_id'");
$user_row = mysqli_fetch_array($user_query);
$admin_username = $user_row['username'];
?>