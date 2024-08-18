const { MESSAGE } = MercadoConsts;

const mercadoTableSandbox = (() => {
  var table = null;
  const _handlerColumnDireccion = function (data, type, row, meta) {
    const { calle, numero, colonia, codigo_postal, municipio } = row;
    return `${calle} ${numero}, ${colonia} ${codigo_postal}, ${municipio} `;
  };

  const _handlerColumnCoordenadas = function (data, type, row, meta) {
    const { latitud, longitud } = row;
    return `${latitud}, ${longitud}`;
  };

  const _handlerColumnAcciones = function (data, type, row, meta) {
    return `
    <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Editar">
       <button type="button" class="btn btn-sm edit-btn">
          <i class="bi bi-pencil-fill text-success"></i>
       </button>
    </span>
     <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Eliminar">
        <button type="button" class="btn btn-sm delete-btn">
          <i class="bi bi-trash-fill text-warning"></i>
        </button>
    </span>`;
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
    const row = table.row($(this).parents("tr"));
    const rowIdx = row.index();
    var rowData = table.row(rowIdx).data();
    mercadoFormSandbox.setData(rowData, rowData.id_mercado);
    mercadoFormSandbox.modalForm().show();
  };

  const _handlerDeleteAction = async () => {
    const row = table.row($(this).parents("tr"));
    const rowIdx = row.index();
    alertModal.show(MESSAGE.ELIMINAR, "danger", async (event) => {
      var rowData = table.row(rowIdx).data();
      await mercadoService.delete(rowData.id_mercado);
      reloadData();
    });
  };

  const init = () => {
    table = $("#example").DataTable({
      order: MercadoConsts.TABLE.ORDER,
      language: MercadoConsts.TABLE.LANG_MX,
      ajax: MercadoConsts.TABLE.AJAX,
      columns: MercadoConsts.TABLE.COLUMMS,
      columnDefs: _getColumndDefs(),
    });

    table.on("click", ".edit-btn", _handlerEditAction);
    table.on("click", ".delete-btn", _handlerDeleteAction);
  };

  const reloadData = () => {
    table.ajax.reload();
  };

  return { init, reloadData };
})();

mercadoTableSandbox.init();
