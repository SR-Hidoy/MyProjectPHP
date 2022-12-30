<?php include("header.php");

// session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
	<?php
		// print_r($_SESSION['cart'])

	?>
<div class="container">


	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card">
					  <img src="images/img1.jpg" class="card-img-top" alt="...">
					  <div class="card-body text-center">
					    <h5 class="card-title">Msi Laptop</h5>
					    <p class="card-text" >Price : 20,000 Taka</p>
					    <button class="btn btn-info" name="Add_To_Cart" type="submit">Add To Cart</button>
					    <input type="hidden" name="Item_name" value="Msi Laptop">
					    <input type="hidden" name="Price" value="20000">
					  </div>
					</div>
				</form>
			</div>

			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card">
					  <img src="images/img2.jpg" class="card-img-top" alt="...">
					  <div class="card-body text-center">
					    <h5 class="card-title">Monitor</h5>
					    <p class="card-text"  >Price : 10,000 Taka</p>
					    <button class="btn btn-info" name="Add_To_Cart" type="submit">Add To Cart</button>
					    <input type="hidden" name="Item_name" value="Monitor">
					    <input type="hidden" name="Price" value="10000">
					  </div>
					</div>
				</form>
			</div>

			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card">
					  <img src="images/img3.jpg" class="card-img-top" alt="...">
					  <div class="card-body text-center">
					    <h5 class="card-title">Mobile</h5>
					    <p class="card-text" >Price : 5,000 Taka</p>
					    <button class="btn btn-info" name="Add_To_Cart" type="submit">Add To Cart</button>
					    <input type="hidden" name="Item_name" value="Mobile">
					    <input type="hidden" name="Price" value="5000">
					  </div>
					</div>
				</form>
			</div>

			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card">
					  <img src="images/img4.jpg" class="card-img-top" alt="...">
					  <div class="card-body text-center">
					    <h5 class="card-title">HeadPhone</h5>
					    <p class="card-text" >Price : 8,000 Taka</p>
					    <button class="btn btn-info" name="Add_To_Cart" type="submit">Add To Cart</button>
					    <input type="hidden" name="Item_name" value="HeadPhone">
					    <input type="hidden" name="Price" value="8000">
					  </div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
