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
                <h4 class="card-title text-center">BOOKED ROOM STATUS</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Category</th>
                          <th>Room</th>
                          <th>Reference</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      include_once('dbConfig.php');
                      $sql1 = "SELECT * FROM tbl_checkin";
                      $query1 = $conn->query($sql1);
                      while($row = mysqli_fetch_array($query1)){
                      ?>
                        <tr>
                          <td><?php echo $row['id'];?></td>
                          <td><?php echo $row['room_cat'];?></td>
                          <td><?php echo $row['room_no'];?></td>
                          <td><?php echo $row['reference'];?></td>
                          <td><?php echo $row['room_avail'];?></td>
                          <td><button data-id="<?php echo $row['id'];?>" type="button" class="btn btn-xs btn-primary userinfo" data-toggle="modal" data-target="#exampleModal">
                          VIEW
                          </button></td>
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
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Checkout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button data-id="<?php echo $row['id'];?>" type="button" class="btn btn-primary userinfo1" data-toggle="modal" data-target="#exampleModal1">EDIT</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('.userinfo').click(function(){
    var id = $(this).data('id');
    $.ajax({
      url: 'edit1.php',
      type: 'post',
      data: {id:id},
      success: function(response) {
        $('.modal-body').html(response);
        //alert(response) ;
        $('#empModal').modal('show');
        
      }

    });
  });
});
</script>
</body>
</html>