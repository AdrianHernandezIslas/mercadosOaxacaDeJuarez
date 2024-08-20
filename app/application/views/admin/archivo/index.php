<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería con Bootstrap 5</title>
    <?php include(APPPATH . 'views/templates/global/HeadTemplate.php'); ?>
</head>

<body>

    <div class="container mt-4">
        <form class="needs-validation" novalidate>
            <div class="row">
                <div class="col-10">
                    <div class="mb-3">
                        <input type="file" class="form-control" aria-label="file example" name="archivo" id="archivo" required>
                        <div class="invalid-feedback">El archivo es requerido</div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Subir</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- Gallery -->
        <div class="container">

            <h1 class="fw-light text-center text-lg-start mt-4 mb-0">Imagenes</h1>

            <hr class="mt-2 mb-5">

            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td> <a href="#" class="d-block mb-1 h-100">
                                <img class="img-fluid img-thumbnail" src="https://api-files-cn1f.onrender.com/api/v1/file/files/img/mercado/file_db0066f9-eaa6-4ac4-b4fb-9631c3f1479f.jpeg?width=400&height=300" alt="">
                            </a></td>
                        <td> <a href="#" class="d-block mb-1 h-100">
                                <img class="img-fluid img-thumbnail" src="https://api-files-cn1f.onrender.com/api/v1/file/files/img/mercado/file_c78b31a4-e2f8-4ebf-a9cb-ac68a5453be7.jpeg?width=400&height=300" alt="">
                            </a></td>
                        <td> <a href="#" class="d-block mb-1 h-100">
                                <img class="img-fluid img-thumbnail" src="https://api-files-cn1f.onrender.com/api/v1/file/files/img/mercado/file_5e8cd529-e801-4f44-abd5-3cf0599b71fc.jpeg?width=400&height=300" alt="">
                            </a></td>
                    </tr>
                    <tr>
                        <td> <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://api-files-cn1f.onrender.com/api/v1/file/files/img/mercado/file_60ac1fea-6fff-4e09-9cc3-4c209b001eaa.jpeg?width=400&height=300" alt="">
                            </a></td>
                        <td> <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://api-files-cn1f.onrender.com/api/v1/file/files/img/mercado/file_83521f96-ba49-407e-b30c-46c5664a9308.jpeg?width=400&height=300" alt="">
                            </a></td>
                        <td> <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://api-files-cn1f.onrender.com/api/v1/file/files/img/mercado/file_ca2224a2-5a5c-46f9-ae9b-7f70326ea237.jpeg?width=400&height=300" alt="">
                            </a></td>
                    </tr>
                    <tr>
                        <td> <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/400x300" alt="">
                            </a></td>
                        <td> <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/400x300" alt="">
                            </a></td>
                        <td> <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/400x300" alt="">
                            </a></td>
                    </tr>
                    <tr>
                        <td> <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/400x300" alt="">
                            </a></td>
                        <td> <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/400x300" alt="">
                            </a></td>
                        <td> <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/400x300" alt="">
                            </a></td>
                    </tr>

                </tbody>
            </table>

        </div>
        <!-- Gallery -->
    </div>

    <?php include(APPPATH . 'views/templates/global/ScriptTemplate.php'); ?>
    <script>
        (() => {

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    event.preventDefault()
                    if (!form.checkValidity()) {

                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()

        /*const arreglo = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        const tamaño = 3;

        const partes = Array.from({
                length: Math.ceil(arreglo.length / tamaño)
            },
            (_, i) => arreglo.slice(i * tamaño, i * tamaño + tamaño)
        );*/
    </script>
</body>

</html>