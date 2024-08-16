const tableMercado = (() => {
  const _handlerColumnDireccion = function (data, type, row, meta) {
    const { calle, numero, colonia, codigo_postal, municipio } = row;
    return `${calle} ${numero}, ${colonia} ${codigo_postal}, ${municipio} `;
  };

  const _handlerColumnCoordenadas = function (data, type, row, meta) {
    const { latitud, longitud } = row;
    return `${latitud}, ${longitud}`;
  };

  const _handlerColumnAcciones = function (data, type, row, meta) {
    return `<button type="button" class="btn btn-sm edit-btn">
              <i class="bi bi-pencil-fill text-success"></i>
            </button>
            <button type="button" class="btn btn-sm">
              <i class="bi bi-trash-fill text-warning"></i>
            </button>`;
  };

  const _getColumndDefs = () => {
    return [
      {
        targets: 1,
        data: "direccion",
        render: _handlerColumnDireccion,
      },
      {
        targets: 6,
        data: "download_link",
        render: _handlerColumnCoordenadas,
      },
      {
        targets: 7,
        data: "download_link",
        render: _handlerColumnAcciones,
      },
    ];
  };

  const _handlerEditAction = function () {
    const row = table.row($(this).parents("tr")); // Obtén el objeto de la fila
    const rowIdx = row.index(); // Obtén el índice de la fila
    var rowData = table.row(rowIdx).data();
    formMercado.setData(rowData);
    myModal.show();
  };

  const table = $("#example").DataTable({
    language: MercadoConsts.TABLE.LANG_MX,
    ajax: MercadoConsts.TABLE.AJAX,
    columns: MercadoConsts.TABLE.COLUMMS,
    columnDefs: _getColumndDefs(),
  });

  table.on("click", ".edit-btn", _handlerEditAction);

  var myModal = new bootstrap.Modal(document.getElementById("staticBackdrop"), {
    keyboard: false, // Evita cerrar el modal con la tecla Esc
  });

  return {};
})();
