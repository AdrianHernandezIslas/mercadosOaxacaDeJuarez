const { ROUTE } = LocalConsts;

const localService = (() => {
  const create = async (body = {}) => {
    const { data, status } = await axios.post(ROUTE.CREATE_LOCAL, body);
    return { data, status };
  };

  const update = async (body = {}, id) => {
    const { data, status } = await axios.put(`${ROUTE.CREATE_LOCAL}/${id}`, body);
    return { data, status };
  };

  const _delete = async (id) => {
    const { data, status } = await axios.delete(`${ROUTE.CREATE_LOCAL}/${id}`);
    return { data, status };
  };

  return {
    create,
    update,
    delete: _delete,
  };
})();
