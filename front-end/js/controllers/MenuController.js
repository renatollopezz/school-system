function MenuController($scope,$injection,$location){
	this.scope = $scope;
	this.location= $location;
}

MenuController.prototype.dashboard = function(){
	this.location.path('/');
}

MenuController.prototype.modules = function(){
	this.location.path('/modules');
}