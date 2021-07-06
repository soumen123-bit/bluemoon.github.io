<?php
include_once('dbConfig.php');
                  if(isset($_POST['upd']))
                  {
                  $id = $_POST['id'];
                  $room_no = $_POST['room_no'];
                  $room_cat = $_POST['room_cat'];
                  $room_avail = $_POST['room_avail'];
                  $sql = "UPDATE tbl_room SET room_no = '$room_no', room_cat= '$room_cat', room_avail = '$room_avail' WHERE id = '$id'";
                  $query = $conn->query($sql);
                  if ($query)
                  {
                    echo "Update Successful";
                    header("location: rooms.php");
                  
                  }else
                  {
                    echo "Error :" .$sql. "<br/>" .$conn->error;
                  }
                  }
                  if(isset($_POST['cancel']))
                  {
                    header("location: rooms.php");
                  }
?>