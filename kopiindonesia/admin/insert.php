<?php
include "header.php";
?>
<title>Coffee Shop</title>
<form method="post" action="input.php">
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
      <td><input type="text" name="type"></td>
	  <td><input type="text" name="price"></td>
      <td>
		<input type="submit" value="Save">
	  </td>
    </tr>
	
  </tbody>
</table>
  </div>
</div>
</form>
<?php
include "footer.php";
?>