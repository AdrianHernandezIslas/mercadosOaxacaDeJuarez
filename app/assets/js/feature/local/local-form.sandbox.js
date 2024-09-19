const localFormSandbox = (() => {
  var $modalForm = null;
  var primaryKeyEntity = null;
  var $localFormElement = null;

  const setData = (data = {}, pk = null) => {
    console.log("se ejecutaron el set2")
    console.log(data)
    Object.keys(data).forEach((key) => {
      if(key==='id_giro'){
        key= "giroSelect"
      }else if(key==='id_mercado'){
        key="mercadoSelect"
      }

      const $input = document.getElementById(key);
      if ($input) {
        $input.value = data[key];
        if ($input.id === "giroSelect" && data.nombre_giro) {
          $input.value = data.id_giro;
          const selectedOption = Array.from($input.options).find(option => option.value === data.id_giro);
          if (selectedOption) {
            selectedOption.textContent = data.nombre_giro;
          }
        } else if ($input.id === "mercadoSelect" && data.nombre_mercado) {
          $input.value = data.id_mercado;
          const selectedOption = Array.from($input.options).find(option => option.value === data.id_mercado);
          if (selectedOption) {
            selectedOption.textContent = data.nombre_mercado;
          }
        }
      }
    });
    primaryKeyEntity = pk;
  };

  const _handlerForm = ($formElement) => {
    return async (event) => {
      event.preventDefault();
      _loadingBtn();
      const body = formUtil.toObject($formElement);
      const { status } = await (primaryKeyEntity === null
        ? localService.create(body)
        : localService.update(body, primaryKeyEntity));
      if (status === HttpCode.CREATED || status === HttpCode.OK) {
        localTableSandbox.reloadData();
        $modalForm = _getModalFormElement();
        $modalForm.hide();
        console.log("Modal ocultado");
        $formElement.reset();
      } else {
        alert("Error al procesar la peticion");
      }
      _loadingBtn(false);
    };
  };

  const _loadingBtn = (flag = true) => {
    $btnGuardar = document.getElementById("saveBtn");
    buttonLoaderSanbox.loading($btnGuardar, flag);
  };

  const _getModalFormElement = () => {
    if ($modalForm === null) {
      console.log("entre al if")
      $modalForm = new bootstrap.Modal(document.getElementById("localFormModal"), {
        keyboard: false, // Evita cerrar el modal con la tecla Esc
      });
    }
    return $modalForm;
  };

  const init = () => {
    $localFormElement = document.getElementById("formLocal");
    $localFormElement.addEventListener("submit", _handlerForm($localFormElement));
  };

  const fillGiroSelect = async () => {
    try {
      
      const response = await fetch(GiroConsts.SELECT.AJAX.url);
      if (!response.ok) {
        throw new Error('Error en la peticion');
      }
      const data = await response.json();
      const selectElement = document.getElementById("giroSelect");
  
      // Limpia las opciones existentes, excepto la primera
      selectElement.innerHTML = '';
  
      if (Array.isArray(data)) {
        data.forEach(item => {
          const option = document.createElement("option");
          option.value = item.id_giro;
          option.textContent = item.nombre;
          selectElement.appendChild(option);
        });
      }
    } catch (error) {
      console.error('Error rellenar select Giro:', error);
    }
  };
  

  const fillMercadoSelect = async () => {
    try {
      
      const response = await fetch(MercadoConsts.SELECT.AJAX.url);
      if (!response.ok) {
        throw new Error('Error en la peticion');
      }
      const data = await response.json();
      const selectElement = document.getElementById("mercadoSelect");
  
      selectElement.innerHTML = '';
  
      if (Array.isArray(data)) {
        data.forEach(item => {
          const option = document.createElement("option");
          option.value = item.id_mercado;
          option.textContent = item.nombre;
          selectElement.appendChild(option);
        });
      }
    } catch (error) {
      console.error('Error rellenar select Mercado:', error);
    }
  };

  document.addEventListener("DOMContentLoaded", () => {
    console.log("se ejecutaron los selects")
    fillGiroSelect();
    fillMercadoSelect();
  });


  
  

  return {
    setData,
    init,
    modalForm: _getModalFormElement,
  };
})();

localFormSandbox.init();



