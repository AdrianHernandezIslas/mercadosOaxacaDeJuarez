var XHR = (function(){
	var _solicitud_get = function(obj_arg){
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = _atender_cambios_estado(xhr,obj_arg);
		xhr.open("GET",obj_arg.url,true);
		xhr.send();
	};

	var _atender_cambios_estado = function(xhr,obj_arg){
		return function(){
			if (xhr.readyState === 4) {
				if (xhr.status >= 200 && xhr.status <= 299) {
					obj_arg.exito(xhr);
				}else{
					obj_arg.fallo(xhr);
				}
			}
		}
	};

	return {
		"get":_solicitud_get
	};
})();