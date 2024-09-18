const LocalConsts = {
  TABLE: {
    ORDER: [[0, 'asc']],
    COLUMMS: [
      {
        data: "nombre",
      }, // Ajusta los nombres de las columnas según tus datos
      {
        data: "clave",
      },
      {
        data: "eslogan",
      },
      {
        data: "telefono",
      },
      {
        data: "nombre_giro",
      },
      {
        data: "nombre_mercado",
      },
      {
        data: null,
      },
    ],
    AJAX: {
      url: "/LocalController/getAll", // URL del endpoint en CodeIgniter
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
    CREATE_LOCAL:"/api/v1/local"
  }
};
