<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  <div class="container-scroller">
  <?php include('inc/header.php');?>
	<div class="container-fluid page-body-wrapper">
  <?php include('inc/sidebar.php');?>
  <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Details</h4>
                  <p class="card-description">
                    
                  </p>
                  <?php
                  include_once('dbConfig.php');
                  $id = $_GET['edit'];
                  $sql = "SELECT * FROM tbl_room WHERE id = '$id'";
                  $query = $conn->query($sql);
                  while($row = mysqli_fetch_array($query))
                  {
                    $room_no = $row['room_no'];
                    $room_cat = $row['room_cat'];
                    $room_avail = $row['room_avail'];
                  }
                  ?>
                  <form class="forms-sample" action="updated.php" method="post">
                    <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $_GET['edit'];?>">
                    <label for="exampleInputUsername1">Room</label>
                    <select class="form-control" name="room_no">
                        <option>Select...</option>
                        <option <?php if ($room_no =='101'){echo "selected";}?>>101</option>
                        <option <?php if ($room_no =='102'){echo "selected";}?>>102</option>
                        <option <?php if ($room_no =='103'){echo "selected";}?>>103</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Category</label>
                      <select class="form-control" name="room_cat">
                        <option>Select...</option>
                        <option <?php if ($room_cat =='Deluxe Room'){echo "selected";}?>>Deluxe Room</option>
                        <option <?php if ($room_cat =='Single Room'){echo "selected";}?>>Single Room</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Availability</label>
                      <select class="form-control" name="room_avail">
                        <option>Select...</option>
                        <option <?php if ($room_avail =='Available'){echo "selected";}?>>Available</option>
                        <option <?php if ($room_avail =='Unavailable'){echo "selected";}?>>Unavailable</option>
                    </select>
                    </div>
                    <button type="submit" name="upd" class="btn btn-primary mr-2">Update</button>
                    <button type="submit" name="cancel" class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            </div>
  </div>
  <?php include('inc/footer.php');?>
  </div>
  </div>
  </div>
</body>
</html>