const apiFile = (() => {
  const myHeaders = new Headers();
  myHeaders.append("Content-Type", "application/json");

  const fileToBase64 = (file) => {
    return new Promise((resolve, reject) => {
      const reader = new FileReader();

      // Define la función que se ejecuta cuando la lectura está completa
      reader.onload = function (e) {
        // La URL de datos Base64 estará en e.target.result
        const base64String = e.target.result;
        resolve(base64String);
      };

      // Define la función que se ejecuta en caso de error
      reader.onerror = function (error) {
        reject(error);
      };

      // Lee el archivo como una URL de datos
      reader.readAsDataURL(file);
    });
  };

  const load = async ({file = "",destination = ""}) => {
    const raw = JSON.stringify({
      destination,
      file,
    });

    const requestOptions = {
      method: "POST",
      headers: myHeaders,
      body: raw,
    };

    const response = await fetch("https://api-files-cn1f.onrender.com/api/v1/file/", requestOptions);
    const data =  await response.json();
    return data;
  };

  return {
    fileToBase64,
    load
  };
})();
