const buttonLoaderSanbox = (() => {
  const loading = ($btn, flag = true) => {
    const [$icon] = $btn.children;
    $icon.className = "";
    $btn.disabled = flag;
    if (flag) {
      $icon.className = "spinner-border spinner-border-sm";
    } else {
      $icon.className = "bi bi-plus-lg";
    }
  };
  return {
    loading,
  };
})();
