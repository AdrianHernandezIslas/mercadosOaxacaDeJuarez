const GiroConsts = {
  TABLE: {
    ORDER: [[0, 'asc']],
    COLUMMS: [
      {
        data: "nombre",
      }, // Ajusta los nombres de las columnas según tus datos
      {
        data: "activo",
      },
      {
        data: null,
      },
    ],
    AJAX: {
      url: "/GiroController/getAll", // URL del endpoint en CodeIgniter
      dataSrc: "", // Los datos están en el nivel raíz
    },
    LANG_MX: {
      url: "https://cdn.datatables.net/plug-ins/2.1.3/i18n/es-MX.json",
    },
  },
  SELECT: {
    AJAX: {
      url: "/GiroController/getAll", // URL del endpoint en CodeIgniter
    }
  },
  MESSAGE:{
    ELIMINAR: "¿Esta seguro que dese eliminar el elemento?"
  },
  ROUTE:{
    CREATE_GIRO:"/api/v1/giro"
  }
};
