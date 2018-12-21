<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Your SEO Content goes here.">
	<meta name="keywords" content="Your SEO Keywords goes here.">
	<title>Int'l Phone Sterilizer</title>
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo/favicon-32x32.png">
	<link rel="stylesheet" href="bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="resources/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="public/css/custom.css">
	<script src="ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="ajax/libs/angularjs/1.6.9/angular-route.js"></script>
</head>
<body ng-app="myApp">
	<nav class="navbar navbar-inverse visible-xs">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#">
					<i class="glyphicon glyphicon-phone"></i>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#/!">Dashboard</a></li>
					<li><a href="#!country">Country</a></li>
					<li><a href="#!leads">Leads</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row content">
			<div class="col-sm-3 sidenav hidden-xs">
				<h2>
					<i class="glyphicon glyphicon-phone"></i>
					<b>International Phone Sterilizer</b>
				</h2>
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="#/!">Dashboard</a></li>
					<li><a href="#!country">Country</a></li>
					<li><a href="#!leads">Leads</a></li>
				</ul>
				<br>
			</div>
			<br>
			<div ng-view id="insidecontent" class="col-sm-9"></div>
		</div>
	</div>
	<script src="route/web.js"></script>
	<script src="resources/assets/js/script.js"></script>
	<script src="public/js/custom.js"></script>
</body>
</html>