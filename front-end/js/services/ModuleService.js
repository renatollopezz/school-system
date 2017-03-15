function ModuleService($resource){
	var path = 'http://localhost:8000/modules';

	return $resource(path,{},{
		findAll:{
			url:path,
			method: "GET",
			isArray: true
		},
		save:{
			method:"POST",
			url:path+':modules'
		},
		remove:{
			method:'DELETE',
			url:path+'/:id'
		}

	});
};