function ModuleController($scope,$injection,$location){
	this.scope = $scope;
	this.injection = $injection;
	this.scope.modules = new Array();
	this.scope.msgErro = "";
	this.service = this.injection.get('ModuleService');

}

ModuleService.prototype.findAll = function(){
	this.service.findAll({},this.findAllSuccess.bind(this),this.findAllErro.bind());
}
ModuleService.prototype.findAllSuccess = function(response){
	this.scope.modules = response;
}
ModuleService.prototype.findAllErro = function(){
	this.msgErro = "Erro!";
}