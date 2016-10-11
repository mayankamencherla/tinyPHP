<?php
	namespace Resources\Views;
?>

<html>
	<head>
		<title>My tiny PHP assignment app</title>
		<link rel="stylesheet" type="text/css" href="css/layout.css">
	</head>
	<body>
		<h1>Welcome to Razorpay's link shortening website!</h1>
		<form action="shortURL" method="post">
			<div class="form-group">
				<div class="label">
					<label for="exampleInputURL">Enter a long URL to make tiny</label>
				</div>
				<div class="input">
					<input size="40" name="url" type="text" class="form-control" id="exampleInputURL" placeholder="Enter Long URL Here"><br>
				</div>
			</div>
			<div class="submit">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</form>
	<body>
</html>
