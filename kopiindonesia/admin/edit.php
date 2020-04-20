<?php
include "header.php";
?>
<head>
<title>Coffee</title>
</head>
<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from kopi where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
<form method="post" action="update.php">
<div class="card" align="center">
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Type Coffee</th>
	  <th scope="col">Price</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>
	  <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
	  </td>
	  <td>
	  <input type="text" name="type" value="<?php echo $d['type']; ?>">
	  </td>
	 <td>
	 <input type="type" name="price" value="<?php echo $d['price']; ?>">
	 </td>
      <td>
		<input type="submit" value="Update">
	  </td>
    </tr>
	
  </tbody>
</table>
  </div>
</div>
</form>
<?php 
	}
	?>
<?php
include "footer.php";
?>