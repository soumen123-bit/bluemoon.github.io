<?php
include_once('dbConfig.php');
date_default_timezone_set('Asia/Kolkata');
if(isset($_POST['upd']))
                  {
                  
                  
                  $id = $_POST['id'];
                  $room_no = $_POST['room_no'];
                  $room_cat = $_POST['room_cat'];
                  $room_avail = $_POST['room_avail'];
                  $room_price = $_POST['room_price'];
                  $cust_name = $_POST['cust_name'];
                  $cust_phone = $_POST['cust_phone'];
                  $cust_address = $_POST['cust_address'];
                  $in_time = $_POST['in_time'];
                  $out_time = $_POST['out_time'];
                  $days = $_POST['days'];
                  //$reference = sha1(mt_rand(1, 90000) . 'SALT');

                  $today = date("Ymd");
                  $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
                  $reference = $today . $rand;

                  $sql = "INSERT INTO tbl_checkin (`room_no`, `room_cat`, `room_avail`, `room_price`, `cust_name`, `cust_phone`, `cust_address`, `in_time`,`out_time`,`days`, `reference`) VALUES ('$room_no', '$room_cat', '$room_avail', '$room_price', '$cust_name', '$cust_phone', '$cust_address', '$in_time', '$out_time', '$days', '$reference')";
                  $sql1 = "DELETE FROM tbl_room WHERE id ='$id'";
                  $query = $conn->query($sql);
                  $query1 = $conn->query($sql1);
                  if ($query && $query1)
                  {
                    echo "Update Successful";
                    header("location: check-in.php");
                  
                  }else
                  {
                    echo "Error :" .$sql. "<br/>" .$conn->error;
                  }
                  }
?>