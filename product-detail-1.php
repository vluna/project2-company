<?php
	$title = "Pork Loin"; 
	$description = "Pork Belly a Vancouver Meats product";
	include ("includes/header.html");
?>
<section id="product-detail">
	<p><a href="products.php">Products</a> > Pork Belly</p>
	<h1> Pork Belly </h1>
	<div class="grid">
		<div class="col-1of2">
			<img id="show-pork-belly-1" class="product-detail-image" src="img/pork-belly-1.png" alt="Image of raw pork belly">
			<img id="show-pork-belly-2" class="product-detail-image" src="img/pork-belly-2.png" alt="Image of cooked pork belly in squares">
			<img id="show-pork-belly-3" class="product-detail-image" src="img/pork-belly-3.png" alt="Image of cooked pork belly in ribs">
			<img id="show-pork-belly-4" class="product-detail-image" src="img/pork-belly-4.png" alt="Image of cooked pork belly">
			<div class="grid">
				<div class="col-1of1">
					<img id="pork-belly-1" class="product-detail-image-preview" src="img/pork-belly-1.png" alt="Image of raw pork belly">
					<img id="pork-belly-2" class="product-detail-image-preview" src="img/pork-belly-2.png" alt="Image of cooked pork belly in squares">
					<img id="pork-belly-3" class="product-detail-image-preview" src="img/pork-belly-3.png" alt="Image of cooked pork belly in ribs">
					<img id="pork-belly-4" class="product-detail-image-preview" src="img/pork-belly-4.png" alt="Image of cooked pork belly">
				</div>
			</div>
		</div>
		<div class="col-1of2">
			<div class="product-detail-content">
				<p> DESCRIPTION </p>
				<p>The pork belly delivers popular favourites such as bacon, pancetta and braised belly. You can also get premium fresh belly cuts, offering a mouth watering blend of lean and marbled layers of meat.</p>

				<p>Pork belly provides you will endless applications. The perfect balance of fat and lean provide ideal taste and texture regardless if you are curing your own in-house bacon or creating your own recipe or menu item. Our All-Natural attributes and Hampshire breed quality provides you with added consistency to make any recipe come to life. The skin is left on for added taste and a crispy exterior. If you have yet to adopt this culinary mainstay, it's time you should.</p>
			</div>
			<p class="product-price">C$7.28/kg</p>
			<a href="cart.php"> <button class="button-view-product">Add To Cart</button></a>
		</div>
	</div>	
</section>
<?php
	include ("includes/footer.html");
?>