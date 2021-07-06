<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
<link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
</head>
<body>
                  <?php
                  include_once('dbConfig.php');
                  if(isset($_POST['id'])){
                    $id = mysqli_real_escape_string($conn,$_POST['id']);
                    }
                  $sql = "SELECT * FROM tbl_checkin WHERE id = '$id'";
                  $query = $conn->query($sql);
                  while($row = mysqli_fetch_array($query))
                  {
                  ?>
                  <div>
                  <div><label class="font-weight-bold">Room No: </label><?php echo $row['room_no'];?></div>
                  <div><label class="font-weight-bold">Category :</label><?php echo $row['room_cat'];?></div>
                  <div><label class="font-weight-bold">Status :</label><?php echo $row['room_avail'];?></div>
                  <div><label class="font-weight-bold">Price :</label><i class="mdi mdi-currency-inr icon-sm"></i><?php echo $row['room_price'];?></div>
                  <div><label class="font-weight-bold">Name :</label><?php echo $row['cust_name'];?></div>
                  <div><label class="font-weight-bold">Phone :</label><?php echo $row['cust_phone'];?></div>
                  <div><label class="font-weight-bold">Address :</label><?php echo $row['cust_address'];?></div>
                  <div><label class="font-weight-bold">Check In :</label><?php echo $row['in_time'];?></div>
                  <div><label class="font-weight-bold">Check Out :</label><?php echo $row['out_time'];?></div>
                  <div><label class="font-weight-bold">Stays :</label><?php echo $row['days'];?></div>
                  <div><label class="font-weight-bold">Reference No. :</label><?php echo $row['reference'];?></div>
                  <div><label class="font-weight-bold">Total:</label> = 
                  <?php
                    $price = $row['room_price'];
                    $days = $row['days'];
                    echo '<i class="mdi mdi-currency-inr icon-sm"></i> '.$total = $price * $days.'';
                  ?>
                  </div>
                  </div>
                  <?php }?>
</body>
</html>