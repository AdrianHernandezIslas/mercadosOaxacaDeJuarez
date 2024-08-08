var Main = (function(){
	
	var ejecutar = function(){
		var horaA = document.getElementById("horaA").value;
		var horaC = document.getElementById("horaC").value;
		var resultado = Validar.horas(horaA,horaC);
		if(_noSelectec(document.getElementById('zona'),0)){
			alert('Selecciona La Zona');
			return false;
		}

		if(resultado){
			return resultado;
		}else{
			$('#exampleModalCenter').modal('show');
			return resultado;
		}
		
		return false;
	};

	var _noSelectec = function(elemento,valor){
		return elemento.selectedIndex === valor;
	};

	var _eliminar = function(idMercado){
		var btn = document.getElementById('btn-confirma');
		btn.setAttribute("onclick","Main.borrar("+idMercado+")");
		$('#exampleModalCenter').modal('show');
	};

	var _borrar = function(idMercado){
		$('#exampleModalCenter').modal('hide');
		window.location.replace("eliminar/"+idMercado);
	}
	
  return{
  	"ejecutar":ejecutar,
  	"eliminar":_eliminar,
  	"borrar":_borrar
  };

})();