<?php
	$title = "Checkout"; 
	$description = "Checkout page for Vanocouver Meets a fictional company for IAT339 Project 2";
	include ("includes/header.html");
?>
<section id="checkout">
	<h1> Checkout </h1>
	<div class="grid">
		<div class="col-1of2">
			<h2> Shipping Information </h2>
            <form method="post" action="">
                <input name="name" type="text" class="input-field" placeholder="First Name" id="name" > <input name="name" type="text" class="input-field" placeholder="Last Name" id="name"> 

                <input name="email" type="text" class="input-field" id="email" placeholder="Email">

                <input name="address" type="text" class="input-field" id="address" placeholder="Address Line 1">

                <input name="address" type="text" class="input-field" id="address" placeholder="Address Line 2">

                <input name="city" type="text" class="input-field" placeholder="City" id="city" > <input name="state" type="text" class="input-field" placeholder="State" id="state"> 

                <input name="country" type="text" class="input-field" placeholder="Country" id="country" required> <input name="postal-code" type="text" class="input-field" placeholder="Postal Code" id="postal-code">     
            </form>

            <h2> Credit Card Information </h2>
            <form method="post" action="">
                <input name="email" type="text" class="input-field" id="email" placeholder="Card Holder Name">

                <input name="address" type="text" class="input-field" id="address" placeholder="Card Holder Number">

                <input name="city" type="text" class="input-field" placeholder="Expiration Date" id="city" > <input name="state" type="text" class="input-field" placeholder="Security Number" id="state"> 

                <input type="submit" name="submit" value="SUBMIT ORDER" class="button-submit">
            </form>
		</div>
		<div class="col-1of2 order-summary">
			<h2> Order Summary </h2>
			<img class="product-detail-image" src="img/pork-side-ribs-4.png" alt="Image of raw pork side ribs">
			<div class="col-1of2-in">
				<h3> Quantity </h3>
				<input name="quantity" type="text" class="input-field" placeholder="1" id="name" disabled>
			</div>
			<div class="col-1of2-in">
				<h3> Price </h3>
				<input name="quantity" type="text" class="input-field" placeholder="C$10.87" id="name" disabled>
			</div>
		</div>
	</div>
</section>
<?php
	include ("includes/footer.html");
?>