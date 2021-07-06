<?php
include 'dbConfig.php';
$msg ="";
if(ISSET($_POST['login']) && !empty($_FILES["uploadfile"]["name"]))
{
$allowTypes = array('jpg','png','jpeg','gif','pdf');
//$image = $_POST['image'];
$room_cat = $_POST['room_cat'];
$price = $_POST['price'];
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "image/".$filename;

if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $folder))
{
    echo "Success";
}
    $sql = "INSERT INTO tbl_category (`filename`,`room_cat`,`price`) VALUES ('$filename','$room_cat','$price')";
    $query = $conn->query($sql);
    $msg = "Image Uploaded Successfully";
    header("location: category.php");

}
?>