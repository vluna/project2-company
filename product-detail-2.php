<?php
	$title = "Pork Loin"; 
	$description = "Pork Belly a Vancouver Meats product";
	include ("includes/header.html");
?>
<section id="product-detail">
	<p><a href="products.php">Products</a> > Pork Side Ribs</p>
	<h1> Pork Side Ribs </h1>
	<div class="grid">
		<div class="col-1of2">
			<img id="show-pork-side-ribs-1" class="product-detail-image" src="img/pork-side-ribs-1.png" alt="Image of raw pork belly">
			<img id="show-pork-side-ribs-2" class="product-detail-image" src="img/pork-side-ribs-2.png" alt="Image of cooked pork belly in squares">
			<img id="show-pork-side-ribs-3" class="product-detail-image" src="img/pork-side-ribs-3.png" alt="Image of cooked pork belly in ribs">
			<img id="show-pork-side-ribs-4" class="product-detail-image" src="img/pork-side-ribs-4.png" alt="Image of cooked pork belly">
			<div class="grid">
				<div class="col-1of1">
					<img id="pork-side-ribs-1" class="product-detail-image-preview" src="img/pork-side-ribs-1.png" alt="Image of raw pork belly">
					<img id="pork-side-ribs-2" class="product-detail-image-preview" src="img/pork-side-ribs-2.png" alt="Image of cooked pork belly in squares">
					<img id="pork-side-ribs-3" class="product-detail-image-preview" src="img/pork-side-ribs-3.png" alt="Image of cooked pork belly in ribs">
					<img id="pork-side-ribs-4" class="product-detail-image-preview" src="img/pork-side-ribs-4.png" alt="Image of cooked pork belly">
				</div>
			</div>
		</div>
		<div class="col-1of2">
			<div class="product-detail-content">
				<p> DESCRIPTION </p>
				<p>Pork side ribs are very flavorful and when cooked properly, their tenderness and juiciness can’t be beat. This versatile cut can be cooked various ways – grilled, barbecued, smoked or oven baked.</p>

				<p>Pork side ribs are less meaty and less expensive than back ribs. The cut doesn't include the upper rib area (e.g. the parts of the rib that are up in the back of the pig), but rather the sides and down into the belly. </p>
			</div>
			<p class="product-price">C$7.28/kg</p>
			<a href="cart.php"> <button class="button-view-product">Add To Cart</button></a>
		</div>
	</div>	
</section>
<?php
	include ("includes/footer.html");
?>