<!DOCTYPE html>
<html>

<head>
	<title>New Product Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../js/depositori.js"></script>
	<link rel="stylesheet" href="style.css">
</head>

<body onload="loadCookies()">
<div class="header">
		<h1>MFR Bouquet & Giftbox</h1>
		<p>Ordering System</p>
	</div>
	<div class="topnavbar">
		<a href="index.php">Home</a>
	</div>
		<div class="container">
		<div class="row">
				<div class="row">
					<div class="col-25">
						<label for="prname">Product Name</label>
					</div>
					<div class="col-75">
						<input type="text" id="prname" name="name" placeholder="Product Name">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="prtype">Product Type</label>
					</div>
					<div class="col-75">
						<input type="text" id="prtype" name="type" placeholder="Product Type">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="prprice">Product Price(RM)</label>
					</div>
					<div class="col-75">
						<input type="text" id="prprice" name="price" placeholder="Product Price">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="prqty">Product Quantity</label>
					</div>
					<div class="col-75">
						<input type="text" id="prqty" name="quantity" placeholder="Product Quantity">
					</div>
				</div>
				<div class = "form-group">
                    	<div class = "col-sm-3">
       						<label class = "control-label small" for = "file_img"> Image (jpg / png): </label> <input type = "file" name = "file_img">
     					</div>
				<div class="row">
					<div><input type="submit" value="Submit"></div>
				</div>
			</form>

		</div>

	</div>

</body>

</html>