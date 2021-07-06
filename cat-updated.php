<?php
      include('dbConfig.php');
      if(isset($_POST['id'])){
      $id = mysqli_real_escape_string($conn,$_POST['id']);
      }
      //$id = $_POST['id'];
      $sql = "SELECT * FROM tbl_category WHERE id = $id";
      $result = $conn->query($sql);
      while($row = mysqli_fetch_array($result)){
      /*$response = '<div><table border="0" width="100%" cellspacing="5">';
      while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $room_cat = $row['room_cat'];
        $price = $row['price'];
        
        $response .="<tr>";
        $response .="<td>Room Category :</td><td>".$room_cat."</td>";
        $response .="</tr>";
        $response .="<tr>";
        $response .="<td>Price :</td><td>".$price."</td>";
        $response .="</tr>";

      }
      $response .="</table></div>";
    echo $response;*/?>
    <div class="form-group">
    Room Category: <?php echo $row['room_cat'];?>
    </div>
    <div class="form-group">
    Price: <?php echo $row['price'];?>
    </div>
    <div class="form-group">
    <?php echo '<img align="center" width="250px" height="250px" src = "Image/'.$row['filename'].'" />'; ?>
    </div>
    <?php
    }
  /*exit;*/
?>