const fileTableSandbox = (() => {
  var table = null;

  const render = function (data) {
    return data
      ? `<a href="#" class="d-block mb-1 h-100">
            <img class="img-fluid img-thumbnail" src="https://api-files-cn1f.onrender.com/api/v1/file/${data.ruta}?width=400&height=300" alt="">
        </a>`
      : "";
  };
  const init = () => {
    table = $("#example").DataTable({
       
      ajax: {
        url: "/api/v1/archivo/by/locacion/1",
        dataSrc: function (json) {
          let result = [];
          for (let i = 0; i < json.length; i += 3) {
            result.push(json.slice(i, i + 3));
          }
          return result;
        },
      },
      columns: [
        {
          data: 0,
          render,
        },
        {
          data: 1,
          render,
        },
        {
          data: 2,
          render,
        },
      ],
      dom: 't<"bottom"ip><"clear">',
      paging: true,
      searching: false,
      info: false,
      pageLength: 2,
    });
  };

  return {init}
})();

fileTableSandbox.init();
