const mercadoFormSandbox = (() => {
  var $modalForm = null;
  var primaryKeyEntity = null;
  var $mercadoFormElement = null;

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
        ? mercadoService.create(body)
        : mercadoService.update(body, primaryKeyEntity));
      if (status === HttpCode.CREATED || status === HttpCode.OK) {
        mercadoTableSandbox.reloadData();
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
      $modalForm = new bootstrap.Modal(document.getElementById("mercadoFormModal"), {
        keyboard: false, // Evita cerrar el modal con la tecla Esc
      });
    }
    return $modalForm;
  };

  const init = () => {
    $mercadoFormElement = document.getElementById("formMercado");
    $mercadoFormElement.addEventListener("submit", _handlerForm($mercadoFormElement));
  };

  return {
    setData,
    init,
    modalForm: _getModalFormElement,
  };
})();

mercadoFormSandbox.init();
