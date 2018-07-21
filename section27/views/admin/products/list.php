<?php include 'views/admin/common/header.php';?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List products</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
	      <div class="row">
	        <table class="table">
	          <thead>
	            <tr>
	              <th>STT</th>
	              <th>ID</th>
	              <th>Name</th>
	              <th>Image</th>
	              <th>Price</th>
	              <th>Function</th>							         
	            </tr>
	          </thead>
	          <tbody>
	          <?php
	            require_once './config/database.php';
	          	
	          	// $conn        = new ConnectDB();
	          	
	          	$stt         = 1;
	          	$server      = 'localhost';
	          	$username    = 'root';
	          	$password    = '';
	          	$database    = '18php02_mvc_oop_full';
	          	$conn        = new mysqli($server, $username, $password, $database);
	            $sql         = "SELECT * FROM products";
	            // thực thi câu $sql với biến conn lấy từ file connection.php
	            $query       = mysqli_query($conn,$sql);
	            while ($data = mysqli_fetch_array($query)) {
	          ?>
	            <tr>
	              <td><?php echo $stt++; ?></td>
	              <td><?php echo $data["id"]; ?></td>
	              <td><?php echo $data["name"]; ?></td>
	              <td><?php echo $data["image"]?></td>
	              <td><?php echo $data["price"]; ?></td>
	              <td>
              		<a href="edit_users.php?id=<?php echo $data["id"]; ?>">Sửa</a> 
              		<a href="delete_users.php?id=<?php echo $data["id"]; ?>">Xóa</a>
	              </td>
	            </tr>
	          <?php
	            }
	          ?>
	          </tbody>
	        </table>
	      </div>
	   </div>   							 
    </div>
</div>
<!-- /#page-wrapper -->
<?php include 'views/admin/common/footer.php';?>
