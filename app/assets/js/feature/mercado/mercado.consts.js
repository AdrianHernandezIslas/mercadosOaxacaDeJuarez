const MercadoConsts = {
  TABLE: {
    ORDER: [[0, 'asc']],
    COLUMMS: [
      {
        data: "nombre",
      }, // Ajusta los nombres de las columnas según tus datos
      {
        data: null,
      },
      {
        data: "zona",
      },
      {
        data: "hora_apertura",
      },
      {
        data: "hora_cierre",
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
  MESSAGE:{
    ELIMINAR: "¿Esta seguro que dese eliminar el elemento?"
  },
  ROUTE:{
    CREATE_MERCADO:"/api/v1/mercado"
  }
};
