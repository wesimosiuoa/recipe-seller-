
<!-- <body> -->

	<?php 
		include 'home-header.php'; 
		
	?>


	<!-- <div class="arrow">Find help<i class="fa fa-arrow-right"></i></div><br> -->

	<div id="body">
		<div class="message">
			<div class="display" style="color: black;">
				<div class="lineone">A Recipe -</div> IS A STORY <br> THAT <br>ENDS<br> WITH A<div class="below">GOOD MEAL.</div>
				<div class="got">We all eat, and it would be a sad waste of an opportunity to eat badly.<br>
				From recipe to appetizers, we've got you.</div>
				<button onclick="redirectToPurchase()"> <i class="fa-solid fa-cart-shopping"></i> Purchase Now</button>
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
	<script>
		function redirectToPurchase(){
			window.location.href="purchase-recipe.php";
		}
	</script>
