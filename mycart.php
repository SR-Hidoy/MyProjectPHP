<?php
include("header.php");
// session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Cart</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12  text-center border rounded bg-light mt-5">
				<h1>My CART</h1>
			</div>
			<div class="col-lg-9 mt-5">
				<table class="table">
				  <thead class="text-center">
				    <tr>
				      <th scope="col">Serial No.</th>
				      <th scope="col">Item Name</th>
				      <th scope="col">Item Price</th>
				      <th scope="col">Quantity</th>
				      <th scope="col">Total</th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody class="text-center">
				  <?php
				  $total=0;
				  	if(isset($_SESSION['cart']))
				  	{
				  			foreach($_SESSION['cart'] as $key => $value)
				  		{
				  			// print_r($value);
								$sr=$key+1;
				  			// $total = $total + $value['Price'];
				  			echo "
				  				<tr>
				  				<td>$sr</td>
				  				<td>$value[Item_name]</td>
				  				<td> $value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
				  				<td>
										<form action='manage_cart.php' method='POST'>
											<input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
											<input type='hidden' name='Item_name' value='$value[Item_name]'>
										</form>
									</td>

								<td class='itotal'></td>
				  				<td>
											<form action='manage_cart.php' method='POST'>
											<button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMVOE</button></td>
											<input type='hidden' name='Item_name' value='$value[Item_name]'>
											</from>
									<td>
				  				</tr>
				  			";
				  		}
				  	}


				  ?>

				  </tbody>
				</table>
			</div>
			<div class="col-lg-3 mt-5">
				<div class="border bg-light rounded p-4">
					<div class="border bg-light rounded p-2"> <h3 class="text-center">Grand Total  Taka</h3>

					</div>
					<div class="border bg-light rounded p-2 text-center"><h5 id="gtotal"></h5>

					</div>
					<br>
					<?php
						if (isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
					 ?>
					 <div class="">
						<form action="purchase.php" method="POST">
						<div class="from-group">
							<label>Full Name</label>
							<input type="text" name="fullname" class="form-control" required>
						</div>
						<div class="from-group">
							<label>Phone Number</label>
							<input type="number" name="phone_no" class="form-control" required>
						</div>
						<div class="from-group">
							<label>Address</label>
							<input type="text" name="address" class="form-control" required>
						</div>
						<br>
						<div class="form-check">
						  <input class="form-check-input" type="checkbox" name="pay_mod" value="COD" id="flexCheckChecked" checked>
						  <label class="form-check-label" for="flexCheckChecked">
						    Cash On Delivery
						  </label>
						</div>
						<!-- <input type="submit" class="btn btn-primary btn-block" name="purchase">Make Purchase</input> -->
						<button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
					</form>
					 </div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">

		var gt=0;
		var iprice=document.getElementsByClassName('iprice');
		var iquantity=document.getElementsByClassName('iquantity');
		var itotal=document.getElementsByClassName('itotal');
		var gtotal=document.getElementById('gtotal');

		function subTotal() {
			gt=0;

			for(i=0;i<iprice.length;i++){
				itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
				gt=gt+(iprice[i].value)*(iquantity[i].value);
			}
			gtotal.innerText=gt;
		}

		subTotal();

	</script>
</body>
</html>
