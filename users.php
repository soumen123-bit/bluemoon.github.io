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
          <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
                <div class="card-body">
                <h4 class="card-title text-center">USER DETAILS</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Customer Name</th>
                          <th>Customer Phone</th>
                          <th>Customer Address</th>
                          <th>Check In Time</th>
                          <th>Check Out Time</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      include('dbConfig.php');
                      $sql1 = "SELECT * FROM tbl_checkin";
                      $query1 = $conn->query($sql1);
                      while($row = mysqli_fetch_array($query1)){
                      ?>
                        <tr>
                          <td><?php echo $row['cust_name'];?></td>
                          <td><?php echo $row['cust_phone'];?></td>
                          <td><?php echo $row['cust_address'];?></td>
                          <td><?php echo $row['in_time'];?></td>
                          <td><?php echo $row['out_time'];?></td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
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