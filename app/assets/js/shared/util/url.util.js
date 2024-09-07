const urlUtil = (() => {
  const urlSearchParams = () => {
    // Paso 1: Obtener la URL actual
    const currentUrl = window.location.href;

    // Paso 2: Crear un objeto URL con la URL actual
    const url = new URL(currentUrl);

    // Paso 3: Crear un objeto URLSearchParams con la parte de la query
    return new URLSearchParams(url.search);
  };
  return {
    urlSearchParams,
  };
})();
