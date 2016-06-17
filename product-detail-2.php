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
			<img class="product-detail-image" src="img/placeholder-home-image.png" alt="Image description">
			<div class="grid">
				<div class="col-1of1">
					<img class="product-detail-image-preview" src="img/placeholder-home-image.png" alt="Image description">
					<img class="product-detail-image-preview" src="img/placeholder-home-image.png" alt="Image description">
					<img class="product-detail-image-preview" src="img/placeholder-home-image.png" alt="Image description">
				</div>
			</div>
		</div>
		<div class="col-1of2">
			<div class="product-detail-content">
				<p>Pork side ribs are very flavorful and when cooked properly, their tenderness and juiciness can’t be beat. This versatile cut can be cooked various ways – grilled, barbecued, smoked or oven baked.</p>

				<p>Pork side ribs are less meaty and less expensive than back ribs. The cut doesn't include the upper rib area (e.g. the parts of the rib that are up in the back of the pig), but rather the sides and down into the belly. </p>
			</div>
			<p class="product-price">C$7.28/kg</p>
			<a href="checkout.php"> <button class="button-view-product">Add To Cart</button></a>
		</div>
	</div>	
</section>
<?php
	include ("includes/footer.html");
?>