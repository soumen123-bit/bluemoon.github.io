<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
                  <?php
                  include_once('dbConfig.php');
                  if(isset($_POST['id'])){
                    $id = mysqli_real_escape_string($conn,$_POST['id']);
                    }
                  $sql = "SELECT * FROM tbl_room WHERE id = '$id'";
                  $query = $conn->query($sql);
                  while($row = mysqli_fetch_array($query))
                  {
                    $room_no = $row['room_no'];
                    $room_cat = $row['room_cat'];
                    $room_avail = $row['room_avail'];
                  }
                  ?>
                    <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $_GET['edit'];?>">
                    <label for="exampleInputUsername1">Room</label>
                    <select class="form-control" name="room_no" id="room_no">
                        <option>Select...</option>
                        <option <?php if ($room_no =='101'){echo "selected";}?>>101</option>
                        <option <?php if ($room_no =='102'){echo "selected";}?>>102</option>
                        <option <?php if ($room_no =='103'){echo "selected";}?>>103</option>
                        <option <?php if ($room_no =='104'){echo "selected";}?>>104</option>
                    </select>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Category</label>
                      <select class="form-control" name="room_cat" id="room_cat">
                        <option>Select...</option>
                        <option <?php if ($room_cat =='Deluxe Room'){echo "selected";}?>>Deluxe Room</option>
                        <option <?php if ($room_cat =='Single Room'){echo "selected";}?>>Single Room</option>
                    </select>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Availability</label>
                      <select class="form-control" name="room_avail" id="room_avail">
                        <option>Select...</option>
                        <option <?php if ($room_avail =='Available'){echo "selected";}?>>Available</option>
                        <option <?php if ($room_avail =='Unavailable'){echo "selected";}?>>Unavailable</option>
                    </select>
                    </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                      <label>Price</label>
                      <input type="text" name="room_price" class="form-control" placeholder="Enter Price">
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="cust_name" class="form-control" placeholder="Enter Name">
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="text" name="cust_phone" class="form-control" placeholder="Enter Contact No">
                    </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-3">
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" name="cust_address" class="form-control" placeholder="Enter Address">
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                      <label>Days</label>
                      <input type="text" name="days" class="form-control" placeholder="Enter Days">
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                      <label>Check-In</label>
                      <input type="datetime-local" name="in_time" value="<?php echo date('Y-m-d h:i:s');?>" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                      <label>Check-Out</label>
                      <input type="datetime-local" name="out_time" value="<?php echo date('Y-m-d h:i:s');?>" class="form-control">
                    </div>
                    </div>
                    
                    </div>
</body>
</html>