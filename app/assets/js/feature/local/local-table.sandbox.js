const { MESSAGE } = LocalConsts;

const localTableSandbox = (() => {
  var table = null;

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
        targets: 6,
        data: "download_link",
        render: _handlerColumnAcciones,
      },
    ];
  };

  const _handlerEditAction = function () {
    const row = table.row($(this).parents("tr"));
    const rowIdx = row.index();
    var rowData = table.row(rowIdx).data();
    localFormSandbox.setData(rowData, rowData.id_local);
    localFormSandbox.modalForm().show();
  };

  const _handlerDeleteAction = async () => {
    const row = table.row($(this).parents("tr"));
    const rowIdx = row.index();
    alertModal.show(MESSAGE.ELIMINAR, "danger", async (event) => {
      var rowData = table.row(rowIdx).data();
      await localService.delete(rowData.id_local);
      reloadData();
    });
  };

  const init = () => {
    table = $("#example").DataTable({
      order: LocalConsts.TABLE.ORDER,
      language: LocalConsts.TABLE.LANG_MX,
      ajax: LocalConsts.TABLE.AJAX,
      columns: LocalConsts.TABLE.COLUMMS,
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

localTableSandbox.init();
