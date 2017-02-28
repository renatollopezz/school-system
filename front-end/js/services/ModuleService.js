function ModuleService($resource){
	var path = 'http://localhost:8000/modules';

	return $resource(path,{},{
		findAll:{
			url:path;
			method: "GET",
			isArray: true
		}

	});
}