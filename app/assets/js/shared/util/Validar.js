var Validar = (function(){
	var _getDateNow = function(){
			var dt = new Date();
			return (dt.getMonth()+1) + "/"+dt.getDate()+"/"+dt.getFullYear();
	};

	var _creaFechas = function (horaA,horaC){
			var dtA = new Date(_getDateNow()+' '+horaA+':00');
			var dtC = new Date(_getDateNow()+' '+horaC+':00');
			return{
				"apertura":dtA,
				"cierre" : dtC
			};
	};

	var _horas = function(hA,hC){
		var obj_hrs = _creaFechas(hA,hC);
		return (obj_hrs.apertura< obj_hrs.cierre) && (obj_hrs.apertura !== obj_hrs.cierre);
	};

	 var _numero = function(e){
        tecla = (document.all) ? e.keyCode : e.which;

	    //Tecla de retroceso para borrar, siempre la permite
	    if (tecla==8){
	        return true;
	    }
	        
	    // Patron de entrada, en este caso solo acepta numeros
	    patron =/[0-9]/;
	    tecla_final = String.fromCharCode(tecla);
	    return patron.test(tecla_final);
                           
    };

    var filter = function (__val__){
	    var preg = /^([0-9]+\.?[0-9]{0,10})$/; 
	    return preg.test(__val__);
	};

	var _filterFloat = function(evt,input){
	    var key = window.Event ? evt.which : evt.keyCode;    
	    var chark = String.fromCharCode(key);
	    var tempValue = input.value+chark;
	    if(key >= 48 && key <= 57){
	        if(filter(tempValue)===false){
	            return false;
	        }else{       
	            return true;
	        }
	    }else{
	          if(key == 8 || key == 13 || key == 0) {     
	              return true;              
	          }else if(key == 46){
	                if(filter(tempValue)=== false){
	                    return false;
	                }else{       
	                    return true;
	                }
	          }else{
	              return false;
	          }
	    }
	};



	return{
		"horas":_horas,
		"tipoNumero":_numero,
		"filterFloat":_filterFloat
	};

})();