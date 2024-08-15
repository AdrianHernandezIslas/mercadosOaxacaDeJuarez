const MercadoConsts = {
  TABLE: {
    COLUMMS: [
      {
        data: "nombre",
      }, // Ajusta los nombres de las columnas según tus datos
      {
        data: "direccion",
      },
      {
        data: "zona",
      },
      {
        data: "horario",
      },
      {
        data: "telefono",
      },
      {
        data: null,
      },
      {
        data: null,
      },
    ],
    AJAX: {
      url: "/MercadoController/getAll", // URL del endpoint en CodeIgniter
      dataSrc: "", // Los datos están en el nivel raíz
    },
    LANG_MX: {
      url: "https://cdn.datatables.net/plug-ins/2.1.3/i18n/es-MX.json",
    },
  },
};
