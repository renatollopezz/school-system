function ModuleController($scope,$injector,$location,$window){
	this.scope = $scope;
	this.injector = $injector;
	this.scope.modules = new Array();
	this.scope.msgErro = "";
	this.service = this.injector.get('ModuleService');
	this.location = $location;
	this.window = $window;

	this.scope.module = {
        description:null, active:true, registration_date: null
    };


	this.findAll();
}
// locations Create, Edit, Remove, Search
ModuleController.prototype.create = function(){
	this.location.path('/module/create');
}
ModuleController.prototype.cancel = function(){
	this.location.path('/module');
}


// Insert, Update, Delete, Find
ModuleController.prototype.findAll = function(){
	this.service.findAll({},this.findAllSuccess.bind(this),this.findAllErro.bind());
}
ModuleController.prototype.findAllSuccess = function(response){
	this.scope.modules = response;
}
ModuleController.prototype.findAllErro = function(){
	this.msgErro = "Erro!";
}

ModuleController.prototype.save = function(){
	console.log(this.scope.module)
	this.service.save(this.scope.module,this.saveSuccess.bind(),this.saveErro.bind());
}
ModuleController.prototype.saveSuccess = function(){
	alert("Salvo com sucesso!");
}
ModuleController.prototype.saveErro = function(){
	alert("Erro ao salvar!");
}


ModuleController.prototype.remove = function(id){
	this.service.remove({id},this.removeSuccess.bind(),this.removeErro.bind());
}
ModuleController.prototype.removeSuccess = function(){
	alert("Removido com sucesso!");
}
ModuleController.prototype.removeErro = function(){
	alert("Erro ao remover!");
}
