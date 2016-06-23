<?php
	$title = "Cart"; 
	$description = "Cart page for Vanocouver Meets a fictional company for IAT339 Project 2";
	include ("includes/header.html");
?>
<section id="cart">
	<h1> Cart </h1>
	<div class="grid checkout-item">
		<div class='col-1of3'>
			<img class="product-detail-image" src="img/pork-side-ribs-4.png" alt="Image of raw pork side ribs">
		</div>
		<div class="col-2of3">
			<div class="col-1of2-in">
				<h3> Quantity </h3>
				<input name="quantity" type="text" class="input-field" placeholder="1" id="name">
				<p>*In kilograms</p>
			</div>
			<div class="col-1of2-in">
				<h3> Price </h3>
				<input name="quantity" type="text" class="input-field" placeholder="C$10.87" id="name" disabled>
				<p>*Includes shipping and taxes</p>
			</div>
		</div>
	</div>

	<h3 class="total-price"> Total C$10.87 </h3>
	<a href="checkout.php"><input type="submit" name="submit" value="CHECKOUT" class="button-submit"></a>
</section>
<?php
	include ("includes/footer.html");
?>