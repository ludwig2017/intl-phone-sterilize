var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
	$routeProvider
	.when("/", {
		templateUrl : "resources/views/home/"
	})
	.when("/country", {
		templateUrl : "resources/views/country/index.htm"
	})
	.when("/leads", {
		templateUrl : "resources/views/leads/index.php"
	});
});