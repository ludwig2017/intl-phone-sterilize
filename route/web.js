var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
	$routeProvider
	.when("/", {
		templateUrl : "resources/views/home/index.htm"
	})
	.when("/country", {
		templateUrl : "resources/views/country/index.htm"
	})
	.when("/leads", {
		templateUrl : "app/controller/inc/leads/fetch.php"
	});
});