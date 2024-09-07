const fileFormSandbox = (() => {
  let $form = null;
  var $modalForm = null;
  const _handlerUpload = async (event) => {
    event.preventDefault();
    const valid = $form.checkValidity();
    if (valid) {
      const formData = new FormData($form);
      const params = urlUtil.urlSearchParams();
      formData.append("id_locacion", params.get("locacion"));
      await fileService.upload(formData);
      await _getModalFormElement();
      $modalForm.hide();
      $form.reset();
      $form.classList.remove('was-validated');
    }else{
      $form.classList.add("was-validated");
    }
    
  };

  const _getModalFormElement = () => {
    if ($modalForm === null) {
      var $modal = document.getElementById('formLocalModal');
      $modalForm = bootstrap.Modal.getInstance($modal);
    }
    return $modalForm;
  };

  const init = () => {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    $form = document.getElementById("archivoForm");
    // Loop over them and prevent submission
    $form.addEventListener("submit", _handlerUpload);
  };

  return { init };
})();

fileFormSandbox.init();
