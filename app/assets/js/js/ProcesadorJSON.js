var ProcesadorJSON = (function(){
	var _toObject = function(text){
		return JSON.parse(text);
	}

	return{
		"toObject":_toObject
	};
})();