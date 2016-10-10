<html>
	<head>
		<title>My tiny PHP assignment app</title>
		<link rel="stylesheet" type="text/css" href="tinyPHP.css">
	</head>
	<body>
		<h1>Welcome to Razorpay's link shortening website!</h1>
		<?php

		/*
		|--------------------------------------------------------------------------
		| Create The Application
		|--------------------------------------------------------------------------
		|
		| First we need to get an application instance. This creates an instance
		| of the application / container and bootstraps the application so it
		| is ready to receive HTTP / Console requests from the environment.
		|
		*/

		$app = require __DIR__.'/../bootstrap/app.php';

		/*
		|--------------------------------------------------------------------------
		| Run The Application
		|--------------------------------------------------------------------------
		|
		| Once we have the application, we can handle the incoming request
		| through the kernel, and send the associated response back to
		| the client's browser allowing them to enjoy the creative
		| and wonderful application we have prepared for them.
		|
		*/

		$app->run();
		?>

		<form action="welcome.php" method="get">
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
