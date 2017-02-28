function MenuController($scope, $injector, $location, $window) {
    this.scope = $scope;
    this.injector = $injector;
    this.location = $location;
    this.window = $window;
    
}

MenuController.prototype.dashboard = function(){
	this.location.path('/');
};

MenuController.prototype.modules = function(){
	this.location.path('/module');
};

MenuController.prototype.students = function(){
	this.location.path('/students');
};

MenuController.prototype.disciplines = function(){
	this.location.path('/disciplines');
};

MenuController.prototype.groups = function(){
	;this.location.path('/groups');
}