const alertModal = (() => {
  var $modalForm = null;
  var $contentMessage = null;
  var $icon = null;
  var $confirmBtn = null;
  const _icons = {
    info: "bi-info-circle",
    warning: "bi-exclamation-triangle",
    danger: "bi-exclamation-diamond",
  };

  const _color = {
    info: "text-primary",
    warning: "text-warning",
    danger: "text-danger",
  };

  const init = () => {
    $contentMessage = document.getElementById("contentMessage");
    $icon = document.getElementById("icon");
    $confirmBtn = document.getElementById("confirmBtn");
    $modalForm = new bootstrap.Modal(document.getElementById("modalConfirm"), {
      keyboard: false, // Evita cerrar el modal con la tecla Esc
    });
  };

  const show = (message = "Default Message", alertType = "info", callback = () => {}) => {
    $icon.classList.add(_icons[alertType]);
    $icon.classList.add(_color[alertType]);
    $contentMessage.innerText = message;
    $confirmBtn.addEventListener("click", async (event) => {
      buttonLoaderSanbox.loading($confirmBtn,true);
      await callback(event);
      buttonLoaderSanbox.loading($confirmBtn,false);
      $modalForm.hide();
    });
    $modalForm.show();
  };

  return {
    show,
    init,
  };
})();

document.addEventListener("DOMContentLoaded", function () {
  alertModal.init();
});
