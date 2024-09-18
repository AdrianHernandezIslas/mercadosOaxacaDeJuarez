const localFormSandbox = (() => {
  var $localForm = null;
  var primaryKeyEntity = null;
  var $localFormElement = null;

  const setData = (data = {}, pk = null) => {
    Object.keys(data).forEach((key) => {
      const $input = document.getElementById(key);
      if ($input) {
        $input.value = data[key];
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
  
      console.log(data)
      // Limpia las opciones existentes, excepto la primera
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



