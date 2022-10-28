<!DOCTYPE html>
<html>
<head>
	<title>Peys App</title>
</head>
	<body>
		<h2>Peys App</h2>
		<form method="post">
			<label for="rngImg">Select Photo Size:</label>
			<input type="range" name="rngImg" id="rngImg" min="10" max="50" step="10" value="">
			<br>
			<label for="clrBorder">Select Border Color:</label>
			<input type="color" name="clrBorder" id="clrBorder">
			<br>
			<button type="submit" name="btnProcess">Process</button>

        <?php  
			$imgSize = 30;
			$color = 'Black';

			if (isset($_POST['btnProcess'])) {
				$imgSize = $_POST['rngImg'];
				$color = $_POST['clrBorder'];
			}
		?>
        
		</form>
        <br>
		<img src="Img\Patrick.jpeg.JPG" alt="Patrick" width="<?php echo $imgSize; ?>%" border="5%" style="color:<?php echo $color; ?>">

	</body>
</html>