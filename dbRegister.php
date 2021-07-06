<?php
include 'dbConfig.php';
session_start();
if(ISSET($_POST['login']))
{
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM tbl_users WHERE uname = '$uname' AND pwd = '$pwd'";
$query = $conn->query($sql);

if (mysqli_num_rows($query) > 0)
{
  $_SESSION['uname'] = $uname;
    echo "You Have Succssfully Login";
    header("location: dash.php");
	exit;
	
}
else
{
    echo "Error :" .$sql. "<br/>" .$conn->error;
}
}
?>