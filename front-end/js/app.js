//name and injections to project
var app = angular.module('app',['ngRoute','ngResource']);

//router defines
app.config(['$routeProvider',function($routeProvider){
	$routeProvider
		.when("/",{templateUrl:"html/templates/dashboard.html"})
		.when("/module",{templateUrl:"html/templates/module.html"})
		.when("/module/create",{templateUrl:"html/templates/module_create.html"})
	}
]);

//controllers define
app.controller('MenuController',MenuController);
app.controller('ModuleController',ModuleController);

//services define
app.service('ModuleService',ModuleService);