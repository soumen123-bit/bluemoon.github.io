<?php
include 'dbConfig.php';
if(ISSET($_POST['login']))
{
$room_no = $_POST['room_no'];
$room_cat = $_POST['room_cat'];
$room_avail = $_POST['room_avail'];

$sql = "INSERT INTO tbl_room (`room_no`,`room_cat`,`room_avail`) VALUES ('$room_no','$room_cat','$room_avail')";
$query = $conn->query($sql);

if ($query)
{
    echo "You Have Succssfully Booked";
    header("location: rooms.php");
}
else
{
    echo "Error :" .$sql. "<br/>" .$conn->error;
}
}
?>