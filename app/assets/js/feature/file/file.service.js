const { ROUTE } = FileConsts;

const fileService = (() => {
    const upload = async (body = FormData) => {
      const { data, status } = await axios.post(ROUTE.FILE_UPLOAD, body,{
        headers: {
          'Content-Type': 'multipart/form-data', // Necesario para enviar FormData
        },
      });
      return { data, status };
    };
  
    return {
      upload
    };
})();