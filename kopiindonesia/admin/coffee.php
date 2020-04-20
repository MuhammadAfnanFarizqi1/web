<?php
include "header.php";
?>
<title>Coffee Shop</title>
<div class="card" align="center">
  <div class="card-body">
    <table class="table">
  <thead>
  <a href="insert.php">INSERT DATA</a>
  <p></p>
  
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Type Coffee</th>
      <th scope="col">Price</th>
      <th scope="col">Option</th>
    </tr>
	<?php 
		include 'koneksi.php';
		$kopi = mysqli_query($koneksi,"SELECT * FROM kopi");
		$no = 1;		
		while($d = mysqli_fetch_array($kopi)){
			?>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $d['type']; ?></td>
      <td><?php echo $d['price']; ?></td>
      <td>
		<a href="edit.php?id=<?php echo $d['id']; ?>">Update</a>
		<a href="delete.php?id=<?php echo $d['id']; ?>"> Delete</a>
	  </td>
    </tr>
	<?php 
		}
		?>
  </tbody>
</table>
  </div>
</div>

<?php
include "footer.php";
?>