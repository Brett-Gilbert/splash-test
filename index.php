<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="images/favicon.ico">

		<title>Test</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"
				rel="stylesheet"/>

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- jQuery -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js" type="text/javascript"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>
	</head>

	<body class="sfooter">
		<main class="sfooter-content">
			<div class=" container logo-search">
				<div class="logo text-center">
					<img class="logo-resize" src="images/abqueryname.png" alt="abquery logo">
				</div>
				<form class="col-sm-8 col-sm-offset-2">
					<div class="form-group">
						<label for="searchAddress" class="sr-only">Search an Albuqueruqe Address</label>
						<div class="input-group">
							<input id="searchAddress" name="searchAddress" type="text" class="form-control input-lg" placeholder="Enter an ABQ address"/>
							<div class="input-group-btn">
								<button class="btn btn-default btn-lg" type="button">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<video autoplay loop muted poster="images/screenshot.jpg" id="background">
				<source src="video/backgroundmovie.mp4" type="video/mp4">
			</video>
		</main>

		<footer class="text-center">
			<div class="container foot-content">
				<div class="row">
					<div class="col-md-4">
						<p class="text-muted copy">Copyright &copy; ABQuery 2017</p>
					</div>
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<a href="about-view.php"><p class="text-muted copy">About Us</p></a>
					</div>
				</div>
			</div>
		</footer>

	</body>

</html>