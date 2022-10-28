<?php 
	$softArr = array('Coke' => 15, 'Sprite' => 20, "Royal" => 20, 'Pepsi' => 15, 'Mountain Dew' => 20);
	$sizesArr = array('Regular' => 'Regular', 'Up-size (add ₱5)' => 'Up-size', 'Jumbo (add ₱10)' => 'Jumbo');
?>
<!DOCTYPE html>
<head>
	<title>Vendo Machine</title>
</head>		
    <h1>Vendo Machine</h1>
	<body>

		<form method="post">
			
			<fieldset style="width: 400px;">
				<legend>Products:</legend>
				<?php  
					if(isset($softArr)){
						foreach ($softArr as $softKey => $softValue) {
							echo"<input type='checkbox' name='sodaCheck[". $softKey ."]' value='". $softValue ."'>
							<label>". $softKey." - ₱". $softValue ."</label><br>";
						}
					}
				?>
			</fieldset>

			<fieldset style="width: 400px;">
				<legend>Options:</legend>
				<label for="sizeSelect">Size</label>
				<select name="sizeSelect" id="sizeSelect">
					<?php  
						if (isset($sizesArr)) {
							foreach ($sizesArr as $sizesKey => $sizesValue) {
								echo"<option value='". $sizesValue ."'>". $sizesKey ."</option>";
							}
						}
					?>
				</select>

				<label for="txtQuantity">Quantity</label>
				<input type="number" name="txtQuantity" id="txtQuantity" min="0" max="100" value="0">
				<button type="submit" name="btnSubmit">Check Out</button>
			</fieldset>


		</form>
		<?php 		
			if (isset($_POST['btnSubmit'])) {

				if (isset($_POST['sizeSelect']) && isset($_POST['sodaCheck'])) {
					echo"<hr><h3>Purchase Summary:</h3>";

					$quantity = $_POST['txtQuantity'];
					$size = $_POST['sizeSelect'];
					$pop = $_POST['sodaCheck'];

					if ($quantity == 1) {
						$term = "piece";
					}
					else{
						$term = "pieces";
					}

					if ($size == 'Regular') {
						$addOn = 0;
					}
					elseif ($size == 'Up-size') {
						$addOn = 5;
					}
					elseif ($size == 'Jumbo') {
						$addOn = 10;
					}

					
					foreach ($pop as $popKey => $popValue) {
					echo"<ul>
							<li>". $quantity ." ". $term ." of ". $size ." ". $popKey ." amounting to ₱". $totalVal = 
								   intval($popValue) * intval($quantity) + ($addOn * intval($quantity)) .
							"</li>
						</ul>";
					}

					$itemsTotal = ($quantity * sizeof($pop));
					$grandTotal = (array_sum($pop) + $addOn * $quantity) * $quantity;

					echo"<label><b>Total number of items: </label>". $itemsTotal ."<br>";
					echo"<label><b>Total amount: </label>". $grandTotal;

				}
				else {
					echo"<hr>No selected product. Please try again.";
				}
			}
		?>
	</body>
</html>