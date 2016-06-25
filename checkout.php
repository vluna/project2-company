<?php
	$title = "Checkout"; 
	$description = "Checkout page for Vanocouver Meets a fictional company for IAT339 Project 2";
	include ("includes/header.html");
?>
<section id="checkout">
    <div id="modal">
        <div class="modal-content">  
            <img src="img/icon/checkmark.png" width="45" height="45" alt="Green chemark indicating that the process was completed" class="checkmark-icon">
            <h2> Your order has been placed! </h2>
            <p>Thank you for contacting Vancouver Meats. We will get back to you shoortly. Meanwhile, please keep in touch with our social medias.</p>
            <div class="social-media-icons">
                <img src="img/icon/facebook-letter.png" width="15" height="25" alt="Facebook social media icon image">
                <img src="img/icon/twitter-logo.png" width="26" height="26" alt="Twitter social media icon image">
                <img src="img/icon/instagram-logo.png" width="26" height="26" alt="Instagram social media icon image">
            </div>
            <input name="submit" value="CLOSE" class="button-submit close">
        </div>
    </div>
	<h1> Checkout </h1>
	<div class="grid">
		<div class="col-1of2">
			<h2> Shipping Information </h2>
            <form method="post" action="">
                <div class="col-1of2-in">
                    <label>*First Name</label>
                	<input name="first-name" type="text" class="input-field">
                </div>
                <div class="col-1of2-in">
                    <label>*Last Name</label>
                	<input name="last-name" type="text" class="input-field"> 
                </div>

                <label>*Email</label>
                <input name="email" type="text" class="input-field" id="email">
				
                <label>*Address Line 1</label>
				<input name="address-1" type="text" class="input-field">
                
                <label>Address Line 2</label>
                <input name="address-2" type="text" class="input-field">

                <div class="col-1of2-in">
                    <label>*City</label>
                	<input name="city" type="text" class="input-field">
                </div>
                <div class="col-1of2-in">
                    <label>*State</label>
                	<input name="state" type="text" class="input-field"> 
                </div>

                <div class="col-1of2-in">
                    <label>*Country</label>
                	<input name="country" type="text" class="input-field">
                </div>

                <div class="col-1of2-in">
                    <label>*Postal Code</label>
                	<input name="postal-code" type="text" class="input-field">     
                </div>

                <label>*Phone Number</label>
                <input name="number" type="text" class="input-field">     

                <h2 class="credit-card-title"> Credit Card Information </h2>
                <label>*Card Holder Name</label>
                <input name="card-name" type="text" class="input-field">

                <label>*Card Number</label>
                <input name="card-number" type="text" class="input-field">

                <div class="col-1of2-in">
                    <label>*Expiration Date</label>
                	<input name="expiration-date" type="text" class="input-field">
                </div>
                <div class="col-1of2-in">
                    <label>*Security Number</label>
                	<input name="security-number" type="text" class="input-field"> 
                </div>

                <input id="close-button" name="submit" value="SUBMIT ORDER" class="button-submit">
            </form>
		</div>
		<div class="col-1of2 order-summary">
			<h2> Order Summary </h2>
            <h3 class="title-order-summary">Pork Side Ribs</h3>
			<img class="product-detail-image" src="img/pork-side-ribs-1.png" alt="Image of raw pork side ribs">
			<div class="col-1of2-in">
				<h3> Quantity </h3>
				<input name="quantity" type="text" class="input-field" placeholder="1" id="name">
			</div>
			<div class="col-1of2-in">
				<h3> Price </h3>
				<h3 class="price-checkout">C$10.87</h3>
			</div>
		</div>
	</div>
</section>
<?php
	include ("includes/footer.html");
?>