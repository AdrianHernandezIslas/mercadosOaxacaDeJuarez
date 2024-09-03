const fileFormSandbox = (() => {
  const init = () => {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll(".needs-validation");

    // Loop over them and prevent submission
    Array.from(forms).forEach((form) => {
      form.addEventListener(
        "submit",
        (event) => {
          event.preventDefault();
          if (!form.checkValidity()) {
            console.log("invalido");
            event.stopPropagation();
          }

          //form.classList.add("was-validated");
        },
        false
      );
    });
  };

  return {};
})();
