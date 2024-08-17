const { ROUTE } = MercadoConsts;

const mercadoService = (() => {
  const create = async (body = {}) => {
    const { data, status } = await axios.post(ROUTE.CREATE_MERCADO, body);
    return { data, status };
  };

  const update = async (body = {}, id) => {
    const { data, status } = await axios.put(`${ROUTE.CREATE_MERCADO}/${id}`, body);
    return { data, status };
  };

  const _delete = async (id) => {
    const { data, status } = await axios.delete(`${ROUTE.CREATE_MERCADO}/${id}`);
    return { data, status };
  };

  return {
    create,
    update,
    delete: _delete,
  };
})();
