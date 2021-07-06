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
          <div class="col-md-8 grid-margin stretch-card">
          <div class="card">
                <div class="card-body">
                <h4 class="card-title text-center">CHECK IN DETAILS</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Category</th>
                          <th>Room</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      include('dbConfig.php');
                      $sql1 = "SELECT * FROM tbl_room WHERE room_avail = 'AVAILABLE'";
                      $query1 = $conn->query($sql1);
                      while($row = mysqli_fetch_array($query1)){
                      ?>
                        <tr>
                          <td><?php echo $row['id'];?></td>
                          <td><?php echo $row['room_cat'];?></td>
                          <td><?php echo $row['room_no'];?></td>
                          <td><?php echo $row['room_avail'];?></td>
                          <td><button data-id="<?php echo $row['id'];?>" type="button" class="btn btn-xs btn-primary userinfo" data-toggle="modal" data-target="#exampleModal">EDIT</button></td>
                          <!--<a href="edit.php?edit=<?php echo $row['id'];?>" class="btn btn-xs btn-primary">CHECK IN</a>!-->
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
        <button type="button" class="btn btn-xs btn-secondary" data-dismiss="modal">Close</button>
        <button data-id="<?php echo $row['id'];?>" type="button" class="btn btn-xs btn-primary edit-data" data-toggle="modal">EDIT</button>
      </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $('.userinfo').click(function(){
    var id = $(this).data('id');
    $.ajax({
      url: 'edit.php',
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
$(document).ready(function(){
$(document).on('click','.edit-data', function(){
    var id = $(this).attr("id");
    $.ajax({
      url: "updated.php",
      type="post",
      data: {id:id},
      dataType: "json",
      success: function(data){
        $('#room_no').val(data.room_no);
        $('#room_cat').val(data.room_cat);
        $('#room_avail').val(data.room_avail);
      }
    });
  });
});
</script>
</body>
</html>