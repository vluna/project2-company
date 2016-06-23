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
                <div class="col-1of2-in">
                	<input name="first-name" type="text" class="input-field" placeholder="First Name">
                </div>
                <div class="col-1of2-in">
                	<input name="last-name" type="text" class="input-field" placeholder="Last Name"> 
                </div>

                <input name="email" type="text" class="input-field" id="email" placeholder="Email">
				
				<input name="address-1" type="text" class="input-field" placeholder="Address Line 1">
                
                <input name="address-2" type="text" class="input-field" placeholder="Address Line 2">
                <div class="col-1of2-in">
                	<input name="city" type="text" class="input-field" placeholder="City">
                </div>
                <div class="col-1of2-in">
                	<input name="state" type="text" class="input-field" placeholder="State"> 
                </div>

                <div class="col-1of2-in">
                	<input name="country" type="text" class="input-field" placeholder="Country">
                </div>

                <div class="col-1of2-in">
                	<input name="postal-code" type="text" class="input-field" placeholder="Postal Code">     
                </div>

                <input name="number" type="text" class="input-field" placeholder="Phone Number">     
            </form>

            <h2 class="credit-card-title"> Credit Card Information </h2>
            <form method="post" action="">
                <input name="card-name" type="text" class="input-field" id="email" placeholder="Card Holder Name">

                <input name="card-number" type="text" class="input-field" id="address" placeholder="Card Holder Number">

                <div class="col-1of2-in">
                	<input name="expiration-date" type="text" class="input-field" placeholder="Expiration Date">
                </div>
                <div class="col-1of2-in">
                	<input name="security-number" type="text" class="input-field" placeholder="Security Number"> 
                </div>

                <input id="submit-order" type="submit" name="submit" value="SUBMIT ORDER" class="button-submit">
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