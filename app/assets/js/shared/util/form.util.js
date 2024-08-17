const formUtil = (() => {
  const toObject = ($formElement) => {
    const formData = new FormData($formElement);
    const formObject = {};
    formData.forEach((value, key) => {
      formObject[key] = value;
    });
    return formObject;
  };
  return {
    toObject,
  };
})();
