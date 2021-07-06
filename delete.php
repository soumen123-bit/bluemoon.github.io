<?php
include 'dbConfig.php';
if(ISSET($_GET['del']))
{
$id = $_GET['del'];
$sql = "DELETE FROM tbl_room WHERE id = $id";
$query = $conn->query($sql);
header('location: rooms.php');
}
?>