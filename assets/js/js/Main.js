var Main = (function(){
	var _main = function(){
		XHR.get({
			"url":"http://localhost/Mercado/mercados/r5da3dfd0dssw4hfohu9fdgrv14",
			"exito":function(respuesta){ _printObj(respuesta.responseText);},
			"fallo":function(respuesta){console.log(respuesta);}
		});
	};

	var _printObj = function(res){
		var mercados = ProcesadorJSON.toObject(res);
		for(let key in mercados ){
			for (var i = 0; i < mercados[key].length; i++) {
				_manipulaObj(mercados[key][i]);
			}
		}
	};

	var _manipulaObj = function(objeto){
		for(let key in objeto ){
			console.log(key+ " : "+objeto[key]);
		}
	}

	return{
		"main":_main
	};
})();