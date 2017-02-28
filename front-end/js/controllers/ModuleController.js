function ModuleController($scope,$injector,$location,$window){
	this.scope = $scope;
	this.injector = $injector;
	this.scope.modules = new Array();
	this.scope.msgErro = "";
	this.service = this.injector.get('ModuleService');

	this.findAll();
}

ModuleController.prototype.findAll = function(){
	this.service.findAll({},this.findAllSuccess.bind(this),this.findAllErro.bind());
}
ModuleController.prototype.findAllSuccess = function(response){
	this.scope.modules = response;
}
ModuleController.prototype.findAllErro = function(){
	this.msgErro = "Erro!";
}