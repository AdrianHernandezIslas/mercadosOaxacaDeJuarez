/* (() => {
  const $fileForm = document.getElementById("fileForm");
  const idMercado = $fileForm.getAttribute("e-id");
  $fileForm.addEventListener("submit", async (event) => {
    event.preventDefault();
    const $fileInput = document.getElementById("foto");
    const file = $fileInput.files[0];
    const base64String = await apiFile.fileToBase64(file);
    const loadFile = await apiFile.load({file:base64String, destination:`/recurso/img/mercado_id_${idMercado}`});
  });
})(); */

$(document).ready(function() {
 
});
