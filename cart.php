<?php
	$title = "Cart"; 
	$description = "Cart page for Vanocouver Meets a fictional company for IAT339 Project 2";
	include ("includes/header.html");
?>
<section id="cart">
	<h1> Cart </h1>
	<div class="grid checkout-item">
		<div class='col-1of3'>
			<img class="product-detail-image" src="img/pork-side-ribs-1.png" alt="Image of raw pork side ribs">
			<h3>Pork Side Ribs </h3>
		</div>
		<div class="col-2of3">
			<div class="col-1of2-in">
				<h3> Quantity </h3>
				<input name="quantity" type="text" class="input-field" placeholder="1" id="name">
				<p>*In kilograms</p>
			</div>
			<div class="col-1of2-in">
				<h3> Price </h3>
				<h3 class="price-cart">C$10.87</h3>
				<p>*Includes shipping and taxes</p>
			</div>
		</div>
	</div>

	<h3 class="total-price"> Total C$10.87 </h3>
	<form action="checkout.php">
		<button class="button-submit">CHECKOUT</button>
	</form>
</section>
<?php
	include ("includes/footer.html");
?>