<!DOCTYPE html>
<html lang="en">
<head>

 </head>
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
                  <h4 class="card-title">ADD ROOM CATEGORY</h4>
                  <p class="card-description">
                    
                  </p>
                  <form class="forms-sample" action="dbRoomCat.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Category</label>
                      <select class="form-control" name="room_cat">
                        <option>Select...</option>
                        <option value="Deluxe Room">Deluxe Room</option>
                        <option value="Single Room">Single Room</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Price</label>
                      <select class="form-control" name="price">
                        <option>Select...</option>
                        <option value="100">100</option>
                        <option value="500">500</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Image</label><br/>
                      <input type="file" name="uploadfile" value=""/>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary mr-2">ADD</button>
                    <button class="btn btn-light">Clear</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Img</th>
                          <th>Room</th>
                          <th colspan="2" class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      include('dbConfig.php');
                      $sql1 = "SELECT * FROM tbl_category";
                      $query1 = $conn->query($sql1);
                      while($row = mysqli_fetch_array($query1)){?>
                        <tr>
                          <td><?php echo $row['id'];?></td>
                          <td><?php echo '<img src = "Image/'.$row['filename'].'" />'; ?></td>
                          <td>Name: <?php echo $row['room_cat'];?><br>
                              Price:<?php echo $row['price'];?>
                          </td>
                          <td><button type="button" data-id="<?php echo $row['id'];?>" class="btn btn-xs btn-primary userinfo" data-toggle="modal">VIEW</button></td>
                          <!--<td><a href="update.php?edit=<?php echo $row['id'];?>" class="btn btn-xs btn-primary">UPDATE</a></td>!-->
                          <!--<td><a href="delete.php?del=<?php echo $row['id'];?>" class="btn btn-xs btn-danger">DELETE</a></td>!-->
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
  </div>
  <?php include('inc/footer.php');?>
  </div>
  </div>
  </div>
  <div class="modal fade" id="empModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $('.userinfo').click(function(){
    var id = $(this).data('id');
    $.ajax({
      url: 'cat-updated.php',
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
