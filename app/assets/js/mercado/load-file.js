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
  $('#example').DataTable({
      "language": {
          "url": "https://cdn.datatables.net/plug-ins/2.1.3/i18n/es-MX.json"
      },
      "ajax": {
          "url": "/MercadoController/getAll", // URL del endpoint en CodeIgniter
          "dataSrc": "" // Los datos están en el nivel raíz
      },
      "columns": [{
              "data": "nombre"
          }, // Ajusta los nombres de las columnas según tus datos
          {
              "data": "direccion"
          },
          {
              "data": "zona"
          },
          {
              "data": "horario"
          },
          {
              "data": "telefono"
          },
          {
              "data": null
          },
          {
              "data": null
          },
      ],
      columnDefs: [{
          targets: 5,
          data: 'download_link',
          render: function(data, type, row, meta) {
              const {
                  latitud,
                  longitud
              } = row;
              return `${latitud}, ${longitud}`;
          }
      }, {
          targets: 6,
          data: 'download_link',
          render: function(data, type, row, meta) {
              return '<a href="' + data + '">+ Mas</a>';
          }
      }]
  });
});
